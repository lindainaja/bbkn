<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daerah_model extends CI_Model {

  
	public function getProv()
	{
    
    return $this->db->get('indo_provinsi')->result();
	}

	public function getKab($id_prov)
	{
	  return $this->db->where(['id_prov'=>$id_prov])->get('indo_kabupaten')->result();
	}

	public function getKec($id_kab)
	{


	  return $this->db->where(['id_kab'=>$id_kab])->get('indo_kecamatan')->result();

	}

	public function getKel($id_kec)
	{
	  
	  return $this->db->where(['id_kec'=>$id_kec])->get('indo_kelurahan')->result();

	}
}
