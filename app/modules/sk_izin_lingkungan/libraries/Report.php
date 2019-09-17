<?php

/**
* 
*/
class Report  extends ExcelReport
{
	 
	protected $namaPelayanan = "Surat Keterangan Izin Lingkungan";

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
	'btd_1' => 'Btd 1',
	'btd_2' => 'Btd 2',
	'btd_3' => 'Btd 3',
	'btd_4' => 'Btd 4',
	'btd_5' => 'Btd 5',
	'btd_1_jabatan' => 'Btd 1 Jabatan',
	'btd_2_jabatan' => 'Btd 2 Jabatan',
	'btd_3_jabatan' => 'Btd 3 Jabatan',
	'btd_4_jabatan' => 'Btd 4 Jabatan',
	'btd_5_jabatan' => 'Btd 5 Jabatan',
	'jenis_kegiatan' => 'Jenis Kegiatan',
	'nama_kegiatan' => 'Nama Kegiatan',
	'keperluan' => 'Keperluan',
	'nama' => 'Nama',
	'jenis_kelamin' => 'Jenis Kelamin',
	'ttl' => 'Tempat/Tanggal Lahir',
	'tempat_lahir' => 'Tempat Lahir',
	'pekerjaan' => 'Pekerjaan',
	'alamat' => 'Alamat',
	'nama_acara' => 'Nama Acara',
	'tgl_acara' => 'Tanggal Acara',
	'hari_acara_ext' => 'Hari Acara Ext',
	'jam_acara' => 'Jam Acara',
	'alamat_acara' => 'Alamat Acara',
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
		$end_col = 'S';
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
            $gender = config_item('gender');
            $ret['jenis_kelamin']  = $gender[$row['jk']];
            $ret['tanggal_lahir']  = format_tanggal_khusus_indo($row['tanggal_lahir']);
            $ret['tanggal_surat']  = format_tanggal_khusus_indo($row['date']);
            $ret['tgl_acara'] = format_tanggal_khusus_indo($row['tgl_acara']);
            $ret['hari_acara'] = get_nama_hari($row['tanggal_acara']);
            // $ret['nama_acara'] = $ret['acara'];
            $ret['jam_acara'] = date('H:i',strtotime($row['tanggal_acara'].' '.$ret['jam_acara']));
            $ret['ttl'] = $row['tempat_lahir'].', '.$ret['tanggal_lahir'];
            // $ret['tahun_sekarang'] = date('Y',time());

            $jbts = [1,2,3,4,5];
            foreach ($jbts as $no) {
                $key = 'btd_'.$no.'_jabatan';
                if(!empty($ret[$key])){
                    $ret[$key] = '( ' . $ret[$key] . ')';
                }
            }
           return $ret;
	}
	
}//D:/xampp/htdocs/babakan/app/modules/sk_izin_lingkungan/libraries/Report.php
