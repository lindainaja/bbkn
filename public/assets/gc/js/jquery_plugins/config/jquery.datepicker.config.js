$(function(){
	// $('.datepicker-input').datepicker({
	// 		dateFormat: js_date_format,
	// 		showButtonPanel: true,
	// 		changeMonth: true,
	// 		changeYear: true
	// });
	
	// $('.datepicker-input-clear').button();
	
	// $('.datepicker-input-clear').click(function(){
	// 	$(this).parent().find('.datepicker-input').val("");
	// 	return false;
	// });
	$('.datepicker-input').datepicker({
        format: 'dd/mm/yyyy',
        // container: container,
        todayHighlight: true,
        autoclose: true,
        // orientation: 'bottom',
        language: 'id'
    });
	
});