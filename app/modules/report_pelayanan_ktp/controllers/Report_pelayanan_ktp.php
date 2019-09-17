<?php

class Report_pelayanan_ktp extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_report_pelayanan_ktp');
		$this->title = 'Laporan Pelayanan KTP';
		$this->layanan = 'Pelayanan KTP';
		$this->func = 'report_pelayanan_ktp';

		$this->menu = search_by_column(get_menu_mech(),'menuid',64);//report material stock
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

		$kelurahan 		= $this->m_report_pelayanan_ktp->list_kelurahan($filter_no_kel);

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

		$pengantar_baru = $this->m_report_pelayanan_ktp->get_data_pengantar_ktp($no_kel,$month,$year,'BARU');
		$pengantar_perpanjang = $this->m_report_pelayanan_ktp->get_data_pengantar_ktp($no_kel,$month,$year,'PERPANJANGAN');
		$pengantar_penggantian = $this->m_report_pelayanan_ktp->get_data_pengantar_ktp($no_kel,$month,$year,'PENGGANTIAN');

		$permohonan_baru = $this->m_report_pelayanan_ktp->get_data_permohonan_ktp($no_kel,$month,$year,'BARU');
		$permohonan_perpanjang = $this->m_report_pelayanan_ktp->get_data_permohonan_ktp($no_kel,$month,$year,'PERPANJANGAN');
		$permohonan_penggantian = $this->m_report_pelayanan_ktp->get_data_permohonan_ktp($no_kel,$month,$year,'PENGGANTIAN');

		$proses = $this->m_report_pelayanan_ktp->get_data_proses_ktp($no_kel,$month,$year);
		$ralat = $this->m_report_pelayanan_ktp->get_data_ralat_ktp($no_kel,$month,$year);
		$hilang = $this->m_report_pelayanan_ktp->get_data_hilang_ktp($no_kel,$month,$year);
		
		$data['pengantar_baru'] = $pengantar_baru;
		$data['pengantar_perpanjang'] = $pengantar_perpanjang;
		$data['pengantar_penggantian'] = $pengantar_penggantian;
		$data['permohonan_baru'] = $permohonan_baru;
		$data['permohonan_perpanjang'] = $permohonan_perpanjang;
		$data['permohonan_penggantian'] = $permohonan_penggantian;
		$data['proses'] = $proses;
		$data['ralat'] = $ralat;
		$data['hilang'] = $hilang;
		
		echo json_encode($data);


	}
	
	
	


}



