<?php


if( ! function_exists('generate_number_revision'))
{
	function generate_number_revision($number)
	{
		if(strchr($number,'REV')){##ada
			$arr = explode('/',$number);
			$num_rev = $arr[(count($arr)-1)];
			$count = clean_separator($num_rev)+1;
			$new = 'REV'.$count;
			$num = str_replace($num_rev,$new,$number);
		} else {##belum ada revisi
			$num = $number.'/REV1';
		}
		return $num;

	}
}

if( ! function_exists('generate_client_code'))
{
	function generate_client_code()
	{
		$CI = &get_instance();
		$CI->load->database();

		$sql = 'SELECT c.code ';
		$sql .= 'FROM client c ';
		$sql .= 'ORDER BY c.code DESC LIMIT 1 ';
		$query = $CI->db->query($sql);
		$result = $query->row_array();
		if(count($result)>0){
			$client_code = $result['code'];
		} else {
			$client_code = '0000';
		}

		$number = $client_code+1;
		return sprintf('%04d',$number);

	}
}

if( ! function_exists('generate_number_material_request'))
{
	function generate_number_material_request($projectid=0)
	{
		$CI = &get_instance();
		$CI->load->database();

		$sql = 'SELECT p.projectnumber ';
		$sql .= 'FROM project p ';
		$sql .= 'WHERE p.id='.$projectid.' ';
		$query = $CI->db->query($sql);
		$result = $query->row_array();
		$projectnumber	= $result['projectnumber'];

		$sql = 'SELECT mr.no ';
		$sql .= 'FROM material_request mr ';
		$sql .= 'WHERE mr.projectid='.$projectid.' ';
		$sql .= 'ORDER BY mr.no DESC LIMIT 1 ';
		$result = $CI->db->query($sql)->row_array();
		if(count($result)>0){
			$no = $result['no'];
			$arrNo = explode('/',$result['no']);
			$no_awal = number_format(clean_separator($arrNo[0]));
		} else {
			$no_awal = 0;
		}
		$new_number = $no_awal+1;
		$number = sprintf('%03d',$new_number);
		##001/0002.001/MR/VII/2015
		$month = romanNumerals(date('m'));

		return $number.'/'.$projectnumber.'/'.config_item('code_material_request').'/'.$month.'/'.date('Y');

	}
}
if( ! function_exists('generate_number_budget_cash_request'))
{
	function generate_number_budget_cash_request($projectid=0)
	{
		$CI = &get_instance();
		$CI->load->database();

		$sql = 'SELECT p.projectnumber ';
		$sql .= 'FROM project p ';
		$sql .= 'WHERE p.id='.$projectid.' ';
		$query = $CI->db->query($sql);
		$result = $query->row_array();
		$projectnumber	= $result['projectnumber'];

		$sql = 'SELECT bcr.no ';
		$sql .= 'FROM budget_cash_request bcr ';
		$sql .= 'WHERE bcr.projectid='.$projectid.' ';
		$sql .= 'ORDER BY bcr.no DESC LIMIT 1 ';
		$result = $CI->db->query($sql)->row_array();
		if(count($result)>0){
			$no = $result['no'];
			$arrNo = explode('/',$result['no']);
			$no_awal = number_format(clean_separator($arrNo[0]));
		} else {
			$no_awal = 0;
		}
		$new_number = $no_awal+1;
		$number = sprintf('%03d',$new_number);
		##001/0002.001/MR/VII/2015
		$month = romanNumerals(date('m'));

		return $number.'/'.$projectnumber.'/'.config_item('code_budget_cash_request').'/'.$month.'/'.date('Y');

	}
}

if( ! function_exists('generate_number_cash_request_head'))
{
	function generate_number_cash_request_head($projectid=0)
	{
		$CI = &get_instance();
		$CI->load->database();

		$sql = 'SELECT p.projectnumber ';
		$sql .= 'FROM project p ';
		$sql .= 'WHERE p.id='.$projectid.' ';
		$query = $CI->db->query($sql);
		$result = $query->row_array();
		$projectnumber	= $result['projectnumber'];

		$sql = 'SELECT bch.no ';
		$sql .= 'FROM budget_cash_head bch ';
		$sql .= 'WHERE bch.projectid='.$projectid.' ';
		$sql .= 'ORDER BY bch.no DESC LIMIT 1 ';
		$result = $CI->db->query($sql)->row_array();
		if(count($result)>0){
			$no = $result['no'];
			$arrNo = explode('/',$result['no']);
			$no_awal = number_format(clean_separator($arrNo[0]));
		} else {
			$no_awal = 0;
		}
		$new_number = $no_awal+1;
		$number = sprintf('%03d',$new_number);
		##001/0002.001/MR/VII/2015
		$month = romanNumerals(date('m'));

		return $number.'/'.$projectnumber.'/'.config_item('code_cash_request_head').'/'.$month.'/'.date('Y');

	}
}


if( ! function_exists('generate_number_cash_request_site'))
{
	function generate_number_cash_request_site($projectid=0)
	{
		$CI = &get_instance();
		$CI->load->database();

		$sql = 'SELECT p.projectnumber ';
		$sql .= 'FROM project p ';
		$sql .= 'WHERE p.id='.$projectid.' ';
		$query = $CI->db->query($sql);
		$result = $query->row_array();
		$projectnumber	= $result['projectnumber'];

		$sql = 'SELECT bcs.no ';
		$sql .= 'FROM budget_cash_site bcs ';
		$sql .= 'WHERE bcs.projectid='.$projectid.' ';
		$sql .= 'ORDER BY bcs.no DESC LIMIT 1 ';
		$result = $CI->db->query($sql)->row_array();
		if(count($result)>0){
			$no = $result['no'];
			$arrNo = explode('/',$result['no']);
			$no_awal = number_format(clean_separator($arrNo[0]));
		} else {
			$no_awal = 0;
		}
		$new_number = $no_awal+1;
		$number = sprintf('%03d',$new_number);
		##001/0002.001/MR/VII/2015
		$month = romanNumerals(date('m'));

		return $number.'/'.$projectnumber.'/'.config_item('code_cash_request_site').'/'.$month.'/'.date('Y');

	}
}


if( ! function_exists('generate_number_expense'))
{
	function generate_number_expense($projectid=0)
	{
		$CI = &get_instance();
		$CI->load->database();

		$sql = 'SELECT p.projectnumber ';
		$sql .= 'FROM project p ';
		$sql .= 'WHERE p.id='.$projectid.' ';
		$query = $CI->db->query($sql);
		$result = $query->row_array();
		$projectnumber	= $result['projectnumber'];

		$sql = 'SELECT exp.no ';
		$sql .= 'FROM expense exp ';
		$sql .= 'WHERE exp.projectid='.$projectid.' ';
		$sql .= 'ORDER BY exp.no DESC LIMIT 1 ';
		$result = $CI->db->query($sql)->row_array();
		if(count($result)>0){
			$no = $result['no'];
			$arrNo = explode('/',$result['no']);
			$no_awal = number_format(clean_separator($arrNo[0]));
		} else {
			$no_awal = 0;
		}
		$new_number = $no_awal+1;
		$number = sprintf('%03d',$new_number);
		##001/0002.001/MR/VII/2015
		$month = romanNumerals(date('m'));

		return $number.'/'.$projectnumber.'/'.config_item('code_expense').'/'.$month.'/'.date('Y');

	}
}


if( ! function_exists('generate_number_taking_material'))
{
	function generate_number_taking_material($projectid=0)
	{
		$CI = &get_instance();
		$CI->load->database();

		$sql = 'SELECT p.projectnumber ';
		$sql .= 'FROM project p ';
		$sql .= 'WHERE p.id='.$projectid.' ';
		$query = $CI->db->query($sql);
		$result = $query->row_array();
		$projectnumber	= $result['projectnumber'];

		$sql = 'SELECT tm.no ';
		$sql .= 'FROM taking_material tm ';
		$sql .= 'WHERE tm.projectid='.$projectid.' ';
		$sql .= 'ORDER BY tm.no DESC LIMIT 1 ';
		$result = $CI->db->query($sql)->row_array();
		if(count($result)>0){
			$no = $result['no'];
			$arrNo = explode('/',$result['no']);
			$no_awal = number_format(clean_separator($arrNo[0]));
		} else {
			$no_awal = 0;
		}
		$new_number = $no_awal+1;
		$number = sprintf('%03d',$new_number);
		##008/0002.001/TM/MEDGE/VII/2015
		$month = romanNumerals(date('m'));

		return $number.'/'.$projectnumber.'/'.config_item('code_taking_material').'/MEDGE/'.$month.'/'.date('Y');

	}
}

if( ! function_exists('generate_number_return_material'))
{
	function generate_number_return_material($projectid=0)
	{
		$CI = &get_instance();
		$CI->load->database();

		$sql = 'SELECT p.projectnumber ';
		$sql .= 'FROM project p ';
		$sql .= 'WHERE p.id='.$projectid.' ';
		$query = $CI->db->query($sql);
		$result = $query->row_array();
		$projectnumber	= $result['projectnumber'];

		$sql = 'SELECT rm.no ';
		$sql .= 'FROM return_material rm ';
		$sql .= 'WHERE rm.projectid='.$projectid.' ';
		$sql .= 'ORDER BY rm.no DESC LIMIT 1 ';
		$result = $CI->db->query($sql)->row_array();
		if(count($result)>0){
			$no = $result['no'];
			$arrNo = explode('/',$result['no']);
			$no_awal = number_format(clean_separator($arrNo[0]));
		} else {
			$no_awal = 0;
		}
		$new_number = $no_awal+1;
		$number = sprintf('%03d',$new_number);
		##008/0002.001/RM/MEDGE/VII/2015
		$month = romanNumerals(date('m'));

		return $number.'/'.$projectnumber.'/'.config_item('code_return_material').'/MEDGE/'.$month.'/'.date('Y');

	}
}


if( ! function_exists('generate_number_budget_request'))
{
	function generate_number_budget_request($material_request=0)
	{
		$CI = &get_instance();
		$CI->load->database();

		$CI->db->select('mr.no');
		$CI->db->from('material_request mr');
		$CI->db->where('mr.id',$material_request);
		$query = $CI->db->get();
		$result = $query->row_array();
		$code	= '';
		if(count($result)>0){
			$code	= $result['no'];
		}
		
		$number_br = str_replace(config_item('code_material_request'),config_item('code_budget_request'),$code);

		return $number_br;

	}
}

if( ! function_exists('generate_number_purchase_order'))
{
	function generate_number_purchase_order($projectid=0)
	{
		$CI = &get_instance();
		$CI->load->database();

		$sql = 'SELECT p.projectnumber ';
		$sql .= 'FROM project p ';
		$sql .= 'WHERE p.id='.$projectid.' ';
		$query = $CI->db->query($sql);
		$result = $query->row_array();
		$projectnumber	= $result['projectnumber'];

		$sql = 'SELECT po.no ';
		$sql .= 'FROM purchase_order po ';
		$sql .= 'WHERE po.projectid='.$projectid.' ';
		$sql .= 'ORDER BY po.no DESC LIMIT 1 ';
		$result = $CI->db->query($sql)->row_array();
		if(count($result)>0){
			$no = $result['no'];
			$arrNo = explode('/',$result['no']);
			$no_awal = number_format(clean_separator($arrNo[0]));
		} else {
			$no_awal = 0;
		}

		$new_number = $no_awal+1;
		$number = sprintf('%03d',$new_number);
		##001/0002.001/MEDGE/VII/2015
		$month = romanNumerals(date('m'));

		return $number.'/'.$projectnumber.'/MEDGE/'.$month.'/'.date('Y');

	}
}

if( ! function_exists('generate_number_material_mutation'))
{
	function generate_number_material_mutation($projectid=0)
	{
		$CI = &get_instance();
		$CI->load->database();

		$sql = 'SELECT p.projectnumber ';
		$sql .= 'FROM project p ';
		$sql .= 'WHERE p.id='.$projectid.' ';
		$query = $CI->db->query($sql);
		$result = $query->row_array();
		$projectnumber	= $result['projectnumber'];

		$sql = 'SELECT mm.no ';
		$sql .= 'FROM material_mutation mm ';
		$sql .= 'WHERE mm.projectid='.$projectid.' ';
		$sql .= 'ORDER BY mm.no DESC LIMIT 1 ';
		$result = $CI->db->query($sql)->row_array();
		if(count($result)>0){
			$no = $result['no'];
			$arrNo = explode('/',$result['no']);
			$no_awal = number_format(clean_separator($arrNo[0]));
		} else {
			$no_awal = 0;
		}

		$new_number = $no_awal+1;
		$number = sprintf('%03d',$new_number);
		##077/0002.001/ MM/MEDGE/VII/2015
		$month = romanNumerals(date('m'));

		return $number.'/'.$projectnumber.'/'.config_item('code_material_mutation').'/MEDGE/'.$month.'/'.date('Y');

	}
}


if( ! function_exists('generate_number_delivery_order'))
{
	function generate_number_delivery_order($projectid=0)
	{
		$CI = &get_instance();
		$CI->load->database();

		$sql = 'SELECT p.projectnumber ';
		$sql .= 'FROM project p ';
		$sql .= 'WHERE p.id='.$projectid.' ';
		$query = $CI->db->query($sql);
		$result = $query->row_array();
		$projectnumber	= $result['projectnumber'];

		$sql = 'SELECT do.no ';
		$sql .= 'FROM delivery_order do ';
		$sql .= 'WHERE do.projectid='.$projectid.' ';
		$sql .= 'ORDER BY do.no DESC LIMIT 1 ';
		$result = $CI->db->query($sql)->row_array();
		if(count($result)>0){
			$no = $result['no'];
			$arrNo = explode('/',$result['no']);
			$no_awal = number_format(clean_separator($arrNo[0]));
		} else {
			$no_awal = 0;
		}

		$new_number = $no_awal+1;

		$number = sprintf('%03d',$new_number);
		##077/0002.001/ DO/MEDGE/VII/2015
		$month = romanNumerals(date('m'));

		return $number.'/'.$projectnumber.'/'.config_item('code_delivery_order').'/MEDGE/'.$month.'/'.date('Y');

	}
}


if( ! function_exists('generate_number_material_receipt'))
{
	function generate_number_material_receipt($projectid=0)
	{
		$CI = &get_instance();
		$CI->load->database();

		$sql = 'SELECT p.projectnumber ';
		$sql .= 'FROM project p ';
		$sql .= 'WHERE p.id='.$projectid.' ';
		$query = $CI->db->query($sql);
		$result = $query->row_array();
		$projectnumber	= $result['projectnumber'];

		$sql = 'SELECT mr.no ';
		$sql .= 'FROM material_receipt mr ';
		$sql .= 'WHERE mr.projectid='.$projectid.' ';
		$sql .= 'ORDER BY mr.no DESC LIMIT 1 ';
		$result = $CI->db->query($sql)->row_array();
		if(count($result)>0){
			$no = $result['no'];
			$arrNo = explode('/',$result['no']);
			$no_awal = number_format(clean_separator($arrNo[0]));
		} else {
			$no_awal = 0;
		}

		$new_number = $no_awal+1;
		$number = sprintf('%03d',$new_number);
		##008/0002.001/MR/MEDGE/VII/2015
		$month = romanNumerals(date('m'));

		return $number.'/'.$projectnumber.'/'.config_item('code_material_receipt').'/MEDGE/'.$month.'/'.date('Y');

	}
}


if( ! function_exists('generate_projectnumber'))
{
	function generate_projectnumber($clientid=0,$projectid=0)
	{
		$CI = &get_instance();
		$CI->load->database();

		$sql = 'SELECT c.code ';
		$sql .= 'FROM client c ';
		$sql .= 'WHERE c.id='.$clientid.' ';
		$query = $CI->db->query($sql);
		$result = $query->row_array();
		$client_code	= $result['code'];

		$sql = 'SELECT p.projectnumber ';
		$sql .= 'FROM project p ';
		$sql .= 'WHERE p.clientid='.$clientid.' ';
		if($projectid>0){##modify
			$sql .= 'AND p.id != '.$projectid.' ';
		}
		$sql .= 'ORDER BY p.projectnumber DESC LIMIT 1 ';
		$query = $CI->db->query($sql);
		$result = $query->row_array();
		$number = '001';
		if(count($result)>0){
			$arr = explode(config_item('separator'),$result['projectnumber']);
			$number 		= sprintf('%03d',($arr[1]+1));
		}
		return $client_code.config_item('separator').$number;

	}
}
