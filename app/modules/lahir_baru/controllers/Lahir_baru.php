
<?php

class Lahir_baru extends Crud_Controller{
    
    public function __construct(){
        parent::__construct(__DIR__);
    }
    protected function _preLoadData(&$data){
        // $detail = $data['detail'];

        $data['gender'] = config_item('gender');
    }
    //Execute before compiling download views
    
    protected function _preDownload(&$data){
        $detail = $data['detail'];

        $data['gender'] = config_item('gender');

        $data['logo'] = base_url(config_item('web_logo'));

        $data['newheight'] = 120;

        $originalwidth = config_item('logo_width'); $originalheight = config_item('logo_height');

        $data['ratio'] = $originalheight / $data['newheight'];
        $data['newwidth'] = $originalwidth / $data['ratio'];

        $data['originalwidth'] = $originalwidth;
        $data['originalheight'] = $originalheight;
    }


    //Execute before compiling export views
 
    protected function _preExport(&$data){
        $data['gender'] = config_item('gender');
    }

    public function form_tambah_data()
    {
        $pekerjaan	 	= pekerjaan_dropdown();
$kel		 	= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
$data = array(
	'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$this->session->userdata('log_kel'),'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_ibu_pekerjaan'=> form_dropdown('ibu_pekerjaan',$pekerjaan,'','id="ibu_pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_ayah_pekerjaan'=> form_dropdown('ayah_pekerjaan',$pekerjaan,'','id="ayah_pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_pelapor_pekerjaan'=> form_dropdown('pelapor_pekerjaan',$pekerjaan,'','id="pelapor_pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
	'pekerjaan' => $pekerjaan,
	'kel' => $kel,
	'syarat_form' => $this->syarat->form()
);
$this->twig->display('form/add.twig.php',$data);;
    }

    public function form_edit_data()
    {
        $lahir_baruid = $this->input->post('lahir_baruid');
$detail = $this->m_lahir_baru->detail_data($lahir_baruid);
$pekerjaan	 	= pekerjaan_dropdown();
$kel		 	= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
$data = array(
	'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$detail['no_kel'],'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_ibu_pekerjaan'=> form_dropdown('ibu_pekerjaan',$pekerjaan,$detail['ibu_pekerjaan'],'id="ibu_pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_ayah_pekerjaan'=> form_dropdown('ayah_pekerjaan',$pekerjaan,$detail['ayah_pekerjaan'],'id="ayah_pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_pelapor_pekerjaan'=> form_dropdown('pelapor_pekerjaan',$pekerjaan,$detail['pelapor_pekerjaan'],'id="pelapor_pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
	'lahir_baruid' => $lahir_baruid,
	'detail' => $detail,
	'pekerjaan' => $pekerjaan,
	'kel' => $kel,
	'syarat_form' => $this->syarat->form($detail['syarat'])
);
$this->twig->display('form/edit.twig.php',$data);;
    }
}
//D:/xampp/htdocs/babakan/app/modules/lahir_baru/controllers/Lahir_baru.php
