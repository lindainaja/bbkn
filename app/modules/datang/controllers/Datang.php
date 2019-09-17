<?php

class Datang extends Crud_Controller{
    
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

        $anggota = $this->m_datang->detail_data_anggota($detail['id']);

        // $data['detail'] = $detail;
        $data['anggota'] = $anggota;
    }


    //Execute before compiling export views
 
    protected function _preExport(&$data){
        $data['gender'] = config_item('gender');
    }
    protected function _afterAddEditData($datangid, $entry){
        $this->m_datang->delete_data_detail($datangid);

        $post_detail_nama   = $this->input->post('detail_nama');
        $post_detail_nik    = $this->input->post('detail_nik');
        $post_detail_shdk   = $this->input->post('detail_shdk');
        $detail_tmpt_lahir   = $this->input->post('detail_tmpt_lahir');
        $detail_tgl_lahir   = $this->input->post('detail_tgl_lahir');

        if(!empty($post_detail_nama)){
            $count_detail_nama = count($post_detail_nama);
            
            if(  $count_detail_nama != 0 ){
                for($i = 0; $i < $count_detail_nama ; $i++){
                    $entry2[$i]['datangid']  = $datangid;
                    $entry2[$i]['nik']              = $post_detail_nik[$i];
                    $entry2[$i]['nama']             = $post_detail_nama[$i];
                    $entry2[$i]['tempat_lahir']     = $detail_tmpt_lahir[$i];
                    $entry2[$i]['tanggal_lahir']    = format_date_us($detail_tgl_lahir[$i]);
                    $entry2[$i]['shdk']             = $post_detail_shdk[$i];
                    $entry2[$i]['create_on']        = date('Y-m-d H:i:s');
                    $entry2[$i]['create_by']        = $this->session->userdata('log_userid');
                }
                if(count($entry2)>0){
                    $this->db->insert_batch('t_datang_detail',$entry2);
                }
            }
            $entry2 = array();
            
        }
    }
    public function form_tambah_data()
    {
        $sn_kk_pindah_opt = array(''=>'-- Pilih Status --')+config_item('opt_sn_kk_pindah');

        $status_keluarga	= status_keluarga_dropdown();
        $kel		 	= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
        $data = array(
        	'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$this->session->userdata('log_kel'),'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
        	'status_keluarga' => $status_keluarga,
        	'kel' => $kel,
        	'syarat_form' => $this->syarat->form(),
            'dropdown_sn_kk_pindah' => form_dropdown('sn_kk_pindah_no',$sn_kk_pindah_opt,'','id="sn_kk_pindah_no" class="wajib_isi select2 form-control" style="width:100%"'),
        );
        $this->twig->display('form/add.twig.php',$data);
            }

    public function form_edit_data()
    {
        $sn_kk_pindah_opt = array(''=>'-- Pilih Status --')+config_item('opt_sn_kk_pindah');


        $datangid = $this->input->post('datangid');
        $detail = $this->m_datang->detail_data($datangid);
        $anggota = $this->m_datang->detail_data_anggota($datangid);
        $status_keluarga	= status_keluarga_dropdown();
        $kel		 		= kel_3_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
        $data = array(
        	'dropdown_no_kel'=> form_dropdown('no_kel',$kel,$detail['no_kel'],'id="no_kel" class="wajib_isi select2 form-control" style="width:100%" '),
        	'datangid' => $datangid,
        	'detail' => $detail,
        	'anggota' => $anggota,
        	'status_keluarga' => $status_keluarga,
        	'kel' => $kel,
        	'syarat_form' => $this->syarat->form($detail['syarat']),
            'dropdown_sn_kk_pindah' => form_dropdown('sn_kk_pindah_no',$sn_kk_pindah_opt,$detail['sn_kk_pindah_no'],'id="sn_kk_pindah_no" class="wajib_isi select2 form-control" style="width:100%"'),
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
        $templateFileName = $config['output_dir'].'form_datang.xlsx';

        $inputFileName = $this->func."_".date('Ymdhis').'.xlsx';
        
        copy($templateFileName, $config['output_dir'].$inputFileName);
        
        /*check point*/

        $inputFileType = PHPExcel_IOFactory::identify($config['output_dir'].$inputFileName);
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($config['output_dir'].$inputFileName);


        $objPHPExcel->setActiveSheetIndex(0);

        // Add column headers
        $sheet = $objPHPExcel->getActiveSheet();

            $sheet->setCellValue('G7', $row['nama_kk_asal'])
                    ->setCellValue('G9', $row['alamat_asal'])
                    ->setCellValue('G11',$row['kel_asal'])
                    ->setCellValue('G13',$row['kec_asal'])
                    ->setCellValue('U11',$row['kab_asal'])
                    ->setCellValue('U13',$row['prop_asal'])
                    ->setCellValue('G5',$row['no_kk_asal'])

                    ->setCellValue('G30',$row['alamat_tujuan'])
                    ->setCellValue('G18',$row['no_kk_tujuan'])
                    ->setCellValue('G20',$row['nama_kk_tujuan'])
                    ->setCellValue('G22',$row['nik_kk_tujuan'])
                    ->setCellValue('G32',$row['nama_kel'])
                    ->setCellValue('G34',$row['nama_kec'])
                    ->setCellValue('U32',$row['nama_kab'])
                    ->setCellValue('U34',$row['nama_prop'])
                    ;

        // excel_write_char('G5', $row['no_kk_asal'],$sheet,16);
        
        excel_write_char('U9', $row['rt_asal'],$sheet,3);
        excel_write_char('Z9', $row['rw_asal'],$sheet,3);

        excel_write_char('I15', $row['kodepos'],$sheet,5);
        excel_write_char('Q15', $row['tlp'],$sheet,12);


        excel_write_char('U30', $row['rt_tujuan'],$sheet,3);
        excel_write_char('Z30', $row['rw_tujuan'],$sheet,3);


        // excel_write_char('K27', $row['kodepos_pindah'],$sheet,5);
        // excel_write_char('R27', $row['tlp_pindah'],$sheet,12);

        // WRITE TTD CAMAT
        $camat = $this->m_datang->get_camat();
        $sheet->setCellValue("B56", $camat['nama_pegawai']);
        $sheet->setCellValue("B52", $camat['jabatan']);
        $sheet->setCellValue("B57", "NIP. " . $camat['nip']);

        // WRITE NK TS
        // $row['tanggal_registrasi']  = format_tanggal_khusus_indo($row['tgl_reg']);
        // $sheet->setCellValue("B66", $row['nama_kec'] . ", " . $row['tanggal_registrasi']);
        // WRITE no
        $sheet->setCellValue("B51", "No. : " . $row['no_reg']);

        // WRITE TTD
        $sheet->setCellValue("W56", $row['ttd_nama']);
        $sheet->setCellValue("W52", $row['ttd_jabatan']);
        $sheet->setCellValue("W57", "NIP. " . $row['ttd_nip']);

        // WRITE NK TS
        $row['tanggal_surat']  = format_tanggal_khusus_indo($row['date']);
        $sheet->setCellValue("W50", $row['nama_kec'] . ", " . $row['tanggal_surat']);
        // WRITE no
        $sheet->setCellValue("W51", "No. : " . $row['no']);

        // WRITE NAMA
        $sheet->setCellValue("L56", $row['nama']);


        // PRINT MODIFIED DATA
   
        $sheet->setCellValue('G24',$row['sn_kk_pindah_no']); //add

        // Tanggal Datang
        $rtgp = explode('-', $row['tgl_datang']);
        $rtgp_y = $rtgp[0];
        $rtgp_m = $rtgp[1];
        $rtgp_d = $rtgp[2];
        excel_write_char('G28', $rtgp_d,$sheet,2);
        excel_write_char('J28', $rtgp_m,$sheet,2);
        excel_write_char('M28', $rtgp_y,$sheet,4);

        // DATA KELUARGA
        $anggota = $this->m_datang->detail_data_anggota($row['id']);

        $baris          = 39;
        $col_nik        = 'D';
        $col_nama       = 'T';
        $col_shdk_a     = 'AA';
        $col_shdk_k     = 'AB';



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
//D:/xampp/htdocs/babakan/app/modules/datang/controllers/Datang.php
