<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_download extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
	}



	function insert_data($data=array())
	{
		if(count($data)>0){
			$this->db->insert('l_download',$data);
			
			$flag_id = $data['flag_id'];
			$flag = $data['flag'];

			$this->db->select('count(d.id) as total',false);
			$this->db->from('l_download d');
			$this->db->where('d.flag_id',$flag_id);
			$this->db->where('d.flag',$flag);
			$query = $this->db->get();
			return $query->row()->total;

		}
	}



}