<div id="sidebar" class="navbar-collapse collapse">
    <ul class="nav nav-list">
        <li>&nbsp;</li>
        <li>
            <a href="#">
            <span>MAIN MENU</span>
            </a>
        </li>
        <li>&nbsp;</li>
        <?php
		

		//$menu_mechanism = get_menu_mech();
		$developers_menu = array(

		);
        $menu_developers = array(
        	
        );

        if($this->session->userdata('log_roleid') == '1'){
        	// INCLUDE ARTISAN SCRIPTS
        	 
        	// echo $this->session->userdata('log_roleid');
        	$menu_developers[] = array('id'=>'0','parent_id'=>'0', 'name' =>'Artisan','url'=>'@artisan_main','sub'=>array(
        		array('id'=>'0','parent_id'=>'0','url'=>'@artisan/setup','name'=>'Setup','sub'=>array(),'sub2'=>array()),
        		array('id'=>'0','parent_id'=>'0','url'=>'@artisan/modulCreator','name'=>'Module Creator','sub'=>array(),'sub2'=>array()),
        		array('id'=>'0','parent_id'=>'0','url'=>'@artisan/menuBuilder','name'=>'Menu Builder','sub'=>array(),'sub2'=>array()),
        		array('id'=>'0','parent_id'=>'0','url'=>'@artisan/aclBuilder','name'=>'Acl Builder','sub'=>array(),'sub2'=>array()),
        		array('id'=>'0','parent_id'=>'0','url'=>'@artisan/databaseBuilder','name'=>'Database Builder','sub'=>array(),'sub2'=>array()),
        		array('id'=>'0','parent_id'=>'0','url'=>'@artisan/convertHMVC','name'=>'HMVC Converter','sub'=>array(),'sub2'=>array()),
        	));
        }
		// $menu_from_db = generate_menu();
		$menu = generate_menu();
		// $menu = array_merge($menu_developers,$menu_from_db);
		$html = '';
		$html .= '';
		foreach($menu as $menu_key => $menu_val){
			switch ($menu_val['name']) {
				case 'Artisan':
					$class_icon = 'fa fa-cogs';
					break;
				case 'Beranda':
					$class_icon = 'fa fa-dashboard';
					break;
				case 'Pegawai':
					$class_icon = 'fa fa-user';
					break;
				case 'KTP':
					$class_icon = 'fa fa-credit-card';
					break;
				case 'KK':
					$class_icon = 'fa fa-th-large';
					break;
				case 'Domisili':
					$class_icon = 'fa fa-map-marker';
					break;
				case 'Kelahiran':
					$class_icon = 'fa fa-mail-forward';
					break;
				case 'Kematian':
					$class_icon = 'fa fa-mail-reply';
					break;
				case 'Pernikahan':
					$class_icon = 'fa fa-heart';
					break;
				case 'Domisili Usaha':
					$class_icon = 'fa fa-map-marker';
					break;
				case 'SKCK':
					$class_icon = 'fa fa-folder-o';
					break;
				case 'Tidak Mampu':
					$class_icon = 'fa fa-wheelchair';
					break;
				case 'Rumah':
					$class_icon = 'fa fa-home';
					break;
				case 'Tanah':
					$class_icon = 'fa fa-folder';
					break;
				case 'IMB':
					$class_icon = 'fa fa-building-o';
					break;
				case 'Izin Ramai':
					$class_icon = 'fa fa-users';
					break;
				case 'Kehilangan':
					$class_icon = 'fa fa-puzzle-piece';
					break;
				case 'PBB':
					$class_icon = 'fa fa-certificate';
					break;
				case 'Ikrar Masuk Islam':
					$class_icon = 'fa fa-star';
					break;
				case 'Ghoib':
					$class_icon = 'fa fa-warning';
					break;
				case 'Pindah Datang':
					$class_icon = 'fa fa-retweet';
					break;
				case 'Pengaturan':
					$class_icon = 'fa fa-gear';
					break;
				default:
					$class_icon = 'fa fa-th-list';
			}
			
			$classParent = '';
			if($this->uri->segment(1)!='' && search_by_column($menu_val,'url',str_replace('-', '_', $this->uri->segment(1)) )){
				$classParent = 'class="active"';
			} elseif($this->uri->segment(1)=='' && $menu_val['url']=='dashboard'){
				$classParent = 'class="active"';
			}
				
			$html .= '<li '.$classParent.'>';
			if(count($menu_val['sub'])>0){##memiliki sub

				$nama_menu = $menu_val['name'];
				if($menu_val['name']=='Budget Cash Request'){
					$nama_menu = 'Budget Cash Req';
				}

				$fname = str_replace(' ','_',strtolower($menu_val['name']));
				$html .= '<a href="#" class="dropdown-toggle">';
				$html .= '<i class="'.$class_icon.'"></i>';
				$html .= '<span>'.$nama_menu.'</span>';
				$html .= '<span id="menu_'.$fname.'"></span>';
				$html .= '<b class="arrow fa fa-angle-right"></b>';
				$html .= '</a>';
				$html .= '<ul class="submenu">';
				foreach($menu_val['sub'] as $sub_key => $sub_val){
					$classSub = '';
					if(search_by_column($sub_val,'url',str_replace('-', '_', $this->uri->segment(1)))){
						$classSub = 'class="active"';
					}

					$html .= '<li '.$classSub.'>';
					if(count($sub_val['sub2'])>0){##memiliki sub
						$html .= '<span>'.$sub_val['name'].'</span>';
						$html .= '<ul>';
						foreach($sub_val['sub2'] as $sub2_key => $sub2_val){
							$classSub2 = '';
							if(search_by_column($sub2_val,'url',str_replace('-', '_', $this->uri->segment(1)))){
								$classSub2 = 'class="active"';
							}
							$html .= '<li '.$classSub2.'>';
							$html .= '<a href="'.site_url(str_replace('_','-',$sub2_val['url'])).'">'.$sub2_val['name'].'</a>';
							$html .= '</li>';
						}
						$html .= '</ul>';
					} else {
						$fname = str_replace(' ','_',strtolower($menu_val['name']));
						$dname = str_replace(' ','_',strtolower($sub_val['name']));
						$html .= '<a href="'.site_url(str_replace('_','-',$sub_val['url'])).'">'.$sub_val['name'].' <span class="list_menu list_menu_'.$fname.'" id="menu_'.$fname.'_'.$dname.'"></span></a>';
					}
					$html .= '</li>';
				}
				$html .= '</ul>';
			} else {
				$nama_menu = $menu_val['name'];
				if($menu_val['name']=='Budget Cash Request'){
					$nama_menu = 'Budget Cash Req';
				}
				$fname = str_replace(' ','_',strtolower($menu_val['name']));
				$html .= '<a href="'.site_url($menu_val['url']).'">';
				$html .= '<i class="'.$class_icon.'"></i>';
				$html .= '<span>'.$nama_menu.'</span> <span class="list_menu" id="menu_'.$fname.'"></span>';
				$html .= '</a>';
			}
			$html .= '</li>';
		}
		echo $html;
		?>



    </ul>
    <div id="sidebar-collapse" class="visible-lg">
        <i class="fa fa-angle-double-left"></i>
    </div>
</div>
