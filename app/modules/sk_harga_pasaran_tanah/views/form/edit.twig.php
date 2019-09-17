<form class="form-horizontal" action="#" id="form_sk_harga_pasaran_tanah">
<input type="hidden" id="sk_harga_pasaran_tanahid" name="sk_harga_pasaran_tanahid" value="{{ sk_harga_pasaran_tanahid }}" />
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Kelurahan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_no_kel|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Tanggal <span class="require">*</span></label>
<div class="col-sm-4 col-lg-3 controls">
<input id="date" name="date" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="{{ format_datepicker(detail.date) }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nomor <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="no" name="no" type="text" placeholder="Nomor" class="wajib_isi form-control" autocomplete="off" maxlength="100" value="{{ detail.no }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Lokasi <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="lokasi" id="lokasi" class="wajib_isi form-control" placeholder="Lokasi">{{ detail.lokasi }}</textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Luas Tanah 
	<span class="require">*</span>
			</label>
								<div class="col-sm-4 col-lg-3 controls input-group">
<input  id="luas_tanah" name="luas_tanah" type="text" placeholder="Luas Tanah" class="wajib_isi form-control" autocomplete="off" value="{{detail.luas_tanah}}" maxlength=11 onkeypress="return blockNonNumbers(this, event, true, true);" />
<span class="input-group-addon">
M<sup>2</sup>
</span>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Harga Tanah <span class="require">*</span></label>
<div class="col-sm-4 col-lg-3 controls">
<input id="harga_tanah" name="harga_tanah" type="text" placeholder="0" class="wajib_isi form-control angka" autocomplete="off" maxlength="18" onkeypress="return blockNonNumbers(this, event, true, true);" value="{{ format_uang(detail.harga_tanah) }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">No. SHM<span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="no_shm" name="no_shm" type="text" placeholder="No. SHM" class="wajib_isi form-control" autocomplete="off" maxlength="100" value="{{ detail.no_shm }}" />
</div>
</div>
<!-- <div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Harga Bangunan <span class="require">*</span></label>
<div class="col-sm-4 col-lg-3 controls">
<input id="harga_bangunan" name="harga_bangunan" type="text" placeholder="0" class="wajib_isi form-control angka" autocomplete="off" maxlength="18" onkeypress="return blockNonNumbers(this, event, true, true);" value="{{ format_uang(detail.harga_bangunan) }}" />
</div>
</div> -->
<h5>Data Tanda Tangan</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_nama" name="ttd_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{ detail.ttd_nama }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">NIP <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_nip" name="ttd_nip" type="text" placeholder="NIP" class="wajib_isi form-control" autocomplete="off" maxlength="50" value="{{ detail.ttd_nip }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Jabatan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_jabatan" name="ttd_jabatan" type="text" placeholder="Jabatan" class="wajib_isi form-control" autocomplete="off" maxlength="100" value="{{ detail.ttd_jabatan }}" />
</div>
</div>
{{ syarat_form|raw }}
</form>
