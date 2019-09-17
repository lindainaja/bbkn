<form class="form-horizontal" action="#" id="form_datang">
<input type="hidden" id="datangid" name="datangid" value="{{ datangid }}" />
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Kelurahan <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
{{ dropdown_no_kel|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Tanggal <span class="require">*</span></label>
<div class="col-sm-3 col-lg-2 controls">
<input id="date" name="date" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="{{ format_datepicker(detail.date) }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Nomor <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="no" name="no" type="text" placeholder="Nomor" class="wajib_isi form-control" autocomplete="off" maxlength="100" value="{{ detail.no }}" />
</div>
</div>
<h5>Daerah Asal</h5>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Nomor KK <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="no_kk_asal" name="no_kk_asal" type="text" placeholder="Nomor KK" class="wajib_isi form-control" autocomplete="off" maxlength="50" value="{{ detail.no_kk_asal }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Nama KK <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="nama_kk_asal" name="nama_kk_asal" type="text" placeholder="Nama KK" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{ detail.nama_kk_asal }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Alamat <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<textarea name="alamat_asal" id="alamat_asal" class="wajib_isi form-control" placeholder="Alamat">{{ detail.alamat_asal }}</textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">RT <span class="require">*</span></label>
<div class="col-sm-2 col-lg-2 controls">
<input id="rt_asal" name="rt_asal" type="text" placeholder="RT" class="wajib_isi form-control" autocomplete="off" maxlength="5" value="{{ detail.rt_asal }}" />
</div>
<label class="col-sm-1 col-lg-1 control-label">RW <span class="require">*</span></label>
<div class="col-sm-2 col-lg-2 controls">
<input id="rw_asal" name="rw_asal" type="text" placeholder="RW" class="wajib_isi form-control" autocomplete="off" maxlength="5" value="{{ detail.rw_asal }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Propinsi <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="prop_asal" name="prop_asal" type="text" placeholder="Propinsi" class="wajib_isi form-control" autocomplete="off" maxlength="100" value="{{ detail.prop_asal }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Kota/Kabupaten <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="kab_asal" name="kab_asal" type="text" placeholder="Kota/Kabupaten" class="wajib_isi form-control" autocomplete="off" maxlength="100" value="{{ detail.kab_asal }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Kecamatan <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="kec_asal" name="kec_asal" type="text" placeholder="Kecamatan" class="wajib_isi form-control" autocomplete="off" maxlength="100" value="{{ detail.kec_asal }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Kelurahan <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="kel_asal" name="kel_asal" type="text" placeholder="Kelurahan" class="wajib_isi form-control" autocomplete="off" maxlength="100" value="{{ detail.kel_asal }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Kodepos </label>
<div class="col-sm-6 col-lg-5 controls">
<input id="kodepos" name="kodepos" type="text" placeholder="Kodepos" class="form-control" autocomplete="off" maxlength="10" value="{{ detail.kodepos }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Telepon </label>
<div class="col-sm-6 col-lg-5 controls">
<input id="tlp" name="tlp" type="text" placeholder="Telepon" class="form-control" autocomplete="off" maxlength="25" value="{{ detail.tlp }}" />
</div>
</div>
<h5>Daerah Tujuan</h5>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Nomor KK <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="no_kk_tujuan" name="no_kk_tujuan" type="text" placeholder="Nomor KK" class="wajib_isi form-control" autocomplete="off" maxlength="50" value="{{ detail.no_kk_tujuan }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Nama Kepala Keluarga <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="nama_kk_tujuan" name="nama_kk_tujuan" type="text" placeholder="Nama Kepala Keluarga" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{ detail.nama_kk_tujuan }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">NIK Kep. Keluarga<span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="nik_kk_tujuan" name="nik_kk_tujuan" type="text" placeholder="NIK Kep. Keluarga" class="wajib_isi form-control" autocomplete="off" maxlength="25" value="{{ detail.nik_kk_tujuan }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Alamat <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<textarea name="alamat_tujuan" id="alamat_tujuan" class="wajib_isi form-control" placeholder="Alamat">{{ detail.alamat_tujuan }}</textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">RT <span class="require">*</span></label>
<div class="col-sm-2 col-lg-2 controls">
<input id="rt_tujuan" name="rt_tujuan" type="text" placeholder="RT" class="wajib_isi form-control" autocomplete="off" maxlength="5" value="{{ detail.rt_tujuan }}" />
</div>
<label class="col-sm-1 col-lg-1 control-label">RW <span class="require">*</span></label>
<div class="col-sm-2 col-lg-2 controls">
<input id="rw_tujuan" name="rw_tujuan" type="text" placeholder="RW" class="wajib_isi form-control" autocomplete="off" maxlength="5" value="{{ detail.rw_tujuan }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Status Nomor KK (Bagi yg. pindah)  <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
{{ dropdown_sn_kk_pindah| raw }}
</div>
</div>
<!-- <div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Tanggal Pindah <span class="require">*</span></label>
<div class="col-sm-3 col-lg-2 controls">
<input id="tgl_pindah" name="tgl_pindah" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
</div>
</div> -->
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Tanggal Datang <span class="require">*</span></label>
<div class="col-sm-3 col-lg-2 controls">
<input id="tgl_datang" name="tgl_datang" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="{{ format_datepicker(detail.tgl_datang) }}" />
</div>
</div>
<!-- <div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Jumlah Pengikut <span class="require">*</span></label>
<div class="col-sm-8 col-lg-2 controls">
<input id="jml_pengikut" name="jml_pengikut" type="text" placeholder="0" value="1" class="wajib_isi form-control" autocomplete="off" maxlength="2" onkeypress="return blockNonNumbers(this, event, true, true);" />
</div>
</div> -->
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Nomor Registrasi<span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="no_reg" name="no_reg" type="text" placeholder="Nomor Registrasi" class="wajib_isi form-control" autocomplete="off" maxlength="100" value="{{ detail.no_reg }}" />
</div>
</div>
<h5>Pemohon</h5>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">NIK <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="nik" name="nik" type="text" placeholder="NIK" class="wajib_isi form-control" autocomplete="off" maxlength="25" value="{{ detail.nik }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="nama" name="nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{ detail.nama }}" />
</div>
</div>




<h5><strong>Anggota Keluarga</strong></h5>
{% if count(anggota)==0 %}
<div class="form-group anggota_keluarga">
<div class="col-sm-3 col-lg-2 controls">
<input name="detail_nik[]" flag="1" id="detail_nik_1" type="text" placeholder="NIK" class="form-control detail_nik" autocomplete="off" maxlength="25" />
</div>
<div class="col-sm-3 col-lg-2 controls">
<input name="detail_nama[]" flag="1" id="detail_nama_1" type="text" placeholder="Nama" class="form-control" autocomplete="off" maxlength="150" />
</div>
<div class="col-sm-3 col-lg-2 controls">
<input name="detail_tmpt_lahir[]" flag="1" id="detail_tmpt_lahir_1" type="text" placeholder="Tempat Lahir" class="form-control" autocomplete="off" maxlength="100" />
</div>
<div class="col-sm-3 col-lg-2 controls">
<input id="detail_tgl_lahir_1" name="detail_tgl_lahir[]" flag="1" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" />
</div>
<div class="col-sm-3 col-lg-3 controls">
{{ form_dropdown('detail_shdk[]',status_keluarga,'','id="detail_shdk_1" flag="1" class="select2 form-control" style="width:100%" ') | raw}}
</div>
<div class="col-sm-3 col-lg-1 controls">
<a class="btn btn-info show-tooltip btn-sm btn-circle" title="" data-original-title="" href="javascript:;" onclick="add_row()"><i class="fa fa-plus-circle"></i></a>
</div>
</div>
{% else %}
{% set flag=0 %}
{% for anggota_key,anggota_val in anggota %}
{% set flag=flag+1 %}
{% set flag_id='' %}
{% set btn='<a class="btn btn-info show-tooltip btn-sm btn-circle" title="" data-original-title="" href="javascript:;" onclick="add_row()"><i class="fa fa-plus-circle"></i></a>' %}
{% if anggota_key!=0 %}
{% set flag_id=" id=row_#{flag}" %}
{% set btn="<a class='btn btn-danger show-tooltip btn-sm btn-circle' title='' data-original-title='Hapus' href='javascript:;' onclick='remove_row(#{flag})'><i class='fa fa-trash-o'></i></a>" %}
{% endif %}
<div class="form-group anggota_keluarga" {{ flag_id }}>
<div class="col-sm-3 col-lg-2 controls">
<input name="detail_nik[]" flag="{{ flag }}" id="detail_nik_{{ flag }}" type="text" placeholder="NIK" class="form-control detail_nik" value="{{ anggota_val.nik }}" autocomplete="off" maxlength="25" />
</div>
<div class="col-sm-3 col-lg-2 controls">
<input name="detail_nama[]" flag="{{ flag }}" id="detail_nama_{{ flag }}" type="text" placeholder="Nama" class="form-control" autocomplete="off" maxlength="150" value="{{ anggota_val.nama }}" />
</div>
<div class="col-sm-3 col-lg-2 controls">
<input name="detail_tmpt_lahir[]" flag="{{ flag }}" id="detail_tmpt_lahir_{{ flag }}" type="text" placeholder="Tempat Lahir" class="form-control" autocomplete="off" maxlength="100"  value="{{ anggota_val.tempat_lahir }}" />
</div>
<div class="col-sm-3 col-lg-2 controls">
<input id="detail_tgl_lahir_{{ flag }}" name="detail_tgl_lahir[]" flag="{{ flag }}" type="text" placeholder="dd/mm/yyyy" class="date-picker form-control input-small" autocomplete="off" value="{{ format_datepicker(anggota_val.tanggal_lahir) }}" />
</div>
<div class="col-sm-3 col-lg-3 controls">
{{ form_dropdown('detail_shdk[]',status_keluarga,anggota_val.shdk,"id='detail_shdk_#{flag}' flag='#{flag}' class='select2 form-control' style='width:100%' ")|raw }}
</div>
<div class="col-sm-3 col-lg-1 controls">
{{ btn | raw}}
</div>
</div>
{% endfor %}
{% endif %}
<div id="tpl_tempel"></div>
<br/><br/><h5>Data Tanda Tangan</h5>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="ttd_nama" name="ttd_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{ detail.ttd_nama }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">NIP <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="ttd_nip" name="ttd_nip" type="text" placeholder="NIP" class="wajib_isi form-control" autocomplete="off" maxlength="50" value="{{ detail.ttd_nip }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Jabatan <span class="require">*</span></label>
<div class="col-sm-6 col-lg-5 controls">
<input id="ttd_jabatan" name="ttd_jabatan" type="text" placeholder="Jabatan" class="wajib_isi form-control" autocomplete="off" maxlength="100" value="{{ detail.ttd_jabatan }}" />
</div>
</div>
{{ syarat_form|raw }}
</form>
