<?php

class Syarat {
	private $ci;
	private $className;
	private $data;

	public function __construct()
	{
		$this->ci =& get_instance();
		$this->className = $this->ci->router->fetch_class();
		$this->ci->load->config('syarat');

		//LOAD FROM CONFIG

		$config_description_key = 'syarat_descriptions';
		$config_key 			= 'syarat_' . strtolower($this->className);

		$syarat_keys 			= $this->ci->config->item($config_key);
		$config_descriptions 	= $this->ci->config->item($config_description_key);


		if(!empty($syarat_keys)){
			foreach ($syarat_keys as $key) {
				if( isset($config_descriptions[$key]) ){
					$syarat_descriptions[$key] = $config_descriptions[$key];
				}else{
					$syarat_descriptions[$key] = $key;
				}
			}
			$this->data = array(
				'syarat_keys' => $syarat_keys,
				'syarat_descriptions' => $syarat_descriptions,
				'syarat' => ''
			);
		}

		

		$this->ci->syarat = $this;
	}

	public function form($input = '')
	{
		$this->data['syarat'] = decode_syarat($input, $this->data['syarat_keys']);

		return "";//$this->ci->twig->render('syarat/template.twig.php', $this->data);
	}

	public function get_input()
	{
		return input_syarat($this->data['syarat_keys']);
	}
}