function indikator_sibuk() {
	  
	// $("#main-content").remove();
	var petunjuk = "<img src='" + base_url + "public/img/loaders/loader.gif'/>";
	$.blockUI({ message: petunjuk,
		css: {
	    	border: '0',
			top:             '40%',
			left:            '35%',
			backgroundColor:'transparent',
	    },
	    baseZ:  10059,
	    overlayCSS:  { backgroundColor: '#FFFFFF',opacity:0.0,cursor:'wait'}
	});
	// var overlay = $("<div id='modal-overlays' style=\"position: relative;\">"+
	// 	 				 // '<div>'+
	// 					'<div style="height: 200px; width: 400px; position: absolute; left: 50%; margin-left: -50px; top: 50%; margin-top: -50px;">'+
	// 					 ' I am some centered shrink-to-fit content! <br />'+
	// 					  'tum te tum'+
	// 					// '</div>'+
	// 					'</div></div>');
	// $("#content").after(overlay);
	// overlay.append(petunjuk);
	// overlay.fadeIn(50);
}


function indikator_stop() {
	$.unblockUI();
}

function lock_browser() {
	$.blockUI({css: {
			border: "none",
			padding: "15px",
			'border-radius': '10px',
			backgroundColor: "#000",
			'-webkit-border-radius': "10px",
			'-moz-border-radius': "10px",
			opacity: .5,
			color: "#fff"
		},
	});
}

function unlock_browser(){
	$.unblockUI();
}

function loading_text() {
	var html = '<div id="fountainTextG" id="loading" align="center">';
	html += '<div id="fountainTextG_1" class="fountainTextG" style="text-color : black;">P</div>'
	html += '<div id="fountainTextG_2" class="fountainTextG">r</div>';
	html += '<div id="fountainTextG_3" class="fountainTextG">o</div>';
	html += '<div id="fountainTextG_4" class="fountainTextG" style="text-color : red;">H</div>';
	html += '<div id="fountainTextG_5" class="fountainTextG">u</div>';
	html += '<div id="fountainTextG_6" class="fountainTextG">k</div>';
	html += '<div id="fountainTextG_7" class="fountainTextG">u</div>';
	html += '<div id="fountainTextG_8" class="fountainTextG">m</div>';
	html += '<div id="fountainTextG_9" class="fountainTextG">.</div>';
	html += '<div id="fountainTextG_10" class="fountainTextG">.</div>';
	html += '<div id="fountainTextG_11" class="fountainTextG">.</div>';
	html += '</div>';
	return html;
}


function show_tooltip(identity) {
	var identity = identity ? identity : '.show-tooltip';
	$(identity).tooltip({
		container: "body",
		delay: {
			show: 500
		}
	});
}
