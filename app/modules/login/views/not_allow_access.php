<!DOCTYPE html>
<html lang="en">

<head><title><?=config_item('web_title')?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?=base_url('public/assets/bootstrap/css/bootstrap.min.css')?>">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?=base_url('public/css/flaty.css')?>">



</head>

<body class="error-page">
    <div class="error-wrapper">
        <h5>Something Went Wrong<span>500</span></h5>
        <p><?=$warning?></p>
        <hr/>
        <p class="clearfix">
            <a href="javascript:history.back()" class="pull-left">← Kembali page</a>
            <a href="<?=site_url('dashboard')?>" class="pull-right">Go to dashboard</a>
        </p>
    </div>
	<script>window.jQuery || document.write('<script src="<?=base_url('public/assets/jquery/jquery-2.0.3.min.js')?>"><\/script>')</script>
    <script src="<?=base_url('public/assets/bootstrap/js/bootstrap.min.js')?>"></script>
</body>

</html>