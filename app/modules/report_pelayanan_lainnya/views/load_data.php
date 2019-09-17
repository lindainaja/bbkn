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
                            <td rowspan="20" align="center" valign="top"><?=$kelurahan_key+1?></td>
                            <td rowspan="20" valign="top" class="list_kelurahan" no_kel="<?=$no_kel?>" periode="<?=$periode?>"><strong><?=$nama_kel?></strong></td>
                            <td>Ahli Waris</td>
                            <td align="center" id="ahli_waris_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                            <td>Ahli Waris Tanah</td>
                            <td align="center" id="ahli_waris_tanah_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                            <td>Kebakaran</td>
                            <td align="center" id="kebakaran_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                            <td>Pas Jalan</td>
                            <td align="center" id="pas_jalan_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                            <td>Penghasilan</td>
                            <td align="center" id="penghasilan_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                            <td>Beda Nama Rekening</td>
                            <td align="center" id="bn_rekening_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                            <td>Beda Nama Sertifikat</td>
                            <td align="center" id="bn_sertifikat_<?=$no_kel?>">0</td>
                        </tr>
                     <!--    <tr>
                            <td>Penghasilan</td>
                            <td align="center" id="penghasilan_<?=$no_kel?>">0</td>
                        </tr> -->
                        <tr>
                            <td>SK SKCK</td>
                            <td align="center" id="skck_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                            <td>SK Tidak Mampu</td>
                            <td align="center" id="tidak_mampu_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                            <td>SK Tidak Memiliki Rumah</td>
                            <td align="center" id="tidak_memiliki_rumah_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                            <td>SK Harga Pasaran Tanah</td>
                            <td align="center" id="harga_pasaran_tanah_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                            <td>SK IMB</td>
                            <td align="center" id="imb_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                            <td>SK Izin Keramaian</td>
                            <td align="center" id="izin_keramaian_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                            <td>SK Kehilangan</td>
                            <td align="center" id="kehilangan_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                            <td>SK SPPT</td>
                            <td align="center" id="sppt_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                            <td>SK Ikrar Masuk Islam</td>
                            <td align="center" id="ikrar_masuk_islam_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                            <td>SK Pernyataan Ghoib</td>
                            <td align="center" id="surat_pernyataan_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                            <td>SK Ghoib</td>
                            <td align="center" id="ghoib_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                            <td>Kepindahan</td>
                            <td align="center" id="pindah_<?=$no_kel?>">0</td>
                        </tr>
                        <tr>
                            <td>Kedatangan</td>
                            <td align="center" id="datang_<?=$no_kel?>">0</td>
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
