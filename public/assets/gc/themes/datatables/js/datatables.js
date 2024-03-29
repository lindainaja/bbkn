var default_per_page = typeof default_per_page !== 'undefined' ? default_per_page : 10;
var oTable = null;
var oTableArray = [];
var oTableMapping = [];

function supports_html5_storage()
{
	try {
		JSON.parse("{}");
		return 'localStorage' in window && window['localStorage'] !== null;
	} catch (e) {
		return false;
	}
}

var use_storage = supports_html5_storage();

var aButtons = [];
var mColumns = [];

function init_data_tables(){
	$('table.groceryCrudTable thead tr th').each(function(index){
		if(!$(this).hasClass('actions'))
		{
			mColumns[index] = index;
		}
	});
	if(typeof unset_export == 'undefined'){
		unset_export = false;
	}
	// if(!unset_export)
	// {
	// 	aButtons.push(    {
	//          "sExtends":    "xls",
	//          "sButtonText": export_text,
	//          "mColumns": mColumns
	//      });
	// }

	// if(!unset_print)
	// {
	// 	aButtons.push({
	//          "sExtends":    "print",
	//          "sButtonText": print_text,
	//          "mColumns": mColumns
	//      });
	// }

	//For mutliplegrids disable bStateSave as it is causing many problems
	if ($('.groceryCrudTable').length > 1) {
		use_storage = false;
	}

	$('.groceryCrudTable').each(function(index){
		if (typeof oTableArray[index] !== 'undefined') {
			return false;
		}

		oTableMapping[$(this).attr('id')] = index;

		oTableArray[index] = loadDataTable(this);
	});

	$(".groceryCrudTable tfoot input").keyup( function () {

		chosen_table = datatables_get_chosen_table($(this).closest('.groceryCrudTable'));

		chosen_table.fnFilter( this.value, chosen_table.find("tfoot input").index(this) );

		if(use_storage)
		{
			var search_values_array = [];

			chosen_table.find("tfoot tr th").each(function(index,value){
				search_values_array[index] = $(this).children(':first').val();
			});

			localStorage.setItem( 'datatables_search_'+ unique_hash ,'["' + search_values_array.join('","') + '"]');
		}
	} );

	var search_values = localStorage.getItem('datatables_search_'+ unique_hash);

	if( search_values !== null)
	{
		$.each($.parseJSON(search_values),function(num,val){
			if(val !== '')
			{
				$(".groceryCrudTable tfoot tr th:eq("+num+")").children(':first').val(val);
			}
		});
	}
}
$(document).ready(function() {
	if(typeof DONT_INIT_DT != 'undefined'){
		// console.log('please dont datatables');

		return;
	}
	// console.log('please load datatables');
	init_data_tables();



	loadListenersForDatatables();

	

} );

function loadListenersForDatatables() {
	// console.log('loadListenersForDatatables');
	var hasHandler = $('.refresh-data').attr('hasHandler')=='yes';
	if(!hasHandler){
		$('.refresh-data').click(function(){
			var this_container = $(this).closest('.dataTablesContainer');
			var new_container = $("<div/>").addClass('dataTablesContainer');

			App.blockUI({
                target: ".dataTablesContainer",
                // boxed: !0
            });
			var dataOnly=gc.settings.loadDataOnly;

			$.ajax({
				url: $(this).attr('data-url')+'?uuidv4='+uuidv4()+(dataOnly?'&dataOnly=true':''),
				dataType: dataOnly?'json':'html',
				success: function(my_output){
					App.unblockUI('.dataTablesContainer');

					if(dataOnly){
						var data = my_output;
						this_container.after(new_container);
						new_container.html(data.list_view);
						$('.groceryCrudTable').DataTable( {
        					data: data.data
    					});
						
					}else{
						
						if(typeof DONT_INIT_DT != 'undefined'){
							this_container = $(this).closest('.customDTContainer');
							new_container = $("<div/>").addClass('customDTContainer');
							return;
						}
						this_container.after(new_container);
 
						this_container.remove();
						new_container.html(my_output);

						if(typeof DONT_INIT_DT != 'undefined'){
							return;
						}
						oTable = null;
						oTableArray = [];
						oTableMapping = [];

						$('.groceryCrudTable').each(function(index) {
						    if (typeof oTableArray[index] !== 'undefined') {
						        return false;
						    }

						    oTableMapping[$(this).attr('id')] = index;

						    oTableArray[index] = loadDataTable(this);

						    gc.oTable = oTable;
						    gc.oTableArray = oTableArray;
						    gc.oTableMapping = oTableMapping;
						});


						loadListenersForDatatables();

						if (typeof gc.afterRefreshGrid == 'function') {
						    gc.afterRefreshGrid(my_output);
						}
					}
					
					
				}
			});
		});
		$('.refresh-data').attr('hasHandler','yes');
	}
	
}
function refreshData(){

}
function loadDataTable(this_datatables) {
	var offsetTop = 0;
	var dtbl = $(this_datatables).dataTable({
		// "bJQueryUI": true,
		"sPaginationType": "simple_numbers",//"full_numbers",
		responsive: 0,
            fixedHeader: {
                header: !0,
                headerOffset: offsetTop
            },
            // bPaginate: !1,
            // sDom: "t",
		"bStateSave": use_storage,
        "fnStateSave": function (oSettings, oData) {
            localStorage.setItem( 'DataTables_' + unique_hash, JSON.stringify(oData) );
        },
    	"fnStateLoad": function (oSettings) {
            return JSON.parse( localStorage.getItem('DataTables_'+unique_hash) );
    	},
		"iDisplayLength": default_per_page,
		// "aaSorting": datatables_aaSorting,
		"oLanguage":{
		    "sProcessing":   list_loading,
		    "sLengthMenu":   show_entries_string,
		    "sZeroRecords":  list_no_items,
		    "sInfo":         displaying_paging_string,
		    "sInfoEmpty":   list_zero_entries,
		    "sInfoFiltered": filtered_from_string,
		    "sSearch":       search_string+":",
		    "oPaginate": {
		        "sFirst":    paging_first,
		        "sPrevious": paging_previous,
		        "sNext":     paging_next,
		        "sLast":     paging_last
		    }
		},
		"bDestory": true,
		"bRetrieve": true,
		"fnDrawCallback": function() {
			$('.image-thumbnail').fancybox({
				'transitionIn'	:	'elastic',
				'transitionOut'	:	'elastic',
				'speedIn'		:	600,
				'speedOut'		:	200,
				'overlayShow'	:	false
			});
			add_edit_button_listener();
			
		},
		"sDom": 'T<"clear"><"H"lfr>t<"F"ip>',
	    "oTableTools": {
	    	"aButtons": aButtons,
	        "sSwfPath": base_url+"public/assets/gc/themes/datatables/extras/TableTools/media/swf/copy_csv_xls_pdf.swf"
	    }
	});
	setTimeout(function(){
				try{
					$(this_datatables).DataTable().page('last').draw('page');

				}catch(e){}
			},1000);	
	return dtbl;
}
function gotoLastPage() {
	// body...
}
function datatables_get_chosen_table(table_as_object)
{
	chosen_table_index = oTableMapping[table_as_object.attr('id')];
	return oTableArray[chosen_table_index];
}

function delete_row(delete_url , row_id, el)
{
	if(confirm(message_alert_delete))
	{
		App.blockUI({
            target: ".dataTablesContainer",
            // boxed: !0
        });
		$.ajax({
			url: delete_url+'?uuidv4='+uuidv4(),
			dataType: 'json',
			success: function(data)
			{
				if(data.success)
				{
					success_message(data.success_message);

					if(row_id == -1){
						var tr = $(el).closest('tr[role=row]');
						var dt = $('table.groceryCrudTable').DataTable();
						dt.row(tr).remove().draw( false );
						return;
					}

					chosen_table = datatables_get_chosen_table($('tr#row-'+row_id).closest('.groceryCrudTable'));

					$('tr#row-'+row_id).addClass('row_selected');
					try{
						var anSelected = fnGetSelected( chosen_table );
						chosen_table.fnDeleteRow( anSelected[0] );
					}catch(e){}
					
				}
				else
				{
					error_message(data.error_message);
				}
			},
			complete:function(){
				App.unblockUI('.dataTablesContainer');
			}
		});
	}

	return false;
}

function fnGetSelected( oTableLocal )
{
	var aReturn = new Array();
	var aTrs = oTableLocal.fnGetNodes();

	for ( var i=0 ; i<aTrs.length ; i++ )
	{
		if ( $(aTrs[i]).hasClass('row_selected') )
		{
			aReturn.push( aTrs[i] );
		}
	}
	return aReturn;
}