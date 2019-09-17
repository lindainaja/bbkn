jQuery(document).ready(function () {
	$('.select2').select2();
	$("#no_prop").on("change", function(e) {
		load_kab();
	});
	$("#no_kab").on("change", function(e) {
		load_kec();
	});
	$("#no_kec").on("change", function(e) {
		load_kel();
	});
	$("#no_kel").on("change", function(e) {
		load_pegawai();
	});

    form_validation.init();
    form_validation_modify.init();

});

var form_validation = function () {
    var handleValidate = function () {
        $("#form_user").validate({
			ignore: "input[type='text']:hidden",
            errorElement: 'span',
            errorClass: 'help-block',
            rules: {
                roleid: { required: true,},
                pegawaiid: { required: true,},
                no_prop: { required: true,},
                no_kab: { required: true,},
                no_kec: { required: true,},
                nama: { required: true,},
				username:{
						required:true,
						minlength: 3,
						remote:{
							url: base_url + ""+controller+"/check_username",
							data: {id:$('#id').val()},
							type: "post"
							}
				},

                password: {
                    required: true,
                    minlength: 5
                },
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
    return {
        init: function () {
            handleValidate();
        }
    }
}(jQuery);

var form_validation_modify = function () {
    var handleValidate = function () {
        $("#form_modify_user").validate({
			ignore: ":hidden:not(.chosen)",
            errorElement: 'span',
            errorClass: 'help-block',
            rules: {
                roleid: { required: true,},
                pegawaiid: { required: true,},
                no_prop: { required: true,},
                no_kab: { required: true,},
                no_kec: { required: true,},
                nama: { required: true,},
				username:{
						required:true,
						minlength: 3,
						remote:{
							url: base_url + ""+controller+"/check_username",
							data: {id:$('#id').val()},
							type: "post"
							}
				},

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
    return {
        init: function () {
            handleValidate();
        }
    }
}(jQuery);


function load_kab(){
	var no_prop = $("#no_prop").val();

	$.ajaxQueue({
		type : "POST",
		url : base_url + ""+controller+"/load_kab",
		data : {
			no_prop : no_prop,
		},
		cache : false,
		dataType : "html",
		success : function(data) {
			$("#no_kab").html("");
			$("#no_kab").html(data);
			indikator_stop();
			load_kec();
			$('.select2').select2();
		},
		beforeSend : function() {
			indikator_sibuk();
		},
		error : function(xhr, ajaxOptions, thrownError) {
			alert_warning(xhr.statusText);
			alert_warning(thrownError);
		}
	});
}

function load_kec(){
	var no_prop = $("#no_prop").val();
	var no_kab = $("#no_kab").val();

	$.ajaxQueue({
		type : "POST",
		url : base_url + ""+controller+"/load_kec",
		data : {
			no_prop : no_prop,
			no_kab : no_kab,
		},
		cache : false,
		dataType : "html",
		success : function(data) {
			$("#no_kec").html("");
			$("#no_kec").html(data);
			indikator_stop();
			load_kel();
			load_pegawai();
			$('.select2').select2();
		},
		beforeSend : function() {
			indikator_sibuk();
		},
		error : function(xhr, ajaxOptions, thrownError) {
			alert_warning(xhr.statusText);
			alert_warning(thrownError);
		}
	});
}

function load_kel(){
	var no_prop = $("#no_prop").val();
	var no_kab = $("#no_kab").val();
	var no_kec = $("#no_kec").val();

	$.ajaxQueue({
		type : "POST",
		url : base_url + ""+controller+"/load_kel",
		data : {
			no_prop : no_prop,
			no_kab : no_kab,
			no_kec : no_kec,
		},
		cache : false,
		dataType : "html",
		success : function(data) {
			$("#no_kel").html("");
			$("#no_kel").html(data);
			indikator_stop();
			load_pegawai();
			$('.select2').select2();
		},
		beforeSend : function() {
			indikator_sibuk();
		},
		error : function(xhr, ajaxOptions, thrownError) {
			alert_warning(xhr.statusText);
			alert_warning(thrownError);
		}
	});
}


function load_pegawai(){
	var no_kec = $("#no_kec").val();
	var no_kel = $("#no_kel").val();

	$.ajaxQueue({
		type : "POST",
		url : base_url + ""+controller+"/load_pegawai",
		data : {
			no_kec : no_kec,
			no_kel : no_kel,
		},
		cache : false,
		dataType : "html",
		success : function(data) {
			$("#pegawaiid").html("");
			$("#pegawaiid").html(data);
			indikator_stop();
			$('.select2').select2();
		},
		beforeSend : function() {
			indikator_sibuk();
		},
		error : function(xhr, ajaxOptions, thrownError) {
			alert_warning(xhr.statusText);
			alert_warning(thrownError);
		}
	});
}
