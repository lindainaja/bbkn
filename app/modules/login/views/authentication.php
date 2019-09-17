	<div class="wrapper">
		<h1>
			<a href="<?=site_url()?>">
				MALTICS
            </a>
            <h3 align="center" style="color:#EEE">
            Management Logistic System
            </h5>
		</h1>
		<div class="login-body">
			<h2>AUTHENTICATION</h2>
            <i style="padding:30px 30px 15px">Check your phone to get a verification code</i>
            
			<form action="<?=site_url('login/authentication_process/'.$this->uri->segment(3))?>" class="form" id="form_autentication" name="form_autentication" method="post">
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
                    	<input type="hidden" name="userid" id="userid" value="<?=$this->uri->segment(3)?>" />
						<input type="text" placeholder="Enter Code" id="code" name="code" class="form-control" />
					</div>
				</div>

                <div class="clearfix"></div>
                <div  align="center">
                    <div id="clockdiv">
                      <div>
                        <span class="minutes"></span>
                        <div class="smalltext">Minutes</div>
                      </div>
                      <div>
                        <span class="seconds"></span>
                        <div class="smalltext">Seconds</div>
                      </div>
                    </div>
                </div>
                <div class="clearfix"></div>

				<div class="submit">
                	<input type="hidden" id="banyak_klik" value="0" />
					<button type="button" class='btn btn-info' id="btn_resend" onclick="resend_code()">Re-Send</button>
					<input type="submit" value="Submit" class='btn btn-inverse'>
                    <div class="loading"></div>
				</div>
			</form>
			<div class="forget">&nbsp;</div>

		</div>

	</div>
