<?php

/**
* 
*/
class Report  extends ExcelReport
{
	 
	protected $namaPelayanan = "SK Kematian Suami Istri";

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
}//D:/xampp/htdocs/babakan/app/modules/sk_kematian_suami_istri/libraries/Report.php
