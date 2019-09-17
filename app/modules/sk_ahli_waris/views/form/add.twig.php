<form class="form-horizontal" action="#" id="form_sk_ahli_waris">
	<input type="hidden" id="sk_ahli_warisid" name="sk_ahli_warisid" value="0" />
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
<input id="date" name="date" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nomor 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="no" name="no" type="text" placeholder="Nomor" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nama" name="nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Jenis Kelamin <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<label class="radio-inline"><input name="jk" class="jk jk_l" checked="" type="radio" value="l" /> Laki-laki</label> 
<label class="radio-inline"><input name="jk" class="jk jk_p" type="radio" value="p" /> Perempuan</label> 
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" />
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="tanggal_lahir" name="tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
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
<label class="col-sm-4 col-lg-3 control-label">Alamat 
	<span class="require">*</span>
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="alamat" id="alamat" class="wajib_isi form-control" placeholder="Alamat"></textarea>
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Status Perkawinan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_status_perkawinan|raw }}
</div>
</div>
<!-- <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Lingkungan 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="lingkungan" name="lingkungan" type="text" placeholder="Lingkungan" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div> -->

<!-- <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nomor Registrasi 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nomor_registrasi" name="nomor_registrasi" type="text" placeholder="Nomor Registrasi" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div> -->

<!-- <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Tanggal Registrasi 
	<span class="require">*</span>
			</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="tanggal_registrasi" name="tanggal_registrasi" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
</div>
</div> -->
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama Almarhum 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nama_almarhum" name="nama_almarhum" type="text" placeholder="Nama Almarhum" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Tanggal Meninggal 
	<span class="require">*</span>
			</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="tanggal_meninggal" name="tanggal_meninggal" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nomor Surat Kematian 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="no_surat_kematian" name="no_surat_kematian" type="text" placeholder="Nomor Surat Kematian" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nomor Ahli Waris 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="no_ahli_waris" name="no_ahli_waris" type="text" placeholder="Nomor Ahli Waris" class="wajib_isi form-control" autocomplete="off"   />
	</div>
</div>
<h5>Data Kepala Dusun/Dukuh/Kampung</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_kl_nama" name="ttd_kl_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">NIP <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_kl_nip" name="ttd_kl_nip" type="text" placeholder="NIP" class="wajib_isi form-control" autocomplete="off" maxlength="50" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Jabatan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_kl_jabatan" name="ttd_kl_jabatan" type="text" placeholder="Jabatan" class="wajib_isi form-control" autocomplete="off" maxlength="100" />
</div>
</div>
<h5>Data Tanda Tangan</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_nama" name="ttd_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">NIP <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_nip" name="ttd_nip" type="text" placeholder="NIP" class="wajib_isi form-control" autocomplete="off" maxlength="50" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Jabatan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_jabatan" name="ttd_jabatan" type="text" placeholder="Jabatan" class="wajib_isi form-control" autocomplete="off" maxlength="100" />
</div>
</div>
{{ syarat_form|raw }}

</form>	