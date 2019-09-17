<form class="form-horizontal" action="#" id="form_domisili_penduduk">
<input type="hidden" id="domisili_pendudukid" name="domisili_pendudukid" value="0" />
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
<input value="{{ config_item('no_surat_suffix_2') }}" id="no" name="no" type="text" placeholder="Nomor" class="wajib_isi form-control" autocomplete="off" maxlength="100" />
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
<div class="col-sm-4 col-lg-4 controls" style="padding-right: 4px;padding-left: 9px;">
<input id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" />
</div>
<div class="col-sm-4 col-lg-3 controls">
<input id="tanggal_lahir" name="tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Kewarganegaraan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls" style="padding-right: 4px;padding-left: 9px;">
{{ dropdown_kewarganegaraan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Agama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls" style="padding-right: 4px;padding-left: 9px;">
{{ dropdown_agama|raw }}
</div>
</div>
<div class="form-group">
<!-- <label class="col-sm-4 col-lg-4 control-label">Status Perkawinan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_status_perkawinan|raw }}
</div>
</div> -->

<!-- <div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Golongan Darah <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_golongan_darah|raw }}
</div>
</div> -->

<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Pekerjaan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_pekerjaan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Alamat Asal<span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<textarea id="alamat_asal" name="alamat_asal"  placeholder="Alamat" class="wajib_isi form-control" ></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">NIK <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="nik" name="nik" type="text" placeholder="NIK" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
</div>
</div>

<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Domisili <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="domisili" name="domisili" type="text" placeholder="Domisili" class="wajib_isi form-control" autocomplete="off" maxlength="400" />
</div>
</div>

<!-- <div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Lingkungan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="lingkungan" name="lingkungan" type="text" placeholder="Lingkungan" class="wajib_isi form-control" autocomplete="off" maxlength="400" />
</div>
</div> -->
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Keperluan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<textarea id="keperluan" name="keperluan"  placeholder="Keperluan" class="wajib_isi form-control" ></textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Berlaku Sampai <span class="require">*</span></label>
<div class="col-sm-4 col-lg-3 controls">
<input id="berlaku_sampai" name="berlaku_sampai" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
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
<!-- {{ syarat_form|raw }} -->

