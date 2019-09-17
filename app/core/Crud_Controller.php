<?php


class Crud_Controller extends Crud_Controller_Base
{
	protected $includeInfoLurahInDownload = true;
	protected $use_export_libraries = false;

	public function __construct($moduleDir = '')
	{
		parent::__construct($moduleDir);
	}
	
	public function index(){
		$this->template->add_css('public/assets/bootstrap-fileupload/bootstrap-fileupload.css');
		$this->template->add_js('public/assets/bootstrap-fileupload/bootstrap-fileupload.min.js');

		##datepicker
		$this->template->add_css('public/assets/bootstrap-datepicker/css/datepicker.css');
		$this->template->add_js('public/assets/bootstrap-datepicker/js/bootstrap-datepicker.js');

		$this->template->add_css('public/assets/data-tables/bootstrap3/dataTables.bootstrap.css');
		$this->template->add_js('public/assets/data-tables/jquery.dataTables.js');
		$this->template->add_js('public/assets/data-tables/bootstrap3/dataTables.bootstrap.js');
		$this->template->add_js('public/assets/data-tables/soring/date-eu.js');

		$this->template->add_css('public/addon/select2/select2.min.css');
		$this->template->add_js('public/addon/select2/select2.full.min.js');

		$this->template->add_js('app/modules/'.$this->func.'/assets/js/'.'list.js');
		$this->template->add_js('app/modules/'.$this->func.'/assets/js/'.'action.js');

		$this->template->add_title(strtoupper($this->title));


		$breadcrumb = array(
			'dashboard'	  => $this->breadcrumbs['index'],
			$this->func   => $this->title,
		);
		$this->template->add_breadcrumb($breadcrumb);

		$data['kel'] 			= kel_2_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
		$data['flag_add_data']	= $this->flag_add_data;
		$data['subject'] 		= $this->title;
		$data['title'] 		    = $this->title;
		$data['log_kel'] 		= $this->session->userdata('log_kel');
		$data['export_url'] 	= site_url($this->func.'/export_data');
		$data['default_filter_date_value'] = date('m/Y');


		$data['dropdown_filter_no_kel'] = form_dropdown('filter_no_kel',$data['kel'],$data['log_kel'],'id="filter_no_kel" class="form-control select2" style="width:100%" ');

		$content = $this->twig->render('list.twig.php',$data);

		$this->template->write('content',$content);
		$this->template->render();
	}

	public function load_data(){
		if(!$this->flag_data){ 
			menu_check_role(array());
			exit;
		}
		$no_kel  = $this->input->post('no_kel');

		$filter_date = explode('/',$this->input->post('filter_date'));
		$bln = '';
		$thn = '';
		if(count($filter_date)==2){
			$bln = $filter_date[0];
			$thn = $filter_date[1];
		}
		if($this->input->post('page') !=NULL) {
			$data['page'] = $this->input->post('page');
		} else {
			$data['page'] = 0;
		}
		$results 	= $this->{$this->modelName}->list_data($this->no_prop,$this->no_kab,$this->no_kec,$no_kel,$bln,$thn);
		$data['results'] = $results;
		
		$data['pesan_flash_data'] = $this->session->flashdata('pesan');
		// $data['gender'] = config_item('gender');
		$data['count_result'] = count($results);

		$data['download_url'] = site_url($this->func.'/download/id').'/';
		$data['flag_modify_data'] = $this->flag_modify_data;
		$data['flag_delete_data'] = $this->flag_delete_data;
		if(method_exists($this, '_preLoadData')){
			$this->_preLoadData($data);
		}

		$this->twig->display('load_data.twig.php',$data);
	}

	public function download(){
		$pk = $this->uri->segment(4);

		$entry['flag_id']			= $pk;
		$entry['flag']				= $this->func;
		$entry['create_on']			= date('Y-m-d H:i:s');
		$entry['create_by']			= $this->session->userdata('log_userid');

		$this->db->trans_start(); /*untuk rollback jika data gagal*/
		$this->load->model('m_download');
		$total = $this->m_download->insert_data($entry);
		$this->db->trans_complete();

		$entry2['download']			= $total;

		$this->db->trans_start(); 
		$this->{$this->modelName}->update_data($entry2,$pk);
		$this->db->trans_complete();

		$detail = $this->{$this->modelName}->detail_data($pk);
		$data['text'] = '';
		$data['detail'] = $detail;
		
		header("Content-type: application/vnd.ms-word");
    	header("Content-Disposition: attachment;Filename=".$this->func."_".date('Ymdhis').".doc");

    	if($this->includeInfoLurahInDownload){
    		$data['text_1'] = 'An Lurah '.ucwords(strtolower($detail['nama_kel']));
			$data['text_2'] = $detail['ttd_jabatan'];

			if(strcasecmp($detail['ttd_jabatan'], 'Lurah '.$detail['nama_kel'])==0){
				$data['text_1'] = 'Lurah '.ucwords(strtolower($detail['nama_kel']));
				$data['text_2'] = '';
			}
    	}

    	
    	if(method_exists($this, '_preDownload')){
    		$this->_preDownload($data);
    	}

		$this->twig->display('download.twig.php',$data);
	}

	public function export_data($a="",$b="",$c=""){
		if($this->use_export_libraries){
			return $this->export_data_xlsx($a,$b,$c);
		}
		$no_kel 		= $this->input->post('filter_no_kel');
		$filter_date = explode('/',$this->input->post('filter_date'));
		$nama_bln = '';
		$nama_thn = '';
		$bln = '';
		$thn = '';
		if(count($filter_date)==2){
			$bln = $filter_date[0];
			$thn = $filter_date[1];
			$arr_bln = config_item('bulan');
			$nama_bln = 'BULAN '.strtoupper($arr_bln[number_format($bln)]);
			$nama_thn = 'TAHUN '.$thn;
		}

		$results = $this->{$this->modelName}->list_data($this->no_prop,$this->no_kab,$this->no_kec,$no_kel,$bln,$thn);

		$data = array(
			'default_nama_prop' => config_item('default_nama_prop'),
			'default_nama_kab' => config_item('default_nama_kab'),
			'default_nama_kec' => config_item('default_nama_kec'),
			'title'=>$this->title
		);

		$data['nama_bln']	= $nama_bln;
		$data['nama_thn']	= $nama_thn;
		$data['results']	= $results;
		$data['count_result']	= count($results);

		if(method_exists($this, '_preExport')){
			$this->_preExport($data);
		}


		$this->twig->display('export_data.twig.php',$data);

		$name = $this->func."_" . date('YmdHis');

		header("Content-type: application/x-msdownload");
		header("Content-Disposition: attachment; filename=$name.xls");
		header("Pragma: no-cache");
		header("Expires: 0");
	}

	public function export_data_xlsx($a,$b,$c)
    {
        $no_kel         = $this->input->post('filter_no_kel');
        $filter_date = explode('/',$this->input->post('filter_date'));
        $nama_bln = '';
        $nama_thn = '';
        $bln = '';
        $thn = '';
        if(count($filter_date)==2){
            $bln = $filter_date[0];
            $thn = $filter_date[1];
            $arr_bln = config_item('bulan');
            $nama_bln = 'BULAN '.strtoupper($arr_bln[number_format($bln)]);
            $nama_thn = 'TAHUN '.$thn;
        }

        $results = $this->{$this->modelName}->list_data($this->no_prop,$this->no_kab,$this->no_kec,$no_kel,$bln,$thn);

        $data = array(
            'default_nama_prop' => config_item('default_nama_prop'),
            'default_nama_kab' => config_item('default_nama_kab'),
            'default_nama_kec' => config_item('default_nama_kec'),
            'title'=>$this->title
        );

        $data['nama_bln']   = $nama_bln;
        $data['nama_thn']   = $nama_thn;
        $data['results']    = $results;
        $data['count_result']   = count($results);

        // if(method_exists($this, '_preExport')){
        //     $this->_preExport($data);
        // }


        // $this->twig->display('export_data.twig.php',$data);

        $filename = $this->func."_" . date('YmdHis').".xlsx";

        $this->load->library('report');
        $this->report->setData($data);
        $this->report->create($filename);
        // print_r($data);
    }
	

	public function form_upload_data( )
	{
		$pk 		= $this->input->post($this->tablePk);
		$detail 	= $this->{$this->modelName}->detail_data($pk);
		$already_uploaded = $detail['file'] != '' && file_exists('./public/documents/'.$this->func.'/'.$detail['file']);

		$data = array(
			'pk' => $pk,
			'upload_label' => ($already_uploaded ? 'Replace' : 'Upload'),
			'detail'=> $detail,
			'download_file_url' => site_url('public/documents/'.$this->func.'/'.$detail['file']),
			'already_uploaded' => $already_uploaded,
			'table_pk'=>$this->tablePk
		);

		$this->twig->display('crud/form/upload_data.twig.php', $data);
	}
	public function process_upload_data( )
	{
		$pk = $this->input->post($this->tablePk);
		if(empty($pk)){
			die();
		}
		$allowed_size = config_item('web_document_upload_max_size');
		$allowed_files = config_item('web_document_upload_allowed_file_types');

		$content =  '<br/>Data gagal di upload !'.
					'<br/>Pastikan jenis file yang anda aupload adalah .' . str_replace('|',', .',$allowed_files) . '<br/>'.
					'Pastikan ukuran file tidak lebih dari ' . $allowed_size . '<br/>';

		$pesan = $this->twig->render('crud/alert/error.twig.php',array('content'=>$content));

		if(!empty($pk)){


			$this->load->helper('file_uploader');

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
			
			$upload_dir = $upload_dir . '/' . $this->func . '/';

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
				$detail = $this->{$this->modelName}->detail_data($pk);
				
				@unlink('public/documents/'.$this->func.'/'.$detail['file']);
				
				$entry['file'] 		= $response['name'];
				$entry['update_on']		= date('Y-m-d H:i:s');
				$entry['update_by']		= $this->session->userdata('log_userid');
				$pk = $this->input->post($this->tablePk);
				$this->db->trans_start();  
				$this->{$this->modelName}->update_data($entry,$pk);
				$this->db->trans_complete();

				$content = 'Dokuman berhasil di upload !';

				$pesan = $this->twig->render('crud/alert/success.twig.php',array('content'=>$content));
			}
		}
		echo json_encode($response);
		$this->session->set_flashdata('pesan',$pesan);
	}


	public function process_add_edit_data($value='')
	{
		$pk  = $this->input->post($this->tablePk);

		if($this->autosetIncludeNoPropKabKec){
			$no_prop = $this->no_prop;
			$no_kab  = $this->no_kab;
			$no_kec  = $this->no_kec;

			$entry['no_prop']	= $no_prop;
			$entry['no_kab']	= $no_kab;
			$entry['no_kec']	= $no_kec;
		}
		
		if($pk){
			
			$this->_doAutoSetPostKeys('edit',$entry); 
			if(method_exists($this, '_preAddEditData')){
				$this->_preAddEditData($entry);
			}
			$this->db->trans_start();  
			$this->{$this->modelName}->update_data($entry,$pk);
			$this->db->trans_complete();
		} else {
			
			$this->_doAutoSetPostKeys('add',$entry);
 			if(method_exists($this, '_preAddEditData')){
				$this->_preAddEditData($entry);
			}

			$this->db->trans_start();  
			$pk = $this->{$this->modelName}->insert_data($entry);
			$this->db->trans_complete();
		}

		if(method_exists($this, '_afterAddEditData')){
			$this->_afterAddEditData($pk, $entry);
		}
		$data[$this->tablePk] = $pk;
		$data['id'] = $pk;

		echo json_encode($data);



		$content = 'Data berhasil di simpan!';

		$pesan = $this->twig->render('crud/alert/success.twig.php',array('content'=>$content));

		$this->session->set_flashdata('pesan',$pesan);
	}

	public function delete_data(){
		if(!$this->flag_delete_data)
		{ 
			menu_check_role(array());
			exit;
		}
		$pk = $this->input->post($this->tablePk);

		$entry['archive']			= 1;
		$entry['update_on']			= date('Y-m-d H:i:s');
		$entry['update_by']			= $this->session->userdata('log_userid');

		$this->db->trans_start(); 
		$this->{$this->modelName}->update_data($entry,$pk);
		$this->db->trans_complete();

		$content = 'Data berhasil di hapus !';

		$pesan = $this->twig->render('crud/alert/success.twig.php',array('content'=>$content));
		$this->session->set_flashdata('pesan',$pesan);
	}
}