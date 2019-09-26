<?php 
class Surat_pemberitahuan_kekurangan_syarat extends Crud_Controller{
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

        // $data['list_data'] = $this->m_sk_kehilangan->detail_data_detail($detail['id']);
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
        // $this->m_sk_kehilangan->delete_data_detail($sk_kehilanganid);
      
        // $detail_kehilangan   = $this->input->post('detail_kehilangan'); 

        // if(!empty($detail_kehilangan)){
        //     $count_detail_kehilangan = count($detail_kehilangan);
            
        //     if(  $count_detail_kehilangan != 0 ){
        //         $entry2 = array();
        //         for($i=0;$i<$count_detail_kehilangan;$i++){
        //             $entry2[$i]['kehilanganid']     = $sk_kehilanganid;
        //             $entry2[$i]['deskripsi']        = $detail_kehilangan[$i];
        //             $entry2[$i]['create_on']        = date('Y-m-d H:i:s');
        //             $entry2[$i]['create_by']        = $this->session->userdata('log_userid');
        //         }
        //         if(count($entry2)>0){
        //             $this->db->insert_batch('t_kehilangan_detail',$entry2);
        //         }
        //     } 
        // }
    }
    public function form_tambah_data()
    {
        	$kel  = kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
	$negara        = negara_dropdown();
	$agama       = agama_2_dropdown();
	$pekerjaan   = pekerjaan_dropdown();

        $data = array(
        		'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$this->session->userdata('log_kel'),'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
	'syarat_form' => $this->syarat->form(),

        );
        $this->twig->display('form/add.twig.php',$data);
    }

    public function form_edit_data()
    {
        $surat_pemberitahuan_kekurangan_syaratid = $this->input->post('surat_pemberitahuan_kekurangan_syaratid');
        $detail = $this->m_surat_pemberitahuan_kekurangan_syarat->detail_data($surat_pemberitahuan_kekurangan_syaratid);
        // $detail_data = $this->m_surat_pemberitahuan_kekurangan_syarat->detail_data_detail($surat_pemberitahuan_kekurangan_syaratid);
        	$kel  = kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
	$negara        = negara_dropdown();
	$agama       = agama_2_dropdown();
	$pekerjaan   = pekerjaan_dropdown();

 
        $data = array(
            	'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$detail['no_kel'],'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
	 'syarat_form' => $this->syarat->form($detail['syarat']),

        	'surat_pemberitahuan_kekurangan_syaratid' => $surat_pemberitahuan_kekurangan_syaratid,
        	'detail' => $detail,
            // 'detail_data' => $detail_data 
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
            $gender = config_item('gender');
            $ret['date']  = format_tanggal_khusus_indo($row['date']);
            $ret['tanggal_acara']  = format_tanggal_khusus_indo($row['tanggal_acara']);
            $ret['hari_acara']  = tanggal_indo($row['tanggal_acara'],false,true);
            $ret['tanggal_terima']  = format_tanggal_khusus_indo($row['tanggal_terima']);

           $ret['tanggal_surat']  = date('d-m-Y',strtotime($row['date']));
            // $ret['tanggal_hilang'] = format_tanggal_khusus_indo($row['tgl_hilang']);
            $ret['no_kel'] = $row['nama_kel'].' ';
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