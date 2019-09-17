<?php


class Pegawai extends Crud_Controller
{
	protected $autosetIncludeNoPropKabKec = false;
	public function __construct()
	{
		parent::__construct(__DIR__);
	}
	

	function index() {
		
		##datepicker
		$this->template->add_js('public/assets/js/jquery_plugins/jquery-ui-1.8.10.custom.min.js');
		$this->template->add_css('public/assets/bootstrap-datepicker/css/datepicker.css');
		$this->template->add_js('public/assets/bootstrap-datepicker/js/bootstrap-datepicker.js');

		$this->template->add_css('public/addon/select2/select2.min.css');
		$this->template->add_js('public/addon/select2/select2.full.min.js');

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
							'sortby'		=> "p.nip_baru",
							'sortorder' 	=> "DESC",
							'keyword' 		=> ""
					),
			);
			$this->session->set_userdata($arr_sess);
		}
		
		$sample = $this->session->userdata($this->func);

		$data['page'] = $sample['page'] == "" ? "0" : $sample['page'];
		$data['sortby'] = $sample['sortby'] == "" ? "p.nip_baru" : $sample['sortby'];
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


		$data['kec'] 	= kec_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec);
		$data['kel'] 	= kel_2_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
	


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
	
	// function load_data_2(){
	// 	if(!$this->flag_data){##tidak boleh delete data
	// 		menu_check_role(array());
	// 		exit;
	// 	}
	// 	$result 	= $this->m_pegawai->list_data();
	// 	$data['result'] = $result;
	// 	echo $this->load->view($this->func.'/load_data',$data);

	// }

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
		
		$filter_no_kec = $this->input->post('filter_no_kec');
		$filter_no_kel = $this->input->post('filter_no_kel');
		$filter_no_kel = $filter_no_kel ? $filter_no_kel : $this->no_kel;

		$data['sort_by'] 	= !empty($_POST['sort_by']) ? $_POST['sort_by'] : "p.nip";
		$data['sort_order']	= !empty($_POST['sort_order']) ? $_POST['sort_order'] : "DESC";
		$data['keywords']	= !empty($_POST['keywords']) ? $_POST['keywords'] : "";

		$arr_sess = array(
				$this->func => array(
						'page' 			=> $data['page'],
						'sortby'		=> $data['sort_by'],
						'sortorder' 	=> $data['sort_order'],
						'keyword' 		=> $data['keywords']
				),
		);
		$this->session->set_userdata($arr_sess);
		$data['results'] 			= $this->m_pegawai->list_data($data['page'],$data['sort_by'],$data['sort_order'],$data['keywords'],$filter_no_kec,$filter_no_kel);
		$jumlah 		 			= $this->m_pegawai->jumlah_data($data['keywords'],$filter_no_kec,$filter_no_kel);

		$config['base_url']			= base_url() . ''.$this->func.'/load_data/';
		$config['post_var'] 		= $this->input->post('page');
		$config['per_page'] 		= $this->config->item('page_num');
		$config['first_link'] 		= 'First';
		$config['last_link'] 		= 'Last';
		$config['full_tag_open'] 	= '<div class="pagination pagination-colory">';
		$config['full_tag_close'] 	= '</div>';
		$config['total_rows'] 		= $jumlah;

		$this->ajax_pagination->initialize($config);
		$data['pagination'] = $this->ajax_pagination->create_links();
		$data['fields'] = array(
				'p.nip'		=> 'NIP',
				'p.nama_pegawai'	=> 'Nama',
				'p.gender'	 		=> 'Jenis Kelamin',
				'p.tempat_lahir'	=> 'TTL',
				'p.agama'	 		=> 'Agama',
		);

		
		$data['pesan_flash_data'] = $this->session->flashdata('pesan');
		$data['gender'] = config_item('gender');
		$data['count_result'] = count($data['results']);

		$data['download_url'] = site_url($this->func.'/download/id').'/';
		$data['flag_modify_data'] = $this->flag_modify_data;
		$data['flag_delete_data'] = $this->flag_delete_data;
		$this->twig->display('load_data.twig.php',$data);
    }
  
    public function delete($cmd='',$filename='')
    {
    	$upload_dir = config_item('web_foto_upload_path');

    	if($cmd == 'foto' && !empty($filename)){
    		$path = $upload_dir . $filename;
    		if(file_exists($path)){
    			unlink($path);
    		}
    	}

    	echo "OK";
    	die();
    }
    public function upload($value='')
    {
    	$upload_dir = config_item('web_foto_upload_path');
    	$this->load->helper('file_uploader');

    	$this->load->helper('file');
    	if(!empty($value)){

    		$path = $upload_dir . $value;
    		$mime = "";

    		if(function_exists('mime_content_type') )
	        	$mime = mime_content_type($path);
		    else if(function_exists('finfo_open'))
	        { 
	            $finfo = finfo_open(FILEINFO_MIME);
	            $mimetype = finfo_file($finfo, $path);
	            $mime = $mimetype;
	        }
		    else
		        $mime = get_mime_by_extension($path);

		    header("Pragma: public");
			header("Cache-Control: public");
			header('Expires: ' . gmdate('D, d M Y H:i:s', time()+1024) . ' GMT');

			header('Content-type: ' . $mime);
			header('Last-Modified: ' . gmdate('D, d M Y H:i:s', filemtime($path)) . ' GMT');
			ob_clean();
			echo file_get_contents($path);

		    // print_r($mime);
		    die();
    	}
    	// $upload_info = $this->upload_fields[$state_info->field_name];
				
		header('Pragma: no-cache');
		header('Cache-Control: private, no-cache');
		header('Content-Disposition: inline; filename="files.json"');
		header('X-Content-Type-Options: nosniff');
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: OPTIONS, HEAD, GET, POST, PUT, DELETE');
		header('Access-Control-Allow-Headers: X-File-Name, X-File-Type, X-File-Size');
		
		// $ci = &get_instance();
		// $ci->config->load('grocery_crud');		
		
		$allowed_files = config_item('web_foto_upload_allowed_file_types');
		$reg_exp = '/(\\.|\\/)('.$allowed_files.')$/i';		

		$max_file_size_ui = config_item('web_foto_upload_max_size');

		$max_file_size_bytes = convert_bytes_ui_to_bytes($max_file_size_ui);
	
		$options = array(
			'upload_dir' 		=> $upload_dir,
			'param_name'		=> 'file_upload_foto',
			'upload_url'		=> site_url('pegawai/upload').'/',
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
		echo json_encode( $data ); 
    }
    function form_tambah_data(){
    	$this->load->helper('file_uploader');
		$uploadUrl = site_url('pegawai/upload');
		$deleteUrl = site_url('pegawai/delete');
		$status_pegawai = enum_dropdown('r_pegawai','status_pegawai','Status');

		$allowed_files = config_item('web_foto_upload_allowed_file_types');
		$max_file_size_ui = config_item('web_foto_upload_max_size');
		
		$agama  = agama_2_dropdown();
		$kawin  = status_kawin_2_dropdown();

		$pangkat = array(''=>'-- Pilih Pangkat --') + config_item('opt_pangkat');
		$golongan = array(''=>'-- Pilih Golongan --') + config_item('opt_golongan');
		$gol_darah = array(''=>'-- Pilih Golongan Darah --') +  config_item('gol_darah') + array('Tidak Tahu'=>'Tidak Tahu');


		$data = array(
			'dropdown_status_pegawai' => form_dropdown('status_pegawai',$status_pegawai, '','id="status_pegawai" class="select2 form-control" style="width:100%" '),
			'dropdown_pangkat' 	=> form_dropdown('pangkat',$pangkat, '','id="pangkat" class="select2 form-control" style="width:100%" '),
			'dropdown_golongan'	=> form_dropdown('golongan',$golongan, '','id="golongan" class="select2 form-control" style="width:100%" '),
			'dropdown_agama'=> form_dropdown('agama',$agama,'','id="agama" class="select2 form-control" style="width:100%" '),
			'dropdown_status_perkawinan' => form_dropdown('status_perkawinan',$kawin,'','id="status_perkawinan" class="wajib_isi select2 form-control" style="width:100%" '),
			'dropdown_golongan_darah' => form_dropdown('gol_darah',$gol_darah,'','id="gol_darah" class="select2 form-control" style="width:100%" '),
			'file_uploader' => file_uploader('foto','','placeholder=Foto',$uploadUrl,$deleteUrl,$allowed_files,$max_file_size_ui,true)
		);

		$this->twig->display('form/add.twig.php',$data);
	}
	

	function form_edit_data(){
		$this->load->helper('file_uploader');
		$uploadUrl = site_url('pegawai/upload');
		$deleteUrl = site_url('pegawai/delete');
		$status_pegawai = enum_dropdown('r_pegawai','status_pegawai','Status');
		
		$agama = agama_2_dropdown();
		$kawin = status_kawin_2_dropdown();

		$pegawaiid = $this->input->post('pegawaiid');

		$detail = $this->m_pegawai->detail_data($pegawaiid);

		$pangkat = array(''=>'-- Pilih Pangkat --') + config_item('opt_pangkat');
		$golongan = array(''=>'-- Pilih Golongan --') + config_item('opt_golongan');
		$gol_darah = array(''=>'-- Pilih Golongan Darah --') +  config_item('gol_darah') + array('Tidak Tahu'=>'Tidak Tahu');
		$allowed_files = config_item('web_foto_upload_allowed_file_types');
		$max_file_size_ui = config_item('web_foto_upload_max_size');

		$data = array(
			'dropdown_status_pegawai' => form_dropdown('status_pegawai',$status_pegawai, $detail['status_pegawai'],'id="status_pegawai" class="select2 form-control" style="width:100%" '),
			'dropdown_pangkat' 	=> form_dropdown('pangkat',$pangkat, $detail['pangkat'],'id="pangkat" class="select2 form-control" style="width:100%" '),
			'dropdown_golongan'	=> form_dropdown('golongan',$golongan, $detail['golongan'],'id="golongan" class="select2 form-control" style="width:100%" '),
			'dropdown_agama'=> form_dropdown('agama',$agama,$detail['agama'],'id="agama" class="select2 form-control" style="width:100%" '),
			'dropdown_status_perkawinan' => form_dropdown('status_perkawinan',$kawin,$detail['status_perkawinan'],'id="status_perkawinan" class="wajib_isi select2 form-control" style="width:100%" '),
			'dropdown_golongan_darah' => form_dropdown('gol_darah',$gol_darah,$detail['gol_darah'],'id="gol_darah" class="select2 form-control" style="width:100%" '),
			'file_uploader' => file_uploader('foto',$detail['foto'],'placeholder=Foto',$uploadUrl,$deleteUrl,$allowed_files,$max_file_size_ui,true),
			'detail'=>$detail,
			'pegawaiid'=>$pegawaiid
		);

		$this->twig->display('form/edit.twig.php',$data);
	}


	// function process_add_edit_data(){
	// 	//@REPLACED_00
	// 	$pegawaiid = $this->input->post('pegawaiid');

	// 	$nip 				= $this->input->post('nip');
	// 	$gelar_nonakademis	= $this->input->post('gelar_nonakademis');
	// 	$gelar_depan 		= $this->input->post('gelar_depan');
	// 	$nama 				= $this->input->post('nama');
	// 	$gelar_belakang 	= $this->input->post('gelar_belakang');
	// 	$gender 			= $this->input->post('gender');
	// 	$tempat_lahir 		= $this->input->post('tempat_lahir');
	// 	$tanggal_lahir 		= format_date_us($this->input->post('tanggal_lahir'));
	// 	$agama 				= $this->input->post('agama');
	// 	$gol_darah 			= $this->input->post('gol_darah');
	// 	$status_perkawinan 	= $this->input->post('status_perkawinan');
	// 	$nomor_hp 			= $this->input->post('nomor_hp');
	// 	$nomor_tlp 			= $this->input->post('nomor_tlp');
	// 	$jabatan 			= $this->input->post('nama_jabatan');
	// 	$pangkat_golongan 			= $this->input->post('pangkat_golongan');
	// 	$foto 			= $this->input->post('foto');
	// 	$status_pegawai 			= $this->input->post('status_pegawai');


	// 	$entry['foto'] = $foto;
	// 	$entry['jabatan'] = $jabatan;
	// 	$entry['pangkat_golongan'] = $pangkat_golongan;
	// 	$entry['status_pegawai'] = $status_pegawai;
	// 	$entry['nip']				= $nip;
	// 	$entry['gelar_nonakademis']		= $gelar_nonakademis;
	// 	$entry['gelar_depan']			= $gelar_depan;
	// 	$entry['nama_pegawai']			= $nama;
	// 	$entry['gelar_belakang']		= $gelar_belakang;
	// 	$entry['gender']				= $gender;
	// 	$entry['tempat_lahir']			= $tempat_lahir;
	// 	$entry['tanggal_lahir']			= $tanggal_lahir;
	// 	$entry['agama']					= $agama;
	// 	$entry['gol_darah']				= $gol_darah;
	// 	$entry['status_perkawinan']		= $status_perkawinan;
	// 	$entry['nomor_hp']				= $nomor_hp;
	// 	$entry['nomor_tlp_rumah']		= $nomor_tlp;
	// 	$entry['status']				= 'aktif';
	// 	$entry['last_updated']			= date('Y-m-d H:i:s');


	// 	if($pegawaiid){
	// 		$this->db->trans_start(); /*untuk rollback jika data gagal*/
	// 		$this->m_pegawai->update_data($entry,$pegawaiid);

	// 		// $entry_2['nama_pegawai']			= $nama;
	// 		// $entry_2['nip']				= $nip;
	// 		// $this->m_pegawai->update_data_2($entry_2,$pegawaiid);
	// 		$this->db->trans_complete();
	// 	} else {
	// 		$this->db->trans_start(); /*untuk rollback jika data gagal*/
	// 		$id_pegawai = $this->m_pegawai->insert_data($entry);

	// 		// $entry_2['id_pegawai']				= $id_pegawai;
	// 		// $entry_2['nama_pegawai']			= $nama;
	// 		// $entry_2['nip']				= $nip;
	// 		// $entry_2['jabatan']			= $jabatan;
	// 		// // $entry_2['kode_unor']				= $this->input->post('kode_unor');
	// 		// $this->m_pegawai->insert_data_2($entry_2);

	// 		$this->db->trans_complete();
	// 	}

		

	// 	$pesan = '<div class="alert alert-success">';
	// 	$pesan .= '<button class="close" data-dismiss="alert">×</button>';
	// 	$pesan .= '<strong>Informasi!</strong>';
	// 	$pesan .= ' Data berhasil di simpan!';
	// 	$pesan .= '</div>';
	// 	$this->session->set_flashdata('pesan',$pesan);

	// }

	

	// function delete_data(){
	// 	if(!$this->flag_delete_data){##tidak boleh delete data
	// 		menu_check_role(array());
	// 		exit;
	// 	}
	// 	$pegawaiid = $this->input->post('pegawaiid');
	// 	$this->db->trans_start(); /*untuk rollback jika data gagal*/
	// 	$this->m_pegawai->delete_data($pegawaiid);
	// 	$this->db->trans_complete();
	// 	$pesan = '<div class="alert alert-success">';
	// 	$pesan .= '<button class="close" data-dismiss="alert">×</button>';
	// 	$pesan .= '<strong>Informasi!</strong>';
	// 	$pesan .= ' Data berhasil di hapus!';
	// 	$pesan .= '</div>';
	// 	$this->session->set_flashdata('pesan',$pesan);
	// }


	function check_nip(){

		$nip = $this->input->post('nip');
		$pegawaiid = $this->input->post('pegawaiid');
		$check = $this->m_pegawai->check_nip($nip,$pegawaiid);
		if(count($check)>0){
			echo 'false';
		} else {
			echo 'true';
		}
	} 

	public function export_data()
    {
        $no_kel         = $this->input->post('filter_no_kel');
        $filter_date = explode('/',$this->input->post('filter_date'));
        $data = array(
            'default_nama_prop' => config_item('default_nama_prop'),
            'default_nama_kab' => config_item('default_nama_kab'),
            'default_nama_kec' => config_item('default_nama_kec'),
            'title'=>$this->title
        );
        if($this->input->post('page') !=NULL) {
			$data['page'] = $this->input->post('page');
		} else {
			$data['page'] = 0;
		}
		
		$filter_no_kec = $this->input->post('filter_no_kec');
		$filter_no_kel = $this->input->post('filter_no_kel');
		$filter_no_kel = $filter_no_kel ? $filter_no_kel : $this->no_kel;

		$data['sort_by'] 	= !empty($_POST['sort_by']) ? $_POST['sort_by'] : "p.nip";
		$data['sort_order']	= !empty($_POST['sort_order']) ? $_POST['sort_order'] : "DESC";
		$data['keywords']	= !empty($_POST['keywords']) ? $_POST['keywords'] : "";

		$arr_sess = array(
				$this->func => array(
						'page' 			=> $data['page'],
						'sortby'		=> $data['sort_by'],
						'sortorder' 	=> $data['sort_order'],
						'keyword' 		=> $data['keywords']
				),
		);

		$this->session->set_userdata($arr_sess);

		$data['results'] 			= $this->m_pegawai->list_data($data['page'],$data['sort_by'],$data['sort_order'],$data['keywords'],$filter_no_kec,$filter_no_kel,true);
		$jumlah 		 			= $this->m_pegawai->jumlah_data($data['keywords'],$filter_no_kec,$filter_no_kel);


        $nama_bln = '';
        $nama_thn = '';
        $bln = '';
        $thn = '';
        // if(count($filter_date)==2){
        //     $bln = $filter_date[0];
        //     $thn = $filter_date[1];
        	$dt=date('Y-m-d');
        	$dt=explode('-', $dt);
            $arr_bln = config_item('bulan');
            $nama_bln = 'BULAN '.strtoupper($arr_bln[number_format($dt[1])]);
            $nama_thn = 'TAHUN '.$dt[0];
        // }

        // $results = $this->{$this->modelName}->list_data($this->no_prop,$this->no_kab,$this->no_kec,$no_kel,$bln,$thn);

      

        $data['nama_bln']   = $nama_bln;
        $data['nama_thn']   = $nama_thn;
        // $data['results']    = $results;
        $data['count_result']   = $jumlah;

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
}//D:/xampp/htdocs/babakan/app/modules/pegawai/controllers/Pegawai.php
