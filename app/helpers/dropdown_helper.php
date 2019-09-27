<?php
if( ! function_exists('negara_dropdown'))
{
	function negara_dropdown()
	{
		$CI = &get_instance();
		$CI->load->database();
		$CI->db->order_by('country_name','ASC');
		$q = $CI->db->get('setup_negara');
		
		$return = array();
		
		$return[''] = '- - - Pilih Kewarganegaraan - - -';
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $rows)
			{
				$return[strtoupper($rows->country_name)] = strtoupper($rows->country_name);
			}
		}
		
		return $return;
	}
}

if( ! function_exists('prop_dropdown'))
{
	function prop_dropdown()
	{
		$CI = &get_instance();
		$CI->load->database();
		$CI->db->order_by('nama_prop','ASC');
		$q = $CI->db->get('setup_prop');
		
		$return = array();
		
		$return[''] = '- - - Pilih Propinsi - - -';
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $rows)
			{
				$return[$rows->no_prop] = $rows->no_prop.' - '.$rows->nama_prop;
			}
		}
		
		return $return;
	}
}

if( ! function_exists('kab_dropdown'))
{
	function kab_dropdown($no_prop=0)
	{
		$CI = &get_instance();
		$CI->load->database();
		//if($no_prop){
			$CI->db->where('no_prop',$no_prop);
		//}
		$CI->db->order_by('nama_kab','ASC');
		$q = $CI->db->get('setup_kab');
		
		$return = array();
		
		$return[''] = '- - - Pilih Kota/Kab - - -';
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $rows)
			{
				$return[$rows->no_kab] = $rows->no_kab.' - '.$rows->nama_kab;
			}
		}
		
		return $return;
	}
}

if( ! function_exists('kec_dropdown'))
{
	function kec_dropdown($no_prop=0,$no_kab=0)
	{
		$CI = &get_instance();
		$CI->load->database();
		//if($no_prop){
			$CI->db->where('no_prop',$no_prop);
		//}
		//if($no_kab	){
			$CI->db->where('no_kab',$no_kab);
		//}
		$CI->db->order_by('nama_kec','ASC');
		$q = $CI->db->get('setup_kec');
		
		$return = array();
		
		$return[''] = '- - - Pilih Kecamatan - - -';
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $rows)
			{
				$return[$rows->no_kec] = $rows->no_kec.' - '.$rows->nama_kec;
			}
		}
		
		return $return;
	}
}

if( ! function_exists('kec_3_dropdown'))
{
	function kec_3_dropdown($no_prop=0,$no_kab=0)
	{
		$CI = &get_instance();
		$CI->load->database();
		$CI->db->where('no_prop',$no_prop);
		$CI->db->where('no_kab',$no_kab);
		$CI->db->order_by('nama_kec','ASC');
		$q = $CI->db->get('setup_kec');
		
		$return = array();
		
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $rows)
			{
				$return[$rows->no_kec] = $rows->no_kec.' - '.$rows->nama_kec;
			}
		}
		
		return $return;
	}
}

if( ! function_exists('kel_dropdown'))
{
	function kel_dropdown($no_prop=0,$no_kab=0,$no_kec=0)
	{
		$CI = &get_instance();
		$CI->load->database();
		//if($no_prop){
			$CI->db->where('no_prop',$no_prop);
		//}
		//if($no_kab	){
			$CI->db->where('no_kab',$no_kab);
		//}
		//if($no_kec	){
			$CI->db->where('no_kec',$no_kec);
		//}
		$CI->db->order_by('no_kel','ASC');
		$q = $CI->db->get('setup_kel');
		
		$return = array();
		
		$return[''] = '- - - Pilih Kelurahan - - -';
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $rows)
			{
				$return[$rows->no_kel] = $rows->no_kel.' - '.$rows->nama_kel;
			}
		}
		
		return $return;
	}
}

if( ! function_exists('kel_2_dropdown'))
{
	function kel_2_dropdown($no_prop=0,$no_kab=0,$no_kec=0,$no_kel=0)
	{
		$CI = &get_instance();
		$CI->load->database();
		$CI->db->where('no_prop',$no_prop);
		$CI->db->where('no_kab',$no_kab);
		$CI->db->where('no_kec',$no_kec);
		if($no_kel){
			$CI->db->where('no_kel',$no_kel);
		}
		$CI->db->order_by('no_kel','ASC');
		$q = $CI->db->get('setup_kel');
		
		$return = array();
		
		$return[''] = '- - - Pilih Kelurahan - - -';
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $rows)
			{
				$return[$rows->no_kel] = $rows->no_kel.' - '.$rows->nama_kel;
			}
		}
		
		return $return;
	}
}

if( ! function_exists('kel_3_dropdown'))
{
	function kel_3_dropdown($no_prop=0,$no_kab=0,$no_kec=0,$no_kel=0)
	{
		$CI = &get_instance();
		$CI->load->database();
		$CI->db->where('no_prop',$no_prop);
		$CI->db->where('no_kab',$no_kab);
		$CI->db->where('no_kec',$no_kec);
		if($no_kel){
			$CI->db->where('no_kel',$no_kel);
		}
		$CI->db->order_by('no_kel','ASC');
		$q = $CI->db->get('setup_kel');
		
		$return = array();
		
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $rows)
			{
				$return[$rows->no_kel] = $rows->no_kel.' - '.$rows->nama_kel;
			}
		}
		
		return $return;
	}
}


if( ! function_exists('pegawai_dropdown'))
{
	function pegawai_dropdown()
	{
		$CI = &get_instance();
		$CI->load->database();
		$CI->db->where('status','aktif');
		$CI->db->order_by('nip','ASC');
		$q = $CI->db->get('r_pegawai');
		
		$return = array();
		
		$return[''] = '- - - Pilih Pegawai - - -';
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $rows)
			{
				$return[$rows->id_pegawai] = $rows->nip.' - '.$rows->nama_pegawai;
			}
		}
		
		return $return;
	}
}

if( ! function_exists('pegawai_2_dropdown'))
{
	function pegawai_2_dropdown($no_kec=0,$no_kel=0)
	{
		$CI = &get_instance();
		$CI->load->database();

		$no_prop	= $CI->session->userdata('log_prop');
		$no_kab		= $CI->session->userdata('log_kab');

		$CI->db->select('peg.id_pegawai,peg.nip,peg.nama_pegawai',false);
		$CI->db->from('r_pegawai peg');
		// $CI->db->join('r_peg_jab jab','jab.id_pegawai=peg.id_pegawai');
		// if($no_kec && !$no_kel){
		// 	// $CI->db->join('setup_kec kec','kec.kode_unor=SUBSTR(jab.kode_unor,1,8)');
		// 	$CI->db->where('kec.no_prop',$no_prop);
		// 	$CI->db->where('kec.no_kab',$no_kab);
		// 	$CI->db->where('kec.no_kec',$no_kec);
		// } elseif($no_kec && $no_kel){
		// 	// $CI->db->join('setup_kel kel','kel.kode_unor=SUBSTR(jab.kode_unor,1,8)');
		// 	$CI->db->where('kel.no_prop',$no_prop);
		// 	$CI->db->where('kel.no_kab',$no_kab);
		// 	$CI->db->where('kel.no_kec',$no_kec);
		// 	$CI->db->where('kel.no_kel',$no_kel);
		// }

		// $CI->db->group_by('peg.id_pegawai');
		$q = $CI->db->get();
		
		$return = array();
		
		$return[''] = '- - - Pilih Pegawai - - -';
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $rows)
			{
				$return[$rows->id_pegawai] = $rows->nip.' - '.$rows->nama_pegawai;
			}
		}
		
		return $return;
	}
}

if( ! function_exists('agama_2_dropdown'))
{
	function agama_2_dropdown()
	{
		$CI = &get_instance();
		$CI->load->database();
		$CI->db->order_by('id','ASC');
		$q = $CI->db->get('agama_master');
		
		$return = array();
		
		$return[''] = '- - - Pilih Agama - - -';
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $rows)
			{
				$return[$rows->deskripsi] = $rows->deskripsi;
			}
		}
		
		return $return;
	}
}

if( ! function_exists('status_kawin_2_dropdown'))
{
	function status_kawin_2_dropdown()
	{
		$CI = &get_instance();
		$CI->load->database();
		$CI->db->order_by('id','ASC');
		$q = $CI->db->get('setup_status_nikah');
		
		$return = array();
		
		$return[''] = '- - - Pilih Status Perkawinan - - -';
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $rows)
			{
				$return[$rows->nama] = $rows->nama;
			}
		}
		
		return $return;
	}
}

if( ! function_exists('status_keluarga_dropdown'))
{
	function status_keluarga_dropdown()
	{
		$CI = &get_instance();
		$CI->load->database();
		$CI->db->select('nama',false);
		$CI->db->from('setup_status_keluarga');
		$q = $CI->db->get();
		
		$return = array();
		
		$return[''] = '- - - Pilih Status Keluarga - - -';
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $rows)
			{
				$return[$rows->nama] = $rows->nama;
			}
		}
		
		return $return;
	}
}

if( ! function_exists('keturunan_dropdown'))
{
	function keturunan_dropdown()
	{
		$CI = &get_instance();
		$CI->load->database();
		$CI->db->select('nama',false);
		$CI->db->from('setup_keturunan');
		$q = $CI->db->get();
		
		$return = array();
		
		$return[''] = '- - - Pilih Keturunan - - -';
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $rows)
			{
				$return[$rows->nama] = $rows->nama;
			}
		}
		
		return $return;
	}
}

if( ! function_exists('pendidikan_dropdown'))
{
	function pendidikan_dropdown()
	{
		$CI = &get_instance();
		$CI->load->database();
		$CI->db->select('deskripsi',false);
		$CI->db->from('pddkn_master');
		$q = $CI->db->get();
		
		$return = array();
		
		$return[''] = '- - - Pilih Pendidikan - - -';
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $rows)
			{
				$return[$rows->deskripsi] = $rows->deskripsi;
			}
		}
		
		return $return;
	}
}


if( ! function_exists('pekerjaan_dropdown'))
{
	function pekerjaan_dropdown()
	{
		$CI = &get_instance();
		$CI->load->database();
		$CI->db->select('deskripsi',false);
		$CI->db->from('pkrjn_master');
		$CI->db->order_by('id','ASC');
		$q = $CI->db->get();
		
		$return = array();
		
		$return[''] = '- - - Pilih Pekerjaan - - -';
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $rows)
			{
				$return[$rows->deskripsi] = $rows->deskripsi;
			}
		}
		
		return $return;
	}
}


if( ! function_exists('role_dropdown'))
{
	function role_dropdown()
	{
		$CI = &get_instance();
		$CI->load->database();
		$CI->db->order_by('id','ASC');
		$q = $CI->db->get('setup_role');
		
		$return = array();
		
		$return[''] = '- - - Pilih Role - - -';
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $rows)
			{
				$return[$rows->id] = $rows->description;
			}
		}
		
		return $return;
	}
}

if( ! function_exists('enum_dropdown'))
{
	function enum_dropdown($table, $field, $pilih = "")
	{
		$CI = &get_instance();
		$CI->load->database();
		
		$query = "SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$table' AND COLUMN_NAME = '$field'";
		
		// echo $query;

		$tmp = $CI->db->query($query)->result_array();

		foreach ($tmp as $r) {
			if(preg_match('/enum/', $r['COLUMN_TYPE'])){
				$tmp = $r;
				break;
			}
		}
		$tmp = $tmp['COLUMN_TYPE'];
		$tmp = str_replace(array('enum(',')'), array('',''), $tmp);

		$enum_list = explode(",",$tmp);

		$return = array();
		
		$return[''] = '- - - Pilih '.$pilih.' - - -';
		// if($q->num_rows() > 0)
		// {
			foreach ($enum_list as $value)
			{
				$value = str_replace("'", "", $value);
				$return[$value] = $value;
			}
		// }
		
		return $return;
	}
}

function dropdown_status_perkawinan($jk){
	$data = array(
		'l' => array(
			'Jejaka' 	=> 'JEJAKA',
			'Duda' 		=> 'DUDA',
			'Beristri' 	=> 'BERISTRI'
		),
		'p' => array(
			'Perawan'   => 'PERAWAN',
			'Janda' => 'JANDA'
		)
	);

	return array_merge(array(''=>'- - - Pilih Status Perkawinan - - -'),$data[$jk]);
}