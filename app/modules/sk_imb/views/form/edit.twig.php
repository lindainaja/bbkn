<form class="form-horizontal" action="#" id="form_sk_imb">
<input type="hidden" id="sk_imbid" name="sk_imbid" value="{{ sk_imbid }}" />
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
<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="nama" name="nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{ detail.nama }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Jenis Kelamin <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{% set checked_l='' %}
{% set checked_p='' %}
{% if detail.jk=='l' %}
{% set checked_l='checked=""' %}
{% elseif detail.jk=='p' %}
{% set checked_p='checked=""' %}
{% endif %}
<label class="radio-inline"><input name="jk" class="jk jk_l" {{ checked_l }} type="radio" value="l" /> Laki-laki</label> 
<label class="radio-inline"><input name="jk" class="jk jk_p" {{ checked_p }} type="radio" value="p" /> Perempuan</label> 
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
<div class="col-sm-4 col-lg-4 controls">
<input id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" value="{{ detail.tempat_lahir }}" />
</div>
<div class="col-sm-4 col-lg-3 controls">
<input id="tanggal_lahir" name="tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="{{ format_datepicker(detail.tanggal_lahir) }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Kewarganegaraan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_kewarganegaraan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Agama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_agama|raw }}
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
<textarea name="alamat" id="alamat" class="wajib_isi form-control" placeholder="Alamat">{{ detail.alamat }}</textarea>
</div>
</div>
<h5>Data Bangunan</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Panjang Bangunan <span class="require">*</span></label>
<div class="col-sm-5 col-lg-3 controls input-group">
<input id="panjang" name="panjang" type="text" placeholder="0.00" class="wajib_isi form-control angka" onkeypress="return blockNonNumbers(this, event, true, true);"  autocomplete="off" maxlength="18" value="{{ detail.panjang }}" />
<span class="input-group-btn">
<span class="btn">m</span>
</span>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Lebar Bangunan <span class="require">*</span></label>
<div class="col-sm-5 col-lg-3 controls input-group">
<input id="lebar" name="lebar" type="text" placeholder="0.00" class="wajib_isi form-control angka" onkeypress="return blockNonNumbers(this, event, true, true);"  autocomplete="off" maxlength="18" value="{{ detail.lebar }}" />
<span class="input-group-btn">
<span class="btn">m</span>
</span>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Jumlah Lantai <span class="require">*</span></label>
<div class="col-sm-5 col-lg-3 controls input-group">
<input id="jml_lantai" name="jml_lantai" type="text" placeholder="0" class="wajib_isi form-control angka" onkeypress="return blockNonNumbers(this, event, true, true);"  autocomplete="off" maxlength="8" value="{{ detail.jml_lantai }}" />
<span class="input-group-btn">
<span class="btn">Lantai</span>
</span>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Luas Teras <span class="require">*</span></label>
<div class="col-sm-5 col-lg-3 controls input-group">
<input id="luas_teras" name="luas_teras" type="text" placeholder="0.00" class="wajib_isi form-control angka" onkeypress="return blockNonNumbers(this, event, true, true);"  autocomplete="off" maxlength="18" value="{{ detail.luas_teras }}" />
<span class="input-group-btn">
<span class="btn">m<sup>2</sup></span>
</span>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Pondasi <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="pondasi" name="pondasi" type="text" placeholder="Pondasi" class="wajib_isi form-control" autocomplete="off" maxlength="200" value="{{ detail.pondasi }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Dinding <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="dinding" name="dinding" type="text" placeholder="Dinding" class="wajib_isi form-control" autocomplete="off" maxlength="200" value="{{ detail.dinding }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Atap <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="atap" name="atap" type="text" placeholder="Atap" class="wajib_isi form-control" autocomplete="off" maxlength="200" value="{{ detail.atap }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Lantai <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="lantai" name="lantai" type="text" placeholder="Lantai" class="wajib_isi form-control" autocomplete="off" maxlength="200" value="{{ detail.lantai }}" />
</div>
</div>
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
