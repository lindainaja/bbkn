



function upload_data(sk_belum_pernah_nikahid){
	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/form_upload_data",
		data : {sk_belum_pernah_nikahid:sk_belum_pernah_nikahid},
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
function edit_data(sk_belum_pernah_nikahid) {
	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/form_edit_data",
		data : {sk_belum_pernah_nikahid:sk_belum_pernah_nikahid},
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
	class_angka();

	if (jQuery().timepicker) {
		$(".timepicker-24").timepicker({
			defaultTime: 'current',
			minuteStep: 1,
			showSeconds: false,
			showMeridian: false,
		})
	}

    $(".date-picker").datepicker({
		autoclose: true,
		clearBtn: true,
		format: 'dd/mm/yyyy',
		todayHighlight: true,
	});
	
	autocomplete_data_penduduk('#nik');
	autocomplete_data_penduduk('#nama');
	autocomplete_ttd('#ttd_nama');
	autocomplete_ttd('#ttd_nip');

	$('div.jqiclose').html('<button class="btn btn-inverse btn-flat btn-xs" data-toggle="tooltip" title="Close"><i class="fa fa-times"></i></button>');
	$('div.jqi').css('width', '800px');

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
	if(validasi_form()){
		var datas = $('#form_sk_belum_pernah_nikah').serializeArray();
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
					var sk_belum_pernah_nikahid = data.id
					window.location = base_url + 'index.php/'+controller+'/download/id/'+sk_belum_pernah_nikahid;
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



function hapus_data(sk_belum_pernah_nikahid){
	jQuery.alerts.dialogClass = 'alert-warning';
	jConfirm('Apakah anda yakin ingin menghapus data ini?', 'Konfirmasi?', function (r) {
		if (r == true) {
			processDeleteData(sk_belum_pernah_nikahid);//PROSES PENGHAPUSAN DATA
		}//end if true
	});
}

function processDeleteData(sk_belum_pernah_nikahid) {
	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/delete_data",
		data : {
			sk_belum_pernah_nikahid : sk_belum_pernah_nikahid
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
		$('.select2').select2();

		$("#nik").val(data.nik);
		$("#nama").val(data.nama);
		$(".jk").removeAttr("checked");
		$(".jk_"+data.jk).attr("checked","checked");
		$("#tempat_lahir").val(data.tmpt_lahir);
		$('#tanggal_lahir').datepicker('setDate', format_tanggal_input(data.tgl_lahir));
		$("#agama").val(data.agama).trigger("change");
		$("#pekerjaan").val(data.pekerjaan).trigger("change");
		$("#alamat").val(data.alamat);


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



