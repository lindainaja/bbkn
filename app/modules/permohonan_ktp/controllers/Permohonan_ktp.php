<?php

class Permohonan_ktp extends Crud_Controller
{
	// Database Behaviour
	protected $tablePk = 'permohonan_ktpid';
	protected $tableName  = 't_permohonan_ktp';
	// FORM BEHAVIOUR

	protected $autosetPostKeys = array(
		'add' =>array(
			'create_on','create_by',
			'syarat',
			'no_kel',
			'date',
			'jenis',
			'no_fmp',
			'no_kk',
			'nama',
			'jk',
			'gol_darah',
			'tempat_lahir',
			'tanggal_lahir',
			'agama',
			'status_perkawinan',
			'status_keluarga',
			'alamat',
			'rt',
			'rw',
			'kewarganegaraan',
			'keturunan',
			'kode',
			'no_bukti_kewarganegaraan_ri',
			'tgl_bukti_kewarganegaraan_ri',
			'no_doc_imigrasi',
			'tgl_doc_imigrasi',
			'pendidikan',
			'pekerjaan',
			'alat_kb',
			'dapat_membaca',
			'et',
			'nama_ortu',
			'ket_cacat',
			'kode_mutasi',
			'tgl_mutasi',
			'pindah_dari_ke',
			'ttd_nama',
			'ttd_nip',
			'ttd_jabatan',
		),
		'edit'=>array(
			'update_on','update_by',
			'syarat',
			'no_kel',
			'date',
			'jenis',
			'no_fmp',
			'no_kk',
			'nama',
			'jk',
			'gol_darah',
			'tempat_lahir',
			'tanggal_lahir',
			'agama',
			'status_perkawinan',
			'status_keluarga',
			'alamat',
			'rt',
			'rw',
			'kewarganegaraan',
			'keturunan',
			'kode',
			'no_bukti_kewarganegaraan_ri',
			'tgl_bukti_kewarganegaraan_ri',
			'no_doc_imigrasi',
			'tgl_doc_imigrasi',
			'pendidikan',
			'pekerjaan',
			'alat_kb',
			'dapat_membaca',
			'et',
			'nama_ortu',
			'ket_cacat',
			'kode_mutasi',
			'tgl_mutasi',
			'pindah_dari_ke',
			'ttd_nama',
			'ttd_nip',
			'ttd_jabatan',
		),
	);
	protected $dateFields  			= array('date','tgl_mutasi','tanggal_lahir','tgl_bukti_kewarganegaraan_ri','tgl_doc_imigrasi');
	protected $currentDateFields  	= array('create_on','update_on');
	protected $syaratFields  	 	= array('syarat');
	protected $sessionUserIdFields  = array('create_by','update_by');

	protected 
	$behaviour = 'default';
	
	public 
	
	$title 		= 'Permohonan KTP',
	$func 		= 'permohonan_ktp',
	$modelName 	= 'm_permohonan_ktp',
	$menuId 	= '22',
	$subject 	= "Surat Permohonan KTP",
	$mechIds 	= array(10,11,12,13);

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
 	protected function _preDownload(&$data){
		$detail = $data['detail'];

		$data['gender'] = config_item('gender');
	
		$data['logo'] = base_url(config_item('web_logo'));

		$data['newheight'] = 100;

		$originalwidth = config_item('logo_width'); $originalheight = config_item('logo_height');

		$data['ratio'] = $originalheight / $data['newheight'];
		$data['newwidth'] = $originalwidth / $data['ratio'];

		$data['originalwidth'] = $originalwidth;
		$data['originalheight'] = $originalheight;
	}
	
	/*
	Execute before compiling export views
	*/
	protected function _preExport(&$data){
		$data['gender'] = config_item('gender');
	}

	function form_tambah_data(){

		$ket_cacat 		= array(''=>'- - - Pilih Keterangan Cacat - - -');
		$ket_cacat	 	= $ket_cacat+config_item('ket_cacat');

		$gol_darah 		= array(''=>'- - - Pilih Golongan Darah - - -');
		$gol_darah	 	= $gol_darah+config_item('gol_darah');

		$kode_mutasi 	= array(''=>'- - - Pilih Kode Mutasi - - -');
		$kode_mutasi	= $kode_mutasi+config_item('kode_mutasi');

		$pekerjaan	 	= pekerjaan_dropdown();
		$pendidikan 	= pendidikan_dropdown();
		$keturunan 		= keturunan_dropdown();
		$agama 			= agama_2_dropdown();
		$status_keluarga= status_keluarga_dropdown();
		$kawin 			= status_kawin_2_dropdown();
		$kel		 	= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);

		$data = array(
			'dropdown_kode_mutasi' => form_dropdown('kode_mutasi',$kode_mutasi,'','id="kode_mutasi" class="select2 form-control" style="width:100%" '),
			'dropdown_keterangan_cacat' => form_dropdown('ket_cacat',$ket_cacat,'','id="ket_cacat" class="select2 form-control" style="width:100%" '),
			'dropdown_pekerjaan' => form_dropdown('pekerjaan',$pekerjaan,'','id="pekerjaan" class="select2 form-control" style="width:100%" '),
			'dropdown_pendidikan' => form_dropdown('pendidikan',$pendidikan,'','id="pendidikan" class="select2 form-control" style="width:100%" '),
			'dropdown_keturunan' => form_dropdown('keturunan',$keturunan,'','id="keturunan" class="select2 form-control" style="width:100%" '),
			'dropdown_status_keluarga' => form_dropdown('status_keluarga',$status_keluarga,'','id="status_keluarga" class="select2 form-control" style="width:100%" '),
			'dropdown_status_perkawinan' => form_dropdown('status_perkawinan',$kawin,'','id="status_perkawinan" class="select2 form-control" style="width:100%" '),
			'dropdown_agama' => form_dropdown('agama',$agama,'','id="agama" class="select2 form-control" style="width:100%" '),
			'dropdown_golongan_darah' => form_dropdown('gol_darah',$gol_darah,'','id="gol_darah" class="select2 form-control" style="width:100%" '),
			'dropdown_no_kel' => form_dropdown('no_kel',$kel,$this->session->userdata('log_kel'),'id="no_kel" class="select2 form-control" style="width:100%" '),
			'table_pk' => $this->tablePk,
			'module_name' => $this->func,
			'syarat_form' => $this->syarat->form() 
		);
		
		$this->twig->display('form/add.twig.php',$data);
	}

	function form_edit_data(){
		$pk = $this->input->post('permohonan_ktpid');
		$detail = $this->m_permohonan_ktp->detail_data($pk);

		$kel		 	= kel_2_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);

		$ket_cacat 		= array(''=>'- - - Pilih Keterangan Cacat - - -');
		$ket_cacat	 	= $ket_cacat+config_item('ket_cacat');

		$gol_darah 		= array(''=>'- - - Pilih Golongan Darah - - -');
		$gol_darah	 	= $gol_darah+config_item('gol_darah');

		$kode_mutasi 	= array(''=>'- - - Pilih Kode Mutasi - - -');
		$kode_mutasi	= $kode_mutasi+config_item('kode_mutasi');

		$pekerjaan	 	= pekerjaan_dropdown();
		$pendidikan 	= pendidikan_dropdown();
		$keturunan 		= keturunan_dropdown();
		$agama 			= agama_2_dropdown();
		$status_keluarga= status_keluarga_dropdown();
		$kawin 			= status_kawin_2_dropdown();
		$kel		 	= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);

		$data = array(
			'dropdown_kode_mutasi' => form_dropdown('kode_mutasi',$kode_mutasi,$detail['kode_mutasi'],'id="kode_mutasi" class="select2 form-control" style="width:100%" '),
			'dropdown_keterangan_cacat' => form_dropdown('ket_cacat',$ket_cacat,$detail['ket_cacat'],'id="ket_cacat" class="select2 form-control" style="width:100%" '),
			'dropdown_pekerjaan' => form_dropdown('pekerjaan',$pekerjaan,$detail['pekerjaan'],'id="pekerjaan" class="select2 form-control" style="width:100%" '),
			'dropdown_pendidikan' => form_dropdown('pendidikan',$pendidikan,$detail['pendidikan'],'id="pendidikan" class="select2 form-control" style="width:100%" '),
			'dropdown_keturunan' => form_dropdown('keturunan',$keturunan,$detail['keturunan'],'id="keturunan" class="select2 form-control" style="width:100%" '),
			'dropdown_status_keluarga' => form_dropdown('status_keluarga',$status_keluarga,$detail['status_keluarga'],'id="status_keluarga" class="select2 form-control" style="width:100%" '),
			'dropdown_status_perkawinan' => form_dropdown('status_perkawinan',$kawin,$detail['status_perkawinan'],'id="status_perkawinan" class="select2 form-control" style="width:100%" '),
			'dropdown_agama' => form_dropdown('agama',$agama,$detail['agama'],'id="agama" class="select2 form-control" style="width:100%" '),
			'dropdown_golongan_darah' => form_dropdown('gol_darah',$gol_darah,$detail['gol_darah'],'id="gol_darah" class="select2 form-control" style="width:100%" '),
			'dropdown_no_kel' => form_dropdown('no_kel',$kel,$detail['no_kel'],'id="no_kel" class="select2 form-control" style="width:100%" '),
			'table_pk' => $this->tablePk,
			'module_name' => $this->func,
			'pk' => $pk,
			'syarat_form' => $this->syarat->form($detail['syarat']) ,
			'detail' => $detail
		);
		
		$this->twig->display('form/edit.twig.php',$data);	
	}
 
 

}
 //D:/xampp/htdocs/babakan/app/modules/permohonan_ktp/controllers/Permohonan_ktp.php
