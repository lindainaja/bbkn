<form class="form-horizontal" action="#" id="form_sk_izin_lingkungan">
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Kelurahan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_no_kel|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Tanggal <span class="require">*</span></label>
<div class="col-sm-4 col-lg-3 controls">
<input id="date" name="date" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="" />
</div>
</div>
<h5>Yang Bertanda Tangan / Jabatan</h5>

<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">1. <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-4 controls">
		<input id="btd_1" name="btd_1" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="50" value="" />
	</div>
	<div class="col-sm-3 col-lg-3 controls">
		<input id="btd_1_jabatan" name="btd_1_jabatan" type="text" placeholder="Jabatan" class="wajib_isi form-control" autocomplete="off" maxlength="50" value="" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">2. <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-4 controls">
		<input id="btd_2" name="btd_2" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="50" value="" />
	</div>
	<div class="col-sm-3 col-lg-3 controls">
		<input id="btd_2_jabatan" name="btd_2_jabatan" type="text" placeholder="Jabatan" class="wajib_isi form-control" autocomplete="off" maxlength="50" value="" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">3. <span class="require"></span></label>
	<div class="col-sm-4 col-lg-4 controls">
		<input id="btd_3" name="btd_3" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="50" value="" />
	</div>
	<div class="col-sm-3 col-lg-3 controls">
		<input id="btd_3_jabatan" name="btd_3_jabatan" type="text" placeholder="Jabatan" class="wajib_isi form-control" autocomplete="off" maxlength="50" value="" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">4. <span class="require"></span></label>
	<div class="col-sm-4 col-lg-4 controls">
		<input id="btd_4" name="btd_4" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="50" value="" />
	</div>
	<div class="col-sm-3 col-lg-3 controls">
		<input id="btd_4_jabatan" name="btd_4_jabatan" type="text" placeholder="Jabatan" class="wajib_isi form-control" autocomplete="off" maxlength="50" value="" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">5. <span class="require"></span></label>
	<div class="col-sm-4 col-lg-4 controls">
		<input id="btd_5" name="btd_5" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="50" value="" />
	</div>
	<div class="col-sm-3 col-lg-3 controls">
		<input id="btd_5_jabatan" name="btd_5_jabatan" type="text" placeholder="Jabatan" class="wajib_isi form-control" autocomplete="off" maxlength="50" value="" />
	</div>
</div>

<h5>Data Hajat</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="nama" name="nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="" />
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
<input id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" value="" />
</div>
<div class="col-sm-4 col-lg-3 controls">
<input id="tanggal_lahir" name="tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="" />
</div>
</div>
<!-- <div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Kewarganegaraan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_kewarganegaraan|raw }}
</div>
</div> -->
<!-- <div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Agama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_agama|raw }}
</div>
</div> -->
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
<h5>Data Acara/Kegiatan</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Jenis Kegiatan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="jenis_kegiatan" name="jenis_kegiatan" type="text" placeholder="Jenis Kegiatan" class="wajib_isi form-control" autocomplete="off" maxlength="250" value="" />
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nama Kegiatan <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
	<textarea name="nama_kegiatan" id="nama_kegiatan" class="wajib_isi form-control" placeholder="Hiburan">{{ detail.nama_kegiatan }}</textarea>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Tanggal Acara<span class="require">*</span></label>
	<div class="col-sm-4 col-lg-3 controls">
		<input id="tgl_acara" name="tgl_acara" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="" />
	</div>
	<div class="col-sm-4 col-lg-4 controls">
<input id="hari_acara_ext" name="hari_acara_ext" type="text" placeholder="Ext Hari" class="wajib_isi form-control" autocomplete="off" maxlength="250" value="" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Jam Acara<span class="require">*</span></label>
<div class="col-sm-2 col-lg-2 controls input-group">
<a class="input-group-addon" href="javascript:;">
<i class="fa fa-clock-o"></i>
</a>
<input class="form-control timepicker-24" name="jam_acara" id="jam_acara" type="text" placeholder="H:i" value="" >
</div>
<label class="col-sm-1 col-lg-1 control-label"></label>
<div class="col-sm-2 col-lg-2 controls input-group">
<!-- <a class="input-group-addon" href="javascript:;">
<i class="fa fa-clock-o"></i>
</a> -->
<!-- <span>Selesai</span> -->
<!-- <input class="form-control timepicker-24" name="jam_acara_selesai" id="jam_acara_selesai" type="text" placeholder="H:i" value="" > -->
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nama Acara <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
		<input type="text" name="nama_acara" id="nama_acara" class="wajib_isi form-control" placeholder="Nama Acara" value="{{ detail.nama_acara }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Alamat <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
		<textarea name="alamat_acara" id="alamat_acara" class="wajib_isi form-control" placeholder="Alamat">{{ detail.alamat_acara }}</textarea>
	</div>
</div>

<h5>Data Tanda Tangan</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_nama" name="ttd_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">NIP <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_nip" name="ttd_nip" type="text" placeholder="NIP" class="wajib_isi form-control" autocomplete="off" maxlength="50" value="" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Jabatan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_jabatan" name="ttd_jabatan" type="text" placeholder="Jabatan" class="wajib_isi form-control" autocomplete="off" maxlength="100" value="" />
</div>
</div>
<!-- {{ syarat_form|raw }} -->
</form>
