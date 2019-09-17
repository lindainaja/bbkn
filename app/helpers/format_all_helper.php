<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function hitung_umur($date){
 	$lahir    = new DateTime($date);
    $today    = new DateTime();
    $umur 	  = $today->diff($lahir);

    return $umur->y; 
}
if( ! function_exists('detail_employee'))
{
	function detail_employee($employeeid)
	{
		$CI = &get_instance();
		$CI->load->database();
		$CI->db->where('id',$employeeid);
		$q = $CI->db->get('employee');
		return $q->row_array();
	}
}

if( ! function_exists('get_kode_unor'))
{
	function get_kode_unor($no_prop=0,$no_kab=0,$no_kec=0,$no_kel=0)
	{
		$CI = &get_instance();
		$CI->load->database();
		
		$CI->db->select('kode_unor');
		if($no_kec && !$no_kel){
			$CI->db->from('setup_kec');
			$CI->db->where('no_prop',$no_prop);
			$CI->db->where('no_kab',$no_kab);
			$CI->db->where('no_kec',$no_kec);
		} elseif($no_kec && $no_kel){
			$CI->db->from('setup_kel');
			$CI->db->where('no_prop',$no_prop);
			$CI->db->where('no_kab',$no_kab);
			$CI->db->where('no_kec',$no_kec);
			$CI->db->where('no_kel',$no_kel);
		}
		

		$q = $CI->db->get();
		return $q->row()->kode_unor;
	}
}

if( ! function_exists('detail_wilayah'))
{
	function detail_wilayah($no_prop=0,$no_kab=0,$no_kec=0,$no_kel=0)
	{
		$CI = &get_instance();
		$CI->load->database();
		$CI->db->select('sp.nama_prop,sk.nama_kab,skec.nama_kec,skel.nama_kel');
		$CI->db->from('setup_prop sp');
		$CI->db->join('setup_kab sk','sk.no_prop=sp.no_prop');
		$CI->db->join('setup_kec skec','skec.no_prop=sp.no_prop AND skec.no_kab=sk.no_kab');
		$CI->db->join('setup_kel skel','skel.no_prop=sp.no_prop AND skel.no_kab=sk.no_kab AND skel.no_kec=skec.no_kec');
		$CI->db->where('skel.no_prop',$no_prop);
		$CI->db->where('skel.no_kab',$no_kab);
		$CI->db->where('skel.no_kec',$no_kec);
		$CI->db->where('skel.no_kel',$no_kel);
		$q = $CI->db->get();
		return $q->row_array();
	}
}

if( ! function_exists('detail_employee_by_userid'))
{
	function detail_employee_by_userid($userid=0)
	{
		$CI = &get_instance();
		$CI->load->database();
		$CI->db->select('e.name,e.code,e.id');
		$CI->db->from('employee e');
		$CI->db->join('user u','u.employeeid=e.id');
		$CI->db->where('u.id',$userid);
		$q = $CI->db->get();
		return $q->row_array();
	}
}


if (! function_exists('format_bulan_tahun'))
{
	function format_bulan_tahun($tanggal)
	{
		$CI=& get_instance();
		$bulan = $CI->config->item('bulan');

		if($tanggal !='' && $tanggal != '0000-00-00'){
			$res = $bulan[date('n',strtotime($tanggal))].' '.date('Y',strtotime($tanggal));
		} else {
			$res = '---';
		}
		return $res;
	}
}

if (! function_exists('format_tanggal_khusus'))
{
	function format_tanggal_khusus($tanggal)
	{
		$CI=& get_instance();
		$bulan = $CI->config->item('bulan');

		if($tanggal !='' && $tanggal != '0000-00-00'){
			$res = date('d',strtotime($tanggal)).' '.$bulan[date('n',strtotime($tanggal))].' '.date('Y',strtotime($tanggal));
		} else {
			$res = '---';
		}
		return $res;
	}
}


if (! function_exists('format_tanggal'))
{
	function format_tanggal($tanggal)
	{
		if($tanggal !='' && $tanggal != '0000-00-00'){
			$res = date('d F Y',strtotime($tanggal));
		} else {
			$res = '---';
		}
		return $res;
	}
}



if (! function_exists('format_tanggal_khusus_indo'))
{
	function format_tanggal_khusus_indo($tanggal)
	{
		$CI=& get_instance();
		$bulan = $CI->config->item('bulan');
		if($tanggal !='' && $tanggal != '0000-00-00'){
			$res = date('d',strtotime($tanggal)).' '.$bulan[date('n',strtotime($tanggal))].' '.date('Y',strtotime($tanggal));
		} else {
			$res = '---';
		}
		return preg_replace('/^0/','',$res);
	}
}


if (! function_exists('format_jam'))
{
	function format_jam($tanggal)
	{
		$res=date('H:i:s',strtotime($tanggal));
		return $res;
	}
}

if (! function_exists('format_jam_2'))
{
	function format_jam_2($tanggal)
	{
		$res=date('H:i',strtotime($tanggal));
		return $res;
	}
}

if (! function_exists('format_tanggal_hari'))
{
	function format_tanggal_hari($date)
	{
		$CI=& get_instance();
		// //$CI->load->config();
		$nama_hari=$CI->config->item('hari');
		$nama_bulan=$CI->config->item('bulan');
		$hari=$nama_hari[date("w",strtotime($date))];
		$tanggal=date("d",strtotime($date));
		$bulan=$nama_bulan[date("n",strtotime($date))];
		$tahun=date("Y",strtotime($date));
		
		$tanggal_indonesia = $hari .', '. $tanggal.' '.$bulan.' '.$tahun;
		
		return $tanggal_indonesia;
		
	}
}
function get_nama_hari($tgl,$sep='-'){
	$sepparator = $sep; //separator. contoh: '-', '/'
	$parts = explode($sepparator, $tgl);
	$d = date("l", mktime(0, 0, 0, $parts[1], $parts[2], $parts[0]));

	if ($d=='Monday'){
		return 'Senin';
	}elseif($d=='Tuesday'){
		return 'Selasa';
	}elseif($d=='Wednesday'){
		return 'Rabu';
	}elseif($d=='Thursday'){
		return 'Kamis';
	}elseif($d=='Friday'){
		return 'Jumat';
	}elseif($d=='Saturday'){
		return 'Sabtu';
	}elseif($d=='Sunday'){
		return 'Minggu';
	}else{
		return 'ERROR!';
	}
}
if(! function_exists('format_date_us'))
{
	function format_date_us($tanggal)
	{
		if($tanggal !="")
		{
			$arraytanggal 	= explode('/',$tanggal);
			if(count($arraytanggal)>=3){
				$var_tanggal 	= $arraytanggal[0];
				$var_bulan 		= $arraytanggal[1];
				$var_tahun 		= $arraytanggal[2];
				$tanggal 		= $var_tahun . '-' . $var_bulan . '-' . $var_tanggal;
			} else {
				$tanggal		= '';
			}
			
			return  $tanggal;
		}
	}
}



if(!function_exists('currency_format')){
	function currency_format($val,$precision,$thousand_sep,$dec_sep,$nol='tidak'){
		if($val != 0){
			$data = number_format($val,$precision,$dec_sep,$thousand_sep);
		}else{
			if($nol == 'ya'){
				$data = number_format(0,$precision,$dec_sep,$thousand_sep);
			}else{
				$data = number_format(0,$precision,$dec_sep,$thousand_sep);
			}
		}
		return $data;
	}
}

if (! function_exists('format_uang'))
{
	function format_uang($uang)
	{
		$CI = &get_instance();
		// //$CI->load->config();
		
		$param = $CI->config->item('currency_format');
		
		$uangs = (float)($uang);

		if($param['decimal_use'] == TRUE && $param['decimal_digit'] > 0)
		{
				$res	=	number_format($uangs,$param['decimal_digit'],$param['decimal_sep'],$param['thousand_sep']);
		}
		else 
		{
				$res	= number_format($uang,0,"",$param['thousand_sep']);
		}

		
		
		return $res;
	}
}

if(!function_exists('format_uang_idr')){
    function format_uang_idr($uang){
        return number_format($uang,0,'.',',');
    }
}

if(!function_exists('cut_decimal')){
    function cut_decimal($nominal,$digit){
		$uang = explode('.',$nominal);
		if(count($uang)>1){ /*MEMILIKI DESIMAL*/
			$nilai = $uang[0];
			$des = substr($uang[1],0,$digit);
			$hasil = $nilai.'.'.$des;
		} else {
			$hasil = $uang[0];
		}
		return $hasil;
    }
}


//example  Result : 10 February 2011
if(! function_exists('date_longs'))
{
	function date_longs($tanggal)
	{
		if($tanggal !="")
		{
			$res = date('d F Y',strtotime($tanggal));
		}
		else 
		{
			$res = "--";
		}
		
		return $res;
	}
}

if(! function_exists('date_longs_ind'))
{
	function date_longs_ind($tanggal)
	{
		if($tanggal !="")
		{
			$tgl = date('d',strtotime($tanggal));
			$bln = namaBulan(date('m',strtotime($tanggal)));
			$thn = date('Y',strtotime($tanggal));
			$res = $tgl.' '.$bln.' '.$thn;
		}
		else 
		{
			$res = "--";
		}
		
		return $res;
	}
}


if( ! function_exists('mata_uang'))
{
	function mata_uang()
	{
		$CI = &get_instance();
		//$CI->load->config();
		
		$cur_symbol = $CI->config->item('currency');
		
		if($cur_symbol !="")
		{
			return $cur_symbol;
		}
		else 
		{
			return 'Rp. ';
		}
		
	}
}


//example  Result : 10 Feb 2011
if(! function_exists('date_simple'))
{
	function date_simple($tanggal)
	{
		if($tanggal !="")
		{
			$res = date('M d Y',strtotime($tanggal));
		}
		else 
		{
			$res = "--";
		}
		
		return $res;
	}
}


if(! function_exists('format_number'))
{
	function format_number($val,$thoussand="",$decimal=".",$digit = 2)
	{
		if($val >= 0)
		{
			return number_format($val,$digit,$decimal,$thoussand);
		}
		else 
		{
			return '--';
		}
		
	}
}



if (! function_exists('format_datepicker'))
{
	function format_datepicker($tanggal)
	{
		if($tanggal !='' && $tanggal != '0000-00-00' && $tanggal != 0){
			$res = date('d/m/Y',strtotime($tanggal));
		} else {
			$res = '';
		}
		return $res;
	}
}

if (! function_exists('format_datepicker_us'))
{
	function format_datepicker_us($tanggal)
	{
		if($tanggal !='' && $tanggal != '0000-00-00' && $tanggal != 0){
			$res = date('m/d/Y',strtotime($tanggal));
		} else {
			$res = '';
		}
		return $res;
	}
}

if (! function_exists('default_date'))
{
	function default_date()
	{
		return date('d/m/Y');
	}
}

if (! function_exists('get_month'))
{
	function get_month($tanggal=NULL,$separator='/')
	{
		if($tanggal){
			$a = explode("".$separator."",$tanggal);
			$month = intval($a[0]);
		} else {
			$month = '';
		}
		return $month;
	}
}

if (! function_exists('format_period'))
{
	##format tanggal parameter berbentuk us
	function format_period($startdate,$finishdate)
	{
		$period = 'All Period';
		if($finishdate && !$startdate){##hanya end date
			$period = ' < '.format_datepicker($finishdate);
		} elseif(!$finishdate && $startdate){##hanya start date
			$period = ' > '.format_datepicker($startdate);
		} elseif($finishdate && $startdate){##hanya start date
			$period = format_datepicker($startdate).' - '.format_datepicker($finishdate);
		}
		return $period;

	}
}

if (! function_exists('format_datepicker_full'))
{
	function format_datepicker_full($tanggal)
	{
		if($tanggal !='' && $tanggal != '0000-00-00'){
			$res = date('d/m/Y H:i:s',strtotime($tanggal));
		} else {
			$res = '';
		}
		return $res;
	}
}

//exm = January 12, 2011
if (! function_exists('hitung_jumlah_hari'))
{
	function hitung_jumlah_hari($tgl_join)
	{			
			$pecah1 = explode("-", $tgl_join);
			$date1 = $pecah1[2];
			$month1 = $pecah1[1];
			$year1 = $pecah1[0];
					
			$jd1 = GregorianToJD($month1, $date1, (int)$year1);
			return $jd1;
	}
}
function countDatePerMonth($month,$year){
		if($year%400 == 0){
			$kabisat = 29;
		}else{
			if($year%100 == 0){
				$kabisat = 28;
			}else{
				if($year%4 == 0){
					$kabisat = 29;
				}else{
					$kabisat = 28;
				}
			}
		}
		
		if($month == 1 or $month == 3 or $month == 5 or $month == 7 or $month == 8 or $month == 10 or $month == 12){
			$end_date = 31;
		}else if($month == 4 or $month == 6 or $month == 9 or $month == 11){
			$end_date = 30;
		}else{
			$end_date = $kabisat;
		}
		
		return $end_date;
	}
	


function totalDayOnRangeDate($startdate,$finishdate){
     	$days = round(abs(strtotime($startdate)-strtotime($finishdate))/86400);
		return $days;
}


if(!function_exists('lengthWork')){
	function lengthWork($startdate, $finishdate){
		$startdate = (is_string($startdate) ? strtotime($startdate) : $startdate);
		$finishdate = (is_string($finishdate) ? strtotime($finishdate) : $finishdate);
		$diff_secs = abs($startdate - $finishdate);
		$base_year = min(date("Y", $startdate), date("Y", $finishdate));
		$diff = mktime(0, 0, $diff_secs, 1, 1, $base_year);
		return (date("Y", $diff) - $base_year) * 12 + date("n", $diff) - 1;
		return array(
			"years" => date("Y", $diff) - $base_year,
			"months_total" => (date("Y", $diff) - $base_year) * 12 + date("n", $diff) - 1,
		);
	
	}
}



if(!function_exists('round_numbers')){
    function round_numbers($is_round,$currid,$value,$excel=false){
        if($is_round == 0){ #=> Jika tidak round
			if($excel)
				return $value;
            if($currid == 2){ #=> Jika IDR 
                return format_uang_idr($value);
            }else{
                return format_uang($value);
            }
        }else{ #=> Jika Round
			if($excel)
				return $value;
            if($currid == 2){ #=> Jika IDR
                return format_uang_idr(round($value,0));
            }else{
                return format_uang(round($value,2));
            }
        }
    }
}
if(!function_exists('print_rr')){
	function print_rr($array){
		$count = count($array);
		if ($count > 0) {
			foreach ($array as $key => $value) {
				if (is_array($value)) {
					$id = md5(rand());
					echo '[<a href="#" onclick="return expandParent(\'' . $id . '\')">' . $key . '</a>]<br />';
					echo '<div id="' . $id . '" style="display:none;margin:10px;border-left:1px solid; padding-left:5px;">';
					print_rr($value, $count);
					echo '</div>';
				} else {
					echo "<b>&nbsp;&nbsp;&nbsp;&nbsp;$key</b>: " . $value . "<br />";
				}
			}
			echo '
			<script language="Javascript">
			function expandParent(id){
				toggle="block";
				if(document.getElementById(id).style.display=="block"){
					toggle="none"
				}
				document.getElementById(id).style.display=toggle
				return false;
			};
			</script>
			';
		} else {
			echo 'data kosong';
		}
	}

}


if (! function_exists('monthOfName'))
{
	function monthOfName($date)
	{
		$month	= array(1=>'January','February','March','April','May','June','July','August','September','October','November','December');
		return $month[intval($date)];
	}
}

if (! function_exists('namaBulan'))
{
	function namaBulan($date)
	{
		$month	= array(1=>'Januari','Februari','Mart','April','Mai','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');
		return $month[intval($date)];
	}
}


if (! function_exists('convert_length'))
{
	function convert_length($time)
	{
		$waktu = explode(':',$time);
		if (count($waktu) > 1){
			$time2 = $time;
		} else {
			$time2 = $time.':00';
		}


		$times = explode(':',$time2);
		if ($times[0]!=''){
			$jum = strlen($times[0]);
			if ($jum == 1) {
				$jam = '0'.$times[0];
			} else {
				$jam = $times[0];
			}
		} else {
				$jam = '00';
		}

		if ($times[1]!=''){
			$jum = strlen($times[1]);
			if ($jum == 1) {
				$menit = '0'.$times[1];
			} else {
				$menit = $times[1];
			}
		} else {
				$menit = '00';
		}
		return $jam.':'.$menit;
	}
}



if (! function_exists('convert_unit'))
{
	function convert_unit($time)
	{
		$waktu = explode('.',$time);
		if (count($waktu) > 1){
			$time2 = $time;
		} else {
			$time2 = $time.'.00';
		}

		$times = explode('.',$time2);

		if ($times[0]!=''){
			$jum = strlen($times[0]);
			if ($jum == 1) {
				$jam = '0'.$times[0];
			} else {
				$jam = $times[0];
			}
		} else {
				$jam = '00';
		}

		if ($times[1]!=''){
			$jum = strlen($times[1]);
			if ($jum == 1) {
				$menit = $times[1].'0';
			} else {
				$menit = $times[1];
			}
		} else {
				$menit = '00';
		}
		$menits = substr($menit,0,2);
		return $jam.'.'.$menits;
	}
}

if (! function_exists('manipulasi_detik'))
{
	function manipulasi_detik($datetime,$lama)
	{

		$newdate = strtotime ($lama.' seconds', strtotime($datetime));
		return date('Y-m-d H:i:s',$newdate);

/*		$date = date_create($datetime);
		date_add($date, date_interval_create_from_date_string($lama.' seconds'));
		return date_format($date, 'Y-m-d H:i:s');
*/
	}
}

if (! function_exists('manipulasi_tanggal'))
{
	function manipulasi_tanggal($datetime,$lama)
	{

		$newdate = strtotime ($lama, strtotime($datetime));
		return date('Y-m-d H:i:s',$newdate);

/*		$date = date_create($datetime);
		date_add($date, date_interval_create_from_date_string($lama));
		return date_format($date, 'Y-m-d H:i:s');
*/

	}
}


if(!function_exists('encode_quote')){
    function encode_quote($string){
		return htmlspecialchars($string, ENT_QUOTES);
    }
}

if(!function_exists('encode_quote_arr')){
    function encode_quote_arr($arr){
		$data = array();
		if(count($arr)>0){
			foreach ($arr as $key => $val) {
				if(is_array($val)==1)
					$data[$key] = encode_quote_arr($val);
				else
					$data[$key] = htmlspecialchars($val, ENT_QUOTES);
			}
		}
		return $data;
    }
}

if(!function_exists('decode_quote')){
    function decode_quote($string){
		return htmlspecialchars_decode($string);
    }
}




if(!function_exists('decode_quote_arr')){
    function decode_quote_arr($arr){
		$data = array();
		if(count($arr)>0){
			foreach ($arr as $key => $val) {
				if(is_array($val)==1)
					$data[$key] = decode_quote_arr($val);
				else
					$data[$key] = htmlspecialchars_decode($val);
			}
		}
		return $data;
    }
}



if (! function_exists('generate_date'))
{
	function generate_date()
	{
		return date('d/m/Y H:i:s');
	}
}

if(!function_exists('design_currencyid')){
    function design_currencyid($currencyid1,$currencyid2){
		$CI = & get_instance();

		$CI->db->select('cr.*');
		$CI->db->from('currency_range cr');
		if($currencyid1 && $currencyid2){
			$where = '(cr.currencyid = '.$currencyid1.' OR cr.currencyid = '.$currencyid2.')';
			$CI->db->where($where);
		}
		$CI->db->order_by('cr.range','ASC');
		$query = $CI->db->get();
		
		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}
		else
		{
			return array();
		}
    }
}

if(! function_exists('dateDiff'))
{
	function dateDiff($startdate, $enddate) 
	{
	  	return round((strtotime($enddate)-strtotime($startdate))/86400);
	}
}

if(! function_exists('convertUnitToHour'))
{
	function convertUnitToHour($unit=0.00) 
	{
		if($unit > 0)
		{
			##GENERATE UNIT KE HOUR
			$un = explode('.',round(clean_separator($unit),2));
			if(count($un)>1){
				if(strlen($un[1])==1){
					$unit = $un[0].'.'.$un[1].'0';
				} else {
					$unit = $un[0].'.'.$un[1];
				}
			} else {
				$unit = $un[0].'.00';
			}
			$u = explode('.',$unit);
			$x = round(($u[1]/100)*60);
			if($x<10){
				$x='0'.$x;
			}
			if(strlen($un[0])==1){
				$u[0] = '0'.$u[0];
			}
			$hour = $u[0].':'.$x;
		}
		else 
		{
			$hour = '00:00';
		}
		return $hour;

	}
}

if(! function_exists('convertHourToUnit'))
{
	function convertHourToUnit($hour='00:00') 
	{
		if($hour !="")
		{
			$unit = explode(":", $hour);
			
			$coma = ($unit[0] * 60) + $unit[1];
			
			$coma = $coma / 60 ;
			
			$coma = round($coma,2);
			
			$unit =  $coma;
			
			if(strlen($unit) < 4 && strlen($unit) >= 3)
			{
				$r = $unit."0";
			}
			else if(strlen($unit) < 3 &&  strlen($unit) >=1)
			{
				$r = $unit.".00";
			}
			else if(strlen($unit) == 4)
			{
				$sub_unit = explode(".", $unit);
				if(strlen($sub_unit[1]) == 1)
				{
					$r = $unit."0";	
				}
				else
				{
					$r = $unit;	
				}
			}
			else 
			{
				$r = $unit;
			}
		}
		else 
		{
			$r = 0.00;
		}
		return $r;

	}
}

if(! function_exists('hitung_unit_jam'))
{
	function hitung_unit_jam($start_time='',$finish_time='') 
	{
		if($start_time !="" && $finish_time !="")
		{
			$start	= strtotime($start_time);
			$finish	= strtotime($finish_time);
			$jam = round(abs($finish-$start)/3600,2);
		}
		else 
		{
			$jam = 0.00;
		}
		return $jam;

	}
}


if( ! function_exists('getRoleid'))
{
	function getRoleid()
	{
		$CI = &get_instance();
		$roleid		= $CI->session->userdata('log_roleid');
		return $roleid;
	}
}

if( ! function_exists('getEmployeeid'))
{
	function getEmployeeid()
	{
		$CI = &get_instance();
		$employeeid		= $CI->session->userdata('log_employeeid');
		return $employeeid;
	}
}

if( ! function_exists('getUserid'))
{
	function getUserid()
	{
		$CI = &get_instance();
		$userid		= $CI->session->userdata('log_userid');
		return $userid;
	}
}

if( ! function_exists('search_by_column'))
{
	function search_by_column($array, $key, $value)
	{
		$results = array();
	
		if (is_array($array)) {
			if (isset($array[$key]) && $array[$key] == $value) {
				$results[] = $array;
			}
	
			foreach ($array as $subarray) {
				$results = array_merge($results, search_by_column($subarray, $key, $value));
			}
		}
	
		return $results;
	}
}


if( ! function_exists('looping_setup_budget_plan'))
{
	function looping_setup_budget_plan($result,$field='ref_id',$value=0,$key=1){
		$result_new = search_by_column($result,$field,$value);
		if($key==1){
			$class = 'class="table-flag-blue blue"';
			$size = 'h4';
			$size2 = '<strong>';
			$size2_2 = '</strong>';
		} elseif($key==2){
			$class = 'class="table-flag-green green"';
			$size = 'h5';
			$size2 = '<strong>';
			$size2_2 = '</strong>';
		} elseif($key==3){
			$class = 'class="table-flag-gray gray"';
			$size = 'h6';
			$size2 = '';
			$size2_2 = '';
		} else {
			$class = 'class="table-flag-black black"';
			$size = 'h7';
			$size2 = '';
			$size2_2 = '';
		}
		if($key%2==0){
			$number = 'A';
		} else {
			$number = 1;
		}
			
		$number = $number;
		$html = '';
		if(count($result_new)>0){
			foreach($result_new as $result_new_key => $result_new_val){
				$html .= '<tr '.$class.'>';
				$html .= '<td align="center"><'.$size.'>'.$size2.''.$number.''.$size2_2.'</'.$size.'></td>';
				$html .= '<td><'.$size.'>'.$size2.''.$result_new_val['code'].''.$size2_2.'</'.$size.'></td>';
				$html .= '<td><'.$size.'>'.$size2.''.$result_new_val['description'].''.$size2_2.'</'.$size.'></td>';
				$html .= '<td>';
				$html .= '<div align="right">';
				if($result_new_val['total_sub']==0){##tidak memiliki sub
					$html .= '<a href="#Javascript:;" onclick="delete_setup_budget_plan('.$result_new_val['id'].')" class="btn btn-danger show-tooltip btn-xs" title="Delete">';
					$html .= '<i class="fa fa-trash-o"></i>';
					$html .= '</a>&nbsp;&nbsp;';
				}
				$html .= '<a href="#Javascript:;" onclick="modify_setup_budget_plan('.$result_new_val['id'].')" class="btn btn-inverse show-tooltip btn-xs" title="Modify">';
				$html .= '<i class="fa fa-edit"></i>';
				$html .= '</a>';
				$html .= '</div>';
				$html .= '</td>';
				$html .= '</tr>';
				$html .= looping_setup_budget_plan($result,$field,$result_new_val['id'],($key+1));
				$number++;
			}
		}
		return $html;
	}
}


if( ! function_exists('looping_total_setup_budget_plan'))
{
	function looping_total_setup_budget_plan($projectid,$result,$field='ref_id',$value=0,$key=1,$flag_modify_data=1,$flag_display_full=1){
		$result_new = search_by_column($result,$field,$value);
		if($key==1){
			$class = 'class="blue"';
			$size = 'h4';
			$size2 = '<strong>';
			$size2_2 = '</strong>';
		} elseif($key==2){
			$class = 'class="green"';
			$size = 'h5';
			$size2 = '<strong>';
			$size2_2 = '</strong>';
		} elseif($key==3){
			$class = 'class="gray"';
			$size = 'h6';
			$size2 = '';
			$size2_2 = '';
		} else {
			$class = 'class="black"';
			$size = 'h7';
			$size2 = '';
			$size2_2 = '';
		}
		if($key%2==0){
			$number = 'A';
		} else {
			$number = 1;
		}
			
		$number = $number;
		$html = '';
		if(count($result_new)>0){
			$loop_new = 0;
			foreach($result_new as $result_new_key => $result_new_val){
				if(($result_new_val['total_price']>0 && $result_new_val['type']==3) || $result_new_val['type']==1 || $result_new_val['type']==2){
					if($result_new_val['type']==1){
						$number_text = romanNumerals($number);
					} else {
						$number_text = $number;
					}
					$html .= '<tr '.$class.'>';
					$html .= '<td align="center"><'.$size.'>'.$size2.''.$number_text.''.$size2_2.'</'.$size.'></td>';
					$html .= '<td align="center"><'.$size.'>'.$size2.''.$result_new_val['code'].''.$size2_2.'</'.$size.'></td>';
					$html .= '<td><'.$size.'>'.$size2.''.$result_new_val['description'].''.$size2_2.'</'.$size.'></td>';
					$html .= '<td align="center">';
					if($result_new_val['total_price']>0){
						if($flag_display_full){
							$html .= '<div align="right">';
							$html .= '<a href="#Javascript:;" class="show-tooltip" title="Detail Material Budget Plan" onclick="detail_material_setup_budget_plan('.$projectid.','.$result_new_val['id'].','.$flag_modify_data.')">';
							$html .= format_uang($result_new_val['total_price']);
							$html .= '</a>';
							$html .= '</div>';
						} else {
							$html .= '<button class="btn btn-circle btn-primary show-tooltip" title="Detail Material Budget Plan" onclick="detail_material_setup_budget_plan('.$projectid.','.$result_new_val['id'].','.$flag_modify_data.')">';
							$html .= '<i class="fa fa-angle-right"></i>';
							$html .= '</button>';
						}
					} else {
						$html .= '';
					}
					$html .= '</td>';
					$html .= '</tr>';
					$number++;
				}
				$html .= looping_total_setup_budget_plan($projectid,$result,$field,$result_new_val['id'],($key+1),$flag_modify_data,$flag_display_full);
			}
		}
			/*$html .= '<tr>';
			$html .= '<td align="center" colspan="2">TOTAL</td>';
			$html .= '<div align="right">';
		$html .= format_uang($total_price);
		$html .= '</div>';
		$html .= '</td>';
		$html .= '</tr>';*/
		return $html;
	}
}



if( ! function_exists('looping_total_setup_budget_plan_report'))
{
	function looping_total_setup_budget_plan_report($projectid,$result,$field='ref_id',$value=0,$key=1){
		$result_new = search_by_column($result,$field,$value);
		if($key==1){
			$class = 'class="blue"';
			$size = 'h4';
			$size2 = '<strong>';
			$size2_2 = '</strong>';
		} elseif($key==2){
			$class = 'class="green"';
			$size = 'h5';
			$size2 = '<strong>';
			$size2_2 = '</strong>';
		} elseif($key==3){
			$class = 'class="gray"';
			$size = 'h6';
			$size2 = '';
			$size2_2 = '';
		} else {
			$class = 'class="black"';
			$size = 'h7';
			$size2 = '';
			$size2_2 = '';
		}
		if($key%2==0){
			$number = 'A';
		} else {
			$number = 1;
		}
			
		$number = $number;
		$html = '';
		if(count($result_new)>0){
			$loop_new = 0;
			foreach($result_new as $result_new_key => $result_new_val){
				if(($result_new_val['total_price']>0 && $result_new_val['type']==3) || $result_new_val['type']==1 || $result_new_val['type']==2){
					if($result_new_val['type']==1){
						$number_text = romanNumerals($number);
					} else {
						$number_text = $number;
					}
					$style		= '';
					$onclick	= '';
					if($result_new_val['flag_input']==1 && $result_new_val['total_price'] > 0){
						$style 		= 'style="cursor:pointer"';
						$onclick	= 'onclick="detail_material('.$result_new_val['id'].')"';
					}

					$html .= '<tr '.$class.' id="tr_'.$result_new_val['id'].'" '.$style.' '.$onclick.'>';
					$html .= '<td align="center" class="setup_budget_plan" flag="'.$result_new_val['id'].'">'.$size2.''.$number_text.''.$size2_2.'</td>';
					$html .= '<td align="center">'.$size2.''.$result_new_val['code'].''.$size2_2.'</td>';
					$html .= '<td>'.$size2.''.$result_new_val['description'].''.$size2_2.'</td>';
					$html .= '<td align="right" style="color:#393939" id="budget_plan_'.$result_new_val['id'].'" >';
					if($result_new_val['total_price']>0){
						$html .= format_uang($result_new_val['total_price']);
					} else {
						$html .= '';
					}
					$html .= '</td>';
					$html .= '<td align="right" id="budget_realization_'.$result_new_val['id'].'" style="color:#393939">';
					$html .= '</td>';
					$html .= '</tr>';

					if($result_new_val['flag_input']==1 && $result_new_val['total_price'] > 0){
						$html .= '<tr id="tr_detail_'.$result_new_val['id'].'" style="display:none">';
						$html .= '<td colspan="5" id="td_detail_'.$result_new_val['id'].'">&nbsp;';
						$html .= '</td>';
						$html .= '</tr>';
					}


					$number++;
				}
				$html .= looping_total_setup_budget_plan_report($projectid,$result,$field,$result_new_val['id'],($key+1));
			}
		}

		return $html;
	}
}

if( ! function_exists('romanNumerals'))
{
	function romanNumerals($num) 
	{
		$n = intval($num);
		$res = '';
	 
		/*** roman_numerals array  ***/
		$roman_numerals = array(
					'M'  => 1000,
					'CM' => 900,
					'D'  => 500,
					'CD' => 400,
					'C'  => 100,
					'XC' => 90,
					'L'  => 50,
					'XL' => 40,
					'X'  => 10,
					'IX' => 9,
					'V'  => 5,
					'IV' => 4,
					'I'  => 1);
	 
		foreach ($roman_numerals as $roman => $number) 
		{
			/*** divide to get  matches ***/
			$matches = intval($n / $number);
	 
			/*** assign the roman char * $matches ***/
			$res .= str_repeat($roman, $matches);
	 
			/*** substract from the number ***/
			$n = $n % $number;
		}
	 
		/*** return the res ***/
		return $res;
	}
}

if( ! function_exists('hide_mobile'))
{
	function hide_mobile($mobile, $depan, $belakang)
	{
		$total = strlen($mobile);
		$char_depan = substr($mobile,0,$depan);;
		$char_belakang = substr($mobile,-$belakang);
		$sisa = $total-($depan+$belakang);
		$text = '';
		for($i=0;$i<$sisa;$i++){
			$text .= '*';
		}
		$tengah = $text;
		
		return $char_depan.$tengah.$char_belakang;
		
		
	}
}




?>