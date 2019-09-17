<!DOCTYPE html>
<html lang="en"><head><title><?=config_item('web_title')?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="<?=site_url('public/js/jquery.min.js')?>"></script>
	<script type="text/javascript" src="<?=site_url('public/js/jquery-migrate-1.1.0.min.js')?>"></script>
    <link rel="stylesheet" href="<?=site_url('public/assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=site_url('public/assets/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?=site_url('public/assets/code-prettify/code-prettify.css')?>">
    <link rel="stylesheet" href="<?=site_url('public/css/flaty.css')?>">
    <link rel="stylesheet" href="<?=site_url('public/css/flaty-responsive.css')?>">
    <link rel="stylesheet" href="<?=site_url('public/css/jquery-impromptu.css')?>">
    <link rel="stylesheet" href="<?=site_url('public/css/jquery.alerts.css')?>">
    <link rel="stylesheet" href="<?=site_url('public/css/jquery.autocomplete.css')?>">
	<script type="text/javascript" src="<?=site_url('public/js/util.js')?>"></script>
	<link rel="stylesheet" type="text/css" href="<?=site_url('public/css/app.css')?>">    

    <style>
		.require{
			color:#F00;
		}
		.angka{
			text-align: right;	
		}
	</style>

   <?php echo $_styles; ?>
   <link rel="shortcut icon" href="<?=site_url('favicon.ico')?>">
</head>
<body class="skin-black">
<div id="navbar" class="navbar">
	<?php $this->load->view('topbar'); ?>
</div>
<div class="container" id="main-container">
	<?php $this->load->view('sidebar'); ?>
    <div id="main-content">

		<?php echo  $_title_page ;?>
        <?php echo  $_breadcrumb ;?>
        <?php echo  $content ; ?>

		<?php $this->load->view('footer'); ?>
    </div>
</div>

<script type="text/javascript" src="<?=site_url('public/js/jquery.autocomplete.js')?>"></script>
<script type="text/javascript" src="<?=site_url('public/js/jquery.alerts.js')?>"></script>
<script type="text/javascript" src="<?=site_url('public/js/alert_message.js')?>"></script>
<script type="text/javascript" src="<?=site_url('public/js/dateformat.js')?>"></script>
<script type="text/javascript" src="<?=site_url('public/js/library.js')?>"></script>


<script>
	window.jQuery || document.write('<script src="<?=site_url('public/assets/jquery/jquery-2.0.3.min.js')?>"><\/script>')
</script>
<script src="<?=site_url('public/assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?=site_url('public/assets/jquery-slimscroll/jquery.slimscroll.min.js')?>"></script>
<script src="<?=site_url('public/assets/jquery-cookie/jquery.cookie.js')?>"></script>
<script src="<?=site_url('public/assets/code-prettify/code-prettify.js')?>"></script>
<script src="<?=site_url('public/js/flaty.js')?>"></script>
<script src="<?=site_url('public/js/flaty-demo-codes.js')?>"></script>

<!--JS FORMAT CURRENCY-->
<script type="text/javascript" src="<?=site_url('public/js/jquery.formatCurrency-1.4.0.js')?>"></script>

<!--JS ANGKA-->
<script type="text/javascript" src="<?=site_url('public/js/angka.js')?>"></script>

<script type="text/javascript" src="<?=site_url('public/js/validate.js')?>"></script>
<script type="text/javascript" src="<?=site_url('public/js/jquery-impromptu.js')?>"></script>
<script type="text/javascript" src="<?=site_url('public/js/indikator.js')?>"></script>
<script type="text/javascript" src="<?=site_url('public/js/jquery.ajaxQueue.js')?>"></script>
<script type="text/javascript" src="<?=site_url('public/js/notifikasi.js')?>"></script>

<script type="text/javascript" src="<?=site_url('public/js/jquery.blockUI.js')?>"></script>

		<?php

		$actual_link	= 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
		$findme			= $this->uri->segment(1);
		$pos			= strrpos($actual_link, $findme);
		$uri			= substr($actual_link, $pos, strlen($actual_link));
		$uriArr			= explode('.',$uri);
		$final			= $uriArr[0];
		$finalUri		= explode('/',$final);
		$teks 			= '[';
		foreach($finalUri as $key => $val){
			if($key==count($finalUri)-1){
				$teks .= '"'.$val.'"]';
			} else {
				$teks .= '"'.$val.'",';
			}
		}
		?>
		<script>
			var base_url = "<?= base_url(); ?>";
			var controller 		= "<?php echo $this->uri->segment(1) ? $this->uri->segment(1) : 'dashboard';?>";
			var uri = <?= $teks ?>;
			function uri_segment(segment){
				segment -= 1;
				var pathArray = uri;
				return pathArray[segment];	
			}
			function site_url(url){
				var _root = "<?=site_url();?>";
				var result = _root+url;
				return result;
			}
		</script>
        <?php
		?>

<script type="text/javascript" >
	function newText(text){   
			if(text == '' || text == undefined)
			{
				return 0;
			}
			else
			{
				var regex=/,/g;
				var replaceWith='';
				return text.replace(regex,replaceWith);
			}
	}

	
	function class_angka(){
		// console.log('HELLO');
		$('.angka').on("keyup",function() {
			var value = this.value.replace(/[a-zA-Z]+/,'');
			this.value=value;
			$(this).formatCurrency({
				symbol: '',
				positiveFormat: '%s%n',
				negativeFormat: '-%s%n',
				decimalSymbol: '.',
				digitGroupSymbol: ',',
				groupDigits: true,
				roundToDecimalPlace: -1,
				colorize: false
			});
		}).trigger('keyup');
	}

	function roundNumber(value, decimals) {
		return Number(Math.round(value+'e'+decimals)+'e-'+decimals);
	}


	function refresh_session(userid){
		jQuery.alerts.dialogClass = 'alert-warning';
		jConfirm('Are you sure you wish to refresh your session login?', 'Confirmation?', function (r) {
			if (r == true) {
				$.ajax({
					type : "POST",
					url : base_url + "login/refresh_session",
					data : {userid:userid},
					cache : false,
					dataType : "html",
					beforeSend : function(data) {
						indikator_sibuk();
					},
					success : function(data) {
						indikator_stop();
						location.reload();
					},
					error : function(xhr, ajaxOptions, thrownError) {
						alert_warning(xhr.statusText);
						alert_warning(thrownError);
					}
				});
			}//end if true
		});
	}

	function validate_date(startdate,finishdate){
		var arrStartdate = startdate.split("/");
		var tgl = arrStartdate[0];
		var bln = arrStartdate[1];
		var thn = arrStartdate[2];
		var startdate_us = thn+'-'+bln+'-'+tgl;
		var d_1 = Date.parse(startdate_us);
	
		var arrFinishdate = finishdate.split("/");
		var tgl_2 = arrFinishdate[0];
		var bln_2 = arrFinishdate[1];
		var thn_2 = arrFinishdate[2];
		var finishdate_us = thn_2+'-'+bln_2+'-'+tgl_2;
		var d_2 = Date.parse(finishdate_us);
		
		if(d_1 > d_2){
			return false;
		}
	}


</script>
<?php echo  $_scripts ;?>
<script>
setTimeout(timerIncrement_2, 2000);
function timerIncrement_2() {
	//all_notification();
}

</script>

</body>

</html>