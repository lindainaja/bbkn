<?php

/**
* 
*/
class Report  extends ExcelReport
{
	 
	protected $namaPelayanan = "SK Beda Nama Rekening";

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
			'nama_kel' => 'Kelurahan',
	'tanggal_surat' => 'Tanggal Surat',
	'no' => 'Nomor',
	// 'lgktp' => 'Data di KTP',
	'nama' => 'Nama (Di KTP)',
	'no_ktp' => 'Nomor KTP',
	'ttl' => 'Tempat/Tanggal Lahir (Di KTP)',
	'jenis_kelamin' => 'Jenis Kelamin (Di KTP)',
	'status_perkawinan' => 'Status Perkawinan (Di KTP)',
	'pekerjaan' => 'Pekerjaan (Di KTP)',
	'agama' => 'Agama (Di KTP)',
	'alamat' => 'Alamat (Di KTP)',
	// 'lg_REK' => 'Data di Rekening',
	'nama_2' => 'Nama (Di Rekening)',
	'no_rek' => 'Nomor Rekening',
	'ttl_2' => 'Tempat/Tanggal Lahir (Di Rekening)',
	'jenis_kelamin_2' => 'Jenis Kelamin (Di Rekening)',
	'status_perkawinan_2' => 'Status Perkawinan',
	'pekerjaan_2' => 'Pekerjaan (Di Rekening)',
	'agama_2' => 'Agama (Di Rekening)',
	'alamat_2' => 'Alamat (Di Rekening)',
	// 'lgktpxxx' => 'Keterangan Data',
	// 'data_a' => 'Nama Data Pertama',
	// 'data_b' => 'Nama Data Kedua',
	// 'ttd' => '',


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
		 	else if ($col == 'T') {
		 		$this->activeSheet->getColumnDimension($col)->setWidth(40);
				
				
			} else {
				$this->activeSheet->getColumnDimension($col)->setAutoSize(true);
			}
		 	$col++;
		} 
		
		$col = "T";
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
		$this->setBorderStyle("A8:T8","top");

		$rownum = $rownum-1;
		$this->setBorderStyle("T8:T{$rownum}","right");
		$this->setBorderStyle("A8:A{$rownum}","left");

		$this->setBorderStyle("A{$rownum}:T{$rownum}","bottom");

	}
	protected function modifyRowData($row){
		if(!is_array($row)){
            return $row;
        }
        $ret = $row;
        $gender = config_item('gender');
        $ret['jenis_kelamin']  = $gender[$row['jk']];
        $ret['jenis_kelamin_2']  = $gender[$row['jk_2']];
        $ret['tanggal_lahir']  = format_tanggal_khusus_indo($row['tanggal_lahir']);
        $ret['tanggal_surat']  = format_tanggal_khusus_indo($row['date']);
        $ret['tanggal_lahir_2'] = format_tanggal_khusus_indo($row['tanggal_lahir_2']);
        $ret['nama_kelurahan'] = $row['nama_kec'].' ';
        $ret['ttl'] = $row['tempat_lahir'] . ", ".$ret['tanggal_lahir'];
        $ret['ttl_2'] = $row['tempat_lahir_2'] . ", ".$ret['tanggal_lahir_2'];

	    return $ret;
	}
	
}//D:/xampp/htdocs/babakan/app/modules/sk_bn_rekening/libraries/Report.php
