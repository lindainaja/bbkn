<form class="form-horizontal" action="#" id="form_skck">
<input type="hidden" id="skckid" name="skckid" value="0" />
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Kelurahan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_no_kel|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Tanggal <span class="require">*</span></label>
<div class="col-sm-4 col-lg-3 controls">
<input id="date" name="date" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
</div>
</div>
<!-- <div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nomor <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="no" name="no" type="text" placeholder="Nomor" class="wajib_isi form-control" autocomplete="off" maxlength="100" />
</div>
</div> -->
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="nama" name="nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Jenis Kelamin <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<label class="radio-inline"><input name="jk" class="jk jk_l" checked="" type="radio" value="l" /> Laki-laki</label> 
<label class="radio-inline"><input name="jk" class="jk jk_p" type="radio" value="p" /> Perempuan</label> 
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
<div class="col-sm-4 col-lg-4 controls">
<input id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" />
</div>
<div class="col-sm-4 col-lg-3 controls">
<input id="tanggal_lahir" name="tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Kebangsaan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_kewarganegaraan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Suku <span class="require">*</span></label>
<div class="col-sm-4 col-lg-4 controls">
<input id="suku" name="suku" type="text" placeholder="Nama Suku" class="wajib_isi form-control" autocomplete="off" maxlength="50" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Agama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_agama|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Status Perkawinan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_status_perkawinan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Pekerjaan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_pekerjaan|raw }}
</div>
</div>

<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Alamat <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="alamat" id="alamat" class="wajib_isi form-control" placeholder="Alamat"></textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nomor KTP</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="nik" name="nik" type="text" placeholder="Nomor KTP" class="form-control" autocomplete="off" maxlength="50" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Domisili <span class="require">*</span></label>
<div class="col-sm-4 col-lg-7 controls">
<input id="domisili" name="domisili" type="text" placeholder="Domisili" class="wajib_isi form-control" autocomplete="off" maxlength="100" />
</div>
</div>
<!-- <div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Alamat Asal</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="alamat_asal" id="alamat_asal" class="form-control" placeholder="Alamat Asal"></textarea>
</div>
</div> -->


<!-- <div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">No KK</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="no_kk" name="no_kk" type="text" placeholder="No KK" class="form-control" autocomplete="off" maxlength="50" />
</div>
</div> -->

<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Keperluan<span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="persyaratan_untuk" name="persyaratan_untuk" type="text" placeholder="Nama Keperluan" class="wajib_isi form-control" autocomplete="off" maxlength="250" />
</div>
</div>
<h5>Data Kapolsek</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="pol_nama" name="pol_nama" type="text" placeholder="Nama Kapolsek" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">NIP </label>
<div class="col-sm-8 col-lg-7 controls">
<input id="pol_nip" name="pol_nip" type="text" placeholder="NIP Jika Ada" class=" form-control" autocomplete="off" maxlength="50" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Jabatan  </label>
<div class="col-sm-8 col-lg-7 controls">
<input id="pol_jabatan" name="pol_jabatan" type="text" placeholder="Jabatan Jika Ada" class=" form-control" autocomplete="off" maxlength="100" value="KAPOLSEK MAMUJU" />
</div>
</div>
<h5>Data Pemberi Pernyataan</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="pp_nama" name="pp_nama" type="text" placeholder="Nama Pemberi Pernyataan" class="wajib_isi form-control" autocomplete="off" maxlength="150"   />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">NIP </label>
<div class="col-sm-8 col-lg-7 controls">
<input id="pp_nip" name="pp_nip" type="text" placeholder="NIP Jika Ada" class=" form-control" autocomplete="off" maxlength="50"   />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Jabatan  </label>
<div class="col-sm-8 col-lg-7 controls">
<input id="pp_jabatan" name="pp_jabatan" type="text" placeholder="Jabatan Jika Ada" class=" form-control" autocomplete="off" maxlength="100" />
</div>
</div>
<h5>Data Tanda Tangan</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_nama" name="ttd_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">NIP <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_nip" name="ttd_nip" type="text" placeholder="NIP" class="wajib_isi form-control" autocomplete="off" maxlength="50" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Jabatan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_jabatan" name="ttd_jabatan" type="text" placeholder="Jabatan" class="wajib_isi form-control" autocomplete="off" maxlength="100" />
</div>
</div>
{{ syarat_form|raw }}
</form>
