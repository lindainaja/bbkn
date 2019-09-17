<form class="form-horizontal" action="#" id="form_sk_domisili_kantor">
	<input type="hidden" id="sk_domisili_kantorid" name="sk_domisili_kantorid" value="{{sk_domisili_kantorid}}" />
	<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Kelurahan <span class="require">*</span></label>

<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_no_kel|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Tanggal 
	<span class="require">*</span>
			</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="date" name="date" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="{{format_datepicker(detail.date)}}"  />
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nomor 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="no" name="no" type="text" placeholder="Nomor" class="wajib_isi form-control" autocomplete="off"  value="{{detail.no}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Domisili 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="domisili" name="domisili" type="text" placeholder="Domisili" class="wajib_isi form-control" autocomplete="off"  value="{{detail.domisili}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Dusun/Dukuh/Kampung 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="lingkungan" name="lingkungan" type="text" placeholder="" class="wajib_isi form-control" autocomplete="off"  value="{{detail.lingkungan}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nama Ketua 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nama_ketua" name="nama_ketua" type="text" placeholder="Nama Ketua" class="wajib_isi form-control" autocomplete="off"  value="{{detail.nama_ketua}}" />
	</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Alamat Ketua 
	<span class="require">*</span>
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="alamat_ketua" id="alamat_ketua" class="wajib_isi form-control" placeholder="Alamat Ketua">{{detail.alamat_ketua}}</textarea>
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nama Organisasi 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nama_organisasi" name="nama_organisasi" type="text" placeholder="Nama Organisasi" class="wajib_isi form-control" autocomplete="off"  value="{{detail.nama_organisasi}}" />
	</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-4 control-label">Alamat Kantor 
	<span class="require">*</span>
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="alamat_kantor" id="alamat_kantor" class="wajib_isi form-control" placeholder="Alamat Kantor">{{detail.alamat_kantor}}</textarea>
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