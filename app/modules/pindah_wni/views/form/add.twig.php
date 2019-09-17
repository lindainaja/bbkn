<form class="form-horizontal" action="#" id="form_pindah_wni">
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Kelurahan <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
{{ dropdown_no_kel|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Tanggal <span class="require">*</span></label>
<div class="col-sm-3 col-lg-2 controls">
<input id="date" name="date" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Nomor <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="no" name="no" type="text" placeholder="Nomor" class="wajib_isi form-control" autocomplete="off" maxlength="100" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Pindah Antar <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input value="Antar Kabupaten / Kota atau Antar Provinsi" id="pindah_antar" name="pindah_antar" type="text" placeholder="Pindah Antar" class="wajib_isi form-control" autocomplete="off" maxlength="50" />
</div>
</div>
<h5><strong>Daerah Asal</strong></h5>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Nomor KK <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="no_kk_asal" name="no_kk_asal" type="text" placeholder="Nomor KK" class="wajib_isi form-control" autocomplete="off" maxlength="50" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Nama KK <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="nama_kk_asal" name="nama_kk_asal" type="text" placeholder="Nama KK" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
</div>
</div>

<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Alamat <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<textarea name="alamat_asal" id="alamat_asal" class="wajib_isi form-control" placeholder="Alamat"></textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">RT <span class="require">*</span></label>
<div class="col-sm-2 col-lg-2 controls">
<input id="rt_asal" name="rt_asal" type="text" placeholder="RT" class="wajib_isi form-control" autocomplete="off" maxlength="5" />
</div>
<label class="col-sm-1 col-lg-1 control-label">RW <span class="require">*</span></label>
<div class="col-sm-2 col-lg-2 controls">
<input id="rw_asal" name="rw_asal" type="text" placeholder="RW" class="wajib_isi form-control" autocomplete="off" maxlength="5" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Kodepos </label>
<div class="col-sm-6 col-lg-5 controls">
<input id="kodepos_asal" name="kodepos_asal" type="text" placeholder="Kodepos" class="form-control" autocomplete="off" maxlength="10" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Telepon </label>
<div class="col-sm-6 col-lg-5 controls">
<input id="tlp_asal" name="tlp_asal" type="text" placeholder="Telepon" class="form-control" autocomplete="off" maxlength="25" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Dusun/Dukuh/Kampung <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input  id="kampung_asal" name="kampung_asal" type="text" placeholder="" class="wajib_isi form-control" autocomplete="off" maxlength="50" />
</div>
</div>
<h5><strong>Pemohon</strong></h5>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">NIK <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="nik" name="nik" type="text" placeholder="NIK" class="wajib_isi form-control" autocomplete="off" maxlength="25" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="nama" name="nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
<div class="col-sm-3 col-lg-3 controls">
<input id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" />
</div>
<div class="col-sm-2 col-lg-2 controls">
<input id="tanggal_lahir" name="tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Agama <span class="require">*</span></label>
<div class="col-sm-5 col-lg-5 controls">
{{ dropdown_agama|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Status Perkawinan <span class="require">*</span></label>
<div class="col-sm-5 col-lg-5 controls">
{{ dropdown_status_perkawinan|raw }}
</div>
</div>
<h5><strong>Kepindahan</strong></h5>

<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Alasan Pindah <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
{{ dropdown_alasan_pindah| raw }}
</div>
</div>

<div class="form-group" style="display: none;">
<label class="col-sm-3 col-lg-3 control-label">Alasan Lain  <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="alasan_pindah_lainya" name="alasan_pindah_lainya" type="text" placeholder="Sebutkan" class=" form-control" autocomplete="off" maxlength="250" />
</div>
</div>

<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Klasifikasi Pindah <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
{{ dropdown_klasifikasi_pindah| raw }}
</div>
</div>

<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Jenis Kepindahan <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
{{ dropdown_jenis_kepindahan| raw }}
</div>
</div>


<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Status Nomor KK (Bagi yg. tdk pindah) <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
{{ dropdown_sn_kk_menetap| raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Status Nomor KK (Bagi yg. pindah)  <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
{{ dropdown_sn_kk_pindah| raw }}
</div>
</div>

<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Alamat Tujuan</label>
<div class="col-sm-6 col-lg-5 controls">
<textarea name="alamat_pindah" id="alamat_pindah" class="form-control" placeholder="Alamat Tujuan"></textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">RT</label>
<div class="col-sm-2 col-lg-2 controls">
<input id="rt_pindah" name="rt_pindah" type="text" placeholder="RT" class="form-control" autocomplete="off" maxlength="5" />
</div>
<label class="col-sm-1 col-lg-1 control-label">RW</label>
<div class="col-sm-2 col-lg-2 controls">
<input id="rw_pindah" name="rw_pindah" type="text" placeholder="RW" class="form-control" autocomplete="off" maxlength="5" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Dusun/Dukuh/Kampung</label>
<div class="col-sm-6 col-lg-5 controls">
<input id="dusun_pindah" name="dusun_pindah" type="text" placeholder=" " class="form-control" autocomplete="off" maxlength="200" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Kodepos </label>
<div class="col-sm-6 col-lg-5 controls">
<input id="kodepos_pindah" name="kodepos_pindah" type="text" placeholder="Kodepos" class="form-control" autocomplete="off" maxlength="10" />
</div>
</div>
<!-- <div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Jumlah Pengikut</label>
<div class="col-sm-8 col-lg-2 controls">
<input id="jml_pengikut" name="jml_pengikut" type="text" placeholder="0" value="1" class="form-control" autocomplete="off" maxlength="2" onkeypress="return blockNonNumbers(this, event, true, true);" />
</div>
</div> -->
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Telepon </label>
<div class="col-sm-6 col-lg-5 controls">
<input id="tlp_pindah" name="tlp_pindah" type="text" placeholder="Telepon" class="form-control" autocomplete="off" maxlength="25" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Propinsi</label>
<div class="col-sm-6 col-lg-5 controls">
<input id="prop_pindah" name="prop_pindah" type="text" placeholder="Propinsi" class="form-control" autocomplete="off" maxlength="100" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Kota/Kabupaten</label>
<div class="col-sm-6 col-lg-5 controls">
<input id="kab_pindah" name="kab_pindah" type="text" placeholder="Kota/Kabupaten" class="form-control" autocomplete="off" maxlength="100" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Kecamatan</label>
<div class="col-sm-6 col-lg-5 controls">
<input id="kec_pindah" name="kec_pindah" type="text" placeholder="Kecamatan" class="form-control" autocomplete="off" maxlength="100" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Kelurahan</label>
<div class="col-sm-6 col-lg-5 controls">
<input id="kel_pindah" name="kel_pindah" type="text" placeholder="Kelurahan" class="form-control" autocomplete="off" maxlength="100" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Rencana Tanggal Pindah <span class="require">*</span></label>
<div class="col-sm-3 col-lg-2 controls">
<input id="r_tgl_pindah" name="r_tgl_pindah" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Nomor Registrasi</label>
<div class="col-sm-6 col-lg-5 controls">
<input id="no_reg" name="no_reg" type="text" placeholder="Nomor" class="form-control" autocomplete="off" maxlength="100" />
</div>
</div>

<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Tanggal Registrasi</label>
<div class="col-sm-3 col-lg-2 controls">
<input id="tgl_reg" name="tgl_reg" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" />
</div>
</div>
<h5><strong>Anggota Keluarga</strong></h5>
<div class="form-group anggota_keluarga">
<div class="col-sm-3 col-lg-2 controls">
<input name="detail_nik[]" flag="1" id="detail_nik_1" type="text" placeholder="NIK" class="form-control detail_nik" autocomplete="off" maxlength="25" />
</div>
<div class="col-sm-3 col-lg-2 controls">
<input name="detail_nama[]" flag="1" id="detail_nama_1" type="text" placeholder="Nama" class="form-control" autocomplete="off" maxlength="150" />
</div>
<div class="col-sm-3 col-lg-2 controls">
<input name="detail_tmpt_lahir[]" flag="1" id="detail_tmpt_lahir_1" type="text" placeholder="Tempat Lahir" class="form-control" autocomplete="off" maxlength="100" />
</div>
<div class="col-sm-3 col-lg-2 controls">
<input id="detail_tgl_lahir_1" name="detail_tgl_lahir[]" flag="1" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" />
</div>
<div class="col-sm-3 col-lg-3 controls">
{{ form_dropdown('detail_shdk[]',status_keluarga,'','id="detail_shdk_1" flag="1" class="select2 form-control" style="width:100%" ') | raw}}
</div>
<div class="col-sm-3 col-lg-1 controls">
<a class="btn btn-info show-tooltip btn-sm btn-circle" title="" data-original-title="" href="javascript:;" onclick="add_row()"><i class="fa fa-plus-circle"></i></a>
</div>
</div>
<div id="tpl_tempel"></div>
<br/><br/><h5>Data Tanda Tangan</h5>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="ttd_nama" name="ttd_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">NIP <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="ttd_nip" name="ttd_nip" type="text" placeholder="NIP" class="wajib_isi form-control" autocomplete="off" maxlength="50" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-3 control-label">Jabatan <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="ttd_jabatan" name="ttd_jabatan" type="text" placeholder="Jabatan" class="wajib_isi form-control" autocomplete="off" maxlength="100" />
</div>
</div>
<!-- {{ syarat_form|raw }} -->
</form>
