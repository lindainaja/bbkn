<form class="form-horizontal" action="#" id="form_sk_sppt">
<input type="hidden" id="sk_spptid" name="sk_spptid" value="0" />
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
<label class="col-sm-4 col-lg-4 control-label">Alamat <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="alamat" id="alamat" class="wajib_isi form-control" placeholder="Alamat"></textarea>
</div>
</div>
<h5>Data Tanah/Bangunan</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Bukti Kepemilikan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="bukti_kepemilikan" name="bukti_kepemilikan" type="text" placeholder="Bukti Kepemilikan" class="wajib_isi form-control" autocomplete="off" maxlength="100" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nomor <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="no_bukti_kepemilikan" name="no_bukti_kepemilikan" type="text" placeholder="Nomor" class="wajib_isi form-control" autocomplete="off" maxlength="100" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Luas Tanah/Bangunan <span class="require">*</span></label>
<div class="col-sm-5 col-lg-3 controls input-group">
<input id="luas_bangunan" name="luas_bangunan" type="text" placeholder="0.00" class="wajib_isi form-control angka" onkeypress="return blockNonNumbers(this, event, true, true);"  autocomplete="off" maxlength="18" />
<span class="input-group-btn">
<span class="btn">m<sup>2</sup></span>
</span>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Alamat <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="letak_tanah" id="letak_tanah" class="wajib_isi form-control" placeholder="Alamat"></textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nomor SPPT Asal <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="no_sppt_asal" name="no_sppt_asal" type="text" placeholder="Nomor" class="wajib_isi form-control" autocomplete="off" maxlength="100" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Atas Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="atas_nama" name="atas_nama" type="text" placeholder="Atas Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
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
