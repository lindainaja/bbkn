<?php

class Pengantar_ktp extends Crud_Controller
{
	// Database Behaviour
	protected $tablePk = 'pengantar_ktpid';
	protected $tableName  = 't_pengantar_ktp';
	// FORM BEHAVIOUR
	protected $autosetPostKeys = array(
		'add' =>array('create_on','syarat','create_by','date','no_kel','jenis','nama','no_kk','nik','alamat','rt','rw','ttd_nama','ttd_nip','ttd_jabatan'),
		'edit'=>array('update_on','syarat','update_by','date','no_kel','jenis','nama','no_kk','nik','alamat','rt','rw','ttd_nama','ttd_nip','ttd_jabatan'),
	);
	protected $dateFields  			= array('date');
	protected $currentDateFields  	= array('create_on','update_on');
	protected $syaratFields  	 	= array('syarat');
	protected $sessionUserIdFields  = array('create_by','update_by');

	protected 
	$behaviour = 'default';
	
	public 
	
	$title 		= 'Pengantar KTP',
	$func 		= 'pengantar_ktp',
	$modelName 	= 'm_pengantar_ktp',
	$menuId 	= '21',
	$subject 	= "Surat Pengantar KTP",
	$mechIds 	= array(6,7,8,9);

	public 
	/*
	SET BREADCRUMBS TITLE INDEX
	*/
	$breadcrumbs = array(
		'index' => 'Beranda'
	);
	public function __construct()
	{
		parent::__construct();
	} 
	/*
	Execute before compiling download views
	*/
	// protected function _preDownload(&$data){
	// 	$detail = $data['detail'];

		
	// }
	public function form_tambah_data()
	{
		$data = array(
			'kel' 			=> kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel),
			'log_kel' 		=> $this->session->userdata('log_kel'),
			'table_pk' 		=> $this->tablePk,
			'syarat_form' 	=> $this->syarat->form(),
			'module_name' 	=> $this->func
		);

		$data['dropdown_kel'] = form_dropdown(
			'no_kel',
			$data['kel'],
			$data['log_kel'],
			'id="no_kel" class="select2 form-control" style="width:100%" '
		);

		$this->twig->display('form/add.twig.php', $data);
	} 
	

	function form_edit_data(){
		$pk 			= $this->input->post($this->tablePk);
		$detail 		= $this->{$this->modelName}->detail_data($pk);
		$checked_attr 	= 'checked=""';
		
		$data = array(
			'kel' 			=> kel_2_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel),
			'no_kel' 		=> $detail['no_kel'],
			'syarat_form' 	=> $this->syarat->form($detail['syarat']),
			'detail' 		=> $detail,
			'pk' 			=> $pk,
			'checked_bar'   => ($detail['jenis'] =='BARU' ? $checked_attr : ''),
			'checked_per'   => ($detail['jenis'] =='PERPANJANGAN' ? $checked_attr : ''),
			'checked_peng'  => ($detail['jenis']=='PENGGANTIAN' ? $checked_attr : ''),
			'table_pk' 		=> $this->tablePk,
			'module_name' 	=> $this->func

		);

		$data['dropdown_kel'] = form_dropdown(
			'no_kel',
			$data['kel'],
			$data['no_kel'],
			'id="no_kel" class="select2 form-control" style="width:100%" '
		);

		 
		$this->twig->display('form/edit.twig.php', $data);
	}
 
}//D:/xampp/htdocs/babakan/app/modules/pengantar_ktp/controllers/Pengantar_ktp.php
