<?php

class Report_pelayanan_pernikahan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_report_pelayanan_pernikahan');
		$this->title = 'Laporan Pelayanan Pernikahan';
		$this->layanan = 'Pelayanan Pernikahan';
		$this->func = 'report_pelayanan_pernikahan';

		$this->menu = search_by_column(get_menu_mech(),'menuid',68);//report material stock
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

		$kelurahan 		= $this->m_report_pelayanan_pernikahan->list_kelurahan($filter_no_kel);

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

		$pelayanan = $this->m_report_pelayanan_pernikahan->get_pelayanan($no_kel,$month,$year);

		$data['untuk_nikah'] 			= $pelayanan['total_untuk_nikah'];
		$data['asal_usul'] 				= $pelayanan['total_asal_usul'];
		$data['kematian_suami_istri'] 	= $pelayanan['total_kematian_suami_istri'];
		$data['verbal_wali_hakim'] 		= $pelayanan['total_verbal_wali_hakim'];
		$data['numpang_nikah'] 			= $pelayanan['total_numpang_nikah'];
		$data['penghasilan'] 			= $pelayanan['total_penghasilan'];
		$data['belum_pernah_menikah'] 	= $pelayanan['total_belum_pernah_menikah'];
		$data['duda_janda'] 			= $pelayanan['total_duda_janda'];
		$data['suami_istri']			= $pelayanan['total_suami_istri'];
		$data['wali_nikah'] 			= $pelayanan['total_wali_nikah'];
		$data['pernyataan_cerai']		= $pelayanan['total_pernyataan_cerai'];

		$data['persetujuan_mempelai']		= $pelayanan['total_persetujuan_mempelai'];
		$data['keterangan_orangtua']		= $pelayanan['total_keterangan_orangtua'];
		$data['izin_orangtua']		= $pelayanan['total_izin_orangtua'];
		$data['total']		= $pelayanan['total'];
		
		echo json_encode($data);


	}
	
	
	


}



