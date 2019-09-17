jQuery(document).ready(function () {
	form_autentication();
});

function form_autentication(){
	$("#form_autentication").validate({
		ignore: "input[type='text']:hidden",
		errorElement: 'span',
		errorClass: 'help-block',
		rules: {
			code:{
					required:true,
					minlength: 3,
					remote:{
						url: base_url + ""+controller+"/check_code_verifikasi_login",
						data: {userid:$('#userid').val()},
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
			document.form_autentication.submit();
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

function resend_code(){
	var userid = $("#userid").val();

	$.ajax({
		type : "POST",
		url : base_url + "login/ajax_genereate_authentication",
		data : {
			userid : userid,
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
	var deadline = new Date(Date.parse(new Date()) + 2 * 60 * 1000);
	initializeClock('clockdiv', deadline);
}
running();
