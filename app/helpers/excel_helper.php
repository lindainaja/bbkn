<?php

function excel_write_char($cell,$text,&$sheet,$limit = 0,$skip_col=1){
	$is_match = preg_match('/([A-Z]*)(\d+)/',$cell,$match);
 
	if($is_match && count($match) > 2){
		$row = $match[2];
		$col = $match[1];

		$str_to_write = str_split($text);

		$max = count($str_to_write) - 1;
		$limit = ( !$limit ? $max : $limit );
		$i = 0;
	
		$skip_number = 1;
		while($i <= $max){
			
			
			if($skip_number == 1){
				$str = $str_to_write[$i];
				$sheet->setCellValue("${col}${row}",$str);
				$i++ ;
			}

			

			$col++;
			$skip_number++;
			if($skip_number > $skip_col){
				$skip_number = 1;
			}
			if( $i >= $limit){
				break;
			}
		}
	}
}

function get_shdk_number($shdk){
	$opt_shdk_reverse = config_item('opt_shdk_reverse');
	$ret = '11';
	$shdk_k = str_replace(' ','_',strtolower($shdk));
	foreach ($opt_shdk_reverse as $key => $value) {
		$k = str_replace(' ','_',strtolower($key));
		if($k == $shdk_k){
			return $value;
		}
	}
	return $ret;
}