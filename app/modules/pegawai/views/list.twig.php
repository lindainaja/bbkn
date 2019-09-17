
<div class="row">
    <div class="col-lg-1">
       {% if flag_add_data %}


        <a href="#" onclick="tambah_data()" class="btn btn-inverse show-tooltip" title="Tambah {{ title }}"><i class="fa fa-plus-square"></i>&nbsp;&nbsp; Tambah Data</a>

    
{% endif %}
    </div>

    <div class="col-lg-7">&nbsp;</div>
    <div class="col-lg-4">
        <div class="input-group">
        <input id="txt_keywords" class="txt_keywords form-control" type="text" value="{{ keyword }}">
        <span class="input-group-btn">
        <button class="btn btn-inverse btn_search" type="button">Search</button>
        </span>
        </div>
    </div>
    <div class="clearfix">&nbsp;</div>
</div>

<div class="row">
    <div class="col-lg-12">
        {{ pesan_flash_data|raw }}
    </div>
</div>
<div class="row">
    <div class="col-md-12">
    	<div class="box">

            <div class="box-title">
                <h5><i class="fa fa-folder-open-o"></i>{{ title }}</h5>
                <div class="box-tool">
                    <span data-original-title="Refresh" class="show-tooltip btn btn-sm btn-inverse" style="margin-top:-3px" onclick="clear_search()"><i class="fa fa-repeat"></i></span>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" target="_blank" action="{{ export_url }}" id="form_filter" name="form_filter" method="post">

                <div class="pull-left">
                {{ dropdown_filter_no_kec|raw }}
                &nbsp;&nbsp;&nbsp;
                {{ dropdown_filter_no_kel|raw }}
                </div>
                <div class="pull-right">
                        <button class="btn btn-primary btn-flat" type="submit"><i class="fa fa-save"></i> Export</button>
                    </div>
            
                <p class="clearfix">&nbsp;</p>
                <input type="hidden" id="hid_paging" />
                <input type="hidden" id="hid_sort_by" />
                <input type="hidden" id="hid_sort_order" /></form>
                
                <div id="data_entries" class="table-responsive"></div>
            </div>
        
        </div>
    </div>
</div>
