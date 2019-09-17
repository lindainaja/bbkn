<form class="form-horizontal" action="#" id="form_pegawai">

<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">NIP <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-8 controls">
	<input type="hidden" id="pegawaiid" name="pegawaiid" value="0" />
	<input id="nip" name="nip" type="text" placeholder="NIP" class="form-control" autocomplete="off" maxlength="20" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Status Pegawai<span class="require">*</span></label>
	<div class="col-sm-8 col-lg-8 controls">
			{{ dropdown_status_pegawai |raw}}
	</div>
</div>

<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Gelar Non Akademis</label>
	<div class="col-sm-8 col-lg-8 controls">
	<input id="gelar_nonakademis" name="gelar_nonakademis" type="text" placeholder="Gelar Non Akademis" class="form-control" autocomplete="off" maxlength="10" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Gelar Depan</label>
	<div class="col-sm-8 col-lg-8 controls">
	<input id="gelar_depan" name="gelar_depan" type="text" placeholder="Gelar Depan" class="form-control" autocomplete="off" maxlength="10" />
	</div>
</div>


<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-8 controls">
	<input id="nama_pegawai" name="nama_pegawai" type="text" placeholder="Nama Pegawai" class="form-control" autocomplete="off" maxlength="100" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Gelar Belakang</label>
	<div class="col-sm-8 col-lg-8 controls">
	<input id="gelar_belakang" name="gelar_belakang" type="text" placeholder="Gelar Belakang" class="form-control" autocomplete="off" maxlength="10" />
	</div>
</div>





<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Jabatan</label>
	<div class="col-sm-8 col-lg-8 controls">
	<input id="jabatan" name="jabatan" type="text" placeholder="Jabatan" class="form-control" autocomplete="off" maxlength="100" />
	</div>
</div>		 
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Pangkat</label>
	<div class="col-sm-8 col-lg-8 controls">
	{{ dropdown_pangkat | raw}}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Golongan</label>
	<div class="col-sm-8 col-lg-8 controls">
	{{ dropdown_golongan | raw}}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Unit Kerja</label>
	<div class="col-sm-8 col-lg-8 controls">
	<input id="unit_kerja" name="unit_kerja" type="text" placeholder="Unit Kerja" class="form-control" autocomplete="off" maxlength="100" />
	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Jenis Kelamin</label>
	<div class="col-sm-8 col-lg-8 controls">
	<label class="radio-inline"><input type="radio" checked="" value="l" name="gender"> Laki-laki</label>
	<label class="radio-inline"><input type="radio" value="p" name="gender"> Perempuan</label>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-5 controls">
	<input id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Tempat Lahir" class="form-control" autocomplete="off" />
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="tanggal_lahir" name="tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Agama <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-8 controls">
			{{ dropdown_agama| raw }}
	</div>
</div>

<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Gol Darah <span class="require">*</span> </label>
	<div class="col-sm-8 col-lg-8 controls">
			{{ dropdown_golongan_darah | raw }}
	</div>
</div>

<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Status Perkawinan <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-8 controls">
			{{ dropdown_status_perkawinan | raw }}
	</div>
</div>

<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nomor HP</label>
	<div class="col-sm-8 col-lg-8 controls">
	<input id="nomor_hp" name="nomor_hp" type="text" placeholder="Nomor HP" class="form-control" autocomplete="off" maxlength="20" />
	</div>
</div>


<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nomor Telp.</label>
	<div class="col-sm-8 col-lg-8 controls">
	<input id="nomor_tlp_rumah" name="nomor_tlp_rumah" type="text" placeholder="Nomor Telp." class="form-control" autocomplete="off" maxlength="20" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Foto</label>
	<div class="col-sm-8 col-lg-8 controls">
			{{ file_uploader | raw }}
	</div>
</div>

</form>