<?php

/**
* 
*/
class Report  extends ExcelReport
{
	 
	protected $namaPelayanan = "Surat Keterangan Asal - Usul";

	/*
	Document Option
	*/
	protected $_creator 		= "Simakel";
	protected $_lastModifiedBy	= "Simakel";
	protected $_title			= "Laporan Pelayanan";
	protected $_keywords		= "laporan simakel";
	protected $_outputFilename  = "document.xlsx";
 	// protected $_callback_modify_row_data = [];
	protected $activeSheet;
	
}//D:/xampp/htdocs/babakan/app/modules/sk_asal_usul/libraries/Report.php
