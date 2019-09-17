<div class="btn-toolbar pull-left">
{% if flag_add_data == 1 %}
<a href="#" onclick="tambah_data()" class="btn btn-inverse show-tooltip" title="Tambah {{ subject }}"><i class="fa fa-plus-square"></i>&nbsp;&nbsp; Tambah Data</a>
{% endif %}
</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<div class="row">
    <div class="col-md-12">
    	<div class="box">

            <div class="box-title">
                <h5><i class="fa fa-folder-open-o"></i>Data {{ title }}</h5>
                <div class="box-tool">
                    <span data-original-title="Refresh" class="show-tooltip btn btn-sm btn-inverse" style="margin-top:-3px" onclick="load_data()"><i class="fa fa-repeat"></i></span>
                </div>
            </div>
            <div class="box-content">
            	<form class="form-horizontal" target="_blank" action="{{ export_url }}" id="form_filter" name="form_filter" method="post">
                    <div class="col-sm-4">
                    {{ dropdown_filter_no_kel|raw }}
                    </div>
    
                    <div class="col-sm-3 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input id="filter_date" class="form-control input-small" type="text" value="{{ default_filter_date_value }}" autocomplete="off" placeholder="mm/yyyy" name="filter_date">
                        <span class="input-group-btn">
                            <button class="btn btn-inverse btn-flat" type="button" onclick="load_data()">Go!</button>
                        </span>
    
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-primary btn-flat" type="submit"><i class="fa fa-save"></i> Export</button>
                    </div>
                </form>

                <p class="clearfix">&nbsp;</p>
                <div id="data_entries" class="table-responsive"></div>

            </div>
        
        </div>
    </div>
</div>