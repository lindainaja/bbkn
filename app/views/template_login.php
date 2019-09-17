<!DOCTYPE html>
<html lang="en">

<head><title>Login | <?=config_item('web_title')?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="<?=site_url('public/images/e-village.png')?>" type="image/gif" sizes="16x16"> 
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?=site_url('public/assets/bootstrap/css/bootstrap.min.css')?>">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?=site_url('public/css/style.css')?>">
   <?php echo $_styles; ?>
</head>

<body class='login'>
<?php echo  $content ; ?>
</div>

</body>
<script>
	var base_url = "<?= base_url(); ?>";
	var controller 		= "<?php echo $this->uri->segment(1);?>";
</script>

<script>window.jQuery || document.write('<script src="<?=site_url('public/assets/jquery/jquery-2.0.3.min.js')?>"><\/script>')</script>
<script src="<?=site_url('public/assets/bootstrap/js/bootstrap.min.js')?>"></script>

<script src="<?=site_url('public/assets/jquery-validation/dist/jquery.validate.min.js')?>"></script>
<script type="text/javascript" src="<?=site_url('public/js/validate.js')?>"></script>
<script type="text/javascript" src="<?=site_url('public/js/indikator.js')?>"></script>
<script src="<?=site_url('app/modules/login/assets/js/login.js')?>"></script>
<?php echo  $_scripts ;?>
</html>