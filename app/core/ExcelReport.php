<?php

class ExcelReport
{
	protected $phpexcel;
	protected $ci;
	protected $data;
	protected $namaPelayanan = "";

	/*
	Document Option
	*/
	protected $_creator 		= "";
	protected $_lastModifiedBy	= "";
	protected $_title			= "";
	protected $_keywords		= "";
	protected $_outputFilename  = "document.xlsx";

	protected $style = array();
	protected $activeSheet;
	protected $tableHeaders;
	protected $end_col;
	function __construct()
	{
		$this->ci =& get_instance();
		$this->phpexcel = new PHPExcel();
		$this->ci->report = $this;
		$this->ci->load->helper('template');

		$this->initStyle();

		//
		$this->phpexcel->setActiveSheetIndex(0);
		$this->activeSheet = $this->phpexcel->getActiveSheet();
	}
	public function setEndCol($col)
	{
		$this->end_col = $col;
	}
	public function setTitle($title)
	{
		$this->namaPelayanan = $title;
	}
	public function setTableHeader($tableHeaders)
	{
		$this->tableHeaders = $tableHeaders;
	}
	public function set_callback_row_data($obj,$method)
	{
		$this->_callback_modify_row_data = [$obj,$method]; 
	}
	protected function setCellValue($a,$b){
		return $this->activeSheet->setCellValue($a,$b);
	}
	protected function mergeCells($a){
		return $this->activeSheet->mergeCells($a);
	}
	protected function setStyle($a,$b){
		$this->activeSheet->getStyle($a)->applyFromArray($this->style[$b]);
	}
	protected function setBorderStyle($a,$type){
		switch ($type) {
			case 'top':
				$this->activeSheet->getStyle($a)->getBorders()->getTop()->setBorderStyle( PHPExcel_Style_Border::BORDER_THICK );
				break;
			case 'bottom':
				$this->activeSheet->getStyle($a)->getBorders()->getBottom()->setBorderStyle( PHPExcel_Style_Border::BORDER_THICK );
				
				break;
			case 'left':
				$this->activeSheet->getStyle($a)->getBorders()->getLeft()->setBorderStyle( PHPExcel_Style_Border::BORDER_THICK );
				

				break;
			case 'right':
				$this->activeSheet->getStyle($a)->getBorders()->getRight()->setBorderStyle( PHPExcel_Style_Border::BORDER_THICK );
				 
				break; 
		}
	}
 
	protected function initStyle(){
		
		$this->style = array(
			'table_outter'	=> array('borders' => array('allborders' => array('style' => PHPExcel_Style_Border::BORDER_THIN,
									'color' => array('argb' => PHPExcel_Style_Color::COLOR_BLACK)))),
		
			'header_title' => array('alignment' => array('horizontal' => 'center'), 'font' => array('bold' => true, 
										'size' => 12, 'name' => 'Calibri')),

			'header_title_big' => array('alignment' => array('horizontal' => 'center'), 'font' => array('bold' => false, 
										'size' => 16, 'name' => 'Calibri')),

			'header_form' => array('alignment' => array('horizontal' => 'center', 'vertical'   => 'center'), 
										'font' => array('bold' => true, 'size' => 11, 'name' => 'Calibri')),

			'header_form_l' => array('alignment' => array('horizontal' => 'left', 'vertical'   => 'center'), 
										'font' => array('bold' => true, 'size' => 11, 'name' => 'Calibri')),
			
			'th_no' => array('font' => array('size' => 7, 'bold' =>true, 'name' => 'Calibri'), 
								'alignment' => array('horizontal' => 'center', 'vertical'  => 'center')),								
			
			'data' => array('font' => array('size' => 10, 'bold' =>false, 'name' => 'Calibri'), 
								'alignment' => array('horizontal' => 'left', 'vertical'  => 'center', 'wrap' => true)),	

			'data_jml' => array('font' => array('size' => 10, 'bold' =>false, 'name' => 'Calibri'), 
								'alignment' => array('horizontal' => 'right', 'vertical'  => 'center', 'wrap' => true)),

			'data_total' => array('font' => array('size' => 10, 'bold' =>false, 'name' => 'Calibri'), 
								'alignment' => array('horizontal' => 'center', 'vertical'  => 'center', 'wrap' => true)),								
								
			'data_kolom' => array('font' => array('size' => 10, 'bold' =>false, 'name' => 'Calibri'), 
								'alignment' => array( 'vertical'  => 'center', 'wrap' => true)),		

			'data_kolom_depo' => array('font' => array('size' => 10, 'bold' =>false, 'name' => 'Calibri'), 
								'alignment' => array( 'vertical'  => 'center', 'wrap' => true)),		
								
			'noborder' => array('border' => array('size' => 0, 'color' => array('argb' => PHPExcel_Style_Color::COLOR_WHITE))),
										
			'right' => array('alignment' => array('horizontal' => 'right', 'vertical' => 'center')),
			
			'center' => array('alignment' => array('horizontal' => 'center', 'vertical' => 'center')),
			
			'outlines' => array('borders' => array('outline' => array('style' => PHPExcel_Style_Border::BORDER_THICK, 
								'color' => array('argb' => PHPExcel_Style_Color::COLOR_BLACK)))),
		
			'noborderno' => array('borders' => array('vertical' => array('style' => PHPExcel_Style_Border::BORDER_THICK, 
								'color' => array('argb' => PHPExcel_Style_Color::COLOR_WHITE)),'horizontal' => array(
								'style' => PHPExcel_Style_Border::BORDER_THICK,'color' => array(
								'argb' => PHPExcel_Style_Color::COLOR_WHITE)))),
			
			'footer' => array('font' => array('bold' => true, 'name' => 'Arial'))
		);
	}
	public function setData($data)
	{
		$this->data = $data;
	}
	protected function setDocumentProperties(){
		$this->phpexcel->getProperties()->setCreator($this->_creator)
							  ->setLastMOdifiedBy($this->_lastModifiedBy)
							  ->setTitle($this->_title)
							  ->setKeywords($this->_keywords);
	}
	protected function setDocumentStyle(){
		// $this->phpexcel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_TOP);
		// $this->phpexcel->getDefaultStyle()->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

		//SET FONT
		// $this->phpexcel->getDefaultStyle()->getFont()->setName("LUcida Sans Unicode");
		// $this->phpexcel->getDefaultStyle()->getFont()->setSize(12);
	}
	protected function setDocumentPageSetup(){
		$this->activeSheet->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE)
									->setFitToWidth(1)
									->setFitToHeight(0)
									->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_LEGAL)
									->setScale(75);

		$this->activeSheet->getPageMargins()->setTop(0.5)
										->setRight(0.2)
										->setLeft(0.3)
										->setBottom(3)
										->setHeader(0.5)
										->setFooter(3);	
	}
	
	protected function setDocumentHeader(){
		$this->activeSheet->getHeaderFooter()->setOddHeader("&C&B&16" . $this->_title );
	}
	protected function setDocumentFooter(){
		$this->activeSheet->getHeaderFooter()->setOddFooter("&CLaman &P dari &N");
	}

	protected function modifyRowData(&$row){
		if(!is_array($row)){
            return $row;
        }
        // print_r($this->_callback_modify_row_data);
        // die();
        if( count($this->_callback_modify_row_data) == 2){
        	// print_r($this->_callback_modify_row_data);

			$context 	= $this->_callback_modify_row_data[0];
			$method = $this->_callback_modify_row_data[1];
        	return $this->_execute_callback_modify_row_data($context,$method,$row);
        }
	}

	private function _execute_callback_modify_row_data(&$context,$method,&$row){
		return $context->{$method}($row);
	}
	protected function generate(){
		$this->setDocumentProperties();
		$this->setDocumentHeader();
		$this->setDocumentFooter();
		$this->setDocumentPageSetup();
		$this->setDocumentStyle();
		$this->setDocumentBody();

		// Give spreadsheet a title
		$this->activeSheet->setTitle($this->_title);
		
		// Generate Excel file and download
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$this->_outputFilename.'"');
		header('Cache-Control: max-age=0');
		
		$writer = PHPExcel_IOFactory::createWriter($this->phpexcel, 'Excel2007');
		$writer->save('php://output');
		exit;
	}
	public function create($filename)
	{
		$this->_outputFilename = $filename;
		$this->generate();
	}

	protected function setDocumentBody(){

		$subtitle 				= __T( "LAPORAN PELAYANAN KELURAHAN {{nama_bln}} {{nama_thn}}", $this->data );
		$propinsi_label			= "Provisi";
		$kota_kabupaten_label	= "Kota/Kabupaten";
		$kecamatan_label		= "Kecamatan";
		$pelayanan_label		= "Pelayanan";

		// START WRITING
	 

		// WRITE SUBTITLE
		$this->setCellValue("A1", $subtitle);
		// MERGE SUBTITLE
		$this->mergeCells("A1:K1");
		$this->setStyle("A1:K1","header_title_big");

		// SET HEIGHT

		// WRITE PROVINCE
		$this->setCellValue("A3", $propinsi_label);
		$this->setCellValue("C3", ": " . $this->data['default_nama_prop']);
		// MERGE
		$this->mergeCells("A3:B3");
		$this->setStyle("A3:C3",'header_form_l');
		// WRITE KAB
		$this->setCellValue("A4", $kota_kabupaten_label);
		$this->setCellValue("C4", ": " . $this->data['default_nama_kab']);
		// MERGE
		$this->mergeCells("A4:B4");
		$this->setStyle("A4:C4",'header_form_l');

		// WRITE KEC
		$this->setCellValue("A5", $kecamatan_label);
		$this->setCellValue("C5", ": " . $this->data['default_nama_kec']);
		// MERGE
		$this->mergeCells("A5:B5");
		$this->setStyle("A5:C5",'header_form_l');

		// WRITE PEL
		$this->setCellValue("A6", $pelayanan_label);
		$this->setCellValue("C6", ": " . $this->namaPelayanan);
		// MERGE
		$this->mergeCells("A6:B6");
		$this->setStyle("A6:C6",'header_form_l');

		// WRITE TABLE
		$cellStart = "A8";
		$rowStart  = 8;
		$colStart  = "A";

		
		$tableColumnWidth = array(

		);
		$tableColumns = array_values($this->tableHeaders);
		$tableFields  = array_keys($this->tableHeaders);

		// $tableColumns = array_unshift($tableColumns, "NO");
		// WRITE TABLE COLUMN TITLE
		$col 	= $colStart;
		$rownum = $rowStart;
		$end_col = $this->end_col;
		foreach ($tableColumns as $columnTitle) {
		 	if($col == 'C'){
				$this->mergeCells("B{$rownum}:C{$rownum}");
				$col = 'D';
			}
		 	$this->setCellValue($col . $rownum, $columnTitle);
		 	$this->setStyle($col . $rownum,"header_form");
		 	if($col == 'B'){
		 		
		 		$this->activeSheet->getColumnDimension($col)->setWidth(11.71);
		 	}
		 	else if ($col == $end_col) {
		 		$this->activeSheet->getColumnDimension($col)->setWidth(40);
				
				
			} else {
				$this->activeSheet->getColumnDimension($col)->setAutoSize(true);
			}
		 	$col++;
		} 
		
		$col = $this->end_col;
		$this->setStyle("{$colStart}{$rowStart}:{$col}{$rownum}","table_outter");


		$col 	= $colStart;
		$rownum++;
		// WRITE DATA 
		$index = 1;
		foreach ($this->data['results'] as $row) {
			$row = $this->modifyRowData($row);
			$row['index'] = $index++;
			foreach ($tableFields as $field) {
				if($col == 'C'){
					$this->mergeCells("B{$rownum}:C{$rownum}");
					$col = 'D';
				}
				$this->setCellValue($col . $rownum, $row[$field]);
				
				if($field == 'index'){
					$this->setStyle($col . $rownum, "th_no");
				}else{
					$this->setStyle($col . $rownum, "data");

				}

				$col++;
			}

			$rownum++;
			$col = $colStart;
		}
		$this->setBorderStyle("A8:{$end_col}8","top");

		$rownum = $rownum-1;
		$this->setBorderStyle("{$end_col}8:{$end_col}{$rownum}","right");
		$this->setBorderStyle("A8:A{$rownum}","left");

		$this->setBorderStyle("A{$rownum}:{$end_col}{$rownum}","bottom");

	}
}