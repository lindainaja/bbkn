<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_domisili_penduduk extends CI_Model 
{

	function __construct()
	{
		parent::__construct();

		$this->no_prop			= $this->session->userdata('log_prop');
		$this->no_kab			= $this->session->userdata('log_kab');
		$this->no_kec			= $this->session->userdata('log_kec');
	}


	public function list_data($no_prop=0,$no_kab=0,$no_kec,$no_kel=0,$bln='',$thn='')
	{
		$no_kel = $no_kel ? $no_kel : $this->session->userdata('log_kel');
		
		$this->db->select('pk.*',false);
		$this->db->select('sp.nama_prop,skab.nama_kab,skec.nama_kec,skel.nama_kel',false);
		$this->db->from('t_domisili_penduduk pk');
		$this->db->join('setup_prop sp','sp.no_prop=pk.no_prop');
		$this->db->join('setup_kab skab','skab.no_prop=pk.no_prop AND skab.no_kab=pk.no_kab');
		$this->db->join('setup_kec skec','skec.no_prop=pk.no_prop AND skec.no_kab=pk.no_kab AND skec.no_kec=pk.no_kec');
		$this->db->join('setup_kel skel','skel.no_prop=pk.no_prop AND skel.no_kab=pk.no_kab AND skel.no_kec=pk.no_kec AND skel.no_kel=pk.no_kel');
		if($no_prop){
			$this->db->where('pk.no_prop',$no_prop);
		}
		if($no_kab){
			$this->db->where('pk.no_kab',$no_kab);
		}
		if($no_kec){
			$this->db->where('pk.no_kec',$no_kec);
		}
		if($no_kel){
			$this->db->where('pk.no_kel',$no_kel);
		}
		if($bln){
			$this->db->where('MONTH(pk.date)',$bln);
		}
		if($thn){
			$this->db->where('YEAR(pk.date)',$thn);
		}

		$this->db->where('pk.archive',0);
		$this->db->order_by('pk.id','DESC');
		$result = $this->db->get()->result_array();
		return $result;
	}


	function detail_data($id=0,$result=false)
	{
		$this->db->select('pk.*',false);
		$this->db->select('sp.nama_prop,skab.nama_kab,skec.nama_kec,skel.nama_kel',false);
		$this->db->select('skec.nama_pej,skec.nip_pej',false);
		$this->db->select('skel.nama_lur,skel.nip_lur',false);
		$this->db->from('t_domisili_penduduk pk');
		$this->db->where('pk.id',$id);
		if($this->session->userdata('log_kel')){
			$this->db->where('pk.no_kel',$this->session->userdata('log_kel'));
		}
		$this->db->join('setup_prop sp','sp.no_prop=pk.no_prop');
		$this->db->join('setup_kab skab','skab.no_prop=pk.no_prop AND skab.no_kab=pk.no_kab');
		$this->db->join('setup_kec skec','skec.no_prop=pk.no_prop AND skec.no_kab=pk.no_kab AND skec.no_kec=pk.no_kec');
		$this->db->join('setup_kel skel','skel.no_prop=pk.no_prop AND skel.no_kab=pk.no_kab AND skel.no_kec=pk.no_kec AND skel.no_kel=pk.no_kel');
		$query = $this->db->get();
		if($result){
			return $query->result_id;
		}
		return $query->row_array();
	}



	function insert_data($data=array())
	{
		if(count($data)>0){
			$this->db->insert('t_domisili_penduduk',$data);
			return $this->db->insert_id();
		}
	}


	function update_data($data=array(),$id=0)
	{
		if(count($data)>0){
			$this->db->where('id',$id);
			$this->db->update('t_domisili_penduduk',$data);
		}
	}


	function delete_data($id=0)
	{
		$this->db->where('id',$id);
		$this->db->delete('t_domisili_penduduk');
	}





}//D:/xampp/htdocs/babakan/app/modules/domisili_penduduk/models/M_domisili_penduduk.php
