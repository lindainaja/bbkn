// JavaScript Document
jQuery(document).ready(function(){

	$('.select2').select2();

	
	$("#filter_date").datepicker({
		autoclose: true,
		clearBtn: true,
		format: 'mm/yyyy',
		todayHighlight: true,
		minViewMode: 1,
	}).on("change", function(e) {
		console.log("Date changed: ", e.target.value);
		//load_data();
	});


});


function clone() {
    var itm = document.getElementById("table_rekap");
    var cln = itm.cloneNode(true);
    document.getElementById("hasil_clone").appendChild(cln);
}


function load_data(){
	

	var filter_no_kel = $("#filter_no_kel").val();
	var filter_date = $("#filter_date").val();
	var datas = $('#form_report').serializeArray();
	if(filter_date==''){
		alert_warning('Pilih periode','#filter_date');
	} else {
		$.ajaxQueue({
			type : "POST",
			url : base_url + ""+controller+"/load_data",
			data : datas,
			cache : false,
			dataType : "html",
			success : function(data) {
				$("#data_entries").html("");
				$("#data_entries").html(data);
				show_tooltip(".show-tooltip");
				//$("#form_filter").hide();
				//$("#full_table").attr("style","overflow:scroll");
				//$("#table_cash_head").attr("border","1");
				unlock_browser();
				terminal();

			},
			beforeSend : function() {
				lock_browser();
				$("#data_entries").html("<div id=\"loading\" align=\"center\"><img src=\""+base_url + "public/img/loaders/loader.gif\"/></div>");
			},
			error : function(xhr, ajaxOptions, thrownError) {
				alert_warning(xhr.statusText);
				alert_warning(thrownError);
			}
		});
	}

}

function terminal(){
	var total_kel =  $(".list_kelurahan").length;
	$(".list_kelurahan").each(function (e) {
		var no_kel = $(this).attr('no_kel');
		var periode = $(this).attr('periode');
		get_total_data(no_kel,periode,total_kel,e);
    });

}

function get_total_data(no_kel,periode,total,key){
	lock_browser();
	$.ajaxQueue({
		type : "POST",
		url : base_url + ""+controller+"/get_total_data",
		data : {no_kel:no_kel,periode:periode},
		cache : false,
		dataType : "json",
		success : function(data) {
			$("#pengantar_baru_"+no_kel).text(data.pengantar_baru);
			$("#pengantar_perpanjang_"+no_kel).text(data.pengantar_perpanjang);
			$("#pengantar_penggantian_"+no_kel).text(data.pengantar_penggantian);

			$("#permohonan_baru_"+no_kel).text(data.permohonan_baru);
			$("#permohonan_perpanjang_"+no_kel).text(data.permohonan_perpanjang);
			$("#permohonan_penggantian_"+no_kel).text(data.permohonan_penggantian);

			$("#proses_"+no_kel).text(data.proses);
			$("#ralat_"+no_kel).text(data.ralat);
			$("#hilang_"+no_kel).text(data.hilang);

			var total_data = parseFloat(data.pengantar_baru)+parseFloat(data.pengantar_perpanjang)+parseFloat(data.pengantar_penggantian)+parseFloat(data.permohonan_baru)+parseFloat(data.permohonan_perpanjang)+parseFloat(data.permohonan_penggantian)+parseFloat(data.proses)+parseFloat(data.ralat)+parseFloat(data.hilang);
			$("#total_"+no_kel).text(total_data);
			
			if(key == total-1){
				unlock_browser();
				clone();
				$("#btn_export").show();
			}


		},
		beforeSend : function() {
		},
		error : function(xhr, ajaxOptions, thrownError) {
			alert_warning(xhr.statusText);
			alert_warning(thrownError);
		}
	});

}


