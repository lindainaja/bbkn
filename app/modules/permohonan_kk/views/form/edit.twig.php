<form class="form-horizontal" action="#" id="form_permohonan_kk">
<input type="hidden" id="permohonan_kkid" name="permohonan_kkid" value="{{ permohonan_kkid }}" />
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Kelurahan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_no_kel|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Tanggal <span class="require">*</span></label>
<div class="col-sm-4 col-lg-3 controls">
<input id="date" name="date" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" value="{{ format_datepicker(detail.date) }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="nama" name="nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{ detail.nama }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">NIK <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="nik" name="nik" type="text" placeholder="NIK" class="wajib_isi form-control" autocomplete="off" maxlength="25" value="{{ detail.nik }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">No KK <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="no_kk" name="no_kk" type="text" placeholder="No KK" class="wajib_isi form-control" autocomplete="off" maxlength="25" value="{{ detail.no_kk }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Alamat <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="alamat" id="alamat" class="wajib_isi form-control" placeholder="Alamat">{{ detail.alamat }}</textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">RT <span class="require">*</span></label>
<div class="col-sm-2 col-lg-2 controls">
<input id="rt" name="rt" type="text" placeholder="RT" class="form-control" autocomplete="off" maxlength="5" value="{{ detail.rt }}" />
</div>
<label class="col-sm-2 col-lg-2 control-label">RW <span class="require">*</span></label>
<div class="col-sm-2 col-lg-2 controls">
<input id="rw" name="rw" type="text" placeholder="RW" class="wajib_isi form-control" autocomplete="off" maxlength="5" value="{{ detail.rw }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Kode Pos <span class="require">*</span></label>
<div class="col-sm-2 col-lg-2 controls">
<input id="kodepos" name="kodepos" type="text" placeholder="Kode Pos" class="wajib_isi form-control" autocomplete="off" maxlength="7" value="{{ detail.kodepos }}" />
</div>
<label class="col-sm-2 col-lg-2 control-label">Telpon <span class="require">*</span></label>
<div class="col-sm-2 col-lg-3 controls">
<input id="tlp" name="tlp" type="text" placeholder="Telpon" class="wajib_isi form-control" autocomplete="off" maxlength="25" value="{{ detail.tlp }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Alasan Permohonan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_alasan_permohonan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Jml Anggota Keluarga <span class="require">*</span></label>
<div class="col-sm-8 col-lg-2 controls">
<input id="jml_anggota" name="jml_anggota" type="text" placeholder="0" class="wajib_isi form-control" autocomplete="off" maxlength="2" onkeypress="return blockNonNumbers(this, event, true, true);" value="{{ detail.jml_anggota }}" />
</div>
</div>
<h4><strong>Anggota Keluarga</strong></h4>
{% if count(anggota)<=0 %}
<div class="form-group anggota_keluarga">
	<div class="col-sm-3 col-lg-3 controls">
	<input name="detail_nik[]" flag="1" id="detail_nik_1" type="text" placeholder="NIK" class="form-control detail_nik" autocomplete="off" maxlength="25" />
	</div>
	<div class="col-sm-3 col-lg-4 controls">
	<input name="detail_nama[]" flag="1" id="detail_nama_1" type="text" placeholder="Nama" class="form-control" autocomplete="off" maxlength="150" />
	</div>
	<div class="col-sm-3 col-lg-4 controls">
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
<div class="col-sm-3 col-lg-3 controls">
<input name="detail_nik[]" flag="{{ flag }}" id="detail_nik_{{ flag }}" type="text" placeholder="NIK" class="form-control detail_nik" value="{{ anggota_val.nik }}" autocomplete="off" maxlength="25" />
</div>
<div class="col-sm-3 col-lg-4 controls">
<input name="detail_nama[]" flag="{{ flag }}" id="detail_nama_{{ flag }}" type="text" placeholder="Nama" class="form-control" autocomplete="off" maxlength="150" value="{{ anggota_val.nama }}" />
</div>
<div class="col-sm-3 col-lg-4 controls">
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
<label class="col-sm-4 col-lg-3 control-label">Nama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_nama" name="ttd_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" value="{{ detail.ttd_nama }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">NIP <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_nip" name="ttd_nip" type="text" placeholder="NIP" class="wajib_isi form-control" autocomplete="off" maxlength="50" value="{{ detail.ttd_nip }}" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Jabatan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="ttd_jabatan" name="ttd_jabatan" type="text" placeholder="Jabatan" class="wajib_isi form-control" autocomplete="off" maxlength="100" value="{{ detail.ttd_jabatan }}" />
</div>
</div>
{{ syarat_form|raw }}
</form>
