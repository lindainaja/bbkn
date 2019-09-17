
<?php

class Sk_kehilangan extends Crud_Controller{
    
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

        $data['list_data'] = $this->m_sk_kehilangan->detail_data_detail($detail['id']);
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
    protected function _afterAddEditData($sk_kehilanganid,$entry){
        $this->m_sk_kehilangan->delete_data_detail($sk_kehilanganid);
      
        $detail_kehilangan   = $this->input->post('detail_kehilangan'); 

        if(!empty($detail_kehilangan)){
            $count_detail_kehilangan = count($detail_kehilangan);
            
            if(  $count_detail_kehilangan != 0 ){
                $entry2 = array();
                for($i=0;$i<$count_detail_kehilangan;$i++){
                    $entry2[$i]['kehilanganid']     = $sk_kehilanganid;
                    $entry2[$i]['deskripsi']        = $detail_kehilangan[$i];
                    $entry2[$i]['create_on']        = date('Y-m-d H:i:s');
                    $entry2[$i]['create_by']        = $this->session->userdata('log_userid');
                }
                if(count($entry2)>0){
                    $this->db->insert_batch('t_kehilangan_detail',$entry2);
                }
            } 
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
        $sk_kehilanganid = $this->input->post('sk_kehilanganid');
        $detail = $this->m_sk_kehilangan->detail_data($sk_kehilanganid);
        $detail_data = $this->m_sk_kehilangan->detail_data_detail($sk_kehilanganid);
        $negara		 	= negara_dropdown();
        $agama 			= agama_2_dropdown();
        $pekerjaan	 	= pekerjaan_dropdown();
        $kel		 	= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
        $data = array(
        	'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$detail['no_kel'],'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
        	'dropdown_kewarganegaraan'=> form_dropdown('kewarganegaraan',$negara,$detail['kewarganegaraan'],'id="kewarganegaraan" class="wajib_isi select2 form-control" style="width:100%" '),
        	'dropdown_agama'=> form_dropdown('agama',$agama,$detail['agama'],'id="agama" class="wajib_isi select2 form-control" style="width:100%" '),
        	'dropdown_pekerjaan'=> form_dropdown('pekerjaan',$pekerjaan,$detail['pekerjaan'],'id="pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
        	'sk_kehilanganid' => $sk_kehilanganid,
        	'detail' => $detail,
        	'detail_data' => $detail_data,
        	'negara' => $negara,
        	'agama' => $agama,
        	'pekerjaan' => $pekerjaan,
        	'kel' => $kel,
        	'syarat_form' => $this->syarat->form($detail['syarat'])
        );
        $this->twig->display('form/edit.twig.php',$data);
    }
}
//D:/xampp/htdocs/babakan/app/modules/sk_kehilangan/controllers/Sk_kehilangan.php
