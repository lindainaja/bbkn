
<?php

class Ikrar_masuk_islam extends Crud_Controller{
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

        // $data['newheight'] = 50;

        // $originalwidth = config_item('logo_width'); $originalheight = config_item('logo_height');

        // $data['ratio'] = $originalheight / $data['newheight'];
        // $data['newwidth'] = $originalwidth / $data['ratio'];

        // $data['originalwidth'] = $originalwidth;
        // $data['originalheight'] = $originalheight;

        $data['agama_yg_diridhai'] = base_url('public/images/agama_yg_diridhai.png');
        $data['syahadat'] = base_url('public/images/syahadat.png');


        $data['newheight'] = 40;
        list($data['originalwidth'], $data['originalheight']) = getimagesize($data['agama_yg_diridhai']);
        $data['ratio'] = $data['originalheight'] / $data['newheight'];
        $data['newwidth'] = $data['originalwidth'] / $data['ratio'];

        $data['newheight_2'] = 40;
        list($data['originalwidth_2'], $data['originalheight_2']) = getimagesize($data['syahadat']);
        $data['ratio_2'] = $data['originalheight_2'] / $data['newheight_2'];
        $data['newwidth_2'] = $data['originalwidth_2'] / $data['ratio_2'];
    }


    //Execute before compiling export views
 
    protected function _preExport(&$data){
        $data['gender'] = config_item('gender');
    }
    protected function _preAddEditData(&$entry){
        
        for($i=1;$i<7;$i++){
            $entry['saksi_'.$i]    = $this->input->post('saksi_'.$i);
        }
        
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
        $ikrar_masuk_islamid = $this->input->post('ikrar_masuk_islamid');
        $detail = $this->m_ikrar_masuk_islam->detail_data($ikrar_masuk_islamid);
        $negara		 	= negara_dropdown();
        $agama 			= agama_2_dropdown();
        $pekerjaan	 	= pekerjaan_dropdown();
        $kel		 	= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
        $data = array(
        	'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$detail['no_kel'],'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
        	'dropdown_kewarganegaraan'=> form_dropdown('kewarganegaraan',$negara,$detail['kewarganegaraan'],'id="kewarganegaraan" class="wajib_isi select2 form-control" style="width:100%" '),
        	'dropdown_agama'=> form_dropdown('agama',$agama,$detail['agama'],'id="agama" class="wajib_isi select2 form-control" style="width:100%" '),
        	'dropdown_pekerjaan'=> form_dropdown('pekerjaan',$pekerjaan,$detail['pekerjaan'],'id="pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
        	'ikrar_masuk_islamid' => $ikrar_masuk_islamid,
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
//D:/xampp/htdocs/babakan/app/modules/ikrar_masuk_islam/controllers/Ikrar_masuk_islam.php
