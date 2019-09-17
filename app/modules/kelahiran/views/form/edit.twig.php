<form class="form-horizontal" action="#" id="form_kelahiran">
<input type="hidden" id="kelahiranid" name="kelahiranid" value="{{ kelahiranid }}" />
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
<label class="col-sm-4 col-lg-4 control-label">Keperluan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="keperluan" id="keperluan" class="wajib_isi form-control" placeholder="Keperluan">{{ detail.keperluan }}</textarea>
</div>
</div>
<h5>Data Anak</h5>
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
<!-- <div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Pukul <span class="require">*</span></label>
<div class="col-sm-2 col-lg-2 controls input-group">
<a class="input-group-addon" href="javascript:;">
<i class="fa fa-clock-o"></i>
</a>
<input class="wajib_isi form-control timepicker-24" name="pukul" id="pukul" type="text" placeholder="H:i" value="{{ format_jam_2(detail.pukul) }}" >
</div>
</div> -->
<h5>Data Ibu</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ibu_nama" name="ibu_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{ detail.ibu_nama }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">NIK <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ibu_nik" name="ibu_nik" type="text" placeholder="NIK" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{ detail.ibu_nik }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Umur <span class="require">*</span></label>
<div class="col-sm-3 col-lg-3 controls input-group">
<input id="ibu_umur" name="ibu_umur" type="text" placeholder="Umur" class="wajib_isi form-control" autocomplete="off" maxlength="18" onkeypress="return blockNonNumbers(this, event, true, true);" value="{{ detail.ibu_umur }}" />
<span class="input-group-addon">
Tahun
</span>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Kewarganegaraan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_ibu_kewarganegaraan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Agama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_ibu_agama|raw }}
</div>
</div>
 <div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Pekerjaan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_ibu_pekerjaan|raw }}
</div>
</div>
 

<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Alamat <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="ibu_alamat" id="ibu_alamat" class="wajib_isi form-control" placeholder="Alamat">{{ detail.ibu_alamat }}</textarea>
</div>
</div>
<h5>Data Ayah</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ayah_nama" name="ayah_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{ detail.ayah_nama }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">NIK <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ayah_nik" name="ayah_nik" type="text" placeholder="NIK" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{ detail.ayah_nik }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Umur <span class="require">*</span></label>
<div class="col-sm-3 col-lg-3 controls input-group">
<input id="ayah_umur" name="ayah_umur" type="text" placeholder="Umur" class="wajib_isi form-control" autocomplete="off" maxlength="18" onkeypress="return blockNonNumbers(this, event, true, true);" value="{{ detail.ayah_umur }}" />
<span class="input-group-addon">
Tahun
</span>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Kewarganegaraan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_ayah_kewarganegaraan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Agama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_ayah_agama|raw }}
</div>
</div>

<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Pekerjaan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_ayah_pekerjaan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Alamat <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="ayah_alamat" id="ayah_alamat" class="wajib_isi form-control" placeholder="Alamat">{{ detail.ayah_alamat }}</textarea>
</div>
</div>

<!-- <h5>Data Pelapor</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="pelapor_nama" name="pelapor_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{ detail.pelapor_nama }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">NIK <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="pelapor_nik" name="pelapor_nik" type="text" placeholder="NIK" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{ detail.pelapor_nik }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Umur <span class="require">*</span></label>
<div class="col-sm-3 col-lg-3 controls input-group">
<input id="pelapor_umur" name="pelapor_umur" type="text" placeholder="Umur" class="wajib_isi form-control" autocomplete="off" maxlength="18" onkeypress="return blockNonNumbers(this, event, true, true);" value="{{ detail.pelapor_umur }}" />
<span class="input-group-addon">
Tahun
</span>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Pekerjaan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_pelapor_pekerjaan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Alamat <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="pelapor_alamat" id="pelapor_alamat" class="wajib_isi form-control" placeholder="Alamat">{{ detail.pelapor_alamat }}</textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Hubungan pelapor dengan bayi <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="hubungan_pelapor" name="hubungan_pelapor" type="text" placeholder="Hubungan pelapor dengan bayi" class="wajib_isi form-control" autocomplete="off" maxlength="100" value="{{ detail.hubungan_pelapor }}" />
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
<!-- {{ syarat_form|raw }} -->
</form>
