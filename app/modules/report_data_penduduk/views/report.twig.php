<div style="text-align: center; padding: 2em;background: #fff">
	<h4 style="margin-bottom: 2em">{{title}}</h4>
	<div style="width: 300px;margin: 1em auto">
	<label>Pilih Dukuh/Dusun/Kampung  </label>
		{{ dropdown_lingkungan | raw }}
	</div>

 <div style="padding: 2px"><button id="displayBtn" onclick="displayReport()" class="btn btn-default"><i class="fa fa-cog"></i> Generate</button></div>

	
</div>

<script type="text/javascript">
	function displayReport(){
		document.location.href = '{{report_url}}/' + $('select#lingkungan').val();
	}
</script>