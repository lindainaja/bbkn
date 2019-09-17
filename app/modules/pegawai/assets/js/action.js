
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
function edit_data(pegawaiid) {
	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/form_edit_data",
		data : {pegawaiid:pegawaiid},
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
					process_add_edit_data();
				} else {
					$.prompt.close();
				}
			}
		},
	}
	$.prompt(temp);
	
	$('.select2').select2();

    $(".date-picker").datepicker({
		autoclose: true,
		clearBtn: true,
		format: 'dd/mm/yyyy',
		todayHighlight: true,
	});
	$('div.jqiclose').html('<button class="btn btn-inverse btn-flat btn-xs" data-toggle="tooltip" title="Close"><i class="fa fa-times"></i></button>');
	$('div.jqi').css('width', '800px');

	$("#nip").on("change", function(e) {
		var check = check_nip();
		if(check == 'false'){
			alert_warning("Nomor nip sudah digunakan","#nip");
		}
	});

}

function check_nip(){
	var pegawaiid = $('#pegawaiid').val();
	var nip = $('#nip').val();
	var check_nip = $.ajax({
			type		: "POST",
			url : base_url + ""+controller+"/check_nip",
			global 	: true,
			async 	: false,
			dataType : "html",
			data 	: {nip:nip, pegawaiid:pegawaiid}
		}).responseText;
	return check_nip;
}


function process_add_edit_data(){
	var pegawaiid = $('#pegawaiid').val();
	var nip = $('#nip').val();
	var nama = $('#nama').val();
	var tempat_lahir = $('#tempat_lahir').val();
	var tanggal_lahir = $('#tanggal_lahir').val();


	var agama = $('#agama').val();
	var gol_darah = $('#gol_darah').val();
	var status_perkawinan = $('#status_perkawinan').val();
	var jabatan = $('#jabatan').val();

	var check = check_nip();

	if(nip == ''){
		alert_warning("Silahkan masukkan nip","#nip");
	} else if(check == 'false'){
		alert_warning("Nomor nip sudah digunakan","#nip");
	} else if(nama == ''){
		alert_warning("Silahkan masukkan nama","#nama");
	} else if(jabatan == ''){
		alert_warning("Silahkan masukkan jabatan","#jabatan");
	} else if(tempat_lahir == ''){
		alert_warning("Silahkan masukkan tempat lahir","#tempat_lahir");
	} else if(tanggal_lahir == ''){
		alert_warning("Silahkan masukkan tanggal lahir","#tanggal_lahir");
	} else if(agama==null || agama==0 || agama==''){
		alert_warning("Silahkan pilih agama","#agama");
	} else if(gol_darah==null || gol_darah==0 || gol_darah==''){
		alert_warning("Silahkan pilih golongan darah","#gol_darah");
	} else if(status_perkawinan==null || status_perkawinan==0 || status_perkawinan==''){
		alert_warning("Silahkan pilih status perkawinan","#status_perkawinan");
	} else {
		var datas = $('#form_pegawai').serializeArray();
		// console.log(data)
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



function hapus_data(pegawaiid){
	jQuery.alerts.dialogClass = 'alert-warning';
	jConfirm('Apakah anda yakin ingin menghapus data ini?', 'Konfirmasi?', function (r) {
		if (r == true) {
			processDeleteData(pegawaiid);//PROSES PENGHAPUSAN DATA
		}//end if true
	});
}

function processDeleteData(pegawaiid) {
	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/delete_data",
		data : {
			pegawaiid : pegawaiid
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


