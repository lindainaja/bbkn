<?php 
class Pindah_datang extends MX_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->func = 'pindah_datang';
		// $this->load->model('m_dashboard');
		
		// $this->menu = search_by_column(get_menu_mech(),'menuid',1);//menu dashboard
		// menu_check_role($this->menu);
		$this->menu = search_by_column(get_menu_mech(),'menuid',1);//menu dashboard
		menu_check_role($this->menu);

		$this->no_prop		= $this->session->userdata('log_prop');
		$this->no_kab		= $this->session->userdata('log_kab');
		$this->no_kec		= $this->session->userdata('log_kec');
		$this->no_kel		= $this->session->userdata('log_kel');

	}
	public function index()
	{
		##datepicker
        $this->template->add_js('www_static/js/app');
        $this->template->add_js('app/modules/'.$this->func.'/assets/scripts/app.min.js');
        $this->template->add_js('app/modules/'.$this->func.'/assets/scripts/vue.min.js');
        $this->template->add_js('app/modules/'.$this->func.'/assets/scripts/vue-resource.min.js');

        $this->template->add_css('app/modules/'.$this->func.'/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css');
        $this->template->add_css('app/modules/'.$this->func.'/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css');
        $this->template->add_js('app/modules/'.$this->func.'/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js');
        $this->template->add_js('app/modules/'.$this->func.'/assets/global/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.id.min.js');

        $this->template->add_js('app/modules/'.$this->func.'/assets/global/plugins/numeric/jquery.numeric.min.js');
        $this->template->add_js('app/modules/'.$this->func.'/assets/global/plugins/select2/js/select2.full.min.js');
        $this->template->add_css('app/modules/'.$this->func.'/assets/global/plugins/select2/css/select2.min.css');

        $this->template->add_css('app/modules/'.$this->func.'/assets/global/plugins/select2/css/select2-bootstrap.min.css');
        

        $this->template->add_js('app/modules/'.$this->func.'/assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js');
        $this->template->add_css('app/modules/'.$this->func.'/assets/global/plugins/bootstrap-sweetalert/sweetalert.css');


        $this->template->add_css('app/modules/'.$this->func.'/assets/global/plugins/datatables/datatables.min.css');
        $this->template->add_css('app/modules/'.$this->func.'/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css');
        $this->template->add_css('app/modules/'.$this->func.'/assets/global/plugins/bootstrap-summernote/summernote.css');
        $this->template->add_css('app/modules/'.$this->func.'/assets/global/plugins/web-icons/web-icons.min.css');

        $this->template->add_js('app/modules/'.$this->func.'/assets/global/plugins/datatables/datatables.min.js');
        $this->template->add_js('app/modules/'.$this->func.'/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js');
        $this->template->add_js('app/modules/'.$this->func.'/assets/global/plugins/bootstrap-summernote/summernote.min.js');
        $this->template->add_js('app/modules/'.$this->func.'/assets/global/plugins/md5/md5.min.js');
        $this->template->add_css('public/assets/bootstrap-fileupload/bootstrap-fileupload.css');
		$this->template->add_js('public/assets/bootstrap-fileupload/bootstrap-fileupload.min.js');
        
        $this->template->add_css('app/modules/'.$this->func.'/assets/global/css/plugins.min.css');
        $this->template->add_css('app/modules/'.$this->func.'/assets/global/css/components.min.css');
        $this->template->add_css('app/modules/'.$this->func.'/assets/styles/override.css');

        

        // $this->template->add_css();

        // $this->template->add_js('public/js/chart/highcharts-3d.js');
        // $this->template->add_js('public/js/chart/exporting.js');
        $this->template->add_js('public/assets/jquery-slimscroll/jquery.slimscroll.min.js');

        // $this->template->add_js('public/js/'.$this->func.'/list.js');
        
        $this->template->add_js('app/modules/'.$this->func.'/assets/scripts/pindah_datang.js');
        
        $this->template->add_title('Pindah Datang');
        $breadcrumb = array(
            'dashboard' => 'Beranda',
        );
        $this->template->add_breadcrumb($breadcrumb);

        $data['kel']    = kel_2_dropdown($this->no_prop,$this->no_kab,$this->no_kec,$this->no_kel);
        $data['menu'] = $this->menu;
        $data['export_url'] 	= site_url($this->func.'/export_data');
		$data['default_filter_date_value'] = date('m/Y');
		$data['no_kel'] 		= $this->no_kel;


		$data['dropdown_filter_no_kel'] = form_dropdown('filter_no_kel',$data['kel'],$data['no_kel'],'id="filter_no_kel" class="form-control" style="width:100%"');

        $this->template->write_view('content','pindah_datang',$data);
        $this->template->render();
	}
	public function _remap($cmd='',$a='',$b='',$c='')
	{
		switch ($cmd) {
			case 'index':
				return $this->{$cmd}($a,$b,$c);
				break;
			case 'grid':
				return $this->_grid($a,$b,$c);
				break;

				break;
			default:
				# code...
				break;
		}
	}


	protected function _form($code,$mode){

	}
	protected function _grid($code,$mode,$a="",$b="",$c="",$d=""){

		$code = $code[0];
		
		$this->load->library($code);
		$mode 	= $this->uri->segment(4);
		$pk 	= $this->uri->segment(5);
		
		switch ($mode) {
			case 'download':
				$data = $this->{$code}->download_xlsx($pk);
				break;
			case 'upload':
				$data =  $this->{$code}->form_upload_data($a,$b,$c);
				break;
			case 'do_upload':
				$data =  $this->{$code}->process_upload_data($a,$b,$c);
				break;
			default:
				$data = $this->{$code}->build_grid();
				break;
		}
		
		 
	}

}