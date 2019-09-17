<form class="form-horizontal" action="#" id="form_sk_kematian_suami_istri">
<input type="hidden" id="sk_kematian_suami_istriid" name="sk_kematian_suami_istriid" value="{{ sk_kematian_suami_istriid }}" />
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
<h5>Data yang masih hidup</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="nama" name="nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{ detail.nama }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Alias <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input value="{{detail.alias}}" id="alias" name="alias" type="text" placeholder="Alias" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Bin/Binti 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input value="{{detail.bin_binti}}" id="bin_binti" name="bin_binti" type="text" placeholder="Bin Binti" class="wajib_isi form-control" autocomplete="off"  />
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
<h5>Data yang sudah meninggal</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="meninggal_nama" name="meninggal_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{ detail.meninggal_nama }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Alias <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input value="{{detail.meninggal_alias}}" id="meninggal_alias" name="meninggal_alias" type="text" placeholder="Alias" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Bin/Binti 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input value="{{detail.meninggal_bin_binti}}" id="meninggal_bin_binti" name="meninggal_bin_binti" type="text" placeholder="Bin Binti" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Jenis Kelamin <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{% set checked_l='' %}
{% set checked_p='' %}
{% if detail.meninggal_jk=='l' %}
{% set checked_l='checked=""' %}
{% elseif detail.meninggal_jk=='p' %}
{% set checked_p='checked=""' %}
{% endif %}
<label class="radio-inline"><input name="meninggal_jk" class="meninggal_jk meninggal_jk_l" {{ checked_l }} type="radio" value="l" /> Laki-laki</label> 
<label class="radio-inline"><input name="meninggal_jk" class="meninggal_jk meninggal_jk_p" {{ checked_p }} type="radio" value="p" /> Perempuan</label> 
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
<div class="col-sm-4 col-lg-4 controls">
<input id="meninggal_tempat_lahir" name="meninggal_tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" value="{{ detail.meninggal_tempat_lahir }}" />
</div>
<div class="col-sm-4 col-lg-3 controls">
<input id="meninggal_tanggal_lahir" name="meninggal_tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="{{ format_datepicker(detail.meninggal_tanggal_lahir) }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Kewarganegaraan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_meninggal_kewarganegaraan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Agama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_meninggal_agama|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Pekerjaan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_meninggal_pekerjaan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Alamat <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="meninggal_alamat" id="meninggal_alamat" class="wajib_isi form-control" placeholder="Alamat">{{ detail.meninggal_alamat }}</textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Tanggal Meninggal <span class="require">*</span></label>
<div class="col-sm-4 col-lg-3 controls">
<input id="tanggal_meninggal" name="tanggal_meninggal" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="{{ format_datepicker(detail.tanggal_meninggal) }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Meninggal di <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="tempat_meninggal" name="tempat_meninggal" type="text" placeholder="Meninggal di" class="wajib_isi form-control" autocomplete="off" maxlength="100" value="{{ detail.tempat_meninggal }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Sebab Meninggal <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="sebab_meninggal" name="sebab_meninggal" type="text" placeholder="Sebab Meninggal" class="wajib_isi form-control" autocomplete="off" maxlength="100" value="{{ detail.sebab_meninggal }}" />
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
