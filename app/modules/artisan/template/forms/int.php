<div class="form-group">
	<label class="col-sm-4 col-lg-4 control-label"><?=$caption?> <span class="require">*</span></label>
	<div class="col-sm-5 col-lg-3 controls input-group">
		<input id="<?=$k?>" name="<?=$k?>" type="text" placeholder="0" class="wajib_isi form-control angka" onkeypress="return blockNonNumbers(this, event, true, true);"  autocomplete="off" maxlength="6" />
		<span class="input-group-btn">
			<span class="btn">M</span>
		</span>
	</div>
</div>