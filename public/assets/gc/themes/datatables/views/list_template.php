


<div id="modalForm"></div>
 
<?php

    // $this->set_css($this->default_theme_path.'/datatables/css/demo_table_jui.css');
    // $this->set_css($this->default_css_path.'/ui/simple/'.grocery_CRUD::JQUERY_UI_CSS);
    // $this->set_css($this->default_theme_path.'/datatables/css/datatables.css');
    // $this->set_css($this->default_theme_path.'/datatables/css/jquery.dataTables.css');
    // $this->set_css($this->default_theme_path.'/datatables/extras/TableTools/media/css/TableTools.css');
    // $this->set_js_lib($this->default_javascript_path.'/'.grocery_CRUD::JQUERY);



    $this->set_js_lib($this->default_javascript_path.'/jquery_plugins/jquery.noty.js');
    $this->set_js_lib($this->default_javascript_path.'/jquery_plugins/config/jquery.noty.config.js');
    $this->set_js_lib($this->default_javascript_path.'/common/lazyload-min.js');

if (!$this->is_IE7()) {
    $this->set_js_lib($this->default_javascript_path.'/common/list.js');
}

    // $this->set_js_lib($this->default_javascript_path.'/jquery_plugins/ui/'.grocery_CRUD::JQUERY_UI_JS);
    // public/assets/themes/global/vendor/datatables/jquery.dataTables.min.js
    // $this->set_js_lib($this->default_theme_path.'/datatables/js/jquery.dataTables.min.js');
    // $this->set_js($this->default_theme_path.'/datatables/js/datatables-extras.js');
    
    // $this->set_js($this->default_theme_path.'/datatables/extras/TableTools/media/js/ZeroClipboard.js');
    // $this->set_js($this->default_theme_path.'/datatables/extras/TableTools/media/js/TableTools.min.js');

    /** Fancybox */
    $this->set_css($this->default_css_path.'/jquery_plugins/fancybox/jquery.fancybox.css');
    $this->set_js($this->default_javascript_path.'/jquery_plugins/jquery.fancybox-1.3.4.js');
    $this->set_js($this->default_javascript_path.'/jquery_plugins/jquery.easing-1.3.pack.js');
    $this->set_js($this->default_theme_path.'/datatables/js/datatables.js');
?>
<script type='text/javascript'>
    var base_url = '<?php echo base_url();?>';
    var subject = '<?php echo $subject?>';

    var unique_hash = '<?php echo $unique_hash; ?>';
    var displaying_paging_string = "_START_ - _END_ dari _TOTAL_";
    var filtered_from_string    = "(filtered from _MAX_ total entries)";
    var show_entries_string     = "_MENU_";
    var search_string           = "Search";
    var list_no_items           = "Tidak ada item";
    var list_zero_entries       = "0 - 0 dari 0 ";

    var list_loading            = "Mohon Tunggu";

    var paging_first    = "Awal";
    var paging_previous = '← Prev';
    var paging_next     = 'Next → ';
    var paging_last     = "Terakhir";

    var message_alert_delete = "Apakah anda yakin ingin menghapus data?";

    var default_per_page = 10;

    var unset_export = false;
    var unset_print = false;

    var export_text = 'Ekspor';
    var print_text = 'Cetak';

    
    var datatables_aaSorting = [[ 0, "asc" ]];

    <?php
    //A work around for method order_by that doesn't work correctly on datatables theme
    //@todo remove PHP logic from the view to the basic library
    $ordering = 0;
    $sorting = 'asc';
    if (!empty($order_by)) {
        foreach ($columns as $num => $column) {
            if ($column->field_name == $order_by[0]) {
                $ordering = $num;
                $sorting = isset($order_by[1]) && $order_by[1] == 'asc' || $order_by[1] == 'desc' ? $order_by[1] : $sorting ;
            }
        }
    }
    ?>

    var datatables_aaSorting = [[ <?php echo $ordering; ?>, "<?php echo $sorting;?>" ]];

</script>
<?php
if (!empty($actions)) {
    // print_r($actions);
    // die();
    ?>
    <style type="text/css">
    <?php foreach ($actions as $action_unique_id => $action) {?>
            <?php if (!empty($action->image_url)) {
//              print_r($action);
//              die();
                ?>
                .<?php echo $action_unique_id; ?>{
                    background: url('<?php echo $action->image_url; ?>') !important;
                }
            <?php }?>
    <?php }?>
    </style>
    <?php
}
?>
<?php if ($unset_export && $unset_print) {?>
<style type="text/css">
    .datatables-add-button
    {
        position: static !important;
    }
    
    .dataTables_info{
        position: static !important;
    }
</style>
<?php }?>
<div id="alert_cnt" style="padding: 2px;"></div>
<div id='list-report-error' class='report-div error report-list'></div>
<div id='list-report-success' class='report-div success report-list' <?php if ($success_message !== null) {
    ?>style="display:block"<?php
}?>><?php
if ($success_message !== null) {?>
    <p><?php echo $success_message; ?></p>
<?php }
?></div>
<?php if (!$unset_add) {?>
<div class="datatables-add-button">
    
<a role="button" class="add_button btn btn-inverse show-tooltip" href="<?php echo $add_url?>">
    <i class="icon fa fa-plus-square" aria-hidden="true"></i>  Tambah <?php echo $subject?> 
</a>
</div>
<?php }?>
<div style='height:10px;'></div>
<style type="text/css">
    button.refresh-data,button#successMsg {
    position: absolute;
    margin: -100000px;
    z-index: -1;
}
    .datatables-pager{
        display: block;
        /*width: 200px;
        float: left;*/
    }
    .dataTables_length{
        float: left;
        width: 200px;
        display: block;
    }
    #alert_cnt p{
        display: inline;
    }

</style>
<div class="dataTablesContainer">
    <?php echo $list_view?>
    
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.dataTables_length').parent().addClass('datatables-pager');
    });
</script>
<?php
if(!empty($this->custom_list_css)){
  foreach ($this->custom_list_css as $src) {
    ?>
<link rel="stylesheet" type="text/css" href="<?=$src?>?=_<?=uniqid()?>">    
    <?php
  }
}
?>

<?php
if(!empty($this->custom_list_js)){
  foreach ($this->custom_list_js as $src) {
    ?>
 <script type="text/javascript" src="<?=$src?>?=_<?=uniqid()?>"></script>  
    <?php
  }
}
?>