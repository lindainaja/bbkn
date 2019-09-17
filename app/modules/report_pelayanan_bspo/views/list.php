<script type="text/javascript">
    tkeys = <?=json_encode($tkeys)?>;
</script>
<form action="#" class="form-horizontal form-seperated" id="form_report" name="form_report" role="form" method="post">
<div class="row" id="form_filter">
    <div class="col-lg-12">
    	<div class="box">

            <div class="box-title">
                <h5>Filter Data</h5>
            </div>
            <div class="box-content">
                <div class="form-group">
                    <label class="col-sm-4 col-lg-2 control-label">Kelurahan :</label>
                    <div class="col-sm-8 col-lg-5 controls">
                        <?=form_dropdown('filter_no_kel',$kel,$this->session->userdata('log_kel'),'id="filter_no_kel" class="form-control select2" style="width:100%" ')?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-lg-2 control-label">Periode <span class="require">*</span> :</label>

                    <div class="col-sm-8 col-lg-2 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input id="filter_date" name="filter_date" type="text" placeholder="mm/yyyy" class="form-control input-small" value="<?=date('m/Y')?>" autocomplete="off"/>
    
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-lg-2 control-label">&nbsp;</label>
                    <div class="col-sm-8 col-lg-7 controls">
                    <button class="btn btn-inverse btn-outlined btn-sm" type="button" onclick="load_data()"><i class="fa fa-check"></i> Show</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>


    </div>
</div>
</form>

<div id="data_entries"></div>