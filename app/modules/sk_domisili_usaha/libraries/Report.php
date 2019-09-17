<?php

/**
* 
*/
class Report  extends ExcelReport
{
	 
	protected $namaPelayanan = "Surat Keterangan Domisili Usaha";

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
	'agama' => 'Agama',
	'jenis_kelamin' => 'Jenis Kelamin',
	'lokasi' => 'Lokasi',
	// 'lingkungan' => 'Lingkungan',
	'lampiran' => 'Lampiran',
	'nama' => 'Nama',
	'kewarganegaraan' => 'Kewarganegaraan',
	'ttl' => 'Tempat/Tanggal Lahir',
	'tempat_lahir' => 'Tempat Lahir',
	'nik' => 'NIK',
	'pasport' => 'Pasport',
	'no_bapl' => 'No Bapl',
	'tgl_bapl' => 'Tanggal Bapl',
	'alamat' => 'Alamat',
	'nama_usaha' => 'Nama Usaha',
	'alamat_usaha' => 'Alamat Usaha',
	'jenis_usaha' => 'Jenis Usaha',
	'jenis_bangunan' => 'Jenis Bangunan',
	'lokasi_lingkungan' => 'Lokasi Lingkungan',
	'luas_bangunan' => 'Luas Bangunan',
	'status_bangunan' => 'Status Bangunan',
	'luas_parkir' => 'Luas Parkir',
	'no_perusahaan' => 'No Perusahaan',
	'batas_utara' => 'Batas Utara',
	'batas_selatan' => 'Batas Selatan',
	'batas_timur' => 'Batas Timur',
	'batas_barat' => 'Batas Barat',
	'sf_toko_ruko' => 'Sf Toko Ruko',
	'sf_gudang' => 'Sf Gudang',
	'ruang_kerja_produksi' => 'Ruang Kerja Produksi',
	'mesin_produksi' => 'Mesin Produksi',
	'jml_kry_pria' => 'Jml Kry Pria',
	'jml_kry_wanita' => 'Jml Kry Wanita',
	'jml_kry_wna' => 'Jml Kry Wna',
	'jml_kry_total' => 'Jml Kry Total',
	'jumlah_karyawan' => 'Jumlah Karyawan',
	'tempat_ibadah' => 'Tempat Ibadah',
	'tanggal_berdiri' => 'Tanggal Berdiri',
	'petugas_1' => 'Petugas 1',
	'petugas_2' => 'Petugas 2',
	'status_jenis_luas_bangunan_fasilitas' => 'Status Jenis Luas Bangunan Fasilitas',
	'status_surat_izin' => 'Status Surat Izin',
	'status_kabul_permohonan' => 'Status Kabul Permohonan',
	'status_hasil_skdtu' => 'Status Hasil Skdtu',
	'status_hasil_jarak_lingkungan' => 'Status Hasil Jarak Lingkungan',
	'status_hasil_periksa_fasilitas' => 'Status Hasil Periksa Fasilitas',
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
		$end_col = 'AW';
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
            $ret['tgl_bapl']  = format_tanggal_khusus_indo($row['tgl_bapl']);
            $ret['tanggal_surat']  = format_tanggal_khusus_indo($row['date']);
            $ret['tanggal_berdiri']  = format_tanggal_khusus_indo($row['tanggal_berdiri']);
            $ret['tahun_sekarang'] = date('Y',time());
            $ret['ttl'] = $ret['tempat_lahir'].', '.$ret['tanggal_lahir'];

         return $ret;   
	}
	
}//D:/xampp/htdocs/babakan/app/modules/sk_domisili_usaha/libraries/Report.php
