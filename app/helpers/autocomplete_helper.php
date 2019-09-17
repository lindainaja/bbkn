<?php


if(!function_exists('display_sebab_kematian')){
    function display_sebab_kematian($keyword){

		$CI = &get_instance();
		$CI->load->database('default',true);
		

		$arrkata = explode(" ", clean_char_search($keyword));
		$sql  = " SELECT ssk.* FROM setup_sebab_kematian ssk ";
		if (count($arrkata) > 0)
		{
			$sql .= " WHERE ";
			$i = 0;
			foreach ($arrkata as $ikata)
			{
					$i++;
					$sql .= "(ssk.nama  LIKE '%$ikata%' )";
				    if ($i < count($arrkata)) $sql .= " AND ";
			}
		}
		//$sql .= " ORDER BY ssk.nama ASC ";
		if($CI->config->item('autocomplete_limit') > 0)
		{
			$sql .= " LIMIT ".$CI->config->item('autocomplete_limit')."";
		}
		$query	= $CI->db->query($sql);
		$result = $query->result_array();
		if(count($result)>0){
			return $result;
		} else {
			return array();
		}
		
    }
}


if(!function_exists('display_pekerjaan')){
    function display_pekerjaan($keyword){

		$CI = &get_instance();
		$CI->load->database('default',true);
		

		$arrkata = explode(" ", clean_char_search($keyword));
		$sql  = " SELECT pm.* FROM pkrjn_master pm ";
		if (count($arrkata) > 0)
		{
			$sql .= " WHERE ";
			$i = 0;
			foreach ($arrkata as $ikata)
			{
					$i++;
					$sql .= "(pm.deskripsi  LIKE '%$ikata%' )";
				    if ($i < count($arrkata)) $sql .= " AND ";
			}
		}
		//$sql .= " ORDER BY ssk.nama ASC ";
		if($CI->config->item('autocomplete_limit') > 0)
		{
			$sql .= " LIMIT ".$CI->config->item('autocomplete_limit')."";
		}
		$query	= $CI->db->query($sql);
		$result = $query->result_array();
		if(count($result)>0){
			return $result;
		} else {
			return array();
		}
		
    }
}
if(!function_exists('display_data_penduduk_detail')){
    function display_data_penduduk_detail($keyword,$no_prop=0,$no_kab=0,$no_kec,$no_kel=0,$no_kk){

		$CI = &get_instance();
		$CI->load->database('default',true);
		

		$arrkata = explode(" ", clean_char_search($keyword));
		$sql  = " SELECT mp.*,age(mp.tgl_lahir,now()) as umur  FROM master_penduduk mp ";
		if (count($arrkata) > 0)
		{
			$sql .= " WHERE ";
			$i = 0;
			foreach ($arrkata as $ikata)
			{
				$i++;
				$sql .= "(mp.nik LIKE '%$ikata%' OR mp.nama LIKE '%$ikata%'  )";
				if ($i < count($arrkata)) $sql .= " AND ";
			}
		}
		if($no_prop){
			$sql .= " AND no_prop = ".$no_prop." ";
		}
		if($no_kab){
			$sql .= " AND no_kab = ".$no_kab." ";
		}
		if($no_kec){
			$sql .= " AND no_kec = ".$no_kec." ";
		}
		if($no_kel){
			$sql .= " AND no_kel = ".$no_kel." ";
		}
		if($no_kk){
			$sql .= " AND no_kk = '$no_kk' ";
		}
		if($CI->config->item('autocomplete_limit') > 0)
		{
			$sql .= " LIMIT ".$CI->config->item('autocomplete_limit')."";
		}
		$query	= $CI->db->query($sql);
		$result = $query->result_array();
		if(count($result)>0){
			return $result;
		} else {
			return array();
		}
		
    }
}


if(!function_exists('display_data_penduduk')){
    function display_data_penduduk($keyword,$no_prop=0,$no_kab=0,$no_kec,$no_kel=0){

		$CI = &get_instance();
		$CI->load->database('default',true);
		

		$arrkata = explode(" ", clean_char_search($keyword));
		$sql  = " SELECT mp.*,age(mp.tgl_lahir,now()) as umur FROM master_penduduk mp ";
		if (count($arrkata) > 0)
		{
			$sql .= " WHERE ";
			$i = 0;
			foreach ($arrkata as $ikata)
			{
				$i++;
				$sql .= "(mp.nik LIKE '%$ikata%' OR mp.nama LIKE '%$ikata%' OR mp.no_kk LIKE '%$ikata%' )";
				if ($i < count($arrkata)) $sql .= " AND ";
			}
		}
		if($no_prop){
			$sql .= " AND no_prop = ".$no_prop." ";
		}
		if($no_kab){
			$sql .= " AND no_kab = ".$no_kab." ";
		}
		if($no_kec){
			$sql .= " AND no_kec = ".$no_kec." ";
		}
		if($no_kel){
			$sql .= " AND no_kel = ".$no_kel." ";
		}
		if($CI->config->item('autocomplete_limit') > 0)
		{
			$sql .= " LIMIT ".$CI->config->item('autocomplete_limit')."";
		}
		$query	= $CI->db->query($sql);
		$result = $query->result_array();
		if(count($result)>0){
			return $result;
		} else {
			return array();
		}
		
    }
}

if(!function_exists('display_data_ttd')){
    function display_data_ttd($keyword,$no_prop=0,$no_kab=0,$no_kec,$no_kel=0){

		$CI = &get_instance();
		$CI->load->database('default',true);
		

		$arrkata = explode(" ", clean_char_search($keyword));
		$sql  = " SELECT p.nip as nip_baru,
		TRIM(CONCAT(IF(gelar_nonakademis!='' AND gelar_nonakademis!='-',gelar_nonakademis,''),' ',IF(gelar_depan!='' AND gelar_depan!='-',gelar_depan,''),' ',p.nama_pegawai,' ',IF(gelar_belakang!='' AND gelar_belakang!='-',gelar_belakang,''))) as nama_pegawai,
		p.jabatan as nama_jabatan";
		$sql  .= " FROM r_pegawai p ";
		// $sql  .= " INNER JOIN r_peg_jab rpj ON rpj.id_pegawai=p.id_pegawai ";
		// $sql  .= " INNER JOIN setup_kel sk ON sk.kode_unor=SUBSTR(rpj.kode_unor,1,8) ";
		if (count($arrkata) > 0)
		{
			$sql .= " WHERE ";
			$i = 0;
			foreach ($arrkata as $ikata)
			{
				$i++;
				$sql .= "(p.nip LIKE '%$ikata%' OR p.nama_pegawai LIKE '%$ikata%' OR p.jabatan LIKE '%$ikata%' )";
				if ($i < count($arrkata)) $sql .= " AND ";
			}
		}
		// if($no_prop){
		// 	$sql .= " AND no_prop = ".$no_prop." ";
		// }
		// if($no_kab){
		// 	$sql .= " AND no_kab = ".$no_kab." ";
		// }
		// if($no_kec){
		// 	$sql .= " AND no_kec = ".$no_kec." ";
		// }
		// if($no_kel){
		// 	$sql .= " AND no_kel = ".$no_kel." ";
		// }
		// $sql .= " GROUP BY p.id_pegawai ";
		if($CI->config->item('autocomplete_limit') > 0)
		{
			$sql .= " LIMIT ".$CI->config->item('autocomplete_limit')."";
		}
		$query	= $CI->db->query($sql);
		$result = $query->result_array();
		if(count($result)>0){
			return $result;
		} else {
			return array();
		}
		
    }
}

