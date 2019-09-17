
<?php

class Permohonan_kk extends Crud_Controller{
    
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

        $data['newheight'] = 50;

        $originalwidth = config_item('logo_width'); $originalheight = config_item('logo_height');

        $data['ratio'] = $originalheight / $data['newheight'];
        $data['newwidth'] = $originalwidth / $data['ratio'];

        $data['originalwidth'] = $originalwidth;
        $data['originalheight'] = $originalheight;

        $anggota = $this->m_permohonan_kk->detail_data_anggota($detail['id']);

        // $data['detail'] = $detail;
        $data['anggota'] = $anggota;

        $data['alasan'] =  config_item('alasan_permohonan_kk');
    }


    //Execute before compiling export views
 
    protected function _preExport(&$data){
        $data['gender'] = config_item('gender');
    }

    public function form_tambah_data()
    {
        $alasan_permohonan	= config_item('alasan_permohonan_kk');
        $status_keluarga	= status_keluarga_dropdown();
        $kel		 	= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
        $data = array(
        	'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$this->session->userdata('log_kel'),'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
        	'dropdown_alasan_permohonan'=> form_dropdown('alasan_permohonan',$alasan_permohonan,'','id="alasan_permohonan" class="wajib_isi select2 form-control" style="width:100%" '),
        	'alasan_permohonan' => $alasan_permohonan,
        	'status_keluarga' => $status_keluarga,
        	'kel' => $kel,
        	'syarat_form' => $this->syarat->form()
);
$this->twig->display('form/add.twig.php',$data);;
    }

    public function form_edit_data()
    {
        $permohonan_kkid = $this->input->post('permohonan_kkid');
        $detail = $this->m_permohonan_kk->detail_data($permohonan_kkid);
        $anggota = $this->m_permohonan_kk->detail_data_anggota($permohonan_kkid);
        $alasan_permohonan	= config_item('alasan_permohonan_kk');
        $status_keluarga	= status_keluarga_dropdown();
        $kel		 		= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
        $data = array(
        	'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$detail['no_kel'],'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
        	'dropdown_alasan_permohonan'=> form_dropdown('alasan_permohonan',$alasan_permohonan,$detail['alasan_permohonan'],'id="alasan_permohonan" class="wajib_isi select2 form-control" style="width:100%" '),
        	'permohonan_kkid' => $permohonan_kkid,
        	'detail' => $detail,
        	'anggota' => $anggota,
        	'alasan_permohonan' => $alasan_permohonan,
        	'status_keluarga' => $status_keluarga,
        	'kel' => $kel,
        	'syarat_form' => $this->syarat->form($detail['syarat']),
        );
        $this->twig->display('form/edit.twig.php',$data);;
    }

    protected function _afterAddEditData($permohonan_kkid, $entry){
        $this->m_permohonan_kk->delete_data_detail($permohonan_kkid);

        $post_detail_nama   = $this->input->post('detail_nama');
        $post_detail_nik    = $this->input->post('detail_nik');
        $post_detail_shdk   = $this->input->post('detail_shdk');

        if(!empty($post_detail_nama)){
            $count_detail_nama = count($post_detail_nama);
            
            if(  $count_detail_nama != 0 ){
                for($i = 0; $i < $count_detail_nama ; $i++){
                    $entry2[$i]['permohonan_kkid']  = $permohonan_kkid;
                    $entry2[$i]['nik']              = $post_detail_nik[$i];
                    $entry2[$i]['nama']             = $post_detail_nama[$i];
                    $entry2[$i]['shdk']             = $post_detail_shdk[$i];
                    $entry2[$i]['create_on']        = date('Y-m-d H:i:s');
                    $entry2[$i]['create_by']        = $this->session->userdata('log_userid');
                }
                if(count($entry2)>0){
                    $this->db->insert_batch('t_permohonan_kk_detail',$entry2);
                }
            }
            $entry2 = array();
            
        }
    }
}
//D:/xampp/htdocs/babakan/app/modules/permohonan_kk/controllers/Permohonan_kk.php
