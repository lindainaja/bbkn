<ul class="nav nav-tabs">
	<li class="active"><a href="#penerbitan">Penerbitan</a></li>
	<li><a href="#mutasi">Mutasi</a></li>
	<li><a href="#pembetulan">Pembetulan</a></li>
</ul>
<form class="form-horizontal" action="#" id="form_spp_pbb">
	<div class="tab-content" style="padding-top: 1em">
		<div id="penerbitan" class="tab-pane fade in active">


	<input type="hidden" id="spp_pbbid" name="spp_pbbid" value="0" />
		
			<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Kelurahan <span class="require">*</span></label>
	<div class="col-sm-8 col-lg-8 controls">
		{{ dropdown_no_kel|raw }}
	</div>
</div>			
			<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Tanggal
		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<input id="date" name="date" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
	</div>
</div>			
					<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">No		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<input  id="no" name="no" type="text" placeholder="No" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>			
			<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Lampiran
		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<input id="lampiran" name="lampiran" type="text" placeholder="Lampiran" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>			
			<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nama
		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<input id="nama" name="nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>			
							<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Alamat		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<textarea name="alamat" id="alamat" class="wajib_isi form-control" placeholder="Alamat"></textarea>
	</div>
</div>			
					<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Letak Objek Pajak		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<input  id="letak_objek_pajak" name="letak_objek_pajak" type="text" placeholder="Letak Objek Pajak" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>			
					<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">NOP		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<input  id="nop" name="nop" type="text" placeholder="NOP" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>			

<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Luas Tanah Asal <span class="require">*</span></label>
	<div class="col-sm-5 col-lg-3 controls input-group">
	<input id="luas_tanah_asal" name="luas_tanah_asal" type="text" placeholder="0.00" class="wajib_isi form-control angka"   autocomplete="off" maxlength="18" />
		<span class="input-group-btn">
		<span class="btn">m<sup>2</sup></span>
		</span>
	</div>
</div>			
								<!--  -->


								<!--  -->
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Luas Bangunan<span class="require">*</span></label>
	<div class="col-sm-5 col-lg-3 controls input-group">
	<input id="luas_bangunan" name="luas_bangunan" type="text" placeholder="0.00" class="wajib_isi form-control angka" on autocomplete="off" maxlength="18" />
		<span class="input-group-btn">
		<span class="btn">m<sup>2</sup></span>
		</span>
	</div>
</div>	
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Letak/Lokasi Tanah		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<textarea name="lokasi_tanah" id="lokasi_tanah" class="wajib_isi form-control" placeholder="Lokasi"></textarea>
	</div>
</div>		
					<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Foto Copy SHM/SHGB/AJB		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<input  id="pc_shm_shgb_ajb" name="pc_shm_shgb_ajb" type="text" placeholder="SHM/SHGB/AJB" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>	
<h5>Data Tanda Tangan</h5>										
					<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nama		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<input  id="ttd_nama" name="ttd_nama" type="text" placeholder="Ttd Nama" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>			
					<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">NIP		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<input  id="ttd_nip" name="ttd_nip" type="text" placeholder="Ttd Nip" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>			
					<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Jabatan		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<input  id="ttd_jabatan" name="ttd_jabatan" type="text" placeholder="Ttd Jabatan" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>			
</div>
<div id="mutasi" class="tab-pane">

<h5>Mutasi sebagian/habis Objek Pajak kepada</h5>		
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Tanggal Mutasi 		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<input id="mutasi_tanggal" name="mutasi_tanggal" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
	</div>
</div>		
					<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nama		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<input  id="mutasi_nama" name="mutasi_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>			
					<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">NOP		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<input  id="mutasi_nop" name="mutasi_nop" type="text" placeholder="NOP" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>			
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Luas Tanah<span class="require">*</span></label>
	<div class="col-sm-5 col-lg-3 controls input-group">
	<input id="mutasi_luas_tanah" name="mutasi_luas_tanah" type="text" placeholder="0.00" class="wajib_isi form-control angka" \  autocomplete="off" maxlength="18" />
		<span class="input-group-btn">
		<span class="btn">m<sup>2</sup></span>
		</span>
	</div>
</div>			
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Luas Bangunan<span class="require">*</span></label>
	<div class="col-sm-5 col-lg-3 controls input-group">
	<input id="mutasi_luas_bangunan" name="mutasi_luas_bangunan" type="text" placeholder="0.00" class="wajib_isi form-control angka"  autocomplete="off" maxlength="18" />
		<span class="input-group-btn">
		<span class="btn">m<sup>2</sup></span>
		</span>
	</div>
</div>	
							<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Alamat		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<textarea name="mutasi_alamat" id="mutasi_alamat" class="wajib_isi form-control" placeholder="Mutasi Alamat"></textarea>
	</div>
</div>			
								
					<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Dasar Bukti Hak SHM/SHGB/AJB		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<input  id="mutasi_shm_shgb_ajb" name="mutasi_shm_shgb_ajb" type="text" placeholder="SHM/SHGB/AJB" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>			
</div>
<div id="pembetulan" class="tab-pane">	
<h5>Untuk Dibetulkan Dengan Data Wajib Pajak</h5>	
<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Tanggal Pembetulan		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<input id="pb_tanggal" name="pb_tanggal" type="text" placeholder="dd/mm/yyyy" class="wajib_isi date-picker form-control input-small" autocomplete="off" />
	</div>
</div>									
					<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Nama		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<input  id="pb_nama" name="pb_nama" type="text" placeholder="Nama" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>			
							<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Alamat		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<textarea name="pb_alamat" id="pb_alamat" class="wajib_isi form-control" placeholder="Alamat"></textarea>
	</div>
</div>			
					<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">NOP		<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<input  id="pb_nop" name="pb_nop" type="text" placeholder="NOP" class="wajib_isi form-control" autocomplete="off"  />
	</div>
</div>			

<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Luas Tanah<span class="require">*</span></label>
	<div class="col-sm-5 col-lg-3 controls input-group">
	<input id="pb_luas_tanah" name="pb_luas_tanah" type="text" placeholder="0.00" class="wajib_isi form-control angka"   autocomplete="off" maxlength="18" />
		<span class="input-group-btn">
		<span class="btn">m<sup>2</sup></span>
		</span>
	</div>
</div>				

<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">Luas Bangunan<span class="require">*</span></label>
	<div class="col-sm-5 col-lg-3 controls input-group">
	<input id="pb_luas_bangunan" name="pb_luas_bangunan" type="text" placeholder="0.00" class="wajib_isi form-control angka"   autocomplete="off" maxlength="18" />
		<span class="input-group-btn">
		<span class="btn">m<sup>2</sup></span>
		</span>
	</div>
</div>			
					<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label">DASAR Bukti Hak SHM/SHGB/AJB<span class="require">*</span>
	</label>
	<div class="col-sm-8 col-lg-8 controls">
		<input  id="pb_shm_shgb_ajb" name="pb_shm_shgb_ajb" type="text" placeholder="SHM/SHGB/AJB" class="wajib_isi form-control" autocomplete="off"  />
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

	 //    $('input.angka').on('keyup', function(e) {
		//     var caret = e.target.selectionStart;
		//     var nowStr = $(this).val().substr(0, caret) + String.fromCharCode(e.which) + $(this).val().substr(caret);
		//     if (!$.isNumeric(nowStr)) e.preventDefault();
		// });
	});
</script>

