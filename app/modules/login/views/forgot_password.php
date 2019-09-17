	<div class="wrapper">
		<h1>
			<a href="<?=site_url()?>">
				MALTICS
            </a>
            <h3 align="center" style="color:#EEE">
            Management Logistic System
            </h5>
		</h1>
		<div class="login-body" id="conten_forgot">
			<h2>FORGOT PASSWORD</h2>
			<form action="#" class="form" id="form_forgot" method="post">
				<div class="form-group">
					<div class="email controls">
						<input type="text" placeholder="Username" id="username" name="username" class="form-control" />
					</div>
				</div>

                <div class="form-group">
                    <div class="col-sm-7">
                        <img src="<?=site_url('login/get_captcha')?>" alt="" id="captcha" style="margin-left:-25px" />
                        <img src="<?=base_url('template/login/refresh.jpg')?>" width="25" alt="" id="refresh" style="cursor:pointer" />
                    </div>
                    <div class="col-sm-5">
                        <input class="form-control" style="margin-top:8px;margin-left:-15px" placeholder="CAPTCHA" name="code" type="text" id="code" maxlength="15">
                    </div>
                </div>
                <div class="clearfix"></div>
				<div class="submit">
					<input type="submit" value="Submit" class='btn btn-inverse form-control'>
                    <div class="loading"></div>
				</div>
			</form>
			<div class="forget"><a href="<?=site_url('login')?>">Back to login page</a></div>
                

		</div>

	</div>
