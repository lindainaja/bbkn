<div class="row">
    <div class="col-lg-1">
	<?php
    if($this->flag_data){##akses add data
    ?>
        <a href="#" onclick="tambah_data()" class="btn btn-inverse show-tooltip" title="Import <?=$this->title?>"><i class="fa fa-plus-square"></i>&nbsp;&nbsp; Import <?=$this->title?></a>
	<?php
	}
    ?>
    </div>

    <div class="col-lg-7">&nbsp;</div>
    <div class="col-lg-4">
        <div class="input-group">
        <input id="txt_keywords" class="txt_keywords form-control" type="text" value="<?=$keyword?>">
        <span class="input-group-btn">
        <button class="btn btn-inverse btn_search" type="button">Search</button>
        </span>
        </div>
    </div>
    <div class="clearfix">&nbsp;</div>
</div>

<div class="row">
    <div class="col-lg-12">
        <?=$this->session->flashdata('pesan')?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
    	<div class="box">

            <div class="box-title">
                <h5><i class="fa fa-folder-open-o"></i><?=$this->title?></h5>
                <div class="box-tool">
                    <span data-original-title="Refresh" class="show-tooltip btn btn-sm btn-inverse" style="margin-top:-3px" onclick="clear_search()"><i class="fa fa-repeat"></i></span>
                </div>
            </div>
            <div class="box-content">
                <div class="pull-left">
                <?php echo form_dropdown('filter_no_kel',$kel,$this->session->userdata('log_kel'),'id="filter_no_kel" class="form-control select2" style="width:300px" ')?>
                </div>
                <p class="clearfix">&nbsp;</p>
                <input type="hidden" id="hid_paging" />
                <input type="hidden" id="hid_sort_by" />
                <input type="hidden" id="hid_sort_order" />
                <div id="data_entries" class="table-responsive"></div>
            </div>
        
        </div>
    </div>
</div>