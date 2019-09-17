<?php

class Sk_kematian_suami_istri extends Crud_Controller{
    protected $use_export_libraries = true;
    protected $tableHeaders = [
        'nama_kel' => 'Kelurahan',
        'tanggal_surat' => 'Tanggal Surat',
        'no' => 'Nomor Surat',
        'nama' => 'Nama',
        'alias' => 'Alias',
        'bin_binti' => 'Bin/Binti',
        'jenis_kelamin' => 'Jenis Kelamin',
        'ttl' => 'Tempat/Tanggal Lahir',
        
        'kewarganegaraan' => 'Kewarganegaraan',
        'agama' => 'Agama',
        'pekerjaan' => 'Pekerjaan',
        'alamat' => 'Alamat',
        'meninggal_nama' => 'Nama Almarhum/ah ',
        'meninggal_bin_binti' => 'Bin/Binti Almarhum/ah ',
        'meninggal_alias' => 'Alias Almarhum/ah ',
        'meninggal_jenis_kelamin' => 'Jenis Kelamin Almarhum/ah',
        'meninggal_ttl' => 'Tempat/Tanggal Lahir Almarhum/ah',
        'meninggal_kewarganegaraan' => 'Kewarganegaraan Almarhum/ah',
        'meninggal_agama' => 'Agama Almarhum/ah ',
        'meninggal_pekerjaan' => 'Pekerjaan Almarhum/ah',
        'meninggal_alamat' => 'Alamat Almarhum/ah ',
        'tempat_meninggal' => 'Tempat Meninggal',
        'tanggal_meninggal' => 'Tanggal Meninggal',
        'sebab_meninggal' => 'Sebab Meninggal',
    ];
    public function __construct(){
        parent::__construct(__DIR__);
        $this->load->library('report');
        $this->report->setEndCol('Z');
        $this->report->set_callback_row_data($this,'_modifyRowData');
        $this->report->setTitle("SK Kematian Suami Istri");
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
$perkawinan	 	= status_kawin_2_dropdown();
$kel		 	= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
$data = array(
	'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$this->session->userdata('log_kel'),'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_kewarganegaraan'=> form_dropdown('kewarganegaraan',$negara,'INDONESIA','id="kewarganegaraan"  class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_agama'=> form_dropdown('agama',$agama,'','id="agama" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_pekerjaan'=> form_dropdown('pekerjaan',$pekerjaan,'','id="pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_meninggal_kewarganegaraan'=> form_dropdown('meninggal_kewarganegaraan',$negara,'INDONESIA','id="meninggal_kewarganegaraan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_meninggal_agama'=> form_dropdown('meninggal_agama',$agama,'','id="meninggal_agama" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_meninggal_pekerjaan'=> form_dropdown('meninggal_pekerjaan',$pekerjaan,'','id="meninggal_pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
	'negara' => $negara,
	'agama' => $agama,
	'pekerjaan' => $pekerjaan,
	'perkawinan' => $perkawinan,
	'kel' => $kel,
	'syarat_form' => $this->syarat->form()
);
$this->twig->display('form/add.twig.php',$data);;
    }

    public function form_edit_data()
    {
        $sk_kematian_suami_istriid = $this->input->post('sk_kematian_suami_istriid');
$detail = $this->m_sk_kematian_suami_istri->detail_data($sk_kematian_suami_istriid);
$negara		 	= negara_dropdown();
$agama 			= agama_2_dropdown();
$pekerjaan	 	= pekerjaan_dropdown();
$perkawinan	 	= status_kawin_2_dropdown();
$kel		 	= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
$data = array(
	'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$detail['no_kel'],'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_kewarganegaraan'=> form_dropdown('kewarganegaraan',$negara,$detail['kewarganegaraan'],'id="kewarganegaraan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_agama'=> form_dropdown('agama',$agama,$detail['agama'],'id="agama" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_pekerjaan'=> form_dropdown('pekerjaan',$pekerjaan,$detail['pekerjaan'],'id="pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_meninggal_kewarganegaraan'=> form_dropdown('meninggal_kewarganegaraan',$negara,$detail['meninggal_kewarganegaraan'],'id="meninggal_kewarganegaraan" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_meninggal_agama'=> form_dropdown('meninggal_agama',$agama,$detail['meninggal_agama'],'id="meninggal_agama" class="wajib_isi select2 form-control" style="width:100%" '),
	'dropdown_meninggal_pekerjaan'=> form_dropdown('meninggal_pekerjaan',$pekerjaan,$detail['meninggal_pekerjaan'],'id="meninggal_pekerjaan" class="wajib_isi select2 form-control" style="width:100%" '),
	'sk_kematian_suami_istriid' => $sk_kematian_suami_istriid,
	'detail' => $detail,
	'negara' => $negara,
	'agama' => $agama,
	'pekerjaan' => $pekerjaan,
	'perkawinan' => $perkawinan,
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

     public function _modifyRowData(&$row)
     {
         
            $gender = config_item('gender');
           
            $row['jenis_kelamin'] = $gender[$row['jk']];
            $row['meninggal_jenis_kelamin'] = $gender[$row['meninggal_jk']];
            $row['tanggal_lahir']  = format_tanggal_khusus_indo($row['tanggal_lahir']);
            $row['meninggal_tanggal_lahir']  = format_tanggal_khusus_indo($row['meninggal_tanggal_lahir']);
            $row['tanggal_meninggal']  = format_tanggal_khusus_indo($row['tanggal_meninggal']);
            $row['tanggal_surat']  = format_tanggal_khusus_indo($row['date']);
            $row['meninggal_ttl'] = $row['meninggal_tempat_lahir'] . ', '. $row['meninggal_tanggal_lahir'];
            $row['ttl'] = $row['tempat_lahir'] . ', ' .$row['tanggal_lahir'];
            $row['alias'] = ($row['alias']!=''&&$row['alias']!='-') ? ' alias ' . $row['alias']:'';
            $row['meninggal_alias'] = ($row['meninggal_alias']!=''&&$row['meninggal_alias']!='-') ? ' alias ' . $row['meninggal_alias']:'';

             
            return $row;
     }
}
//D:/xampp/htdocs/babakan/app/modules/sk_kematian_suami_istri/controllers/Sk_kematian_suami_istri.php
