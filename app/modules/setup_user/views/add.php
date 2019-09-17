<form action="<?=site_url('setup_user/add_process')?>" class="form-horizontal form-seperated" id="form_user" role="form" method="post">
<div class="row">
    <div class="col-lg-7">
    	<div class="box">
            <div class="box-title">
                <h5>Tambah User</h5>
            </div>
            <div class="box-content">
                <div class="form-group">
                    <label class="col-sm-4 col-lg-3 control-label">Role <span class="require">*</span> :</label>
                    <div class="col-sm-6 col-lg-8 controls">
                    <?php echo form_dropdown('roleid',$role,'','id="roleid" class="select2 form-control" ');?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-lg-3 control-label">Prop <span class="require">*</span></label>
                    <div class="col-sm-6 col-lg-8 controls">
                    <?php echo form_dropdown('no_prop',$prop,config_item('default_prop'),'id="no_prop" class="select2 form-control" ');?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-lg-3 control-label">Kota/Kabupaten <span class="require">*</span></label>
                    <div class="col-sm-6 col-lg-8 controls">
                    <?php echo form_dropdown('no_kab',$kab,'','id="no_kab" class="select2 form-control" ');?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-lg-3 control-label">Kecamatan <span class="require">*</span></label>
                    <div class="col-sm-6 col-lg-8 controls">
                    <?php echo form_dropdown('no_kec',$kec,'','id="no_kec" class="select2 form-control" ');?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-lg-3 control-label">Kelurahan </label>
                    <div class="col-sm-6 col-lg-8 controls">
                    <?php echo form_dropdown('no_kel',$kel,'','id="no_kel" class="select2 form-control" ');?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 col-lg-3 control-label">Pegawai <span class="require">*</span></label>
                    <div class="col-sm-6 col-lg-8 controls">
                    <?php echo form_dropdown('pegawaiid',$pegawai,'','id="pegawaiid" class="select2 form-control" ');?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 col-lg-3 control-label">Nama <span class="require">*</span></label>
                    <div class="col-sm-6 col-lg-8 controls">
                        <input id="nama" name="nama" class="form-control " type="text" placeholder="Nama" maxlength="50">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-lg-3 control-label">Username <span class="require">*</span></label>
                    <div class="col-sm-6 col-lg-8 controls">
                        <input id="username" name="username" class="form-control " type="text" placeholder="Username" maxlength="100">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-lg-3 control-label">Password <span class="require">*</span></label>
                    <div class="col-sm-6 col-lg-8 controls">
                        <input id="password" name="password" class="form-control " type="password" placeholder="Password" maxlength="100" minlength="5">
                    </div>
                
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-lg-3 control-label"></div>
                    <div class="col-sm-6 col-lg-8 controls">
                        <button class="btn btn-inverse btn-outlined" type="submit"><i class="fa fa-save"></i> Save</button>
                    </div>
                
                </div>
            </div>
        </div>
        <div class="cleafix">&nbsp;</div>

    </div>
</div>
</form>

<p class="cleafix">
    <a href="<?=site_url('setup_user')?>" class="btn btn-gray"><i class="fa fa-arrow-left"></i> Kembali</a>
</p>

