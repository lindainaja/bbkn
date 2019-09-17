<form class="form-horizontal" action="#" id="form_{{ module_name }}">
	<input type="hidden" id="{{ table_pk }}" name="{{ table_pk }}" value="0" />

	<div class="form-group">
		<label class="col-sm-4 col-lg-3 control-label">Kelurahan <span class="require">*</span></label>
		<div class="col-sm-8 col-lg-8 controls">
			{{dropdown_kel|raw}}
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-4 col-lg-3 control-label">Tanggal <span class="require">*</span></label>
		<div class="col-sm-4 col-lg-3 controls">
		<input id="date" name="date" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" />
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-4 col-lg-3 control-label">Permohonan KTP <span class="require">*</span></label>
		<div class="col-sm-8 col-lg-8 controls">
		<label class="radio-inline"><input name="jenis" checked="" type="radio" value="BARU" /> BARU</label>
		<label class="radio-inline"><input name="jenis" type="radio" value="PERPANJANGAN" /> PERPANJANGAN</label>
		<label class="radio-inline"><input name="jenis" type="radio" value="PENGGANTIAN" /> PENGGANTIAN</label>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-4 col-lg-3 control-label">Nama <span class="require">*</span></label>
		<div class="col-sm-8 col-lg-8 controls">
		<input id="nama" name="nama" type="text" placeholder="Nama" class="form-control" autocomplete="off" maxlength="150" />
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-4 col-lg-3 control-label">No KK <span class="require">*</span></label>
		<div class="col-sm-8 col-lg-8 controls">
		<input id="no_kk" name="no_kk" type="text" placeholder="No KK" class="form-control" autocomplete="off" maxlength="50" />
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-4 col-lg-3 control-label">NIK <span class="require">*</span></label>
		<div class="col-sm-8 col-lg-8 controls">
		<input id="nik" name="nik" type="text" placeholder="NIK" class="form-control" autocomplete="off" maxlength="50" />
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-4 col-lg-3 control-label">Alamat <span class="require">*</span></label>
		<div class="col-sm-8 col-lg-8 controls">
		<textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat"></textarea>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-4 col-lg-3 control-label">RT <span class="require">*</span></label>
		<div class="col-sm-2 col-lg-2 controls">
		<input id="rt" name="rt" type="text" placeholder="RT" class="form-control" autocomplete="off" maxlength="10" />
		</div>
		<label class="col-sm-2 col-lg-2 control-label">RW <span class="require">*</span></label>
		<div class="col-sm-2 col-lg-2 controls">
		<input id="rw" name="rw" type="text" placeholder="RW" class="form-control" autocomplete="off" maxlength="10" />
		</div>
	</div>

	<h5>Data Tanda Tangan</h5>

	<div class="form-group">
		<label class="col-sm-4 col-lg-3 control-label">Nama <span class="require">*</span></label>
		<div class="col-sm-8 col-lg-8 controls">
		<input id="ttd_nama" name="ttd_nama" type="text" placeholder="Nama" class="form-control" autocomplete="off" maxlength="150" />
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-4 col-lg-3 control-label">NIP <span class="require">*</span></label>
		<div class="col-sm-8 col-lg-8 controls">
		<input id="ttd_nip" name="ttd_nip" type="text" placeholder="NIP" class="form-control" autocomplete="off" maxlength="50" />
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-4 col-lg-3 control-label">Jabatan <span class="require">*</span></label>
		<div class="col-sm-8 col-lg-8 controls">
		<input id="ttd_jabatan" name="ttd_jabatan" type="text" placeholder="Jabatan" class="form-control" autocomplete="off" maxlength="100" />
		</div>
	</div>

	{{syarat_form|raw}}
	</form>