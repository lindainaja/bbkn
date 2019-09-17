<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pegawai extends CI_Model 
{

	function __construct()
	{
		parent::__construct();

		$this->no_prop		= $this->session->userdata('log_prop');
		$this->no_kab		= $this->session->userdata('log_kab');
		$this->no_kec		= $this->session->userdata('log_kec');

	}


	public function list_data($offset,$sort_by, $sort_order,$keyword='',$no_kec=0,$no_kel=0)
	{
		$keyword = clean_char_search($keyword);
		if($keyword){
			$where = '(p.nip LIKE \'%'.$keyword.'%\' 
						 OR p.nama_pegawai LIKE \'%'.$keyword.'%\' 
						 OR p.agama LIKE \'%'.$keyword.'%\' 
						 OR p.status_perkawinan LIKE \'%'.$keyword.'%\' )';
			$this->db->where($where);
		}

		$this->db->select('p.*',false);
		$this->db->from('r_pegawai p');
		// $this->db->join('r_peg_jab jab','jab.id_pegawai=p.id_pegawai');

		// if($no_kec && !$no_kel){
		// 	$this->db->join('setup_kec kec','kec.kode_unor=SUBSTR(jab.kode_unor,1,8)');
		// 	$this->db->where('kec.no_prop',$this->no_prop);
		// 	$this->db->where('kec.no_kab',$this->no_kab);
		// 	$this->db->where('kec.no_kec',$no_kec);
			$this->db->where('p.archive IS NULL');
		// } elseif($no_kec && $no_kel){
		// 	$this->db->join('setup_kel kel','kel.kode_unor=SUBSTR(jab.kode_unor,1,8)');
		// 	$this->db->where('kel.no_prop',$this->no_prop);
		// 	$this->db->where('kel.no_kab',$this->no_kab);
		// 	$this->db->where('kel.no_kec',$no_kec);
		// 	$this->db->where('kel.no_kel',$no_kel);
		// }

		// $this->db->group_by('p.id_pegawai');
		$this->db->limit($this->config->item('page_num'),$offset);
		$this->db->order_by($sort_by,$sort_order);
		$result = $this->db->get();
		// if($resultOnly){
		// 	return $result->result_id;
		// }
		$result = $result->result_array();
		if(count($result)>0){
			return $result;
		} else {
			$offset = $offset-$this->config->item('page_num');
			if($offset >= 0){
				return $this->list_data($offset,$sort_by, $sort_order,$keyword,$no_kec,$no_kel);
			} else {
				return array();
			}
		}
	}


	public function jumlah_data($keyword='',$no_kec=0,$no_kel=0)
	{
		$keyword = clean_char_search($keyword);
		if($keyword){
			$where = '(p.nip_baru LIKE \'%'.$keyword.'%\' 
						 OR p.nama_pegawai LIKE \'%'.$keyword.'%\' 
						 OR p.agama LIKE \'%'.$keyword.'%\' 
						 OR p.status_perkawinan LIKE \'%'.$keyword.'%\' )';
			$this->db->where($where);
		}
		
		$this->db->select('p.id_pegawai');
		$this->db->from('r_pegawai p');
		// $this->db->join('r_peg_jab jab','jab.id_pegawai=p.id_pegawai');
		// if($no_kec && !$no_kel){
		// 	$this->db->join('setup_kec kec','kec.kode_unor=SUBSTR(jab.kode_unor,1,8)');
		// 	$this->db->where('kec.no_prop',$this->no_prop);
		// 	$this->db->where('kec.no_kab',$this->no_kab);
		// 	$this->db->where('kec.no_kec',$no_kec);
		// } elseif($no_kec && $no_kel){
		// 	$this->db->join('setup_kel kel','kel.kode_unor=SUBSTR(jab.kode_unor,1,8)');
		// 	$this->db->where('kel.no_prop',$this->no_prop);
		// 	$this->db->where('kel.no_kab',$this->no_kab);
		// 	$this->db->where('kel.no_kec',$no_kec);
		// 	$this->db->where('kel.no_kel',$no_kel);
		// }
		// $this->db->group_by('p.id_pegawai');
		$result = $this->db->get()->result_array();
		return count($result);
	}

	function detail_data($id=0)
	{
		$this->db->select('p.*',false);
		$this->db->from('r_pegawai p');
		// $this->db->join('r_peg_jab jab','jab.id_pegawai=p.id_pegawai');
		$this->db->where('p.id_pegawai',$id);
		// $this->db->group_by('p.id_pegawai');
		$query = $this->db->get();
		return $query->row_array();
	}



	function insert_data($data=array())
	{
		if(count($data)>0){
			$this->db->insert('r_pegawai',$data);
			return $this->db->insert_id();
		}
	}

	function insert_data_2($data=array())
	{
		if(count($data)>0){
			$this->db->insert('r_peg_jab',$data);
		}
	}



	function update_data($data=array(),$id=0)
	{
		if(count($data)>0){
			$this->db->where('id_pegawai',$id);
			$this->db->update('r_pegawai',$data);
		}
	}

	function update_data_2($data=array(),$id=0)
	{
		if(count($data)>0){
			$this->db->where('id_pegawai',$id);
			$this->db->update('r_peg_jab',$data);
		}
	}


	function delete_data($id=0)
	{
		$this->db->where('id_pegawai',$id);
		$this->db->delete('r_pegawai');

		$this->db->where('id_pegawai',$id);
		$this->db->delete('r_peg_jab');
	}


	public function check_nip($nip='',$id)
	{
		$this->db->where('nip',$nip);
		if($id>0){
			$this->db->where('id_pegawai != '.$id.' ');
		}
		$query = $this->db->get('r_pegawai');
		return $query->result_array();
		
	} 

}//D:/xampp/htdocs/babakan/app/modules/pegawai/models/M_pegawai.php
