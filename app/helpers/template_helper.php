<?php

function apply_template_vars($string,$hash) {
	foreach ( $hash as $ind => $val ) {
		if(!is_array($val))
	    	$string = str_replace('{{'.$ind.'}}',$val,$string);
	}   
	$string = preg_replace('/\{\{(.*?)\}\}/is','',$string);
	return $string;
}

function parse_template_file($file,$hash) {
	$string = file_get_contents($file);
	if ($string) {
	    $string = $this->apply_template_vars($string,$hash);
	}
	return $string;
}

function __T($a,$b){return apply_template_vars($a,$b);}
function __P($a,$b){return parse_template_file($a,$b);}