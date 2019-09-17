<?
class F_108  extends PD
{
	public $table_name = 't_pindah_wni_108';
	public function __construct()
	{
		parent::__construct(__DIR__);
	}
	public function build_grid()
	{	
        $this->crud_apply_filter();
		$c = $this->crud;
		$c->set_theme('datatables');
        $c->set_relation('no_kel','setup_kel','nama_kel');
        $c->enable_save_and_download();
        $c->unset_read();
        $c->add_custom_form_css($this->asset_url('custom/css/f_108.css'));
        $c->add_custom_list_css($this->asset_url('custom/css/table.css'));
		$c->add_custom_form_js($this->asset_url('custom/js/f_108.js'));
        $c->set_subject('Data F-1.08');
        /*******************************************************************************/
        $c->callback_column("download",array($this,"add_x_suffix"));
        /*******************************************************************************/
        /*
        Dropdown Data For Config
        */
        $dd_data = [
            'data_alasan_pindah_no' => config_item('opt_alasan_pindah'),
            'data_klasifikasi_pindah_no' => config_item('opt_klasifikasi_pindah'),
            'data_jenis_kepindahan_no' => config_item('opt_jenis_kepindahan'),
            'data_status_no_kk_pindah_no' => config_item('opt_sn_kk_pindah'),
        ];
        $this->append_data($dd_data);
        $this->apply_config();
        // OVERRIDE CONFIG ---------------------------------------------------
        $c->field_type('no_prop','hidden',$this->no_prop);    
        $c->field_type('no_kec','hidden',$this->no_kec);    
        $c->field_type('no_kab','hidden',$this->no_kab);    

        $state = $c->getState();

        if($state == 'edit'){
            $c->field_type('update_on','hidden',date('Y-m-d H:i:s')); 
            $c->field_type('update_by','hidden',$this->ci->session->userdata('log_userid'));    

        }
        if($state == 'add'){
            $c->field_type('create_by','hidden',$this->ci->session->userdata('log_userid'));
            $c->field_type('create_on','hidden',date('Y-m-d H:i:s')); 
        }
        //---------------------------------------------------
        $this->append_data($c->render());
        $this->ci->load->view('templates/default', $this->data);

	}
     
    public function download_xlsx($pk)
    {
        $row = $this->fetch_row_download($pk);
        $camat = $this->get_camat();
        //update download
        $this->update_download_count($row['download'],$pk);
        //update download
     
         /*print_r($row);
        die($pk);*/
        //---------------------------------------------------------------------
        // 1. update jumlah download count [pending]
        // $pk =   $this->uri->segment(4);
       
        // 2. Write xlsx documents
        $cls = strtolower(get_class($this));
        $template_dir = $this->module_path . '/templates/output/';
        $xlsx_path = $this->module_path . '/templates/output/' . $cls .'.xlsx';

        if(!file_exists($xlsx_path)){
            die('Template file ' . $xlsx_path . ' doesnt exist');
        }

        //---------------------------------------------------------------------
        // START READING EXCEL FILE
        // copy orig to write
        $templateFileName = $xlsx_path;
        $inputFileName = $cls."_".date('Ymdhis').'.xlsx';
        $template_cache_dir = APPPATH.'/cache/xlsx/';

        copy($templateFileName, $template_cache_dir.$inputFileName);
        
        /*Entry Point*/
        $xlsx_target_path = $template_cache_dir.$inputFileName;

        $inputFileType = PHPExcel_IOFactory::identify($xlsx_target_path);
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($xlsx_target_path);


        $objPHPExcel->setActiveSheetIndex(0);

        // Add column headers
        $sheet = $objPHPExcel->getActiveSheet();
        $row['nama_pemohon'] = $row['nama_kk_asal'];

        $sheet->setCellValue('G7',$row['nama_kk_asal'])
              // ->setCellValue('R27',$row['dusun_dukuh_kampung_asal'])
              ->setCellValue('G11',$row['kel_asal'])
              ->setCellValue('S11',$row['kab_asal'])
              ->setCellValue('G13',$row['kec_asal'])
              ->setCellValue('S13',$row['prop_asal'])
              ->setCellValue('G22',$row['alamat_pindah'])
              
              ->setCellValue('I59',$row['nama_pemohon'])

              // ->setCellValue('R46',$row['dusun_dukuh_kampung_pindah'])
              ->setCellValue('G24',$row['kel_pindah'])
              ->setCellValue('S24',$row['kab_pindah'])
              ->setCellValue('G26',$row['kec_pindah'])
              ->setCellValue('S26',$row['prop_pindah'])

              //I48,W48,I50,W50,N52,W52
              ->setCellValue('G9',$row['alamat_asal']);

        // $sheet->setCellValue('U12',$row['nama_kelurahan']);
        excel_write_char('G5', $row['no_kk_asal'],$sheet,16);       
        
        excel_write_char('S9', $row['rt_asal'],$sheet,3);       
        excel_write_char('X9', $row['rw_asal'],$sheet,3);     

        excel_write_char('S15', $row['tlp_asal'],$sheet,8);       
        excel_write_char('S28', $row['tlp_pindah'],$sheet,8);       
        excel_write_char('J15', $row['kodepos_asal'],$sheet,5);       
        excel_write_char('J28', $row['kodepos_pindah'],$sheet,5);  

        $rctp = extract_mysql_date_info($row['rencana_tgl_pindah']); 
        excel_write_char('G42', $rctp['d'],$sheet,2);       
        excel_write_char('J42', $rctp['m'],$sheet,2);       
        excel_write_char('M42', $rctp['y'],$sheet,4);       


        excel_write_char('G19', $row['alasan_pindah_no'],$sheet,1);       
        excel_write_char('G36', $row['status_no_kk_tdk_pindah_no'],$sheet,1);       
        excel_write_char('G39', $row['status_no_kk_pindah_no'],$sheet,1);       
        excel_write_char('G70', $row['status_no_kk_pindah_no_tujuan'],$sheet,1);       
        excel_write_char('G33', $row['jenis_kepindahan_no'],$sheet,1);       
        excel_write_char('G30', $row['klasifikasi_pindah_no'],$sheet,1);       
        excel_write_char('S22', $row['rt_pindah'],$sheet,3);       
        excel_write_char('X22', $row['rw_pindah'],$sheet,3);     

        if($row['alasan_pindah_no'] == '7'){
            $sheet->setCellValue('U20',$row['alasan_pindah_lain']);
        }
        

        if($row['ttd_nip'] != config_item('default_ttd_nip')){
            $row['ttd_jabatan'] = 'A.n ' . config_item('default_ttd_jabatan');
        }
        $sheet->setCellValue('S54',$row['ttd_jabatan']);
        $sheet->setCellValue('S59',$row['ttd_nama']);
        $sheet->setCellValue('S60',$row['ttd_nip']);

            
        //daftar-keleuaraga
        $daftar_keluarga_data_pindah = json_decode($row['daftar_keluarga_data_pindah']);
       
        $baris        = 45;
        $col_no       = 'A';
        $col_nik      = 'B';
        $col_nama     = 'O';
        // $col_ktp      = 'AC';
        $col_shdk     = 'Y';
        


        $index = 1;
        foreach ($daftar_keluarga_data_pindah  as $item) {
            excel_write_char("${col_no}${baris}", $index++,$sheet);
            // excel_write_char("${col_nik}${baris}", $item->nik,$sheet,16);
            $sheet->setCellValue("${col_nik}${baris}", $item->nik);

            $sheet->setCellValue("${col_nama}${baris}", $item->nama);

            excel_write_char("${col_shdk}${baris}", get_shdk_number($item->shdk),$sheet,2);
            // $sheet->setCellValue("${col_ktp}${baris}", "SEUMUR HIDUP");
            // PINDAH BARIS
            $baris++;
        }
        // WRITE NK TS
        $row['tanggal_surat']  = format_tanggal_khusus_indo($row['date']);
        $row['tgl_diket_camat_pindah']  = format_tanggal_khusus_indo($row['tgl_diket_camat_pindah']);

        $sheet->setCellValue("A55", 'No. '.$row['no_diket_camat_pindah'] . " Tgl, " . $row['tgl_diket_camat_pindah']);
        $sheet->setCellValue("S55", 'No. '.$row['no'] . " Tgl, " . $row['tanggal_surat']);
        // DATA CAMAT CURRENT
        $sheet->setCellValue('A59','( '.$camat['nama'].' )');
        $sheet->setCellValue('A60','NIP. '.$camat['nip']);


        //----------- DATA DAERAH TUJUAN

        $sheet->setCellValue('G66',$row['nama_kep_kel_tujuan'])
              ->setCellValue('G68',$row['nik_kep_kel_tujuan'])
              ->setCellValue('G77',$row['kel_tujuan'])
              ->setCellValue('S77',$row['kab_tujuan'])
              ->setCellValue('G79',$row['kec_tujuan'])
              ->setCellValue('S79',$row['prop_tujuan'])
              ->setCellValue('G75',$row['alamat_tujuan']);

        excel_write_char('G64', $row['no_kk_tujuan'],$sheet,16);       
        
        excel_write_char('S75', $row['rt_tujuan'],$sheet,3);       
        excel_write_char('X75', $row['rw_tujuan'],$sheet,3);     

        excel_write_char('S81', $row['tlp_tujuan'],$sheet,8);       
        excel_write_char('J81', $row['kodepos_tujuan'],$sheet,5);  

        $tkj = extract_mysql_date_info($row['tgl_kedatangan_tujuan']); 
        excel_write_char('G73', $rctp['d'],$sheet,2);       
        excel_write_char('J73', $rctp['m'],$sheet,2);       
        excel_write_char('M73', $rctp['y'],$sheet,4); 

        //daftar-keleuaraga
        $daftar_keluarga_data_datang = json_decode($row['daftar_keluarga_data_datang']);
       
        $baris        = 84;
        $col_no       = 'A';
        $col_nik      = 'B';
        $col_nama     = 'O';
        // $col_ktp      = 'AC';
        $col_shdk     = 'Y';
        


        $index = 1;
        foreach ($daftar_keluarga_data_datang  as $item) {
            excel_write_char("${col_no}${baris}", $index++,$sheet);
            excel_write_char("${col_nik}${baris}", $item->nik,$sheet,13);
            // $sheet->setCellValue("${col_nik}${baris}", $item->nik);

            $sheet->setCellValue("${col_nama}${baris}", $item->nama);
            excel_write_char("${col_shdk}${baris}", get_shdk_number($item->shdk),$sheet,2);
            // $sheet->setCellValue("${col_ktp}${baris}", "SEUMUR HIDUP");
            // PINDAH BARIS
            $baris++;
        }

        $row['tgl_diket_camat_tujuan']  = format_tanggal_khusus_indo($row['tgl_diket_camat_tujuan']);
        $sheet->setCellValue("L94", 'No. '.$row['no_diket_camat_tujuan'] . " Tgl," . $row['tgl_diket_camat_tujuan']);
        // DATA CAMAT CURRENT
        $sheet->setCellValue('L98','( '.$row['nama_camat_tujuan'].' )');
        $sheet->setCellValue('L99','NIP. '.$row['nip_camat_tujuan']);

        $row['tgl_diket_lurah_tujuan']  = format_tanggal_khusus_indo($row['tgl_diket_lurah_tujuan']);
        $sheet->setCellValue("T94", 'No. '.$row['no_diket_lurah_tujuan'] . " Tgl," . $row['tgl_diket_lurah_tujuan']);
        // DATA CAMAT CURRENT
        $sheet->setCellValue('T98','( '.$row['nama_lurah_tujuan'].' )');
        $sheet->setCellValue('T99','NIP. '.$row['nip_lurah_tujuan']);
        //----------- E O DAERAH TUJUAN

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $inputFileName . '"');header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');

        unlink($xlsx_target_path);       
    }
}