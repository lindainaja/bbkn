<?php

namespace Artisan;
class CI_Controller{

}
use Artisan\CI_Controller;
class Tools {
	private $input_dir;
	public function init($module){
		 $this->module = $module;
		 $this->input_dir 				= realpath(__DIR__ . '/../..') .'/artisan/inputs/';
		 $this->input_module_dir 		= $this->input_dir . 'modules/' . $this->module .'/';
		 $this->input_controller_dir 	= $this->input_module_dir . 'controllers/';
		 $this->input_view_dir 			= $this->input_module_dir . 'views/';
		 $this->input_asset_dir 		= $this->input_module_dir . 'assets/';
		 $this->input_model_dir 		= $this->input_module_dir . 'models/';
	}
	public function reflectionMethodSource($module, $method){
		$this->init($module);

	   	$module_controller_filename 	= $module . '.php';
		$module_controller_file_path 	= $this->input_controller_dir . $module_controller_filename;
	    
	    $module_class = ucfirst($module);

	    require_once $module_controller_file_path;

	    $class      		= new \ReflectionMethod($module_class,$method);
	    $class_file_name   	= $class->getFileName();
	    $start_line  		= $class->getStartLine()-1;  
	    $end_line    		= $class->getEndLine();
	    $num_lines   		= $endLine - $startLine;

	    // $class_source = file_get_contents($class_file_name);
	    return trim(implode('',array_slice(file($class_file_name),$start_line,$num_lines))); 
	}
}