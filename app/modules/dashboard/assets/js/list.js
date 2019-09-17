// JavaScript Document
jQuery(document).ready(function () {
	
	$("#filter_year").datepicker({
		autoclose: true,
		clearBtn: true,
		format: 'yyyy',
		todayHighlight: true,
		minViewMode: 2,
	}).on("change", function(e) {
		console.log("Date changed: ", e.target.value);
		//load_data();
	});


	$('.select2').select2();

	$(".list_chart").each(function (e) {
		var flag_chart = $(this).attr("id");
		//alert(flag_chart);
		load_chart(flag_chart);
    });
	

});

function load_all_chart(){
	$(".list_chart").each(function (e) {
		var flag_chart = $(this).attr("id");
		//alert(flag_chart);
		load_chart(flag_chart);
    });
}

function load_chart(flag_chart){
	var filter_no_kel = $("#filter_no_kel").val();
	var filter_year = $("#filter_year").val();

	var url = '';
	if(flag_chart=='pelayanan_ktp'){
		var url = 'load_pelayanan_ktp';
	} else if(flag_chart=='pelayanan_kk'){
		var url = 'load_pelayanan_kk';
	} else if(flag_chart=='pelayanan_domisili'){
		var url = 'load_pelayanan_domisili';
	} else if(flag_chart=='pelayanan_kelahiran_dan_kematian'){
		var url = 'load_pelayanan_kelahiran_dan_kematian';
	} else if(flag_chart=='pelayanan_pernikahan'){
		var url = 'load_pelayanan_pernikahan';
	} else if(flag_chart=='pelayanan_lainnya'){
		var url = 'load_pelayanan_lainnya';
	} else if(flag_chart=='pelayanan_pindat'){
		var url = 'load_pelayanan_pindat';
	} else if(flag_chart=='pelayanan_tidak_mampu'){
		var url = 'load_pelayanan_tidak_mampu';
	}
	if(url){
		$.ajaxQueue({
			type : "POST",
			url : base_url + ""+controller+"/"+url,
			data : {filter_no_kel:filter_no_kel,filter_year:filter_year,},
			cache : false,
			dataType : "json",
			success : function(data) {
				$("#"+flag_chart).html("");
				$("#"+flag_chart).html(data.chart);
				$(".nice-scroll, .slimScroll").slimScroll({
					touchScrollStep: 30,
					height: "318px",
				});
				show_tooltip(".show-tooltip");
			},
			beforeSend : function() {
				$("#"+flag_chart).html("<div id=\"loading\" align=\"center\"><img src=\""+base_url + "public/img/loaders/loader.gif\"/></div>");
			},
			error : function(xhr, ajaxOptions, thrownError) {
				alert_warning(xhr.statusText);
				alert_warning(thrownError);
			}
		});
	}
}