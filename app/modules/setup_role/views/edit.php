<form action="<?=site_url($this->func.'/edit_process/id/'.$this->uri->segment(4))?>" class="form-horizontal" id="form_tambah" name="form_tambah" method="post">

<div class="row">
    <div class="col-lg-12">
    	<div class="box">

            <div class="box-title">
                <h5><?=$this->title?> : <?=$result['description']?></h5>
            </div>

            <div class="box-content">
                <div class="form-wizard" id="form-wizard-role">
                    <ul class="row steps steps-fill">
                        <li class="col-xs-12 col-sm-6 col-lg-3">
                            <a href="#tab2-0" data-toggle="tab" class="step active">
                            <span class="number">1</span>
                            <span class="desc"><i class="fa fa-check"></i> Role Name</span>
                            </a>
                        </li>
                        <?php
                        $menu_1 = search_by_column($menu,'parent_id',0);
						//print_rr($menu_mechanism);
                        $i=1;
                        foreach($menu_1 as $menu_1_key => $menu_1_val){
                            $i++;
                        ?>
                        <li class="col-xs-12 col-sm-6 col-lg-3">
                            <a href="#tab2-<?=$menu_1_val['id']?>" data-toggle="tab" class="step">
                            <span class="number"><?=$i?></span>
                            <span class="desc"><i class="fa fa-check"></i> <?=$menu_1_val['name']?></span>
                            </a>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-primary"></div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab2-0">
                            <div class="form-group">
                                <label for="name" class="col-sm-3 col-lg-2 control-label">Name</label>
                                <div class="col-sm-5 col-lg-3 controls">
                                    <input type="text" name="name" id="name" class="form-control" data-rule-required="true" value="<?=$result['description']?>"></div>
                            </div>
                        </div>
        
                        <?php
                        foreach($menu_1 as $menu_1_key => $menu_1_val){
                            $menu_2 = search_by_column($menu,'parent_id',$menu_1_val['id']);
                        ?>
        
                        <div class="tab-pane" id="tab2-<?=$menu_1_val['id']?>">
                            <div class="form-group">
                            	<?php
								$checked = '';
								$readonly = '';
								$onclick = '';
								if($menu_1_val['id']==1){
									$checked = 'checked="checked"';
									$readonly = 'readonly="readonly"';
									$onclick = 'onclick="this.checked=!this.checked;"';
								} else {
									if(search_by_column($result_menu,'id',$menu_1_val['id'])){
										$checked = 'checked="checked"';
									}

								}
								?>
                                <input type="checkbox" class="menu_1" id="menu_<?=$menu_1_val['id']?>"  parent_id="<?=$menu_1_val['parent_id']?>"name="menu_1[]" <?=$checked?> <?=$readonly?>  <?=$onclick?> value="<?=$menu_1_val['id']?>"> <strong style="font-size:16px"><?=$menu_1_val['name']?></strong>
                            
                                <label class="col-sm-3 col-lg-2 control-label">&nbsp;</label>
                                <div class="col-sm-9 col-lg-10 controls">
        
                                <?php
                                if(count($menu_2)>0){##submenu
                                    foreach($menu_2 as $menu_2_key => $menu_2_val){
										$menu_3 = search_by_column($menu,'parent_id',$menu_2_val['id']);
										$checked = '';
										if(search_by_column($result_menu,'id',$menu_2_val['id'])){
											$checked = 'checked="checked"';
										}
                                ?>
                                        <label class="checkbox">
                                            <input type="checkbox" class="menu_2 menu_<?=$menu_2_val['parent_id']?>" name="menu_1[]" id="menu_<?=$menu_2_val['id']?>" parent_id="<?=$menu_2_val['parent_id']?>" value="<?=$menu_2_val['id']?>" <?=$checked?> /> <strong style="font-size:14px"><?=$menu_2_val['name']?></strong>
                                        </label>
                                        <?php
										if(count($menu_3)>0){
										?>
                                            <div class="form-group" style="margin-left: 10px">
                                                <div class="col-sm-12 col-lg-12 controls">
                                                <?php
                                                    foreach($menu_3 as $menu_3_key => $menu_3_val){
														$mechanism = search_by_column($menu_mechanism,'setup_menuid',$menu_3_val['id']);
														$checked = '';
														if(search_by_column($result_menu,'id',$menu_3_val['id'])){
															$checked = 'checked="checked"';
														}
                                                ?>
            
                                                    <label class="checkbox">
                                                        <input type="checkbox" class="menu_3 menu_<?=$menu_3_val['parent_id']?>" name="menu_1[]" id="menu_<?=$menu_3_val['id']?>" parent_id="<?=$menu_3_val['parent_id']?>" value="<?=$menu_3_val['id']?>" <?=$checked?> /> <strong style="font-size:14px"><?=$menu_3_val['name']?></strong>
                                                    </label>

                                                    <?php
                                                    if(count($mechanism)>0){
                                                    ?>
                                                        <div class="form-group" style="margin-left: 10px">
                                                            <div class="col-sm-12 col-lg-12 controls">
                                                            <?php
                                                                foreach($mechanism as $mechanism_key => $mechanism_val){
                                                                    $class = '';
                                                                    $attr = '';
                                                                    if($mechanism_val['grouping']){
                                                                        $class = 'grouping grouping_'.$mechanism_val['grouping'].'_'.$menu_3_val['id'];
                                                                        $attr = 'grouping="'.$mechanism_val['grouping'].'"';
                                                                    }
																	$checked = '';
																	if(search_by_column($result_menu_mechanism,'id',$mechanism_val['id'])){
																		$checked = 'checked="checked"';
																	}
                                                            ?>
            
            
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" name="menu_mechanism_<?=$menu_3_val['id']?>[]" class="menu_mechanism menu_mechanism_<?=$menu_3_val['id']?> <?=$class?>" <?=$attr?> menuid="<?=$menu_3_val['id']?>" value="<?=$mechanism_val['id']?>" <?=$checked?> />&nbsp;&nbsp;&nbsp;<?=$mechanism_val['description']?>
                                                                    </label>
                                                            <?php
                                                                }
                                                            ?>
                                                            </div>
                                                        </div>
													<?php
                                                    }
													?>

                                               <?php
                                                    }
                                                ?>
                                                </div>
                                            </div>
                                        <?php
										}









                                        $mechanism = search_by_column($menu_mechanism,'setup_menuid',$menu_2_val['id']);
                                        if(count($mechanism)>0){
                                        ?>
                                            <div class="form-group" style="margin-left: 10px">
                                                <div class="col-sm-12 col-lg-12 controls">
                                                <?php
                                                    foreach($mechanism as $mechanism_key => $mechanism_val){
														$class = '';
														$attr = '';
														if($mechanism_val['grouping']){
															$class = 'grouping grouping_'.$mechanism_val['grouping'].'_'.$menu_2_val['id'];
															$attr = 'grouping="'.$mechanism_val['grouping'].'"';
														}
														$checked = '';
														if(search_by_column($result_menu_mechanism,'id',$mechanism_val['id'])){
															$checked = 'checked="checked"';
														}
                                                ?>


                                                        <label class="checkbox">
                                                            <input type="checkbox" name="menu_mechanism_<?=$menu_2_val['id']?>[]" class="menu_mechanism menu_mechanism_<?=$menu_2_val['id']?> <?=$class?>" <?=$attr?> menuid="<?=$menu_2_val['id']?>" value="<?=$mechanism_val['id']?>" <?=$checked?> />&nbsp;&nbsp;&nbsp;<?=$mechanism_val['description']?>
                                                        </label>
                                                <?php
                                                    }
                                                ?>
                                                </div>
                                            </div>
                                <?php
                                        }
                                    }
								} else {##tidak punya sub menu
									$mechanism = search_by_column($menu_mechanism,'setup_menuid',$menu_1_val['id']);
                                ?>
									<?php
                                    if(count($mechanism)>0){
                                    ?>
                                        <div class="form-group">
                                            <div class="col-sm-8 col-lg-11 controls">
                                            <?php
                                                foreach($mechanism as $mechanism_key => $mechanism_val){
													$class = '';
													$attr = '';
													if($mechanism_val['grouping']){
														$class = 'grouping grouping_'.$mechanism_val['grouping'].'_'.$menu_1_val['id'];
														$attr = 'grouping="'.$mechanism_val['grouping'].'"';
													}


													$checked = '';
													if(search_by_column($result_menu_mechanism,'id',$mechanism_val['id'])){
														$checked = 'checked="checked"';
													}
                                            ?>
                                    
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="menu_mechanism_<?=$menu_1_val['id']?>[]" class="menu_mechanism menu_mechanism_<?=$menu_1_val['id']?> <?=$class?>" <?=$attr?> menuid="<?=$menu_1_val['id']?>"  value="<?=$mechanism_val['id']?>" <?=$checked?> >&nbsp;&nbsp;&nbsp;<?=$mechanism_val['description']?>
                                                    </label>
                                            <?php
                                                }
                                            ?>
                                            </div>
                                        </div>
								<?php
									}
								}
								?>
        
                                
                                </div>
                            </div>
                        </div>
                        <?php
                        }##end if menu 1
                        ?>
        
        
                    </div>
                    <p class="clearfix">&nbsp;</p>
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                            <a href="javascript:;" class="btn btn-gray button-previous"><i class="fa fa-angle-left"></i>&nbsp;&nbsp;Kembali</a>
                            <a href="javascript:;" class="btn btn-info button-next"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Lanjut</a>
                            <a href="javascript:;" class="btn btn-success button-submit"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>


    </div>
</div>
</form>

<p class="cleafix">
	<a href="<?=site_url($this->func.'/detail/id/'.$this->uri->segment(4))?>" class="btn btn-gray"><i class="fa fa-arrow-left"></i> Kembali</a>
</p>
