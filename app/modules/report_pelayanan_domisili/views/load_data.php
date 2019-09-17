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
                          <td rowspan="12" align="center" valign="top"><?=$kelurahan_key+1?></td>
                          <td rowspan="12" valign="top" class="list_kelurahan" no_kel="<?=$no_kel?>" periode="<?=$periode?>"><strong>
                            <?=$nama_kel?>
                          </strong></td>
                            <td>WNI</td>
                            <td align="center" id="wni_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                          <td>WNA</td>
                            <td align="center" id="wna_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                          <td>Domisili Kantor</td>
                            <td align="center" id="domisili_kantor_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                          <td>Domisili KK</td>
                            <td align="center" id="domisili_kk_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                          <td>Domisili Penduduk</td>
                            <td align="center" id="domisili_penduduk_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                          <td>Tempat Usaha</td>
                            <td align="center" id="tempat_usaha_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                          <td>Domisili Usaha</td>
                            <td align="center" id="domisili_usaha_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                          <td>Usaha Pasar</td>
                            <td align="center" id="usaha_pasar_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                          <td>Izin Usaha</td>
                            <td align="center" id="izin_usaha_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                          <td>Surat Keterangan Usaha</td>
                            <td align="center" id="surat_keterangan_usaha_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                          <td>SK Domisili Usaha (NEW)</td>
                            <td align="center" id="domisili_usaha_new<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                          <td>SK Domisili Yayasan</td>
                            <td align="center" id="domisili_yayasan_<?=$no_kel?>">0</td>
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
