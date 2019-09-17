<?php

class Report_pindah_datang extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_report_pindah_datang');
		$this->title = 'Laporan Pelayanan Pindah Datang';
		$this->layanan = 'Pelayanan Pindah Datang';
		$this->func = 'report_pindah_datang';

		$this->menu = search_by_column(get_menu_mech(),'menuid',118);//report material stock
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

		$this->template->add_js('app/modules/pindah_datang/assets/scripts/vue.min.js');
        $this->template->add_js('app/modules/pindah_datang/assets/scripts/vue-resource.min.js');
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

		$kelurahan 		= $this->m_report_pindah_datang->list_kelurahan($filter_no_kel);

		$data		= $kelurahan[0];
		$data['periode'] 		= $this->input->post('filter_date');

		$arr_bln = config_item('bulan');
		$data['nama_bulan'] 		= 'BULAN '.strtoupper($arr_bln[number_format($month)]);
		$data['nama_tahun'] 		= 'TAHUN '.$year;

		// $html = $this->load->view($this->func.'/load_data', $data);
	

		$data['report_data'] = $this->m_report_pindah_datang->get_pelayanan_pindat($filter_no_kel,$month,$year);

		echo json_encode($data);
	}
	
	function get_total_data(){
		$no_kel = $this->input->post('no_kel');
		$date = explode('/',$this->input->post('periode'));
		$month = $date[0];
		$year = $date[1];

		$pelayanan_pindat = $this->m_report_pindah_datang->get_pelayanan_pindat($no_kel,$month,$year);

		// $data['permohonan'] = $pelayanan_pindat['total_permohonan'];
		// $data['perubahan'] = $pelayanan_pindat['total_perubahan'];
		// $data['hilang'] = $pelayanan_pindat['total_hilang'];
		
		echo json_encode($pelayanan_pindat);


	}
	
	
	


}//D:/xampp/htdocs/babakan/app/modules/report_pelayanan_pindat/controllers/Report_pelayanan_pindat.php
