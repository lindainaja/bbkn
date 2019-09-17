// JavaScript Document
jQuery(document).ready(function(){
	var js = document.createElement("script");
	js.type = "text/javascript";
	js.src = base_url + "public/js/jquery.alerts.js",
	document.body.appendChild(js);

	$(document).on('click',".delete",function() {
		var id = $(this).attr("field");

		jQuery.alerts.dialogClass = 'alert-warning';
		jConfirm('Apakah anda yakin ingin menghapus data ini?', 'Konfirmasi Hapus?', function (r) {
			if (r == true) {
				processDeleteData(id);//PROSES PENGHAPUSAN DATA
			}//end if true
		});

	});


});

function processDeleteData(id) {
	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/delete_data",
		data : {
			id : id
		},
		cache : false,
		dataType : "html",
		success : function(data) {
			window.location = base_url + 'index.php/'+controller
		},
		error : function(xhr, ajaxOptions, thrownError) {
			alert_warning(xhr.statusText);
			alert_warning(thrownError);
		}
	});
}
