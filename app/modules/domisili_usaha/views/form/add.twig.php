<form class="form-horizontal" action="#" id="form_domisili_usaha">
	<input type="hidden" id="domisili_usahaid" name="domisili_usahaid" value="0" />
	<div class="form-group">
		<label class="col-sm-4 col-lg-4 control-label">Kelurahan <span class="require">*</span></label>
		<div class="col-sm-8 col-lg-7 controls">
			{{ dropdown_no_kel|raw }}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 col-lg-4 control-label">Tanggal <span class="require">*</span></label>
		<div class="col-sm-4 col-lg-3 controls">
			<input id="date" name="date" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 col-lg-4 control-label">Nomor <span class="require">*</span></label>
		<div class="col-sm-8 col-lg-7 controls">
			<input id="no" name="no" type="text" placeholder="Nomor" class="wajib_isi form-control" autocomplete="off" maxlength="100" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
		<div class="col-sm-8 col-lg-7 controls">
			<input id="nama" name="nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 col-lg-4 control-label">Jenis Kelamin <span class="require">*</span></label>
		<div class="col-sm-8 col-lg-7 controls">
			<label class="radio-inline"><input name="jk" class="jk jk_l" checked="" type="radio" value="l" /> Laki-laki</label>
			<label class="radio-inline"><input name="jk" class="jk jk_p" type="radio" value="p" /> Perempuan</label>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 col-lg-4 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
		<div class="col-sm-4 col-lg-4 controls">
			<input id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" />
		</div>
		<div class="col-sm-4 col-lg-3 controls">
			<input id="tanggal_lahir" name="tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
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
		<label class="col-sm-4 col-lg-4 control-label">NIK</label>
		<div class="col-sm-8 col-lg-7 controls">
			<input id="nik" name="nik" type="text" placeholder="NIK" class="form-control" autocomplete="off" maxlength="25" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 col-lg-4 control-label">Pasport</label>
		<div class="col-sm-8 col-lg-7 controls">
			<input id="pasport" name="pasport" type="text" placeholder="Pasport" class="form-control" autocomplete="off" maxlength="100" />
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
			<textarea name="alamat" id="alamat" class="wajib_isi form-control" placeholder="Alamat"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 col-lg-4 control-label">Jenis Usaha <span class="require">*</span></label>
		<div class="col-sm-8 col-lg-7 controls">
			<input id="jenis_usaha" name="jenis_usaha" type="text" placeholder="Jenis Usaha" class="wajib_isi form-control" autocomplete="off" maxlength="250" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 col-lg-4 control-label">Alamat Usaha <span class="require">*</span></label>
		<div class="col-sm-8 col-lg-7 controls">
			<textarea name="alamat_usaha" id="alamat_usaha" class="wajib_isi form-control" placeholder="Alamat Usaha"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 col-lg-4 control-label">Berlaku Dari <span class="require">*</span></label>
		<div class="col-sm-4 col-lg-3 controls">
			<input id="tgl_berlaku_dari" name="tgl_berlaku_dari" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
		</div>
		<label class="col-sm-4 col-lg-1 control-label">Sampai</label>
		<div class="col-sm-4 col-lg-3 controls">
			<input id="tgl_berlaku_sampai" name="tgl_berlaku_sampai" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
		</div>
	</div>
	<h5>Data Tanda Tangan</h5>
	<div class="form-group">
		<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
		<div class="col-sm-8 col-lg-7 controls">
			<input id="ttd_nama" name="ttd_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 col-lg-4 control-label">NIP <span class="require">*</span></label>
		<div class="col-sm-8 col-lg-7 controls">
			<input id="ttd_nip" name="ttd_nip" type="text" placeholder="NIP" class="wajib_isi form-control" autocomplete="off" maxlength="50" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 col-lg-4 control-label">Jabatan <span class="require">*</span></label>
		<div class="col-sm-8 col-lg-7 controls">
			<input id="ttd_jabatan" name="ttd_jabatan" type="text" placeholder="Jabatan" class="wajib_isi form-control" autocomplete="off" maxlength="100" />
		</div>
	</div>
	{{ syarat_form|raw }}
</form>