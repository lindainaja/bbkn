<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if( ! function_exists('audit_delete'))
{
	function audit_delete($table,$ar_where,$ar_like,$ar_limit)
	{
		$CI = &get_instance();
		$CI->load->database('default',true);
        //$CI->db = $CI->load->database('default',TRUE);
        //$CI->db_audit = $CI->load->database('audit',TRUE);
		
		//$default = $CI->db->database;
		//$audit = $CI->db_audit->database;
		
		$sql = 'SELECT COLUMN_NAME FROM information_schema.columns ';
		$sql .= 'WHERE TABLE_NAME = "'.$table.'" ';
		$query = $CI->db->query($sql);
		$result = $query->result_array();

		print_r($result);
		die();
		if(count($result)>0){
			$field = '';
			foreach($result as $result_key => $result_val){
				$field .= $result_val['COLUMN_NAME'].',';
			}
			echo $field;
			die();
			$sql .= 'INSERT INTO '.$audit.'.'.$table.' (summary) ';
			$sql .= '';
			$sql .= '';
		}
		echo 'table='.$table;
		echo '<br/>';
		echo 'where='.$where;
		echo '<br/>';
		echo 'like='.$like;
		echo '<br/>';
		echo 'limit='.$limit;
		echo '<br/>';
		die();

		$q = $CI->db->get('employee');
		return $q->row_array();
	}
}



?>