// JavaScript Document
jQuery(document).ready(function(){

	var js = document.createElement("script");
	js.type = "text/javascript";
	js.src = base_url + "public/js/jquery.alerts.js",
	document.body.appendChild(js);

	$(document).on('click',".delete",function() {
		var id = $(this).attr("field");

		jQuery.alerts.dialogClass = 'alert-warning';
		jConfirm('Are you sure you wish to delete this data?', 'Delete Confirmation?', function (r) {
			if (r == true) {
				processDeleteData(id);//PROSES PENGHAPUSAN DATA
			}//end if true
		});

	});

	$(document).on('click',".sorting",function() {
		var sort_by = $(this).attr("field");
		var sort_order = $(this).attr("name");

		$("#hid_sort_by").val(sort_by);
		$("#hid_sort_order").val(sort_order);
		
		load_data(0);
		
	});

	$(".btn_search").click(function() {//KEYWORDS
		load_data(0);
	});

	$(document).on("keypress","#txt_keywords",function(event) {//KEYWORDS
		search_data(event, this);
	});

	$(document).on("click", ".pagination ul > li > a",function() {//paging
		var hal = $(this).attr("id");
		$("#hid_paging").val(hal);
		$(this).removeAttr("href");
		var page = $("#hid_paging").val();
		load_data(page);
	});
});

function processDeleteData(userid) {
	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/delete_data",
		data : {
			userid : userid
		},
		cache : false,
		dataType : "html",
		beforeSend : indikator_sibuk(),
		success : function(data) {
			indikator_stop();
			load_data(0);
		},
		error : function(xhr, ajaxOptions, thrownError) {
			alert_warning(xhr.statusText);
			alert_warning(thrownError);
		}
	});
}


function search_data(e, input){
	var code = (e.keyCode ? e.keyCode : e.which);
	if(code == 13) { //Enter keycode
		load_data(0);
	}
}

function load_data(page){
	var sort_by = $("#hid_sort_by").val();
	var sort_order = $("#hid_sort_order").val();
	var keywords = $("#txt_keywords").val();

	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/load_data",
		data : {
			page : page,
			sort_by : sort_by,
			sort_order : sort_order,
			keywords : keywords
		},
		cache : false,
		dataType : "html",
		success : function(data) {
			$("#data_entries").html("");
			$("#data_entries").html(data);
			show_tooltip(".show-tooltip");
		},
		beforeSend : function() {
			$("#data_entries").html("<div id=\"loading\" align=\"center\"><img src=\""+base_url + "public/img/loaders/loader.gif\"/></div>");
		},
		error : function(xhr, ajaxOptions, thrownError) {
			alert_warning(xhr.statusText);
			alert_warning(thrownError);
		}
	});
}

function clear_search(){
	$("#txt_keywords").val('');
	load_data(0);
}
