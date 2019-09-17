<!-- TEMPLATE -->
 
<!-- TEMPLATE -->
<div id="PD">
	<div class="row">
	    <div class="col-lg-12 col-md-12">
	    	<div class="box">
	            <div class="box-title">
	                <h5><i class="fa fa-folder-open-o"></i><span v-text="tabs[active_index].h +' '+ (tabs[active_index].sub!='' ? '('+ tabs[active_index].sub +')':'')"></span></h5>

	                <div class="box-tool">
	                    <span data-original-title="Refresh" class="show-tooltip btn btn-sm btn-inverse" style="margin-top:-3px" @click="loadData()"><i class="fa fa-repeat"></i></span>
	                </div>
	            </div>
	            <div class="box-content">

	            	<!-- FILTER -->
				<div class="box-content">
					<form class="form-horizontal" target="_blank" v-bind:action="filter_form_action_url" id="form_filter" name="form_filter" method="post">
				        <div class="col-sm-4">

				        <?= $dropdown_filter_no_kel ?>

				        </div>
				        <div class="col-sm-3 input-group">
				            <div class="input-group-addon">
				                <i class="fa fa-calendar"></i>
				            </div>
				            <input id="filter_date" class="form-control input-small" type="text" value="<?=$default_filter_date_value?>" autocomplete="off" placeholder="mm/yyyy" name="filter_date">
				            <span class="input-group-btn">
				                <button class="btn btn-inverse btn-flat" type="button" @click="loadData()">Go!</button>
				            </span>
				        </div>
				        <div class="pull-right">
				            <button class="btn btn-primary btn-flat" type="submit"><i class="fa fa-save"></i> Export</button>
				        </div>
				    </form>
				    <p class="clearfix">&nbsp;</p>
				</div>
				<!-- FILTER -->	
	    	<ul class="nav nav-tabs">
			 
				<li v-for="o in tabs" v-bind:index="$index"><a v-bind:href="'#'+o.s.t" v-bind:index="$index"><span v-text="o.s.c"></span></a></li>
			</ul>
			<div class="tab-content">
			<div v-for="o in tabs" v-bind:id="o.s.t" class="tab-pane">
				<div v-bind:id="'data_entries_'+o.s.t" class="table-responsive">
					<div class="dummy-height"></div>
				</div>		
			</div>
			</div>
		</div>
		</div>
	    </div> 
	</div>
</div>

<script type="text/javascript">
	var unique_hash = '<?= $unique_hash ?>';	
	$(document).ready(function(){
		gc.getActiveFilterData = function(){
			return {
			    bulan:'<?=date('m')?>',
			    tahun:'<?=date('Y')?>',
			    no_kel: '<?= $no_kel ?>'
			}
		};
		gc.ACTIVE_TAB_INDEX = 11;

		
	});
	 	
</script>
<style type="text/css">
	.dummy-height{
		height: 400px;
	}
</style>