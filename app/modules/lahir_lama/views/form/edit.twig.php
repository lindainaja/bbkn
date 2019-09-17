<form class="form-horizontal" action="#" id="form_lahir_lama">
<input type="hidden" id="lahir_lamaid" name="lahir_lamaid" value="{{ lahir_lamaid }}" />
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
<h5>Data Anak</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama kecil Kel <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="nama" name="nama" type="text" placeholder="Nama kecil Kel" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{ detail.nama }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama dewasa Kel</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="nama_dewasa" name="nama_dewasa" type="text" placeholder="Nama dewasa Kel" class="form-control" autocomplete="off" maxlength="150" value="{{ detail.nama_dewasa }}" />
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
{% set checked_t='' %}
{% set checked_k='' %}
{% if detail.jenis_kelahiran=='Tunggal' %}
{% set checked_t='checked=""' %}
{% elseif detail.jenis_kelahiran=='Kembar' %}
{% set checked_k='checked=""' %}
{% endif %}
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Kelahiran <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<label class="radio-inline"><input name="jenis_kelahiran" {{ checked_t }} class="jenis_kelahiran jenis_kelahiran_tunggal" type="radio" value="Tunggal" /> Tunggal</label> 
<label class="radio-inline"><input name="jenis_kelahiran" {{ checked_k }} class="jenis_kelahiran jenis_kelahiran_kembar" type="radio" value="Kembar" /> Kembar</label> 
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Alamat dilahirkan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="alamat_kelahiran" id="alamat_kelahiran" class="wajib_isi form-control" placeholder="Alamat dilahirkan">{{ detail.alamat_kelahiran }}</textarea>
</div>
</div>
<h5>Data Orang Tua</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama Ibu <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ibu_nama" name="ibu_nama" type="text" placeholder="Nama Ibu" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{ detail.ibu_nama }}" />
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
<label class="col-sm-4 col-lg-4 control-label">Nama Ayah <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ayah_nama" name="ayah_nama" type="text" placeholder="Nama Ayah" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{ detail.ayah_nama }}" />
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
<label class="col-sm-4 col-lg-4 control-label">Pekerjaan Ayah <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_ayah_pekerjaan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Alamat <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="alamat_ortu" id="alamat_ortu" class="wajib_isi form-control" placeholder="Alamat">{{ detail.alamat_ortu }}</textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Kelahiran Ke <span class="require">*</span></label>
<div class="col-sm-2 col-lg-2 controls">
<input id="kelahiran_ke" name="kelahiran_ke" type="text" placeholder="Ke" class="wajib_isi form-control" autocomplete="off" maxlength="2" onkeypress="return blockNonNumbers(this, event, true, true);" value="{{ detail.kelahiran_ke }}" />
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
