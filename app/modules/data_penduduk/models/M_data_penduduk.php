<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_data_penduduk extends CI_Model 
{

	function __construct()
	{
		parent::__construct();

		$this->no_prop	= $this->session->userdata('log_prop');
		$this->no_kab	= $this->session->userdata('log_kab');
		$this->no_kec	= $this->session->userdata('log_kec');
	}
	public function record_exists($nik)
	{
		return $this->db->where('nik',$nik)->get('master_penduduk')->num_rows() > 0;
	}
	public function update_record($nik,$new_record)
	{
		unset($new_record['nik']);
		return $this->db->where('nik',$nik)->update('master_penduduk',$new_record);
		
	}
	public function insert_record($new_record)
	{
		return $this->db->insert('master_penduduk',$new_record);
	}
	public function get_instansi_config($no_kel)
	{
		return
		$this->db->select('a.no_kel,
						   a.nama_kel,
						   b.no_kec,
						   b.nama_kec,
						   c.no_kab,
						   c.nama_kab,
						   d.no_prop,
						   d.nama_prop')
				  ->from('setup_kel a')
				  ->join('setup_kec b','b.no_kec=a.no_kec','left')
				  ->join('setup_kab c','c.no_kab=b.no_kab','left')
				  ->join('setup_prop d','d.no_prop=c.no_prop','left')
				  ->where('a.no_kel',$no_kel)
				  ->get()
				  ->row();
	}

	public function list_data($offset,$sort_by, $sort_order,$keyword='',$no_kel=0)
	{
		$keyword = clean_char_search($keyword);
		if($keyword){
			$where = '(mp.nama LIKE \'%'.$keyword.'%\' 
						 OR mp.nik LIKE \'%'.$keyword.'%\' 
						 OR mp.status LIKE \'%'.$keyword.'%\' 
						 OR mp.agama LIKE \'%'.$keyword.'%\' )';
			$this->db->where($where);
		}
		
		if($this->session->userdata('log_kel')){
			$no_kel = $this->session->userdata('log_kel');
		} else {
			$no_kel = $no_kel ? $no_kel : $this->session->userdata('log_kel');
		}

		$this->db->select('mp.*',false);
		$this->db->from('master_penduduk mp');
		if($this->no_prop){
			$this->db->where('mp.no_prop',$this->no_prop);
		}
		if($this->no_kab){
			$this->db->where('mp.no_kab',$this->no_kab);
		}
		if($this->no_kec){
			$this->db->where('mp.no_kec',$this->no_kec);
		}
		if($no_kel){
			$this->db->where('mp.no_kel',$no_kel);
		}
		$this->db->order_by($sort_by,$sort_order);
		$this->db->limit($this->config->item('page_num_setup'),$offset);
		$result = $this->db->get()->result_array();
		if(count($result)>0){
			return $result;
		} else {
			$offset = $offset-$this->config->item('page_num_setup');
			if($offset >= 0){
				return $this->list_data($offset,$sort_by, $sort_order,$keyword,$no_kel);
			} else {
				return array();
			}
		}
	}

	public function jumlah_data($keyword='',$no_kel=0)
	{
		$keyword = clean_char_search($keyword);
		if($keyword){
			$where = '(mp.nama LIKE \'%'.$keyword.'%\' 
						 OR mp.nik LIKE \'%'.$keyword.'%\' 
						 OR mp.status LIKE \'%'.$keyword.'%\' 
						 OR mp.agama LIKE \'%'.$keyword.'%\' )';
			$this->db->where($where);
		}
		
		if($this->session->userdata('log_kel')){
			$no_kel = $this->session->userdata('log_kel');
		} else {
			$no_kel = $no_kel ? $no_kel : $this->session->userdata('log_kel');
		}

		$this->db->select('count(mp.nik) as total');
		$this->db->from('master_penduduk mp');
		if($this->no_prop){
			$this->db->where('mp.no_prop',$this->no_prop);
		}
		if($this->no_kab){
			$this->db->where('mp.no_kab',$this->no_kab);
		}
		if($this->no_kec){
			$this->db->where('mp.no_kec',$this->no_kec);
		}
		if($no_kel){
			$this->db->where('mp.no_kel',$no_kel);
		}
		return $this->db->get()->row()->total;
	}


	function detail_data($id=0)
	{
		$this->db->select('mp.*',false);
		$this->db->from('master_penduduk mp');
		if($this->session->userdata('log_kel')){
			$this->db->where('mp.no_kel',$this->session->userdata('log_kel'));
		}
		$query = $this->db->get();
		return $query->row_array();
	}



	function insert_data($data=array())
	{
		if(count($data)>0){
			$this->db->insert('master_penduduk',$data);
			return $this->db->insert_id();
		}
	}



	function delete_data($no_prop=0,$no_kab=0,$no_kec=0,$no_kel=0)
	{
		$this->db->where('no_prop',$no_prop);
		$this->db->where('no_kab',$no_kab);
		$this->db->where('no_kec',$no_kec);
		$this->db->where('no_kel',$no_kel);
		$this->db->delete('master_penduduk');
	}




}

