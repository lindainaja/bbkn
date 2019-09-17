<?php
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;
class Crud_Controller_Base extends MX_Controller
{
	
	/*
	property in developments
	*/
	protected $orderFields = array();
	protected $displayFields = array();
	protected $behaviour = 'default';
	protected $methodBehaviours = array();
	protected $disableMethods = array();
	protected $moduleDir = '';
	/*
	This is auto set for behaviours
	*/
	public $menu,
		   $no_prop,
		   $no_kab,
		   $no_kec,
		   $no_kel;

	/*
	@array <required>
	Field that to set under post insert and update
	*/	   
	protected $autosetPostKeys = array(
		'add'	=> array(),
		'edit'	=> array(),
	);

	
	/*
	@bool <optional> default is true
	include no_prop,no_kab,no_kec di form entry
	*/
	protected $autosetIncludeNoPropKabKec = true;

	/*
	@bool
	include syarat di form entry
	*/
	protected $autosetIncludeSyarat = true;
	protected $currencyFields = array();
	
	/*
	@array <optional>
	fields wich must be formated to sql_date
	*/
	protected $dateFields  			= array('date');
	/*
	@array <optional>
	field which must be set with current date
	*/
	protected $currentDateFields  	= array('create_on','update_on');
	/*
	@array <optional>
	field which must be set with syarat library
	*/
	protected $syaratFields  	 	= array('syarat');
	/*
	@array <optional>
	field which must be set with session userid
	*/
	protected $sessionUserIdFields  = array('create_by','update_by');

	/*
	@string <optional>
	database table name to query column fields
	*/
	protected $tableName = null;
	
	/*
	@string <required>
	database table primary key used to fetch detail and delete
	*/
	protected $tablePk = 'id';

	protected $yamlPropertyFilePath;
	
	/*
	@string <required>
	Model name to be loaded 	
	*/	   
	public $modelName,
	/*
	menu id used in role menu
	*/
	$menuId,
	/*
	panel title to display in grid
	*/
	$title,
	/*
	module name , especially menu url
	*/
	$func,
	/*
	List of menu mechanism id to check for role
	*/
	$mechIds;

	/*
	Mech flags to query with access control
	*/
	public $mechFlags = array(
		'List Data' 	=> 'flag_data',
		'Add Data' 		=> 'flag_add_data',
		'Tambah Data' 	=> 'flag_add_data',
		'Edit Data' 	=> 'flag_modify_data',
		'Hapus Data' 	=> 'flag_delete_data',
	);
	/*
	Additional Mech flags to be appended in to the default Mech flags
	*/
	protected $addMechFlags = array();
	protected function _setup($properties){
		foreach ($properties as $property => $value) {
			$this->{$property} = $value;
		}
	}
	protected function _setupFromYml(){

		try {
		    $config = Yaml::parse(file_get_contents($this->ymlPropertyFilePath));

		    // print_r($config['properties']);
		    $this->_setup($config['properties']);
		} catch (ParseException $e) {
		    printf($this->ymlPropertyFilePath ." Unable to parse the YAML string: %s", $e->getMessage());
		    die();
		}
	}
	public function __construct($moduleDir = '')
	{
		$this->session->sess_expiration = 14400; // 4 Hours
		if(!empty($moduleDir)){
			$this->moduleDir = $moduleDir;
		}
		parent::__construct();
		
		$this->ymlPropertyFilePath =  $this->moduleDir  .  '/../config/properties.yml';

		if(!file_exists($this->ymlPropertyFilePath)){
			if( empty($this->autosetPostKeys['add']) || empty($this->autosetPostKeys['edit']) || empty($this->modelName) || empty($this->tablePk) || empty($this->func) || empty($this->mechIds) || empty($this->menuId) ){
				echo 'Some required roperties must be set in controllers' . "\n";
				echo 'Please read ' . __FILE__ . "\n";
				throw new Exception("Error Processing Request", 1);
			}
		}else{
			$this->_setupFromYml();
		}
		
		$modules_dir = realpath(__DIR__ . '/../modules/' . $this->func .'/views/');

		// $twig_template_dir = $this->config->item('twig_template_dir');
		// $this->config->set_item('twig_template_dir', array($twig_template_dir,$modules_dir) );

		// $this->load->library('twig');
		$this->twig->getEnv()->getLoader()->addPath($modules_dir);
		$this->load->model($this->modelName);
		$this->menu = search_by_column(get_menu_mech(),'menuid',$this->menuId);

		menu_check_role($this->menu);

		$this->_initMechFlags();

		$this->no_prop		= $this->session->userdata('log_prop');
		$this->no_kab		= $this->session->userdata('log_kab');
		$this->no_kec		= $this->session->userdata('log_kec');
		$this->no_kel		= $this->session->userdata('log_kel');
	}

	private function _initMechFlags(){
		foreach ($this->mechIds as $id) {
			$this->db->or_where('id',$id);
		}
		$mechList = $this->db->select('id,description')->get('setup_menu_mechanism')->result_array();
		// print_r($mechList);

		foreach ($mechList as $mech) {
			$description = $mech['description'];
			$flag = 'flag_data';
			if(isset($this->mechFlags[$description])){
				$flag = $this->mechFlags[$description];
			}
			// echo $flag."\n";
			if(count(search_by_column($this->menu,'menu_mechanismid',$mech['id'] ))>0){ 
				$this->{$flag} = 1;
			} else { 
				$this->{$flag} = 0;
			}
		}
	}

	private function _attachBehaviour($section,$method){
		$behaviour_file_path = __DIR__ . '/crud_behaviour/' . $this->behaviour . '/' . $section . '/' . $method . '.php';
		include $behaviour_file_path;
	}

	

	protected function _doAutoSetPostKeys($mode,&$entry){
		foreach ($this->autosetPostKeys[$mode] as $key ) {
			$entry[$key] = $this->input->post($key);

			if(in_array($key, $this->dateFields)){
				$entry[$key] = format_date_us($entry[$key]);
			}

			if(in_array($key, $this->currentDateFields)){
				$entry[$key] = date('Y-m-d H:i:s');
			}

			if(in_array($key, $this->sessionUserIdFields)){
				$entry[$key] = $this->session->userdata('log_userid');
			}

			if(in_array($key, $this->syaratFields) && $this->autosetIncludeSyarat){
				$entry[$key] = $this->syarat->get_input();
			}
			if(in_array($key, $this->currencyFields) ){
				$entry[$key] = clean_separator_2($entry[$key]);
			}
		}
	}
}