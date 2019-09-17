<?php
class M_report extends CI_Model
{
	
	function rekap_data_pegawai($tahun='',$no_kel='')
	{

		$opt_status_pegawai = config_item('opt_jenis_pegawai');
		$data = array(
			'keys' 	=> array_keys($opt_status_pegawai),
			'rekap'	=> array(),
			'total' => 0
		);
		$rs = $this->db->select("COUNT(id_pegawai) as jml, status_pegawai")
				 ->from("r_pegawai")
				 ->group_by("status_pegawai")
				 ->get()
				 ->result_array();

		foreach ($data['keys'] as $status_pegawai  ) {
			$data['rekap'][$status_pegawai] = 0;
			# code...
		}
		foreach ($rs as $r) {
			$data['rekap'][$r['status_pegawai']] +=  $r['jml'];
			$data['total'] += $r['jml'];
		}
		return $data;
	}
}//D:/xampp/htdocs/babakan/app/modules/report_data_pegawai/models/M_report.php
