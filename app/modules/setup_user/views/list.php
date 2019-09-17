<div class="row">
    <div class="col-lg-1">
	<?php
    if($this->flag_add_data){##akses add data
    ?>
        <a href="<?=site_url('setup_user/add')?>" class="btn btn-inverse"><i class="fa fa-plus-square"></i> Tambah User</a>
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
                <h5><i class="fa fa-user"></i>List User</h5>
            </div>
            <div class="box-content">
                <input type="hidden" id="hid_paging" />
                <input type="hidden" id="hid_sort_by" />
                <input type="hidden" id="hid_sort_order" />
                <div id="data_entries" class="table-responsive table-big"></div>
            </div>
        
        </div>
    </div>
</div>
