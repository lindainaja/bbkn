<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_report_pelayanan_pernikahan extends CI_Model 
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
		if($no_kel){
			$this->db->where('no_kel',$no_kel);
		}
		if($month){
			$this->db->where('MONTH(date)',$month);
		}
		if($year){
			$this->db->where('YEAR(date)',$year);
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
		if($no_kel){
			$this->db->where('no_kel',$no_kel);
		}
		if($month){
			$this->db->where('MONTH(date)',$month);
		}
		if($year){
			$this->db->where('YEAR(date)',$year);
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
		if($no_kel){
			$this->db->where('no_kel',$no_kel);
		}
		if($month){
			$this->db->where('MONTH(date)',$month);
		}
		if($year){
			$this->db->where('YEAR(date)',$year);
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
		if($no_kel){
			$this->db->where('no_kel',$no_kel);
		}
		if($month){
			$this->db->where('MONTH(date)',$month);
		}
		if($year){
			$this->db->where('YEAR(date)',$year);
		}
		$data['total_verbal_wali_hakim'] = $this->db->get()->row()->total;

		//========================================================================================
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
		if($no_kel){
			$this->db->where('no_kel',$no_kel);
		}
		if($month){
			$this->db->where('MONTH(date)',$month);
		}
		if($year){
			$this->db->where('YEAR(date)',$year);
		}
		$data['total_persetujuan_mempelai'] = $this->db->get()->row()->total;

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
		if($no_kel){
			$this->db->where('no_kel',$no_kel);
		}
		if($month){
			$this->db->where('MONTH(date)',$month);
		}
		if($year){
			$this->db->where('YEAR(date)',$year);
		}
		$data['total_keterangan_orangtua'] = $this->db->get()->row()->total;

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
		if($no_kel){
			$this->db->where('no_kel',$no_kel);
		}
		if($month){
			$this->db->where('MONTH(date)',$month);
		}
		if($year){
			$this->db->where('YEAR(date)',$year);
		}
		$data['total_izin_orangtua'] = $this->db->get()->row()->total;		

		//========================================================================================

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
		if($no_kel){
			$this->db->where('no_kel',$no_kel);
		}
		if($month){
			$this->db->where('MONTH(date)',$month);
		}
		if($year){
			$this->db->where('YEAR(date)',$year);
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


		// $this->db->select('count(id) as total',false);
		// $this->db->from('t_belum_pernah_nikah');
		// $this->db->where('archive',0);
		// if($this->no_prop){
		// 	$this->db->where('no_prop',$this->no_prop);
		// }
		// if($this->no_kab){
		// 	$this->db->where('no_kab',$this->no_kab);
		// }
		// if($this->no_kec){
		// 	$this->db->where('no_kec',$this->no_kec);
		// }
		// if($no_kel){
		// 	$this->db->where('no_kel',$no_kel);
		// }
		// if($month){
		// 	$this->db->where('MONTH(date)',$month);
		// }
		// if($year){
		// 	$this->db->where('YEAR(date)',$year);
		// }
		// $data['total_belum_pernah_nikah'] = $this->db->get()->row()->total;
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
		if($month){
			$this->db->where('MONTH(date)',$month);
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
		if($no_kel){
			$this->db->where('no_kel',$no_kel);
		}
		if($month){
			$this->db->where('MONTH(date)',$month);
		}
		if($year){
			$this->db->where('YEAR(date)',$year);
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
		if($no_kel){
			$this->db->where('no_kel',$no_kel);
		}
		if($month){
			$this->db->where('MONTH(date)',$month);
		}
		if($year){
			$this->db->where('YEAR(date)',$year);
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
		if($no_kel){
			$this->db->where('no_kel',$no_kel);
		}
		if($month){
			$this->db->where('MONTH(date)',$month);
		}
		if($year){
			$this->db->where('YEAR(date)',$year);
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
		if($no_kel){
			$this->db->where('no_kel',$no_kel);
		}
		if($month){
			$this->db->where('MONTH(date)',$month);
		}
		if($year){
			$this->db->where('YEAR(date)',$year);
		}
		$data['total_pernyataan_cerai'] = $this->db->get()->row()->total;

		$data['total'] = 0;
		foreach ($data as $key => $value) {
			$data['total'] += $value;
		}


		return $data;

	}



}

