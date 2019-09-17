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
			$("#ahli_waris_"+no_kel).text(data.ahli_waris);
			$("#ahli_waris_tanah_"+no_kel).text(data.ahli_waris_tanah);
			$("#kebakaran_"+no_kel).text(data.kebakaran);
			$("#pas_jalan_"+no_kel).text(data.pas_jalan);
			$("#penghasilan_"+no_kel).text(data.penghasilan);
			$("#bn_rekening_"+no_kel).text(data.bn_rekening);
			$("#bn_sertifikat_"+no_kel).text(data.bn_sertifikat);



			$("#skck_"+no_kel).text(data.skck);
			$("#tidak_mampu_"+no_kel).text(data.tidak_mampu);
			$("#tidak_memiliki_rumah_"+no_kel).text(data.tidak_memiliki_rumah);
			$("#harga_pasaran_tanah_"+no_kel).text(data.harga_pasaran_tanah);
			$("#imb_"+no_kel).text(data.imb);
			$("#izin_keramaian_"+no_kel).text(data.izin_keramaian);
			$("#kehilangan_"+no_kel).text(data.kehilangan);
			$("#sppt_"+no_kel).text(data.sppt);
			$("#ikrar_masuk_islam_"+no_kel).text(data.ikrar_masuk_islam);
			$("#surat_pernyataan_"+no_kel).text(data.surat_pernyataan);
			$("#ghoib_"+no_kel).text(data.ghoib);
			$("#pindah_"+no_kel).text(data.pindah);
			$("#datang_"+no_kel).text(data.datang);

			var total_data = parseFloat(data.skck)+parseFloat(data.tidak_mampu)+parseFloat(data.tidak_memiliki_rumah)+parseFloat(data.harga_pasaran_tanah)+parseFloat(data.imb)+parseFloat(data.izin_keramaian)+parseFloat(data.kehilangan)+parseFloat(data.sppt)+parseFloat(data.ikrar_masuk_islam)+parseFloat(data.surat_pernyataan)+parseFloat(data.ghoib)+parseFloat(data.pindah)+parseFloat(data.datang)+parseFloat(data.ahli_waris)+parseFloat(data.ahli_waris_tanah)+parseFloat(data.kebakaran)+parseFloat(data.pas_jalan)+parseFloat(data.penghasilan)+parseFloat(data.bn_rekening)+parseFloat(data.bn_sertifikat);
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


