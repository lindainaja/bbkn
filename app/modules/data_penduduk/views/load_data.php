<?php
if($keywords!=''){
	echo '<div class="alert alert-info">
			<button class="close" data-dismiss="alert" onclick="clear_search()">×</button>
			<div class="alert-content">
				<strong><i class="fa fa-search"></i>&nbsp;Searching :</strong> '.$keywords.'
			</div>
	</div>';
}
?>

<?php
$gender = config_item('gender');
if(count($result)>0){
?>
<table class="table table-striped" width="100%">
    <thead>
	<?php
    $tpl_head = '<tr>';
	$tpl_head .= '<th style="text-align:center">#</th>';
    foreach ($fields as $key_field => $val_field) {
		if ($sort_by == $key_field) {
			$class = 'sort-'.strtolower($sort_order).' sort-active';
		} else {
			$class = 'sort-desc sort-asc';
		}

		$sorting = (($sort_order == 'asc' && $sort_by == $key_field) ? 'desc' : 'asc');
		$anchor = '<a class="sorting '.$class.'" href="#" field="'.$key_field.'" name="'.$sorting.'">'.$val_field.'</a>';
		
        $tpl_head .= '<th style="text-align:center">'.$anchor.'</th>';
    }
    $tpl_head .= '</tr>';
    echo $tpl_head;
    ?>
    </thead>
    <tbody>
    <?php
	foreach($result as $result_key => $result_val){
	?>
        <tr>
            <td align="center"><?=$result_key+1?></td>
            <td align="center"><?=$result_val['nik']?></td>
            <td><?=$result_val['nama']?></td>
            <td align="center"><?=$result_val['jk'] ? $gender[$result_val['jk']] : ''?></td>
            <td><?=$result_val['tmpt_lahir'].', '.format_datepicker($result_val['tgl_lahir'])?></td>
            <td><?=$result_val['agama']?></td>
            <td><?=$result_val['status']?></td>
        </tr>
    <?php
	}
	?>
    </tbody>
</table>
<br/>
<div class="pull-right">
<?=$pagination?>
</div>
<div class="clearfix"></div>
<?php
} else {
	echo '<div class="alert alert-warning">
			<div class="alert-content">
				<strong>Warning!</strong>
				No Data.
			</div>
	</div>';
}
?>
