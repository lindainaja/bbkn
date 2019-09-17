// JavaScript Document
jQuery(document).ready(function(){

    load_data();

	$("#filter_date").datepicker({
		autoclose: true,
		clearBtn: true,
		format: 'mm/yyyy',
		todayHighlight: true,
		minViewMode: 1,
	}).on("change", function(e) {
		console.log("Date changed: ", e.target.value);
		//load_data();
	});


	$('.select2').select2();

	$("#filter_no_kel").on("change", function(e) {
		load_data();
	});
	show_tooltip(".show-tooltip");


});

function load_data(){
	var no_kel = $("#filter_no_kel").val();
	var filter_date = $("#filter_date").val();

	$.ajax({
		type : "POST",
		url : base_url + ""+controller+"/load_data",
		data : {no_kel:no_kel,filter_date:filter_date},
		cache : false,
		dataType : "html",
		beforeSend : function() {
			indikator_sibuk();
		},
		success : function(data) {
			indikator_stop();
			$('#data_entries').html('');
			$('#data_entries').html(data);


			$('#table_sk_hilang_ktp').DataTable( {
				aLengthMenu: [
					[10, 15, 25, 50, 100, -1],
					[10, 15, 25, 50, 100, "All"]
				],
				columnDefs: [
					{ type: 'date-eu', targets: 1 },
					{ type: 'date-eu', targets: 4 },
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
 



