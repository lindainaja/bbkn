<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_report_pelayanan_lainnya extends CI_Model 
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

	public function get_pelayanan($no_kel,$month,$year)
	{
		//=============================================================================

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_ahli_waris');
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
		$data['total_ahli_waris'] = $this->db->get()->row()->total;


		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_ahli_waris_tanah');
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
		$data['total_ahli_waris_tanah'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_kebakaran');
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
		$data['total_kebakaran'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_pas_jalan');
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
		$data['total_pas_jalan'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_penghasilan_lainya');
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
		$data['total_penghasilan'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_bn_rekening');
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
		$data['total_bn_rekening'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_bn_sertifikat');
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
		$data['total_bn_sertifikat'] = $this->db->get()->row()->total;

		//=============================================================================

		$this->db->select('count(id) as total',false);
		$this->db->from('t_skck');
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
		$data['total_skck'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_tidak_mampu');
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
		$data['total_tidak_mampu'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_tidak_memiliki_rumah');
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
		$data['total_tidak_memiliki_rumah'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_harga_pasaran_tanah');
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
		$data['total_harga_pasaran_tanah'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_imb');
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
		$data['total_imb'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_izin_keramaian');
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
		$data['total_izin_keramaian'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_kehilangan');
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
		$data['total_kehilangan'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sppt');
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
		$data['total_sppt'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_ikrar_masuk_islam');
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
		$data['total_ikrar_masuk_islam'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_surat_pernyataan');
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
		$data['total_surat_pernyataan'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_ghoib');
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
		$data['total_ghoib'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_pindah');
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
		$data['total_pindah'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_datang');
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
		$data['total_datang'] = $this->db->get()->row()->total;


		return $data;

	}



}

