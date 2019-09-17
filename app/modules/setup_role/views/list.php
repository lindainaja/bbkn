<div class="btn-toolbar pull-left">
	<?php
    if($this->flag_add_data){##akses add data
    ?>
        <a href="<?=site_url($this->func.'/add')?>" class="btn btn-inverse"><i class="fa fa-plus-square"></i>&nbsp;&nbsp; Tambah <?=$this->title?></a>
	<?php
	}
    ?>
</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<div class="row">
    <div class="col-lg-12">
        <?=$this->session->flashdata('pesan')?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
    	<div class="box">

            <div class="box-title">
                <h5><i class="fa fa-folder-open-o"></i>Data <?=$this->title?></h5>
            </div>
            <div class="box-content table-responsive">
                <table class="table table-striped table-big" id="table_setup_role" width="100%">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="85%"><div align="center">Role</div></th>
                            <th width="10%"><div align="center">Ops</div></th>
                        </tr>
                    </thead>
                </table>
            </div>
        
        </div>
    </div>
</div>