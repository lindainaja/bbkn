<form class="form-horizontal" action="#" id="form_sk_izin_orangtua">
	<input type="hidden" id="sk_izin_orangtuaid" name="sk_izin_orangtuaid" value="0" />
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
<input id="date" name="date" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
</div>
</div>
<h5>Data Ayah</h5>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="ayah_nama" name="ayah_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Alias 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="ayah_alias" name="ayah_alias" type="text" placeholder="Alias" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="ayah_tempat_lahir" name="ayah_tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" />
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="ayah_tanggal_lahir" name="ayah_tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
	</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Warga Negara <span class="require">*</span></label>

<div class="col-sm-8 col-lg-7 controls">
{{ ayah_dropdown_kewarganegaraan|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Agama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ ayah_dropdown_agama|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Pekerjaan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ ayah_dropdown_pekerjaan|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Tempat Tinggal 
	<span class="require">*</span>
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="ayah_tempat_tinggal" id="ayah_tempat_tinggal" class="wajib_isi form-control" placeholder="Tempat Tinggal"></textarea>
</div>
</div>
<h5>Data Ibu</h5>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="ibu_nama" name="ibu_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Alias 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="ibu_alias" name="ibu_alias" type="text" placeholder="Alias" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="ibu_tempat_lahir" name="ibu_tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" />
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="ibu_tanggal_lahir" name="ibu_tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
	</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Warga Negara <span class="require">*</span></label>

<div class="col-sm-8 col-lg-7 controls">
{{ ibu_dropdown_kewarganegaraan|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Agama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ ibu_dropdown_agama|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Pekerjaan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ ibu_dropdown_pekerjaan|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Tempat Tinggal 
	<span class="require">*</span>
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="ibu_tempat_tinggal" id="ibu_tempat_tinggal" class="wajib_isi form-control" placeholder="Tempat Tinggal"></textarea>
</div>
</div>
<h5>Data Calon Suami</h5>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="cs_nama" name="cs_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Alias 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="cs_alias" name="cs_alias" type="text" placeholder="Alias" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Jenis Kelamin <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<label class="radio-inline"><input name="cs_jk" class="cs_jk jk_l" checked="" type="radio" value="l" /> Laki-laki</label> 
<label class="radio-inline"><input name="cs_jk" class="cs_jk jk_p" type="radio" value="p" /> Perempuan</label> 
</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="cs_tempat_lahir" name="cs_tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" />
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="cs_tanggal_lahir" name="cs_tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
	</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Warga Negara <span class="require">*</span></label>

<div class="col-sm-8 col-lg-7 controls">
{{ cs_dropdown_kewarganegaraan|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Agama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ cs_dropdown_agama|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Pekerjaan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ cs_dropdown_pekerjaan|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Tempat Tinggal 
	<span class="require">*</span>
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="cs_tempat_tinggal" id="cs_tempat_tinggal" class="wajib_isi form-control" placeholder="Tempat Tinggal"></textarea>
</div>
</div>
<h5>Data Calon Istri</h5>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="ci_nama" name="ci_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Alias 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="ci_alias" name="ci_alias" type="text" placeholder="Alias" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="ci_tempat_lahir" name="ci_tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" />
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="ci_tanggal_lahir" name="ci_tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
	</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Warga Negara <span class="require">*</span></label>

<div class="col-sm-8 col-lg-7 controls">
{{ ci_dropdown_kewarganegaraan|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Agama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ ci_dropdown_agama|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Pekerjaan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ ci_dropdown_pekerjaan|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Tempat Tinggal 
	<span class="require">*</span>
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="ci_tempat_tinggal" id="ci_tempat_tinggal" class="wajib_isi form-control" placeholder="Tempat Tinggal"></textarea>
</div>
</div>

</form>	