<form class="form-horizontal" action="#" id="form_sk_kebakaran">
	<input type="hidden" id="sk_kebakaranid" name="sk_kebakaranid" value="0" />
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
	<label class="col-sm-4 col-lg-3 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" />
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="tanggal_lahir" name="tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
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
<label class="col-sm-4 col-lg-3 control-label">Pekerjaan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_pekerjaan|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Status Perkawinan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_status_perkawinan|raw }}
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
<label class="col-sm-4 col-lg-3 control-label">Tanggal Kebakaran 
	<span class="require">*</span>
			</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="tanggal_kebakaran" name="tanggal_kebakaran" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Lokasi Kebakaran 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="lokasi" name="lokasi" type="text" placeholder="Lokasi Kebakaran" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
<h5>Item Yang Terbakar</h5>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Item 1 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="yang_terbakar_1" name="yang_terbakar_1" type="text" placeholder="Item 1" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Item 2 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="yang_terbakar_2" name="yang_terbakar_2" type="text" placeholder="Item 2" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Item 3 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="yang_terbakar_3" name="yang_terbakar_3" type="text" placeholder="Item 3" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Item 4 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="yang_terbakar_4" name="yang_terbakar_4" type="text" placeholder="Item 4" class="wajib_isi form-control" autocomplete="off"  />
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