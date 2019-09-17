<?php

/**
 * 
 */
class M_exclude extends CI_Model
{
	
	function load_pelayanan_bspo(){
		$filter_no_kel = $this->input->post('filter_no_kel') ? $this->input->post('filter_no_kel') : $this->no_kel;
		$filter_year = $this->input->post('filter_year') ? $this->input->post('filter_year') : date('Y');

		$result = $this->m_dashboard->list_pelayanan_bspo($filter_year,$filter_no_kel);
		$param_data = '';
		if(count($result)>0){

			
			$param_data .= '{name:"SP PFBT(Sporadik)",y:'.$result['total_spps'].'},';
			$param_data .= '{name:"SP Kepemilikan Tanah",y:'.$result['total_skt'].'},';
			$param_data .= '{name:"RPDY dan Penetapan Batas",y:'.$result['total_rpb'].'},';

			$param_data .= '{name:"SP Batas Tanah",y:'.$result['total_bt'].'},';
			$param_data .= '{name:"SP Pertahanan",y:'.$result['total_pp'].'},';
			$param_data .= '{name:"SP Jual Beli",y:'.$result['total_jb'].'},';
			$param_data .= '{name:"SK Hibah",y:'.$result['total_hb'].'},'; 


		} else {
			$param_data .= '{name: "Pelayanan Blangko Sporadik",y: 80}';
		}
		$param_data = rtrim($param_data,',');
		
		$html['chart'] = '';
		$html['chart'] .= '<script>
		
			jQuery(document).ready(function () {

				// Build the chart
				$(".chart_pelayanan_bspo").highcharts({
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
						text: "Pelayanan Blangko Sporadik Tahun '.$filter_year.'"
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
		$html['chart'] .= '<div class="chart_pelayanan_bspo" style="min-width: 200px; height: 518px; margin: 0 auto"></div>';
		
		echo json_encode($html);

	}
}