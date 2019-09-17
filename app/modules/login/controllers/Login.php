<?php

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('login/m_login');
		$this->load->library('encrypt');
		$this->template->set_template('login');
	}

	function index() {
		
		$data['username'] = '';
		$data['warning'] = 'hide';
		$data['pesan'] = '';
		$this->template->write_view('content','login/login',$data);
		$this->template->render();

	}
	

	function login_process(){
		$username = $this->input->post('username');
		$password = trim($this->input->post('password'));
		$code = $this->input->post('code');
		if(true){
			$login = $this->m_login->getData($username,$password);
			//print_rr($this->session->all_userdata());
			//die();
			if($login==true){
				if(config_item('authentication')){
					$this->genereate_authentication($this->session->userdata('log_userid'));
					$userid	= $this->crypter->encrypt($this->session->userdata('log_userid'));
					redirect('login/authentication/'.$userid);
				} else {
					$this->m_login->saveDataSession($this->session->userdata('log_userid'));
					redirect('dashboard');
				}
			} else {
				$this->session->sess_destroy();
				$data['username'] = $username;
				$data['warning'] = '';
				$data['pesan'] = 'Username & password invalid!';
				$this->template->write_view('content','login/login',$data);
				$this->template->render();
			}
		} else {
			$this->session->sess_destroy();
			$data['username'] = $username;
			$data['warning'] = '';
			$data['pesan'] = 'Captcha was incorrect. Try again.';
			$this->template->write_view('content','login/login',$data);
			$this->template->render();
		}
	}
	

	function genereate_authentication($userid){

		if(!$userid){
			return false;
			// break;
		}

		$detail = $this->m_login->get_user_detail($userid);
		$entry['app']		= config_item('web_title');
		$entry['userid']	= $userid;
		if(count($detail)>0){
			if($detail['phone'] != ''){
				$mobile = $detail['phone'];
			} else {
				$mobile = $detail['mobile'];
			}

			$mobile = clean_separator($mobile);
			$dpn = substr($mobile,0,1);
			if($dpn!=0 && $dpn!='+'){
				$mobile = '+'.$mobile;
			}
			$entry['mobile']= $mobile;
			
		}
		$entry['code']		= rand(1000000,9999999);
		$entry['message']	= 'Your Maltics Verification Code is';
		$entry['create_on']	= date('Y-m-d H:i:s');
		
		$this->db->trans_start(); /*untuk rollback jika data gagal*/
		$this->m_login->insert_user_key($entry);
		$this->db->trans_complete();
		return true;

	}
	

	function ajax_genereate_authentication(){
		$userid = $this->crypter->decrypt($this->input->post('userid'));
		$this->genereate_authentication($userid);
		$data['msg'] = 'true';
		echo json_encode($data);

	}

	function authentication(){
		$this->template->add_js('app/modules/login/public/js/login/authentication.js');
		$this->template->add_css('
			#clockdiv{
				font-family: sans-serif;
				color: #fff;
				display: inline-block;
				font-weight: 100;
				text-align: center;
				font-size: 30px;
			}
			
			#clockdiv > div{
				padding: 5px;
				border-radius: 3px;
				background: #00BF96;
				display: inline-block;
			}
			
			#clockdiv div > span{
				padding: 5px;
				border-radius: 3px;
				background: #00816A;
				display: inline-block;
			}
			
			.smalltext{
				padding-top: 5px;
				font-size: 12px;
			}
		','embed');

		$data['userid']	= $this->crypter->encrypt($this->session->userdata('log_userid'));
		$data['warning'] = 'hide';
		$data['pesan'] = '';
		$this->template->write_view('content','login/authentication',$data);
		$this->template->render();
	}
	
	function authentication_process(){
		$this->template->add_js('app/modules/login/public/js/login/authentication.js');
		$this->template->add_css('
			#clockdiv{
				font-family: sans-serif;
				color: #fff;
				display: inline-block;
				font-weight: 100;
				text-align: center;
				font-size: 30px;
			}
			
			#clockdiv > div{
				padding: 5px;
				border-radius: 3px;
				background: #00BF96;
				display: inline-block;
			}
			
			#clockdiv div > span{
				padding: 5px;
				border-radius: 3px;
				background: #00816A;
				display: inline-block;
			}
			
			.smalltext{
				padding-top: 5px;
				font-size: 12px;
			}
		','embed');


		$userid = $this->crypter->decrypt($this->input->post('userid'));
		$code = $this->input->post('code');
		$check = $this->m_login->check_code_authentication($userid,$code);
		if(count($check)>0){
			$this->m_login->clear_code_authentication($userid);

			$this->m_login->saveDataSession($userid);
			//$this->session->set_userdata($data);
			redirect('dashboard');
		} else {
			$this->session->sess_destroy();
			$data['userid']	= $this->crypter->encrypt($userid);
			$data['warning'] = '';
			$data['pesan'] = 'Code invalid!';
			$this->template->write_view('content','login/authentication',$data);
			$this->template->render();
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

	function expired(){
		$this->session->sess_destroy();
		$data['username'] = '';
		$data['warning'] = '';
		$data['pesan'] = '';
		$this->template->write_view('content','login/login',$data);
		$this->template->render();
	}
	
	function not_allow_access(){
		##You are not allowed to access
		$data['warning'] = 'You are not allowed to access.';
		$this->load->view('login/not_allow_access',$data);
	}
	
	
	function get_captcha(){

		$string = '';
		
		for ($i = 0; $i < 5; $i++) {
			$string .= (rand(0, 9));
			//$string .= chr(rand(97, 122));
		}
		
		$this->session->set_userdata('random_number',$string);
		
		$dir = 'template/login/fonts/';
		
		$image = imagecreatetruecolor(130, 50);
		
		// random number 1 or 2
		$num = rand(1,2);
		if($num==1)
		{
			$font = "Capture it 2.ttf"; // font style
		}
		else
		{
			$font = "Molot.otf";// font style
		}
		
		// random number 1 or 2
		$num2 = rand(1,2);
		if($num2==1)
		{
			$color = imagecolorallocate($image, 113, 193, 217);// color
		}
		else
		{
			$color = imagecolorallocate($image, 163, 197, 82);// color
		}
		
		$white = imagecolorallocate($image, 255, 255, 255); // background color white
		imagefilledrectangle($image,0,0,399,99,$white);
		
		imagettftext ($image, 30, 0, 10, 40, $color, $dir.$font, $this->session->userdata('random_number'));
		
		header("Content-type: image/png");
		imagepng($image);

	}


	function forgot_password(){
		die('NOT_IMPLEMENTED');
		$this->session->sess_destroy();

		$this->template->add_js('public/js/login/forgot_password.js');
		$this->template->add_css('
			#clockdiv{
				font-family: sans-serif;
				color: #fff;
				display: inline-block;
				font-weight: 100;
				text-align: center;
				font-size: 30px;
			}
			
			#clockdiv > div{
				padding: 5px;
				border-radius: 3px;
				background: #00BF96;
				display: inline-block;
			}
			
			#clockdiv div > span{
				padding: 5px;
				border-radius: 3px;
				background: #00816A;
				display: inline-block;
			}
			
			.smalltext{
				padding-top: 5px;
				font-size: 12px;
			}
		','embed');

		$data['warning'] = 'hide';
		$data['pesan'] = '';
		$this->template->write_view('content','login/forgot_password',$data);
		$this->template->render();
	}

	function check_username(){
		$this->load->model('setup_user/m_setup_user');
		$username = $this->input->post('username');
		$check = $this->m_setup_user->check_username($username,0);

		
		if(count($check)>0){
			echo 'true';
		} else {
			echo 'false';
		}
	}

	function check_captcha(){
		$code = $this->input->post('code');
		if($code==$this->session->userdata('random_number')){
			echo 'true';
		} else {
			echo 'false';
		}
	}
	function ajax_send_verifikasi(){
		die('NOT_IMPLEMENTED');
		
		$username = $this->input->post('username');
		if(!$username){
			$tpl_html = '';
			$data['tpl_html'] = $tpl_html;
			echo json_encode($data);
			die();
		}

		$detail = $this->m_login->get_user_detail_by_username($username);
		$entry['app']		= config_item('web_title');
		$entry['userid']	= $detail['id'];
		if(count($detail)>0){
			if($detail['phone'] != ''){
				$mobile = $detail['phone'];
			} else {
				$mobile = $detail['mobile'];
			}

			$mobile = clean_separator($mobile);
			$dpn = substr($mobile,0,1);
			if($dpn!=0 && $dpn!='+'){
				$mobile = '+'.$mobile;
			}
			$entry['mobile']= $mobile;
			
		}
		$entry['code']		= rand(1000000,9999999);
		$entry['message']	= 'Your maltics forgot password verification code is';
		$entry['create_on']	= date('Y-m-d H:i:s');
		
		$this->db->trans_start(); /*untuk rollback jika data gagal*/
		$this->m_login->insert_user_key($entry);
		$this->db->trans_complete();
		
		$this->session->set_userdata('log_username',$username);
		$this->session->set_userdata('log_userid',$detail['id']);

		$tpl_html = '';
		$tpl_html .= '<h2>VERIFICATION CODE</h2>';
		$tpl_html .= '<i style="padding:30px 30px 15px">Check your phone to get a verification code</i>';
		$tpl_html .= '<form action="#" class="form" id="form_verifikasi" method="post">';
		$tpl_html .= '<div class="form-group">';
		$tpl_html .= '<div class="email controls">';
		$tpl_html .= '<input type="text" disabled="disabled" id="username" class="form-control" value="'.$username.'" />';
		$tpl_html .= '</div>';
		$tpl_html .= '</div>';
		$tpl_html .= '<div class="form-group">';
		$tpl_html .= '<div class="email controls">';
		$tpl_html .= '<input type="text" placeholder="Enter verification code" id="code" name="code" class="form-control" />';
		$tpl_html .= '</div>';
		$tpl_html .= '</div>';
		$tpl_html .= '<div class="clearfix"></div>';
		$tpl_html .= '<div  align="center">';
		$tpl_html .= '<div id="clockdiv">';
		$tpl_html .= '<div>';
		$tpl_html .= '<span class="minutes">00</span>';
		$tpl_html .= '<div class="smalltext">Minutes</div>';
		$tpl_html .= '</div>&nbsp;';
		$tpl_html .= '<div>';
		$tpl_html .= '<span class="seconds">00</span>';
		$tpl_html .= '<div class="smalltext">Seconds</div>';
		$tpl_html .= '</div>';
		$tpl_html .= '</div>';
		$tpl_html .= '</div>';
		$tpl_html .= '<div class="clearfix"></div>';
		$tpl_html .= '<div class="submit">';
		$tpl_html .= '<input type="hidden" id="banyak_klik" value="0" />';
		$tpl_html .= '<button type="button" class="btn btn-info" id="btn_resend" onclick="resend_code()">Re-Send</button>';
		$tpl_html .= '<input type="submit" value="Submit" class="btn btn-inverse">';
		$tpl_html .= '<div class="loading"></div>';
		$tpl_html .= '</div>';
		$tpl_html .= '</form>';
		$tpl_html .= '<div class="forget">&nbsp;</div>';
		$data['tpl_html'] = $tpl_html;
		echo json_encode($data);

	}
	
	function check_code_verifikasi_login(){
		$userid = $this->crypter->decrypt($this->input->post('userid'));
		$code = $this->input->post('code');
		$check = $this->m_login->check_code_authentication($userid,$code);
		if(count($check)>0){
			echo 'true';
		} else {
			echo 'false';
		}
	}

	function check_code_verifikasi(){
		$userid = $this->session->userdata('log_userid');
		$code = $this->input->post('code');
		$check = $this->m_login->check_code_authentication($userid,$code);
		if(count($check)>0){
			echo 'true';
		} else {
			echo 'false';
		}
	}
	
	function form_new_password(){
		$userid = $this->session->userdata('log_userid');
		$this->m_login->clear_code_authentication($userid);
		$tpl_html = '';
		$tpl_html .= '<h2>CHANGE PASSWORD</h2>';
		$tpl_html .= '<form action="#" class="form" id="form_validation_password" method="post">';

		$tpl_html .= '<div class="form-group">';
		$tpl_html .= '<div class="controls">';
		$tpl_html .= '<input type="text" disabled="disabled" id="username" name="username" class="form-control" value="'.$this->session->userdata('log_username').'"/>';
		$tpl_html .= '</div>';
		$tpl_html .= '</div>';

		$tpl_html .= '<div class="form-group">';
		$tpl_html .= '<div class="controls">';
		$tpl_html .= '<input type="password" placeholder="New password" id="new_password" name="new_password" class="form-control" />';
		$tpl_html .= '</div>';
		$tpl_html .= '</div>';

		$tpl_html .= '<div class="form-group">';
		$tpl_html .= '<div class="controls">';
		$tpl_html .= '<input type="password" placeholder="Confirm new password" id="conf_password" name="conf_password" class="form-control" />';
		$tpl_html .= '</div>';
		$tpl_html .= '</div>';

		$tpl_html .= '<div class="clearfix"></div>';
		$tpl_html .= '<div class="submit">';
		$tpl_html .= '<input type="submit" value="Submit" class="btn btn-inverse">';
		$tpl_html .= '<div class="loading"></div>';
		$tpl_html .= '</div>';
		$tpl_html .= '</form>';
		$tpl_html .= '<div class="forget">&nbsp;</div>';
		$data['tpl_html'] = $tpl_html;
		echo json_encode($data);
	}

	function process_change_password(){
		$userid = $this->session->userdata('log_userid');
		$entry['password']	= $this->encrypt->encode(trim($this->input->post('new_password')),$this->encrypt->hash(config_item('keyLogin')));
		$this->load->model('m_setup_user');
		$this->db->trans_start(); /*untuk rollback jika data gagal*/
		$this->m_setup_user->update_data($entry,$userid);
		$this->db->trans_complete();

		$tpl_html = '';
		$tpl_html .= '<h2>SUCCESS</h2>';
		$tpl_html .= '<i style="padding:30px 30px 15px">Password has been changed! Please to login form</i>';
		$tpl_html .= '<form action="#" class="form" id="form_validation_password" method="post">';

		$tpl_html .= '<div class="submit">';
		$tpl_html .= '<a class="btn btn-inverse" href="'.site_url('login').'">LOGIN</a>';
		$tpl_html .= '</div>';
		$tpl_html .= '</form>';
		$tpl_html .= '<div class="forget">&nbsp;</div>';
		$data['tpl_html'] = $tpl_html;
		echo json_encode($data);
	}


	function refresh_session(){
		$userid = $this->input->post('userid');
		$this->m_login->saveDataSession($userid);

	}

}//D:/xampp/htdocs/babakan/app/modules/login/controllers/Login.php
