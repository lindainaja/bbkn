<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('encrypt');
	}


	function saveDataSession($userid)
	{
		$this->db->select('u.*,rp.nip nip_baru,rp.gender');
		$this->db->from('users u');
		$this->db->join('user_pegawai up','up.user_id=u.user_id','LEFT');
		$this->db->join('r_pegawai rp','rp.id_pegawai=up.id_pegawai','LEFT');
		$this->db->where('u.user_id',$userid);
		$this->db->limit(1);
		$detail = $this->db->get()->row_array();
		if(count($detail)>0){
			$data['log_userid'] 		= $detail['user_id'];
			$data['log_roleid'] 		= $detail['roleid'];
			$data['log_username'] 		= $detail['username'];
			$data['log_name'] 			= $detail['nama_user'];

			$data['log_gender'] 		= $detail['gender'];
			$data['log_prop'] 			= $detail['no_prop'];
			$data['log_kab'] 			= $detail['no_kab'];
			$data['log_kec'] 			= $detail['no_kec'];
			$data['log_kel'] 			= $detail['no_kel'];
			
			// $kode_unor = get_kode_unor($detail['no_prop'],$detail['no_kab'],$detail['no_kec'],$detail['no_kel']);

			// $data['log_kode_unor']		= $kode_unor;

			$data['login']				= true;

			// $data['log_menu']			= $this->getSetupMenuByRoleid($detail['roleid']);
			// $data['log_menu2']			= $this->generateMenu($data['log_menu']);
			// $data['log_menu_mechanism']	= $this->getSetupMenuMechanismByRoleid($detail['roleid']);
			
			$this->session->unset_userdata($data);

			$this->session->set_userdata($data);
			return true;
		} else {
			return false;
		}
	}



	function getData($username,$password)
	{
		$this->load->library('encrypt');
		//$this->db->select('u.*,rp.nip_baru,rp.gender');
		$this->db->select('u.*');
		$this->db->from('users u');
		//$this->db->join('user_pegawai up','up.user_id=u.user_id','LEFT');
		//$this->db->join('r_pegawai rp','rp.id_pegawai=up.id_pegawai','LEFT');
		$hashed_password = $this->encrypt->hash($password.$this->encrypt->hash(config_item('keyLogin')));

		// echo ($hashed_password);
		// die();
		$this->db->where('u.username',$username);
		$this->db->where('u.passwd', $hashed_password );
		$this->db->limit(1);
		$detail = $this->db->get()->row_array();
		if(count($detail)>0){
			//$passwordOri = $this->encrypt->decode($detail['password'],$this->encrypt->hash(config_item('keyLogin')));
			//if($passwordOri==$password){
				$data['log_userid'] 		= $detail['user_id'];
				$data['log_roleid'] 		= $detail['roleid'];
				$data['log_username'] 		= $detail['username'];
				$data['log_name'] 			= $detail['nama_user'];

				// $data['log_menu2']			= $this->generateMenu($data['log_menu']);
				// $data['log_menu_mechanism']	= $this->getSetupMenuMechanismByRoleid($detail['roleid']);

				$this->session->set_userdata($data);
				return true;
			//} else {
				//return false;
			//}
		} else {
			return false;
		}
	}
	
	function generateMenu(&$array=array()){
		$exclude_top_menu_ids=config_item('exclude_top_menu_ids');
		$finalArray = search_by_column($array,'parent_id',0);
		$menuArr = array();

		foreach($finalArray as $finalArrayKey => $finalArrayVal){
			if(in_array($finalArrayVal['menuid'], $exclude_top_menu_ids)){
				// unset($finalArray[$finalArrayKey]);
				continue;
			}
			$menuArr[$finalArrayKey] = $finalArrayVal;
			
			$subMenu = search_by_column($array,'parent_id',$finalArrayVal['menuid']);
			$menuArr[$finalArrayKey]['sub'] = array();
			foreach($subMenu as $subMenuKey => $subMenuVal){
				$subSubMenu = search_by_column($array,'parent_id',$finalArrayVal['menuid']);
				foreach($subSubMenu as $subSubMenuKey => $subSubMenuVal){
					$menuArr[$finalArrayKey]['sub'][$subSubMenuKey] = $subSubMenuVal;
					$menuArr[$finalArrayKey]['sub'][$subSubMenuKey]['sub2'] = search_by_column($array,'parent_id',$subSubMenuVal['menuid']);
				}
			}
		}
		return $menuArr;
	}


	function getSetupMenuByRoleid($setup_roleid=0)
	{
		$this->db->select('srm.id,sm.id as menuid,sm.parent_id,sm.name,sm.url');
		$this->db->from('setup_role_menu srm');
		$this->db->join('setup_menu sm','sm.id=srm.setup_menuid');
		$this->db->where('srm.setup_roleid',$setup_roleid);
		$this->db->order_by('sm.position','ASC');
		$result = $this->db->get()->result_array();
		return $result;
	}


	function getSetupMenuMechanismByRoleid($setup_roleid=0)
	{
		$this->db->select('srmm.id,sm.id as menuid,sm.`name` as menu,sm.url as url,srmm.setup_menu_mechanismid as menu_mechanismid,smm.description');
		$this->db->from('setup_role_menu_mechanism srmm');
		$this->db->join('setup_menu sm','sm.id=srmm.setup_menuid');
		$this->db->join('setup_menu_mechanism smm','smm.id=srmm.setup_menu_mechanismid');
		$this->db->where('srmm.setup_roleid',$setup_roleid);
		$result = $this->db->get()->result_array();

		
		// print_r($result);
		return $result;
	}


	function insert_user_key($data=array())
	{
		if(count($data)>0){
			$this->db_sms = $this->load->database('db_sms',TRUE);
			$this->db_sms->insert('user_key',$data);
		}
	}
	
	function get_user_detail($userid){
		$this->db->select('u.*,e.mobile,e.phone');
		$this->db->from('user u');
		$this->db->join('employee e','e.id=u.employeeid');
		$this->db->where('u.id',$userid);
		$this->db->limit(1);
		$result = $this->db->get()->row_array();
		return $result;
	}

	function get_user_detail_by_username($username){
		$this->db->select('u.*,e.mobile,e.phone');
		$this->db->from('user u');
		$this->db->join('employee e','e.id=u.employeeid');
		$this->db->where('u.username',$username);
		$this->db->limit(1);
		$result = $this->db->get()->row_array();
		return $result;
	}

	function check_code_authentication($userid,$code){
		$this->db_sms = $this->load->database('db_sms',TRUE);
		$this->db_sms->select('uk.id');
		$this->db_sms->from('user_key uk');
		$this->db_sms->where('uk.app',config_item('web_title'));
		$this->db_sms->where('uk.userid',$userid);
		$this->db_sms->where('uk.code',$code);
		$result = $this->db_sms->get()->result_array();
		return $result;
	}

	function clear_code_authentication($userid){
		$this->db_sms = $this->load->database('db_sms',TRUE);
		$this->db_sms->where('app',config_item('web_title'));
		$this->db_sms->where('userid',$userid);
		$this->db_sms->delete('user_key');
	}


}//D:/xampp/htdocs/babakan/app/modules/login/models/M_login.php
