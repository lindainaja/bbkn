<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_setup_role extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
	}


	public function list_data()
	{
		$this->db->select('sr.*',false);
		$this->db->from('setup_role sr');
		$result = $this->db->get()->result_array();
		return $result;
	}

	
	public function list_setup_menu()
	{
		$this->db->select('sm.*',false);
		$this->db->from('setup_menu sm');
		$this->db->order_by('sm.parent_id','ASC');
		$this->db->order_by('sm.position','ASC');
		$result = $this->db->get()->result_array();
		return $result;
	}

	public function setup_menu_mechanism()
	{
		$this->db->select('smm.*',false);
		$this->db->from('setup_menu_mechanism smm');
		$result = $this->db->get()->result_array();
		return $result;
	}

	public function detail_data($id)
	{
		$this->db->select('sr.*',false);
		$this->db->select('IFNULL((SELECT count(u.user_id) FROM users u where u.roleid=sr.id),0) as used',false);
		$this->db->from('setup_role sr');
		$this->db->where('sr.id',$id);
		$result = $this->db->get()->row_array();
		return $result;
	}
	public function list_setup_menu_by_role($roleid)
	{
		$this->db->select('sm.*',false);
		$this->db->from('setup_menu sm');
		$this->db->join('setup_role_menu srm','srm.setup_menuid=sm.id');
		$this->db->where('srm.setup_roleid',$roleid);
		$this->db->order_by('sm.parent_id','ASC');
		$this->db->order_by('sm.position','ASC');
		$result = $this->db->get()->result_array();
		return $result;
	}
	public function setup_menu_mechanism_by_role($roleid)
	{
		$this->db->select('smm.*',false);
		$this->db->from('setup_menu_mechanism smm');
		$this->db->join('setup_role_menu_mechanism srmm','srmm.setup_menu_mechanismid=smm.id');
		$this->db->where('srmm.setup_roleid',$roleid);
		$result = $this->db->get()->result_array();
		return $result;
	}
	

	function insert_data($data=array())
	{
		if(count($data)>0){
			$this->db->insert('setup_role',$data);
			return $this->db->insert_id();
		}
	}


	function update_data($data=array(),$id=0)
	{
		if(count($data)>0){
			$this->db->where('id',$id);
			$this->db->update('setup_role',$data);
		}
	}

	function delete_data($id=0)
	{
		$this->db->where('id',$id);
		$this->db->delete('setup_role');
	}

	function delete_data_menu_by_role($setup_roleid=0)
	{
		$this->db->where('setup_roleid',$setup_roleid);
		$this->db->delete('setup_role_menu');
	}

	function delete_data_menu_mechanism_by_role($setup_roleid=0)
	{
		$this->db->where('setup_roleid',$setup_roleid);
		$this->db->delete('setup_role_menu_mechanism');
	}


}

