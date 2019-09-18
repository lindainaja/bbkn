<?php

/**
* 
*/
class Report  extends ExcelReport
{
	 
	protected $namaPelayanan = "SK Persetujuan Mempelai";

	/*
	Document Option
	*/
	protected $_creator 		= "Simakel";
	protected $_lastModifiedBy	= "Simakel";
	protected $_title			= "Laporan Pelayanan";
	protected $_keywords		= "laporan simakel";
	protected $_outputFilename  = "document.xlsx";
 
	protected $activeSheet;
	protected $tableHeaders = array(
			'no_kel' => 'Kelurahan',
			'date' => 'Tanggal',
			'cs_nama' => 'Nama Calon Suami',
			'cs_alias' => 'Alias Calon Suami',
			'cs_bin' => 'Bin',
			'cs_nik' => 'NIK',
			'cs_ttl' => 'Tempat/Tanggal Lahir Calon Suami',
			'cs_kewarganegaraan' => 'Kewarganegaraan Calon Suami',
			'cs_agama' => 'Agama',
			'cs_pekerjaan' => 'Pekerjaan',
			'cs_alamat' => 'Alamat Calon Suami',
			'ci_nama' => 'Nama Calon Istri',
			'ci_alias' => 'Alias Calon Istri',
			'ci_binti' => 'Binti',
			'ci_nik' => 'NIK',
			'ci_ttl' => 'Tempat/Tanggal Lahir Calon Istri',
			'ci_kewarganegaraan' => 'Kewarganegaraan Calon Istri',
			'ci_agama' => 'Agama Calon Istri',
			'ci_pekerjaan' => 'Pekerjaan Calon Istri',
			'ci_alamat' => 'Alamat Calon Istri' ,


	);
	
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
		$lastColumn='U';

		
		$tableColumnWidth = array(

		);
		$tableColumns = array_values($this->tableHeaders);
		$tableFields  = array_keys($this->tableHeaders);

		// $tableColumns = array_unshift($tableColumns, "NO");
		// WRITE TABLE COLUMN TITLE
		$col 	= $colStart;
		$rownum = $rowStart;

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
		 	else if ($col == $lastColumn) {
		 		$this->activeSheet->getColumnDimension($col)->setWidth(40);
				
				
			} else {
				$this->activeSheet->getColumnDimension($col)->setAutoSize(true);
			}
		 	$col++;
		} 
		
		$col = $lastColumn;
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
		$this->setBorderStyle("A8:{$lastColumn}8","top");

		$rownum = $rownum-1;
		$this->setBorderStyle("{$lastColumn}8:{$lastColumn}{$rownum}","right");
		$this->setBorderStyle("A8:A{$rownum}","left");

		$this->setBorderStyle("A{$rownum}:{$lastColumn}{$rownum}","bottom");

	}
	protected function modifyRowData($row){
		if(!is_array($row)){
            return $row;
        }
        $ret = $row;
       $ret['ci_tanggal_lahir']  = format_tanggal_khusus_indo($row['ci_tanggal_lahir']);
            $ret['cs_tanggal_lahir']  = format_tanggal_khusus_indo($row['cs_tanggal_lahir']);
            $ret['tanggal_surat']  = format_tanggal_khusus_indo($row['date']);
            // $ret['tanggal_hilang'] = format_tanggal_khusus_indo($row['tgl_hilang']);
            $ret['no_kel'] = $row['nama_kel'].' ';
            $ret['cs_ttl'] = $row['cs_tempat_lahir'].', '.$ret['cs_tanggal_lahir'];
            $ret['ci_ttl'] = $row['ci_tempat_lahir'].', '.$ret['ci_tanggal_lahir'];
            $ret['ci_alamat'] = $row['ci_alamat_a'].' '.$ret['ci_alamat_b'];
            $ret['cs_alamat'] = $row['cs_alamat_a'].' '.$ret['cs_alamat_b'];

	    return $ret;
	}
	
}//D:/xampp/htdocs/babakan/app/modules/sk_persetujuan_mempelai/libraries/Report.php
