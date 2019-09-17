<form class="form-horizontal" action="#" id="form_domisili_wna">
<input type="hidden" id="domisili_wnaid" name="domisili_wnaid" value="0" />
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
<label class="col-sm-4 col-lg-4 control-label">Kewarganegaraan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_kewarganegaraan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nomor Keterangan</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="no_ket" name="no_ket" type="text" placeholder="Nomor Keterangan" class="form-control" autocomplete="off" maxlength="100" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">STMD Polres</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="stmd_polres" name="stmd_polres" type="text" placeholder="STMD Polres" class="form-control" autocomplete="off" maxlength="100" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Pasport</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="pasport" name="pasport" type="text" placeholder="Pasport" class="form-control" autocomplete="off" maxlength="100" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Visa</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="visa" name="visa" type="text" placeholder="Visa" class="form-control" autocomplete="off" maxlength="100" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Kim.S/ Kim</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="kim" name="kim" type="text" placeholder="Kim.S/ Kim" class="form-control" autocomplete="off" maxlength="100" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Izin Kerja (IMTA)</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="izin_kerja" name="izin_kerja" type="text" placeholder="Izin Kerja (IMTA)" class="form-control" autocomplete="off" maxlength="100" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">NPWPD</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="npwpd" name="npwpd" type="text" placeholder="NPWPD" class="form-control" autocomplete="off" maxlength="100" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Maksud Tujuan Kunjungan</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="tujuan_kunjungan" name="tujuan_kunjungan" type="text" placeholder="Maksud Tujuan Kunjungan" class="form-control" autocomplete="off" maxlength="150" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Tempat Berkunjung Indonesia</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="tempat_kunjungan" name="tempat_kunjungan" type="text" placeholder="Tempat Berkunjung Indonesia" class="form-control" autocomplete="off" maxlength="150" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Nama Penanggung Jawab</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="nama_penanggung_jawab" name="nama_penanggung_jawab" type="text" placeholder="Nama Penanggung Jawab" class="form-control" autocomplete="off" maxlength="150" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Alamat Penanggung Jawab</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="alamat_penanggung_jawab" id="alamat_penanggung_jawab" class="form-control" placeholder="Alamat Penanggung Jawab"></textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Berlaku Dari <span class="require">*</span></label>
<div class="col-sm-4 col-lg-3 controls">
<input id="tgl_berlaku_dari" name="tgl_berlaku_dari" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
</div>
<label class="col-sm-4 col-lg-1 control-label">Sampai</label>
<div class="col-sm-4 col-lg-3 controls">
<input id="tgl_berlaku_sampai" name="tgl_berlaku_sampai" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
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

