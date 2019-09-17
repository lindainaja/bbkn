

function tambah_data() {
	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/form_tambah_data",
		data : {},
		cache : false,
		dataType : "html",
		beforeSend : function() {
			indikator_sibuk();
		},
		success : function(data) {
			indikator_stop();
			dialog(data,'add');
		},
		error : function(xhr, ajaxOptions, thrownError) {
			alert_warning(xhr.statusText);
			alert_warning(thrownError);
		}
	});
}
function edit_data(no_prop,no_kab,no_kec) {
	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/form_edit_data",
		data : {no_prop:no_prop,no_kab:no_kab,no_kec:no_kec},
		cache : false,
		dataType : "html",
		beforeSend : function() {
			indikator_sibuk();
		},
		success : function(data) {
			indikator_stop();
			dialog(data,'edit');
		},
		error : function(xhr, ajaxOptions, thrownError) {
			alert_warning(xhr.statusText);
			alert_warning(thrownError);
		}
	});
}

function dialog(tpl_html,flag){
	if(flag=='add'){
		var title = 'Tambah Data';
		var btn =	{Tutup: false, Simpan: true};
	} else if(flag=='edit'){
		var title = 'Edit Data';
		var btn =	{Tutup: false, Simpan: true};
	}
	var temp = {
		state: {
			title: title,
			html: tpl_html,
			buttons: btn,
			defaultButton: 1,
			submit: function (e, v) {
				e.preventDefault();
				if (v == true) {//Save
					process_add_edit_data(flag);
				} else {
					$.prompt.close();
				}
			}
		},
	}
	$.prompt(temp);
	
	$('.select2').select2();
	if(flag=='add'){
		load_kab();
	}
	$("#no_prop").on("change", function(e) {
		load_kab();
	});

    $(".date-picker").datepicker({
		autoclose: true,
		clearBtn: true,
		format: 'dd/mm/yyyy',
		todayHighlight: true,
	});
	$('div.jqiclose').html('<button class="btn btn-inverse btn-flat btn-xs" data-toggle="tooltip" title="Close"><i class="fa fa-times"></i></button>');
	$('div.jqi').css('width', '800px');

	$("#no_kec").on("change", function(e) {
		var check = check_no_kec();
		if(check == 'false'){
			alert_warning("Nomor kecamatan sudah digunakan","#no_kec");
		}
	});

}

function check_no_kec(){
	var no_prop = $('#no_prop').val();
	var no_kab = $('#no_kab').val();
	var no_kec = $('#no_kec').val();
	var check = $.ajax({
			type		: "POST",
			url : base_url + ""+controller+"/check_no_kec",
			global 	: true,
			async 	: false,
			dataType : "html",
			data 	: {no_prop:no_prop, no_kab:no_kab,no_kec:no_kec, no_kab:no_kab}
		}).responseText;
	return check;
}


function process_add_edit_data(){
	var no_prop = $('#no_prop').val();
	var no_kab = $('#no_kab').val();
	var no_kec = $('#no_kec').val();
	var nama_kec = $('#nama_kec').val();
	var nip_pej = $('#nip_pej').val();
	var nama_pej = $('#nama_pej').val();

	if(flag=='add'){
		var check = check_no_kec();
	} else {
		var check = 'true';
	}

	if(no_prop == ''){
		alert_warning("Silahkan pilih propinsi","#no_prop");
	} else if(no_kab == ''){
		alert_warning("Silahkan pilih kota/kabupaten","#no_kab");
	} else if(no_kec == ''){
		alert_warning("Silahkan masukkan nomor kecamatan","#no_kec");
	} else if(check == 'false'){
		alert_warning("Nomor kec sudah digunakan","#no_kec");
	} else if(nama_kec == ''){
		alert_warning("Silahkan masukkan nama kecamatan","#nama_kec");
	} else if(nip_pej == ''){
		alert_warning("Silahkan masukkan nip camat","#nip_pej");
	} else if(nama_pej == ''){
		alert_warning("Silahkan masukkan nama camat","#nama_pej");
	} else {
		var datas = $('#form_setup_kecamatan').serializeArray();
		$.ajax({
			type : "POST",
			url : base_url + ""+controller+"/process_add_edit_data",
			data : datas,
			cache : false,
			dataType : "html",
			beforeSend : function() {
				indikator_sibuk();
			},
			success : function(data) {
				indikator_stop();
				$.prompt.close();
				load_data();
			},
			error : function(xhr, ajaxOptions, thrownError) {
				alert_warning(xhr.statusText);
				alert_warning(thrownError);
			}
		});
		
	}
}



function hapus_data(no_prop,no_kab,no_kec){
	jQuery.alerts.dialogClass = 'alert-warning';
	jConfirm('Apakah anda yakin ingin menghapus data ini?', 'Konfirmasi?', function (r) {
		if (r == true) {
			processDeleteData(no_prop,no_kab,no_kec);//PROSES PENGHAPUSAN DATA
		}//end if true
	});
}

function processDeleteData(no_prop,no_kab,no_kec) {
	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/delete_data",
		data : {
			no_prop : no_prop,
			no_kab : no_kab,
			no_kec : no_kec,
		},
		cache : false,
		dataType : "html",
		beforeSend : function() {
			indikator_sibuk();
		},
		success : function(data) {
			indikator_stop();
			load_data();
			show_tooltip(".show-tooltip");
		},
		error : function(xhr, ajaxOptions, thrownError) {
			alert_warning(xhr.statusText);
			alert_warning(thrownError);
		}
	});
}



function load_kab(){
	var no_prop = $("#no_prop").val();

	$.ajaxQueue({
		type : "POST",
		url : base_url + ""+controller+"/load_kab",
		data : {
			no_prop : no_prop,
		},
		cache : false,
		dataType : "html",
		success : function(data) {
			$("#no_kab").html("");
			$("#no_kab").html(data);
			indikator_stop();
			$('.select2').select2();
		},
		beforeSend : function() {
			indikator_sibuk();
		},
		error : function(xhr, ajaxOptions, thrownError) {
			alert_warning(xhr.statusText);
			alert_warning(thrownError);
		}
	});
}
