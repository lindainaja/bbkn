<form class="form-horizontal" action="#" id="form_sk_keterangan_orangtua">
	<input type="hidden" id="sk_keterangan_orangtuaid" name="sk_keterangan_orangtuaid" value="{{sk_keterangan_orangtuaid}}" />
	<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Kelurahan <span class="require">*</span></label>

<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_no_kel|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Tanggal 
	<span class="require">*</span>
			</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="date" name="date" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="{{format_datepicker(detail.date)}}"  />
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nomor 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="no" name="no" type="text" placeholder="Nomor" class="wajib_isi form-control" autocomplete="off"  value="{{detail.no}}" />
	</div>
</div>
<h5>Data Ayah</h5>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama Ayah 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="ayah_nama" name="ayah_nama" type="text" placeholder="Nama Ayah" class="wajib_isi form-control" autocomplete="off"  value="{{detail.ayah_nama}}" />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Alias Ayah 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="ayah_alias" name="ayah_alias" type="text" placeholder="Alias Ayah" class="wajib_isi form-control" autocomplete="off"  value="{{detail.ayah_alias}}" />
	</div>
</div>
    <div class="form-group">

	<label class="col-sm-4 col-lg-3 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="ayah_tempat_lahir" name="ayah_tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" value="{{detail.ayah_tempat_lahir}}"/>
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="ayah_tanggal_lahir" name="ayah_tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off"  value="{{format_datepicker(detail.ayah_tanggal_lahir)}}"/>
	</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Warga Negara <span class="require">*</span></label>

<div class="col-sm-8 col-lg-7 controls">
{{ ayah_dropdown_kewarganegaraan|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Agama Ayah <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ ayah_dropdown_agama|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Pekerjaan Ayah <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ ayah_dropdown_pekerjaan|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Tempat Tinggal Ayah  
	<span class="require">*</span>
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="ayah_tempat_tinggal" id="ayah_tempat_tinggal" class="wajib_isi form-control" placeholder="Tempat Tinggal Ayah ">{{detail.ayah_tempat_tinggal}}</textarea>
</div>
</div>
<h5>Data Ibu</h5>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama Ibu 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="ibu_nama" name="ibu_nama" type="text" placeholder="Nama Ibu" class="wajib_isi form-control" autocomplete="off"  value="{{detail.ibu_nama}}" />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Alias Ibu 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="ibu_alias" name="ibu_alias" type="text" placeholder="Alias Ibu" class="wajib_isi form-control" autocomplete="off"  value="{{detail.ibu_alias}}" />
	</div>
</div>
    <div class="form-group">

	<label class="col-sm-4 col-lg-3 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="ibu_tempat_lahir" name="ibu_tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" value="{{detail.ibu_tempat_lahir}}"/>
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="ibu_tanggal_lahir" name="ibu_tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off"  value="{{format_datepicker(detail.ibu_tanggal_lahir)}}"/>
	</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Warga Negara <span class="require">*</span></label>

<div class="col-sm-8 col-lg-7 controls">
{{ ibu_dropdown_kewarganegaraan|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Agama Ibu <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ ibu_dropdown_agama|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Pekerjaan Ibu <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ ibu_dropdown_pekerjaan|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Tempat Tinggal Ibu 
	<span class="require">*</span>
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="ibu_tempat_tinggal" id="ibu_tempat_tinggal" class="wajib_isi form-control" placeholder="Tempat Tinggal Ibu">{{detail.ibu_tempat_tinggal}}</textarea>
</div>
</div>
<h5>Data Calon Mempelai</h5>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama Calon 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="c_nama" name="c_nama" type="text" placeholder="Nama Calon" class="wajib_isi form-control" autocomplete="off"  value="{{detail.c_nama}}" />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Alias Calon 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="c_alias" name="c_alias" type="text" placeholder="Alias Calon" class="wajib_isi form-control" autocomplete="off"  value="{{detail.c_alias}}" />
	</div>
</div>
    <div class="form-group">

	<label class="col-sm-4 col-lg-3 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="c_tempat_lahir" name="c_tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" value="{{detail.c_tempat_lahir}}"/>
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="c_tanggal_lahir" name="c_tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off"  value="{{format_datepicker(detail.c_tanggal_lahir)}}"/>
	</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Warga Negara <span class="require">*</span></label>

<div class="col-sm-8 col-lg-7 controls">
{{ c_dropdown_kewarganegaraan|raw }}
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Jenis Kelamin <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
		{% set checked_l='' %}
		{% set checked_p='' %}
{% if detail.c_jk=='l' %}
			{% set checked_l='checked=""' %}
		{% elseif detail.c_jk=='p' %}
			{% set checked_p='checked=""' %}
{% endif %}
	<label class="radio-inline"><input name="c_jk" id="c_jk_l" class="jk" {{ checked_l }} type="radio" value="l" /> Laki-laki</label>
	<label class="radio-inline"><input name="c_jk" id="c_jk_p" class="jk" {{ checked_p }} type="radio" value="p" /> Perempuan</label>
	</div>
	</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Agama Calon <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ c_dropdown_agama|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Pekerjaan Calon <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ c_dropdown_pekerjaan|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Tempat Tinggal Calon 
	<span class="require">*</span>
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="c_tempat_tinggal" id="c_tempat_tinggal" class="wajib_isi form-control" placeholder="Tempat Tinggal Calon">{{detail.c_tempat_tinggal}}</textarea>
</div>
</div>
<h5>Data Tanda Tangan</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_nama" name="ttd_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{detail.ttd_nama}}"/>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">NIP <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_nip" name="ttd_nip" type="text" placeholder="NIP" class="wajib_isi form-control" autocomplete="off" maxlength="50" value="{{detail.ttd_nip}}"  />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Jabatan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_jabatan" name="ttd_jabatan" type="text" placeholder="Jabatan" class="wajib_isi form-control" autocomplete="off" maxlength="100" value="{{detail.ttd_jabatan}}"/>
</div>
</div>
<!-- {{ syarat_form|raw }} -->

</form>	