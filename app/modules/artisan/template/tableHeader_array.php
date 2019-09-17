protected $tableHeaders = [
<?foreach($field_names as $k => $v):?>
<?="\t'".$k?>' => '<?=$v?>',
<?endforeach?>
];