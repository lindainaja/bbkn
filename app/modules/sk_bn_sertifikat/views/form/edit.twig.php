<form class="form-horizontal" action="#" id="form_sk_bn_sertifikat">
	<input type="hidden" id="sk_bn_sertifikatid" name="sk_bn_sertifikatid" value="{{sk_bn_sertifikatid}}" />
	<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Kelurahan <span class="require">*</span></label>

<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_no_kel|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Tanggal Surat 
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
<h5>Data di KTP</h5>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nama" name="nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off"  value="{{detail.nama}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nomor KTP 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="no_ktp" name="no_ktp" type="text" placeholder="Nomor KTP" class="wajib_isi form-control" autocomplete="off"  value="{{detail.no_ktp}}" />
	</div>
</div>
<div class="form-group">

	<label class="col-sm-4 col-lg-3 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" value="{{detail.tempat_lahir}}"/>
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="tanggal_lahir" name="tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off"  value="{{format_datepicker(detail.tanggal_lahir)}}"/>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Jenis Kelamin <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
		{% set checked_l='' %}
		{% set checked_p='' %}
{% if detail.jk=='l' %}
			{% set checked_l='checked=""' %}
		{% elseif detail.jk=='p' %}
			{% set checked_p='checked=""' %}
{% endif %}
	<label class="radio-inline"><input name="jk" id="jk_l" class="jk" {{ checked_l }} type="radio" value="l" /> Laki-laki</label>
	<label class="radio-inline"><input name="jk" id="jk_p" class="jk" {{ checked_p }} type="radio" value="p" /> Perempuan</label>
	</div>
	</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Status Perkawinan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_status_perkawinan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Pekerjaan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_pekerjaan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Agama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_agama|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Alamat 
	<span class="require">*</span>
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="alamat" id="alamat" class="wajib_isi form-control" placeholder="Alamat">{{detail.alamat}}</textarea>
</div>
</div>
<h5>Data di Sertifikat</h5>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Atas Nama 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="atas_nama" name="atas_nama" type="text" placeholder="Atas Nama" class="wajib_isi form-control" autocomplete="off"  value="{{detail.atas_nama}}" />
	</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Alamat 
	<span class="require">*</span>
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="alamat_2" id="alamat_2" class="wajib_isi form-control" placeholder="Alamat">{{detail.alamat_2}}</textarea>
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nomor Hak Milik 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nomor_hak_milik" name="nomor_hak_milik" type="text" placeholder="Nomor Hak Milik" class="wajib_isi form-control" autocomplete="off"  value="{{detail.nomor_hak_milik}}" />
	</div>
</div>
<h5>Keterangan Data</h5>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama Data Pertama 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="data_a" name="data_a" type="text" placeholder="Sebutkan" class="wajib_isi form-control" autocomplete="off"  value="{{detail.data_a}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama Data Kedua 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="data_b" name="data_b" type="text" placeholder="Sebutkan" class="wajib_isi form-control" autocomplete="off"  value="{{detail.data_b}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama Data Ketiga 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="data_c" name="data_c" type="text" placeholder="Sebutkan" class="wajib_isi form-control" autocomplete="off"  value="{{detail.data_c}}" />
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

</form>	