<form class="form-horizontal" action="#" id="form_permohonan_kehendak_perkawinan">
	<input type="hidden" id="permohonan_kehendak_perkawinanid" name="permohonan_kehendak_perkawinanid" value="{{permohonan_kehendak_perkawinanid}}" />
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
<input id="date" name="date" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="{{format_datepicker(detail.date)}}" />
</div>
</div>

<h5>Data Surat</h5>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Lokasi Yth.
		<span class="require"></span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="lokasi_yth" name="lokasi_yth" type="text" placeholder="Lokasi Yth" class="wajib_isi form-control" autocomplete="off"  value="{{detail.lokasi_yth}}" />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama Pemohon
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nama_pemohon" name="nama_pemohon" type="text" placeholder="Nama Pemohon" class="wajib_isi form-control" autocomplete="off" value="{{detail.nama_pemohon}}"  />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Syarat A.
		<span class="require"></span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="syarat_a" name="syarat_a" type="text" placeholder="" class="wajib_isi form-control" autocomplete="off"  value="{{detail.syarat_a}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Syarat B.
		<span class="require"></span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="syarat_b" name="syarat_b" type="text" placeholder="" class="wajib_isi form-control" autocomplete="off" value="{{detail.syarat_b}}"  />
	</div>
</div>
<h5>Data Pernikahan</h5>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama Calon Suami 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="s_nama" name="s_nama" type="text" placeholder="Nama Calon Suami" class="wajib_isi form-control" autocomplete="off"  value="{{detail.s_nama}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama Calon Istri 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="i_nama" name="i_nama" type="text" placeholder="Nama Calon Istri" class="wajib_isi form-control" autocomplete="off"  value="{{detail.i_nama}}" />
	</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Tanggal Acara
	<span class="require">*</span>
			</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="tanggal_acara" name="tanggal_acara" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="{{format_datepicker(detail.tanggal_acara)}}" />
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Waktu Acara
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="waktu_acara" name="waktu_acara" type="text" placeholder="Waktu Acara" class="wajib_isi form-control" autocomplete="off"  value="{{detail.waktu_acara}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Tempat Acara
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="tempat_acara" name="tempat_acara" type="text" placeholder="Tempat Acara" class="wajib_isi form-control" autocomplete="off" value="{{detail.tempat_acara}}"  />
	</div>
</div>
<h5>Data Tanda Tangan</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Tanggal Terima
	<span class="require">*</span>
			</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="tanggal_terima" name="tanggal_terima" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="{{format_datepicker(detail.tanggal_acara)}}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Nama Kepala KUA<span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="nama_kepala_kua" name="nama_kepala_kua" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{detail.nama_kepala_kua}}" />
</div>
</div>
<!-- <div class="form-group">
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
</div> -->
<!-- {{ syarat_form|raw }} -->

</form>	