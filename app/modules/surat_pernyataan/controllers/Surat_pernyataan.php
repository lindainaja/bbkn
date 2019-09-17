
<?php

class Surat_pernyataan extends Crud_Controller{
    protected $includeInfoLurahInDownload = false;
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
    protected function _preAddEditData(&$entry){
        /*
        for($i=1;$i<6;$i++){
            $entry['keterangan_'.$i]    = $this->input->post('keterangan_'.$i);
        }
        */
    }
    public function form_tambah_data()
    {
        $negara		 	= negara_dropdown();
$agama 			= agama_2_dropdown();
$pekerjaan	 	= pekerjaan_dropdown();
$kel		 	= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
$data = array(
	'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$this->session->userdata('log_kel'),'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_kewarganegaraan'=> form_dropdown('kewarganegaraan',$negara,'INDONESIA','id="kewarganegaraan"  class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_agama'=> form_dropdown('agama',$agama,'','id="agama" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_pekerjaan'=> form_dropdown('pekerjaan',$pekerjaan,'','id="pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_tertuju_kewarganegaraan'=> form_dropdown('tertuju_kewarganegaraan',$negara,'INDONESIA','id="tertuju_kewarganegaraan"  class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_tertuju_agama'=> form_dropdown('tertuju_agama',$agama,'','id="tertuju_agama" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_tertuju_pekerjaan'=> form_dropdown('tertuju_pekerjaan',$pekerjaan,'','id="tertuju_pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
	'negara' => $negara,
	'agama' => $agama,
	'pekerjaan' => $pekerjaan,
	'kel' => $kel,
	'syarat_form' => $this->syarat->form()
);
$this->twig->display('form/add.twig.php',$data);
    }

    public function form_edit_data()
    {
        $surat_pernyataanid = $this->input->post('surat_pernyataanid');
$detail = $this->m_surat_pernyataan->detail_data($surat_pernyataanid);
$negara		 	= negara_dropdown();
$agama 			= agama_2_dropdown();
$pekerjaan	 	= pekerjaan_dropdown();
$kel		 	= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
$data = array(
	'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$detail['no_kel'],'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_kewarganegaraan'=> form_dropdown('kewarganegaraan',$negara,$detail['kewarganegaraan'],'id="kewarganegaraan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_agama'=> form_dropdown('agama',$agama,$detail['agama'],'id="agama" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_pekerjaan'=> form_dropdown('pekerjaan',$pekerjaan,$detail['pekerjaan'],'id="pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_tertuju_kewarganegaraan'=> form_dropdown('tertuju_kewarganegaraan',$negara,$detail['tertuju_kewarganegaraan'],'id="tertuju_kewarganegaraan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_tertuju_agama'=> form_dropdown('tertuju_agama',$agama,$detail['tertuju_agama'],'id="tertuju_agama" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_tertuju_pekerjaan'=> form_dropdown('tertuju_pekerjaan',$pekerjaan,$detail['tertuju_pekerjaan'],'id="tertuju_pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
	'surat_pernyataanid' => $surat_pernyataanid,
	'detail' => $detail,
	'negara' => $negara,
	'agama' => $agama,
	'pekerjaan' => $pekerjaan,
	'kel' => $kel,
	'syarat_form' => $this->syarat->form($detail['syarat'])
);
$this->twig->display('form/edit.twig.php',$data);
    }
}
//D:/xampp/htdocs/babakan/app/modules/surat_pernyataan/controllers/Surat_pernyataan.php
