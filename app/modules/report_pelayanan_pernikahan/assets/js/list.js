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
			$("#untuk_nikah_"+no_kel).text(data.untuk_nikah);
			$("#asal_usul_"+no_kel).text(data.asal_usul);
			$("#kematian_suami_istri_"+no_kel).text(data.kematian_suami_istri);
			$("#verbal_wali_hakim_"+no_kel).text(data.verbal_wali_hakim);
			$("#numpang_nikah_"+no_kel).text(data.numpang_nikah);
			$("#penghasilan_"+no_kel).text(data.penghasilan);
			$("#belum_pernah_menikah_"+no_kel).text(data.belum_pernah_menikah);
			$("#duda_janda_"+no_kel).text(data.duda_janda);
			$("#suami_istri_"+no_kel).text(data.suami_istri);
			$("#wali_nikah_"+no_kel).text(data.wali_nikah);
			$("#persetujuan_mempelai_"+no_kel).text(data.persetujuan_mempelai);
			$("#pernyataan_cerai_"+no_kel).text(data.pernyataan_cerai);
			$("#keterangan_orangtua_"+no_kel).text(data.keterangan_orangtua);
			$("#izin_orangtua_"+no_kel).text(data.izin_orangtua);


			var total_data = data.total;//parseFloat(data.untuk_nikah)+parseFloat(data.asal_usul)+parseFloat(data.kematian_suami_istri)+parseFloat(data.verbal_wali_hakim)+parseFloat(data.numpang_nikah)+parseFloat(data.penghasilan)+parseFloat(data.belum_pernah_nikah)+parseFloat(data.duda_janda)+parseFloat(data.suami_istri)+parseFloat(data.wali_nikah)+parseFloat(data.pernyataan_cerai)+parseFloat(data.persetujuan_mempelai)+parseFloat(data.keterangan_orangtua)+parseFloat(data.izin_orangtua);
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


