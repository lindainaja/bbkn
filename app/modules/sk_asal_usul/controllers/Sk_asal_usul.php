<?php

class Sk_asal_usul extends Crud_Controller{
    protected $use_export_libraries = true;
    protected $tableHeaders = [
    'nama_kel' => 'Kelurahan',
    'tanggal_surat' => 'Tanggal Surat',
    'no' => 'Nomor Surat',
    'nama' => 'Nama',
    'alias' => 'Alias',
    'jenis_kelamin' => 'Jenis Kelamin',
    'ttl' => 'Tempat/Tanggal Lahir',
    // 'tempat_lahir' => 'Tempat Lahir',
    'kewarganegaraan' => 'Kewarganegaraan',
    'agama' => 'Agama',
    'pekerjaan' => 'Pekerjaan',
    'alamat' => 'Tempat Tinggal',
    'ayah_nama' => 'Nama Ayah',
    'ayah_alias' => 'Alias Ayah',
    'ayah_ttl' => 'Tempat/Tanggal Lahir Ayah',
    // 'ayah_tanggal_lahir' => 'Tanggal Ayah',
    'ayah_kewarganegaraan' => 'Kewarganegaraan Ayah',
    'ayah_agama' => 'Agama Ayah',
    'ayah_pekerjaan' => 'Pekerjaan Ayah',
    'ayah_alamat' => 'Tempat Tinggal Ayah',
    'ibu_nama' => 'Nama Ibu',
    'ibu_alias' => 'Alias Ibu',
    'ibu_ttl' => 'Tempat/Tanggal Lahir Ibu',
    // 'ibu_tanggal_lahir' => 'Tanggal Ibu',
    'ibu_kewarganegaraan' => 'Kewarganegaraan Ibu',
    'ibu_agama' => 'Agama Ibu',
    'ibu_pekerjaan' => 'Pekerjaan Ibu',
    'ibu_alamat' => 'Tempat Tinggal Ibu',
];
    public function __construct(){
        parent::__construct(__DIR__);
        $this->load->library('report');
        $this->report->setEndCol('Z');
        $this->report->set_callback_row_data($this,'_modifyRowData');
        $this->report->setTitle("Surat Keterangan Asal - Usul");
        $this->report->setTableHeader($this->tableHeaders);
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
	'dropdown_ayah_kewarganegaraan'=> form_dropdown('ayah_kewarganegaraan',$negara,'INDONESIA','id="ayah_kewarganegaraan"  class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_ayah_agama'=> form_dropdown('ayah_agama',$agama,'','id="ayah_agama" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_ayah_pekerjaan'=> form_dropdown('ayah_pekerjaan',$pekerjaan,'','id="ayah_pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_ibu_kewarganegaraan'=> form_dropdown('ibu_kewarganegaraan',$negara,'INDONESIA','id="ibu_kewarganegaraan"  class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_ibu_agama'=> form_dropdown('ibu_agama',$agama,'','id="ibu_agama" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_ibu_pekerjaan'=> form_dropdown('ibu_pekerjaan',$pekerjaan,'','id="ibu_pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
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
        $sk_asal_usulid = $this->input->post('sk_asal_usulid');
$detail = $this->m_sk_asal_usul->detail_data($sk_asal_usulid);
$negara		 	= negara_dropdown();
$agama 			= agama_2_dropdown();
$pekerjaan	 	= pekerjaan_dropdown();
$kel		 	= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
$data = array(
	'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$detail['no_kel'],'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_kewarganegaraan'=> form_dropdown('kewarganegaraan',$negara,$detail['kewarganegaraan'],'id="kewarganegaraan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_agama'=> form_dropdown('agama',$agama,$detail['agama'],'id="agama" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_pekerjaan'=> form_dropdown('pekerjaan',$pekerjaan,$detail['pekerjaan'],'id="pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_ayah_kewarganegaraan'=> form_dropdown('ayah_kewarganegaraan',$negara,$detail['ayah_kewarganegaraan'],'id="ayah_kewarganegaraan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_ayah_agama'=> form_dropdown('ayah_agama',$agama,$detail['ayah_agama'],'id="ayah_agama" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_ayah_pekerjaan'=> form_dropdown('ayah_pekerjaan',$pekerjaan,$detail['ayah_pekerjaan'],'id="ayah_pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_ibu_kewarganegaraan'=> form_dropdown('ibu_kewarganegaraan',$negara,$detail['ibu_kewarganegaraan'],'id="ibu_kewarganegaraan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_ibu_agama'=> form_dropdown('ibu_agama',$agama,$detail['ibu_agama'],'id="ibu_agama" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_ibu_pekerjaan'=> form_dropdown('ibu_pekerjaan',$pekerjaan,$detail['ibu_pekerjaan'],'id="ibu_pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
	'sk_asal_usulid' => $sk_asal_usulid,
	'detail' => $detail,
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
            return $this->_modifyRowData($row);
        };
        $xml = new \Foundationphp\Exporter\Xml($result, null, $options);
        
        $download = new \Foundationphp\Exporter\MsWord($xml);
        $download->setDocTemplate($config['output_dir'].'wordTemplate.docx');
        $download->setXsltSource($config['output_dir'].'content.xslt');
        $download->setImageSource($config['output_dir'] . 'images');
        $download->create($this->func."_".date('Ymdhis').'.docx');
    }
    public function _modifyRowData(&$row){

            $gender = config_item('gender');
            // $row['jenis_kelamin']  = $gender[$row['jk']];
            $row['tanggal_lahir']  = format_tanggal_khusus_indo($row['tanggal_lahir']);
            $row['ayah_tanggal_lahir']  = format_tanggal_khusus_indo($row['ayah_tanggal_lahir']);
            $row['ibu_tanggal_lahir']  = format_tanggal_khusus_indo($row['ibu_tanggal_lahir']);
            $row['tanggal_surat']  = format_tanggal_khusus_indo($row['date']);
            $row['ttl'] = $row['tempat_lahir'].', '.$row['tanggal_lahir'];
            $row['ayah_ttl'] = $row['ayah_tempat_lahir'].', '.$row['ayah_tanggal_lahir'];
            $row['ibu_ttl'] = $row['ibu_tempat_lahir'].', '.$row['ibu_tanggal_lahir'];

            //alias

            $row['alias'] = ($row['alias']!='' && $row['alias']!='-') ? ' alias ' . $row['alias']:'';
            $row['ayah_alias'] = ($row['ayah_alias']!=''&& $row['ayah_alias']!='-') ? ' alias ' . $row['ayah_alias']:'';
            $row['ibu_alias'] = ($row['ibu_alias']!=''&&$row['ibu_alias']!='-') ? ' alias ' . $row['ibu_alias']:'';

            return $row;
    }
}
//D:/xampp/htdocs/babakan/app/modules/sk_asal_usul/controllers/Sk_asal_usul.php
