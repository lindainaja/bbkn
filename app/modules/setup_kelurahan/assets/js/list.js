// JavaScript Document
jQuery(document).ready(function(){

    load_data();

	$('.select2').select2();

	$(".select2").on("change", function(e) {
		load_data();
	});
	show_tooltip(".show-tooltip");


});

function load_data(){

	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/load_data",
		data : {},
		cache : false,
		dataType : "html",
		beforeSend : function() {
			indikator_sibuk();
		},
		success : function(data) {
			indikator_stop();
			$('#data_entries').html('');
			$('#data_entries').html(data);


			$('#table_adjustment_material').DataTable( {
				aLengthMenu: [
					[10, 15, 25, 50, 100, -1],
					[10, 15, 25, 50, 100, "All"]
				],
				columnDefs: [
					///{ type: 'date-eu', targets: 4 },
				],
				iDisplayLength: 25,
				oLanguage: {
					sLengthMenu: "_MENU_",
					sInfo: "_START_ - _END_ of _TOTAL_",
					sInfoEmpty: "0 - 0 of 0",
					oPaginate: {
						sPrevious: "Prev",
						sNext: "Next"
					}
				},
			});
			show_tooltip(".show-tooltip");

		},
		error : function(xhr, ajaxOptions, thrownError) {
			alert_warning(xhr.statusText);
			alert_warning(thrownError);
		}
	});

}
 



