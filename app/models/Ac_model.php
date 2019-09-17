<?php

/**
 * 
 */
class Ac_model extends CI_Model
{
	public $select_all_data = 'mp.no_kk,
							   mp.nik,
							   mp.nama,
							   mp.shdk,
							   mp.jk,
							   mp.tmpt_lahir,
							   mp.tgl_lahir,
							   mp.gdr,
							   mp.agama,
							   mp.status,
							   mp.shdrt,
							   mp.ppdk_akhir,
							   mp.pekerjaan,
							   mp.nama_ibu,
							   mp.nama_ayah,
							   mp.nama_kep_kel,
							   mp.alamat,
							   mp.lingkungan,
							   mp.nama_prop,
							   mp.nama_kab,
							   mp.nama_kec,
							   mp.nama_kel ,
							   mp.no_akta_lahir,
							   mp.rt,
							   mp.rw,
							   mp.telp,
							   mp.id_prov,
							   mp.id_kab,
							   mp.id_kec,
							   mp.id_kel';
	public $select_min = 'mp.no_kk,
						  mp.nik,
						  mp.nama,
						  mp.nama_kep_kel,
						  mp.shdk';

	public function query_no_kk($q,$no_prop,$no_kab,$no_kec,$no_kel,$limit=20,$select_mode='all')
	{
		$select = $this->select_min;
		if($select_mode=='all'){
			$select = $this->select_all_data;
		}
		return 
		$this->db->select($select)
				 ->where([
				 	'no_prop' => $no_prop,
				 	'no_kab' => $no_kab,
				 	'no_kec' => $no_kec,
				 	'no_kel' => $no_kel
				 ])
				 ->like('mp.no_kk',$q)
				 ->order_by('mp.no_kk','asc')
				 ->limit($limit)
				 ->get('master_penduduk mp')
				 ->result_array();
	
	}
	public function query_nama_kk($q,$no_prop,$no_kab,$no_kec,$no_kel,$no_kk='',$limit=20,$select_mode='all')
	{
		$select = $this->select_min;
		if($select_mode=='all'){
			$select = $this->select_all_data;
		}
		if(!empty($no_kk)){
			$this->db->where(['no_kk'  => $no_kk]);
		}
		return 
		$this->db->select($select)
				 ->where([
				 	'no_prop' => $no_prop,
				 	'no_kab' => $no_kab,
				 	'no_kec' => $no_kec,
				 	'no_kel' => $no_kel,
				 	
				 	'shdk'   => 'KEPALA KELUARGA'
				 ])
				 ->like('mp.nama',$q)
				 ->order_by('mp.no_kk','asc')
				 ->limit($limit)
				 ->get('master_penduduk mp')
				 ->result_array();
	}
	public function query_auto($q,$no_prop,$no_kab,$no_kec,$no_kel,$f,$no_kk='',$limit=20,$select_mode='all')
	{
		$valid_f = ['nik','nama'];
		if(!in_array($f, $valid_f)){
			return [];
		}
		$select = $this->select_min;
		if($select_mode=='all'){
			$select = $this->select_all_data;
		}
		if(!empty($no_kk)){
			$this->db->where(['no_kk'  => $no_kk]);
		}
		return 
		$this->db->select($select)
				 ->where([
				 	'no_prop' => $no_prop,
				 	'no_kab' => $no_kab,
				 	'no_kec' => $no_kec,
				 	'no_kel' => $no_kel,				 	
				 ])
				 ->like('mp.' . $f,$q)
				 ->order_by('mp.'.$f,'asc')
				 ->limit($limit)
				 ->get('master_penduduk mp')
				 ->result_array();
	}
}