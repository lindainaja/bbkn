<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_report_pelayanan_domisili extends CI_Model 
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

	public function get_pelayanan_domisili($no_kel,$month,$year,$jenis='BARU')
	{
		$this->db->select('count(id) as total',false);
		$this->db->from('t_domisili_wni');
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
		$data['total_wni'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_domisili_wna');
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
		$data['total_wna'] = $this->db->get()->row()->total;

		///
		$this->db->select('count(id) as total',false);
		$this->db->from('t_domisili_usaha');
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
		$data['total_du'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_tempat_usaha');
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
		$data['total_tu'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_usaha_pasar');
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
		$data['total_up'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_izin_usaha');
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
		$data['total_iu'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_domisili_kantor');
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
		$data['total_dk'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_domisili_kk');
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
		$data['total_dkk'] = $this->db->get()->row()->total;

		//
		$this->db->select('count(id) as total',false);
		$this->db->from('surat_keterangan_usaha');
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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($month){
			$this->db->where('MONTH(date)',$month);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_sku'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('sk_domisili_usaha');
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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($month){
			$this->db->where('MONTH(date)',$month);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_dun'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('sk_domisili_yayasan');
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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($month){
			$this->db->where('MONTH(date)',$month);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_dy'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_domisili_penduduk');
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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($month){
			$this->db->where('MONTH(date)',$month);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_dp'] = $this->db->get()->row()->total;

		//
		$data['total'] = 0;

		foreach ($data as $key => $value) {
			$data['total'] += $value;
		}
		return $data;


	}



}//D:/xampp/htdocs/babakan/app/modules/report_pelayanan_domisili/models/M_report_pelayanan_domisili.php
