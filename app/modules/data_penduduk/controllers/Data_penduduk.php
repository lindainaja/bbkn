<?php
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;
class Data_penduduk extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		
		// $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
		$this->load->library('datatables_ssp');
		
		$this->load->model('m_data_penduduk');
		$this->title = 'Data Penduduk';
		$this->func = 'data_penduduk';

		$this->menu = search_by_column(get_menu_mech(),'menuid',59);//menu kematian
		##check akses menu
		menu_check_role($this->menu);
		
		if(count(search_by_column($this->menu,'menu_mechanismid',158))>0){##List Data
			$this->flag_data = 1;
		} else {##tidak diizinkan
			$this->flag_data = 0;
		}

		$this->no_prop		= $this->session->userdata('log_prop');
		$this->no_kab		= $this->session->userdata('log_kab');
		$this->no_kec		= $this->session->userdata('log_kec');
		$this->no_kel		= $this->session->userdata('log_kel');

		// print_r($config);
		$this->valid_headers =   array( 'NIK',	
										'NAMA',	
										'JK',	
										'TMPT_LHR',	
										'TGL_LHR',	
										'GDR',	
										'AGAMA',	
										'STATUS',	
										'SHDK',	
										'PDDK_AKHIR',	
										'PEKERJAAN',	
										'NAMA_IBU',	
										'NAMA_AYAH',	
										'NO_KK',	
										'NAMA_KEP_KEL',	
										'ALAMAT',	
										'NAMA_PROP',	
										'NAMA_KAB',	
										'NAMA_KEC',	
										'NAMA_KEL',	
										'LINGKUNGAN',	
										'RT',	
										'RW',	
										'TELP' );
		$this->remap_headers = array(
			'tmpt_lhr' => 'tmpt_lahir', 
			'tgl_lhr' => 'tgl_lahir', 
			'pddk_akhir' =>'ppdk_akhir'
		);
	}

	function index() {
		
		##datepicker
		$this->template->add_css('public/assets/bootstrap-fileupload/bootstrap-fileupload.css');
		$this->template->add_js('public/assets/bootstrap-fileupload/bootstrap-fileupload.min.js');

		$this->template->add_css('public/addon/select2/select2.min.css');
		$this->template->add_js('public/addon/select2/select2.full.min.js');

		$this->template->add_js('public/assets/jquery-validation/dist/jquery.validate.min.js');

		$this->template->add_js('app/modules/'.$this->func.'/assets/js/'.'list.js');
		$this->template->add_js('app/modules/'.$this->func.'/assets/js/'.'action.js');


		$this->template->add_title(strtoupper($this->title));
		$breadcrumb = array(
			'dashboard'	=> 'Beranda',
			$this->func 	=> $this->title,
		);
		$this->template->add_breadcrumb($breadcrumb);

		if(!$this->session->userdata($this->func)) {
			$arr_sess = array(
					$this->func => array(
							'page' 			=> "",
							'sortby'		=> "mp.nik",
							'sortorder' 	=> "DESC",
							'keyword' 		=> ""
					),
			);
			$this->session->set_userdata($arr_sess);
		}
		
		$sample = $this->session->userdata($this->func);

		$data['page'] = $sample['page'] == "" ? "0" : $sample['page'];
		$data['sortby'] = $sample['sortby'] == "" ? "mp.nik" : $sample['sortby'];
		$data['sortorder'] = $sample['sortorder'] == "" ? "DESC" : $sample['sortorder'];
		$data['keyword'] = $sample['keyword'] == "" ? "" : $sample['keyword'];


		$this->template->add_js('$(document).ready(function(){
					$("#hid_paging").val("'.$data['page'].'");
					$("#hid_sort_by").val("'.$data['sortby'].'");
					$("#hid_sort_order").val("'.$data['sortorder'].'");
					$("#txt_keywords").val("'.clean_char_search($data['keyword']).'");

					load_data('.$data['page'].');
                });
				','embed');


		$data['kel'] 	= kel_2_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);

		$this->template->write_view('content',$this->func.'/list',$data);
		$this->template->render();
	}
	
    function load_data() {
		if(!$this->flag_data){##jika tidak mendapat akses
			menu_check_role(array());
			exit;
		}
        
		if($this->input->post('page') !=NULL) {
			$data['page'] = $this->input->post('page');
		} else {
			$data['page'] = 0;
		}

		$no_kel 	= $this->input->post('no_kel');

		$data['sort_by'] 	= isset($_POST['sort_by']) ? $_POST['sort_by'] : "mp.nik";
		$data['sort_order']	= isset($_POST['sort_order']) ? $_POST['sort_order'] : "DESC";
		$data['keywords']	= isset($_POST['keywords']) ? $_POST['keywords'] : "";

		$arr_sess = array(
				$this->func => array(
						'page' 			=> $data['page'],
						'sortby'		=> $data['sort_by'],
						'sortorder' 	=> $data['sort_order'],
						'keyword' 		=> $data['keywords']
				),
		);
		$this->session->set_userdata($arr_sess);
		$data['result'] 			= $this->m_data_penduduk->list_data($data['page'],$data['sort_by'],$data['sort_order'],$data['keywords'],$no_kel);
		$jumlah 		 			= $this->m_data_penduduk->jumlah_data($data['keywords'],$no_kel);

		$config['base_url']			= base_url() . 'index.php/'.$this->func.'/load_data/';
		$config['post_var'] 		= $this->input->post('page');
		$config['per_page'] 		= $this->config->item('page_num_setup');
		$config['first_link'] 		= 'First';
		$config['last_link'] 		= 'Last';
		$config['full_tag_open'] 	= '<div class="pagination pagination-colory">';
		$config['full_tag_close'] 	= '</div>';
		$config['total_rows'] 		= $jumlah;

		$this->ajax_pagination->initialize($config);
		$data['pagination'] = $this->ajax_pagination->create_links();
		$data['fields'] = array(
				'mp.nik'		=> 'Nik',
				'mp.nama'	 	=> 'Nama',
				'mp.jk'	 		=> 'Jenis Kelamin',
				'mp.tmpt_lahir'	=> 'TTL',
				'mp.agama'	 	=> 'Agama',
				'mp.status'	 	=> 'Status',
		);

		$url = $this->func.'/index';

		$html = $this->load->view($this->func.'/load_data', $data);
		echo $html;
    }


	function form_import(){
		$kel		 	= kel_2_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
		$perpage = array(
			'50' => '50',
			'100' => '100',
			'250' => '250',
			'500' => '500',
			'1000' => '1000',
			'1500' => '1500',
			'2000' => '2000',
			'5000' => '5000'
		);
		$thread = array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
			'6' => '6',
			'7' => '7',
			'8' => '8',
			'9' => '9',
			'10' => '10',
		);
		$html = '<form class="form-horizontal" method="post" enctype="multipart/form-data" action="#" id="form_data_penduduk">';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Kelurahan <span class="require">*</span></label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= form_dropdown('no_kel',$kel,$this->session->userdata('log_kel'),'id="no_kel" class="select2 form-control" style="width:100%" ');
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">File <span class="require">*</span></label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="input-group">
                    <div class="form-control uneditable-input">
                        <!--i class="fa fa-file fileupload-exists"></i-->
                        <span class="fileupload-preview"></span>
                    </div>
                    <div class="input-group-btn">
                        <a class="btn bun-default btn-file">
                            <span class="fileupload-new">Pilih file</span>
                            <span class="fileupload-exists">Ganti</span>
                            <input type="file" id="file" name="file" class="file-input"/>
                        </a>
                        <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Hapus</a>
                    </div>
                </div>
            </div>
			<span><em>Accept : xls,xlsx</em></span>
			';
			
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Perpage <span class="require">*</span></label>';
		$html .= '<div class="col-sm-4 col-lg-4 controls">';
		$html .= form_dropdown('perpage',$perpage,'250','id="perpage" class="select2 form-control" style="width:100%" ');
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Thread <span class="require">*</span></label>';
		$html .= '<div class="col-sm-4 col-lg-4 controls">';
		$html .= form_dropdown('thread',$thread,'2','id="thread" class="select2 form-control" style="width:100%" ');
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group"><br/><br/>';
		$html .= '<div class="col-sm-3 col-lg-3 controls">';
		$html .= '</div>';
		$html .= '<div class="col-sm-9 col-lg-9 controls">';
		$html .= '<a class="btn btn-yellow btn-outlined pull-riaght" onclick="close_form()"><i class="fa fa-arrow-circle-left"></i> Close</a>&nbsp;&nbsp;&nbsp;';
		$html .= '<button class="btn btn-success btn-outlined pull-aright" id="btn_upload" type="button"><i class="fa fa-download"></i> GO!</button>';
		$html .= '</div>';
		$html .= '</div>';


		$html .= '</form>';
		
		echo $html;
	}

	private function _process_upload(){
		$upload_dir = config_item('web_import_data_penduduk_upload_path');
    	$this->load->helper('file_uploader');

    	$this->load->helper('file');
    	$allowed_files = config_item('web_import_data_penduduk_upload_allowed_files');
		$reg_exp = '/(\\.|\\/)('.$allowed_files.')$/i';		

		$max_file_size_ui = config_item('web_import_data_penduduk_upload_max_size');

		$max_file_size_bytes = convert_bytes_ui_to_bytes($max_file_size_ui);
	
		$options = array(
			'upload_dir' 		=> $upload_dir,
			'param_name'		=> 'file',
			'upload_url'		=> site_url('data_penduduk/show/imported').'/',
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
		if(count($uploader_response) > 0){
			// OK UPLOAD PROCESSED
			$response = $uploader_response[0];
			// UPLOAD HAS ERROR
			if(isset($response->error)){

				//
				echo json_encode(array('success' => false, 'msg' => $response->error));
				return ;
			}

			// CONTINUE PROCESSING
			return $this->_do_import($response);

		}
		
	}
	private function _check_document_structure($headers_tmp){
		// CHECK DOCUMENT STRUCTURE
		// PARSE HEADER
		
		// 
		$valid_headers = $this->valid_headers;
		$valid_header = 0;
		// $index = 0;
		foreach ($valid_headers as $index => $header) {
			if(trim($header) == $headers_tmp[$index]){
				$valid_header += 1;
			}
			// $index += 1;
		}

		if($valid_header == count($valid_headers)){
			// echo "DATA HEADER IS OK\n";
			return true;
		}
		else{
			$message  = "File yang anda unggah tidak benar\n";
			$message .=  "Jumlah header valid ($valid_header) kurang dari valid(" . count($valid_headers) . ")\n";
			echo json_encode(array('success' => false, 'msg' => $msg ));
			return false;
		}
	}
	private function _do_import_record_row($row){

	}
	public function doImportPage($uuid,$page)
	{
		$inputFileName = base64_decode($this->input->post('filename'));
		$total_pages = $this->input->post('total_pages');
		$this->instansi_config = unserialize(base64_decode($this->input->post('config')));
		// $records = new SpreadsheetReader($inputFileName);
		$indexes = explode(',',$this->input->post('indexes'));
		$min = $indexes[0];
		$max = $indexes[1];
		$statistics = array(
			'insert'  => 0,
			'update'  => 0,
			'invalid' => 0
		); 
		$basedir 	= config_item('web_import_data_penduduk_upload_path');
		$yml_dir    = $basedir . 'export_tmp/'.$uuid.'/data/';
		//==================================================================================================
		$yml_path = $yml_dir."${page}.yml";
		if(!file_exists($yml_path)){
			echo json_encode(array('success' => false, 'msg' => "File Not Found $yml_path\n" ));

			return;
		}
		$records = Yaml::parse(file_get_contents($yml_path));

		$transactions = array(
			'update' => array(),
			'insert' => array()
		);
		foreach ($records as $source)  {          
		 	// $records->seek($pointer);
		 	// $source = $records->current();
		 	
		 	// print_r($source);
			// $source = $records->next(); 
			$new_record = array(
				'no_kel' => $this->instansi_config->no_kel,
				'no_kec' => $this->instansi_config->no_kec,
				'no_kab' => $this->instansi_config->no_kab,
				'no_prop'=> $this->instansi_config->no_prop,

				'nama_kel' => $this->instansi_config->nama_kel,
				'nama_kec' => $this->instansi_config->nama_kec,
				'nama_kab' => $this->instansi_config->nama_kab,
				'nama_prop'=> $this->instansi_config->nama_prop,
			 
			);
			foreach ($this->valid_headers as $index =>$header) {
				$key = strtolower($header);
				//REMAP KEY IF EXITS
				if( isset($this->remap_headers[$key]) ) {
					$key = $this->remap_headers[$key];
				}
				$new_record[$key] = !empty($source[$index]) ? $source[$index] : '';

				if($new_record[$key] == 'LAKI'){
					$new_record[$key] = 'l';
				}
				if($new_record[$key] == 'PEREMPUAN'){
					$new_record[$key] = 'p';
				}
				if($new_record[$key] == 'BLM KAWIN'){
					$new_record[$key] = 'BELUM KAWIN';
				}

			}

			// $new_record['tgl_lahir'] = preg_replace('/(\d+)(\/)(\d+)(\/)(\d+)/',"$5-$1-$3",$new_record['tgl_lahir']);

			if(!empty($new_record['nik'])){
				// CHECK IF RECORD EXISTS
				if($this->m_data_penduduk->record_exists($new_record['nik'])){
					$this->m_data_penduduk->update_record($new_record['nik'],$new_record);
					// $transactions['insert'][] = $new_record;
					$statistics['update'] += 1;
				}else{
					$this->m_data_penduduk->insert_record($new_record);
					// $transactions['update'][] = $new_record;

					$statistics['insert'] += 1;
				}
			} else{
				$statistics['invalid'] += 1;
			}
			// $this->db->trans_start();  
			// foreach ($transactions['insert'] as $new_record) {
			// 	$this->m_data_penduduk->update_record($new_record['nik'],$new_record);
			// }
			// foreach ($transactions['update'] as $new_record) {
			// 	$this->m_data_penduduk->insert_record($new_record);
			// }
			// $this->db->trans_complete();
		}

		if($page == $total_pages){
			$this->load->helper("file");
			@unlink($inputFileName);
			@delete_files($basedir . 'export_tmp/'.$uuid, true);
			@rmdir($basedir . 'export_tmp/'.$uuid);
		}
		echo json_encode(array('success' => true, 'msg' => 'Import data sukses !','statistics' => $statistics ));
		//==================================================================================================
	}
	private function _do_import_record($inputFileName){
		$inputFileType 	=  PHPExcel_IOFactory::identify($inputFileName);
		$objReader 		=  PHPExcel_IOFactory::createReader($inputFileType);
		$objPHPExcel 	= $objReader->load($inputFileName);

		$sheet 		= $objPHPExcel->getSheet(0);
		$highestRow = $sheet->getHighestRow();
		$highestColumn = $sheet->getHighestColumn();
		
		$row = 1;
		$headers = array();
		$headers_tmp = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
						NULL,
						TRUE,
						FALSE);
		
		if( !$this->_check_document_structure($headers_tmp[0]) ){
			return;
		}
		// $header  = array_shift($records);
		// if( !$this->_check_document_structure($records->current()) ){
		// 	return;
		// }
		
		$statistics = array(
			'insert'  => 0,
			'update'  => 0,
			'invalid' => 0
		); 
		// DO IMPORT LOOP
		// print_r(count($records));
		// exit();
		$total   = $highestRow;
		$perpage = $this->input->post('perpage');
		if(empty($perpage)){
			$perpage = 250;
		}
		
		$page    = 1;
		$total_pages = ceil($total/$perpage);

		// echo $total_pages;
		

		$uuid 		= md5($inputFileName);
		$basedir 	= config_item('web_import_data_penduduk_upload_path');
		$yml_dir    = $basedir . 'export_tmp/';

		if(!is_dir($yml_dir)){
			@mkdir($yml_dir);
		}
		$yml_dir    = $yml_dir . $uuid . '/';
		if(!is_dir($yml_dir)){
			@mkdir($yml_dir);
		}
		$yml_data_dir    = $yml_dir . 'data/' ;
		if(!is_dir($yml_data_dir)){
			@mkdir($yml_data_dir);
		}
		$record_indexes = range(1, $total);
		
		$index_data = array(
			'filename' => base64_encode($inputFileName),
			'total' => $total,
			'perpage' => $perpage,
			'total_pages' => $total_pages,
			'indexes' => array(),
			'config' => base64_encode(serialize($this->instansi_config ))
		);
		/*
for ($row = 2; $row <= $highestRow; $row++){//Read a row of data into an array                 
			$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
						NULL,
						TRUE,
						FALSE);

			$source = $rowData[0]; 
		*/
		foreach(range(1,$total_pages) as $page){
			$pagination_indexes = new Foundationphp\PaginationArray($record_indexes, $page, $perpage);
			
			$indexes  = $pagination_indexes->getResults();
			$min = min($indexes);
			$max = max($indexes);

			if($min == 1){
				$min = 2;
			}

			$index_data['indexes'][$page] = array($min,$max);

			$row_dumps = array();

			foreach (range($min, $max) as $pointer) {
		 
				$rowData = $sheet->rangeToArray('A' . $pointer . ':' . $highestColumn . $pointer,
						NULL,
						TRUE,
						FALSE);
				$rowData = $rowData[0];

				$unix_timestamp = ($rowData[4] - 25569) * 86400;
				$phpdate = date("Y-m-d", $unix_timestamp);

				$rowData[4] = $phpdate;
				$row_dumps[] =  $rowData; 
			}
			$yml_path = $yml_data_dir . "$page.yml";

			// print_r($row_dumps);
			// exit();
			file_put_contents($yml_path, Yaml::dump($row_dumps));
			// echo "WRITE $yml_path\n";
		}
		$yml_path = $yml_dir . "info.yml";
		file_put_contents($yml_path, Yaml::dump($index_data));
		// echo "WRITE $yml_path\n";
		echo json_encode(array('success' => true, 'uuid' => $uuid ,'info' => $index_data));
		exit();

		// $loop = 0;


		
		return true;
	}
	private function _do_import($file){
		// CHECK EXISTENSE OF FILE
		$basedir = config_item('web_import_data_penduduk_upload_path');
		if(!file_exists($basedir . $file->name)){

			echo json_encode(array('success' => false, 'msg' => $file .' : File tidak ditemukan.'));
			return;
		}
		$inputFileName = $basedir . $file->name;
		// TRY TO LOAD EXCEL FILE
		try {

			// $inputFileType 	=  PHPExcel_IOFactory::identify($inputFileName);
			// $objReader 		=  PHPExcel_IOFactory::createReader($inputFileType);
			// $objPHPExcel 	= $objReader->load($inputFileName);

			return $this->_do_import_record($inputFileName);
		} 
		catch(Exception $e) {
			echo json_encode(array('success' => false, 'msg' => $file .' : Bukan file excel yang valid / korup.'));
			@unlink($inputFileName);
			return;
		}

	}
	function process_data(){
		$no_kel = $this->input->post('no_kel');
		$config = $this->m_data_penduduk->get_instansi_config($no_kel);

		if(empty($config)){
			echo json_encode(array('success' => false, 'msg' => 'Nama Kelurahan tidak terdaftar.'));

			return;
		}
		
		$this->instansi_config = $config;
		$this->_process_upload();
	}
	function _process_data(){
		//print_r($_FILES);
		//die();

		ini_set('memory_limit', '-1');
		ini_set('post_max_size', '1000MB');
		//ini_set('upload_max_filesize', '500M');
		
		$no_kel = $this->input->post('no_kel');
		
		$fileName = time().$_FILES['file']['name'];
         
		$target_1 = 'public/documents/data_penduduk/';
		$inputFileName = $target_1 . $fileName;
		if(@move_uploaded_file($_FILES['file']['tmp_name'], $inputFileName))
		{
			//echo 'ERROR';
		}

         
        try {
			$inputFileType =  PHPExcel_IOFactory::identify($inputFileName);
			$objReader =  PHPExcel_IOFactory::createReader($inputFileType);
			$objPHPExcel = $objReader->load($inputFileName);
		} catch(Exception $e) {
			die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
		}
 
		$sheet = $objPHPExcel->getSheet(0);
		$highestRow = $sheet->getHighestRow();
		$highestColumn = $sheet->getHighestColumn();
             
		$entry2 = array();
		for ($row = 2; $row <= $highestRow; $row++){//Read a row of data into an array                 
			$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
						NULL,
						TRUE,
						FALSE);

			$entry2[$row]['no_prop'] 		= config_item('default_prop');
			$entry2[$row]['no_kab'] 		= config_item('default_kab');
			$entry2[$row]['no_kec'] 		= config_item('default_kec');
			$entry2[$row]['no_kel'] 		= $no_kel;
			
			/*$tglArr = explode('/',$rowData[0][4]);
			$tgl = $tglArr[1];
			$bln = $tglArr[0];
			$thn = $tglArr[2];
			$date = $thn.'-'.$bln.'-'.$tgl;*/
			//echo $rowData[0][4];
			//die();

			$date = date('Y-m-d',strtotime('1899-12-31+'.(round($rowData[0][4])-1).' days'));
			$date_2 = date('Y-m-d',strtotime('1899-12-31+'.(round($rowData[0][24])-1).' days'));



			$entry2[$row]['nik'] 			= $rowData[0][0];
			$entry2[$row]['nama'] 			= $rowData[0][1];
			$entry2[$row]['jk'] 			= $rowData[0][2] == 'L' ? 'l' : 'p';
			$entry2[$row]['tmpt_lahir'] 	= $rowData[0][3];
			$entry2[$row]['tgl_lahir'] 		= $date;
			$entry2[$row]['gdr'] 			= $rowData[0][5];
			$entry2[$row]['agama'] 			= $rowData[0][6];
			$entry2[$row]['status'] 		= $rowData[0][7];
			$entry2[$row]['shdk'] 			= $rowData[0][8];
			$entry2[$row]['shdrt'] 			= $rowData[0][9];
			$entry2[$row]['ppdk_akhir'] 	= $rowData[0][10];
			$entry2[$row]['pekerjaan'] 		= $rowData[0][11];
			$entry2[$row]['nama_ibu'] 		= $rowData[0][12];
			$entry2[$row]['nama_ayah'] 		= $rowData[0][13];
			$entry2[$row]['no_kk'] 			= $rowData[0][14];
			$entry2[$row]['nama_kep_kel'] 	= $rowData[0][15];
			$entry2[$row]['alamat'] 		= str_replace(';',' ',$rowData[0][16]);
			$entry2[$row]['nama_prop'] 		= $rowData[0][17];
			$entry2[$row]['nama_kab'] 		= $rowData[0][18];
			$entry2[$row]['nama_kec'] 		= $rowData[0][19];
			$entry2[$row]['nama_kel'] 		= $rowData[0][20];
			$entry2[$row]['akta_lahir'] 	= $rowData[0][21];
			$entry2[$row]['no_akta_lahir'] 	= $rowData[0][22];
			$entry2[$row]['stat_ktp'] 		= $rowData[0][23];
			$entry2[$row]['tgl_cetak_ktp'] 	= $date_2;
			$entry2[$row]['create_on'] 		= date('Y-m-d H:i:s');
			$entry2[$row]['create_by'] 		= $this->session->userdata('log_userid');


				 
		}

		if(count($entry2)>0){
			$this->db->trans_start(); /*untuk rollback jika data gagal*/
			$this->m_data_penduduk->delete_data(config_item('default_prop'),config_item('default_kab'),config_item('default_kec'),$no_kel);
			/*$this->db->trans_complete();

			$this->db->trans_start(); */
			$this->db->insert_batch('master_penduduk',$entry2);
			$this->db->trans_complete();
		}

		if (!unlink($inputFileName))
		{
			echo ("Error deleting $file");
		}


		$pesan = '<div class="alert alert-success">';
		$pesan .= '<button class="close" data-dismiss="alert">×</button>';
		$pesan .= '<strong>Informasi!</strong>';
		$pesan .= ' Data berhasil di import!';
		$pesan .= '</div>';
		$this->session->set_flashdata('pesan',$pesan);

	}


}//D:/xampp/htdocs/babakan/app/modules/data_penduduk/controllers/Data_penduduk.php
