<?php
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;
class Crud_Main 
{
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
	public
	/*
	panel title to display in grid
	*/
	$title,
	/*
	module name , especially menu url
	*/
	$func,

	$no_prop,
    $no_kab,
    $no_kec,
    $no_kel;

    /*
	@array <required>
	Field that to set under post insert and update
	*/	   
	protected $autosetPostKeys = array(
		'add'	=> array() 
	);

	/*
	@array <required>
	Set this field to default values
	*/
	protected $setDefaultValues = array(

	);

	protected $validationRules = array();

	protected $ymlPropertyFilePath = '';

	protected $CI;
	
	// protected $_cwd;

	function __construct()
	{

		$this->CI =& get_instance();
		// $this->CI->{$this->func} = $this;
		// $this->_cwd = $dir;

		$this->ymlPropertyFilePath = APPPATH . 'modules/main/config/properties/' . get_class($this) . '.yml';
		// echo realpath($dir);
		if(file_exists($this->ymlPropertyFilePath)){
			$this->_setupFromYml();
		}else{
			// echo $this->ymlPropertyFilePath . "NF\n";
		}

		$this->no_prop = config_item('default_no_prop');
		$this->no_kab = config_item('default_no_kab');
		$this->no_kec = config_item('default_no_kec');
		$this->no_kel = config_item('default_no_kel');

		$this->setDefaultValues['no_kel'] = $this->no_kel;
		$this->setDefaultValues['no'] = '-';
		$this->setDefaultValues['date'] = date('Y-m-d');

		$this->setDefaultValues['ttd_nama'] = '';
		$this->setDefaultValues['ttd_jabatan'] = '';
		$this->setDefaultValues['ttd_nip'] = '';


		$this->setDefaultValues['pp_nama'] = '';
		$this->setDefaultValues['pp_jabatan'] = '';
		$this->setDefaultValues['pp_nip'] = '';


		$this->setDefaultValues['rt_nama'] = '';
		$this->setDefaultValues['rt_jabatan'] = '';
		$this->setDefaultValues['rt_nip'] = '';

		$this->setDefaultValues['ttd_kl_nama'] = '';
		$this->setDefaultValues['ttd_kl_jabatan'] = '';
		$this->setDefaultValues['ttd_kl_nip'] = '';

		$this->setDefaultValues['kl_nama'] = '';
		$this->setDefaultValues['kl_jabatan'] = '';
		$this->setDefaultValues['kl_nip'] = '';


		$this->setDefaultValues['status_doc'] = 'pengajuan';

		
	}
	protected function _setupFromYml(){

		try {
		    $config = Yaml::parse(file_get_contents($this->ymlPropertyFilePath));

		    // print_r($config['properties']);
		    $this->_setup($config['properties']);
		} catch (ParseException $e) {
		    printf("Unable to parse the YAML string: %s", $e->getMessage());
		}
	}
	protected function _setup($properties){
		foreach ($properties as $property => $value) {
			$this->{$property} = $value;
		}
	}
	protected function setDefaultValueField($field,$value)
	{
		$this->setDefaultValues[$field] = $value;
	}

	protected function _doAutoSetPostKeys($mode,&$entry){
		foreach ($this->autosetPostKeys[$mode] as $key ) {
			$entry[$key] = $this->CI->input->post($key);
			
			if(in_array($key, $this->dateFields)){
				$entry[$key] = format_date_us($entry[$key]);
			}

			if(in_array($key, $this->currentDateFields)){
				$entry[$key] = date('Y-m-d H:i:s');
			}

			if(in_array($key, $this->sessionUserIdFields)){
				$entry[$key] = '100';
			}

			if(!empty($this->setDefaultValues[$key])){
				$entry[$key] = $this->setDefaultValues[$key];
			}
			if(in_array($key, $this->currencyFields) ){
				$entry[$key] = clean_separator_2($entry[$key]);
			}
		}

	}

	public function process($value='')
	{
		$pk  = $this->CI->input->post($this->tablePk);

		if($this->autosetIncludeNoPropKabKec){
			$no_prop = $this->no_prop;
			$no_kab  = $this->no_kab;
			$no_kec  = $this->no_kec;

			$entry['no_prop']	= $no_prop;
			$entry['no_kab']	= $no_kab;
			$entry['no_kec']	= $no_kec;
			
		}
		if(method_exists($this, '_preAddEditData')){
			$this->_preAddEditData($entry);
		}
		if($pk){
			
			// $this->_doAutoSetPostKeys('edit',$entry); 

			// $this->CI->db->trans_start();  
			// $this->{$this->modelName}->update_data($entry,$pk);
			// $this->CI->db->trans_complete();
		} else {
			
			$this->_doAutoSetPostKeys('add',$entry);
 

			$this->CI->db->trans_start();  
			$pk = $this->insert_data($entry);
			$this->CI->db->trans_complete();
		}

		if(method_exists($this, '_afterAddEditData')){
			$this->_afterAddEditData($pk, $entry);
		}
		$data[$this->tablePk] = $pk;

		echo json_encode($data);



		$content = 'Data anda berhasil di simpan, kami akan segera proses!';

		$pesan = $this->CI->twig->render('crud/alert/success.twig.php',array('content'=>$content));

		$this->CI->session->set_flashdata('pesan',$pesan);
	}

	protected function insert_data($entry){
		// print_r($entry);
		if(count($entry)>0){
			$this->CI->db->insert($this->tableName,$entry);
			return $this->CI->db->insert_id();
		}
	}
}