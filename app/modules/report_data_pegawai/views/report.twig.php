<div style="text-align: center; padding: 2em;background: #fff">
	<h4 style="margin-bottom: 2em">{{title}}</h4>

	<button id="displayBtn" onclick="displayReport()" class="btn btn-default"><i class="fa fa-cog"></i> Generate</button>
</div>

<script type="text/javascript">
	function displayReport(){
		document.location.href = '{{report_url}}';
	}
</script>