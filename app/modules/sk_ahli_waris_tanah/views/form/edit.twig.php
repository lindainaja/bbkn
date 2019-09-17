<form class="form-horizontal" action="#" id="form_sk_ahli_waris_tanah">
	<input type="hidden" id="sk_ahli_waris_tanahid" name="sk_ahli_waris_tanahid" value="{{sk_ahli_waris_tanahid}}" />
	<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Kelurahan <span class="require">*</span></label>

<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_no_kel|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Tanggal Surat 
	<span class="require">*</span>
			</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="date" name="date" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="{{format_datepicker(detail.date)}}"  />
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nomor 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="no" name="no" type="text" placeholder="Nomor" class="wajib_isi form-control" autocomplete="off"  value="{{detail.no}}" />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nomor Registrasi 
		</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nomor_registrasi" name="nomor_registrasi" type="text" placeholder="Nomor Registrasi" class=" form-control" autocomplete="off"  value="{{detail.nomor_registrasi}}" />
	</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Tanggal Registrasi 
</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="tanggal_registrasi" name="tanggal_registrasi" type="text" placeholder="dd/mm/yyyy" class=" date-picker form-control input-small" autocomplete="off" value="{{format_datepicker(detail.tanggal_registrasi)}}"  />
</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama Almarhum 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nama_almarhum" name="nama_almarhum" type="text" placeholder="Nama Almarhum" class="wajib_isi form-control" autocomplete="off"  value="{{detail.nama_almarhum}}" />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama Pasangan Alm. 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nama_pasangan_almarhum" name="nama_pasangan_almarhum" type="text" placeholder="Nama Pasangan Alm." class="wajib_isi form-control" autocomplete="off"  value="{{detail.nama_pasangan_almarhum}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Alias Pasangan Alm. 
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="alias_nama_pasangan" name="alias_nama_pasangan" type="text" placeholder="Alias" class="wajib_isi form-control" autocomplete="off"  value="{{detail.alias_nama_pasangan}}" />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">No Sertifikat 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="no_sertifikat" name="no_sertifikat" type="text" placeholder="No Sertifikat" class="wajib_isi form-control" autocomplete="off"  value="{{detail.no_sertifikat}}" />
	</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Tanggal Meninggal 
	<span class="require">*</span>
			</label>
<div class="col-sm-8 col-lg-7 controls">
<input id="tanggal_meninggal" name="tanggal_meninggal" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="{{format_datepicker(detail.tanggal_meninggal)}}"  />
</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">No Surat Kematian 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="no_surat_kematian" name="no_surat_kematian" type="text" placeholder="No Surat Kematian" class="wajib_isi form-control" autocomplete="off"  value="{{detail.no_surat_kematian}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Jumlah Anak
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="jumlah_anak" name="jumlah_anak" type="text" placeholder="Jumlah Anak" class="wajib_isi form-control" autocomplete="off" value="{{detail.jumlah_anak}}" />
	</div>
</div>
<h5>Data Ahli Waris 1</h5>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="aw1_nama" name="aw1_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off"  value="{{detail.aw1_nama}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="aw1_tempat_lahir" name="aw1_tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" value="{{detail.aw1_tempat_lahir}}" />
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="aw1_tanggal_lahir" name="aw1_tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="{{format_datepicker(detail.aw1_tanggal_lahir)}}" />
	</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Status Keluarga <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ aw1_dropdown_status_keluarga|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Pekerjaan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ aw1_dropdown_pekerjaan|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Alamat 
	<span class="require">*</span>
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="aw1_alamat" id="aw1_alamat" class="wajib_isi form-control" placeholder="Alamat">{{detail.aw1_alamat}}</textarea>
</div>
</div>
<h5>Data Ahli Waris 2</h5>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama 
		
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="aw2_nama" name="aw2_nama" type="text" placeholder="Nama" class="form-control" autocomplete="off"  value="{{detail.aw2_nama}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Tempat, Tanggal Lahir </label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="aw2_tempat_lahir" name="aw2_tempat_lahir" type="text" placeholder="Tempat Lahir" class="form-control" autocomplete="off" value="{{detail.aw2_tempat_lahir}}" />
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="aw2_tanggal_lahir" name="aw2_tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" value="{{format_datepicker(detail.aw2_tanggal_lahir)}}" />
	</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Status Keluarga </label>
<div class="col-sm-8 col-lg-7 controls">
{{ aw2_dropdown_status_keluarga|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Pekerjaan </label>
<div class="col-sm-8 col-lg-7 controls">
{{ aw2_dropdown_pekerjaan|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Alamat 
	
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="aw2_alamat" id="aw2_alamat" class="form-control" placeholder="Alamat">{{detail.aw2_alamat}}</textarea>
</div>
</div>
<h5>Data Ahli Waris 3</h5>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama 
		
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="aw3_nama" name="aw3_nama" type="text" placeholder="Nama" class="form-control" autocomplete="off"  value="{{detail.aw3_nama}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Tempat, Tanggal Lahir </label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="aw3_tempat_lahir" name="aw3_tempat_lahir" type="text" placeholder="Tempat Lahir" class="form-control" autocomplete="off" value="{{detail.aw3_tempat_lahir}}" />
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="aw3_tanggal_lahir" name="aw3_tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" value="{{format_datepicker(detail.aw3_tanggal_lahir)}}" />
	</div>
</div>

    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Status Keluarga </label>
<div class="col-sm-8 col-lg-7 controls">
{{ aw3_dropdown_status_keluarga|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Pekerjaan </label>
<div class="col-sm-8 col-lg-7 controls">
{{ aw3_dropdown_pekerjaan|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Alamat 
	
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="aw3_alamat" id="aw3_alamat" class="form-control" placeholder="Alamat">{{detail.aw3_alamat}}</textarea>
</div>
</div>
<h5>Data Ahli Waris 4</h5>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama 
		
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="aw4_nama" name="aw4_nama" type="text" placeholder="Nama" class="form-control" autocomplete="off"  value="{{detail.aw4_nama}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Tempat, Tanggal Lahir </label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="aw4_tempat_lahir" name="aw4_tempat_lahir" type="text" placeholder="Tempat Lahir" class="form-control" autocomplete="off" value="{{detail.aw4_tempat_lahir}}" />
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="aw4_tanggal_lahir" name="aw4_tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" value="{{format_datepicker(detail.aw4_tanggal_lahir)}}" />
	</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Status Keluarga </label>
<div class="col-sm-8 col-lg-7 controls">
{{ aw4_dropdown_status_keluarga|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Pekerjaan </label>
<div class="col-sm-8 col-lg-7 controls">
{{ aw4_dropdown_pekerjaan|raw }}
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Alamat 
	
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="aw4_alamat" id="aw4_alamat" class="form-control" placeholder="Alamat">{{detail.aw4_alamat}}</textarea>
</div>
</div>
<h5>Data Saksi</h5>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama Saksi 1 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="saksi_1" name="saksi_1" type="text" placeholder="Nama Saksi 1" class="wajib_isi form-control" autocomplete="off"  value="{{detail.saksi_1}}" />
	</div>
</div>
    <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama Saksi 2 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="saksi_2" name="saksi_2" type="text" placeholder="Nama Saksi 2" class="wajib_isi form-control" autocomplete="off"  value="{{detail.saksi_2}}" />
	</div>
</div>
<h5>Data Kepala Dusun/Dukuh/Kampung</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_kl_nama" name="ttd_kl_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{detail.ttd_kl_nama}}"/>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">NIP <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_kl_nip" name="ttd_kl_nip" type="text" placeholder="NIP" class="wajib_isi form-control" autocomplete="off" maxlength="50" value="{{detail.ttd_kl_nip}}"  />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Jabatan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_kl_jabatan" name="ttd_kl_jabatan" type="text" placeholder="Jabatan" class="wajib_isi form-control" autocomplete="off" maxlength="100" value="{{detail.ttd_kl_jabatan}}"/>
</div>
</div>
<h5>Data Tanda Tangan</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_nama" name="ttd_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{detail.ttd_nama}}"/>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">NIP <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_nip" name="ttd_nip" type="text" placeholder="NIP" class="wajib_isi form-control" autocomplete="off" maxlength="50" value="{{detail.ttd_nip}}"  />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Jabatan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_jabatan" name="ttd_jabatan" type="text" placeholder="Jabatan" class="wajib_isi form-control" autocomplete="off" maxlength="100" value="{{detail.ttd_jabatan}}"/>
</div>
</div>
{{ syarat_form|raw }}


</form>	