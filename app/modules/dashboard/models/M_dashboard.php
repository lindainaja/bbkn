<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_dashboard extends CI_Model 
{

	function __construct()
	{
		parent::__construct();

		$this->no_prop			= $this->session->userdata('log_prop');
		$this->no_kab			= $this->session->userdata('log_kab');
		$this->no_kec			= $this->session->userdata('log_kec');
		$this->no_kel			= $this->session->userdata('log_kel');

	}


	public function list_pelayanan_ktp($tahun=0,$filter_no_kel)
	{
		$filter_no_kel = $filter_no_kel ? $filter_no_kel :$this->no_kel;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_pengantar_ktp');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_pengantar'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_permohonan_ktp');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_permohonan'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_proses_ktp');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_proses'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_ralat_ktp');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_ralat'] = $this->db->get()->row()->total; 

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_hilang_ktp');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_hilang'] = $this->db->get()->row()->total;
		return $data;
	}

	public function list_pelayanan_kk($tahun=0,$filter_no_kel)
	{
		$filter_no_kel = $filter_no_kel ? $filter_no_kel : $this->no_kel;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_permohonan_kk');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_permohonan'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_perubahan_kk');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_perubahan'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_hilang_kk');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_hilang'] = $this->db->get()->row()->total;

		return $data;
	}
	public function list_pelayanan_tidak_mampu($tahun=0,$filter_no_kel)
	{
		$filter_no_kel = $filter_no_kel ? $filter_no_kel : $this->no_kel;

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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_tm'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_tidak_mampu_pendidikan');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_tp'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_tidak_mampu_kesehatan');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_tk'] = $this->db->get()->row()->total;


		$this->db->select('count(id) as total',false);
		$this->db->from('t_sktm');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_sktm'] = $this->db->get()->row()->total;
		return $data;
	}
	public function list_pelayanan_domisili($tahun=0,$filter_no_kel)
	{
		$filter_no_kel = $filter_no_kel ? $filter_no_kel : $this->no_kel;

		

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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_dkk'] = $this->db->get()->row()->total;


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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_dp'] = $this->db->get()->row()->total;
		return $data;
		return $data;
	}




	public function list_pelayanan_kelahiran_dan_kematian($tahun=0,$filter_no_kel)
	{
		$filter_no_kel = $filter_no_kel ? $filter_no_kel : $this->no_kel;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_lahir_baru');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_lahir_baru'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_kelahiran');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_lahir_lama'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_kematian');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_kematian'] = $this->db->get()->row()->total;

		return $data;
	}



	public function list_pelayanan_pernikahan($tahun=0,$filter_no_kel)
	{
		$filter_no_kel = $filter_no_kel ? $filter_no_kel : $this->no_kel;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_untuk_nikah');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_untuk_nikah'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_asal_usul');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_asal_usul'] = $this->db->get()->row()->total;


		$this->db->select('count(id) as total',false);
		$this->db->from('t_kematian_suami_istri');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_kematian_suami_istri'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_verbal_wali_hakim');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_verbal_wali_hakim'] = $this->db->get()->row()->total;


		$this->db->select('count(id) as total',false);
		$this->db->from('t_numpang_nikah');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_numpang_nikah'] = $this->db->get()->row()->total;


		$this->db->select('count(id) as total',false);
		$this->db->from('t_penghasilan');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_penghasilan'] = $this->db->get()->row()->total;


		$this->db->select('count(id) as total',false);
		$this->db->from('t_belum_pernah_nikah');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_belum_pernah_nikah'] = $this->db->get()->row()->total;

		// 
		$this->db->select('count(id) as total',false);
		$this->db->from('sk_belum_pernah_menikah');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_belum_pernah_menikah'] = $this->db->get()->row()->total;
		// 


		$this->db->select('count(id) as total',false);
		$this->db->from('t_duda_janda');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_duda_janda'] = $this->db->get()->row()->total;


		$this->db->select('count(id) as total',false);
		$this->db->from('t_suami_istri');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_suami_istri'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_wali_nikah');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_wali_nikah'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_pernyataan_cerai');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_pernyataan_cerai'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_persetujuan_mempelai');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_pm'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_numpang_nikah');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_nn'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_izin_orangtua');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_iot'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_keterangan_orangtua');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_kot'] = $this->db->get()->row()->total;
		return $data;
	}



	public function list_pelayanan_lainnya($tahun=0,$filter_no_kel)
	{
		$filter_no_kel = $filter_no_kel ? $filter_no_kel : $this->no_kel;

		

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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_skck'] = $this->db->get()->row()->total;
		//
		$this->db->select('count(id) as total',false);
		$this->db->from('sk_kelakuan_baik');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_kelakuan_baik'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('surat_keterangan_lain');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_lain'] = $this->db->get()->row()->total;
		//

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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_tidak_memiliki_rumah'] = $this->db->get()->row()->total;

		//
		$this->db->select('count(id) as total',false);
		$this->db->from('sk_belum_memiliki_rumah');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_belum_memiliki_rumah'] = $this->db->get()->row()->total;

		//


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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_izin_keramaian'] = $this->db->get()->row()->total;

		//
		$this->db->select('count(id) as total',false);
		$this->db->from('surat_izin_keramaian');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_surat_izin_keramaian'] = $this->db->get()->row()->total;


		$this->db->select('count(id) as total',false);
		$this->db->from('sk_izin_lingkungan');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_izin_lingkungan'] = $this->db->get()->row()->total;
		//

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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_sppt'] = $this->db->get()->row()->total;

		//
		$this->db->select('count(id) as total',false);
		$this->db->from('t_spp_pbb');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_spp_pbb'] = $this->db->get()->row()->total;
		//

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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_ghoib'] = $this->db->get()->row()->total;

		//


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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_aw'] = $this->db->get()->row()->total;

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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_awt'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_hak_milik_kapal');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_hmk'] = $this->db->get()->row()->total;

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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_kb'] = $this->db->get()->row()->total;

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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_pj'] = $this->db->get()->row()->total;

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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_ph'] = $this->db->get()->row()->total;

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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_bnr'] = $this->db->get()->row()->total;

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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_bns'] = $this->db->get()->row()->total;
		return $data;
	}

	public function list_pelayanan_bspo($tahun=0,$filter_no_kel){
		$this->db->select('count(id) as total',false);
		$this->db->from('t_sp_pfbt_sporadik');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_spps'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sp_kepemilikan_tanah');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_skt'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_rpdy_pb');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_rpb'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sp_batas_tanah');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_bt'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sp_pertahanan');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_pp'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sp_jual_beli');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_jb'] = $this->db->get()->row()->total;

		$this->db->select('count(id) as total',false);
		$this->db->from('t_sk_hibah');
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
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_hb'] = $this->db->get()->row()->total;
		return $data;
	}

	public function list_pelayanan_pindat()
	{
		$data = [];
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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
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
		if($filter_no_kel){
			$this->db->where('no_kel',$filter_no_kel);
		}
		if($tahun){
			$this->db->where('YEAR(date)',$tahun);
		}
		$data['total_datang'] = $this->db->get()->row()->total;

		$table_sufixes=[108,126,128,129,130,131,132,'134_133','136_135',137,138,139];

		foreach ($table_sufixes as $suf) {
			$table_name = 't_pindah_wni_'.$suf;
			$key= extract_f($suf);
		
			$this->db->select('count(id) as total',false);
			$this->db->from($table_name);
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
			if($tahun){
				$this->db->where('YEAR(date)',$tahun);
			}
			$data[$key] = $this->db->get()->row()->total;
		}
		return $data;
	}

}//D:/xampp/htdocs/babakan/app/modules/dashboard/models/M_dashboard.php
