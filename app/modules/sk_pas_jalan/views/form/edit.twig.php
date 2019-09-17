<form class="form-horizontal" action="#" id="form_sk_pas_jalan">
	<input type="hidden" id="sk_pas_jalanid" name="sk_pas_jalanid" value="{{sk_pas_jalanid}}" />
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
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nama" name="nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off"  value="{{detail.nama}}" />
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

	<label class="col-sm-4 col-lg-3 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" value="{{detail.tempat_lahir}}"/>
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="tanggal_lahir" name="tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off"  value="{{format_datepicker(detail.tanggal_lahir)}}"/>
	</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Agama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_agama|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Pekerjaan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_pekerjaan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Warga Negara <span class="require">*</span></label>

<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_kewarganegaraan|raw }}
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Suku 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="suku" name="suku" type="text" placeholder="Suku" class="wajib_isi form-control" autocomplete="off"  value="{{detail.suku}}" />
	</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Alamat Asal 
	<span class="require">*</span>
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="alamat_asal" id="alamat_asal" class="wajib_isi form-control" placeholder="Alamat Asal">{{detail.alamat_asal}}</textarea>
</div>
</div>
<h5>ALamat Tujuan</h5>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Jalan 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="jalan" name="jalan" type="text" placeholder="Jalan" class="wajib_isi form-control" autocomplete="off"  value="{{detail.jalan}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Kelurahan 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="kelurahan" name="kelurahan" type="text" placeholder="Kelurahan" class="wajib_isi form-control" autocomplete="off"  value="{{detail.kelurahan}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Kecamatan 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="kecamatan" name="kecamatan" type="text" placeholder="Kecamatan" class="wajib_isi form-control" autocomplete="off"  value="{{detail.kecamatan}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Kabupaten 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="kabupaten" name="kabupaten" type="text" placeholder="Kabupaten" class="wajib_isi form-control" autocomplete="off"  value="{{detail.kabupaten}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Provinsi 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="provinsi" name="provinsi" type="text" placeholder="Provinsi" class="wajib_isi form-control" autocomplete="off"  value="{{detail.provinsi}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Maksud 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="maksud" name="maksud" type="text" placeholder="Maksud" class="wajib_isi form-control" autocomplete="off"  value="{{detail.maksud}}" />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">No Ktp 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="no_ktp" name="no_ktp" type="text" placeholder="No Ktp" class="wajib_isi form-control" autocomplete="off"  value="{{detail.no_ktp}}" />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Barang Yang Dibawa 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="barang_yang_dibawa" name="barang_yang_dibawa" type="text" placeholder="Barang Yang Dibawa" class="wajib_isi form-control" autocomplete="off"  value="{{detail.barang_yang_dibawa}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Lamanya 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="lamanya" name="lamanya" type="text" placeholder="Lamanya" class="wajib_isi form-control" autocomplete="off"  value="{{detail.lamanya}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Pengikut 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="pengikut" name="pengikut" type="text" placeholder="Pengikut" class="wajib_isi form-control" autocomplete="off"  value="{{detail.pengikut}}" />
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
{{ syarat_form|raw }}

</form>	