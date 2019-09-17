<h5>Syarat</h5>
{% for value,label in syarat_descriptions %}
<div class="form-group">
	<label class="col-sm-2 col-lg-2 control-label"></label>
	<div class="col-sm-9 col-lg-9 controls padCheckbox">
	<label><input type="checkbox" name="syarat[]" value="{{ value }}">{{ label }}</label>
	</div>
</div>
{% endfor %}

<script type="text/javascript">

	var syarat_list = {{ syarat|json_encode|raw }};
	setTimeout(function(){
		$.each(syarat_list,function(k,v){
			var node = $('input[name=syarat[]][value='+k+']');

			node.attr('checked',v);
		});
	},1000);
	
</script>
<style type="text/css">
	.padCheckbox{
		padding: 8px 0 0 16px;
	}
</style>