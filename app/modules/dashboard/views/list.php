<div class="row">
    <div class="col-lg-6">
        <div class="box box-primary">
            <div class="box-title">
                <h5><i class="fa fa-list"></i>Welcome</h5>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="row">
                    <div class="col-md-12">
                        <p><span class="float-down-text">Selamat datang di <?=config_item('web_description')?> (<?=config_item('web_title')?>) .</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
    </div>

    <div class="col-lg-6">
        <div class="box box-primary">
            <div class="box-title">
                <h5><i class="fa fa-list"></i>Filter</h5>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="box-content">
            	<form class="form-horizontal" target="_blank" action="<?=site_url($this->func.'/export_data')?>" id="form_filter" name="form_filter" method="post">
                    <div class="col-sm-8">
                    <?=form_dropdown('filter_no_kel',$kel,$this->session->userdata('log_kel'),'id="filter_no_kel" class="form-control select2" style="width:100%" ')?>
                    </div>
    
                    <div class="col-sm-4 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input id="filter_year" class="form-control input-small" type="text" value="<?=date('Y')?>" autocomplete="off" placeholder="yyyy" name="filter_year">
                        <span class="input-group-btn">
                            <button class="btn btn-inverse btn-flat" type="button" onclick="load_all_chart()">Go!</button>
                        </span>
    
                    </div>
                </form>
                <div class="clearfix">&nbsp;</div>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
    </div>

    <?php
  
	if(count($menu)>0){
		foreach($menu as $menu_key => $menu_val){
			$flex = strtolower($menu_val['description']);
			$flex_ = str_replace(' ','_',$flex);
	?>
    <div class="col-lg-6">
        <div class="box box-primary">
            <div class="box-title">
                <h5><i class="fa fa-bar-chart-o"></i> <?=$menu_val['description']?></h5>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="box-content list_chart" id="<?=$flex_?>"></div>
        </div>
        <div class="clearfix">&nbsp;</div>
    </div>
    <?php
		}
	}
	?>
    <div class="col-lg-6">
        <div class="box box-primary">
            <div class="box-title">
                <h5><i class="fa fa-bar-chart-o"></i> Pelayanan Pindah/Datang </h5>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="box-content list_chart" id="pelayanan_pindat"></div>
        </div>
        <div class="clearfix">&nbsp;</div>
    </div>
    <div class="col-lg-6">
        <div class="box box-primary">
            <div class="box-title">
                <h5><i class="fa fa-bar-chart-o"></i> Pelayanan Tidak Mampu </h5>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="box-content list_chart" id="pelayanan_tidak_mampu"></div>
        </div>
        <div class="clearfix">&nbsp;</div>
    </div>
</div>