<ul class="nav nav-tabs">
	<li class="active"><a href="#main">SK</a></li>
	<li><a href="#bapl">BAPL</a></li>
</ul>
<form class="form-horizontal" action="#" id="form_sk_domisili_usaha">
	<div class="tab-content" style="padding-top: 1em">
		<div id="main" class="tab-pane fade in active">
			<input type="hidden" id="sk_domisili_usahaid" name="sk_domisili_usahaid" value="0" />
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
					<input value="{{config_item('no_surat_suffix_2')}}" id="no" name="no" type="text" placeholder="Nomor" class="wajib_isi form-control" autocomplete="off"  />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Lampiran
					<span class="require">*</span>
				</label>
				<div class="col-sm-8 col-lg-7 controls">
					<input id="lampiran" name="lampiran" type="text" placeholder="Lampiran" class="wajib_isi form-control" autocomplete="off"  />
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
				<label class="col-sm-4 col-lg-3 control-label">Kewarganegaraan <span class="require">*</span></label>
				<div class="col-sm-8 col-lg-7 controls">
					{{ dropdown_kewarganegaraan|raw }}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Agama <span class="require">*</span></label>
				<div class="col-sm-8 col-lg-7 controls">
					{{ dropdown_agama|raw }}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Nomor KTP/PASPORT <span class="require">*</span></label>
				<div class="col-sm-4 col-lg-4 controls">
					<input id="nik" name="nik" type="text" placeholder="NIK" class="wajib_isi form-control" autocomplete="off" />
				</div>
				<div class="col-sm-4 col-lg-3 controls">
					<input id="pasport" name="pasport" type="text" placeholder="PASPORT" class="wajib_isi form-control" autocomplete="off" />
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
			<!-- <div class="form-group">
					<label class="col-sm-4 col-lg-3 control-label">Nomor BAPL
							<span class="require">*</span>
					</label>
					<div class="col-sm-8 col-lg-7 controls">
							<input id="no_bapl" name="no_bapl" type="text" placeholder="Nomor BAPL" class="wajib_isi form-control" autocomplete="off"  />
					</div>
			</div> -->
			<h5>Data Perusahaan</h5>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Nama Perusahaan<span class="require">*</span></label>
				<div class="col-sm-8 col-lg-7 controls">
					<input id="nama_usaha" name="nama_usaha" type="text" placeholder="Nama Perusahaan" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Jenis Usaha<span class="require">*</span></label>
				<div class="col-sm-8 col-lg-7 controls">
					<input id="jenis_usaha" name="jenis_usaha" type="text" placeholder="Jenis Usaha" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Luas Bangunan <span class="require">*</span></label>
				<div class="col-sm-5 col-lg-3 controls input-group">
					<input id="luas_bangunan" name="luas_bangunan" type="text" placeholder="0.00" class="wajib_isi form-control angka" onkeypress="return blockNonNumbers(this, event, true, true);"  autocomplete="off" maxlength="18" />
					<span class="input-group-btn">
						<span class="btn">M<sup>2</sup></span>
					</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Status Bangunan<span class="require">*</span></label>
				<div class="col-sm-8 col-lg-7 controls">
					<input id="status_bangunan" name="status_bangunan" type="text" placeholder="Status Bangunan" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Jumlah Karyawan <span class="require">*</span></label>
				<div class="col-sm-5 col-lg-3 controls input-group">
					<input id="jumlah_karyawan" name="jumlah_karyawan" type="text" placeholder="0" class="wajib_isi form-control angka" onkeypress="return blockNonNumbers(this, event, true, true);"  autocomplete="off" maxlength="6" />
					<span class="input-group-btn">
						<span class="btn">Orang</span>
					</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">No.&amp;Tanggal Berdiri <span class="require">*</span></label>
				<div class="col-sm-4 col-lg-4 controls">
					<input id="no_perusahaan" name="no_perusahaan" type="text" placeholder="No. Perusahaan" class="wajib_isi form-control" autocomplete="off" />
				</div>
				<div class="col-sm-4 col-lg-3 controls">
					<input id="tanggal_berdiri" name="tanggal_berdiri" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Alamat Perusahaan
					<span class="require">*</span>
				</label>
				<div class="col-sm-8 col-lg-7 controls">
					<textarea name="alamat_usaha" id="alamat_usaha" class="wajib_isi form-control" placeholder="Alamat Usaha"></textarea>
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
			<!-- {{ syarat_form|raw }} -->
		</div>
		<div id="bapl" class="tab-pane">
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Nomor BAPL
					<span class="require">*</span>
				</label>
				<div class="col-sm-8 col-lg-7 controls">
					<input value="{{config_item('no_bapl_suffix')}}" id="no_bapl" name="no_bapl" type="text" placeholder="Nomor BAPL" class="wajib_isi form-control" autocomplete="off"  />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-4 control-label">Tanggal BAPL<span class="require">*</span></label>
				<div class="col-sm-4 col-lg-3 controls">
					<input id="tgl_bapl" name="tgl_bapl" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="{{ format_datepicker(detail.tgl_bapl) }}" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Lokasi Usaha
					<span class="require">*</span>
				</label>
				<div class="col-sm-8 col-lg-7 controls">
					<textarea name="lokasi" id="lokasi" class="wajib_isi form-control" placeholder="Lokasi"></textarea>
				</div>
			</div>
			<h5>Batas Tempat Usaha</h5>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Sebelah Utara
					<span class="require">*</span>
				</label>
				<div class="col-sm-8 col-lg-7 controls">
					<input  id="batas_utara" name="batas_utara" type="text" placeholder="Batas Utara" class="wajib_isi form-control" autocomplete="off"  />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Sebelah Timur
					<span class="require">*</span>
				</label>
				<div class="col-sm-8 col-lg-7 controls">
					<input  id="batas_timur" name="batas_timur" type="text" placeholder="Batas Timur" class="wajib_isi form-control" autocomplete="off"  />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Sebelah Selatan
					<span class="require">*</span>
				</label>
				<div class="col-sm-8 col-lg-7 controls">
					<input  id="batas_selatan" name="batas_selatan" type="text" placeholder="Batas Selatan" class="wajib_isi form-control" autocomplete="off"  />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Sebelah Barat
					<span class="require">*</span>
				</label>
				<div class="col-sm-8 col-lg-7 controls">
					<input  id="batas_barat" name="batas_barat" type="text" placeholder="Batas Barat" class="wajib_isi form-control" autocomplete="off"  />
				</div>
			</div>
			<h5>Jenis Bangunan</h5>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Jenis Bangunan <span class="require">*</span></label>
				<div class="col-sm-8 col-lg-7 controls">
					{{ dropdown_jenis_bangunan|raw }}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Lokasi/Lingkungan<span class="require">*</span></label>
				<div class="col-sm-8 col-lg-7 controls">
					{{ dropdown_lokasi_lingkungan|raw }}
				</div>
			</div>
			<h5>Sarana/Fasilitas Usaha</h5>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Toko/Ruko
					<span class="require">*</span>
				</label>
				<div class="col-sm-8 col-lg-7 controls">
					<input  id="sf_toko_ruko" name="sf_toko_ruko" type="text" placeholder="" class="wajib_isi form-control" autocomplete="off"  />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Gudang
					<span class="require">*</span>
				</label>
				<div class="col-sm-8 col-lg-7 controls">
					<input  id="sf_gudang" name="sf_gudang" type="text" placeholder="" class="wajib_isi form-control" autocomplete="off"  />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Ruang Kerja/Produksi
					<span class="require">*</span>
				</label>
				<div class="col-sm-8 col-lg-7 controls">
					<input  id="ruang_kerja_produksi" name="ruang_kerja_produksi" type="text" placeholder="" class="wajib_isi form-control" autocomplete="off"  />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Mesin Produksi
					<span class="require">*</span>
				</label>
				<div class="col-sm-8 col-lg-7 controls">
					<input  id="mesin_produksi" name="mesin_produksi" type="text" placeholder="" class="wajib_isi form-control" autocomplete="off"  />
				</div>
			</div>
			<h5>Jumlah Karyawan</h5>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Laki-Laki <span class="require">*</span></label>
				<div class="col-sm-5 col-lg-3 controls input-group">
					<input id="jml_kry_pria" name="jml_kry_pria" type="text" placeholder="0" class="wajib_isi form-control angka" onkeypress="return blockNonNumbers(this, event, true, true);"  autocomplete="off" maxlength="6" />
					<span class="input-group-btn">
						<span class="btn">Orang</span>
					</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Perempuan <span class="require">*</span></label>
				<div class="col-sm-5 col-lg-3 controls input-group">
					<input id="jml_kry_wanita" name="jml_kry_wanita" type="text" placeholder="0" class="wajib_isi form-control angka" onkeypress="return blockNonNumbers(this, event, true, true);"  autocomplete="off" maxlength="6" />
					<span class="input-group-btn">
						<span class="btn">Orang</span>
					</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">WNA <span class="require">*</span></label>
				<div class="col-sm-5 col-lg-3 controls input-group">
					<input id="jml_kry_wna" name="jml_kry_wna" type="text" placeholder="0" class="wajib_isi form-control angka" onkeypress="return blockNonNumbers(this, event, true, true);"  autocomplete="off" maxlength="6" />
					<span class="input-group-btn">
						<span class="btn">Orang</span>
					</span>
				</div>
			</div>
			<h5>Prasarana Tempat Usaha</h5>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Luas Parkir <span class="require">*</span></label>
				<div class="col-sm-5 col-lg-3 controls input-group">
					<input id="luas_parkir" name="luas_parkir" type="text" placeholder="0.0" class="wajib_isi form-control angka" onkeypress="return blockNonNumbers(this, event, true, true);"  autocomplete="off" maxlength="6" />
					<span class="input-group-btn">
						<span class="btn">M<sup>2</sup></span>
					</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Tempat Ibadah
					<span class="require">*</span>
				</label>
				<div class="col-sm-8 col-lg-7 controls">
					<input  id="tempat_ibadah" name="tempat_ibadah" type="text" placeholder="" class="wajib_isi form-control" autocomplete="off"  />
				</div>
			</div>
			<h5>Hasil Pemeriksaan Lapangan</h5>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Hasil SKDTU<span class="require">*</span></label>
				<div class="col-sm-8 col-lg-7 controls">
					{{ dropdown_status_hasil_skdtu|raw }}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Jarak Lingkungan<span class="require">*</span></label>
				<div class="col-sm-8 col-lg-7 controls">
					{{ dropdown_status_hasil_jarak_lingkungan|raw }}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Pemeriksaan Fasilitas<span class="require">*</span></label>
				<div class="col-sm-8 col-lg-7 controls">
					{{ dropdown_status_hasil_periksa_fasilitas|raw }}
				</div>
			</div>
			<h5>Status Rekomendasi</h5>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Surat Izin<span class="require">*</span></label>
				<div class="col-sm-8 col-lg-7 controls">
					{{ dropdown_status_surat_izin|raw }}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Jenis Luas Bangunan Fasilitas<span class="require">*</span></label>
				<div class="col-sm-8 col-lg-7 controls">
					{{ dropdown_status_jenis_luas_bangunan_fasilitas|raw }}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Pengabulan Permohonan<span class="require">*</span></label>
				<div class="col-sm-8 col-lg-7 controls">
					{{ dropdown_status_kabul_permohonan|raw }}
				</div>
			</div>
			<h5>Petugas Lapangan</h5>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Petugas I
					<span class="require">*</span>
				</label>
				<div class="col-sm-8 col-lg-7 controls">
					<input  id="petugas_1" name="petugas_1" type="text" placeholder="Nama Petugas I" class="wajib_isi form-control" autocomplete="off"  />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 col-lg-3 control-label">Petugas II
					<span class="require">*</span>
				</label>
				<div class="col-sm-8 col-lg-7 controls">
					<input  id="petugas_2" name="petugas_2" type="text" placeholder="Nama Petugas II" class="wajib_isi form-control" autocomplete="off"  />
				</div>
			</div>
		</div>
	</div>
</form>
<script type="text/javascript">
	$(document).ready(function(){
		$(".nav-tabs a").click(function(){
	        $(this).tab('show');
	    });
	});
</script>