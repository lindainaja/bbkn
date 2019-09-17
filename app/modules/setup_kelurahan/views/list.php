<div class="btn-toolbar pull-left">
	<?php
    if($this->flag_add_data){##akses add data
    ?>
        <a href="#" onclick="tambah_data()" class="btn btn-inverse show-tooltip" title="Tambah <?=$this->title?>"><i class="fa fa-plus-square"></i>&nbsp;&nbsp; Tambah <?=$this->title?></a>
	<?php
	}
    ?>
</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<div class="row">
    <div class="col-md-12">
    	<div class="box">

            <div class="box-title">
                <h5><i class="fa fa-folder-open-o"></i>Data <?=$this->title?></h5>
                <div class="box-tool">
                    <span data-original-title="Refresh" class="show-tooltip btn btn-sm btn-inverse" style="margin-top:-3px" onclick="load_data()"><i class="fa fa-repeat"></i></span>
                </div>
            </div>
            <div class="box-content">
                <div id="data_entries" class="table-responsive table-big"></div>

            </div>
        
        </div>
    </div>
</div>