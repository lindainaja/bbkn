<?php

class Setup_kelurahan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_setup_kelurahan');
		$this->title = 'Kelurahan';
		$this->func = 'setup_kelurahan';

		$this->menu = search_by_column(get_menu_mech(),'menuid',56);//menu setup_kelurahan
		##check akses menu
		menu_check_role($this->menu);
		
		if(count(search_by_column($this->menu,'menu_mechanismid',146))>0){##List Data
			$this->flag_data = 1;
		} else {##tidak diizinkan
			$this->flag_data = 0;
		}

		if(count(search_by_column($this->menu,'menu_mechanismid',147))>0){##Add
			$this->flag_add_data = 1;
		} else {##tidak diizinkan
			$this->flag_add_data = 0;
		}

		if(count(search_by_column($this->menu,'menu_mechanismid',148))>0){##Modify Data
			$this->flag_modify_data = 1;
		} else {##tidak diizinkan
			$this->flag_modify_data = 0;
		}

		if(count(search_by_column($this->menu,'menu_mechanismid',149))>0){##Delete Data
			$this->flag_delete_data = 1;
		} else {##tidak diizinkan
			$this->flag_delete_data = 0;
		}


	}

	function index() {
		
		##datepicker
		$this->template->add_css('public/assets/bootstrap-datepicker/css/datepicker.css');
		$this->template->add_js('public/assets/bootstrap-datepicker/js/bootstrap-datepicker.js');

		$this->template->add_css('public/assets/data-tables/bootstrap3/dataTables.bootstrap.css');
		$this->template->add_js('public/assets/data-tables/jquery.dataTables.js');
		$this->template->add_js('public/assets/data-tables/bootstrap3/dataTables.bootstrap.js');
		$this->template->add_js('public/assets/data-tables/soring/date-eu.js');

		$this->template->add_css('public/addon/select2/select2.min.css');
		$this->template->add_js('public/addon/select2/select2.full.min.js');

		$this->template->add_js('app/modules/'.$this->func.'/assets/js/'.'list.js');
		$this->template->add_js('app/modules/'.$this->func.'/assets/js/'.'action.js');
		$this->template->add_title(strtoupper($this->title));
		$breadcrumb = array(
			'dashboard'	=> 'Beranda',
			$this->func 	=> $this->title,
		);
		$this->template->add_breadcrumb($breadcrumb);


		$this->template->write_view('content',$this->func.'/list');
		$this->template->render();
	}
	
	function load_data(){
		if(!$this->flag_data){##tidak boleh delete data
			menu_check_role(array());
			exit;
		}
		$result 	= $this->m_setup_kelurahan->list_data();
		$data['result'] = $result;
		echo $this->load->view($this->func.'/load_data',$data);

	}

	function load_kab(){
		$no_prop		= $this->input->post('no_prop') ? $this->input->post('no_prop') : 0;
		$kab 			= kab_dropdown($no_prop);
		echo form_dropdown('no_kab',$kab,config_item('default_kab'),'id="no_kab" class="select2 form-control" ');
	}
	function load_kec(){
		$no_prop		= $this->input->post('no_prop') ? $this->input->post('no_prop') : 0;
		$no_kab			= $this->input->post('no_kab') ? $this->input->post('no_kab') : 0;
		$kec 			= kec_dropdown($no_prop,$no_kab);
		echo form_dropdown('no_kec',$kec,config_item('default_kec'),'id="no_kec" class="select2 form-control" ');
	}


	function form_tambah_data(){
		$prop = prop_dropdown();
		$kab = array(''=>'- - - Pilih Kota/Kab - - -');
		$kec = array(''=>'- - - Pilih Kecamatan - - -');

		$html = '<form class="form-horizontal" action="#" id="form_setup_kelurahan">';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Propinsi <span class="require">*</span></label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '<input id="flag" name="flag" type="hidden" value="add"/>';
		$html .= form_dropdown('no_prop',$prop,config_item('default_prop'),'id="no_prop" class="select2 form-control" style="width:100%" ');
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Kota/Kabupaten <span class="require">*</span></label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= form_dropdown('no_kab',$kab,'','id="no_kab" class="select2 form-control" style="width:100%" ');
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Kecamatan <span class="require">*</span></label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= form_dropdown('no_kec',$kec,'','id="no_kec" class="select2 form-control" style="width:100%" ');
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Nomor Kelurahan <span class="require">*</span></label>';
		$html .= '<div class="col-sm-8 col-lg-2 controls">';
		$html .= '<input id="no_kel" name="no_kel" type="text" class="form-control" placeholder="No Kel" autocomplete="off" maxlength="11" onkeypress="return blockNonNumbers(this, event, true, true);" />';
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Nama Kelurahan <span class="require">*</span></label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '<input id="nama_kel" name="nama_kel" type="text" placeholder="Nama Kelurahan" class="form-control" autocomplete="off" maxlength="60" />';
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">NIP Lurah <span class="require">*</span></label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '<input id="nip_lur" name="nip_lur" type="text" placeholder="NIP Lurah" class="form-control" autocomplete="off" maxlength="20" />';
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Lurah <span class="require">*</span></label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '<input id="nama_lur" name="nama_lur" type="text" placeholder="Lurah" class="form-control" autocomplete="off" maxlength="60" />';
		$html .= '</div>';
		$html .= '</div>';


		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Alamat</label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '<textarea name="address" id="address" class="form-control" placeholder="Alamat"></textarea>';
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Tlp</label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '<input id="telp" name="telp" type="text" placeholder="Tlp" class="form-control" autocomplete="off" maxlength="20" />';
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Fax</label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '<input id="fax" name="fax" type="text" placeholder="Fax" class="form-control" autocomplete="off" maxlength="20" />';
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Kodepos</label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '<input id="kodepos" name="kodepos" type="text" placeholder="Kodepos" class="form-control" autocomplete="off" maxlength="5" onkeypress="return blockNonNumbers(this, event, true, true);" />';
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Email</label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '<input id="email" name="email" type="text" placeholder="Email" class="form-control" autocomplete="off" maxlength="100" />';
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Kode Unor</label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '<input id="kode_unor" name="kode_unor" type="text" placeholder="Kode Unor" class="form-control" autocomplete="off" maxlength="30" />';
		$html .= '</div>';
		$html .= '</div>';



$html .= '</form>';
		
		echo $html;
	}

	function form_edit_data(){
		$no_prop = $this->input->post('no_prop');
		$no_kab = $this->input->post('no_kab');
		$no_kec = $this->input->post('no_kec');
		$no_kel = $this->input->post('no_kel');

		$detail = $this->m_setup_kelurahan->detail_data($no_prop,$no_kab,$no_kec,$no_kel);

		$prop = prop_dropdown();
		$kab 	= kab_dropdown($no_prop);
		$kec 	= kec_dropdown($no_prop,$no_kab);

		$html = '<form class="form-horizontal" action="#" id="form_setup_kelurahan">';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Propinsi <span class="require">*</span></label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '<input id="flag" name="flag" type="hidden" value="edit"/>';
		$html .= '<input id="no_prop" name="no_prop" type="hidden" value="'.$detail['no_prop'].'"/>';
		$html .= '<input id="no_kab" name="no_kab" type="hidden" value="'.$detail['no_kab'].'"/>';
		$html .= '<input id="no_kec" name="no_kec" type="hidden" value="'.$detail['no_kec'].'"/>';
		$html .= '<input id="no_kel" name="no_kel" type="hidden" value="'.$detail['no_kel'].'"/>';
		$html .= form_dropdown('xx',$prop,$detail['no_prop'],'id="xx" disabled="disabled" class="select2 form-control" style="width:100%" ');
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Kota/Kabupaten <span class="require">*</span></label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= form_dropdown('xxx',$kab,$detail['no_kab'],'id="xxx" disabled="disabled" class="select2 form-control" style="width:100%" ');
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Kecamatan <span class="require">*</span></label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= form_dropdown('xxx',$kec,$detail['no_kec'],'id="xxx" disabled="disabled" class="select2 form-control" style="width:100%" ');
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Nomor Kelurahan <span class="require">*</span></label>';
		$html .= '<div class="col-sm-8 col-lg-2 controls">';
		$html .= '<input id="xxxx" name="xxxx" type="text" class="form-control" disabled="disabled" placeholder="No Kec" autocomplete="off" maxlength="11" onkeypress="return blockNonNumbers(this, event, true, true);" value="'.$detail['no_kel'].'" />';
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Nama Kelurahan <span class="require">*</span></label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '<input id="nama_kel" name="nama_kel" type="text" placeholder="Nama Kelurahan" class="form-control" autocomplete="off" maxlength="60" value="'.$detail['nama_kel'].'" />';
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">NIP Lurah <span class="require">*</span></label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '<input id="nip_lur" name="nip_lur" type="text" placeholder="NIP Lurah" class="form-control" autocomplete="off" maxlength="20" value="'.$detail['nip_lur'].'" />';
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Lurah <span class="require">*</span></label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '<input id="nama_lur" name="nama_lur" type="text" placeholder="Lurah" class="form-control" autocomplete="off" maxlength="60" value="'.$detail['nama_lur'].'" />';
		$html .= '</div>';
		$html .= '</div>';


		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Alamat</label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '<textarea name="address" id="address" class="form-control" placeholder="Alamat">'.$detail['address'].'</textarea>';
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Tlp</label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '<input id="telp" name="telp" type="text" placeholder="Tlp" class="form-control" autocomplete="off" maxlength="20" value="'.$detail['telp'].'" />';
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Fax</label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '<input id="fax" name="fax" type="text" placeholder="Fax" class="form-control" autocomplete="off" maxlength="20" value="'.$detail['fax'].'" />';
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Kodepos</label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '<input id="kodepos" name="kodepos" type="text" placeholder="Kodepos" class="form-control" autocomplete="off" maxlength="5" onkeypress="return blockNonNumbers(this, event, true, true);" value="'.$detail['kodepos'].'" />';
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Email</label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '<input id="email" name="email" type="text" placeholder="Email" class="form-control" autocomplete="off" maxlength="100" value="'.$detail['email'].'" />';
		$html .= '</div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="col-sm-4 col-lg-3 control-label">Kode Unor</label>';
		$html .= '<div class="col-sm-8 col-lg-8 controls">';
		$html .= '<input id="kode_unor" name="kode_unor" type="text" placeholder="Kode Unor" class="form-control" autocomplete="off" maxlength="30" value="'.$detail['kode_unor'].'" />';
		$html .= '</div>';
		$html .= '</div>';



		$html .= '</form>';
		
		echo $html;

	}


	function process_add_edit_data(){
		//@REPLACED_00
		$flag 		= $this->input->post('flag');

		$no_prop 	= $this->input->post('no_prop');
		$no_kab		= $this->input->post('no_kab');
		$no_kec 	= $this->input->post('no_kec');
		$no_kel 	= $this->input->post('no_kel');
		$nama_kel 	= $this->input->post('nama_kel');
		$nip_lur 	= $this->input->post('nip_lur');
		$nama_lur 	= $this->input->post('nama_lur');
		$address 	= $this->input->post('address');
		$telp 		= $this->input->post('telp');
		$fax 		= $this->input->post('fax');
		$kodepos 	= $this->input->post('kodepos');
		$email 		= $this->input->post('email');
		$kode_unor 	= $this->input->post('kode_unor');


		
		$entry['nama_kel']		= $nama_kel;
		$entry['nip_lur']		= $nip_lur;
		$entry['nama_lur']		= $nama_lur;
		$entry['address']		= $address;
		$entry['telp']			= $telp;
		$entry['fax']			= $fax;
		$entry['kodepos']		= $kodepos;
		$entry['email']			= $email;
		$entry['kode_unor']		= $kode_unor;


		if($flag=='edit'){
			$this->db->trans_start(); /*untuk rollback jika data gagal*/
			$this->m_setup_kelurahan->update_data($entry,$no_prop,$no_kab,$no_kec,$no_kel);
			$this->db->trans_complete();
		} else {
			$entry['no_prop']		= $no_prop;
			$entry['no_kab']		= $no_kab;
			$entry['no_kec']		= $no_kec;
			$entry['no_kel']		= $no_kel;
			$this->db->trans_start(); /*untuk rollback jika data gagal*/
			$this->m_setup_kelurahan->insert_data($entry);
			$this->db->trans_complete();
		}

		

		$pesan = '<div class="alert alert-success">';
		$pesan .= '<button class="close" data-dismiss="alert">×</button>';
		$pesan .= '<strong>Informasi!</strong>';
		$pesan .= ' Data berhasil di simpan!';
		$pesan .= '</div>';
		$this->session->set_flashdata('pesan',$pesan);

	}

	

	function delete_data(){
		if(!$this->flag_delete_data){##tidak boleh delete data
			menu_check_role(array());
			exit;
		}
		$no_prop 	= $this->input->post('no_prop');
		$no_kab		= $this->input->post('no_kab');
		$no_kec 	= $this->input->post('no_kec');
		$no_kel 	= $this->input->post('no_kel');
		$this->db->trans_start(); /*untuk rollback jika data gagal*/
		$this->m_setup_kelurahan->delete_data($no_prop,$no_kab,$no_kec,$no_kel);
		$this->db->trans_complete();
		$pesan = '<div class="alert alert-success">';
		$pesan .= '<button class="close" data-dismiss="alert">×</button>';
		$pesan .= '<strong>Informasi!</strong>';
		$pesan .= ' Data berhasil di hapus!';
		$pesan .= '</div>';
		$this->session->set_flashdata('pesan',$pesan);
	}


	function check_no_kel(){

		$no_prop = $this->input->post('no_prop');
		$no_kab = $this->input->post('no_kab');
		$no_kec = $this->input->post('no_kec');
		$no_kel = $this->input->post('no_kel');
		$check = $this->m_setup_kelurahan->check_no_kel($no_prop,$no_kab,$no_kec,$no_kel);
		if(count($check)>0){
			echo 'false';
		} else {
			echo 'true';
		}
	}




}



