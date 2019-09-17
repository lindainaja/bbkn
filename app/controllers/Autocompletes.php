<?php

class Autocompletes extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('autocomplete');

		$this->no_prop		= $this->session->userdata('log_prop');
		$this->no_kab		= $this->session->userdata('log_kab');
		$this->no_kec		= $this->session->userdata('log_kec');
		$this->no_kel		= $this->session->userdata('log_kel');
	}

	function load_sebab_kematian()
	{
		$keyword = $this->input->get('q');
		$data = display_sebab_kematian($keyword);
		echo json_encode($data);
	}

	function load_pekerjaan()
	{
		$keyword = $this->input->get('q');
		$data = display_pekerjaan($keyword);
		echo json_encode($data);
	}

	function load_data_penduduk()
	{
		$keyword = $this->input->get('q');
		$f = $this->input->get('f');
		
		$no_kel = $this->input->get('no_kel')? $this->no_kel: $this->no_kel;
		$data = [];
		$this->load->model('ac_model');
		switch($f){
			case 'nik':
			case 'nama':
				$no_kk = $this->input->get('no_kk');
				$data = $this->ac_model->query_auto($keyword,$this->no_prop,$this->no_kab,$this->no_kec,$no_kel,$f,$no_kk);
				
				break;
			case 'no_kk_asal':
			case 'no_kk':
			case 'no_kk_pindah':
				$data = $this->ac_model->query_no_kk($keyword,$this->no_prop,$this->no_kab,$this->no_kec,$no_kel);
				break;
			case 'nama_kk_asal':
			case 'nama_kk':
			case 'nama_kk_pindah':
				$no_kk = $this->input->get('no_kk');
				$data = $this->ac_model->query_nama_kk($keyword,$this->no_prop,$this->no_kab,$this->no_kec,$no_kel,$no_kk);
				break;
			default:
				$data = display_data_penduduk($keyword,$this->no_prop,$this->no_kab,$this->no_kec,$no_kel);
				break;
		}
		echo json_encode($data);
	}

	function load_data_tdd()
	{
		$keyword = $this->input->get('q');
		$no_kel = $this->input->get('no_kel')? $this->no_kel: $this->no_kel;
		$data = display_data_ttd($keyword,$this->no_prop,$this->no_kab,$this->no_kec,$no_kel);
		echo json_encode($data);
	}

	function load_data_provinsi()
	{
		$keyword = trim($this->input->get('q'));
		$data = [];
		$limit = 0+trim($this->input->get('limit'));
		if(1){
			if($limit==0){
				$limit=20;
			}
			$data = $this->db->limit($limit)->like('nama',$keyword)->get('indo_provinsi')->result();

		}
		echo json_encode($data);
	}
	function load_data_kabupaten()
	{
		$keyword = trim($this->input->get('q'));
		$id_prov = 0+trim($this->input->get('id_prov'));
		$data = [];
		$limit = 0+trim($this->input->get('limit'));
		if( !empty($id_prov)){
			if($limit==0){
				$limit=20;
			}
			$data = $this->db->limit($limit)->where('id_prov',$id_prov)->like('nama',$keyword)->get('indo_kabupaten')->result();

		}
		echo json_encode($data);
	}
	function load_data_kecamatan()
	{
		$keyword = trim($this->input->get('q'));
		$id_kab = 0+trim($this->input->get('id_kab'));
		$data = [];
		$limit = 0+trim($this->input->get('limit'));
		if( !empty($id_kab)){
			if($limit==0){
				$limit=20;
			}
			$data = $this->db->limit($limit)->where('id_kab',$id_kab)->like('nama',$keyword)->get('indo_kecamatan')->result();

		}
		echo json_encode($data);
	}
	function load_data_kelurahan()
	{
		$keyword = trim($this->input->get('q'));
		$id_kec = 0+trim($this->input->get('id_kec'));
		$data = [];
		$limit = 0+trim($this->input->get('limit'));
		if( !empty($id_kec)){
			if($limit==0){
				$limit=20;
			}
			$data = $this->db->limit($limit)->where('id_kec',$id_kec)->like('nama',$keyword)->get('indo_kelurahan')->result();

		}
		echo json_encode($data);
	}
}
