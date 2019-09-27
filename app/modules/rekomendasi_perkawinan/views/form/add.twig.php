<form class="form-horizontal" action="#" id="form_rekomendasi_perkawinan">
	<input type="hidden" id="rekomendasi_perkawinanid" name="rekomendasi_perkawinanid" value="0" />
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
<h5>Data Pihak A</h5>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="a_nama" name="a_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
<!-- <div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Alias 
		<span class="require"></span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="a_alias" name="a_alias" type="text" placeholder="Alias" class=" form-control" autocomplete="off"  />
	</div>
</div> -->
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Bin/Binti 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="a_bin_binti" name="a_bin_binti" type="text" placeholder="Bin" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Jenis Kelamin <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
	<label class="radio-inline"><input name="a_jk" class="jk jk_l" checked="" type="radio" value="l" /> Laki-laki</label> 
	<label class="radio-inline"><input name="a_jk" class="jk jk_p" type="radio" value="p" /> Perempuan</label> 
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">NIK 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="a_nik" name="a_nik" type="text" placeholder="NIK" class="wajib_isi form-control" autocomplete="off"   />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="a_tempat_lahir" name="a_tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" />
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="a_tanggal_lahir" name="a_tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
	</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Warga Negara <span class="require">*</span></label>

<div class="col-sm-8 col-lg-7 controls">
{{ a_dropdown_kewarganegaraan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Agama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ a_dropdown_agama|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Pekerjaan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ a_dropdown_pekerjaan|raw }}
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Alamat 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="a_alamat" name="a_alamat" type="text" placeholder="Alamat" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nomor Paspor 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="a_nomor_paspor" name="a_nomor_paspor" type="text" placeholder="Nomor Paspor" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Status Perkawinan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ a_dropdown_status_perkawinan|raw }}
</div>
</div>
<h5>Data Pihak B</h5>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nama 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="b_nama" name="b_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Bin/Binti 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="b_bin_binti" name="b_bin_binti" type="text" placeholder="Binti" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Jenis Kelamin <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-7 controls">
	<label class="radio-inline"><input name="b_jk" class="jk jk_l" checked="" type="radio" value="l" /> Laki-laki</label> 
	<label class="radio-inline"><input name="b_jk" class="jk jk_p" type="radio" value="p" /> Perempuan</label> 
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">NIK 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="b_nik" name="b_nik" type="text" placeholder="NIK" class="wajib_isi form-control" autocomplete="off"    />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="b_tempat_lahir" name="b_tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" />
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="b_tanggal_lahir" name="b_tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
	</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Warga Negara <span class="require">*</span></label>

<div class="col-sm-8 col-lg-7 controls">
{{ b_dropdown_kewarganegaraan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Agama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ b_dropdown_agama|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Pekerjaan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ b_dropdown_pekerjaan|raw }}
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Alamat 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="b_alamat" name="b_alamat" type="text" placeholder="Alamat" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Nomor Paspor 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="b_nomor_paspor" name="b_nomor_paspor" type="text" placeholder="Nomor Paspor" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Status Perkawinan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ b_dropdown_status_perkawinan|raw }}
</div>
</div>
<h5>Data Tanda Tangan</h5>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Nama Kepala Penghulu<span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
<input id="nama_kepala_penghulu" name="nama_kepala_penghulu" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off" maxlength="150" />
</div>
</div>
 
 
<div id="selectTmp">
	{{ dropdown_status_perkawinan_p | raw }}
	{{ dropdown_status_perkawinan_l | raw }}
	<span id="a_status_perkawinan_value">{{ detail.a_status_perkawinan }}</span>
	<span id="b_status_perkawinan_value">{{ detail.b_status_perkawinan }}</span>
</div>
</form>	
<style type="text/css">
	#selectTmp{
		display: none;
	}
</style>
<script type="text/javascript">

bind_stt_perkawinan_select('a');
bind_stt_perkawinan_select('b');

function bind_stt_perkawinan_select(prefix){
	let selector = 'select#'+prefix+'_status_perkawinan';
	$('input[type=radio][name='+prefix+'_jk]').on('change', function() {
		if ($(this).is(':checked')) {
			var jk = $(this).val();
	        
	        var option = $('select[name=status_perkawinan_tmp_'+jk+']').html();
	        $(selector).html(option);
	        $(selector).trigger('change');

	        setTimeout(function(){
	        	var old_value = $('#'+prefix+'_status_perkawinan_value').text();
	        	$('select#'+prefix+'_status_perkawinan option[value='+old_value+']').attr('selected',true);
	        	$(selector).trigger('change');

	        },500);
	    }
	}).change();

	$(selector).change(function(){
		var selected = $(this).val();

		if(selected != ''){
			$('#'+prefix+'_status_perkawinan_value').text(selected);
		}
	});
}
</script>