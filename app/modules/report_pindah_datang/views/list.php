
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

<div id="data_entries">
    <!-- ------------------------------------ -->
    <div v-show="is_loading" id="loading" align="center">
        <img src="http://localhost/babakan/public/img/loaders/loader.gif">
    </div>
    
<div class="row" v-show="show_list">
    <div class="col-md-12">
        <div class="box">

            <div class="box-title">
                <h5><i class="fa fa-folder-open-o"></i><span v-text="title"></span></h5>
            </div>
            <div class="box-content table-responsive" id="full_table">

                <table id="table_rekap" border="1" class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="text-align:center"><strong>No</strong></th>
                            <th style="text-align:center"><strong>Kelurahan</strong></th>
                            <th style="text-align:center"><strong><span v-text="layanan"></span></strong></th>
                            <th style="text-align:center"><strong>Jumlah</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                 
                        <tr v-for="(key,value) in report_data">
                         <td v-bind:rowspan="rowspan" align="center" valign="top" v-if="$index==0">
                            <span v-text="$index+1"></span>
                         </td>
                        
                          <td v-bind:rowspan="rowspan" valign="top" class="list_kelurahan" v-bind:no_kel="no_kel" v-bind:periode="periode" v-if="$index==0"><strong>
                            <span v-text="nama_kel"></span>
                          </strong></td>
                          
                            <td><span v-text="key"></span></td>
                            <td align="center"><span v-text="value"></span></td>
                        </tr>
                        
                        <tr>
                          <td colspan="3" align="center"><strong>Jumlah Total <span v-text="layanan"></span> Kelurahan <span v-text="nama_kel"></span></strong></td>
                          <td align="center"><strong><span v-text="total_value"></span></strong></td>
                        </tr>
                  
                    </tbody>
                </table>


                <div id="export_excel" style="display:none">
                    <table width="100%" border="0">
                        <tr>
                            <td colspan="4" style="font-size:20px" align="center"><strong>LAPORAN REKAPITULASI <span v-text="layanan"></span> <span v-text="nama_bulan"></span> <span v-text="nama_tahun"></span></strong></td>
                        </tr>
                  </table>
                    <?php
                    $colspan = 2;
                    ?>
                    <br/>
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td colspan="2">Propinsi</td>
                            <td colspan="<?=$colspan?>">: <?=config_item('default_nama_prop')?></td>
                        </tr>
                        <tr>
                            <td colspan="2">Kota/Kabupaten</td>
                            <td colspan="<?=$colspan?>">: <?=config_item('default_nama_kab')?></td>
                        </tr>
                        <tr>
                            <td colspan="2">Kecamatan</td>
                            <td colspan="<?=$colspan?>">: <?=config_item('default_nama_kec')?></td>
                        </tr>
                    </table>
                    <br/>
                    <div id="hasil_clone">
                        <table id="table_rekap_2" border="1" class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="text-align:center"><strong>No</strong></th>
                            <th style="text-align:center"><strong>Kelurahan</strong></th>
                            <th style="text-align:center"><strong><span v-text="layanan"></span></strong></th>
                            <th style="text-align:center"><strong>Jumlah</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                 
                        <tr v-for="(key,value) in report_data">
                         <td v-bind:rowspan="rowspan" align="center" valign="top" v-if="$index==0">
                            <span v-text="$index+1"></span>
                         </td>
                        
                          <td v-bind:rowspan="rowspan" valign="top" class="list_kelurahan" v-bind:no_kel="no_kel" v-bind:periode="periode" v-if="$index==0"><strong>
                            <span v-text="nama_kel"></span>
                          </strong></td>
                          
                            <td><span v-text="key"></span></td>
                            <td align="center"><span v-text="value"></span></td>
                        </tr>
                        
                        <tr>
                          <td colspan="3" align="center"><strong>Jumlah Total <span v-text="layanan"></span> Kelurahan <span v-text="nama_kel"></span></strong></td>
                          <td align="center"><strong><span v-text="total_value"></span></strong></td>
                        </tr>
                  
                    </tbody>
                </table>
                    </div>
              </div>
          </div>
        
        </div>
    </div>
</div>
<p class="clearfix"></p>
<div class="row" id="btn_export" style="display:none">
    <div class="col-lg-12">
        <div class="panel panel-primary pull-right">
            <a class="btn btn-success btn-outlined" download="rekap_pelayanan_ktp_<?=time()?>.xls" href="javascript:;" onclick="return ExcellentExport.excel(this, 'export_excel', 'rekap_pelayanan_pindat_<?=time()?>');"><i class="fa fa-table"></i> Export to Excel</a>
        </div>
    </div>
</div>
    <!-- ------------------------------------ -->
</div>
<script type="text/javascript">
var tableToExcel = (function() {
var uri = 'data:application/vnd.ms-excel;base64,'
, template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
, base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
, format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
return function(table, name) {
if (!table.nodeType) table = document.getElementById(table)
var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
window.location.href = uri + base64(format(template, ctx))
}
})();

    PD = {};
    $(document).ready(function(){
        PD = new Vue({
            el:'#data_entries',
            data:{
                show_list:0,
                title: 'Pindah Datang',
                layanan: 'Pelayanan Pindah Datang',
                rowspan:0,
                nama_kel: '',
                total_value:0,
                nama_bulan:'',
                is_loading:false,
                nama_tahun:'',
                report_data:{}
            },
            methods:{
                setData:function(data){
                    PD.show_list=1;
                    
            PD.is_loading=0;
                    PD.nama_tahun = data.nama_tahun;
                    PD.nama_bulan=data.nama_bulan;
                    PD.nama_kel=data.nama_kel;
                    PD.rowspan = 0;
                    PD.total_value = 0;
                    $.each(data.report_data,function(i,v){
                        PD.total_value += parseInt(v);
                        PD.rowspan +=1;
                    });


                    PD.report_data = data.report_data;

                    this.$nextTick(function(){
                        $('#btn_export').show();
                    });
                }
            }
        });
    });
</script>