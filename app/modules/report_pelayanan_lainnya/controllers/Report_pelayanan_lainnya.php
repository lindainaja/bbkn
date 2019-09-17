<?php

class Report_pelayanan_lainnya extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_report_pelayanan_lainnya');
		$this->title = 'Laporan Pelayanan Lainnya';
		$this->layanan = 'Pelayanan Lainnya';
		$this->func = 'report_pelayanan_lainnya';

		$this->menu = search_by_column(get_menu_mech(),'menuid',69);//report material stock
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

		$kelurahan 		= $this->m_report_pelayanan_lainnya->list_kelurahan($filter_no_kel);

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

		$pelayanan = $this->m_report_pelayanan_lainnya->get_pelayanan($no_kel,$month,$year);

		$data['ahli_waris'] 		= $pelayanan['total_ahli_waris'];
		$data['ahli_waris_tanah'] 		= $pelayanan['total_ahli_waris_tanah'];
		$data['kebakaran'] 		= $pelayanan['total_kebakaran'];
		$data['pas_jalan'] 		= $pelayanan['total_pas_jalan'];
		$data['penghasilan'] 		= $pelayanan['total_penghasilan'];
		$data['bn_rekening'] 		= $pelayanan['total_bn_rekening'];
		$data['bn_sertifikat'] 		= $pelayanan['total_bn_sertifikat'];

		$data['skck'] 					= $pelayanan['total_skck'];
		$data['tidak_mampu'] 			= $pelayanan['total_tidak_mampu'];
		$data['tidak_memiliki_rumah'] 	= $pelayanan['total_tidak_memiliki_rumah'];
		$data['harga_pasaran_tanah'] 	= $pelayanan['total_harga_pasaran_tanah'];
		$data['imb'] 					= $pelayanan['total_imb'];
		$data['izin_keramaian'] 		= $pelayanan['total_izin_keramaian'];
		$data['kehilangan'] 			= $pelayanan['total_kehilangan'];
		$data['sppt'] 					= $pelayanan['total_sppt'];
		$data['ikrar_masuk_islam'] 		= $pelayanan['total_ikrar_masuk_islam'];
		$data['surat_pernyataan'] 		= $pelayanan['total_surat_pernyataan'];
		$data['ghoib'] 					= $pelayanan['total_ghoib'];
		$data['pindah'] 				= $pelayanan['total_pindah'];
		$data['datang'] 				= $pelayanan['total_datang'];
		
		echo json_encode($data);


	}
	
	
	


}



