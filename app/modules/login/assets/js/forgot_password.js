jQuery(document).ready(function () {
	$("#form_forgot").validate({
		ignore: "input[type='text']:hidden",
		errorElement: 'span',
		errorClass: 'help-block',
		rules: {
			username:{
				required:true,
				minlength: 3,
				remote:{
					url: base_url + ""+controller+"/check_username",
					data: {id:$('#id').val()},
					type: "post"
				}
			},
			code: {
				required: true,
				minlength: 5,
				remote:{
					url: base_url + ""+controller+"/check_captcha",
					type: "post"
				}
			},


		},
        messages: {
			username:{
				remote: 'Username not found',
			},
			code:{
				remote: ' Captcha was incorrect',
			},
		},
		submitHandler: function(form)
		{
			send_verifikasi();
		},
		highlight: function (element) { // hightlight error inputs
			$(element)
				.closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
		},
		unhighlight: function (element) { // revert the change done by hightlight
			$(element)
				.closest('.form-group').removeClass('has-error'); // set error class to the control group
		}
	});
});

function send_verifikasi(){
	var username = $("#username").val();
	var code = $("#code").val();

	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/ajax_send_verifikasi",
		data : {
			username : username,
			code : code,
		},
		cache : false,
		dataType : "json",
		success : function(data) {
			$(".loading").html("");
			$("#conten_forgot").html(data.tpl_html);
			running();
			form_verifikasi();

		},
		beforeSend : function() {
			$(".loading").html("<div id=\"loading\" align=\"center\"><img src=\""+base_url + "public/img/loaders/ajax-loader.gif\"/></div>");
		},
		error : function(xhr, ajaxOptions, thrownError) {
			alert(xhr.statusText);
			alert(thrownError);
		}
	});
}

function form_verifikasi(){
	$("#form_verifikasi").validate({
		ignore: "input[type='text']:hidden",
		errorElement: 'span',
		errorClass: 'help-block',
		rules: {
			code:{
					required:true,
					minlength: 3,
					remote:{
						url: base_url + ""+controller+"/check_code_verifikasi",
						type: "post"
					}
			},


		},
        messages: {
			code:{
				remote: 'Code invalid',
			},
		},
		submitHandler: function(form)
		{
			form_new_password();
		},
		highlight: function (element) { // hightlight error inputs
			$(element)
				.closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
		},
		unhighlight: function (element) { // revert the change done by hightlight
			$(element)
				.closest('.form-group').removeClass('has-error'); // set error class to the control group
		}
	});
}

function form_new_password(){
	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/form_new_password",
		data : {},
		cache : false,
		dataType : "json",
		success : function(data) {
			$(".loading").html("");
			$("#conten_forgot").html(data.tpl_html);
			form_validation_password();

		},
		beforeSend : function() {
			$(".loading").html("<div id=\"loading\" align=\"center\"><img src=\""+base_url + "public/img/loaders/ajax-loader.gif\"/></div>");
		},
		error : function(xhr, ajaxOptions, thrownError) {
			alert(xhr.statusText);
			alert(thrownError);
		}
	});
}

function form_validation_password(){
	$("#form_validation_password").validate({
		ignore: "input[type='text']:hidden",
		errorElement: 'span',
		errorClass: 'help-block',
		rules: {
			new_password: {
				required: true,
				minlength: 5,
			},
			"conf_password"	:{
				required:true,
				equalTo: "#new_password",
			},


		},
		submitHandler: function(form)
		{
			process_change_password();
		},
		highlight: function (element) { // hightlight error inputs
			$(element)
				.closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
		},
		unhighlight: function (element) { // revert the change done by hightlight
			$(element)
				.closest('.form-group').removeClass('has-error'); // set error class to the control group
		}
	});
}

function process_change_password(){
	var new_password = $("#new_password").val();
	var conf_password = $("#conf_password").val();
	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/process_change_password",
		data : {new_password:new_password,conf_password:conf_password},
		cache : false,
		dataType : "json",
		success : function(data) {
			$(".loading").html("");
			$("#conten_forgot").html(data.tpl_html);
		},
		beforeSend : function() {
			$(".loading").html("<div id=\"loading\" align=\"center\"><img src=\""+base_url + "public/img/loaders/ajax-loader.gif\"/></div>");
		},
		error : function(xhr, ajaxOptions, thrownError) {
			alert(xhr.statusText);
			alert(thrownError);
		}
	});

}

function resend_code(){
	var username = $("#username").val();

	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/ajax_send_verifikasi",
		data : {
			username : username,
		},
		cache : false,
		dataType : "json",
		success : function(data) {
			var banyak_klik = $("#banyak_klik").val();
			banyak_klik = parseFloat(banyak_klik)+1;
			$("#banyak_klik").val(banyak_klik);
			if(banyak_klik>=3){
				$("#btn_resend").remove();
			}

			$(".loading").html("");
			$("#clockdiv").html("");
			$("#clockdiv").html('<div><span class="minutes"></span><div class="smalltext">Minutes</div></div>&nbsp;<div><span class="seconds"></span><div class="smalltext">Seconds</div></div>');
			running();

		},
		beforeSend : function() {
			$(".loading").html("<div id=\"loading\" align=\"center\"><img src=\""+base_url + "public/img/loaders/ajax-loader.gif\"/></div>");
		},
		error : function(xhr, ajaxOptions, thrownError) {
			alert(xhr.statusText);
			alert(thrownError);
		}
	});
}


function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  return {
    'total': t,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
	var clock = document.getElementById(id);
	var minutesSpan = clock.querySelector('.minutes');
	var secondsSpan = clock.querySelector('.seconds');

	function updateClock() {
		var t = getTimeRemaining(endtime);

		minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
		secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

		if (t.total <= 0) {
			window.location = base_url + 'index.php/login/logout'
			clearInterval(timeinterval);
		}
	}

	updateClock();
	var timeinterval = setInterval(updateClock, 1000);
}

function running(){
	var deadline = new Date(Date.parse(new Date()) + 5 * 60 * 1000);
	initializeClock('clockdiv', deadline);
}
