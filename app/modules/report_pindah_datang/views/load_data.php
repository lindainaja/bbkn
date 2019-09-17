<div class="row">
    <div class="col-md-12">
    	<div class="box">

            <div class="box-title">
                <h5><i class="fa fa-folder-open-o"></i><?=$this->title?></h5>
            </div>
            <div class="box-content table-responsive" id="full_table">

                <table id="table_rekap" border="1" class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="text-align:center"><strong>No</strong></th>
                            <th style="text-align:center"><strong>Kelurahan</strong></th>
                            <th style="text-align:center"><strong><?=$this->layanan?></strong></th>
                            <th style="text-align:center"><strong>Jumlah</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
					if(count($kelurahan)>0){
						foreach($kelurahan as $kelurahan_key => $kelurahan_val){
							$nama_kel = ucwords(strtolower($kelurahan_val['nama_kel']));
							$no_kel = $kelurahan_val['no_kel'];
					?>
                        <tr>
                          <td rowspan="3" align="center" valign="top"><?=$kelurahan_key+1?></td>
                          <td rowspan="3" valign="top" class="list_kelurahan" no_kel="<?=$no_kel?>" periode="<?=$periode?>"><strong>
                            <?=$nama_kel?>
                          </strong></td>
                            <td>Permohonan KK</td>
                            <td align="center" id="permohonan_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                          <td>Perubahan KK</td>
                            <td align="center" id="perubahan_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                          <td>Hilang KK</td>
                            <td align="center" id="hilang_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                          <td colspan="3" align="center"><strong>Jumlah Total <?=$this->layanan?> Kelurahan <?=$nama_kel?></strong></td>
                          <td align="center"><strong id="total_<?=$no_kel?>">0</strong></td>
                        </tr>
                    <?php
						}
					}
					?>
                    </tbody>
                </table>


                <div id="export_excel" style="display:none">
                    <table width="100%" border="0">
                        <tr>
                            <td colspan="4" style="font-size:20px" align="center"><strong>LAPORAN REKAPITULASI <?=strtoupper($this->layanan)?> <?=$nama_bln?> <?=$nama_thn?></strong></td>
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
                    <div id="hasil_clone"></div>
              </div>
          </div>
        
        </div>
    </div>
</div>
<p class="clearfix"></p>
<div class="row" id="btn_export" style="display:none">
    <div class="col-lg-12">
    	<div class="panel panel-primary pull-right">
            <a class="btn btn-success btn-outlined" download="rekap_pelayanan_ktp_<?=time()?>.xls" href="#" onclick="return ExcellentExport.excel(this, 'export_excel', 'rekap_pelayanan_ktp_<?=time()?>');"><i class="fa fa-table"></i> Export to Excel</a>
        </div>
    </div>
</div>
