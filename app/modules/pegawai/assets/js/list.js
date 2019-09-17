// JavaScript Document

jQuery(document).ready(function(){

	$('.select2').select2();

	$(document).on('change',"#filter_no_kel",function() {
		load_data(0);
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

	var filter_no_kec = $("#filter_no_kec").val();
	var filter_no_kel = $("#filter_no_kel").val();

	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/load_data",
		data : {
			page : page,
			sort_by : sort_by,
			sort_order : sort_order,
			keywords : keywords,
			filter_no_kec : filter_no_kec,
			filter_no_kel : filter_no_kel,
		},
		cache : false,
		dataType : "html",
		success : function(data) {
			$("#data_entries").html("");
			$("#data_entries").html(data);
			show_tooltip(".show-tooltip");
			unlock_browser();
		},
		beforeSend : function() {
			lock_browser();
			//$("#data_entries").html("<div id=\"loading\" align=\"center\"><img src=\""+base_url + "public/img/loaders/loader.gif\"/></div>");
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
