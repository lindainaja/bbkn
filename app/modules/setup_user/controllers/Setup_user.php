<?php

class Setup_user extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_setup_user');
		$this->load->model('login/m_login');
		$this->load->library('encrypt');

		$this->menu = search_by_column(get_menu_mech(),'menuid',58);//menu Setup Role
		##check akses menu
		//menu_check_role($this->menu);
		
		if(count(search_by_column($this->menu,'menu_mechanismid',154))>0){##List Data
			$this->flag_data = 1;
		} else {##tidak diizinkan
			$this->flag_data = 0;
		}

		if(count(search_by_column($this->menu,'menu_mechanismid',155))>0){##Add Data
			$this->flag_add_data = 1;
		} else {##tidak diizinkan
			$this->flag_add_data = 0;
		}

		if(count(search_by_column($this->menu,'menu_mechanismid',156))>0){##Modify Data
			$this->flag_modify_data = 1;
		} else {##tidak diizinkan
			$this->flag_modify_data = 0;
		}

		if(count(search_by_column($this->menu,'menu_mechanismid',157))>0){##Delete Data
			$this->flag_delete_data = 1;
		} else {##tidak diizinkan
			$this->flag_delete_data = 0;
		}


	}

	function index() {

		$this->template->add_js('app/modules/setup_user/assets/js/list.js');
		$this->template->add_title('PENGETURAN USER');
		$breadcrumb = array(
			'dashboard'	=> 'Beranda',
			'setup_user' 	=> 'User',
		);
		$this->template->add_breadcrumb($breadcrumb);

		if(!$this->session->userdata('setup_user')) {
			$arr_sess = array(
					'setup_user' => array(
							'page' 			=> "",
							'sortby'		=> "u.user_id",
							'sortorder' 	=> "DESC",
							'keyword' 		=> ""
					),
			);
			$this->session->set_userdata($arr_sess);
		}
		
		$sample = $this->session->userdata('setup_user');

		$data['page'] = $sample['page'] == "" ? "0" : $sample['page'];
		$data['sortby'] = $sample['sortby'] == "" ? "u.user_id" : $sample['sortby'];
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


		$this->template->write_view('content','setup_user/list',$data);
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

		$data['sort_by'] 	= isset($_POST['sort_by']) ? $_POST['sort_by'] : "u.user_id";
		$data['sort_order']	= isset($_POST['sort_order']) ? $_POST['sort_order'] : "DESC";
		$data['keywords']	= isset($_POST['keywords']) ? $_POST['keywords'] : "";

		$arr_sess = array(
				'setup_user' => array(
						'page' 			=> $data['page'],
						'sortby'		=> $data['sort_by'],
						'sortorder' 	=> $data['sort_order'],
						'keyword' 		=> $data['keywords']
				),
		);
		$this->session->set_userdata($arr_sess);

		$data['result'] 	= $this->m_setup_user->list_data($data['page'],$data['sort_by'],$data['sort_order'],$data['keywords']);
		$jumlah 		 	= $this->m_setup_user->jumlah_data($data['keywords']);

		$config['base_url']			= base_url() . 'index.php/setup_user/load_data/';
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
				'u.nama_user'		=> 'Nama',
				'u.username'	 	=> 'Username',
				'r.description'	 	=> 'Role',
		);

		$url = 'setup_user/index';

		$html = $this->load->view('setup_user/load_data', $data);
		echo $html;
    }


	function add(){
		if(!$this->flag_add_data){##jika tidak mendapat akses
			menu_check_role(array());
			exit;
		}

		$this->template->add_css('public/addon/select2/select2.min.css');
		$this->template->add_js('public/addon/select2/select2.full.min.js');


		$this->template->add_js('public/assets/jquery-validation/dist/jquery.validate.min.js');
		$this->template->add_js('app/modules/setup_user/assets/js/validasi.js');

		$this->template->add_js('$(document).ready(function(){

						setTimeout(loading_all, 1000);
						function loading_all() {
							load_kab();
							//load_kec();
							//load_kel();
						}

                });
				','embed');



		$this->template->add_title('TAMBAH USER');
		$breadcrumb = array(
			'dashboard'	=> 'Beranda',
			'setup_user' 	=> 'User',
			'setup_user/add' => 'Tambag User',
		);
		$this->template->add_breadcrumb($breadcrumb);
		
		$data['role'] = role_dropdown();
		//$data['pegawai'] = pegawai_dropdown();
		$data['pegawai'] = array(''=>'- - - Pilih Pegawai - - -');
		$data['prop'] = prop_dropdown();
		$data['kab'] = array(''=>'- - - Pilih Kota/Kabupaten - - -');
		$data['kec'] = array(''=>'- - - Pilih Kecamatan - - -');
		$data['kel'] = array(''=>'- - - Pilih Kelurahan - - -');

		$this->template->write_view('content','setup_user/add',$data);
		$this->template->render();
	}
	
	function load_kab(){
		$no_prop		= $this->input->post('no_prop') ? $this->input->post('no_prop') : 0;
		$kab 			= kab_dropdown($no_prop);
		echo form_dropdown('no_kab',$kab,config_item('default_kab'),'id="no_kab" class="select2 form-control" ');
	}
	function load_kec(){
		$no_prop		= $this->input->post('no_prop') ? $this->input->post('no_prop') : 0;
		$no_kab			= $this->input->post('no_kab') ? $this->input->post('no_kab') : 0;
		$kec 			= kec_dropdown($no_prop,$no_kab);
		echo form_dropdown('no_kec',$kec,config_item('default_kec'),'id="no_kec" class="select2 form-control" ');
	}
	function load_kel(){
		$no_prop		= $this->input->post('no_prop') ? $this->input->post('no_prop') : 0;
		$no_kab			= $this->input->post('no_kab') ? $this->input->post('no_kab') : 0;
		$no_kec			= $this->input->post('no_kec') ? $this->input->post('no_kec') : 0;
		$kel 			= kel_dropdown($no_prop,$no_kab,$no_kec);
		echo form_dropdown('no_kel',$kel,'','id="no_kel" class="select2 form-control" ');
	}
	function load_pegawai(){
		$no_kec			= $this->input->post('no_kec') ? $this->input->post('no_kec') : 0;
		$no_kel			= $this->input->post('no_kel') ? $this->input->post('no_kel') : 0;
		if($no_kec){
			$pegawai 		= pegawai_2_dropdown($no_kec,$no_kel);
		} else {
			$pegawai 		= array();
		}
		echo form_dropdown('pegawaiid',$pegawai,'','id="pegawaiid" class="select2 form-control" ');
	}
	
	function add_process(){
		//print_rr($_POST);
		//die();

		$pegawaiid		= $this->input->post('pegawaiid');

		$no_prop		= $this->input->post('no_prop') ? $this->input->post('no_prop') : 0;
		$no_kab			= $this->input->post('no_kab') ? $this->input->post('no_kab') : 0;
		$no_kec			= $this->input->post('no_kec') ? $this->input->post('no_kec') : 0;
		$no_kel			= $this->input->post('no_kel') ? $this->input->post('no_kel') : 0;

		$entry['no_prop']		= $no_prop;
		$entry['no_kab']		= $no_kab;
		$entry['no_kec']		= $no_kec;
		$entry['no_kel']		= $no_kel;

		$entry['roleid']		= $this->input->post('roleid');
		$entry['username']		= $this->input->post('username');
		$entry['nama_user']		= $this->input->post('nama');
		//$entry['password']		= $this->encrypt->encode(trim($this->input->post('password')),$this->encrypt->hash(config_item('keyLogin')));
		$entry['passwd']		= md5(trim($this->input->post('password')));
		
		$this->db->trans_start(); /*untuk rollback jika data gagal*/
		$userid = $this->m_setup_user->insert_data($entry);
		if($pegawaiid){
			$entry2['user_id']		= $userid;
			$entry2['id_pegawai']	= $pegawaiid;
			$this->m_setup_user->insert_user_pegawai($entry2);
		}
		$this->db->trans_complete();
		$pesan = '<div class="alert alert-success">';
		$pesan .= '<button class="close" data-dismiss="alert">×</button>';
		$pesan .= '<strong>Informasi!</strong>';
		$pesan .= ' User baru berhasil di tambah!';
		$pesan .= '</div>';

		$this->session->set_flashdata('pesan',$pesan);
		redirect('setup_user');
	}
	
	function edit() {

		if(!$this->flag_modify_data){##jika tidak mendapat akses
			menu_check_role(array());
			exit;
		}

		$this->template->add_css('public/addon/select2/select2.min.css');
		$this->template->add_js('public/addon/select2/select2.full.min.js');


		$this->template->add_js('public/assets/jquery-validation/dist/jquery.validate.min.js');
		$this->template->add_js('app/modules/setup_user/assets/js/validasi.js');


		$this->template->add_title('EDIT USER');
		$breadcrumb = array(
			'dashboard'	=> 'Beranda',
			'setup_user' 	=> 'User',
			'setup_user/edit/id/'.$this->uri->segment(4) => 'Edit User',
		);
		$this->template->add_breadcrumb($breadcrumb);
		
		$data['role'] = role_dropdown();
		$detail = $this->m_setup_user->detail_data($this->uri->segment(4));
		$data['detail'] = $detail;


		$no_kec			= $detail['no_kec'];
		$no_kel			= $detail['no_kel'];
		if($no_kec){
			$pegawai 		= pegawai_2_dropdown($no_kec,$no_kel);
		} else {
			$pegawai 		= array();
		}
		$data['pegawai'] = $pegawai;

		$data['prop'] = prop_dropdown();
		$data['kab'] = kab_dropdown($detail['no_prop']);
		$data['kec'] = kec_dropdown($detail['no_prop'],$detail['no_kab']);
		$data['kel'] = kel_dropdown($detail['no_prop'],$detail['no_kab'],$detail['no_kec']);


		$this->template->write_view('content','setup_user/edit',$data);
		$this->template->render();
	}

	function edit_process(){



		$userid = $this->uri->segment(4);


		$pegawaiid		= $this->input->post('pegawaiid');

		$no_prop		= $this->input->post('no_prop') ? $this->input->post('no_prop') : 0;
		$no_kab			= $this->input->post('no_kab') ? $this->input->post('no_kab') : 0;
		$no_kec			= $this->input->post('no_kec') ? $this->input->post('no_kec') : 0;
		$no_kel			= $this->input->post('no_kel') ? $this->input->post('no_kel') : 0;

		$entry['no_prop']		= $no_prop;
		$entry['no_kab']		= $no_kab;
		$entry['no_kec']		= $no_kec;
		$entry['no_kel']		= $no_kel;

		$entry['roleid']		= $this->input->post('roleid');
		$entry['username']		= $this->input->post('username');
		$entry['nama_user']		= $this->input->post('nama');
		//$entry['password']		= $this->encrypt->encode(trim($this->input->post('password')),$this->encrypt->hash(config_item('keyLogin')));
		if($this->input->post('password')){
			$entry['passwd']		= $this->encrypt->hash(trim($this->input->post('password')).$this->encrypt->hash(config_item('keyLogin')));
		}
		
		$this->db->trans_start(); /*untuk rollback jika data gagal*/
		$this->m_setup_user->update_data($entry,$userid);
		$this->m_setup_user->delete_user_pegawai($userid);
		if($pegawaiid){
			$entry2['user_id']		= $userid;
			$entry2['id_pegawai']	= $pegawaiid;
			$this->m_setup_user->insert_user_pegawai($entry2);
		}
		$this->db->trans_complete();

		$pesan = '<div class="alert alert-success">';
		$pesan .= '<button class="close" data-dismiss="alert">×</button>';
		$pesan .= '<strong>Informasi!</strong>';
		$pesan .= ' User berhasil di edit!';
		$pesan .= '</div>';

		$this->session->set_flashdata('pesan',$pesan);
		redirect('setup_user');
	}


	function check_username(){
		$username = $this->input->post('username');
		$id = $this->input->post('id');
		$check = $this->m_setup_user->check_username($username,$id);
		if(count($check)>0){
			echo 'false';
		} else {
			echo 'true';
		}
	}
	function check_employee(){
		$employeeid = $this->input->post('employeeid');
		if($employeeid!=''){
			echo 'true';
		} else {
			echo 'false';
		}
	}

	function delete_data(){
		$userid = $this->input->post('userid');


		$this->db->trans_start(); /*untuk rollback jika data gagal*/
		$this->m_setup_user->delete_data($userid);
		$this->db->trans_complete();
		$pesan = '<div class="alert alert-success">';
		$pesan .= '<button class="close" data-dismiss="alert">×</button>';
		$pesan .= '<strong>Informasi!</strong>';
		$pesan .= ' User berhasil di hapus!';
		$pesan .= '</div>';

		$this->session->set_flashdata('pesan',$pesan);
	}


	function ganti_password(){
		$this->template->add_js('public/assets/jquery-validation/dist/jquery.validate.min.js');
		$this->template->add_js('app/modules/setup_user/assets/js/ganti_password.js');

		$this->template->add_title('GANTI PASSWORD');
		$breadcrumb = array(
			'dashboard'	=> 'Beranda',
			'setup_user/ganti_password' => 'Ganti Password',
		);
		$this->template->add_breadcrumb($breadcrumb);

		$this->template->write_view('content','setup_user/ganti_password');
		$this->template->render();
	}
	
	function process_ganti_password(){
		$this->load->library('encrypt');
		$userid = $this->session->userdata('log_userid');
		$hashed_password = $this->encrypt->hash(trim($this->input->post('password_baru')).$this->encrypt->hash(config_item('keyLogin')));
 

		$entry['passwd']	= $hashed_password;
		$this->db->trans_start(); /*untuk rollback jika data gagal*/
		$this->m_setup_user->update_data($entry,$userid);
		$this->db->trans_complete();
		$pesan = '<div class="alert alert-success">';
		$pesan .= '<button class="close" data-dismiss="alert">×</button>';
		$pesan .= '<strong>Informasi!</strong>';
		$pesan .= ' Password berhasil di rubah!';
		$pesan .= '</div>';
		$this->session->set_flashdata('pesan',$pesan);
		redirect('setup_user/ganti_password');
	}

	function check_password_lama(){
		$username		= $this->input->post('username');
		$password_lama	= $this->input->post('password_lama');

		$login = $this->m_login->getData($username,$password_lama);
		if($login==true){
			echo 'true';
		} else {
			echo 'false';
		}

	}

}



