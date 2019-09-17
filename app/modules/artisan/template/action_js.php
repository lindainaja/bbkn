<?foreach($field_names as $k):?>
<?if(preg_match('/jk/', $k)):?>
$(".jk").removeAttr("checked");
$(".jk_"+data.<?=$k?>).attr("checked","checked");
<?else:?>
$("#<?=$k?>").val(data.<?=$k?>)<?=$triggers[$k]?>;
<?endif?>
<?endforeach?>