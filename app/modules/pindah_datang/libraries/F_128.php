<?php 

/**
 * 
 */
class F_128  extends PD
{
	public $table_name = 't_pindah_wni_128';
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
        $c->add_custom_form_css($this->asset_url('custom/css/f_128.css'));
        $c->add_custom_list_css($this->asset_url('custom/css/table.css'));
		$c->add_custom_form_js($this->asset_url('custom/js/f_128.js'));
        $c->set_subject('Data F-1.28');
        /*******************************************************************************/
        $c->callback_column("download",array($this,"add_x_suffix"));
        /*******************************************************************************/
        /*
        Dropdown Data For Config
        */
        $dd_data = [ 
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
              ->setCellValue('D18',$row['no']) // CHECKED HERE
              ->setCellValue('I23',$row['nama_kk_asal'])
              ->setCellValue('I48',$row['nama_kep_kel_pindah'])
              ->setCellValue('R27',$row['dusun_dukuh_kampung_asal'])
              ->setCellValue('I29',$row['kel_asal'])
              ->setCellValue('W29',$row['kab_asal'])
              ->setCellValue('I31',$row['kec_asal'])
              ->setCellValue('W31',$row['prop_asal'])
              
              ->setCellValue('I37',$row['nama_pemohon'])
              ->setCellValue('R54',$row['dusun_dukuh_kampung_pindah'])
              ->setCellValue('I56',$row['kel_pindah'])
              ->setCellValue('W56',$row['kab_pindah'])
              ->setCellValue('I58',$row['kec_pindah'])
              ->setCellValue('W58',$row['prop_pindah'])

              //I48,W48,I50,W50,N52,W52
              ->setCellValue('I52',$row['alamat_pindah'])
              ->setCellValue('I25',$row['alamat_asal']);

        $sheet->setCellValue('U12',$row['nama_kelurahan']);


        excel_write_char('I21', $row['no_kk_asal'],$sheet,16); // ok       
        excel_write_char('I44', $row['no_kk_pindah'],$sheet,16); // ok       
        excel_write_char('I46', $row['nik_kep_kel_pindah'],$sheet,16); // ok       
        
        excel_write_char('Z25', $row['rt_asal'],$sheet,3);       
        excel_write_char('AG25', $row['rw_asal'],$sheet,3);     

        excel_write_char('W33', $row['tlp_asal'],$sheet,13);       
        // excel_write_char('W52', $row['tlp_pindah'],$sheet,13);       
        excel_write_char('N33', $row['kodepos_asal'],$sheet,5);       
        // excel_write_char('N52', $row['kodepos_pindah'],$sheet,5);       
        excel_write_char('I35', $row['nik_pemohon'],$sheet,16);    

        // Tanggal Kedatangan
        $date = extract_mysql_date_info($row['tgl_kedatangan']);

        excel_write_char('I50', $date['d'],$sheet,2);       
        excel_write_char('L50', $date['m'],$sheet,2);       
        excel_write_char('O50', $date['y'],$sheet,4);       
        // excel_write_char('I57', $row['status_no_kk_tdk_pindah_no'],$sheet,1);       
        excel_write_char('I41', $row['status_no_kk_pindah_no'],$sheet,1);       
        // excel_write_char('I54', $row['jenis_kepindahan_no'],$sheet,1);       
        excel_write_char('Z52', $row['rt_pindah'],$sheet,3);       
        excel_write_char('AG52', $row['rw_pindah'],$sheet,3);     

        // if($row['alasan_pindah_no'] == '7'){
        //     $sheet->setCellValue('Z42',$row['alasan_pindah_lain']);
        // }
        $sheet->setCellValue('W76',$row['ttd_jabatan']);
        $sheet->setCellValue('X80',$row['ttd_nama']);
        $sheet->setCellValue('X81',$row['ttd_nip']);

        
        //daftar-keleuaraga
        $daftar_keluarga_data = json_decode($row['daftar_keluarga_data']);
       
        $baris        = 65;
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
        $row['tanggal_surat']  = format_tanggal_khusus_indo($row['date']);
        $sheet->setCellValue("W74", $row['nama_kelurahan'] . ", " . $row['tanggal_surat']);

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $inputFileName . '"');header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');

        unlink($xlsx_target_path);       
    }
}