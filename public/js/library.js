function full_url() {
	return newURL = window.location.protocol + "://" + window.location.host + "/" + window.location.pathname;
}

function uri_segment(segment) {
	segment -= 1;
	var pathArray = uri;
	return pathArray[segment];
}

function display_if_null_dash(text) {
	if (text == "" || text == null) {
		return '---';
	} else {
		return text;
	}
}

function format_tanggal_input(tanggal) {
	if (tanggal != '' && typeof tanggal != 'undefined') {
		today = new Date(tanggal);
		var dateString = today.format('dd/mm/yyyy');
		return dateString;
	} else {
		return '';
	}
}

function isNumber(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}
