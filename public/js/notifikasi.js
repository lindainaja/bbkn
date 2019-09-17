// JavaScript Document
jQuery(document).ready(function () {
	//all_notification();
});

function all_notification(){
	var total = $(".list_menu").length;
	$(".list_menu").each(function (e) {
		var _flag = $(this).attr("id");
		load_notifikasi(_flag);
    });
}

function active_menu_notification(){
	var total = $(".list_menu").length;
	$(".list_menu").each(function (e) {
		var _flag = $(this).attr("id");
		var menu = $("li.active > a > span#"+_flag).attr("id");
		if(typeof  menu != 'undefined'){
			load_notifikasi(menu);
		}
    });
}


function load_notifikasi(_flag){
	var url = '';
	if(_flag=='menu_budget_plan'){
		url = 'menu_budget_plan';
	} else if(_flag=='menu_site_schedule'){
		url = 'menu_site_schedule';
	} else if(_flag=='menu_site_material_request'){
		url = 'menu_site_material_request';
	} else if(_flag=='menu_site_taking_material'){
		url = 'menu_site_taking_material';
	} else if(_flag=='menu_site_return_material'){
		url = 'menu_site_return_material';
	} else if(_flag=='menu_site_material_receipt'){
		url = 'menu_site_material_receipt';
	} else if(_flag=='menu_purchasing_budget_request'){
		url = 'menu_purchasing_budget_request';
	} else if(_flag=='menu_purchasing_purchase_order'){
		url = 'menu_purchasing_purchase_order';
	} else if(_flag=='menu_purchasing_material_mutation'){
		url = 'menu_purchasing_material_mutation';
	} else if(_flag=='menu_purchasing_delivery_order'){
		url = 'menu_purchasing_delivery_order';
	} else if(_flag=='menu_cash_request_head_logistic'){
		url = 'menu_cash_request_head_logistic';
	} else if(_flag=='menu_cash_request_site_logistic'){
		url = 'menu_cash_request_site_logistic';
	}
	if(url){
		$.ajaxQueue({
			type : "POST",
			url : base_url + "notification/"+url,
			data : {},
			cache : false,
			dataType : "json",
			success : function(data) {
				$("#"+_flag).html("");
				$("#"+_flag).html(data.html);
				total_menu_site();
				total_menu_purchasing();
				total_menu_budget_cash_request();
				
			},
			beforeSend : function() {
				//$("#"+_flag).html("<div id=\"loading\" align=\"center\"><img src=\""+base_url + "public/img/loaders/loader.gif\"/></div>");
			},
			error : function(xhr, ajaxOptions, thrownError) {
				/*alert_warning(xhr.statusText);
				alert_warning(thrownError);*/
			}
		});
	}
}

function total_menu_site(){
	var total = 0;
	$(".list_menu_site").each(function (e) {
		var _flag = $(this).attr("id");
		var total_notif = parseFloat($("#"+_flag+" > span.badge").text());
		if(isNaN(total_notif) || total_notif == null){
			total_notif = 0;
		}
		total += total_notif;
		$("#menu_site").html("");
		if(total){
			$("#menu_site").html('&nbsp;<span class="badge badge-important">'+total+'</span>');
		}
		//load_notifikasi(_flag);
    });
}

function total_menu_purchasing(){
	var total = 0;
	$(".list_menu_purchasing").each(function (e) {
		var _flag = $(this).attr("id");
		var total_notif = parseFloat($("#"+_flag+" > span.badge").text());
		if(isNaN(total_notif) || total_notif == null){
			total_notif = 0;
		}
		total += total_notif;
		$("#menu_purchasing").html("");
		if(total){
			$("#menu_purchasing").html('&nbsp;<span class="badge badge-important">'+total+'</span>');
		}
		//load_notifikasi(_flag);
    });
}

function total_menu_budget_cash_request(){
	var total = 0;
	$(".list_menu_budget_cash_request").each(function (e) {
		var _flag = $(this).attr("id");
		var total_notif = parseFloat($("#"+_flag+" > span.badge").text());
		if(isNaN(total_notif) || total_notif == null){
			total_notif = 0;
		}
		total += total_notif;
		$("#menu_budget_cash_request").html("");
		if(total){
			$("#menu_budget_cash_request").html('&nbsp;<span class="badge badge-important">'+total+'</span>');
		}
		//load_notifikasi(_flag);
    });
}

