<?foreach($enum_fields as $k):?>
<?="\t"?>$<?=$k?> = enum_dropdown('<?=$table?>','<?=$k?>');
<?endforeach?>

//----------------------------------------------------------add.twig.php

<?foreach($enum_fields as $k):?>
<?="\t"?>'dropdown_<?=$k?>' => form_dropdown('<?=$k?>',$<?=$k?>,'','id="<?=$k?>"  class="wajib_isi select2 form-control" style="width:100%" '),
<?endforeach?>
<?foreach($enum_fields as $k):?>
<?="\t"?>'<?=$k?>' => $<?=$k?>,
<?endforeach?>

//----------------------------------------------------------edit.twig.php

<?foreach($enum_fields as $k):?>
<?="\t"?>'dropdown_<?=$k?>' => form_dropdown('<?=$k?>',$<?=$k?>,$detail['<?=$k?>'],'id="<?=$k?>"  class="wajib_isi select2 form-control" style="width:100%" '),
<?endforeach?>
<?foreach($enum_fields as $k):?>
<?="\t"?>'<?=$k?>' => $<?=$k?>,
<?endforeach?>