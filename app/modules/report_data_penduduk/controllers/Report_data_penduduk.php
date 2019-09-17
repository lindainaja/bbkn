<?php

 
class Report_data_penduduk extends MX_Controller
{
	public $func = 'report_data_penduduk';
	public $title = 'Laporan Rekap Data Penduduk';
	public $breadcrumbs = '';
	public $menuId = 83;
	public $mechId = 228;

	public function __construct()
	{
		parent::__construct();
		$view_dir = realpath(__DIR__ . '/../views/');
		// echo $view_dir;
		$this->twig->getEnv()->getLoader()->addPath($view_dir);

		search_by_column($this->menuId,'menu_mechanismid',$this->mechId );
	}
	public function index()
	{
		
		$this->template->add_css('public/assets/bootstrap-fileupload/bootstrap-fileupload.css');
		$this->template->add_js('public/assets/bootstrap-fileupload/bootstrap-fileupload.min.js');

		##datepicker
		$this->template->add_css('public/assets/bootstrap-datepicker/css/datepicker.css');
		$this->template->add_js('public/assets/bootstrap-datepicker/js/bootstrap-datepicker.js');

		$this->template->add_css('public/assets/data-tables/bootstrap3/dataTables.bootstrap.css');
		$this->template->add_js('public/assets/data-tables/jquery.dataTables.js');
		$this->template->add_js('public/assets/data-tables/bootstrap3/dataTables.bootstrap.js');
		$this->template->add_js('public/assets/data-tables/soring/date-eu.js');

		$this->template->add_css('public/addon/select2/select2.min.css');
		$this->template->add_js('public/addon/select2/select2.full.min.js');

		// $this->template->add_js('app/modules/'.$this->func.'/assets/js/'.'list.js');
		// $this->template->add_js('app/modules/'.$this->func.'/assets/js/'.'action.js');

		$this->template->add_title(strtoupper($this->title));


		$breadcrumb = array(
			'dashboard'	  => 'Dashboard',
			$this->func   => $this->title,
		);
		$all_key = base64_encode('all');
		$o_lingkungan = array(
			$all_key => '-- ALL --',
		);
		foreach (config_item('opt_lingkungan') as $key => $value) {
			$k = base64_encode($key);
			$o_lingkungan[$k] = strtoupper($value);
		}
		$this->template->add_breadcrumb($breadcrumb);
		$data = array(
			'title' => $this->title,
			'report_url' => base_url($this->func.'/display/'.md5(microtime())),
			'dropdown_lingkungan' => form_dropdown('lingkungan',$o_lingkungan,'','id="lingkungan" class="wajib_isi select2 form-control" style="width:100%" '),
		);
		// $this->load->view('report',$data);
		$content = $this->twig->render('report.twig.php',$data);

		$this->template->write('content',$content);
		$this->template->render();
	}

	private function _validate_token($token){
		return true;
	}
	public function display($token,$lingkungan)
	{
		$lingkungan = base64_decode($lingkungan);
		if($lingkungan=='all'){
			$lingkungan='';
		}
		if(!$this->_validate_token($token)){
			return;
		}
		$date = date('Y-m-d');
		$filter_date = explode('-', $date);
		$bln = $filter_date[1];
		$thn = $filter_date[0];
		$arr_bln = config_item('bulan');
		$nama_bln = 'BULAN '.strtoupper($arr_bln[number_format($bln)]);
		$nama_thn = 'TAHUN '.$thn;
		$no_kel  = config_item('default_no_kel');
		$this->load->model('m_report');

		$data = $this->m_report->rekap_data_penduduk_by_umur('',$no_kel,$lingkungan);
		$data_jk = $this->m_report->rekap_data_penduduk_by_gender('',$no_kel,$lingkungan);
		$jml_kk = $this->m_report->rekap_data_penduduk_get_distict_no_kk_count('',$no_kel,$lingkungan);
		// print_r($data);
		// exit();
		// $data = $this->m_report->rekap_data_penduduk($thn,$no_kel);

		$template_dir = __DIR__ .'/../template/reports/';
        $config = array(
            'template_dir' => $template_dir,
            'output_dir' => $template_dir . 'output/',
            'output_image_dir' => $template_dir . 'output/images/',
        );

   		$nama_kab  = config_item('default_nama_kab');
   		$nama_prop = config_item('default_nama_prop');
   		$nama_kec  = config_item('default_nama_kec');
   		$nama_kel  = config_item('default_nama_kel');

      	$title = "LAPORAN REKAPITULASI DATA PENDUDUK $nama_bln $nama_thn";
 
        // START READING EXCEL FILE
        $templateFileName = $config['output_dir'].'report.xlsx';

        $inputFileName = $this->func."_".date('Ymdhis').'.xlsx';
        
        copy($templateFileName, $config['output_dir'].$inputFileName);
        
        /*check point*/

        $inputFileType = PHPExcel_IOFactory::identify($config['output_dir'].$inputFileName);
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($config['output_dir'].$inputFileName);


        $objPHPExcel->setActiveSheetIndex(0);

        // Add column headers
        $sheet = $objPHPExcel->getActiveSheet();
        if(empty($lingkungan)){
        	$lingkungan = 'Semua Lingkungan';
        }
        $sheet->setCellValue('C4', $nama_prop)
                ->setCellValue('C5',$nama_kab)
                ->setCellValue('C6',$nama_kec)
                ->setCellValue('C7',$nama_kel)
                ->setCellValue('A2',$title)
                

                ->setCellValue('D12',$data_jk['rekap']['l']) 
                ->setCellValue('D13',$data_jk['rekap']['p']) 
                ->setCellValue('D15',$data_jk['total']) 

                ->setCellValue('F18',$data['rekap']['0_5']) 
                ->setCellValue('F19',$data['rekap']['6_12']) 
                ->setCellValue('F20',$data['rekap']['13_15']) 
                ->setCellValue('F21',$data['rekap']['16_18']) 
                ->setCellValue('F22',$data['rekap']['19_60']) 
                ->setCellValue('F23',$data['rekap']['_60']) 
                ->setCellValue('F24',$data['total']) 

                ->setCellValue('E18',$data['rekap_jk']['0_5']['p']) 
                ->setCellValue('E19',$data['rekap_jk']['6_12']['p']) 
                ->setCellValue('E20',$data['rekap_jk']['13_15']['p']) 
                ->setCellValue('E21',$data['rekap_jk']['16_18']['p']) 
                ->setCellValue('E22',$data['rekap_jk']['19_60']['p']) 
                ->setCellValue('E23',$data['rekap_jk']['_60']['p']) 
                ->setCellValue('E24',$data['total_jk_p']) 	


                ->setCellValue('D18',$data['rekap_jk']['0_5']['l']) 
                ->setCellValue('D19',$data['rekap_jk']['6_12']['l']) 
                ->setCellValue('D20',$data['rekap_jk']['13_15']['l']) 
                ->setCellValue('D21',$data['rekap_jk']['16_18']['l']) 
                ->setCellValue('D22',$data['rekap_jk']['19_60']['l']) 
                ->setCellValue('D23',$data['rekap_jk']['_60']['l']) 
                ->setCellValue('D24',$data['total_jk_l']) 


                ->setCellValue('D9',$jml_kk) 

                // SET LINGKUNGAN
                ->setCellValue('B12',$lingkungan) 
                ->setCellValue('B18',$lingkungan) 

                ;

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $inputFileName . '"');
        header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');

        unlink($config['output_dir'].$inputFileName);
	}
}//D:/xampp/htdocs/babakan/app/modules/report_data_penduduk/controllers/Report_data_penduduk.php
