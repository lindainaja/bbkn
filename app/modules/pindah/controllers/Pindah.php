<?php

class Pindah extends Crud_Controller{
    
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

        $anggota = $this->m_pindah->detail_data_anggota($detail['id']);

        // $data['detail'] = $detail;
        $data['anggota'] = $anggota;
    }


    //Execute before compiling export views
 
    protected function _preExport(&$data){
        $data['gender'] = config_item('gender');
    }
    protected function _afterAddEditData($pindahid, $entry){
        $this->m_pindah->delete_data_detail($pindahid);

        $post_detail_nama   = $this->input->post('detail_nama');
        $post_detail_nik    = $this->input->post('detail_nik');
        $post_detail_shdk   = $this->input->post('detail_shdk');
        $detail_tmpt_lahir   = $this->input->post('detail_tmpt_lahir');
        $detail_tgl_lahir   = $this->input->post('detail_tgl_lahir');

        if(!empty($post_detail_nama)){
            $count_detail_nama = count($post_detail_nama);
            
            if(  $count_detail_nama != 0 ){
                for($i = 0; $i < $count_detail_nama ; $i++){
                    $entry2[$i]['pindahid']  = $pindahid;
                    $entry2[$i]['nik']              = $post_detail_nik[$i];
                    $entry2[$i]['nama']             = $post_detail_nama[$i];
                    $entry2[$i]['tempat_lahir']     = $detail_tmpt_lahir[$i];
                    $entry2[$i]['tanggal_lahir']    = format_date_us($detail_tgl_lahir[$i]);
                    $entry2[$i]['shdk']             = $post_detail_shdk[$i];
                    $entry2[$i]['create_on']        = date('Y-m-d H:i:s');
                    $entry2[$i]['create_by']        = $this->session->userdata('log_userid');
                }
                if(count($entry2)>0){
                    $this->db->insert_batch('t_pindah_detail',$entry2);
                }
            }
            $entry2 = array();
            
        }
    }
    public function form_tambah_data()
    {
         $alasan_pindah_opt = array(''=>'-- Pilih Alasan --')+config_item('opt_alasan_pindah');
        $klasifikasi_pindah_opt = array(''=>'-- Pilih Klasifikasi --')+config_item('opt_klasifikasi_pindah');
        $jenis_kepindahan_opt = array(''=>'-- Pilih Jenis --')+config_item('opt_jenis_kepindahan');
        $sn_kk_menetap_opt = array('' => '-- Pilih Status --')+config_item('opt_sn_kk_menetap');
        $sn_kk_pindah_opt = array(''=>'-- Pilih Status --')+config_item('opt_sn_kk_pindah');


        $agama 				= agama_2_dropdown();
        $status_perkawinan	= status_kawin_2_dropdown();
        $status_keluarga	= status_keluarga_dropdown();
        $kel		 	= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
        $data = array(
        	'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$this->session->userdata('log_kel'),'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
        	'dropdown_agama'=> form_dropdown('agama',$agama,'','id="agama" class="wajib_isi select2 form-control" style="width:100%" '),
        	'dropdown_status_perkawinan'=> form_dropdown('status_perkawinan',$status_perkawinan,'','id="status_perkawinan" class="wajib_isi select2 form-control" style="width:100%" '),
        	'agama' => $agama,
        	'status_perkawinan' => $status_perkawinan,
        	'status_keluarga' => $status_keluarga,
        	'kel' => $kel,
        	'syarat_form' => $this->syarat->form(),
            'dropdown_klasifikasi_pindah' => form_dropdown('klasifikasi_pindah_no',$klasifikasi_pindah_opt,'','id="klasifikasi_pindah_no" class="wajib_isi select2 form-control" style="width:100%"'),
            'dropdown_alasan_pindah' => form_dropdown('alasan_pindah_no',$alasan_pindah_opt,'','id="alasan_pindah_no" class="wajib_isi select2 form-control" style="width:100%"'),
            'dropdown_jenis_kepindahan' => form_dropdown('jenis_kepindahan_no',$jenis_kepindahan_opt,'','id="jenis_kepindahan_no" class="wajib_isi select2 form-control" style="width:100%"'),
            'dropdown_sn_kk_menetap' => form_dropdown('sn_kk_menetap_no',$sn_kk_menetap_opt,'','id="sn_kk_menetap_no" class="wajib_isi select2 form-control" style="width:100%"'),
            'dropdown_sn_kk_pindah' => form_dropdown('sn_kk_pindah_no',$sn_kk_pindah_opt,'','id="sn_kk_pindah_no" class="wajib_isi select2 form-control" style="width:100%"'),
        );
        $this->twig->display('form/add.twig.php',$data);
    }

    public function form_edit_data()
    {
        $alasan_pindah_opt = array(''=>'-- Pilih Alasan --')+config_item('opt_alasan_pindah');
        $klasifikasi_pindah_opt = array(''=>'-- Pilih Klasifikasi --')+config_item('opt_klasifikasi_pindah');
        $jenis_kepindahan_opt = array(''=>'-- Pilih Jenis --')+config_item('opt_jenis_kepindahan');
        $sn_kk_menetap_opt = array('' => '-- Pilih Status --')+config_item('opt_sn_kk_menetap');
        $sn_kk_pindah_opt = array(''=>'-- Pilih Status --')+config_item('opt_sn_kk_pindah');

        $pindahid = $this->input->post('pindahid');
        $detail = $this->m_pindah->detail_data($pindahid);
        $anggota = $this->m_pindah->detail_data_anggota($pindahid);
        $agama 				= agama_2_dropdown();
        $status_perkawinan	= status_kawin_2_dropdown();
        $status_keluarga	= status_keluarga_dropdown();
        $kel		 		= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
        $data = array(
        	'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$detail['no_kel'],'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
        	'dropdown_agama'=> form_dropdown('agama',$agama,$detail['agama'],'id="agama" class="wajib_isi select2 form-control" style="width:100%" '),
        	'dropdown_status_perkawinan'=> form_dropdown('status_perkawinan',$status_perkawinan,$detail['status_perkawinan'],'id="status_perkawinan" class="wajib_isi select2 form-control" style="width:100%" '),
        	'pindahid' => $pindahid,
        	'detail' => $detail,
        	'anggota' => $anggota,
        	'agama' => $agama,
        	'status_perkawinan' => $status_perkawinan,
        	'status_keluarga' => $status_keluarga,
        	'kel' => $kel,
        	'syarat_form' => $this->syarat->form($detail['syarat']),
            'dropdown_alasan_pindah' => form_dropdown('alasan_pindah_no',$alasan_pindah_opt,$detail['alasan_pindah_no'],'id="alasan_pindah_no" class="wajib_isi select2 form-control" style="width:100%"'),
            'dropdown_jenis_kepindahan' => form_dropdown('jenis_kepindahan_no',$jenis_kepindahan_opt,$detail['jenis_kepindahan_no'],'id="jenis_kepindahan_no" class="wajib_isi select2 form-control" style="width:100%"'),
            'dropdown_sn_kk_menetap' => form_dropdown('sn_kk_menetap_no',$sn_kk_menetap_opt,$detail['sn_kk_menetap_no'],'id="sn_kk_menetap_no" class="wajib_isi select2 form-control" style="width:100%"'),
            'dropdown_sn_kk_pindah' => form_dropdown('sn_kk_pindah_no',$sn_kk_pindah_opt,$detail['sn_kk_pindah_no'],'id="sn_kk_pindah_no" class="wajib_isi select2 form-control" style="width:100%"'),
            'dropdown_klasifikasi_pindah' => form_dropdown('klasifikasi_pindah_no',$klasifikasi_pindah_opt,$detail['klasifikasi_pindah_no'],'id="klasifikasi_pindah_no" class="wajib_isi select2 form-control" style="width:100%"'),

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

        $result = $this->{$this->modelName}->detail_data($pk);

        $template_dir = __DIR__ .'/../template/reports/';
        $config = array(
            'template_dir' => $template_dir,
            'output_dir' => $template_dir . 'output/',
            'output_image_dir' => $template_dir . 'output/images/',
        );

   

        $row = $result;
     
        $gender = config_item('gender');
        // $row['jenis_kelamin']  = $gender[$row['jk']];
        // $row['tanggal_lahir']  = format_tanggal_khusus_indo($row['tanggal_lahir']);
        // $row['tanggal_surat']  = format_tanggal_khusus_indo($row['date']);
        // $row['ttl'] = $row['tempat_lahir'].', ' . $row['tanggal_lahir'];
 
        // START READING EXCEL FILE
        $templateFileName = $config['output_dir'].'form_pindah.xlsx';

        $inputFileName = $this->func."_".date('Ymdhis').'.xlsx';
        
        copy($templateFileName, $config['output_dir'].$inputFileName);
        
        /*check point*/

        $inputFileType = PHPExcel_IOFactory::identify($config['output_dir'].$inputFileName);
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($config['output_dir'].$inputFileName);


        $objPHPExcel->setActiveSheetIndex(0);

        // Add column headers
        $sheet = $objPHPExcel->getActiveSheet();

        $sheet->setCellValue('H6', $row['nama_kk_asal'])
                ->setCellValue('H8', $row['alamat_asal'])
                ->setCellValue('H10',$row['nama_kel'])
                ->setCellValue('H12',$row['nama_kec'])
                ->setCellValue('V10',$row['nama_kab'])
                ->setCellValue('U12',$row['nama_prop'])
                
                ->setCellValue('H21',$row['alamat_pindah'])
                ->setCellValue('H23',$row['dusun_pindah'])
                ->setCellValue('H25',$row['kec_pindah'])
                // ->setCellValue('H25',$row['kec_pindah'])
                ->setCellValue('V23',$row['kab_pindah'])
                ->setCellValue('V25',$row['prop_pindah'])
                ;

        excel_write_char('H4', $row['no_kk_asal'],$sheet,16);
        
        excel_write_char('V8', $row['rt_asal'],$sheet,3);
        excel_write_char('AA8', $row['rw_asal'],$sheet,3);

        excel_write_char('K14', $row['kodepos_asal'],$sheet,5);
        excel_write_char('R14', $row['tlp_asal'],$sheet,12);


        excel_write_char('V21', $row['rt_pindah'],$sheet,3);
        excel_write_char('AA21', $row['rw_pindah'],$sheet,3);


        excel_write_char('K27', $row['kodepos_pindah'],$sheet,5);
        excel_write_char('R27', $row['tlp_pindah'],$sheet,12);

        // WRITE TTD CAMAT
        $camat = $this->m_pindah->get_camat();
        $sheet->setCellValue("B72", $camat['nama_pegawai']);
        $sheet->setCellValue("B67", $camat['jabatan']);
        $sheet->setCellValue("B73", "NIP. " . $camat['nip']);

        // WRITE NK TS
        $row['tanggal_registrasi']  = format_tanggal_khusus_indo($row['tgl_reg']);
        $sheet->setCellValue("B66", $row['nama_kec'] . ", " . $row['tanggal_registrasi']);
        // WRITE no
        $sheet->setCellValue("B65", "No. Reg. : " . $row['no_reg']);

        // WRITE TTD
        $sheet->setCellValue("T72", $row['ttd_nama']);
        $sheet->setCellValue("T67", $row['ttd_jabatan']);
        $sheet->setCellValue("T73", "NIP. " . $row['ttd_nip']);

        // WRITE NK TS
        $row['tanggal_surat']  = format_tanggal_khusus_indo($row['date']);
        $sheet->setCellValue("T66", $row['nama_kec'] . ", " . $row['tanggal_surat']);
        // WRITE no
        $sheet->setCellValue("T65", "No. Reg. : " . $row['no']);

        // WRITE NAMA
        $sheet->setCellValue("K72", $row['nama']);


        // PRINT MODIFIED DATA
        $sheet->setCellValue('H17',$row['alasan_pindah_no']); //add

        $sheet->setCellValue('H30',$row['klasifikasi_pindah_no']); //add
        $sheet->setCellValue('H35',$row['jenis_kepindahan_no']); //add
        $sheet->setCellValue('H40',$row['sn_kk_menetap_no']); //add
        $sheet->setCellValue('H45',$row['sn_kk_pindah_no']); //add

        //Rencana Tanggal Pindah
        $rtgp = explode('-', $row['r_tgl_pindah']);
        $rtgp_y = $rtgp[0];
        $rtgp_m = $rtgp[1];
        $rtgp_d = $rtgp[2];
        excel_write_char('H49', $rtgp_d,$sheet,2);
        excel_write_char('K49', $rtgp_m,$sheet,2);
        excel_write_char('N49', $rtgp_y,$sheet,4);

        // DATA KELUARGA
        $anggota = $this->m_pindah->detail_data_anggota($row['id']);

        $baris          = 53;
        $col_nik        = 'D';
        $col_nama       = 'T';
        $col_shdk_a     = 'AB';
        $col_shdk_k     = 'AC';



        foreach ($anggota as $item) {
            // PRINT NIK
            excel_write_char("${col_nik}${baris}", $item['nik'],$sheet,16);
            // PRINT NAMA
            $sheet->setCellValue("${col_nama}${baris}", $item['nama']);
            // PRINT SHDK
            $col_shdk = $col_shdk_a;
            $col_shdk_txt = $item['shdk'][0];
            if(!preg_match('/anak/i', $item['shdk'])){
                // $col_shdk_txt = 'K';
                $col_shdk = $col_shdk_k;
            } 
            $sheet->setCellValue("${col_shdk}${baris}", $col_shdk_txt);

            // PINDAH BARIS
            $baris++;
        }

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $inputFileName . '"');
        header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');

        unlink($config['output_dir'].$inputFileName);
    }
}
//D:/xampp/htdocs/babakan/app/modules/pindah/controllers/Pindah.php
