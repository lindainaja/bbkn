<?php

class Setup_role extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_setup_role');
		$this->title = 'Role';
		$this->func = 'setup_role';

		$this->menu = search_by_column(get_menu_mech(),'menuid',57);//menu Setup Role
		##check akses menu
		menu_check_role($this->menu);
		
		if(count(search_by_column($this->menu,'menu_mechanismid',150))>0){##List Data
			$this->flag_data = 1;
		} else {##tidak diizinkan
			$this->flag_data = 0;
		}

		if(count(search_by_column($this->menu,'menu_mechanismid',151))>0){##Add Data
			$this->flag_add_data = 1;
		} else {##tidak diizinkan
			$this->flag_add_data = 0;
		}

		if(count(search_by_column($this->menu,'menu_mechanismid',152))>0){##Modify Data
			$this->flag_modify_data = 1;
		} else {##tidak diizinkan
			$this->flag_modify_data = 0;
		}

		if(count(search_by_column($this->menu,'menu_mechanismid',153))>0){##Delete Data
			$this->flag_delete_data = 1;
		} else {##tidak diizinkan
			$this->flag_delete_data = 0;
		}



	}

	function index() {
		
		$this->template->add_css('public/assets/data-tables/bootstrap3/dataTables.bootstrap.css');
		$this->template->add_js('public/assets/data-tables/jquery.dataTables.js');
		$this->template->add_js('public/assets/data-tables/bootstrap3/dataTables.bootstrap.js');

		$this->template->add_js('app/modules/'.$this->func.'/assets/js/'.'list.js');
		$this->template->add_title(strtoupper($this->title));
		$breadcrumb = array(
			'dashboard'	=> 'Beranda',
			$this->func 	=> $this->title,
		);
		$this->template->add_breadcrumb($breadcrumb);

		$data['result'] 	= array();//$this->m_taking_material->list_data($this->flag_all_data);
		$this->template->write_view('content',$this->func.'/list',$data);
		$this->template->render();
	}


	function load_data(){
		$result 	= $this->m_setup_role->list_data();
		$array = array();
		

		if(count($result)>0){
			foreach($result as $result_key => $result_val){
				$array[$result_key]['paperclip'] = '<i class="fa fa-paperclip"></i>';
				$array[$result_key]['role'] = '<div align="left">'.$result_val['description'].'</div>';

				$tpl_detail = '';
				$tpl_detail .= '<div align="center">';
				$tpl_detail .= '<a href="'.site_url($this->func.'/detail/id/'.$result_val['id']).'" class="btn btn-circle btn-primary show-tooltip" title="Detail">';
				$tpl_detail .= '<i class="fa fa-angle-right"></i>';
				$tpl_detail .= '</a>';
				$tpl_detail .= '</div>';
				$array[$result_key]['detail'] = $tpl_detail;

			}
		}
		$data['data'] = $array;
		echo json_encode($data);

	}

	function add() {
		if(!$this->flag_add_data){##jika tidak mendapat akses
			menu_check_role(array());
			exit;
		}


		##VALIDASI
		$this->template->add_js('public/assets/bootstrap-wizard/jquery.bootstrap.wizard.js');
		$this->template->add_js('public/assets/jquery-validation/dist/jquery.validate.min.js');
		$this->template->add_js('app/modules/'.$this->func.'/assets/js/'.'validasi.js');


		$this->template->add_title('ADD '.strtoupper($this->title));
		$breadcrumb = array(
			'dashboard'		=> 'Beranda',
			$this->func		=> $this->title,
			$this->func.'/add'	=> 'Add',
		);
		$this->template->add_breadcrumb($breadcrumb);
		

		$menu 	= $this->m_setup_role->list_setup_menu();
		$data['menu'] = $menu;

		$menu_mechanism 	= $this->m_setup_role->setup_menu_mechanism();
		$data['menu_mechanism'] = $menu_mechanism;
		
		$this->template->write_view('content',$this->func.'/add',$data);
		$this->template->render();
	}



	
	function add_process(){
		//print_rr($_POST);
		//die();
		$role = $this->input->post('name');
		$entry['description']	= $role;
		$this->db->trans_start(); /*untuk rollback jika data gagal*/
		$setup_roleid = $this->m_setup_role->insert_data($entry);
		
		if(isset($_POST['menu_1'])){
			$entry2 =  array();
			for($i=0;$i<count($_POST['menu_1']);$i++){
				$setup_menuid = $_POST['menu_1'][$i];
				$entry2[$i]['setup_roleid'] 	= $setup_roleid;
				$entry2[$i]['setup_menuid'] 	= $setup_menuid;

				if(isset($_POST['menu_mechanism_'.$setup_menuid])){
					$entry3 =  array();
					for($z=0;$z<count($_POST['menu_mechanism_'.$setup_menuid]);$z++){
						$menu_mechanism = $_POST['menu_mechanism_'.$setup_menuid][$z];
						$entry3[$z]['setup_roleid'] 			= $setup_roleid;
						$entry3[$z]['setup_menuid'] 			= $setup_menuid;
						$entry3[$z]['setup_menu_mechanismid'] 	= $menu_mechanism;
					}
					if(count($entry3)>0){
						$this->db->insert_batch('setup_role_menu_mechanism',$entry3);
					}
				}
				
			}
			if(count($entry2)>0){
				$this->db->insert_batch('setup_role_menu',$entry2);
			}
			
			
		}


		$this->db->trans_complete();

		$pesan = '<div class="alert alert-success">';
		$pesan .= '<button class="close" data-dismiss="alert">×</button>';
		$pesan .= '<strong>Informasi!</strong>';
		$pesan .= ' Data has been successfully saved!';
		$pesan .= '</div>';
		$this->session->set_flashdata('pesan',$pesan);
		redirect($this->func);
		//redirect($this->func.'/detail/id/'.$this->crypter->encrypt($id));
	}
	

	function detail(){
		$id = $this->uri->segment(4);

		##datepicker
		$this->template->add_css('public/assets/bootstrap-datepicker/css/datepicker.css');
		$this->template->add_js('public/assets/bootstrap-datepicker/js/bootstrap-datepicker.js');

		$this->template->add_js('public/assets/jquery-validation/dist/jquery.validate.min.js');
		$this->template->add_js('app/modules/'.$this->func.'/assets/js/'.'detail.js');

		$this->template->add_title('DETAIL '.strtoupper(strtoupper($this->title)));
		$breadcrumb = array(
			'dashboard'				=> 'Beranda',
			$this->func 		=> $this->title,
			$this->func.'/detail/id/'.$id => 'Detail',
		);
		$this->template->add_breadcrumb($breadcrumb);
		
		$data['result'] = $this->m_setup_role->detail_data($id);
		$data['menu'] = $this->m_setup_role->list_setup_menu_by_role($id);
		$data['menu_mechanism'] = $this->m_setup_role->setup_menu_mechanism_by_role($id);


		$this->template->write_view('content',$this->func.'/detail',$data);
		$this->template->render();
	}


	function edit() {

		if(!$this->flag_modify_data){##jika tidak mendapat akses
			menu_check_role(array());
			exit;
		}

		$id = $this->uri->segment(4);


		##VALIDASI
		$this->template->add_js('public/assets/bootstrap-wizard/jquery.bootstrap.wizard.js');
		$this->template->add_js('public/assets/jquery-validation/dist/jquery.validate.min.js');
		$this->template->add_js('app/modules/'.$this->func.'/assets/js/'.'validasi.js');

		$this->template->add_title('EDIT '.strtoupper($this->title));
		$breadcrumb = array(
			'dashboard'		=> 'Beranda',
			$this->func 		=> $this->title,
			$this->func.'/edit/id/'.$id => 'Edit',
		);
		$this->template->add_breadcrumb($breadcrumb);
		
		$data['result'] = $this->m_setup_role->detail_data($id);
		$data['result_menu'] = $this->m_setup_role->list_setup_menu_by_role($id);
		$data['result_menu_mechanism'] = $this->m_setup_role->setup_menu_mechanism_by_role($id);

		$menu 	= $this->m_setup_role->list_setup_menu();
		$data['menu'] = $menu;
		$menu_mechanism 	= $this->m_setup_role->setup_menu_mechanism();
		$data['menu_mechanism'] = $menu_mechanism;

		$this->template->write_view('content',$this->func.'/edit',$data);
		$this->template->render();
	}

	function edit_process(){

		$setup_roleid = $this->uri->segment(4);


		$role = $this->input->post('name');
		$entry['description']	= $role;
		$this->db->trans_start(); /*untuk rollback jika data gagal*/
		$this->m_setup_role->update_data($entry,$setup_roleid);

		$this->m_setup_role->delete_data_menu_by_role($setup_roleid);
		$this->m_setup_role->delete_data_menu_mechanism_by_role($setup_roleid);

		
		if(isset($_POST['menu_1'])){
			$entry2 =  array();
			for($i=0;$i<count($_POST['menu_1']);$i++){
				$setup_menuid = $_POST['menu_1'][$i];
				$entry2[$i]['setup_roleid'] 	= $setup_roleid;
				$entry2[$i]['setup_menuid'] 	= $setup_menuid;

				if(isset($_POST['menu_mechanism_'.$setup_menuid])){
					$entry3 =  array();
					for($z=0;$z<count($_POST['menu_mechanism_'.$setup_menuid]);$z++){
						$menu_mechanism = $_POST['menu_mechanism_'.$setup_menuid][$z];
						$entry3[$z]['setup_roleid'] 			= $setup_roleid;
						$entry3[$z]['setup_menuid'] 			= $setup_menuid;
						$entry3[$z]['setup_menu_mechanismid'] 	= $menu_mechanism;
					}
					if(count($entry3)>0){
						$this->db->insert_batch('setup_role_menu_mechanism',$entry3);
					}
				}
				
			}
			if(count($entry2)>0){
				$this->db->insert_batch('setup_role_menu',$entry2);
			}
			
			
		}
		$this->db->trans_complete();

		$pesan = '<div class="alert alert-success">';
		$pesan .= '<button class="close" data-dismiss="alert">×</button>';
		$pesan .= '<strong>Informasi!</strong>';
		$pesan .= ' Data has been successfully edited!';
		$pesan .= '</div>';
		$this->session->set_flashdata('pesan',$pesan);
		redirect($this->func.'/detail/id/'.$this->uri->segment(4));
	}


	function delete_data(){
		if(!$this->flag_delete_data){##jika tidak mendapat akses
			menu_check_role(array());
			exit;
		}


		$id = $this->input->post('id');

		$this->db->trans_start(); /*untuk rollback jika data gagal*/
		$this->m_setup_role->delete_data($id);
		$this->db->trans_complete();
		$pesan = '<div class="alert alert-success">';
		$pesan .= '<button class="close" data-dismiss="alert">×</button>';
		$pesan .= '<strong>Informasi!</strong>';
		$pesan .= ' Data has been successfully deleted!';
		$pesan .= '</div>';
		$this->session->set_flashdata('pesan',$pesan);
	}
	

}



