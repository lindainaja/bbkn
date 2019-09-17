<form class="form-horizontal" action="#" id="form_{{module_name}}">
	<input type="hidden" id="{{ table_pk }}" name="{{ table_pk }}" value="{{ pk }}" />

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Kelurahan <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
		{{ dropdown_no_kel|raw }}
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Tanggal <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="date" name="date" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" value="{{ format_datepicker(detail.date) }}" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Permohonan KTP <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
		{% set checked_bar='' %}
		{% set checked_per='' %}
		{% set checked_peng='' %}
{% if detail.jenis=='BARU' %}
			{% set checked_bar='checked=""' %}
		{% elseif detail.jenis=='PERPANJANGAN' %}
			{% set checked_per='checked=""' %}
		{% elseif detail.jenis=='PENGGANTIAN' %}
			{% set checked_peng='checked=""' %}
{% endif %}
	<label class="radio-inline"><input name="jenis" {{ checked_bar }} type="radio" value="BARU" /> BARU</label>
	<label class="radio-inline"><input name="jenis" {{ checked_per }} type="radio" value="PERPANJANGAN" /> PERPANJANGAN</label>
	<label class="radio-inline"><input name="jenis" {{ checked_peng }} type="radio" value="PENGGANTIAN" /> PENGGANTIAN</label>
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">No Urut FMP</label>
	<div class="col-sm-8 col-lg-7 controls">
	<input id="no_fmp" name="no_fmp" type="text" placeholder="No Urut FMP" class="form-control" autocomplete="off" maxlength="100" value="{{ detail.no_fmp }}" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">No KK <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
	<input id="no_kk" name="no_kk" type="text" placeholder="No KK" class="form-control" autocomplete="off" maxlength="50" value="{{ detail.no_kk }}" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
	<input id="nama" name="nama" type="text" placeholder="Nama" class="form-control" autocomplete="off" maxlength="150" value="{{ detail.nama }}" />
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
	<label class="col-sm-4 col-lg-4 control-label">Golongan Darah </label>
	<div class="col-sm-8 col-lg-7 controls">
		{{ dropdown_golongan_darah|raw }}
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Tempat Tanggal Lahir <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-5 controls">
	<input id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Tempat Lahir" class="form-control" autocomplete="off" value="{{ detail.tempat_lahir }}" />
	</div>
	<div class="col-sm-4 col-lg-2 controls">
	<input id="tanggal_lahir" name="tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" value="{{ format_datepicker(detail.tanggal_lahir) }}" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Agama <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
		{{ dropdown_agama|raw }}
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Status Perkawinan <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
		{{ dropdown_status_perkawinan|raw }}
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Status Keluarga <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
		{{ dropdown_status_keluarga|raw }}
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Alamat Rumah <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
	<textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat Rumah">{{ detail.alamat }}</textarea>
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">RT <span class="require">*</span></label>
	<div class="col-sm-2 col-lg-2 controls">
	<input id="rt" name="rt" type="text" placeholder="RT" class="form-control" autocomplete="off" maxlength="10" value="{{ detail.rt }}" />
	</div>
	<label class="col-sm-2 col-lg-2 control-label">RW <span class="require">*</span></label>
	<div class="col-sm-2 col-lg-2 controls">
	<input id="rw" name="rw" type="text" placeholder="RW" class="form-control" autocomplete="off" maxlength="10" value="{{ detail.rw }}" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Kewargahnegaraan <span class="require">*</span></label>
		{% set checked_wni='' %}
		{% set checked_wna='' %}
{% if detail.kewarganegaraan=='WNI' %}
			{% set checked_wni='checked=""' %}
		{% elseif detail.kewarganegaraan=='WNA' %}
			{% set checked_wna='checked=""' %}
{% endif %}
	<div class="col-sm-8 col-lg-7 controls">
	<label class="radio-inline"><input name="kewarganegaraan" {{ checked_wni }} type="radio" value="WNI" /> WNI</label>
	<label class="radio-inline"><input name="kewarganegaraan" {{ checked_wna }} type="radio" value="WNA" /> WNA</label>
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Kebangsaan/Keturunan </label>
	<div class="col-sm-8 col-lg-7 controls">
		{{ dropdown_keturunan|raw }}
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Kode</label>
	<div class="col-sm-8 col-lg-3 controls">
	<input id="kode" name="kode" type="text" placeholder="Kode" class="form-control" autocomplete="off" maxlength="10" value="{{ detail.kode }}" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">No Surat Bukti Kewarganegaraan RI/SKBRI</label>
	<div class="col-sm-8 col-lg-7 controls">
	<input id="no_bukti_kewarganegaraan_ri" name="no_bukti_kewarganegaraan_ri" type="text" placeholder="No Surat Bukti Kewarganegaraan RI/SKBRI" class="form-control" autocomplete="off" maxlength="50" value="{{ detail.no_bukti_kewarganegaraan_ri }}" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Tgl Surat Bukti Kewarganegaraan RI/SKBRI</label>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="tgl_bukti_kewarganegaraan_ri" name="tgl_bukti_kewarganegaraan_ri" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" value="{{ format_datepicker(detail.tgl_bukti_kewarganegaraan_ri) }}" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">No. Dokumen Imigrasi/STMD</label>
	<div class="col-sm-8 col-lg-7 controls">
	<input id="no_doc_imigrasi" name="no_doc_imigrasi" type="text" placeholder="No. Dokumen Imigrasi/STMD" class="form-control" autocomplete="off" maxlength="50" value="{{ detail.no_doc_imigrasi }}" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Tgl Dokumen Imigrasi/STMD/SKBRI</label>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="tgl_doc_imigrasi" name="tgl_doc_imigrasi" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" value="{{ format_datepicker(detail.tgl_doc_imigrasi) }}" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Pendidikan <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
		{{ dropdown_pendidikan|raw }}
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Pekerjaan <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
		{{ dropdown_pekerjaan|raw }}
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Akseptor KB dengan cara</label>
	<div class="col-sm-8 col-lg-7 controls">
		{% set checked_pil='' %}
		{% set checked_iud='' %}
		{% set checked_kondom='' %}
		{% set checked_suntik='' %}
		{% set checked_lain='' %}
{% if detail.alat_kb=='PIL' %}
			{% set checked_pil='checked=""' %}
		{% elseif detail.alat_kb=='IUD' %}
			{% set checked_iud='checked=""' %}
		{% elseif detail.alat_kb=='KONDOM' %}
			{% set checked_kondom='checked=""' %}
		{% elseif detail.alat_kb=='SUNTIK' %}
			{% set checked_suntik='checked=""' %}
		{% elseif detail.alat_kb=='LAIN-LAIN' %}
			{% set checked_lain='checked=""' %}
{% endif %}
	<label class="radio-inline"><input name="alat_kb" {{ checked_pil }} type="radio" value="PIL" /> PIL</label>
	<label class="radio-inline"><input name="alat_kb" {{ checked_iud }} type="radio" value="IUD" /> IUD</label>
	<label class="radio-inline"><input name="alat_kb" {{ checked_kondom }} type="radio" value="KONDOM" /> KONDOM</label>
	<label class="radio-inline"><input name="alat_kb" {{ checked_suntik }} type="radio" value="SUNTIK" /> SUNTIK</label>
	<label class="radio-inline"><input name="alat_kb" {{ checked_lain }} type="radio" value="LAIN-LAIN" /> LAIN-LAIN</label>
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Dapat Membaca</label>
	<div class="col-sm-8 col-lg-7 controls">
		{% set checked_latn='' %}
		{% set checked_arb='' %}
		{% set checked_lain='' %}
		{% set checked_td='' %}
{% if detail.dapat_membaca=='Latin' %}
			{% set checked_latn='checked=""' %}
		{% elseif detail.dapat_membaca=='Arab' %}
			{% set checked_arb='checked=""' %}
		{% elseif detail.dapat_membaca=='Lain-lain' %}
			{% set checked_lain='checked=""' %}
		{% elseif detail.dapat_membaca=='Tdk Dapat' %}
			{% set checked_td='checked=""' %}
{% endif %}
	<label class="radio-inline"><input name="dapat_membaca" {{ checked_latn }} type="radio" value="Latin" /> Latin</label>
	<label class="radio-inline"><input name="dapat_membaca" {{ checked_arb }} type="radio" value="Arab" /> Arab</label>
	<label class="radio-inline"><input name="dapat_membaca" {{ checked_lain }} type="radio" value="Lain-lain" /> Lain-lain</label>
	<label class="radio-inline"><input name="dapat_membaca" {{ checked_td }} type="radio" value="Tdk Dapat" /> Tdk Dapat</label>
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">ET</label>
	<div class="col-sm-8 col-lg-7 controls">
		{% set checked_a='' %}
		{% set checked_b='' %}
		{% set checked_c='' %}
		{% set checked_lain='' %}
		{% if detail.et=='A' %}
			{% set checked_a='checked=""' %}
		{% elseif detail.et=='B' %}
			{% set checked_b='checked=""' %}
		{% elseif detail.et=='C' %}
			{% set checked_c='checked=""' %}
		{% elseif detail.et=='Lain-lain' %}
			{% set checked_lain='checked=""' %}
		{% endif %}
	<label class="radio-inline"><input name="et" {{ checked_a }} type="radio" value="A" /> A</label>
	<label class="radio-inline"><input name="et" {{ checked_b }} type="radio" value="B" /> B</label>
	<label class="radio-inline"><input name="et" {{ checked_c }} type="radio" value="C" /> C</label>
	<label class="radio-inline"><input name="et" {{ checked_lain }} type="radio" value="Lain-lain" /> Lain-lain</label>
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nama Bapak / Ibu <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
	<input id="nama_ortu" name="nama_ortu" type="text" placeholder="Nama Bapak / Ibu" class="form-control" autocomplete="off" maxlength="150" value="{{ detail.nama_ortu }}" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Keterangan Cacat</label>
	<div class="col-sm-8 col-lg-7 controls">
		{{ dropdown_keterangan_cacat|raw }}
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Kode Mutasi</label>
	<div class="col-sm-8 col-lg-7 controls">
		{{ dropdown_kode_mutasi|raw }}
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Tanggal Mutasi</label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="tgl_mutasi" name="tgl_mutasi" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" value="{{ format_datepicker(detail.tgl_mutasi) }}" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Pindahan Dari/Ke</label>
	<div class="col-sm-8 col-lg-7 controls">
	<input id="pindah_dari_ke" name="pindah_dari_ke" type="text" placeholder="Pindahan Dari/Ke" class="form-control" autocomplete="off" value="{{ detail.pindah_dari_ke }}" />
	</div>
	</div>

	<h5>Data Tanda Tangan</h5>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
	<input id="ttd_nama" name="ttd_nama" type="text" placeholder="Nama" class="form-control" autocomplete="off" maxlength="150" value="{{ detail.ttd_nama }}" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">NIP <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
	<input id="ttd_nip" name="ttd_nip" type="text" placeholder="NIP" class="form-control" autocomplete="off" maxlength="50" value="{{ detail.ttd_nip }}" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Jabatan <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
	<input id="ttd_jabatan" name="ttd_jabatan" type="text" placeholder="Jabatan" class="form-control" autocomplete="off" maxlength="100" value="{{ detail.ttd_jabatan }}" />
	</div>
	</div>
	{{ syarat_form|raw }}
</form>