
function alert_normal(message, element_focus, title) {
	jAlert(message, (title ? title : 'Information'), function () {
		jQuery.alerts.dialogClass = null; // reset to default
		if (element_focus != '') {
			$(element_focus).focus();
		}
		return false;
	});
}

function alert_warning(message, element_focus, title) {

	jQuery.alerts.dialogClass = 'alert-warning';
	jAlert(message, (title ? title : 'Warning'), function () {
		jQuery.alerts.dialogClass = null; // reset to default
		if (element_focus != '') {
			$(element_focus).focus();
		}
		return false;
	});
}

function alert_success(message, element_focus, title) {
	jQuery.alerts.dialogClass = 'alert-success';
	jAlert(message, (title != '' ? title : 'Success'), function () {
		jQuery.alerts.dialogClass = null; // reset to default
		if (element_focus != '') {
			$(element_focus).focus();
		}
		return false;
	});
}

function alert_error(message, element_focus, url_redirect, title) {
	jQuery.alerts.dialogClass = 'alert-danger';
	jAlert(message, (title != '' ? title : 'Error'), function () {
		jQuery.alerts.dialogClass = null; // reset to default
		if (element_focus != '') {
			$(element_focus).focus();
		}

		if (url_redirect != '') {
			if (url_redirect != 'reload') {
				window.location.href = url_redirect;
			} else if (url_redirect == 'reload') {
				location.reload();
			}
		}
		return false;
	});
}