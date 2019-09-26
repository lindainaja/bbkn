<?php

function menu_token($id){
	return md5('_HELLO_' . $id . date('Ymd'));
}
function generate_menu(){
	$ci =& get_instance();
	$ci->load->model('login/m_login'); 
	$roleid = $ci->session->userdata('log_roleid');
	// die($roleid);
	$log_menu = $ci->m_login->getSetupMenuByRoleid($roleid);

	return $ci->m_login->generateMenu($log_menu);
}

function get_menu_mech(){
	$ci =& get_instance();
	$ci->load->model('login/m_login');
	$roleid = $ci->session->userdata('log_roleid');

	return $ci->m_login->getSetupMenuMechanismByRoleid($roleid );
}

function menu_check_role($array=array())
{
	// print_r($array);
	if(count($array)>0){
		return true;
	} else {
		redirect('login');
	}
}