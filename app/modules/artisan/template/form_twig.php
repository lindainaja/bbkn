<form class="form-horizontal" action="#" id="form_<?=$p['func']?>">
	<input type="hidden" id="<?=$p['tablePk']?>" name="<?=$p['tablePk']?>" value="0" />
	<?foreach($field_names as $k):?>
	
	<?if(in_array($k, $templates)):?>
		<?=file_get_contents($template_path.$k.'.php')?>
		<?continue?>
	<?endif?>
	<?if(in_array($k, $dropdown_fields)):?>
		<?
			$caption = humanize($k);
			include $template_path.'dropdown.php';
		?>
		<?continue?>
	<?endif?>
	<?if(in_array($k, $varchar_fields)):?>
		<?
			$caption = humanize($k);
			include $template_path.'varchar.php';
		?>
		<?continue?>
	<?endif?>
	<?if(in_array($k, $int_fields)):?>
		<?
			$caption = humanize($k);
			include $template_path.'int.php';
		?>
		<?continue?>
	<?endif?>
	<?if(in_array($k, $text_fields)):?>
		<?
			$caption = humanize($k);
			include $template_path.'text.php';
		?>
		<?continue?>
	<?endif?>
	<?if(in_array($k, $date_fields)):?>
		<?
			$caption = humanize($k);
			include $template_path.'date_field.php';
		?>
		<?continue?>
	<?endif?>

	<?endforeach?>

</form>