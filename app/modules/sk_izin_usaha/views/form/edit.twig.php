<form class="form-horizontal" action="#" id="form_sk_izin_usaha">
	<input type="hidden" id="sk_izin_usahaid" name="sk_izin_usahaid" value="{{sk_izin_usahaid}}" />
	<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Kelurahan <span class="require">*</span></label>

<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_no_kel|raw }}
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">No. Surat 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="no" name="no" type="text" placeholder="Nomor Surat" class="wajib_isi form-control" autocomplete="off"   value="{{detail.no}}" />
	</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Tanggal Surat 
	<span class="require">*</span>
			</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="date" name="date" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="{{format_datepicker(detail.date)}}"  />
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nama 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nama" name="nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off"  value="{{detail.nama}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Jenis Kelamin <span class="require">*</span></label>
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

	<label class="col-sm-4 col-lg-4 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" value="{{detail.tempat_lahir}}"/>
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="tanggal_lahir" name="tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off"  value="{{format_datepicker(detail.tanggal_lahir)}}"/>
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
<label class="col-sm-4 col-lg-4 control-label">Alamat 
	<span class="require">*</span>
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="alamat" id="alamat" class="wajib_isi form-control" placeholder="Alamat">{{detail.alamat}}</textarea>
</div>
</div>

<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nomor KTP 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nik" name="nik" type="text" placeholder="Nomor KTP" class="wajib_isi form-control" autocomplete="off" value="{{detail.nik}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nama Perusahaan 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nama_usaha" name="nama_usaha" type="text" placeholder="Nama Perusahaan" class="wajib_isi form-control" autocomplete="off"    value="{{detail.nama_usaha}}" />
	</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Alamat Perusahaan
	<span class="require">*</span>
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="alamat_usaha" id="alamat_usaha" class="wajib_isi form-control" placeholder="Alamat Perusahaan">{{detail.alamat_usaha}}</textarea>
</div>
</div>
<!--  -->
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Luas Tempat Usaha <span class="require">*</span></label>
	<div class="col-sm-5 col-lg-3 controls input-group">
	<input id="luas_tempat_usaha" name="luas_tempat_usaha" type="text" placeholder="0.00" class="wajib_isi form-control angka"   autocomplete="off" maxlength="18" value="{{detail.luas_tempat_usaha}}" />
		<span class="input-group-btn">
		<span class="btn">m<sup>2</sup></span>
		</span>
	</div>
</div>	
<!--  -->

    <div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Bidang Usaha 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="bidang_usaha" name="bidang_usaha" type="text" placeholder="Bidang Usaha" class="wajib_isi form-control" autocomplete="off"  value="{{detail.bidang_usaha}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Lokasi 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="lokasi" name="lokasi" type="text" placeholder="Lokasi" class="wajib_isi form-control" autocomplete="off"  value="{{detail.lokasi}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Dukuh/Dusun/Kampung 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="lingkungan" name="lingkungan" type="text" placeholder="" class="wajib_isi form-control" autocomplete="off"  value="{{detail.lingkungan}}" />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Batas Utara 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="batas_utara" name="batas_utara" type="text" placeholder="Batas Utara" class="wajib_isi form-control" autocomplete="off"  value="{{detail.batas_utara}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nama Tetangga (Utara)
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nama_tetangga_utara" name="nama_tetangga_utara" type="text" placeholder="Nama Tetangga" class="wajib_isi form-control" autocomplete="off"  value="{{detail.nama_tetangga_utara}}" />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Batas Timur 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="batas_timur" name="batas_timur" type="text" placeholder="Batas Timur" class="wajib_isi form-control" autocomplete="off"  value="{{detail.batas_timur}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nama Tetangga (Timur)
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nama_tetangga_timur" name="nama_tetangga_timur" type="text" placeholder="Nama Tetangga" class="wajib_isi form-control" autocomplete="off" value="{{detail.nama_tetangga_timur}}"  />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Batas Selatan 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="batas_selatan" name="batas_selatan" type="text" placeholder="Batas Selatan" class="wajib_isi form-control" autocomplete="off"  value="{{detail.batas_selatan}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nama Tetangga (Selatan)
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nama_tetangga_selatan" name="nama_tetangga_selatan" type="text" placeholder="Nama Tetangga" class="wajib_isi form-control" autocomplete="off"  value="{{detail.nama_tetangga_selatan}}" />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Batas Barat 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="batas_barat" name="batas_barat" type="text" placeholder="Batas Barat" class="wajib_isi form-control" autocomplete="off"  value="{{detail.batas_barat}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nama Tetangga (Barat)
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nama_tetangga_barat" name="nama_tetangga_barat" type="text" placeholder="Nama Tetangga" class="wajib_isi form-control" autocomplete="off"   value="{{detail.nama_tetangga_barat}}"/>
	</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Berlaku Sampai 
	<span class="require">*</span>
			</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="berlaku_sampai" name="berlaku_sampai" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="{{format_datepicker(detail.berlaku_sampai)}}"  />
</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nomor Registrasi 
		<!-- <span class="require">*</span> -->
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nomor_registrasi" name="nomor_registrasi" type="text" placeholder="Nomor Registrasi" class="form-control" autocomplete="off"  value="{{detail.nomor_registrasi}}" />
	</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Tanggal Registrasi 
	<!-- <span class="require">*</span> -->
			</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="tanggal_registrasi" name="tanggal_registrasi" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" value="{{format_datepicker(detail.tanggal_registrasi)}}"  />
</div>
</div>
<h5>Data Kepala Lingkungan</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama Kepala Lingkungan<span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_kl_nama" name="ttd_kl_nama" type="text" placeholder="Nama Kepala Lingkungan" class="wajib_isi form-control" autocomplete="off" maxlength="150"  value="{{detail.ttd_kl_nama}}"  />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">NIP Kepala Lingkungan<span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_kl_nip" name="ttd_kl_nip" type="text" placeholder="NIP Kepala Lingkungan" class="wajib_isi form-control" autocomplete="off" maxlength="50"  value="{{detail.ttd_kl_nip}}"  />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Jabatan Kepala Lingkungan<span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_kl_jabatan" name="ttd_kl_jabatan" type="text" placeholder="Jabatan Kepala Lingkungan" class="wajib_isi form-control" autocomplete="off" maxlength="100"  value="{{detail.ttd_kl_jabatan}}"  />
</div>
</div>
<h5>Data Tanda Tangan</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_nama" name="ttd_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{detail.ttd_nama}}"/>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">NIP <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_nip" name="ttd_nip" type="text" placeholder="NIP" class="wajib_isi form-control" autocomplete="off" maxlength="50" value="{{detail.ttd_nip}}"  />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Jabatan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_jabatan" name="ttd_jabatan" type="text" placeholder="Jabatan" class="wajib_isi form-control" autocomplete="off" maxlength="100" value="{{detail.ttd_jabatan}}"/>
</div>
</div>
{{ syarat_form|raw }}

</form>	