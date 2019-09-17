<form action="<?=site_url('setup_user/edit_process/id/'.$this->uri->segment(4))?>" class="form-horizontal form-seperated" id="form_modify_user" role="form" method="post">
<div class="row">
    <div class="col-lg-7">
    	<div class="box">
            <div class="box-title">
                <h5>Edit User</h5>
            </div>
            <div class="box-content">
                <div class="form-group">
                    <label class="col-sm-4 col-lg-3 control-label">Role <span class="require">*</span> :</label>
                    <div class="col-sm-6 col-lg-8 controls">
                    <input type="hidden" id="id" value="<?=$this->uri->segment(4)?>" />
                    <?php echo form_dropdown('roleid',$role,$detail['roleid'],'id="roleid" class="select2 form-control" ');?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-lg-3 control-label">Prop <span class="require">*</span></label>
                    <div class="col-sm-6 col-lg-8 controls">
                    <?php echo form_dropdown('no_prop',$prop,$detail['no_prop'],'id="no_prop" class="select2 form-control" ');?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-lg-3 control-label">Kota/Kabupaten <span class="require">*</span></label>
                    <div class="col-sm-6 col-lg-8 controls">
                    <?php echo form_dropdown('no_kab',$kab,$detail['no_kab'],'id="no_kab" class="select2 form-control" ');?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-lg-3 control-label">Kecamatan <span class="require">*</span></label>
                    <div class="col-sm-6 col-lg-8 controls">
                    <?php echo form_dropdown('no_kec',$kec,$detail['no_kec'],'id="no_kec" class="select2 form-control" ');?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-lg-3 control-label">Kelurahan </label>
                    <div class="col-sm-6 col-lg-8 controls">
                    <?php echo form_dropdown('no_kel',$kel,$detail['no_kel'],'id="no_kel" class="select2 form-control" ');?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-lg-3 control-label">Pegawai <span class="require">*</span></label>
                    <div class="col-sm-6 col-lg-8 controls">
                    <?php echo form_dropdown('pegawaiid',$pegawai,$detail['id_pegawai'],'id="pegawaiid" class="select2 form-control" ');?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-lg-3 control-label">Nama <span class="require">*</span></label>
                    <div class="col-sm-6 col-lg-8 controls">
                        <input id="nama" name="nama" class="form-control " type="text" placeholder="Nama" maxlength="50" value="<?=$detail['nama_user']?>">
                    </div>
                
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-lg-3 control-label">Username <span class="require">*</span></label>
                    <div class="col-sm-6 col-lg-8 controls">
                        <input id="username" name="username" class="form-control " type="text" placeholder="Username" maxlength="100" value="<?=$detail['username']?>">
                    </div>
                
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-lg-3 control-label">Password</label>
                    <div class="col-sm-6 col-lg-8 controls">
                        <input id="password" name="password" class="form-control " type="password" placeholder="Password" maxlength="100" minlength="5">
                        <small><span class="help-block">for change the password</span></small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-lg-2 control-label"></div>
                    <div class="col-sm-6 col-lg-4 controls">
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
