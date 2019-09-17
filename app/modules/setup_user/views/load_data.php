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
if(count($result)>0){
?>
<table class="table table-striped">
    <thead>
	<?php
    $tpl_head = '<tr>';
	$tpl_head .= '<th>#</th>';
    foreach ($fields as $key_field => $val_field) {
		if ($sort_by == $key_field) {
			$class = 'sort-'.strtolower($sort_order).' sort-active';
		} else {
			$class = 'sort-desc sort-asc';
		}

		$sorting = (($sort_order == 'asc' && $sort_by == $key_field) ? 'desc' : 'asc');
		$anchor = '<a class="sorting '.$class.'" href="#" field="'.$key_field.'" name="'.$sorting.'">'.$val_field.'</a>';
		
        $tpl_head .= '<th>'.$anchor.'</th>';
    }
	$tpl_head .= '<th>Action</th>';
    $tpl_head .= '</tr>';
    echo $tpl_head;
    ?>
    </thead>
    <tbody>
    <?php
	foreach($result as $result_key => $result_val){
	?>
        <tr id="row_<?=$result_val['user_id']?>">
            <td><?=($result_key+1)+$page?></td>
            <td><?=$result_val['nama_user']?></td>
            <td><?=$result_val['username']?></td>
            <td><?=$result_val['description']?></td>
            <td>
			<?php
            if($this->flag_delete_data){##akses add data
            ?>
            	<div align="right">
                    <a href="javascript:;" field="<?=$result_val['user_id']?>" class="btn btn-danger show-tooltip btn-xs delete" title="Delete">
                    <i class="fa fa-trash-o"></i>
                    </a>
			<?php
			}
            if($this->flag_modify_data){##akses add data
            ?>
                	<a class="btn btn-info show-tooltip btn-xs" href="<?=site_url('setup_user/edit/id/'.$result_val['user_id'])?>" title="Edit">
                    <i class="fa fa-edit"></i>
                    </a>

                </div>
			<?php
			}
            ?>
            </td>
        </tr>
    <?php
	}
	?>
    </tbody>
</table>
<?=$pagination?>

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
