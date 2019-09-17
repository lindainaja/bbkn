<?php

class Sk_izin_lingkungan extends Crud_Controller{
    
    public function __construct(){
        parent::__construct(__DIR__);
    }
    protected function _preLoadData(&$data){
        // $detail = $data['detail'];

        $data['gender'] = config_item('gender');
    }
    //Execute before compiling download views
    
    protected function _preDownload(&$data){
        // $detail = $data['detail'];

        // $data['gender'] = config_item('gender');

        // $data['logo'] = base_url(config_item('web_logo'));

        // $data['newheight'] = 50;

        // $originalwidth = config_item('logo_width'); $originalheight = config_item('logo_height');

        // $data['ratio'] = $originalheight / $data['newheight'];
        // $data['newwidth'] = $originalwidth / $data['ratio'];

        // $data['originalwidth'] = $originalwidth;
        // $data['originalheight'] = $originalheight;
    }


    //Execute before compiling export views
 
    protected function _preExport(&$data){
        $data['gender'] = config_item('gender');
    }

    public function form_tambah_data()
    {
        $golongan_darah = array(''=>'- - -  Pilih Gol Darah  - - -')+ config_item('gol_darah') + array('Tidak Tahu'=>'Tidak Tahu');
        $status_perkawinan	= status_kawin_2_dropdown();
$negara		 		= negara_dropdown();
$agama 				= agama_2_dropdown();
$pekerjaan	 		= pekerjaan_dropdown();
$kel		 		= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
$data = array(
	'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$this->session->userdata('log_kel'),'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_kewarganegaraan'=> form_dropdown('kewarganegaraan',$negara,'INDONESIA','id="kewarganegaraan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_agama'=> form_dropdown('agama',$agama,'','id="agama" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_status_perkawinan'=> form_dropdown('status_perkawinan',$status_perkawinan,'','id="status_perkawinan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_pekerjaan'=> form_dropdown('pekerjaan',$pekerjaan,'','id="pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
    // 'dropdown_golongan_darah'=>form_dropdown('golongan_darah',$golongan_darah,'','id="golongan_darah" class="select2 form-control" style="width:100%" '),
	'status_perkawinan' => $status_perkawinan,
	'negara' => $negara,
	'agama' => $agama,
	'pekerjaan' => $pekerjaan,
	'kel' => $kel,
	'syarat_form' => $this->syarat->form()
);
$this->twig->display('form/add.twig.php',$data);;
    }

    public function form_edit_data()
    {
        $golongan_darah = array(''=>'- - -  Pilih Gol Darah  - - -')+ config_item('gol_darah') + array('Tidak Tahu'=>'Tidak Tahu');
        $sk_izin_lingkunganid = $this->input->post('sk_izin_lingkunganid');
$detail = $this->m_sk_izin_lingkungan->detail_data($sk_izin_lingkunganid);
$status_perkawinan	= status_kawin_2_dropdown();
$negara		 	= negara_dropdown();
$agama 			= agama_2_dropdown();
$pekerjaan	 	= pekerjaan_dropdown();
$kel		 	= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
$data = array(
	'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$detail['no_kel'],'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_kewarganegaraan'=> form_dropdown('kewarganegaraan',$negara,$detail['kewarganegaraan'],'id="kewarganegaraan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_agama'=> form_dropdown('agama',$agama,$detail['agama'],'id="agama" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_status_perkawinan'=> form_dropdown('status_perkawinan',$status_perkawinan,$detail['status_perkawinan'],'id="status_perkawinan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_pekerjaan'=> form_dropdown('pekerjaan',$pekerjaan,$detail['pekerjaan'],'id="pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
    // 'dropdown_golongan_darah'=>form_dropdown('golongan_darah',$golongan_darah,$detail['golongan_darah'],'id="golongan_darah" class="select2 form-control" style="width:100%" '),
	'sk_izin_lingkunganid' => $sk_izin_lingkunganid,
	'detail' => $detail,
	'status_perkawinan' => $status_perkawinan,
	'negara' => $negara,
	'agama' => $agama,
	'pekerjaan' => $pekerjaan,
	'kel' => $kel,
	'syarat_form' => $this->syarat->form($detail['syarat'])
);
$this->twig->display('form/edit.twig.php',$data);;
    }
     public function download()
    {
        $pk =   $this->uri->segment(4);
        $entry['flag_id']            = $pk;
        $entry['flag']              = $this->func;
        $entry['create_on']         = date('Y-m-d H:i:s');
        $entry['create_by']         = $this->session->userdata('log_userid');

        $this->db->trans_start(); /*untuk rollback jika data gagal*/
        $this->load->model('m_download');
        $total = $this->m_download->insert_data($entry);
        $this->db->trans_complete();

        $entry2['download']         = $total;

        $this->db->trans_start(); 
        $this->{$this->modelName}->update_data($entry2,$pk);
        $this->db->trans_complete();

        $result = $this->{$this->modelName}->detail_data($pk, true);

        $template_dir = __DIR__ .'/../template/reports/';
        $config = array(
            'template_dir' => $template_dir,
            'output_dir' => $template_dir . 'output/',
            'output_image_dir' => $template_dir . 'output/images/',
        );

        // $result = $result->result_id;

        $options['stripNsplit'] = 'description';
        $options['rowModifierCallback'] = function ($row){
            if(!is_array($row)){
                return $row;
            }
            $ret = $row;
            $gender = config_item('gender');
            $ret['jenis_kelamin']  = $gender[$row['jk']];
            $ret['tanggal_lahir']  = format_tanggal_khusus_indo($row['tanggal_lahir']);
            $ret['tanggal_surat']  = format_tanggal_khusus_indo($row['date']);
            $ret['tgl_acara'] = format_tanggal_khusus_indo($row['tgl_acara']);
            $ret['hari_acara'] = get_nama_hari($row['tanggal_acara']);
            // $ret['nama_acara'] = $ret['acara'];
            $ret['jam_acara'] = date('H:i',strtotime($row['tanggal_acara'].' '.$ret['jam_acara']));
            $ret['ttl'] = $row['tempat_lahir'].', '.$ret['tanggal_lahir'];
            // $ret['tahun_sekarang'] = date('Y',time());

            $jbts = [1,2,3,4,5];
            foreach ($jbts as $no) {
                $key = 'btd_'.$no.'_jabatan';
                if(!empty($ret[$key])){
                    $ret[$key] = '( ' . $ret[$key] . ')';
                }
            }
            return $ret;
        };
        $xml = new \Foundationphp\Exporter\Xml($result, null, $options);
        
        $download = new \Foundationphp\Exporter\MsWord($xml);
        $download->setDocTemplate($config['output_dir'].'wordTemplate.docx');
        $download->setXsltSource($config['output_dir'].'content.xslt');
        $download->setImageSource($config['output_dir'] . 'images');
        $download->create($this->func."_".date('Ymdhis').'.docx');
    }

    public function export_data()
    {
        $no_kel         = $this->input->post('filter_no_kel');
        $filter_date = explode('/',$this->input->post('filter_date'));
        $nama_bln = '';
        $nama_thn = '';
        $bln = '';
        $thn = '';
        if(count($filter_date)==2){
            $bln = $filter_date[0];
            $thn = $filter_date[1];
            $arr_bln = config_item('bulan');
            $nama_bln = 'BULAN '.strtoupper($arr_bln[number_format($bln)]);
            $nama_thn = 'TAHUN '.$thn;
        }

        $results = $this->{$this->modelName}->list_data($this->no_prop,$this->no_kab,$this->no_kec,$no_kel,$bln,$thn);

        $data = array(
            'default_nama_prop' => config_item('default_nama_prop'),
            'default_nama_kab' => config_item('default_nama_kab'),
            'default_nama_kec' => config_item('default_nama_kec'),
            'title'=>$this->title
        );

        $data['nama_bln']   = $nama_bln;
        $data['nama_thn']   = $nama_thn;
        $data['results']    = $results;
        $data['count_result']   = count($results);

        // if(method_exists($this, '_preExport')){
        //     $this->_preExport($data);
        // }


        // $this->twig->display('export_data.twig.php',$data);

        $filename = $this->func."_" . date('YmdHis').".xlsx";

        $this->load->library('report');
        $this->report->setData($data);
        $this->report->create($filename);
        // print_r($data);
    }
}
//D:/xampp/htdocs/babakan/app/modules/sk_izin_lingkungan/controllers/Sk_izin_lingkungan.php
