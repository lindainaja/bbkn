<?php

class Dashboard extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->func = 'dashboard';
		$this->load->model('m_dashboard');
		
		$this->menu = search_by_column(get_menu_mech(),'menuid',1);//menu dashboard
		menu_check_role($this->menu);


		$this->no_prop		= $this->session->userdata('log_prop');
		$this->no_kab		= $this->session->userdata('log_kab');
		$this->no_kec		= $this->session->userdata('log_kec');
		$this->no_kel		= $this->session->userdata('log_kel');

	}
	function index() {
        // print_rr($this->menu);
        // die();
        
        //print_rr($this->session->userdata('log_menu2'));
        //print_rr(search_by_column($this->session->userdata('log_menu2'),'url','report_request_material'));
        //die();

        //$datae = search_by_column(get_menu_mech(),'menu_mechanismid',33);
        //print_rr($datae);
        //die();

        ##datepicker
        $this->template->add_css('public/assets/bootstrap-datepicker/css/datepicker.css');
        $this->template->add_js('public/assets/bootstrap-datepicker/js/bootstrap-datepicker.js');

        $this->template->add_css('public/addon/select2/select2.min.css');
        $this->template->add_js('public/addon/select2/select2.full.min.js');

        $this->template->add_js('public/js/jquery.ajaxQueue.js');
        $this->template->add_js('public/js/chart/highcharts.js');
        $this->template->add_js('public/js/chart/highcharts-3d.js');
        $this->template->add_js('public/js/chart/exporting.js');
        $this->template->add_js('public/assets/jquery-slimscroll/jquery.slimscroll.min.js');

        // $this->template->add_js('public/js/'.$this->func.'/list.js');
        $this->template->add_js('app/modules/'.$this->func.'/assets/js/list.js');
        
        // $this->template->add_title('BERANDA');
        $breadcrumb = array(
            'dashboard' => 'Beranda',
        );
        $this->template->add_breadcrumb($breadcrumb);

        $data['kel']    = kel_2_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
        $data['menu'] = $this->menu;

        $this->template->write_view('content',$this->func.'/list',$data);
        $this->template->render();
    }
	
	
	
	function load_pelayanan_ktp(){
		$filter_no_kel = $this->input->post('filter_no_kel') ? $this->input->post('filter_no_kel') : $this->no_kel;
		$filter_year = $this->input->post('filter_year') ? $this->input->post('filter_year') : date('Y');

		$result = $this->m_dashboard->list_pelayanan_ktp($filter_year,$filter_no_kel);
		$param_data = '';
		if(count($result)>0){

			$param_data .= '{name:"Pengantar KTP",y:'.$result['total_pengantar'].',sliced: true,selected: true},';
			$param_data .= '{name:"Permohonan KTP",y:'.$result['total_permohonan'].'},';
			$param_data .= '{name:"Proses KTP",y:'.$result['total_proses'].'},';
			$param_data .= '{name:"Ralat KTP",y:'.$result['total_ralat'].'},';
			$param_data .= '{name:"Hilang KTP",y:'.$result['total_hilang'].'},';
		} else {
			$param_data .= '{name: "Pelayanan KTP",y: 80}';
		}
		$param_data = rtrim($param_data,',');
		
		$html['chart'] = '';
		$html['chart'] .= '<script>
		
			jQuery(document).ready(function () {

				// Build the chart
				$(".chart_pelayanan_ktp").highcharts({
				   chart: {
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false,
						type: "pie",
						options3d: {
							enabled: true,
							alpha: 45,
							beta: 0
						}
					},
					title: {
						text: "Pelayanan KTP Tahun '.$filter_year.'"
					},
					tooltip: {
						pointFormat: "{series.name}: <b>{point.y:1f}</b>",
						percentageDecimals: 2
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: "pointer",
							depth: 35,
							dataLabels: {
								enabled: false,
								color: "#17987e",
								connectorColor: "#17987e",
								formatter: function() {
									return "<b>"+ this.point.name +"</b>: "+ this.percentage +" %";
								}
							},
							showInLegend: true
						}
					},
					credits: {
						enabled: false
					},
					series: [{
						name: "Total",
						colorByPoint: true,
						data: [
						'.$param_data.'
						]
					}]
				});
			});

		</script>';
		$html['chart'] .= '<div class="chart_pelayanan_ktp" style="min-width: 200px; height: 418px; margin: 0 auto"></div>';
		
		echo json_encode($html);

	}


	function load_pelayanan_kk(){
		$filter_no_kel = $this->input->post('filter_no_kel') ? $this->input->post('filter_no_kel') : $this->no_kel;
		$filter_year = $this->input->post('filter_year') ? $this->input->post('filter_year') : date('Y');

		$result = $this->m_dashboard->list_pelayanan_kk($filter_year,$filter_no_kel);
		$param_data = '';
		if(count($result)>0){

			$param_data .= '{name:"Permohonan KK",y:'.$result['total_permohonan'].',sliced: true,selected: true},';
			$param_data .= '{name:"Perubahan KK",y:'.$result['total_perubahan'].'},';
			$param_data .= '{name:"Hilang KK",y:'.$result['total_hilang'].'},';
		} else {
			$param_data .= '{name: "Pelayanan KK",y: 80}';
		}
		$param_data = rtrim($param_data,',');
		
		$html['chart'] = '';
		$html['chart'] .= '<script>
		
			jQuery(document).ready(function () {

				// Build the chart
				$(".chart_pelayanan_kk").highcharts({
				   chart: {
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false,
						type: "pie",
						options3d: {
							enabled: true,
							alpha: 45,
							beta: 0
						}
					},
					title: {
						text: "Pelayanan KK Tahun '.$filter_year.'"
					},
					tooltip: {
						pointFormat: "{series.name}: <b>{point.y:1f}</b>",
						percentageDecimals: 2
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: "pointer",
							depth: 35,
							dataLabels: {
								enabled: false,
								color: "#17987e",
								connectorColor: "#17987e",
								formatter: function() {
									return "<b>"+ this.point.name +"</b>: "+ this.percentage +" %";
								}
							},
							showInLegend: true
						}
					},
					credits: {
						enabled: false
					},
					series: [{
						name: "Total",
						colorByPoint: true,
						data: [
						'.$param_data.'
						]
					}]
				});
			});

		</script>';
		$html['chart'] .= '<div class="chart_pelayanan_kk" style="min-width: 200px; height: 418px; margin: 0 auto"></div>';
		
		echo json_encode($html);

	}


	function load_pelayanan_domisili(){
		$filter_no_kel = $this->input->post('filter_no_kel') ? $this->input->post('filter_no_kel') : $this->no_kel;
		$filter_year = $this->input->post('filter_year') ? $this->input->post('filter_year') : date('Y');

		$result = $this->m_dashboard->list_pelayanan_domisili($filter_year,$filter_no_kel);
		$param_data = '';
		if(count($result)>0){
			$param_data .= '{name:"Domisili Usaha",y:'.$result['total_du'].',sliced: true,selected: true},';
			$param_data .= '{name:"Domisili Penduduk",y:'.$result['total_dp'].',sliced: true,selected: true},';
			$param_data .= '{name:"Domisili Usaha NEW",y:'.$result['total_dun'].',sliced: true,selected: true},';
			$param_data .= '{name:"Domisili Yayasan",y:'.$result['total_dy'].',sliced: true,selected: true},';
			$param_data .= '{name:"Tempat Usaha",y:'.$result['total_tu'].'},';
			$param_data .= '{name:"Usaha Pasar",y:'.$result['total_up'].'},';
			$param_data .= '{name:"Izin Usaha",y:'.$result['total_iu'].'},';
			
			$param_data .= '{name:"WNI",y:'.$result['total_wni'].',sliced: true,selected: true},';
			$param_data .= '{name:"WNA",y:'.$result['total_wna'].'},';
			$param_data .= '{name:"Domisil Kantor",y:'.$result['total_dk'].'},';
			$param_data .= '{name:"Domisil KK",y:'.$result['total_dkk'].'},';
			$param_data .= '{name:"Surat Keterangan Usaha",y:'.$result['total_sku'].'},';
		} else {
			$param_data .= '{name: "Pelayanan Domisili",y: 80}';
		}
		$param_data = rtrim($param_data,',');
		
		$html['chart'] = '';
		$html['chart'] .= '<script>
		
			jQuery(document).ready(function () {

				// Build the chart
				$(".chart_pelayanan_domisili").highcharts({
				   chart: {
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false,
						type: "pie",
						options3d: {
							enabled: true,
							alpha: 45,
							beta: 0
						}
					},
					title: {
						text: "Pelayanan Domisili Tahun '.$filter_year.'"
					},
					tooltip: {
						pointFormat: "{series.name}: <b>{point.y:1f}</b>",
						percentageDecimals: 2
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: "pointer",
							depth: 35,
							dataLabels: {
								enabled: false,
								color: "#17987e",
								connectorColor: "#17987e",
								formatter: function() {
									return "<b>"+ this.point.name +"</b>: "+ this.percentage +" %";
								}
							},
							showInLegend: true
						}
					},
					credits: {
						enabled: false
					},
					series: [{
						name: "Total",
						colorByPoint: true,
						data: [
						'.$param_data.'
						]
					}]
				});
			});

		</script>';
		$html['chart'] .= '<div class="chart_pelayanan_domisili" style="min-width: 200px; height: 418px; margin: 0 auto"></div>';
		
		echo json_encode($html);

	}


	function load_pelayanan_kelahiran_dan_kematian(){
		$filter_no_kel = $this->input->post('filter_no_kel') ? $this->input->post('filter_no_kel') : $this->no_kel;
		$filter_year = $this->input->post('filter_year') ? $this->input->post('filter_year') : date('Y');

		$result = $this->m_dashboard->list_pelayanan_kelahiran_dan_kematian($filter_year,$filter_no_kel);
		$param_data = '';
		if(count($result)>0){

			$param_data .= '{name:"Lahir Baru",y:'.$result['total_lahir_baru'].',sliced: true,selected: true},';
			$param_data .= '{name:"Lahir Lama",y:'.$result['total_lahir_lama'].'},';
			$param_data .= '{name:"Kematian",y:'.$result['total_kematian'].'},';
		} else {
			$param_data .= '{name: "Pelayanan Kelahiran dan Kematian",y: 80}';
		}
		$param_data = rtrim($param_data,',');
		
		$html['chart'] = '';
		$html['chart'] .= '<script>
		
			jQuery(document).ready(function () {

				// Build the chart
				$(".chart_pelayanan_kematian").highcharts({
				   chart: {
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false,
						type: "pie",
						options3d: {
							enabled: true,
							alpha: 45,
							beta: 0
						}
					},
					title: {
						text: "Pelayanan Kelahiran & Kematian Tahun '.$filter_year.'"
					},
					tooltip: {
						pointFormat: "{series.name}: <b>{point.y:1f}</b>",
						percentageDecimals: 2
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: "pointer",
							depth: 35,
							dataLabels: {
								enabled: false,
								color: "#17987e",
								connectorColor: "#17987e",
								formatter: function() {
									return "<b>"+ this.point.name +"</b>: "+ this.percentage +" %";
								}
							},
							showInLegend: true
						}
					},
					credits: {
						enabled: false
					},
					series: [{
						name: "Total",
						colorByPoint: true,
						data: [
						'.$param_data.'
						]
					}]
				});
			});

		</script>';
		$html['chart'] .= '<div class="chart_pelayanan_kematian" style="min-width: 200px; height: 418px; margin: 0 auto"></div>';
		
		echo json_encode($html);

	}


	function load_pelayanan_pernikahan(){
		$filter_no_kel = $this->input->post('filter_no_kel') ? $this->input->post('filter_no_kel') : $this->no_kel;
		$filter_year = $this->input->post('filter_year') ? $this->input->post('filter_year') : date('Y');

		$result = $this->m_dashboard->list_pelayanan_pernikahan($filter_year,$filter_no_kel);
		$param_data = '';
		if(count($result)>0){

			$param_data .= '{name:"SK Untuk Nikah",y:'.$result['total_untuk_nikah'].',sliced: true,selected: true},';
			$param_data .= '{name:"SK Asal Usul",y:'.$result['total_asal_usul'].'},';
			$param_data .= '{name:"SK Kematian Suami Istri",y:'.$result['total_kematian_suami_istri'].'},';
			$param_data .= '{name:"SK Verbal Wali Hakim",y:'.$result['total_verbal_wali_hakim'].'},';
			$param_data .= '{name:"SK Penghasilan",y:'.$result['total_penghasilan'].'},';
			//$param_data .= '{name:"SK Belum Pernah Nikah",y:'.$result['total_belum_pernah_nikah'].'},';
			$param_data .= '{name:"SK Belum Pernah Menikah",y:'.$result['total_belum_pernah_menikah'].'},';
			$param_data .= '{name:"SK Duda/Janda",y:'.$result['total_duda_janda'].'},';
			$param_data .= '{name:"SK Suami Istri",y:'.$result['total_suami_istri'].'},';
			$param_data .= '{name:"SK Wali Nikah",y:'.$result['total_wali_nikah'].'},';
			$param_data .= '{name:"SK Pernyataan Cerai",y:'.$result['total_pernyataan_cerai'].'},';

			$param_data .= '{name:"SK Persetujuan Mempelai",y:'.$result['total_pm'].'},';
			$param_data .= '{name:"SK Numpang Nikah",y:'.$result['total_nn'].'},';
			$param_data .= '{name:"SK Izin Orang Tua",y:'.$result['total_iot'].'},';
			$param_data .= '{name:"SK Keterangan Orang Tua",y:'.$result['total_kot'].'},';

		} else {
			$param_data .= '{name: "Pelayanan Pernikahan",y: 80}';
		}
		$param_data = rtrim($param_data,',');
		
		$html['chart'] = '';
		$html['chart'] .= '<script>
		
			jQuery(document).ready(function () {

				// Build the chart
				$(".chart_pelayanan_pernikahan").highcharts({
				   chart: {
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false,
						type: "pie",
						options3d: {
							enabled: true,
							alpha: 45,
							beta: 0
						}
					},
					title: {
						text: "Pelayanan Pernikahan Tahun '.$filter_year.'"
					},
					tooltip: {
						pointFormat: "{series.name}: <b>{point.y:1f}</b>",
						percentageDecimals: 2
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: "pointer",
							depth: 35,
							dataLabels: {
								enabled: false,
								color: "#17987e",
								connectorColor: "#17987e",
								formatter: function() {
									return "<b>"+ this.point.name +"</b>: "+ this.percentage +" %";
								}
							},
							showInLegend: true
						}
					},
					credits: {
						enabled: false
					},
					series: [{
						name: "Total",
						colorByPoint: true,
						data: [
						'.$param_data.'
						]
					}]
				});
			});

		</script>';
		$html['chart'] .= '<div class="chart_pelayanan_pernikahan" style="min-width: 200px; height: 518px; margin: 0 auto"></div>';
		
		echo json_encode($html);

	}




	function load_pelayanan_lainnya(){
		$filter_no_kel = $this->input->post('filter_no_kel') ? $this->input->post('filter_no_kel') : $this->no_kel;
		$filter_year = $this->input->post('filter_year') ? $this->input->post('filter_year') : date('Y');

		$result = $this->m_dashboard->list_pelayanan_lainnya($filter_year,$filter_no_kel);
		$param_data = '';
		if(count($result)>0){

			
			$param_data .= '{name:"SK SKCK",y:'.$result['total_skck'].'},';
			$param_data .= '{name:"SK Kelakuan Baik",y:'.$result['total_kelakuan_baik'].'},';
			$param_data .= '{name:"SK Lain",y:'.$result['total_lain'].'},';
			// $param_data .= '{name:"SK Tidak Mampu",y:'.$result['total_tidak_mampu'].'},';
			$param_data .= '{name:"SK Tidak Memiliki Rumah",y:'.$result['total_tidak_memiliki_rumah'].'},';
			$param_data .= '{name:"SK Belum Memiliki Rumah",y:'.$result['total_belum_memiliki_rumah'].'},';

			$param_data .= '{name:"SK Harga Pasaran Tanah",y:'.$result['total_harga_pasaran_tanah'].'},';
			$param_data .= '{name:"SK IMB",y:'.$result['total_imb'].'},';
			$param_data .= '{name:"SK Izin Keramaian",y:'.$result['total_izin_keramaian'].'},';
			$param_data .= '{name:"Surat Izin Keramaian",y:'.$result['total_surat_izin_keramaian'].'},';
			$param_data .= '{name:"SK Izin Lingkungan",y:'.$result['total_izin_lingkungan'].'},';

			$param_data .= '{name:"SK Kehilangan",y:'.$result['total_kehilangan'].'},';
			$param_data .= '{name:"SK SPPT",y:'.$result['total_sppt'].'},';
			$param_data .= '{name:"SPP PBB",y:'.$result['total_spp_pbb'].'},';


			$param_data .= '{name:"SK Ikrar Masuk Islam",y:'.$result['total_ikrar_masuk_islam'].'},';
			$param_data .= '{name:"SK Pernyataan Ghoib",y:'.$result['total_surat_pernyataan'].'},';
			$param_data .= '{name:"SK Ghoib",y:'.$result['total_ghoib'].'},';
			

			$param_data .= '{name:"Ahli Waris",y:'.$result['total_aw'].'},';
			$param_data .= '{name:"Ahli Waris Tanah",y:'.$result['total_awt'].'},';
			$param_data .= '{name:"Hak Milik Kapal",y:'.$result['total_hmk'].'},';
			$param_data .= '{name:"Kebakaran",y:'.$result['total_kb'].'},';
			$param_data .= '{name:"Pas Jalan",y:'.$result['total_pj'].'},';
			$param_data .= '{name:"SK Penghasilan",y:'.$result['total_ph'].'},';

			$param_data .= '{name:"Beda Nama Rekening",y:'.$result['total_bnr'].'},';
			$param_data .= '{name:"Beda Nama Sertifikat",y:'.$result['total_bns'].'},';


		} else {
			$param_data .= '{name: "Pelayanan Lainnya",y: 80}';
		}
		$param_data = rtrim($param_data,',');
		
		$html['chart'] = '';
		$html['chart'] .= '<script>
		
			jQuery(document).ready(function () {

				// Build the chart
				$(".chart_pelayanan_lainnya").highcharts({
				   chart: {
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false,
						type: "pie",
						options3d: {
							enabled: true,
							alpha: 45,
							beta: 0
						}
					},
					title: {
						text: "Pelayanan Lainnya Tahun '.$filter_year.'"
					},
					tooltip: {
						pointFormat: "{series.name}: <b>{point.y:1f}</b>",
						percentageDecimals: 2
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: "pointer",
							depth: 35,
							dataLabels: {
								enabled: false,
								color: "#17987e",
								connectorColor: "#17987e",
								formatter: function() {
									return "<b>"+ this.point.name +"</b>: "+ this.percentage +" %";
								}
							},
							showInLegend: true
						}
					},
					credits: {
						enabled: false
					},
					series: [{
						name: "Total",
						colorByPoint: true,
						data: [
						'.$param_data.'
						]
					}]
				});
			});

		</script>';
		$html['chart'] .= '<div class="chart_pelayanan_lainnya" style="min-width: 200px; height: 518px; margin: 0 auto"></div>';
		
		echo json_encode($html);

	}

	

	function load_pelayanan_tidak_mampu(){
		$filter_no_kel = $this->input->post('filter_no_kel') ? $this->input->post('filter_no_kel') : $this->no_kel;
		$filter_year = $this->input->post('filter_year') ? $this->input->post('filter_year') : date('Y');

		$result = $this->m_dashboard->list_pelayanan_tidak_mampu($filter_year,$filter_no_kel);
		$param_data = '';
		if(count($result)>0){

			
			$param_data .= '{name:"Tidak Mampu",y:'.$result['total_tm'].'},';
			$param_data .= '{name:"Tidak Mampu Pendidikan",y:'.$result['total_tp'].'},';
			$param_data .= '{name:"Tidak Mampu Kesehatan",y:'.$result['total_tk'].'},'; 
			$param_data .= '{name:"SKTM",y:'.$result['total_sktm'].'},'; 


		} else {
			$param_data .= '{name: "Pelayanan Tidak Mampu",y: 80}';
		}
		$param_data = rtrim($param_data,',');
		
		$html['chart'] = '';
		$html['chart'] .= '<script>
		
			jQuery(document).ready(function () {

				// Build the chart
				$(".chart_pelayanan_tidak_mampu").highcharts({
				   chart: {
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false,
						type: "pie",
						options3d: {
							enabled: true,
							alpha: 45,
							beta: 0
						}
					},
					title: {
						text: "Pelayanan Tidak Mampu Tahun '.$filter_year.'"
					},
					tooltip: {
						pointFormat: "{series.name}: <b>{point.y:1f}</b>",
						percentageDecimals: 2
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: "pointer",
							depth: 35,
							dataLabels: {
								enabled: false,
								color: "#17987e",
								connectorColor: "#17987e",
								formatter: function() {
									return "<b>"+ this.point.name +"</b>: "+ this.percentage +" %";
								}
							},
							showInLegend: true
						}
					},
					credits: {
						enabled: false
					},
					series: [{
						name: "Total",
						colorByPoint: true,
						data: [
						'.$param_data.'
						]
					}]
				});
			});

		</script>';
		$html['chart'] .= '<div class="chart_pelayanan_tidak_mampu" style="min-width: 200px; height: 518px; margin: 0 auto"></div>';
		
		echo json_encode($html);

	}

	function load_pelayanan_pindat(){
		$filter_no_kel = $this->input->post('filter_no_kel') ? $this->input->post('filter_no_kel') : $this->no_kel;
		$filter_year = $this->input->post('filter_year') ? $this->input->post('filter_year') : date('Y');

		$result = $this->m_dashboard->list_pelayanan_pindat($filter_year,$filter_no_kel);
		$param_data = '';
		if(count($result)>0){

			$param_data .= '{name:"Kepindahan",y:'.$result['total_pindah'].'},';
			$param_data .= '{name:"Kedatangan",y:'.$result['total_datang'].'},';
			

			$table_sufixes=[108,126,128,129,130,131,132,'134_133','136_135',137,138,139];

			foreach ($table_sufixes as $suf) {
				$key= extract_f($suf);
				$param_data .= '{name:"'.$key.'",y:'.$result[$key].'},';
			}
		} else {
			$param_data .= '{name: "Pelayanan Pindah/Datang",y: 80}';
		}
		$param_data = rtrim($param_data,',');
		
		$html['chart'] = '';
		$html['chart'] .= '<script>
		
			jQuery(document).ready(function () {

				// Build the chart
				$(".chart_pelayanan_pindat").highcharts({
				   chart: {
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false,
						type: "pie",
						options3d: {
							enabled: true,
							alpha: 45,
							beta: 0
						}
					},
					title: {
						text: "Pelayanan Pindah Datang '.$filter_year.'"
					},
					tooltip: {
						pointFormat: "{series.name}: <b>{point.y:1f}</b>",
						percentageDecimals: 2
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: "pointer",
							depth: 35,
							dataLabels: {
								enabled: false,
								color: "#17987e",
								connectorColor: "#17987e",
								formatter: function() {
									return "<b>"+ this.point.name +"</b>: "+ this.percentage +" %";
								}
							},
							showInLegend: true
						}
					},
					credits: {
						enabled: false
					},
					series: [{
						name: "Total",
						colorByPoint: true,
						data: [
						'.$param_data.'
						]
					}]
				});
			});

		</script>';
		$html['chart'] .= '<div class="chart_pelayanan_pindat" style="min-width: 200px; height: 418px; margin: 0 auto"></div>';
		
		echo json_encode($html);

	}
 
} //D:/xampp/htdocs/babakan/app/modules/dashboard/controllers/Dashboard.php
