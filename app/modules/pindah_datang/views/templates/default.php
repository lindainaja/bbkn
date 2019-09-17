<?php require __DIR__ . '/vue_templates.php'?>

<div class="row">        
    <div class="col-md-12">
        <div class="portlet light" style="padding: 0 1em">
            
            <div class="portlet-body">
<?php
    $asset = new CMS_Asset();
    
foreach ($css_files as $file) {
    $asset->add_css($file);
}
    echo $asset->compile_css();

foreach ($js_files as $file) {
    $asset->add_js($file);
}
    
    echo $asset->compile_js();

    
    echo $output;
?>
                
            </div>
        </div>
    </div>
</div>

