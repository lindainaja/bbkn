<div class="box-content">
    <div class="row">
        <div class="col-md-12">
            <?=$this->session->flashdata('pesan')?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-title">
                <h5><i class="fa fa-lock"></i>Ganti Password</h5>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="row">
                    <div class="col-md-12">


                	<form action="<?=site_url('setup_user/process_ganti_password')?>" class="form-horizontal form-seperated" id="form-tambah" role="form" method="post">
                    	<div class="form-body">
                        	<div class="form-group">
                            	<label class="col-sm-5 col-lg-3 control-label">Username :</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                	<input id="username" name="username" class="form-control " type="text" value="<?=$this->session->userdata('log_username')?>" readonly="readonly">
                                </div>
                            
                            </div>
                        	<div class="form-group">
                            	<label class="col-sm-5 col-lg-3 control-label">Password sekarang<span class="require">*</span> :</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                	<input id="password_lama" name="password_lama" class="form-control " type="password" placeholder="Password sekarang" maxlength="100" minlength="5">
                                </div>
                            
                            </div>

                        	<div class="form-group">
                            	<label class="col-sm-5 col-lg-3 control-label">Password baru <span class="require">*</span> :</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                	<input id="password_baru" name="password_baru" class="form-control " type="password" placeholder="Password baru" maxlength="100" minlength="5">
                                </div>
                            
                            </div>

                        	<div class="form-group">
                            	<label class="col-sm-5 col-lg-3 control-label">Konfirmasi password baru <span class="require">*</span> :</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                	<input id="conf_password_baru" name="conf_password_baru" class="form-control " type="password" placeholder="Konfirmasi password baru" maxlength="100" minlength="5">
                                </div>
                            
                            </div>
                        	<div class="form-group">
                                <div class="col-sm-5 col-lg-3 control-label"></div>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <button class="btn btn-inverse btn-outlined" type="submit"><i class="fa fa-save"></i> Proses</button>
                                </div>
                            
                            </div>
                        </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

