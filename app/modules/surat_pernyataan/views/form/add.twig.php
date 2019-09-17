<form class="form-horizontal" action="#" id="form_surat_pernyataan">
<input type="hidden" id="surat_pernyataanid" name="surat_pernyataanid" value="0" />
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
<h5>Data Pengaju</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="nama" name="nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
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
<h5>Data yang di ajukan</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Status <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="tertuju_status" name="tertuju_status" type="text" placeholder="contoh : Istri/Suami" class="wajib_isi form-control" autocomplete="off" maxlength="30" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="tertuju_nama" name="tertuju_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
<div class="col-sm-4 col-lg-4 controls">
<input id="tertuju_tempat_lahir" name="tertuju_tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" />
</div>
<div class="col-sm-4 col-lg-3 controls">
<input id="tertuju_tanggal_lahir" name="tertuju_tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Kewarganegaraan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_tertuju_kewarganegaraan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Agama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_tertuju_agama|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Pekerjaan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_tertuju_pekerjaan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Alamat Terakhir <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="tertuju_alamat" id="tertuju_alamat" class="wajib_isi form-control" placeholder="Alamat Terakhir"></textarea>
</div>
</div>
<h5>Saksi-saksi</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Saksi 1 <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="saksi_1" name="saksi_1" type="text" placeholder="Saksi 1" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Saksi 2 </label>
<div class="col-sm-8 col-lg-7 controls">
<input id="saksi_2" name="saksi_2" type="text" placeholder="Saksi 2" class="form-control" autocomplete="off" maxlength="150" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">RT <span class="require">*</span></label>
<div class="col-sm-2 col-lg-2 controls">
<input id="rt" name="rt" type="text" placeholder="RT" class="wajib_isi form-control" autocomplete="off" maxlength="15" />
</div>
<label class="col-sm-1 col-lg-1 control-label">RW <span class="require">*</span></label>
<div class="col-sm-2 col-lg-2 controls">
<input id="rw" name="rw" type="text" placeholder="RW" class="wajib_isi form-control" autocomplete="off" maxlength="15" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama RT <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="rt_nama" name="rt_nama" type="text" placeholder="Nama RT" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama RW <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="rw_nama" name="rw_nama" type="text" placeholder="Nama RW" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
</div>
</div>
{{ syarat_form|raw }}
</form>
