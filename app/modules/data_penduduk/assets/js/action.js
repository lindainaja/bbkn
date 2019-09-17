
function tambah_data() {
	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/form_import",
		data : {},
		cache : false,
		dataType : "html",
		beforeSend : function() {
			indikator_sibuk();
		},
		success : function(data) {
			indikator_stop();
			dialog(data,'import');
		},
		error : function(xhr, ajaxOptions, thrownError) {
			alert_warning(xhr.statusText);
			alert_warning(thrownError);
		}
	});
}


function dialog(tpl_html,flag){
	if(flag=='import'){
		var title = 'Import Data Penduduk';
		//var btn =	{Tutup: false, Proses: true};
		var btn =	{};
		var def_btn = 1;
	}
	var temp = {
		state: {
			title: title,
			html: tpl_html,
			buttons: btn,
			defaultButton: def_btn,
			submit: function (e, v) {
				e.preventDefault();
				if (v == true) {//Save

					jQuery.alerts.dialogClass = 'alert-warning';
					jConfirm('Apakah anda yakin akan mengimport data ini? data lama akan terhapus!', 'Konfirmasi?', function (r) {
						if (r == true) {
							process_data();
						}//end if true
					});

				} else {
					$.prompt.close();
				}
			}
		},
	}
	$.prompt(temp);
	
	$('.select2').select2();
	
	process_data();

	$('div.jqiclose').html('<button class="btn btn-inverse btn-flat btn-xs" data-toggle="tooltip" title="Close"><i class="fa fa-times"></i></button>');
	$('div.jqi').css('width', '500px');

}

function close_form(){
	$.prompt.close();
}

function process_data(){

	$("#btn_upload").on('click',(function(e) {
		var no_kel = $('#no_kel').val();
		var file  =  $("#file").val();
		if(no_kel==''){
			alert_warning("Silahkan pilih kelurahan","#no_kel");
		} else if(file==''){
			alert_warning("Silahkan masukkan file","#file");
		} else {
			$("#form_data_penduduk").submit();
		}
	}));
	$("#form_data_penduduk").on('submit',(function(e) {
		var imgname  =  $('input[type=file]').val();
		var imgname  =  $('input[type=file]').val();
		var ext =  imgname.substr( (imgname.lastIndexOf('.') +1) );
		var size  =  $('#file')[0].files[0].size;
		/*alert(imgname);
		alert(ext);
		alert(size);*/

		if(ext!='xls' && ext!='xlsx' && ext!='csv'){
			alert_warning("Hanya file xls dan xlsx yang diizinkan","#file");
		} else {
			e.preventDefault();
			$.ajax({
				url : base_url + ""+controller+"/process_data",
				type: "POST",
				data:  new FormData(this),
				dataType : 'json',
				contentType: false,
				cache: false,
				processData:false,
				beforeSend: lock_browser(),
			 
				success: function(r)
				{
					if(r.success){
						
						//  alert(r.msg)
						// load_data(0);
						doImport(r.info,r.uuid);
					}else{
						unlock_browser();
						alert(r.error)
					}
					
				},
		   });
		}
	}));
}

importData = {
	page : 1,
	uuid : '',
	totalPage: 0,
	info:{},
	inProcess:[],
	complete:[]
};
Array.prototype.remove = function() {
    var what, a = arguments, L = a.length, ax;
    while (L && this.length) {
        what = a[--L];
        while ((ax = this.indexOf(what)) !== -1) {
            this.splice(ax, 1);
        }
    }
    return this;
};
function doImport(info,uuid){
	importData.info = info;
	importData.uuid = uuid;
	importData.totalPage = info.total_pages;
	

	$('.blockUI.blockMsg.blockPage').append('<div class="info" style="text-align:center;font-size:150%"></div>');
	$('.blockUI.blockMsg.blockPage > h1').hide();

	window.numThread = $('select#thread').val();
	window.numThread = parseInt(numThread);
	window.loopThread = 0;
	window.uuid = uuid;
	window.threadIv = setInterval(function(){
		if(window.loopThread < window.numThread){
			doImportPage(window.uuid);
			window.loopThread += 1;
		}else{
			clearInterval(window.threadIv)
		}
		
	},1000);
	
	// setTimeout(function(){
	// 	doImportPage(uuid);
	// },1000);

	// doImportPage();
	// doImportPage();
	// doImportPage();

}
// RECURSIVE
function doImportPage(uuid){
	var page = importData.page;
	if($.inArray(page,importData.inProcess) >= 0 || $.inArray(page,importData.inProcess) >= 0){
		console.log("Page "+page+" Already in process or complete");
		importData.page += 1;
		doImportPage(uuid);
		return;
	}
	if(page > importData.totalPage){
		// $('.blockUI.blockMsg.blockPage > .info').text('Import Selesai');
		// setTimeout(function(){
		// 	$('.blockUI.blockMsg.blockPage > .info').remove();
		// 	$('.blockUI.blockMsg.blockPage > h1').show();
		// 	unlock_browser();
		// 	$.prompt.close();
		// 	load_data();
		// },2000);
		return;
	}
	importData.inProcess.push(page);
	console.log('Importing page ' + page);
	var percentage = Math.ceil(Math.floor((importData.complete.length/importData.totalPage)*100));
	var percentageDiv = '<div class="progress"> <div class="progress-bar" role="progressbar" aria-valuenow="'+percentage+'"aria-valuemin="0" aria-valuemax="100" style="width:'+percentage+'%"> <span class="sr-only">'+percentage+'% Complete</span> </div> </div>';
	$('.blockUI.blockMsg.blockPage > .info').html('Mengimport halaman '+importData.inProcess.join(',')+' dari ' + importData.totalPage + '<br/> '+percentage+'% Complete <br/><br/>'+ percentageDiv  );

	$.post(base_url + ""+controller+"/doImportPage/" + importData.uuid+'/' + page,{
		'filename':importData.info.filename,
		'indexes':importData.info.indexes[page].join(','),
		'total_pages' : importData.totalPage,
		'config': importData.info.config
	}, function(r){
		if(r.success){
			importData.inProcess.remove(page);
			importData.complete.push(page);
			var percentage = Math.ceil(Math.floor((importData.complete.length/importData.totalPage)*100));
			var percentageDiv = '<div class="progress"> <div class="progress-bar" role="progressbar" aria-valuenow="'+percentage+'"aria-valuemin="0" aria-valuemax="100" style="width:'+percentage+'%"> <span class="sr-only">'+percentage+'% Complete</span> </div> </div>';
			$('.blockUI.blockMsg.blockPage > .info').html('Mengimport halaman '+importData.inProcess.join(',')+' dari ' + importData.totalPage + '<br/> '+percentage+'% Complete <br/><br/>'+ percentageDiv  );
			if(page == importData.totalPage){
				$('.blockUI.blockMsg.blockPage > .info').text('Import Selesai');
				setTimeout(function(){
					$('.blockUI.blockMsg.blockPage > .info').remove();
					$('.blockUI.blockMsg.blockPage > h1').show();
					unlock_browser();
					$.prompt.close();
					load_data();
					window.importData = {
						page : 1,
						uuid : '',
						totalPage: 0,
						info:{},
						inProcess:[],
						complete:[]
					};
				},2000);
				return;
			}
			if(importData.complete.length < importData.totalPage){
				
				importData.page += 1;
				doImportPage();
			}else{
				
				

			}
		}
	},'json');
}

