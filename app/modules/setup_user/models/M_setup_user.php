<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_setup_user extends CI_Model 
{

	public function list_data($offset,$sort_by, $sort_order,$keyword='')
	{
		$keyword = clean_char_search($keyword);
		if($keyword){
			$where = '(u.nama_user LIKE \'%'.$keyword.'%\' 
						 OR u.username LIKE \'%'.$keyword.'%\' 
						 OR r.description LIKE \'%'.$keyword.'%\' )';
			$this->db->where($where);
		}

		$this->db->select('u.*,r.description');
		$this->db->from('users u');
		$this->db->join('setup_role r','r.id=u.roleid');
		$this->db->order_by($sort_by,$sort_order);
		$this->db->limit($this->config->item('page_num_setup'),$offset);
		$result = $this->db->get()->result_array();
		if(count($result)>0){
			return $result;
		} else {
			$offset = $offset-$this->config->item('page_num_setup');
			if($offset >= 0){
				return $this->list_data($offset,$sort_by, $sort_order,$keyword);
			} else {
				return array();
			}
		}
	}

	public function jumlah_data($keyword='')
	{
		$keyword = clean_char_search($keyword);
		if($keyword){
			$where = '(u.nama_user LIKE \'%'.$keyword.'%\' 
						 OR u.username LIKE \'%'.$keyword.'%\' 
						 OR r.description LIKE \'%'.$keyword.'%\' )';
			$this->db->where($where);
		}

		$this->db->select('count(u.user_id) as total');
		$this->db->from('users u');
		$this->db->join('setup_role r','r.id=u.roleid');
		return $this->db->get()->row()->total;
	}

	function detail_data($userid='')
	{
		$this->db->select('u.*,rp.id_pegawai,rp.nip_baru,rp.gender');
		$this->db->from('users u');
		
		$this->db->join('user_pegawai up','up.user_id=u.user_id','LEFT');
		$this->db->join('r_pegawai rp','rp.id_pegawai=up.id_pegawai','LEFT');
		
		$this->db->where('u.user_id',$userid);
		$query = $this->db->get();
		return $query->row_array();
		
	}

	public function check_username($username='',$id=0)
	{

		$this->db->where('username',$username);
		if($id){
			$this->db->where('user_id != '.$id.' ');
		}
		$query = $this->db->get('users');
		// print_r($this->db->last_query());
		return $query->result_array();
		
	}

	public function list_user_key()
	{
		$this->db->select('uk.*');
		$this->db->from('user_key uk');
		$this->db->where('uk.used',0);
		$result = $this->db->get()->result_array();
		return $result;
	}
	function update_user_key($data=array(),$mobile=array(),$code=array())
	{
		if(count($data)>0 && count($mobile)>0 && count($code)>0){
			$this->db->where_in('mobile',$mobile);
			$this->db->where_in('code',$code);
			$this->db->update('user_key',$data);
		}
	}


	function insert_data($data=array())
	{
		if(count($data)>0){
			$this->db->insert('users',$data);
			return $this->db->insert_id();
		}
	}

	function insert_user_pegawai($data=array())
	{
		if(count($data)>0){
			$this->db->insert('user_pegawai',$data);
		}
	}

	function update_data($data=array(),$userid=0)
	{
		if(count($data)>0){
			$this->db->where('user_id',$userid);
			$this->db->update('users',$data);
		}
	}

	function delete_data($userid=0)
	{
		$this->db->where('user_id',$userid);
		$this->db->delete('users');

		$this->db->where('user_id',$userid);
		$this->db->delete('user_pegawai');
	}

	function delete_user_pegawai($userid=0)
	{
		$this->db->where('user_id',$userid);
		$this->db->delete('user_pegawai');
	}


}

