



function upload_data(permohonan_ktpid){
	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/form_upload_data",
		data : {permohonan_ktpid:permohonan_ktpid},
		cache : false,
		dataType : "html",
		beforeSend: lock_browser(),
		success : function(data) {
			unlock_browser();
			dialog_upload_data(data);
		},
		error : function(xhr, ajaxOptions, thrownError) {
			alert_warning(xhr.statusText);
			alert_warning(thrownError);
		}
	});
}

function dialog_upload_data(tpl_html){
	var title = 'Upload File';
	var btn = {Tutup: false, Simpan: true};
	//var btn = {};
	var defaultBtn = 1;

	var temp = {
		state: {
			title: title,
			html: tpl_html,
			defaultButton: defaultBtn,
			buttons: btn,
			submit: function (e,v,m,f) {
				e.preventDefault();
				if (v == true) {//Save
					$("#form_upload_data").submit();
				} else {
					$.prompt.close();
				}
			}
		},

	}
	
	var p = $.prompt(temp);
	process_upload_data();

	$('div.jqiclose').html('<button class="btn btn-inverse btn-flat btn-xs" data-toggle="tooltip" title="Close"><i class="fa fa-times"></i></button>');
	$('div.jqi').css('width', '500px');
	
	

}

function process_upload_data(){
	$("#form_upload_data").on('submit',(function(e) {
		var file  =  $("#file").val();
		if(file==''){
			alert_warning("Silahkan masukkan file","#file");
		} else {
			var imgname  =  $('input[type=file]').val();
			var imgname  =  $('input[type=file]').val();
			var ext =  imgname.substr( (imgname.lastIndexOf('.') +1) );
			var size  =  $('#file')[0].files[0].size;
	
			if( size > 8000000){
				alert_warning("Maksimal ukuran file 8MB","#file");
			} else {
				e.preventDefault();
				$.ajax({
					url : base_url + ""+controller+"/process_upload_data",
					type: "POST",
					data:  new FormData(this),
					contentType: false,
					cache: false,
					processData:false,
					beforeSend: lock_browser(),
					dataType : "html",
					success: function(data)
					{
						unlock_browser();
						$.prompt.close();
						load_data();
					},
			   });
			}
		}
	}));

}



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
function edit_data(permohonan_ktpid) {
	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/form_edit_data",
		data : {permohonan_ktpid:permohonan_ktpid},
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
	} else if(flag=='edit'){
		var title = 'Edit Data';
	}
	var btn =	{Tutup: false, Simpan: true, 'Simpan & Download': 'simpan_download'};
	var def_btn = 2;
	var temp = {
		state: {
			title: title,
			html: tpl_html,
			buttons: btn,
			defaultButton: def_btn,
			submit: function (e, v) {
				e.preventDefault();
				if (v == true) {//Save
					process_add_edit_data('simpan');
				} else {
					if (v == 'simpan_download') {//Save
						process_add_edit_data('simpan_download');
					} else {
						$.prompt.close();
					}
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
	
	autocomplete_data_penduduk('#nama');
	autocomplete_data_penduduk('#no_kk');

	autocomplete_ttd('#ttd_nama');
	autocomplete_ttd('#ttd_nip');
	
	$('div.jqiclose').html('<button class="btn btn-inverse btn-flat btn-xs" data-toggle="tooltip" title="Close"><i class="fa fa-times"></i></button>');
	$('div.jqi').css('width', '1000px');

}


function process_add_edit_data(status){
	var no_kel = $('#no_kel').val();
	var date = $('#date').val();
	var no_kk = $('#no_kk').val();
	var nama = $('#nama').val();
	var tempat_lahir = $('#tempat_lahir').val();
	var tanggal_lahir = $('#tanggal_lahir').val();

	var agama = $('#agama').val();
	var status_perkawinan = $('#status_perkawinan').val();
	var status_keluarga = $('#status_keluarga').val();
	var alamat = $('#alamat').val();
	var rt = $('#rt').val();
	var rw = $('#rw').val();

	var pendidikan = $('#pendidikan').val();
	var pekerjaan = $('#pekerjaan').val();
	var nama_ortu = $('#nama_ortu').val();

	var ttd_nama = $('#ttd_nama').val();
	var ttd_nip = $('#ttd_nip').val();
	var ttd_jabatan = $('#ttd_jabatan').val();

	if(no_kel == ''){
		alert_warning("Silahkan pilih kelurahan","#no_kel");
	} else if(date == ''){
		alert_warning("Silahkan masukkan tanggal","#date");
	} else if(no_kk == ''){
		alert_warning("Silahkan masukkan no kk","#no_kk");
	} else if(nama == ''){
		alert_warning("Silahkan masukkan nama","#nama");
	} else if(tempat_lahir == ''){
		alert_warning("Silahkan masukkan tempat lahir","#tempat_lahir");
	} else if(tanggal_lahir == ''){
		alert_warning("Silahkan masukkan tanggal lahir","#tanggal_lahir");
	} else if(agama == ''){
		alert_warning("Silahkan pilih agama","#agama");
	} else if(status_perkawinan == ''){
		alert_warning("Silahkan pilih status perkawinan","#status_perkawinan");
	} else if(status_keluarga == ''){
		alert_warning("Silahkan pilih status keluarga","#status_keluarga");
	} else if(alamat == ''){
		alert_warning("Silahkan masukkan alamat","#alamat");
	} else if(rt == ''){
		alert_warning("Silahkan masukkan rt","#rt");
	} else if(rw == ''){
		alert_warning("Silahkan masukkan rw","#rw");
	} else if(pendidikan == ''){
		alert_warning("Silahkan pilih status pendidikan","#pendidikan");
	} else if(pekerjaan == ''){
		alert_warning("Silahkan pilih status pekerjaan","#pekerjaan");
	} else if(nama_ortu == ''){
		alert_warning("Silahkan masukkan nama bapak/ibu","#nama_ortu");
	} else if(ttd_nama == ''){
		alert_warning("Silahkan mengisi kolom TTD Nama","#ttd_nama");
	} else if(ttd_nip == ''){
		alert_warning("Silahkan mengisi kolom TTD NIP","#ttd_nip");
	} else if(ttd_jabatan == ''){
		alert_warning("Silahkan mengisi kolom TTD Jabatan","#ttd_jabatan");
	} else {
		var datas = $('#form_permohonan_ktp').serializeArray();
		$.ajax({
			type : "POST",
			url : base_url + ""+controller+"/process_add_edit_data",
			data : datas,
			cache : false,
			dataType : "json",
			beforeSend : function() {
				indikator_sibuk();
			},
			success : function(data) {
				indikator_stop();
				$.prompt.close();
				if(status=='simpan_download'){
					var permohonan_ktpid = data.id
					window.location = base_url + 'index.php/'+controller+'/download/id/'+permohonan_ktpid;
				}
				load_data();
			},
			error : function(xhr, ajaxOptions, thrownError) {
				alert_warning(xhr.statusText);
				alert_warning(thrownError);
			}
		});
		
	}
}



function hapus_data(permohonan_ktpid){
	jQuery.alerts.dialogClass = 'alert-warning';
	jConfirm('Apakah anda yakin ingin menghapus data ini?', 'Konfirmasi?', function (r) {
		if (r == true) {
			processDeleteData(permohonan_ktpid);//PROSES PENGHAPUSAN DATA
		}//end if true
	});
}

function processDeleteData(permohonan_ktpid) {
	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/delete_data",
		data : {
			permohonan_ktpid : permohonan_ktpid
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




function autocomplete_data_penduduk(identitas){
	$(identitas).autocomplete(base_url + "autocompletes/load_data_penduduk",
    { 
    	parse: function(data){
				if(data.length == null)
				{
					$(identitas).val('');
				}
        		var parsed = new Array();
                for (var i=0; i < data.length; i++) {
					parsed[i] = {
						data: data[i],
						value:  data[i].nik
					};
				}
                return parsed;
        },                                              
       extraParams: {
		   q: function () { return $(identitas).val() },
		   limit: 20,
		   no_kel: function () { return $('#no_kel').val() },
     	},                                      
        formatItem: function(data,i,max)
        {
			var display = 'NIK : '+data.nik;
			display += '<br/>Nama : '+data.nama;
			display += '<br/>No KK : '+data.no_kk;
			return display;
        },
		dataType: "json",
        width:470,
        cacheLength:0,
        delay:10,
		minChars:1,
		matchSubset:1,
		matchContains:1,                                           
        autoFill:false,
        scrollHeight:300,
        
    
	}).result(function(event, data,formated) {

		$("#nik").val(data.nik);
		$("#nama").val(data.nama);
		$("#no_kk").val(data.no_kk);
		$("#alamat").val(data.alamat);
		if(data.nama_ayah!=''){
			var nama_ortu = data.nama_ayah;
		} else {
			var nama_ortu = data.nama_ibu;
		}
		$("#nama_ortu").val(nama_ortu);

		$("#tempat_lahir").val(data.tmpt_lahir);
		$('#tanggal_lahir').datepicker('setDate', format_tanggal_input(data.tgl_lahir));

		$(".jk").removeAttr("checked");
		$("#jk_"+data.jk).attr("checked","checked");

		$('.select2').select2();

		$("#pendidikan").val(data.ppdk_akhir).trigger("change");
		$("#pekerjaan").val(data.pekerjaan).trigger("change");
		$("#gol_darah").val(data.gdr).trigger("change");
		$("#agama").val(data.agama).trigger("change");
		$("#status_perkawinan").val(data.status).trigger("change");
		$("#status_keluarga").val(data.shdk).trigger("change");


	});
}


function autocomplete_ttd(identitas){
	$(identitas).autocomplete(base_url + "autocompletes/load_data_tdd",
    { 
    	parse: function(data){
				if(data.length == null)
				{
					$(identitas).val('');
				}
        		var parsed = new Array();
                for (var i=0; i < data.length; i++) {
					parsed[i] = {
						data: data[i],
						value:  data[i].nip_baru
					};
				}
                return parsed;
        },                                              
       extraParams: {
		   q: function () { return $(identitas).val() },
		   limit: 20,
		   no_kel: function () { return $('#no_kel').val() },
     	},                                      
        formatItem: function(data,i,max)
        {
			var display = 'NIP : '+data.nip_baru;
			display += '<br/>Nama : '+data.nama_pegawai;
			display += '<br/>Jabatan : '+data.nama_jabatan;
			return display;
        },
		dataType: "json",
        width:470,
        cacheLength:0,
        delay:10,
		minChars:1,
		matchSubset:1,
		matchContains:1,                                           
        autoFill:false,
        scrollHeight:300,
        
    
	}).result(function(event, data,formated) {

		$("#ttd_nama").val(data.nama_pegawai);
		$("#ttd_nip").val(data.nip_baru);
		$("#ttd_jabatan").val(data.nama_jabatan);


	});
}



