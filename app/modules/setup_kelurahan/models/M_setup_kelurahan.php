<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_setup_kelurahan extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
	}


	public function list_data()
	{
		$this->db->select('sk.*',false);
		$this->db->from('setup_kel sk');
		$result = $this->db->get()->result_array();
		return $result;
	}


	function detail_data($no_prop,$no_kab,$no_kec,$no_kel)
	{
		$this->db->select('sk.*',false);
		$this->db->from('setup_kel sk');
		$this->db->where('sk.no_prop',$no_prop);
		$this->db->where('sk.no_kab',$no_kab);
		$this->db->where('sk.no_kec',$no_kec);
		$this->db->where('sk.no_kel',$no_kel);
		$query = $this->db->get();
		return $query->row_array();
	}



	function insert_data($data=array())
	{
		if(count($data)>0){
			$this->db->insert('setup_kel',$data);
			return $this->db->insert_id();
		}
	}


	function update_data($data=array(),$no_prop,$no_kab,$no_kec,$no_kel)
	{
		if(count($data)>0){
			$this->db->where('no_prop',$no_prop);
			$this->db->where('no_kab',$no_kab);
			$this->db->where('no_kec',$no_kec);
			$this->db->where('no_kel',$no_kel);
			$this->db->update('setup_kel',$data);
		}
	}


	function delete_data($no_prop,$no_kab,$no_kec,$no_kel)
	{
		$this->db->where('no_prop',$no_prop);
		$this->db->where('no_kab',$no_kab);
		$this->db->where('no_kec',$no_kec);
		$this->db->where('no_kel',$no_kel);
		$this->db->delete('setup_kel');
	}


	public function check_no_kel($no_prop,$no_kab,$no_kec,$no_kel)
	{
		$this->db->where('no_prop',$no_prop);
		$this->db->where('no_kab',$no_kab);
		$this->db->where('no_kec',$no_kec);
		$this->db->where('no_kel',$no_kel);
		$query = $this->db->get('setup_kel');
		return $query->result_array();
		
	}



}

