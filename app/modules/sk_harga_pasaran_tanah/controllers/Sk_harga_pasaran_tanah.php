<?php

class Sk_harga_pasaran_tanah extends Crud_Controller{
    protected $currencyFields = array('harga_tanah');
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
        // $data['harga_tanah']= cut_decimal($data['harga_tanah']);
    }
    public function form_tambah_data()
    {
        $status_perkawinan	= status_kawin_2_dropdown();
$negara		 		= negara_dropdown();
$agama 				= agama_2_dropdown();
$pekerjaan	 		= pekerjaan_dropdown();
$kel		 		= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
$data = array(
	'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$this->session->userdata('log_kel'),'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
	'status_perkawinan' => $status_perkawinan,
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
        $sk_harga_pasaran_tanahid = $this->input->post('sk_harga_pasaran_tanahid');
$detail = $this->m_sk_harga_pasaran_tanah->detail_data($sk_harga_pasaran_tanahid);
$status_perkawinan	= status_kawin_2_dropdown();
$negara		 	= negara_dropdown();
$agama 			= agama_2_dropdown();
$pekerjaan	 	= pekerjaan_dropdown();
$kel		 	= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
$data = array(
	'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$detail['no_kel'],'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
	'sk_harga_pasaran_tanahid' => $sk_harga_pasaran_tanahid,
	'detail' => $detail,
	'status_perkawinan' => $status_perkawinan,
	'negara' => $negara,
	'agama' => $agama,
	'pekerjaan' => $pekerjaan,
	'kel' => $kel,
	'syarat_form' => $this->syarat->form($detail['syarat'])
);
$this->twig->display('form/edit.twig.php',$data);
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
            // $gender = config_item('gender');
            // $ret['jenis_kelamin']  = $gender[$row['jk']];
            // $ret['tanggal_lahir']  = format_tanggal_khusus_indo($row['tanggal_lahir']);
            $ret['tanggal_surat']  = format_tanggal_khusus_indo($row['date']);
            // $ret['tgl_surat_kuasa']  = format_tanggal_khusus_indo($row['tgl_surat_kuasa']);
            // $ret['tanggal_hilang'] = format_tanggal_khusus_indo($row['tgl_hilang']);
            $ret['harga_tanah_txt'] = convert_number($row['harga_tanah']);
            $ret['harga_tanah'] = format_uang($row['harga_tanah']);
            // $ret['ttl'] = $ret['tempat_lahir'].', ' . $ret['tanggal_lahir'];

            return $ret;
        };
        $xml = new \Foundationphp\Exporter\Xml($result, null, $options);
        
        $download = new \Foundationphp\Exporter\MsWord($xml);
        $download->setDocTemplate($config['output_dir'].'wordTemplate.docx');
        $download->setXsltSource($config['output_dir'].'content.xslt');
        $download->setImageSource($config['output_dir'] . 'images');
        $download->create($this->func."_".date('Ymdhis').'.docx');
    }
}
//D:/xampp/htdocs/babakan/app/modules/sk_harga_pasaran_tanah/controllers/Sk_harga_pasaran_tanah.php
