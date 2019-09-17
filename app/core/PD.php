<?php
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;

class PD
{
	protected $ci,$crud;
	protected $config,$config_path;
	public $data = [];
	public $menu_id,
		   $no_prop,
		   $no_kab,
		   $no_kec,
		   $no_kel;
	public $table_pk = 'id',$table_name;
	public $base_path,$module_path,$asset_url,$module_url;		   
	public function __construct($base_path='')
	{
		$this->base_path = $base_path;
		$this->_init();
	}
	protected function _init_config(){
		$filename = strtolower(get_class($this)).'.yml';
		$filepath = $this->module_path . '/config/' . $filename;
		if(file_exists($filepath)){
			$this->config = Yaml::parse(file_get_contents($filepath));
			$this->config = $this->config['config'];
		}
	}
	protected function apply_config(){
		// print_r($this->config);
		//
		if(!empty($this->config['gc'])){
			if(!empty($this->config['gc']['methods'])){

				foreach($this->config['gc']['methods'] as $method => $args){
					if($method == 'display_as'){
						foreach ($args as $field => $caption) {
							$this->_c_call($method,[$field,$caption]);
						}
					}
					else if($method == 'field_type' || $method == 'set_rules'){
						foreach ($args as $field => $arr) {
							$param = array_merge([$field],$arr);

							$this->_c_call($method,$param);
						}
					}
					else{
						$this->_c_call($method,$args);
					}
				}
			}
		}
	}
	protected function _c_call($method,$args){
		if(!is_array($args)){
			$args = [$args];
		}
		if($method == 'field_type'){
			if($args[1]=='dropdown'){
				
				$dd_data = $args[2];
				$args[2] = $this->data[$dd_data];
				// print_r($this->data);
			}
		}
		call_user_func_array(array($this->crud, $method), $args);
		// }else{
		// 	call_user_func(array($this->crud, $method), $args);
		// }
		
	}
	protected function _init(){
		$this->ci =& get_instance();
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

		$this->crud = $this->new_crud();
		$this->crud->set_table($this->table_name);
		// INIT
		$fcpath     = realpath(dirname(APPPATH));	
		$base_path  = realpath(dirname($this->base_path));
		$slice_path = str_replace($fcpath, '', $base_path);
		$slice_path = str_replace('\\', '/', $slice_path);
		$slice_path = preg_replace('/^\//', '', $slice_path);
		$this->module_path = $slice_path;
		$this->module_url = site_url($slice_path);
		$this->asset_url = $this->module_url . '/assets/';

		$this->_init_config();
		
	}
	public function append_data(&$data){
		//echo gettype($data);
		// if(gettype($data) == 'ojbect'){
			foreach ($data as $key => $value) {
				$this->data[$key] = $value;
			}
		// }
		unset($data);	
	}

	public function get_cookie_filter(){
		$cookie_key = 'filter_' . strtolower(get_class($this));
		// return $cookie_key;
		$cookie_data = $this->ci->input->cookie($cookie_key);
		return (array)json_decode($cookie_data);
	}
	public function crud_apply_filter(){
		$filter = $this->get_cookie_filter();
		$this->crud->where("MONTH(".$this->table_name.".date) = '".$filter['bulan']."' AND YEAR(".$this->table_name.".date) = '".$filter['tahun']."'");
	}
	public function asset_url($target){
		return $this->asset_url . $target;
	}
	public function add_x_suffix($value,$row){
        return $value . ' x';
    
    }
	public function new_crud()
    {
        $db_driver = $this->ci->db->platform();
        $model_name = 'grocery_crud_model_'.$db_driver;
        $model_alias = 'm'.substr(md5(rand()), 0, rand(4, 15));

        $this->ci->load->library('Extended_Grocery_CRUD');
        $crud = new Extended_Grocery_CRUD();
        if (file_exists(APPPATH.'/models/'.$model_name.'.php')) {
            $this->ci->load->model('grocery_crud_model');
            $this->ci->load->model('grocery_crud_generic_model');
            $this->ci->load->model($model_name, $model_alias);
            $crud->basic_model = $this->{$model_alias};
        }
        // resolve HMVC set rule callback problem
        $crud->form_validation = $this->form_validation;
        return $crud;
    }

    public function download_xlsx($pk)
    {
   	
   	}

    public function fetch_row_download($pk)
    {
    	$this->ci->db->select("t.*,sp.nama_prop nama_provinsi,skab.nama_kab nama_kabupaten,skec.nama_kec nama_kecamatan,skel.nama_kel nama_kelurahan");
    	$this->ci->db->join('setup_prop sp','t.no_prop=sp.no_prop')
				     ->join('setup_kab skab','t.no_kab=skab.no_kab')
				     ->join('setup_kec skec','t.no_kec=skec.no_kec')
				     ->join('setup_kel skel','t.no_kel=skel.no_kel');

    	return  $this->ci->db->where(['t.'. $this->table_pk=>$pk])->get($this->table_name .' t')->row_array();
    }
    public function update_download_count($existing_count,$pk)
    {
    	$existing_count += 1;
    	$this->ci->db->where([$this->table_pk => $pk])->update($this->table_name,['download'=>$existing_count]);
    }
    public function get_camat()
	{
		return $this->ci->db->select('k.*, k.nama_pej nama,k.nip_pej nip')->where('no_kec',$this->no_kec)->get('setup_kec k')->row_array();
	}
/*-------------------------------------------------------------------------------------------------------------------------------------*/
	public function form_upload_data( )
	{
		$pk 		= $this->ci->input->post('pk');
		
		$detail 	= $this->ci->db->select($this->table_pk.',file')->where($this->table_pk,$pk)->get($this->table_name)->row_array();

		$already_uploaded = $detail['file'] != '' && file_exists('./public/documents/pindah_datang/'.strtolower(get_class($this)).'/'.$detail['file']);

		$data = array(
			'pk' => $pk,
			'upload_label' => ($already_uploaded ? 'Replace' : 'Upload'),
			'detail'=> $detail,
			'download_file_url' => site_url('public/documents/pindah_datang/'.strtolower(get_class($this)).'/'.$detail['file']),
			'already_uploaded' => $already_uploaded,
			'table_pk'=>$this->table_pk
		);

		$this->ci->twig->display('crud/form/upload_data.twig.php', $data);
	}
	public function process_upload_data( )
	{
		$pk = $this->ci->input->post($this->table_pk);
		if(empty($pk)){
			die();
		}
		$allowed_size = config_item('web_document_upload_max_size');
		$allowed_files = config_item('web_document_upload_allowed_file_types');

		$content =  '<br/>Data gagal di upload !'.
					'<br/>Pastikan jenis file yang anda aupload adalah .' . str_replace('|',', .',$allowed_files) . '<br/>'.
					'Pastikan ukuran file tidak lebih dari ' . $allowed_size . '<br/>';

		$pesan = $this->ci->twig->render('crud/alert/error.twig.php',array('content'=>$content));

		if(!empty($pk)){


			$this->ci->load->helper('file_uploader');

			header('Pragma: no-cache');
			header('Cache-Control: private, no-cache');
			header('Content-Disposition: inline; filename="files.json"');
			header('X-Content-Type-Options: nosniff');
			header('Access-Control-Allow-Origin: *');
			header('Access-Control-Allow-Methods: OPTIONS, HEAD, GET, POST, PUT, DELETE');
			header('Access-Control-Allow-Headers: X-File-Name, X-File-Type, X-File-Size');	
			
			$upload_dir = config_item('web_document_upload_path');

			$reg_exp = '/(\\.|\\/)('.$allowed_files.')$/i';		

			$max_file_size_ui = $allowed_size;
			$max_file_size_bytes = convert_bytes_ui_to_bytes($max_file_size_ui);
			
			$upload_dir = $upload_dir . '/pindah_datang/'.strtolower(get_class($this)).'/';

			if(!is_dir($upload_dir)){
				@mkdir($upload_dir);
			}	

			$options = array(
				'upload_dir' 		=> $upload_dir,
				'param_name'		=> 'file',
				'upload_url'		=> '',
				'accept_file_types' => $reg_exp,
				'max_file_size'		=> $max_file_size_bytes
			);
			$upload_handler = new UploadHandler($options);
			$uploader_response = $upload_handler->post();
			
			if(is_array($uploader_response))
			{
				foreach($uploader_response as &$response)
				{
					unset($response->delete_url);
					unset($response->delete_type);
				}
			}
						
			$data = array( 
				'success' => true,
				'files' =>  $uploader_response
			);
			$response = (array)$uploader_response[0];

			if(!isset($response['error'])){
				$detail = $this->ci->db->select($this->table_pk.',file')->where($this->table_pk,$pk)->get($this->table_name)->row_array();
				$old_filename = $upload_dir . $detail['file'];
				
				
				$entry['file'] 		= $response['name'];
				$entry['update_on']		= date('Y-m-d H:i:s');
				$entry['update_by']		= $this->ci->session->userdata('log_userid');
				// $pk = $this->ci->input->post($this->ci->tablePk);
				// $this->ci->db->trans_start();  
				$this->ci->db->where($this->table_pk,$pk)->update($this->table_name,$entry);
				// $this->ci->db->trans_complete();

				$content = 'Dokuman berhasil di upload !';
				$response['error'] = false;
				$pesan = $this->ci->twig->render('crud/alert/success.twig.php',array('content'=>$content));
				$response['message'] = $pesan;
			}else{
				$response['message'] = $pesan;
			}
		}
		echo json_encode($response);
		$this->ci->session->set_flashdata('pesan',$pesan);
	}
/***************************************************************************************************************************************/	

}