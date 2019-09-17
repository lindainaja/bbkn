<form class="form-horizontal" action="#" id="form_sk_tidak_mampu_pendidikan">
	<input type="hidden" id="sk_tidak_mampu_pendidikanid" name="sk_tidak_mampu_pendidikanid" value="{{sk_tidak_mampu_pendidikanid}}" />
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
	<label class="col-sm-4 col-lg-3 control-label">Nama 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nama" name="nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off"  value="{{detail.nama}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Jenis Kelamin <span class="require">*</span></label>
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

	<label class="col-sm-4 col-lg-3 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" value="{{detail.tempat_lahir}}"/>
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="tanggal_lahir" name="tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off"  value="{{format_datepicker(detail.tanggal_lahir)}}"/>
	</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Agama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_agama|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Pekerjaan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_pekerjaan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Alamat 
	<span class="require">*</span>
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="alamat" id="alamat" class="wajib_isi form-control" placeholder="Alamat">{{detail.alamat}}</textarea>
</div>
</div>
    <div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Status Perkawinan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_status_perkawinan|raw }}
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Golongan Darah </label>
	<div class="col-sm-8 col-lg-7 controls">
		{{ dropdown_golongan_darah|raw }}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Dusun/Dukuh/Kampung 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="lingkungan" name="lingkungan" type="text" placeholder="" class="wajib_isi form-control" autocomplete="off"  value="{{detail.lingkungan}}" />
	</div>
</div>
<h4><strong>Anggota Keluarga</strong></h4>
{% if count(anggota)<=0 %}
<div class="form-group anggota_keluarga">

	<div class="col-sm-4 col-lg-4 controls">
	<input name="detail_nama[]" flag="1" id="detail_nama_1" type="text" placeholder="Nama" class="form-control" autocomplete="off" maxlength="150" />
	</div>
	<div class="col-sm-2 col-lg-2 controls">
	<input name="detail_umur[]" flag="1" id="detail_umur_1" type="text" placeholder="Umur" class="form-control detail_umur" autocomplete="off" maxlength="25" />
	</div>

	<div class="col-sm-4 col-lg-4 controls">
	{{ form_dropdown('detail_shdk[]',status_keluarga,'','id="detail_shdk_1" flag="1" class="select2 form-control" style="width:100%" ') | raw }}
	</div>
	<div class="col-sm-1 col-lg-1 controls">
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

<div class="col-sm-4 col-lg-4 controls">
<input name="detail_nama[]" flag="{{ flag }}" id="detail_nama_{{ flag }}" type="text" placeholder="Nama" class="form-control" autocomplete="off" maxlength="150" value="{{ anggota_val.nama }}" />
</div>
<div class="col-sm-2 col-lg-2 controls">
<input name="detail_umur[]" flag="{{ flag }}" id="detail_numur_{{ flag }}" type="text" placeholder="Umur" class="form-control detail_umur" value="{{ anggota_val.umur }}" autocomplete="off" maxlength="25" />
</div>
 
<div class="col-sm-4 col-lg-4 controls">
{{ form_dropdown('detail_shdk[]',status_keluarga,anggota_val.shdk,"id='detail_shdk_#{flag}' flag='#{flag}' class='select2 form-control' style='width:100%' ")|raw }}

</div>
<div class="col-sm-1 col-lg-1 controls">
{{ btn|raw }}
</div>
</div>
{% endfor %} {% endif %}
<div id="tpl_tempel"></div>
<br/><br/>
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