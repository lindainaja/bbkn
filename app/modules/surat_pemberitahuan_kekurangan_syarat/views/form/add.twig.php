<form class="form-horizontal" action="#" id="form_surat_pemberitahuan_kekurangan_syarat">
	<input type="hidden" id="surat_pemberitahuan_kekurangan_syaratid" name="surat_pemberitahuan_kekurangan_syaratid" value="0" />
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

<h5>Data Surat</h5>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Lampiran
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="lampiran" name="lampiran" type="text" placeholder="Lampiran" class="wajib_isi form-control" autocomplete="off" value="Lampiran" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Perihal
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="perihal_a" name="perihal_a" type="text" placeholder="Perihal" class="wajib_isi form-control" autocomplete="off"  value="Pemberitahuan kekurangan syarat/Penolakan perkawinan atau rujuk" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Kepada Yth.
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="kepada_yth" name="kepada_yth" type="text" placeholder="Kepada Yth" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Lokasi Yth.
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="lokasi_yth" name="lokasi_yth" type="text" placeholder="Lokasi Yth" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama Calon Suami 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="cs_nama" name="cs_nama" type="text" placeholder="Nama Calon Suami" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama Calon Istri 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="ci_nama" name="ci_nama" type="text" placeholder="Nama Calon Istri" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>   
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Syarat Yang Sudah Lengkap
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nama_syarat_sudah_lengkap" name="nama_syarat_sudah_lengkap" type="text" placeholder="Sebutkan" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Syarat Yang Belum Lengkap
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nama_syarat_belum_lengkap" name="nama_syarat_belum_lengkap" type="text" placeholder="Sebutkan" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
 
<h5>Data Tanda Tangan</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Nama Kepala Penghulu<span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="nama_kepala_penghulu" name="nama_kepala_penghulu" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
</div>
</div>


</form>	