<?php

class Report_pelayanan_domisili extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_report_pelayanan_domisili');
		$this->title = 'Laporan Pelayanan Domisili';
		$this->layanan = 'Pelayanan Domisili';
		$this->func = 'report_pelayanan_domisili';

		$this->menu = search_by_column(get_menu_mech(),'menuid',66);//report material stock
		##check akses menu
		menu_check_role($this->menu);

		$this->no_prop		= $this->session->userdata('log_prop');
		$this->no_kab		= $this->session->userdata('log_kab');
		$this->no_kec		= $this->session->userdata('log_kec');
		$this->no_kel		= $this->session->userdata('log_kel');

	}

	function index() {
		
		##datepicker
		$this->template->add_css('public/assets/bootstrap-datepicker/css/datepicker.css');
		$this->template->add_js('public/assets/bootstrap-datepicker/js/bootstrap-datepicker.js');

		$this->template->add_css('public/addon/select2/select2.min.css');
		$this->template->add_js('public/addon/select2/select2.full.min.js');


		$this->template->add_js('public/js/excellentexport.js');
		$this->template->add_js('app/modules/'.$this->func.'/assets/js/'.'list.js');


		$this->template->add_title(strtoupper($this->title));
		$breadcrumb = array(
			'dashboard'	=> 'Beranda',
			$this->func 	=> $this->title,
		);
		$this->template->add_breadcrumb($breadcrumb);

		$data['kel'] 	= kel_2_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);

		$this->template->write_view('content',$this->func.'/list',$data);
		$this->template->render();
	}
	
	function load_data(){
		$filter_no_kel = $this->input->post('filter_no_kel');
		$date = explode('/',$this->input->post('filter_date'));
		$month = $date[0];
		$year = $date[1];

		$kelurahan 		= $this->m_report_pelayanan_domisili->list_kelurahan($filter_no_kel);

		$data['kelurahan'] 		= $kelurahan;
		$data['periode'] 		= $this->input->post('filter_date');

		$arr_bln = config_item('bulan');
		$data['nama_bln'] 		= 'BULAN '.strtoupper($arr_bln[number_format($month)]);
		$data['nama_thn'] 		= 'TAHUN '.$year;

		$html = $this->load->view($this->func.'/load_data', $data);
		echo $html;
	}
	
	function get_total_data(){
		$no_kel = $this->input->post('no_kel');
		$date = explode('/',$this->input->post('periode'));
		$month = $date[0];
		$year = $date[1];

		$pelayanan = $this->m_report_pelayanan_domisili->get_pelayanan_domisili($no_kel,$month,$year);

		$data['wni'] = $pelayanan['total_wni'];
		$data['wna'] = $pelayanan['total_wna'];
		$data['domisili_kk'] = $pelayanan['total_dkk'];
		$data['domisili_kantor'] = $pelayanan['total_dk'];
		$data['domisili_penduduk'] = $pelayanan['total_dp'];
		$data['tempat_usaha'] = $pelayanan['total_tu'];
		$data['usaha_pasar'] = $pelayanan['total_up'];
		$data['izin_usaha'] = $pelayanan['total_iu'];
		$data['domisili_usaha'] = $pelayanan['total_du'];
		$data['domisili_usaha_new'] = $pelayanan['total_dun'];
		$data['domisili_yayasan'] = $pelayanan['total_dy'];
		$data['surat_keterangan_usaha'] = $pelayanan['total_sku'];
		$data['total'] = $pelayanan['total'];
	

		
		echo json_encode($data);


	}
	
	
	


}//D:/xampp/htdocs/babakan/app/modules/report_pelayanan_domisili/controllers/Report_pelayanan_domisili.php
