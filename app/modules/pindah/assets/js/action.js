




function upload_data(pindahid){
	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/form_upload_data",
		data : {pindahid:pindahid},
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




function add_row(){
	var nomor =  random_number();
	var rand = setTimeout(nomor, 3000);
	console.log(rand);

	var tpl_option = $("#detail_shdk_1").html();


	var tpl_html = '<div class="form-group anggota_keluarga" id="row_'+rand+'">';
		tpl_html += '<div class="col-sm-3 col-lg-2 controls">';
		tpl_html += '<input name="detail_nik[]" flag="'+rand+'" id="detail_nik_'+rand+'" type="text" placeholder="NIK" class="form-control detail_nik" autocomplete="off" maxlength="25" />';
		tpl_html += '</div>';
		tpl_html += '<div class="col-sm-3 col-lg-2 controls">';
		tpl_html += '<input name="detail_nama[]" flag="'+rand+'" id="detail_nama_'+rand+'" type="text" placeholder="Nama" class="form-control" autocomplete="off" maxlength="150" />';
		tpl_html += '</div>';

		tpl_html += '<div class="col-sm-3 col-lg-2 controls">';
		tpl_html += '<input name="detail_tmpt_lahir[]" flag="'+rand+'" id="detail_tmpt_lahir_'+rand+'" type="text" placeholder="Tempat Lahir" class="form-control" autocomplete="off" maxlength="100" />';
		tpl_html += '</div>';

		tpl_html += '<div class="col-sm-3 col-lg-2 controls">';
		tpl_html += '<input id="detail_tgl_lahir_'+rand+'" name="detail_tgl_lahir[]" flag="'+rand+'" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" />';
		tpl_html += '</div>';

		tpl_html += '<div class="col-sm-3 col-lg-3 controls">';
		tpl_html += '<select name="detail_shdk[]" id="detail_shdk_'+rand+'" flag="'+rand+'" class="select2 form-control" style="width: 100%;">'+tpl_option+'</select>';
		tpl_html += '</div>';
		tpl_html += '<div class="col-sm-3 col-lg-1 controls">';
		tpl_html += '<a class="btn btn-danger show-tooltip btn-sm btn-circle" title="" data-original-title="Hapus" href="javascript:;" onclick="remove_row('+rand+')"><i class="fa fa-trash-o"></i></a>';
		tpl_html += '</div>';
	tpl_html += '</div>';

	$('#tpl_tempel').before(tpl_html);

	$(".select2").select2();
$(".date-picker").datepicker({
		autoclose: true,
		clearBtn: true,
		format: 'dd/mm/yyyy',
		todayHighlight: true,
	});
	autocomplete_data_penduduk_detail('#detail_nik_'+rand,rand);
	autocomplete_data_penduduk_detail('#detail_nama_'+rand,rand);

	var jml_anggota = $(".anggota_keluarga").length;
	$("#jml_pengikut").val(jml_anggota);

}

function remove_row(rand){
	$("#row_"+rand).remove();
	var jml_anggota = $(".anggota_keluarga").length;
	$("#jml_pengikut").val(jml_anggota);
}



function random_number(){
	//sleep(200);
    var now = new Date();
	var nomor = now.format("dmyyyyhhMMss")
	return nomor;

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
function edit_data(pindahid) {
	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/form_edit_data",
		data : {pindahid:pindahid},
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
	
	autocomplete_data_penduduk_kk('#no_kk_asal');
	autocomplete_data_penduduk_kk('#nama_kk_asal');

	autocomplete_data_penduduk('#nama');
	autocomplete_data_penduduk('#nik');

	autocomplete_ttd('#ttd_nama');
	autocomplete_ttd('#ttd_nip');

	if(flag=='add'){
		autocomplete_data_penduduk_detail('#detail_nik_1',1);
		autocomplete_data_penduduk_detail('#detail_nama_1',1);
	}
	if(flag=='edit'){
		var jml_anggota = $(".anggota_keluarga").length;
		for(rand=1;rand<=jml_anggota;rand++){
			autocomplete_data_penduduk_detail('#detail_nik_'+rand,rand);
			autocomplete_data_penduduk_detail('#detail_nama_'+rand,rand);
		}

	}


	
	$('div.jqiclose').html('<button class="btn btn-inverse btn-flat btn-xs" data-toggle="tooltip" title="Close"><i class="fa fa-times"></i></button>');
	$('div.jqi').css('width', '1200px');

}

function validasi_anggota(){
	var status = true;

	$(".detail_nik").each(function (e) {
		var flag = $(this).attr('flag');
		var nik = $("#detail_nik_"+flag).val();
		var nama = $("#detail_nama_"+flag).val();
		var tmpt_lahir = $("#detail_tmpt_lahir_"+flag).val();
		var tgl_lahir = $("#detail_tgl_lahir_"+flag).val();
		var shdk = $("#detail_shdk_"+flag).val();

		if(nik==''){
			status = false;
			line = e+1;
			alert_warning("Silahkan mengisi kolom nik baris "+line+"","#detail_nik_"+flag);
			return false;
		} else if(nama==''){
			status = false;
			line = e+1;
			alert_warning("Silahkan mengisi kolom nama baris "+line+"","#detail_nama_"+flag);
			return false;
		} else if(tmpt_lahir==''){
			status = false;
			line = e+1;
			alert_warning("Silahkan mengisi kolom tempat lahir baris "+line+"","#detail_tmpt_lahir_"+flag);
			return false;
		} else if(tgl_lahir==''){
			status = false;
			line = e+1;
			alert_warning("Silahkan mengisi kolom tanggal lahir baris "+line+"","#detail_tgl_lahir_"+flag);
			return false;
		} else if(shdk=='' || shdk==0){
			status = false;
			line = e+1;
			alert_warning("Silahkan memilih kolom status keluarga baris "+line+"","#detail_shdk_"+flag);
			return false;
		}
    });

	return status;
}

function validasi_form(){
	var status = true;

	$(".wajib_isi").each(function (e) {
		var id = $(this).attr('id');
		var val = $("#"+id).val();
		var caption = $("#"+id).closest('.form-group').find('label').text().replace(/\s*|\*/,'');
		if(val==''){
			status = false;
			alert_warning("Kolom "+caption+"wajib diisi (<span class='require'>*</span>) tidak boleh kosong","#"+id+"");
			return false;
		}
    });

	return status;
}



function process_add_edit_data(status){
	if(validasi_form() && validasi_anggota()){
		var datas = $('#form_pindah').serializeArray();
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
					var pindahid = data.id
					window.location = base_url + 'index.php/'+controller+'/download/id/'+pindahid;
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



function hapus_data(pindahid){
	jQuery.alerts.dialogClass = 'alert-warning';
	jConfirm('Apakah anda yakin ingin menghapus data ini?', 'Konfirmasi?', function (r) {
		if (r == true) {
			processDeleteData(pindahid);//PROSES PENGHAPUSAN DATA
		}//end if true
	});
}

function processDeleteData(pindahid) {
	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/delete_data",
		data : {
			pindahid : pindahid
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




function autocomplete_data_penduduk_kk(identitas){
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
		$('.select2').select2();

		$("#nik").val(data.nik);
		$("#no_kk_asal").val(data.no_kk);
		$("#nama_kk_asal").val(data.nama);
		$("#alamat_asal").val(data.alamat);

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
		$('.select2').select2();

		$("#nama").val(data.nama);
		$("#nik").val(data.nik);
		$("#tempat_lahir").val(data.tmpt_lahir);
		$('#tanggal_lahir').datepicker('setDate', format_tanggal_input(data.tgl_lahir));
		$("#agama").val(data.agama).trigger("change");
		$("#status_perkawinan").val(data.status).trigger("change");

	});
}


function autocomplete_data_penduduk_detail(identitas,flag){
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
		$('.select2').select2();

		$("#detail_nama_"+flag).val(data.nama);
		$("#detail_nik_"+flag).val(data.nik);

		$("#detail_tmpt_lahir_"+flag).val(data.tmpt_lahir);
		$('#detail_tgl_lahir_'+flag).datepicker('setDate', format_tanggal_input(data.tgl_lahir));

		$("#detail_shdk_"+flag).val(data.shdk).trigger("change");

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



