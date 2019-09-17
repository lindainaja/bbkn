jQuery(document).ready(function () {

	$(".menu_mechanism").click(function(){
		var menuid = $(this).attr("menuid");
		var mechanismid = $(this).val();
		var parent_id = $("#menu_"+menuid).attr("parent_id");
		var parent_id_1 = $("#menu_"+parent_id).attr("parent_id");
		//alert(menuid);
		//alert(mechanismid);
		if(menuid!=1){//selain dashboard
			if($(".menu_mechanism_"+menuid+":checked").length>0) {
				$("#menu_"+menuid).attr("checked", "checked");
			} else {
				$("#menu_"+menuid).removeAttr("checked");
			}
	
			if($(".menu_"+parent_id+":checked").length>0) {
				$("#menu_"+parent_id).attr("checked", "checked");
			} else {
				$("#menu_"+parent_id).removeAttr("checked");
			}

			if($(".menu_"+parent_id_1+":checked").length>0) {
				$("#menu_"+parent_id_1).attr("checked", "checked");
			} else {
				$("#menu_"+parent_id_1).removeAttr("checked");
			}

		}

	});

	$(".menu_1").click(function(){
		var menuid = $(this).val();

		if($("#menu_"+menuid+":checked").length<=0) {
			$(".menu_"+menuid).removeAttr("checked");

			$(".menu_"+menuid).each(function(){
				var menu_subid = $(this).val();
				$(".menu_mechanism_"+menu_subid).removeAttr("checked");
				$(".menu_mechanism_"+menu_subid).removeAttr("disabled");
			});

			$(".menu_"+menuid).each(function(){
				var menu_3 = $(this).val();
				$(".menu_"+menu_3).removeAttr("checked");

				$(".menu_"+menu_3).each(function(){
					var menu_subid = $(this).val();
					$(".menu_mechanism_"+menu_subid).removeAttr("checked");
					$(".menu_mechanism_"+menu_subid).removeAttr("disabled");
				});

			});

		}

		if($("#menu_"+menuid+":checked").length<=0) {
			$(".menu_mechanism_"+menuid).removeAttr("checked");
			$(".menu_mechanism_"+menuid).removeAttr("disabled");
		}
	});

	$(".menu_2").click(function(){
		var parent_id = $(this).attr("parent_id");
		var menuid = $(this).val();

		//remove detail
		if($("#menu_"+menuid+":checked").length<=0) {
			$(".menu_mechanism_"+menuid).removeAttr("checked");
			$(".menu_mechanism_"+menuid).removeAttr("disabled");
		}

		//remove parent
		if($(".menu_"+parent_id+":checked").length>0) {
			$("#menu_"+parent_id).attr("checked", "checked");
		} else {
			$("#menu_"+parent_id).removeAttr("checked");
		}
	
	});


	$(".menu_3").click(function(){
		var menu_2 = $(this).attr("parent_id");
		var menu_1 = $("#menu_"+menu_2).attr("parent_id");
		var menuid = $(this).val();

		//remove detail
		if($("#menu_"+menuid+":checked").length<=0) {
			$(".menu_mechanism_"+menuid).removeAttr("checked");
			$(".menu_mechanism_"+menuid).removeAttr("disabled");
		}

		//remove parent
		if($(".menu_"+menu_2+":checked").length>0) {
			$("#menu_"+menu_2).attr("checked", "checked");
			$("#menu_"+menu_1).attr("checked", "checked");
		} else {
			$("#menu_"+menu_2).removeAttr("checked");
			//remove parent
			if($(".menu_"+menu_2+":checked").length>0) {
				$("#menu_"+menu_2).attr("checked", "checked");
			} else {
				$("#menu_"+menu_2).removeAttr("checked");
			}

		}
	
	});


	$(".grouping").click(function(){
		var menuid = $(this).attr("menuid");
		var grouping = $(this).attr("grouping");


		if ($(this).is(":checked")) {
			$(".grouping_"+grouping+"_"+menuid).each(function(){
				if ($(this).is(":checked")) {
					$(this).removeAttr("disabled");
				} else {
					$(this).attr("disabled", "disabled");
				}
			});
		} else {
			$(".grouping_"+grouping+"_"+menuid).removeAttr("disabled");
		}
	});

	checked_disable_groping();

});

function checked_disable_groping(){
	$(".grouping").each(function(){
		var mechanism = $(this).val();
		var menuid = $(this).attr("menuid");
		var grouping = $(this).attr("grouping");
		if($(".grouping_"+grouping+"_"+menuid+":checked").length<=0) {
		} else {
			$(".grouping_"+grouping+"_"+menuid).each(function(){
				if ($(this).is(":checked")) {
					$(this).removeAttr("disabled");
				} else {
					$(this).attr("disabled", "disabled");
				}
			});
		}

	});
}

if (jQuery().validate) {
  var e = function (e) {
    $(e).closest(".form-group").removeClass("has-success")
  };
  var t = $("#form_tambah").validate({
    errorElement: "span",
    errorClass: "help-block",
    errorPlacement: function (e, t) {
      if (t.parent(".input-group").length) {
        e.insertAfter(t.parent())
      } else {
        e.insertAfter(t)
      }
    },
    focusInvalid: false,
    invalidHandler: function (e, t) {},
    highlight: function (e) {
      $(e).closest(".form-group").removeClass("has-success").addClass("has-error")
    },
    unhighlight: function (t) {
      $(t).closest(".form-group").removeClass("has-error");
      setTimeout(function () {
        e(t)
      },
      3e3)
    },
    success: function (e) {
      e.closest(".form-group").removeClass("has-error").addClass("has-success")
    }
  })
}

$("#form-wizard-role").bootstrapWizard({
  nextSelector: ".button-next",
  previousSelector: ".button-previous",
  onTabClick: function (e, t, n) {
    //alert("on tab click disabled");
    return true
  },
  onNext: function (e, n, r) {
    var i = $("#form_tambah").valid();
    if (!i) {
      t.focusInvalid();
      return false
    }
    var s = n.find("li").length;
    var o = r + 1;
    $(".step-title", $("#form-wizard-role")).text("Step " + (r + 1) + " of " + s);
    jQuery("li", $("#form-wizard-role")).removeClass("done");
    var u = n.find("li");
    for (var a = 0; a < r; a++) {
      jQuery(u[a]).addClass("done")
    }
    if (o == 1) {
      $("#form-wizard-role").find(".button-previous").hide()
    } else {
      $("#form-wizard-role").find(".button-previous").show()
    }
    if (o >= s) {
      $("#form-wizard-role").find(".button-next").hide();
      $("#form-wizard-role").find(".button-submit").show()
    } else {
      $("#form-wizard-role").find(".button-next").show();
      $("#form-wizard-role").find(".button-submit").hide()
    }
    var f = o / s * 100;
    $("#form-wizard-role").find(".progress-bar").css("width", f + "%");
    $("html, body").animate({
      scrollTop: $("#form-wizard-role").offset().top
    },
    900)
  },
  onPrevious: function (e, t, n) {
    var r = t.find("li").length;
    var i = n + 1;
    $(".step-title", $("#form-wizard-role")).text("Step " + (n + 1) + " of " + r);
    jQuery("li", $("#form-wizard-role")).removeClass("done");
    var s = t.find("li");
    for (var o = 0; o < n; o++) {
      jQuery(s[o]).addClass("done")
    }
    if (i == 1) {
      $("#form-wizard-role").find(".button-previous").hide()
    } else {
      $("#form-wizard-role").find(".button-previous").show()
    }
    if (i >= r) {
      $("#form-wizard-role").find(".button-next").hide();
      $("#form-wizard-role").find(".button-submit").show()
    } else {
      $("#form-wizard-role").find(".button-next").show();
      $("#form-wizard-role").find(".button-submit").hide()
    }
    var u = i / r * 100;
    $("#form-wizard-role").find(".progress-bar").css("width", u + "%");
    $("html, body").animate({
      scrollTop: $("#form-wizard-role").offset().top
    },
    900)
  },
  onTabShow: function (e, t, n) {
    var r = t.find("li").length;
    var i = n + 1;
    var s = i / r * 100;
    $("#form-wizard-role").find(".progress-bar").css({
      width: s + "%"
    })
  }
});

$("#form-wizard-role").find(".button-previous").hide();
$("#form-wizard-role .button-submit").click(function () {
	jQuery.alerts.dialogClass = 'alert-info';
	jConfirm('Apakah anda yakin Anda ingin menyimpan role ini?', 'Konfirmasi?', function (r) {
		if (r == true) {
			document.form_tambah.submit();
		}//end if true
	});

	//alert("Finished!")
}).hide()