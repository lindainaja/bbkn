<?$form_title = $this->l('form_add').' '.$subject;?>
<div class="modal" role="dialog"  id="modalForm" mode="add">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title"><?=$form_title?></h4>
      </div>
      <div class="modal-body">
         <form class="form-horizontal" id="crudForm" enctype="multipart/form-data" action="<?=$insert_url?>">
      <?  foreach($fields as $field): ?>
    
      <div class="form-group" aria-label="<?=$field->field_name?>">
        <label class="col-sm-3 control-label"><?= $input_fields[$field->field_name]->display_as?> <?= ($input_fields[$field->field_name]->required)? "<span class='required'>*</span> " : ""?> </label>
        <div class="col-sm-9" v-bind:class="{'has-error':verror.<?=$field->field_name?>,'col-sm-9':true}">
          <?= $input_fields[$field->field_name]->input ?>
          <small class="help-block hidden" v-if="verror.<?=$field->field_name?>">{{verror.<?=$field->field_name?>}}</small>
        </div>
      </div>

      <?  endforeach  ?>
     
      <?  foreach($hidden_fields as $hidden_field): ?>
            <?= $hidden_field->input; ?>
      <?  endforeach ?>
      
      <?  if ($is_ajax):?>
        <input type="hidden" name="is_ajax" value="true" />
      <?endif?>

      <div id='report-error' class='report-div error'></div>
      <div id='report-success' class='report-div success'></div>
      <div class='form-button-box loading-box' style="display: none;">
        <div class='small-loading' id='FormLoading'><?= $this->l('form_update_loading'); ?></div>
      </div>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default margin-0" data-dismiss="modal" id="cancel-button"><i class="icon wb-close"></i>&nbsp;<?= $this->l('form_cancel'); ?></button>
        <button type="button" class="btn btn-primary" id="form-button-save"><i class="icon wb-check"></i>&nbsp;<?= $this->l('form_save'); ?></button>
        <?php if($this->enable_save_and_download_button):?>
        <button type="button" class="btn btn-primary" id="form-button-save-download"><i class="icon wb-download"></i>&nbsp;<?= $this->l('form_save_download'); ?></button>  
        <?php endif?>  
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  var validation_url = '<?=  $validation_url?>';
  var list_url = '<?=  $list_url?>';

  var message_alert_add_form = "<?=  $this->l('alert_add_form')?>";
  var message_insert_error = "<?=  $this->l('insert_error')?>";

  //  gc.form_vm = new Vue({
  //   el:'#modalForm',
  //   data:{
  //     verror:{}
  //   }
  // });
</script>
<?=gc_theme_script_tag('twitter-bootstrap/js/jquery.form.js');?>
<?=gc_theme_script_tag('datatables/js/datatables-add.js');?>

<?php
if(!empty($this->custom_form_css)){
  foreach ($this->custom_form_css as $src) {
    ?>
<link rel="stylesheet" type="text/css" href="<?=$src?>?=_<?=uniqid()?>">    
    <?php
  }
}
?>
<?php
if(!empty($this->custom_form_add_css)){
  foreach ($this->custom_form_add_css as $src) {
    ?>
<link rel="stylesheet" type="text/css" href="<?=$src?>?=_<?=uniqid()?>">    
    <?php
  }
}
?>
<?php
if(!empty($this->custom_form_js)){
  foreach ($this->custom_form_js as $src) {
    ?>
 <script type="text/javascript" src="<?=$src?>?=_<?=uniqid()?>"></script>  
    <?php
  }
}
?>
<?php
if(!empty($this->custom_form_add_js)){
  foreach ($this->custom_form_add_js as $src) {
    ?>
 <script type="text/javascript" src="<?=$src?>?=_<?=uniqid()?>"></script>  
    <?php
  }
}