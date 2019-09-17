<div class="bg">
<div class="wrapper">
		<div class="col-md-12">
			<div class="img-cnt">
				<img src="<?=base_url(config_item('web_logo'))?>" width="100px" />
			</div>
		</div>
        
        <div class="col-md-12">

		<h1 class="title-cnt" style="font-family: Georgia">
			<a href="<?=site_url()?>">
				<?=config_item('web_title')?>
            </a>
            <h3 align="center" style="color:#EEE;font-family: Georgia;font-size: 28px;">
            <?=config_item('web_description')?>
            </h3>

		</h1>
        </div>
        <div class="clearfix"></div>
        <div class="row">
        	<div class="col-md-2 col-lg-2"></div>
		<div class="login-body col-lg-8 col-md-8" style="background: transparent;">
			<div class="form-bg">
			<form action="<?=site_url('login/login_process')?>" class="form" id="login-form" method="post">
			<h2>Login</h2>

            <?php
			if($pesan!=''){
			?>
            <div class="alert alert-warning">
            <strong>Warning!</strong>
            <?php echo $pesan?>
            </div>
            <?php
			}
			?>
				<div class="form-group">
					<div class="email controls">
						<input type="text" placeholder="Username" id="username" name="username" value="<?=$username?>"  class="form-control" />
					</div>
				</div>
				<div class="form-group">
					<div class="pw controls">
						<input type="password" placeholder="Password" id="password" name="password" class="form-control" />
					</div>
				</div>

                <div class="form-group" style="display: none">
                    <div class="col-sm-7">
                        <img src="<?=site_url('login/get_captcha')?>" alt="" id="captcha" style="margin-left:-25px" />
                        <img src="<?=site_url('public/login/refresh.jpg')?>" width="25" alt="" id="refresh" style="cursor:pointer" />
                    </div>
                    <div class="col-sm-5">
                        <input class="form-control" style="margin-top:8px;margin-left:-15px" placeholder="CAPTCHA" name="code" type="text" id="code" maxlength="15">
                    </div>
                </div>
                <div class="clearfix"></div>

				<div class="submit" style="text-align: right;">
                	<button class="btn btn-default form-control btn-login" type="submit" style="width: 125px">Log In</button>
				</div>
			</form>
<?php
			if(config_item('authentication')){
			?>
			<div class="forget">&nbsp;
            
                <a href="<?=site_url('login/forgot_password')?>">Forgot Password?</a>
            
            </div><?php
			}
			?>
        	</div>
		</div>
        	<div class="col-md-2 col-lg-2"></div>

	</div>
</div>
	</div>
<style type="text/css">
	.img-cnt{
		/*padding-top: 30px;*/
		text-align: center;
	}
            
            
	.title.cnt{
	    font-size: 46px !important;
	    line-height: 50px !important;
	    margin-bottom: 14px !important;

	   /*font-family: , "Times New Roman", Helvetica, Arial, sans-serif !important;*/
       /*font-weight: normal !important;*/
	}
	.bg{
		width: 100% !important;
		height: 100% !important;
		position: static !important;
		display: block !important;
		margin: 0 !important;
		background-size: cover;
		background: #333 url('<?=site_url()?>public/login/bg.jpg') no-repeat top left;
	}
	.form-bg {
	    /*width: 376px;*/
	    height: auto;
    	/*height: 306px;*/
	    -moz-border-radius: 9px !important;
	    -webkit-border-radius: 9px !important;
	    border-radius: 9px !important;
	    margin: 20px auto 0;
	    background: url(<?=site_url()?>public/login/form-bg.png) top left !important;
	    padding: 8px  !important;
	}
	.form-bg form {
		/*width: 360px;*/
		/*min-height: 200px !important;*/
		padding-bottom: 2em !important;
		/*height: 290px;*/
		background: #fff url(<?=site_url()?>public/login/bg_form.jpg) repeat-x top left !important;		
		-moz-border-radius:4px !important;
		-webkit-border-radius:4px !important;
		border-radius:4px !important;
		-moz-box-shadow:0px 1px 3px 2px rgba(0,0,0,0.1) !important;
		-webkit-box-shadow:0px 1px 3px 2px rgba(0,0,0,0.1) !important;
		box-shadow:0px 1px 3px 2px rgba(0,0,0,0.1) !important;
	}

	.form-bg form h2 {
		font-size: 14px !important;
		font-weight: bold !important;
		color: #555555 !important;
		font-family:"HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif !important;
		text-shadow: 0 1px 0 #fff !important;
		filter: drAksihadow(color=#fff, offx=0, offy=1) !important;
		line-height: 45px !important;
		margin-bottom: 24px !important;
		margin-top: 0 !important;
		margin-left:0 !important;
		padding: 0 !important;
	}
	.btn-login{
		-moz-border-radius:4px !important;
		-webkit-border-radius:4px !important;
		border-radius:4px !important;
		border: solid 1px #ddd;
		width: 80px !important;
	}
	.btn-login:hover {
		color: #222;
		background: #eee; /* Old browsers */
		background: -moz-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,.3)), color-stop(100%,rgba(0,0,0,.3))); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top, rgba(255,255,255,.3) 0%,rgba(0,0,0,.3) 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top, rgba(255,255,255,.3) 0%,rgba(0,0,0,.3) 100%); /* Opera11.10+ */
		background: -ms-linear-gradient(top, rgba(255,255,255,.3) 0%,rgba(0,0,0,.3) 100%); /* IE10+ */
		background: linear-gradient(top, rgba(255,255,255,.3) 0%,rgba(0,0,0,.3) 100%); /* W3C */
	  border: 1px solid #888;
	  border-top: 1px solid #aaa;
	  border-left: 1px solid #aaa; }
</style>