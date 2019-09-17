<form class="form-horizontal" action="#" id="form_{{ module_name }}">
	<input type="hidden" id="{{ table_pk }}" name="{{ table_pk }}" value="0" />

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Kelurahan <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
		{{ dropdown_no_kel|raw }}
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Tanggal <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="date" name="date" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Permohonan KTP <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
	<label class="radio-inline"><input name="jenis" checked="" type="radio" value="BARU" /> BARU</label>
	<label class="radio-inline"><input name="jenis" type="radio" value="PERPANJANGAN" /> PERPANJANGAN</label>
	<label class="radio-inline"><input name="jenis" type="radio" value="PENGGANTIAN" /> PENGGANTIAN</label>
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">No Urut FMP</label>
	<div class="col-sm-8 col-lg-7 controls">
	<input id="no_fmp" name="no_fmp" type="text" placeholder="No Urut FMP" class="form-control" autocomplete="off" maxlength="100" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">No KK <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
	<input id="no_kk" name="no_kk" type="text" placeholder="No KK" class="form-control" autocomplete="off" maxlength="50" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
	<input id="nama" name="nama" type="text" placeholder="Nama" class="form-control" autocomplete="off" maxlength="150" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Jenis Kelamin <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
	<label class="radio-inline"><input name="jk" id="jk_l" class="jk" checked="" type="radio" value="l" /> Laki-laki</label>
	<label class="radio-inline"><input name="jk" id="jk_p" class="jk" type="radio" value="p" /> Perempuan</label>
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
	<input id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Tempat Lahir" class="form-control" autocomplete="off" />
	</div>
	<div class="col-sm-4 col-lg-2 controls">
	<input id="tanggal_lahir" name="tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" />
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
	<textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat Rumah"></textarea>
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">RT <span class="require">*</span></label>
	<div class="col-sm-2 col-lg-2 controls">
	<input id="rt" name="rt" type="text" placeholder="RT" class="form-control" autocomplete="off" maxlength="10" />
	</div>
	<label class="col-sm-2 col-lg-2 control-label">RW <span class="require">*</span></label>
	<div class="col-sm-2 col-lg-2 controls">
	<input id="rw" name="rw" type="text" placeholder="RW" class="form-control" autocomplete="off" maxlength="10" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Kewarganegaraan <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
	<label class="radio-inline"><input name="kewarganegaraan" checked="" type="radio" value="WNI" /> WNI</label>
	<label class="radio-inline"><input name="kewarganegaraan" type="radio" value="WNA" /> WNA</label>
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
	<input id="kode" name="kode" type="text" placeholder="Kode" class="form-control" autocomplete="off" maxlength="10" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">No Surat Bukti Kewarganegaraan RI/SKBRI</label>
	<div class="col-sm-8 col-lg-7 controls">
	<input id="no_bukti_kewarganegaraan_ri" name="no_bukti_kewarganegaraan_ri" type="text" placeholder="No Surat Bukti Kewarganegaraan RI/SKBRI" class="form-control" autocomplete="off" maxlength="50" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Tgl Surat Bukti Kewarganegaraan RI/SKBRI</label>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="tgl_bukti_kewarganegaraan_ri" name="tgl_bukti_kewarganegaraan_ri" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">No. Dokumen Imigrasi/STMD</label>
	<div class="col-sm-8 col-lg-7 controls">
	<input id="no_doc_imigrasi" name="no_doc_imigrasi" type="text" placeholder="No. Dokumen Imigrasi/STMD" class="form-control" autocomplete="off" maxlength="50" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Tgl Dokumen Imigrasi/STMD/SKBRI</label>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="tgl_doc_imigrasi" name="tgl_doc_imigrasi" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" />
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
	<label class="radio-inline"><input name="alat_kb" checked="" type="radio" value="PIL" /> PIL</label>
	<label class="radio-inline"><input name="alat_kb" type="radio" value="IUD" /> IUD</label>
	<label class="radio-inline"><input name="alat_kb" type="radio" value="KONDOM" /> KONDOM</label>
	<label class="radio-inline"><input name="alat_kb" type="radio" value="SUNTIK" /> SUNTIK</label>
	<label class="radio-inline"><input name="alat_kb" type="radio" value="LAIN-LAIN" /> LAIN-LAIN</label>
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Dapat Membaca</label>
	<div class="col-sm-8 col-lg-7 controls">
	<label class="radio-inline"><input name="dapat_membaca" checked="" type="radio" value="Latin" /> Latin</label>
	<label class="radio-inline"><input name="dapat_membaca" type="radio" value="Arab" /> Arab</label>
	<label class="radio-inline"><input name="dapat_membaca" type="radio" value="Lain-lain" /> Lain-lain</label>
	<label class="radio-inline"><input name="dapat_membaca" type="radio" value="Tdk Dapat" /> Tdk Dapat</label>
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">ET</label>
	<div class="col-sm-8 col-lg-7 controls">
	<label class="radio-inline"><input name="et" checked="" type="radio" value="A" /> A</label>
	<label class="radio-inline"><input name="et" type="radio" value="B" /> B</label>
	<label class="radio-inline"><input name="et" type="radio" value="C" /> C</label>
	<label class="radio-inline"><input name="et" type="radio" value="Lain-lain" /> Lain-lain</label>
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nama Bapak / Ibu <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
	<input id="nama_ortu" name="nama_ortu" type="text" placeholder="Nama Bapak / Ibu" class="form-control" autocomplete="off" maxlength="150" />
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
	<input id="tgl_mutasi" name="tgl_mutasi" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Pindahan Dari/Ke</label>
	<div class="col-sm-8 col-lg-7 controls">
	<input id="pindah_dari_ke" name="pindah_dari_ke" type="text" placeholder="Pindahan Dari/Ke" class="form-control" autocomplete="off" />
	</div>
	</div>

	<h5>Data Tanda Tangan</h5>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nama <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
	<input id="ttd_nama" name="ttd_nama" type="text" placeholder="Nama" class="form-control" autocomplete="off" maxlength="150" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">NIP <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
	<input id="ttd_nip" name="ttd_nip" type="text" placeholder="NIP" class="form-control" autocomplete="off" maxlength="50" />
	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Jabatan <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
	<input id="ttd_jabatan" name="ttd_jabatan" type="text" placeholder="Jabatan" class="form-control" autocomplete="off" maxlength="100" />
	</div>
	</div>
	{{ syarat_form|raw }}
	</form>