<div class="row">
    <div class="col-lg-12">
        <?=$this->session->flashdata('pesan')?>
    </div>
</div>


<form action="#" class="form-horizontal form-row-separated">

<div class="row">
    <div class="col-lg-12">
    	<div class="box">

            <div class="box-title">
                <h5>ROLE : <?=$result['description']?></h5>
            </div>
            <?php
				$menu_1 = search_by_column($menu,'parent_id',0);
			?>


			<?php
			if(count($menu_1))
            foreach($menu_1 as $menu_1_key => $menu_1_val){
				//print_rr($menu_1_val);
                $menu_2 = search_by_column($menu,'parent_id',$menu_1_val['id']);
            ?>
            <div class="box-content">
                <div class="form-group">
                    <label class="col-sm-4 col-lg-2 control-label">&nbsp;</label>
                    <div class="col-sm-8 col-lg-10 controls">
						<strong style="font-size:16px"><?=$menu_1_val['name']?></strong>
                    <?php
					if(count($menu_2)>0){
						foreach($menu_2 as $menu_2_key => $menu_2_val){
							$menu_3 = search_by_column($menu,'parent_id',$menu_2_val['id']);
							echo '<div style="margin-left:20px">';
							echo '<strong style="font-size:14px"><i class="fa fa-bars blue"></i> '.$menu_2_val['name'].'</strong>';


							if(count($menu_3)>0){
								foreach($menu_3 as $menu_3_key => $menu_3_val){
									$mechanism = search_by_column($menu_mechanism,'setup_menuid',$menu_3_val['id']);
									echo '<div style="margin-left:20px">';
									echo '<strong style="font-size:14px"><i class="fa fa-bars blue"></i> '.$menu_3_val['name'].'</strong>';
		
									if(count($mechanism)>0){
										echo '<ul class="iconic" style="margin-left:10px">';
										foreach($mechanism as $mechanism_key => $mechanism_val){
											echo '<li><i class="fa fa-check green"></i> '.$mechanism_val['description'].'</li>';
										}
										echo '</ul>';
									}
		
									echo '</div>';
								}
							}
							$mechanism = search_by_column($menu_mechanism,'setup_menuid',$menu_2_val['id']);
							if(count($mechanism)>0){
								echo '<ul class="iconic" style="margin-left:10px">';
								foreach($mechanism as $mechanism_key => $mechanism_val){
									echo '<li><i class="fa fa-check green"></i> '.$mechanism_val['description'].'</li>';
								}
								echo '</ul>';
							}

							echo '</div>';
						}
					} else {
						$mechanism = search_by_column($menu_mechanism,'setup_menuid',$menu_1_val['id']);
						if(count($mechanism)>0){
					?>
                            <ul class="iconic" style="margin-left:10px">
							<?php
							foreach($mechanism as $mechanism_key => $mechanism_val){
								echo '<li><i class="fa fa-check green"></i> '.$mechanism_val['description'].'</li>';
							}
                            ?>
                            </ul>
                    <?php
						}
					}
					?>
                    
                    </div>
                </div>
            </div>


			<?php
			}
            ?>
        </div>
        <div class="clearfix">&nbsp;</div>


    </div>
</div>
</form>


<p class="cleafix">
<div>
<?php
if($this->flag_modify_data){##akses modify data
?>
    <a href="<?=site_url($this->func.'/edit/id/'.$result['id'])?>" class="btn btn-info btn-outlined show-tooltip" title="Edit">
    <i class="fa fa-edit"></i> Edit
    </a>
<?php
}
?>
<?php
if($this->flag_delete_data && $result['used']==0){##akses delete data
?>

    <a href="javascript:;" field="<?=$result['id']?>" class="btn btn-danger btn-outlined delete show-tooltip" title="Delete">
    <i class="fa fa-trash-o"></i> Hapus
    </a>
<?php
}
?>
</div>
</p>
<br/><br/>
<hr/>
<p class="cleafix">
    <a href="<?=site_url($this->func)?>" class="btn btn-gray"><i class="fa fa-arrow-left"></i> Kembali</a>
</p>