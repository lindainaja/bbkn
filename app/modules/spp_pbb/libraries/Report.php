<?php

/**
* 
*/
class Report  extends ExcelReport
{
	 
	protected $namaPelayanan = "Surat Keterangan SPP PBB";

	/*
	Document Option
	*/
	protected $_creator 		= "Simakel";
	protected $_lastModifiedBy	= "Simakel";
	protected $_title			= "Laporan Pelayanan";
	protected $_keywords		= "laporan simakel";
	protected $_outputFilename  = "document.xlsx";
 
	protected $activeSheet;
	protected $tableHeaders = [
	'nama_kel' => 'Kelurahan',
	'tanggal_surat' => 'Tanggal Surat',
	'no' => 'Nomor Surat',
	'lampiran' => 'Lampiran',
	'nama' => 'Nama',
	'alamat' => 'Alamat',
	'letak_objek_pajak' => 'Letak Objek Pajak',
	'nop' => 'Nop',
	'luas_tanah_asal' => 'Luas Tanah Asal',
	// 'luas_tanah' => 'Luas Tanah',
	'luas_bangunan' => 'Luas Bangunan',
	'pc_shm_shgb_ajb' => 'Foto Kopi SHM/SHGB/AJB',
	'lokasi_tanah' => 'Lokasi Tanah',
	'mutasi_nama' => 'Nama Mutasi',
	'mutasi_nop' => 'NOP Mutasi',
	'mutasi_alamat' => 'Alamat Mutasi ',
	'mutasi_luas_tanah' => 'Luas Tanah Mutasi',
	'mutasi_luas_bangunan' => 'Luas Bangunan Mutasi',
	'mutasi_shm_shgb_ajb' => 'Mutasi SHM/SHGB/AJB',
	'mutasi_tanggal' => 'Tanggal Mutasi ',
	'pb_nama' => 'Nama Pembetulan',
	'pb_alamat' => 'Alamat Pembetulan',
	'pb_nop' => 'NOP Pembetulan',
	'pb_luas_tanah' => 'Luas Tanah Pembetulan',
	'pb_luas_bangunan' => 'Luas Bangunan Pembetulan',
	'pb_shm_shgb_ajb' => 'SHM/SHGB/AJB Pembetulan',
	'pb_tanggal' => 'Tanggal Pembetulan',
];
	
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
		$end_col = 'AB';
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
		
		$col = $end_col;
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
	protected function modifyRowData($row){
		if(!is_array($row)){
            return $row;
        }
         $ret = $row;
            $ret = $row;
            
            $ret['tanggal_surat'] = format_tanggal_khusus_indo($row['date']);
            $ret['pb_tanggal'] = format_tanggal_khusus_indo($row['pb_tanggal']);
            $ret['mutasi_tanggal'] = format_tanggal_khusus_indo($row['mutasi_tanggal']);
            
            // $ret['tahun_sekarang'] = date('Y',time());
            return $ret;

           
	}
	
}//D:/xampp/htdocs/babakan/app/modules/spp_pbb/libraries/Report.php
