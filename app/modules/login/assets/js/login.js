jQuery(document).ready(function () {
    form_validation.init();

	 // refresh captcha
	 $('img#refresh').click(function() {  
			
			change_captcha();
	 });

});

function change_captcha()
{
	base_url + "login/get_captcha";
	document.getElementById('captcha').src=base_url + "login/get_captcha?rnd=" + Math.random();
}

var form_validation = function () {

    var handleValidate = function () {
        $("#login-form").validate({
            errorElement: 'span',
            errorClass: 'help-block',
            rules: {
				username:{
					required:true,
					minlength: 3,
					remote:{
						url: base_url + ""+controller+"/check_username",
						type: "post"
					}
				},
                password: {
                    required: true,
                    minlength: 5
                },
				// code: {
				// 	required: true,
				// 	minlength: 5,
				// 	remote:{
				// 		url: base_url + ""+controller+"/check_captcha",
				// 		type: "post"
				// 	}
				// },
            },
			messages: {
				username:{
					remote: 'Username not found',
				},
				code:{
					remote: ' Captcha was incorrect',
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
