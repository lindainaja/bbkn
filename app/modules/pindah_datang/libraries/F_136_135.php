<?
class F_136_135  extends PD
{
	public $table_name = 't_pindah_wni_136_135';
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
        $c->add_custom_form_css($this->asset_url('custom/css/f_136_135.css'));
        $c->add_custom_list_css($this->asset_url('custom/css/table.css'));
		$c->add_custom_form_js($this->asset_url('custom/js/f_136_135.js'));
        $c->set_subject('Data F-1.36 & 1.35');
        /*******************************************************************************/
        $c->callback_column("download",array($this,"add_x_suffix"));
        /*******************************************************************************/
        /*
        Dropdown Data For Config
        */
        $dd_data = [
            'data_alasan_pindah_no' => config_item('opt_alasan_pindah'),
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
        //update download
        $this->update_download_count($row['download'],$pk);
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

        $sheet->setCellValue('U12',$row['nama_kelurahan'])
              ->setCellValue('U10',$row['nama_kecamatan'])
              ->setCellValue('U8',$row['nama_kabupaten'])
              ->setCellValue('U6',$row['nama_provinsi'])
              ->setCellValue('K14',$row['dusun_dukuh_kampung'])
              ->setCellValue('D18',$row['no'])
              ->setCellValue('I23',$row['nama_kk_asal'])
              ->setCellValue('R27',$row['dusun_dukuh_kampung_asal'])
              ->setCellValue('I29',$row['kel_asal'])
              ->setCellValue('W29',$row['kab_asal'])
              ->setCellValue('I31',$row['kec_asal'])
              ->setCellValue('W31',$row['prop_asal'])
              ->setCellValue('I44',$row['alamat_pindah'])
              ->setCellValue('I37',$row['nama_pemohon'])
              ->setCellValue('R46',$row['dusun_dukuh_kampung_pindah'])
              ->setCellValue('I48',$row['kel_pindah'])
              ->setCellValue('W48',$row['kab_pindah'])
              ->setCellValue('I50',$row['kec_pindah'])
              ->setCellValue('W50',$row['prop_pindah'])

              //I48,W48,I50,W50,N52,W52
              ->setCellValue('I25',$row['alamat_asal']);

        $sheet->setCellValue('U12',$row['nama_kelurahan']);
        excel_write_char('I21', $row['no_kk_asal'],$sheet,16);       
        
        excel_write_char('Z25', $row['rt_asal'],$sheet,3);       
        excel_write_char('AG25', $row['rw_asal'],$sheet,3);     

        excel_write_char('W33', $row['tlp_asal'],$sheet,13);       
        excel_write_char('W52', $row['tlp_pindah'],$sheet,13);       
        excel_write_char('N33', $row['kodepos_asal'],$sheet,5);       
        excel_write_char('N52', $row['kodepos_pindah'],$sheet,5);       
        excel_write_char('I35', $row['nik_pemohon'],$sheet,16);    


        excel_write_char('I41', $row['alasan_pindah_no'],$sheet,1);       
        excel_write_char('I57', $row['status_no_kk_tdk_pindah_no'],$sheet,1);       
        excel_write_char('I60', $row['status_no_kk_pindah_no'],$sheet,1);       
        excel_write_char('I54', $row['jenis_kepindahan_no'],$sheet,1);       
        excel_write_char('Z44', $row['rt_pindah'],$sheet,3);       
        excel_write_char('AG44', $row['rw_pindah'],$sheet,3);     

        if($row['alasan_pindah_no'] == '7'){
            $sheet->setCellValue('Z42',$row['alasan_pindah_lain']);
        }
        $sheet->setCellValue('Y79',$row['nama_pemohon']);
        $sheet->setCellValue('B79',$row['nama_petugas_registrasi']);

        $sheet->setCellValue('V131',$row['ttd_jabatan']);
        $sheet->setCellValue('W137',$row['ttd_nama']);
        $sheet->setCellValue('T138','NIP. '.$row['ttd_nip'])
        //Q115-Q112-Q110-Q108-Q106-Q104-D97
              ->setCellValue('D100',$row['no'])
              ->setCellValue('Q107',$row['nik_pemohon'])
              ->setCellValue('Q109',$row['nama_pemohon'])
              ->setCellValue('Q111',$row['no_kk_asal'])
              ->setCellValue('Q113',$row['nama_kk_asal'])
              ->setCellValue('Q115',$row['alamat_asal'])
              ->setCellValue('Q118',$row['alamat_pindah']);
            
        //daftar-keleuaraga-Y78-B78-U126
        $row['tanggal_surat']  = format_tanggal_khusus_indo($row['date']);
        $sheet->setCellValue("X74", $row['nama_kecamatan'] . ", " . $row['tanggal_surat']);
        $sheet->setCellValue("U129", $row['nama_kecamatan'] . ", " . $row['tanggal_surat']);

        $daftar_keluarga_data = json_decode($row['daftar_keluarga_data']);
        //Q118
        $ag_cx = 0+count($daftar_keluarga_data);

        $sheet->setCellValue('Q121',$ag_cx);

        $baris        = 66;
        $col_no       = 'A';
        $col_nik      = 'B';
        $col_nama     = 'R';
        $col_ktp      = 'AC';
        $col_shdk     = 'AH';
        


        $index = 1;
        foreach ($daftar_keluarga_data  as $item) {
            excel_write_char("${col_no}${baris}", $index++,$sheet);
            excel_write_char("${col_nik}${baris}", $item->nik,$sheet,16);
            $sheet->setCellValue("${col_nama}${baris}", $item->nama);
            $sheet->setCellValue("${col_shdk}${baris}", get_shdk_number($item->shdk));
            $sheet->setCellValue("${col_ktp}${baris}", "SEUMUR HIDUP");
            // PINDAH BARIS
            $baris++;
        }
        // WRITE NK TS
        
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $inputFileName . '"');header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');

        unlink($xlsx_target_path);       
    }
}