<button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
<span class="fa fa-bars"></span>
</button>

<a class="navbar-brand" href="<?=site_url('dashboard')?>">
<?php echo config_item('web_title')?>&nbsp;&nbsp;
<div class="pull-left hidden-xs" style="margin-right:0px;margin-top:-10px">
    <img class="nav-user-photo" src="<?=site_url(config_item('web_logo'))?>" width="45px"/>
</div>
</a>
<?php
/*$detail = detail_employee($this->session->userdata('log_employeeid'));

if($detail['photo']!='' && file_exists('./public/documents/employee/'.$detail['photo'])){
	$avatar = site_url('public/documents/employee/'.$detail['photo']);
} else {
	if($detail['gender']=='Male'){
		$avatar = site_url('public/documents/employee/male.png');
	} else {
		$avatar = site_url('public/documents/employee/female.png');
	}
}*/
$img = 'male.png';
if($this->session->userdata('log_gender')=='l'){
	$img = 'male.png';
} elseif($this->session->userdata('log_gender')=='p'){
	$img = 'female.png';
}

$avatar = site_url('public/documents/employee/'.$img);

?>

<ul class="nav flaty-nav pull-right">
    <li class="user-profile">
        <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
            <img class="nav-user-photo" src="<?=$avatar?>" alt="<?=$this->session->userdata('log_name')?>"/>
            <span id="user_info"><?=$this->session->userdata('log_name')?></span>
            <i class="fa fa-caret-down"></i>
        </a>

        <ul class="dropdown-menu dropdown-navbar" id="user_menu">
            <li>
                <a href="<?=site_url('setup_user/ganti_password')?>">
                    <i class="fa fa-lock"></i>
                    Change Password
                </a>
            </li>
            <li>
                <a href="#javascript:" onclick="refresh_session(<?=$this->session->userdata('log_userid')?>)">
                    <i class="fa fa-refresh"></i>
                    Refresh Session
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="<?=site_url('login/logout')?>">
                <i class="fa fa-off"></i>
                Logout </a>
            </li>
        </ul>
    </li>
</ul>

