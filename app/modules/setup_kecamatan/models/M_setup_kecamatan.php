<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_setup_kecamatan extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
	}


	public function list_data()
	{
		$this->db->select('sk.*',false);
		$this->db->from('setup_kec sk');
		$result = $this->db->get()->result_array();
		return $result;
	}


	function detail_data($no_prop,$no_kab,$no_kec)
	{
		$this->db->select('sk.*',false);
		$this->db->from('setup_kec sk');
		$this->db->where('sk.no_prop',$no_prop);
		$this->db->where('sk.no_kab',$no_kab);
		$this->db->where('sk.no_kec',$no_kec);
		$query = $this->db->get();
		return $query->row_array();
	}



	function insert_data($data=array())
	{
		if(count($data)>0){
			$this->db->insert('setup_kec',$data);
			return $this->db->insert_id();
		}
	}


	function update_data($data=array(),$no_prop,$no_kab,$no_kec)
	{
		if(count($data)>0){
			$this->db->where('no_prop',$no_prop);
			$this->db->where('no_kab',$no_kab);
			$this->db->where('no_kec',$no_kec);
			$this->db->update('setup_kec',$data);
		}
	}


	function delete_data($no_prop,$no_kab,$no_kec)
	{
		$this->db->where('no_prop',$no_prop);
		$this->db->where('no_kab',$no_kab);
		$this->db->where('no_kec',$no_kec);
		$this->db->delete('setup_kec');
	}


	public function check_no_kec($no_prop,$no_kab,$no_kec)
	{
		$this->db->where('no_prop',$no_prop);
		$this->db->where('no_kab',$no_kab);
		$this->db->where('no_kec',$no_kec);
		$query = $this->db->get('setup_kec');
		return $query->result_array();
		
	}



}

