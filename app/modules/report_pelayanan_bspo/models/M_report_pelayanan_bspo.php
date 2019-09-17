<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_report_pelayanan_bspo extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
		$this->no_prop		= $this->session->userdata('log_prop');
		$this->no_kab		= $this->session->userdata('log_kab');
		$this->no_kec		= $this->session->userdata('log_kec');
	}
	
	
	public function list_kelurahan($no_kel=0){
		$this->db->select('prop.no_prop,kab.no_kab,kec.no_kec,kel.no_kel',false);
		$this->db->select('prop.nama_prop,kab.nama_kab,kec.nama_kec,kel.nama_kel',false);
		$this->db->from('setup_prop prop');
		$this->db->join('setup_kab kab','kab.no_prop=prop.no_prop');
		$this->db->join('setup_kec kec','kec.no_kab=kab.no_kab AND kec.no_prop=prop.no_prop');
		$this->db->join('setup_kel kel','kel.no_kec=kec.no_kec AND kel.no_kab=kab.no_kab AND kel.no_prop=prop.no_prop');
		if($this->no_prop){
			$this->db->where('prop.no_prop',$this->no_prop);
		}
		if($this->no_kab){
			$this->db->where('kab.no_kab',$this->no_kab);
		}
		if($this->no_kec){
			$this->db->where('kec.no_kec',$this->no_kec);
		}
		if($no_kel){
			$this->db->where('kel.no_kel',$no_kel);
		}
		$result = $this->db->get()->result_array();
		return $result;

	}
	public function get_tables( )
	{
		return  array(
			'spss' => 't_sp_pfbt_sporadik',
			'skt'=>'t_sp_kepemilikan_tanah',
			'rpb'=>'t_rpdy_pb',
			'bt'=>'t_sp_batas_tanah',
			'pp'=>'t_sp_pertahanan',
			'jb'=>'t_sp_jual_beli',
			'hb'=>'t_sk_hibah'
		);
	}
	public function get_pelayanan_data($no_kel,$month,$year)
	{
		$tables = $this->get_tables();
		$data=array();

		foreach ($tables as $key => $table) {
			$this->db->select('count(id) as total',false);
			$this->db->from($table);
			$this->db->where('archive',0);
			if($this->no_prop){
				$this->db->where('no_prop',$this->no_prop);
			}
			if($this->no_kab){
				$this->db->where('no_kab',$this->no_kab);
			}
			if($this->no_kec){
				$this->db->where('no_kec',$this->no_kec);
			}
			if($no_kel){
				$this->db->where('no_kel',$no_kel);
			}
			if($month){
				$this->db->where('MONTH(date)',$month);
			}
			if($year){
				$this->db->where('YEAR(date)',$year);
			}
			$data[$key] = $this->db->get()->row()->total;
		}
		
		return $data;


	}



}//D:/xampp/htdocs/babakan/app/modules/report_pelayanan_bspo/models/M_report_pelayanan_bspo.php
