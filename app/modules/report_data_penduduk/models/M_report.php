<?php

 class M_report extends CI_Model
{
	
	// function rekap_data_penduduk($tahun='',$no_kel='')
	// {

	// 	$opt_status_pegawai = config_item('opt_jenis_pegawai');
	// 	$data = array(
	// 		'keys' 	=> array_keys($opt_status_pegawai),
	// 		'rekap'	=> array(),
	// 		'total' => 0
	// 	);
	// 	$rs = $this->db->select("COUNT(id_pegawai) as jml, status_pegawai")
	// 			 ->from("r_pegawai")
	// 			 ->group_by("status_pegawai")
	// 			 ->get()
	// 			 ->result_array();

	// 	foreach ($data['keys'] as $status_pegawai  ) {
	// 		$data['rekap'][$status_pegawai] = 0;
	// 		# code...
	// 	}
	// 	foreach ($rs as $r) {
	// 		$data['rekap'][$r['status_pegawai']] +=  $r['jml'];
	// 		$data['total'] += $r['jml'];
	// 	}
	// 	return $data;
	// }

	public function rekap_data_penduduk_by_gender($tahun='',$no_kel='',$lingkungan='')
	{

		if(!empty($lingkungan) && !preg_match('/babakan/i', $lingkungan)){
			$this->db->where('lingkungan',$lingkungan);
		}
		 $rs = $this->db->select("COUNT(id) as jml, jk")
				 ->from("master_penduduk")
				 ->group_by("jk")
				 ->get()
				 ->result_array();
		$data = array(
			'keys' 	=> array('l','p'),
			'rekap'	=> array(),
			'total' => 0
		);
		foreach ($data['keys'] as $jk  ) {
			$data['rekap'][$jk] = 0;
		}
		foreach ($rs as $r) {
			$data['rekap'][$r['jk']] +=  $r['jml'];
			$data['total'] += $r['jml'];
		}
		return $data;
	}
	public function rekap_data_penduduk_get_distict_no_kk_count($tahun='',$no_kel='',$lingkungan='')
	{
		if(!empty($lingkungan) && !preg_match('/babakan/i', $lingkungan)){
			$this->db->where('lingkungan',$lingkungan);
		}
		return $this->db->select("COUNT(DISTINCT no_kk) as cx")->get('master_penduduk')->row()->cx;
	}
	public function rekap_data_penduduk_by_umur($tahun='',$no_kel='',$lingkungan='')
	{
		$clasification = array(
			'0_5' ,
			'6_12' ,
			'13_15',
			'16_18',
			'19_60',
			'_60',
		);
		$data = array(
			'rekap' => array(
				'0_5' =>0,
				'6_12' =>0,
				'13_15'=>0,
				'16_18'=>0,
				'19_60'=>0,
				'_60'=>0
			),
			'rekap_jk' =>array(
				'0_5' =>array('p'=>0,'l'=>0),
				'6_12' =>array('p'=>0,'l'=>0),
				'13_15'=>array('p'=>0,'l'=>0),
				'16_18'=>array('p'=>0,'l'=>0),
				'19_60'=>array('p'=>0,'l'=>0),
				'_60'=>array('p'=>0,'l'=>0)
			),
			'total' => 0,
			'total_jk_p' => 0,
			'total_jk_l' => 0,
		);
		if(!empty($lingkungan) && !preg_match('/babakan/i', $lingkungan)){
			$this->db->where('lingkungan',$lingkungan);
		}
		$rs =  $this->db->select("age(tgl_lahir,now()) as umur,jk")
				 ->from("master_penduduk") 
				 ->get()
				 ->result_array();
		// print_r($rs);

		foreach ($rs as $r) {
			foreach ($clasification as $eq) {
				$eqs = explode('_', $eq);
		 
			 	$min = $eqs[0];
			 	$max = $eqs[1];

				switch ($eq) {
					case '0_5':
					case '6_12':
					case '13_15':
					case '16_18':
					case '19_60':
					
						if (in_array($r['umur'], range($min, $max))) {
						    $data['rekap'][$eq] += 1;
			 				$data['total'] += 1;

			 				$data['rekap_jk'][$eq][$r['jk']] += 1;

			 				$t_jk_key = 'total_jk_' . $r['jk'];
			 				$data[$t_jk_key] += 1;
						}
						break;
					case '_60':
						if($r['umur'] > 60 ){
			 				$data['rekap'][$eq] += 1;
			 				$data['total'] += 1;
			 				$data['rekap_jk'][$eq][$r['jk']] += 1;
			 				$t_jk_key = 'total_jk_' . $r['jk'];
			 				$data[$t_jk_key] += 1;
			 			}
						break;
					
					default:
						# code...
						break;
				}
			 	
			}
	 		
	 		// echo "\n\n";
	 		
	 	}
		
		return $data;		 
	}

}//D:/xampp/htdocs/babakan/app/modules/report_data_penduduk/models/M_report.php
