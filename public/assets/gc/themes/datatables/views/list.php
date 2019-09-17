<?php $uniqid_table = uniqid(); ?>
<script type="text/javascript">
    gc.uniqid_table = '<?=$uniqid_table?>';
</script>
<table  class="table table-striped groceryCrudTable" id="<?php echo $uniqid_table; ?>"  data-plugin="dataTable">
    <thead>
        <tr>
            <th class="no" field_name="no">#</th>
            <?php foreach ($columns as $column) {?>
                <th field_name="<?=$column->field_name?>"><?php echo $column->display_as; ?></th>
            <?php }?>
            <?php if (!$unset_delete || !$unset_edit || !empty($actions)) {?>
            <th class='actions'><?php echo $this->l('list_actions'); ?></th>
            <?php }?>
        </tr>
    </thead>
    <tbody>
        <?php if ($display_row) :?>
            <?php $no=1;?>
            <?php foreach ($list as $num_row => $row) { ?>
        <tr id='row-<?php echo $num_row?>'>
            <td class="no"><?php echo $no++ ?></td>
                <?php foreach ($columns as $column) {?>
                <td class="field-<?=$column->field_name?>" ><?= gc_column_format($row, $column->field_name)?></td>
                <?php }?>
                <?php if (!$unset_delete || !$unset_edit || !$unset_read || !empty($actions)) {?>
            <td class='actions'>
                    <?php
                    if (!empty($row->action_urls)) {
                        foreach ($row->action_urls as $action_unique_id => $action_url) {
                            $action = $actions[$action_unique_id];
                            ?>
                        <a href="<?php echo $action_url; ?>" class="tool_button btn btn-sm btn-icon btn-pure btn-default" role="button"  data-original-title="<?php echo $action->label?>" data-trigger="hover" data-toggle="tooltip">
                            <i class="icon <?php echo $action->image_url?>" aria-hidden="true"></i>
                        </a>
                        <?php }
                    }
                    ?>
                    <?php if($this->enable_save_and_download_button):?>
                    <a href="javascript:;" url="<?php echo $row->upload_url?>" class="gc-bt-view upload_button btn btn-sm btn-icon btn-pure btn-success show-tooltip btn-xs" role="button" data-original-title="Upload Data">
                        <i class="icon wb-upload" aria-hidden="true"></i>
                    </a>
                    <a href="javascript:;" url="<?php echo $row->download_url?>" class="gc-bt-view dl_button btn btn-sm btn-icon btn-pure  btn-primary show-tooltip btn-xs" role="button"  data-original-title="Download Data">
                        <i class="icon wb-download" aria-hidden="true"></i>
                    </a>    
                    <?php endif?>    
                    <?php if (!$unset_read) {?>
                    <a href="<?php echo $row->read_url?>" class="gc-bt-view edit_button btn btn-sm btn-icon btn-pure btn-info show-tooltip btn-xs" role="button"   data-original-title="View Data">
                        <i class="icon wb-eye" aria-hidden="true"></i>
                    </a>
                    <?php }?>

                    <?php if (!$unset_edit) {?>
                    <a href="<?php echo $row->edit_url?>" class="gc-bt-edit edit_button btn btn-sm btn-icon btn-pure btn-info show-tooltip btn-xs" role="button"  data-original-title="Edit Data">
                        <i class="icon wb-edit" aria-hidden="true"></i>
                    </a>
                    <?php }?>
                    <?php if (!$unset_delete) {?>
                    <a onclick = "javascript: return delete_row('<?php echo $row->delete_url?>', '<?php echo $num_row?>')"
                        href="javascript:void(0)" class="gc-bt-delete delete_button btn btn-sm btn-icon btn-danger show-tooltip btn-xs" role="button">
                        <i class="icon wb-trash" aria-hidden="true"></i>
                    </a>
                    <?php }?>

            </td>
                <?php }?>
        </tr>
            <?php }?>
        <?php endif ?>
    </tbody>
    <tfoot>
        
    </tfoot>
</table>
<? $ifr_id = uniqid() ?>
<script type="text/javascript">
    $(document).ready(function(){
        gc.activeIframeDlId = '<?=$ifr_id?>';
    });
</script>
<?php if($this->enable_save_and_download_button):?>
<iframe id="<?=$ifr_id?>"  width="100%" height="30px" noborder style="visibility:hidden;border:none;"  src="<?=site_url('www_static/smile')?>"></iframe>
<script type="text/javascript">
    $('a.dl_button').click(function(e){
        var url = $(this).attr('url');
        $('#<?=$ifr_id?>').attr('src',url);
    });
</script>
<?endif?>
<button data-url="<?=$ajax_list_url?>" class="btn btn-primary refresh-data"><i class="icon wb-refresh"></i>Refresh</button>

<button style="opacity: 0" type="button" class="btn btn-primary" id="successMsg" data-plugin="alertify" data-type="log" data-delay="10000" data-log-message="Berhasil dengan sukses">Save Success</button>
