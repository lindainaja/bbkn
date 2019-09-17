<?php

 
class Report_data_pegawai extends CI_Controller
{
	public $func = 'report_data_pegawai';
	public $title = 'Laporan Rekap Data Pegawai';
	public $breadcrumbs = '';
	public $menuId = 82;
	public $mechId = 227;

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
		$this->template->add_breadcrumb($breadcrumb);
		$data = array(
			'title' => $this->title,
			'report_url' => base_url($this->func.'/display/'.md5(microtime()))
		);
		// $this->load->view('report',$data);
		$content = $this->twig->render('report.twig.php',$data);

		$this->template->write('content',$content);
		$this->template->render();
	}
	private function _validate_token($token){
		return true;
	}
	public function display($token)
	{
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

		$data = $this->m_report->rekap_data_pegawai($thn,$no_kel);

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

      	$title = "LAPORAN REKAPITULASI DATA PNS DAN NON PNS $nama_bln $nama_thn";
 
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

        $sheet->setCellValue('C4', $nama_prop)
                ->setCellValue('C5',$nama_kab)
                ->setCellValue('C6',$nama_kec)
                ->setCellValue('C7',$nama_kel)
                ->setCellValue('A2',$title)
                

                ->setCellValue('D14',$data['total'])
                ->setCellValue('D10',$data['rekap']['PNS'])
                ->setCellValue('D11',$data['rekap']['CPNS'])
                ->setCellValue('D12',$data['rekap']['Honor'])
                ->setCellValue('D13',$data['rekap']['PTT'])

                ;
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $inputFileName . '"');
        header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');

        unlink($config['output_dir'].$inputFileName);
	}
}//D:/xampp/htdocs/babakan/app/modules/report_data_pegawai/controllers/Report_data_pegawai.php
