<form class="form-horizontal" action="#" id="form_sk_untuk_nikah">
	<input type="hidden" id="sk_untuk_nikahid" name="sk_untuk_nikahid" value="0" />
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
		<input id="no" name="no" type="text" placeholder="Nomor" class="wajib_isi form-control" autocomplete="off"  />
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
	<label class="col-sm-4 col-lg-3 control-label">Alias 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="alias" name="alias" type="text" placeholder="Alias" class="wajib_isi form-control" autocomplete="off"  />
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
	<label class="col-sm-4 col-lg-3 control-label">Tempat, Tanggal Lahir <span class="require">*</span></label>
	<div class="col-sm-4 col-lg-4 controls">
	<input id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Tempat Lahir" class="wajib_isi form-control" autocomplete="off" />
	</div>
	<div class="col-sm-4 col-lg-3 controls">
	<input id="tanggal_lahir" name="tanggal_lahir" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
	</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Warga Negara <span class="require">*</span></label>

<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_kewarganegaraan|raw }}
</div>
</div>

<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Pekerjaan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_pekerjaan|raw }}
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Agama <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_agama|raw }}
</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-lg-3 control-label">Bin/Binti 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="bin_binti" name="bin_binti" type="text" placeholder="Bin Binti" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Status Perkawinan <span class="require">*</span></label>
<div class="col-sm-8 col-lg-7 controls">
{{ dropdown_status_perkawinan|raw }}
</div>
</div>
<div class="form-group" id="frmJumlahIstri">
	<label class="col-sm-4 col-lg-3 control-label">Jumlah Istri 
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="jumlah_istri" name="jumlah_istri" type="text" placeholder="Jumlah Istri" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>
<div class="form-group"  id="frmNamaMantan">
	<label class="col-sm-4 col-lg-3 control-label">Nama Mantan <span id="mantanTxt"></span>
		<span class="require">*</span>
				</label>
	<div class="col-sm-8 col-lg-7 controls">
		<input id="nama_mantan" name="nama_mantan" type="text" placeholder="Nama Mantan" class="form-control" autocomplete="off"  />
	</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-lg-3 control-label">Tempat Tinggal 
	<span class="require">*</span>
	</label>
<div class="col-sm-8 col-lg-7 controls">
<textarea name="tempat_tinggal" id="tempat_tinggal" class="wajib_isi form-control" placeholder="Tempat Tinggal"></textarea>
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
</form>	

<div id="selectTmp">
	{{ dropdown_status_perkawinan_p | raw }}
	{{ dropdown_status_perkawinan_l | raw }}
	<span id="status_perkawinan_value"></span>
</div>

<style type="text/css">
	#selectTmp, #frmJumlahIstri, #frmNamaMantan{
		display: none;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){

		$('input[type=radio][name=jk]').on('change', function() {
			if ($(this).is(':checked')) {
				var jk = $(this).val();
		        
		        var option = $('select[name=status_perkawinan_tmp].' + jk).html();
		        $('select#status_perkawinan').html(option) ;

		        setTimeout(function(){
		        	var old_value = $('#status_perkawinan_value').text();
		        	// console.log(old_value)
		        	$('select#status_perkawinan').val(old_value).change();
		        },200);

		        $('#mantanTxt').text(jk=='l'?'Istri':'Suami');
		        $('#nama_mantan').attr('placeholder',jk=='l'?'Nama Mantan Istri':'Nama Mantan Suami');
		    }
		     
		}).change();
		$('select#status_perkawinan').change(function(){
			var selected = $(this).val();
			switch(selected){
				case 'Beristri': 
					$('#frmJumlahIstri').show();
					$('#frmJumlahIstri').find('input[name=jumlah_istri]').addClass('wajib_isi');
					$('#frmNamaMantan').val('').hide();
					$('#frmNamaMantan').find('input[name=nama_mantan]').removeClass('wajib_isi');
				break;
				case 'Duda':
				case 'Janda':
					$('#frmNamaMantan').show();
					$('#frmNamaMantan').find('input[name=nama_mantan]').addClass('wajib_isi');
					$('#frmJumlahIstri').val('').hide();
					$('#frmJumlahIstri').find('input[name=jumlah_istri]').removeClass('wajib_isi');
				break;
				default:
					$('#frmJumlahIstri').val('').hide();
					$('#frmJumlahIstri').find('input[name=jumlah_istri]').removeClass('wajib_isi');
					$('#frmNamaMantan').val('').hide();
					$('#frmNamaMantan').find('input[name=nama_mantan]').removeClass('wajib_isi');
				break;
			}
			 
			if(selected != ''){
				$('status_perkawinan_value').text(selected);
			}
		});
	});
</script>