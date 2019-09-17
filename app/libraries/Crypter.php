<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crypter {
	public function __construct()
	{
		//$this->CI =& get_instance();
	
	}

  protected function getCipher(){
     $cipher = mcrypt_module_open(MCRYPT_BLOWFISH,'','cbc','');
     mcrypt_generic_init($cipher, config_item('keyLogin'), '21590151');
     return $cipher;
  }
  function encrypt($string){
     $binary = mcrypt_generic($this->getCipher(),$string);
     $string = '';
     for($i = 0; $i < strlen($binary); $i++){
        $string .=  str_pad(ord($binary[$i]),3,'0',STR_PAD_LEFT);
     }
     return $string;
  }
  function decrypt($encrypted){
     //check for missing leading 0's
     $encrypted = str_pad($encrypted, ceil(strlen($encrypted) / 3) * 3,'0', STR_PAD_LEFT);
     $binary = '';
     $values = str_split($encrypted,3);
     foreach($values as $chr){
        $chr = ltrim($chr,'0');
        $binary .= chr($chr);
     }
     return clean_separator(mdecrypt_generic($this->getCipher(),$binary));
  }
}