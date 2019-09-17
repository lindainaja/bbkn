// JavaScript Document
jQuery(document).ready(function(){



    $('#table_setup_role').DataTable( {
		aLengthMenu: [
			[10, 15, 25, 50, 100, -1],
			[10, 15, 25, 50, 100, "All"]
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

        "ajax": base_url + ""+controller+"/load_data",
        "columns": [
            { "data": "paperclip" },
            { "data": "role" },
            { "data": "detail" }
        ]
    });

});

