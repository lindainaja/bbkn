<?php

function input_syarat($keys = array(), $input = 'syarat', $decode = true){
	$ci =& get_instance();
	if(empty($keys)){
		return '';
	}
	$syarat_input = $ci->input->post($input);
	$ret  = array();

	if(!is_array($syarat_input) || empty($syarat_input)){
		$syarat_input = array();
	}	
	foreach ($keys as $key) {
		$ret[$key] = in_array($key, $syarat_input) ? true:false;
	}
	
	if($decode){
		return serialize($ret);
	}

	return $ret;
}

function decode_syarat($input = '', $keys = array()){
	$ret = array();
	if(empty($keys)){
		return;
	}
	if(empty($input)){
		foreach ($keys as $key ) {
			$ret[$key] = false;
		}

		return $ret;
	}
	$input = unserialize($input);
	
	foreach ($keys as $key) {
		if(!empty($input[$key])){
			$ret[$key] = $input[$key];
		}else{
			$ret[$key] = false;
		}
	}

	return $ret;
}