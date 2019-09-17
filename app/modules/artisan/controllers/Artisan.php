<?php
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;

class Artisan extends MX_Controller
{
    public function __construct($value = '')
    {
        parent::__construct();
        // $this->load_database();

        error_reporting(E_ALL);
    }
    
    public function console($cmd = '', $a = '', $b = '', $c = '', $d = '', $e = '')
    {
        $method = str_replace(':', '_', $cmd);

        if (method_exists($this, $method)) {
            return $this->{$method}($a, $b, $c, $d, $e);
        }

        echo ('Unexistent command '."$cmd\n");
    }
    function developer(){
        // $sql = '';
        // $sql .= '
        //  INSERT INTO `setup_menu_mechanism` (
        //      `id`,
        //      `setup_menuid`,
        //      `description`,
        //      `grouping`
        //  )
        // ';
        // $sql .= ' VALUES ';
        // for($i=21;$i<=58;$i++){
        //  $sql .= "
        //          (
        //              NULL,
        //              '".$i."',
        //              'List Data',
        //              '0'
        //          ),
        //          (
        //              NULL,
        //              '".$i."',
        //              'Tambah Data',
        //              '0'
        //          ),
        //          (
        //              NULL,
        //              '".$i."',
        //              'Edit Data',
        //              '0'
        //          ), ";
        //  if($i==58){
        //      $sql .= "
        //              (
        //                  NULL,
        //                  '".$i."',
        //                  'Hapus Data',
        //                  '0'
        //              );
        //      ";
        //  } else {
        //      $sql .= "
        //              (
        //                  NULL,
        //                  '".$i."',
        //                  'Hapus Data',
        //                  '0'
        //              ),      
        //      ";
        //  }
        // }
        // //echo $sql;
        
        // $this->db->query($sql);

        die();
    }

    
    public function encrypt_str($a )
    {
        $this->load->library('encrypt');
        $salt = $this->encrypt->hash(config_item('keyLogin'));
        $encrypted = $this->encrypt->hash($a.$salt);
        echo $encrypted;
        $data = [
            'no_prop'      => $this->config->item('default_prop'),
            'no_kab'       => $this->config->item('default_kab'),
            'no_kec'       => $this->config->item('default_kec'),
            'no_kel'  => $this->config->item('default_kel'),
            'passwd'=>$encrypted
        ];
        $this->db->update('users',$data);
    }

    public function add_widget($name, $module, $method = '')
    {
        if (empty($name) || empty($module)|| empty($method)) {
            echo "HELP ./artisan add:widget <name> <module> <method>\n";
            exit();
        }
        echo "Adding widget $name ...\n";

        $widget = array(
            'widget_name' => $name,
            'title' => "Widget $name",
            'description' => "Widget $name",
            'url' => $module .(!empty($method)?'/':'') .$method,
            'authorization_id' => 1,
            'active' => 1,
            'is_static' => 0,
            'index' => 100,

        );

        $this->db->insert('main_widget', $widget);
    }
    public function add_module($name,$ck_db=false)
    {
        if (empty($name)) {
            echo "add:module <module_name>\n";
            exit;
        }

        #check module existent
        if($ck_db){
            $module_exist = $this->db->where('module_name', $name)->select("COUNT(module_id) cx")->get('main_module')->row()->cx > 0;
            if ($module_exist) {
                echo "module named \"${name}\" already exists, please specify different name.\n";
                exit;
            }
        }
        
        echo "CEREATE module files\n";
        $module_dir = APPPATH."modules/$name/";
        if (!is_dir($module_dir)) {
            echo "MKDIR $module_dir\n";
            mkdir($module_dir);
        }

        $ctrl_dir = $module_dir."/controllers/";
        if (!is_dir($ctrl_dir)) {
            echo "MKDIR $ctrl_dir\n";
            mkdir($ctrl_dir);
        }

        $view_dir = $module_dir."/views/";
        if (!is_dir($view_dir)) {
            echo "MKDIR $view_dir\n";
            mkdir($view_dir);
        }
        $model_dir = $module_dir."/models/";
        if (!is_dir($ctrl_dir)) {
            echo "MKDIR $model_dir\n";
            mkdir($model_dir);
        }

        $config_dir = $module_dir."/config/";
        if (!is_dir($config_dir)) {
            echo "MKDIR $config_dir\n";
            mkdir($config_dir);
        }
        $lib_dir = $module_dir."/libraries/";
        if (!is_dir($lib_dir)) {
            echo "MKDIR $lib_dir\n";
            mkdir($lib_dir);
        }
        $asset_dir = $module_dir."/assets/";
        if (!is_dir($asset_dir)) {
            echo "MKDIR $asset_dir\n";
            mkdir($asset_dir);
        }

        $ctrl_file = $ctrl_dir.ucfirst("${name}.php");

        $ctrl_file_content = "<?php \nclass ".ucfirst($name)." extends CMS_Controller{\n}";
        if (!file_exists($ctrl_file)) {
            echo "WRITE $ctrl_file\n";
            file_put_contents($ctrl_file, $ctrl_file_content);
        }
        if($ck_db){
            $module = array(
                'module_name' => $name,
                'module_path' => $name,
                'version' => '1.0',
                'user_id' => '1'
            );
        
            echo "INSERT main_module\n";
            $this->db->insert('main_module', $module);

            $this->dump_module_config();
            $this->clear_cache();
        }
        
    }
    public function clear_cache()
    {
        $twig_cache_dir  = APPPATH . 'cache/';
        $image_cache_dir = $this->config->item('image_cache_dir');
    }
    public function add_navigation($name, $path, $path2 = "", $auth = "4")
    {
        if (empty($name) or empty($path)) {
            echo "add:navigation <navigation_name> <path>\n";
            exit;
        }
        #check module existent
        $nav_exist = $this->db->where('navigation_name', $name)->select("COUNT(navigation_id) cx")->get('main_navigation')->row()->cx > 0;
        if ($nav_exist) {
            echo "navigation named \"${name}\" already exists, please specify different name.\n";
            // exit;
        }

        $last_index = $this->db->select("MAX(n.index) max_index")->get("main_navigation n")->row()->max_index + 1;

        $navigation = array(
            'navigation_name' => $name,
            'url' => $path.(!empty($path2)?'/'.$path2:''),
            'is_static' => 0,
            'authorization_id'=> 4,
            'index'=>$last_index,
            'default_theme' => 'metronic',
            'default_layout' => 'full',
            'page_keyword' => $name,
            'description' => ucfirst($name),
            'page_title' => ucfirst($name),
            'bootstrap_glyph' => 'glyphicon-home',
            'title'=>$name

        );

        if (!$nav_exist) {
            echo "INSERT main_navigation\n";
            $this->db->insert('main_navigation', $navigation);
        
            $this->attach_navprivil($navigation['navigation_name']);
        } else {
            echo "UPDATE main_navigation\n";
            $this->db->where('navigation_name', $name)->update('main_navigation', $navigation);
        }
        

        $this->cache_clear();
    }

    public function dump_module_config()
    {
        $modules = $this->db->get('main_module')->result_array();
        $module_config = array();
        foreach ($modules as $module) {
            $module_config[$module['module_name']] = $module;
        }
        
        $dump = Yaml::dump($module_config);

        $config_path = APPPATH. 'config/main_module.yml';

        file_put_contents($config_path, $dump);
        echo "WRITE $config_path\n";
    }
     function _rrmdir($dir) { 
       if (is_dir($dir)) { 
         $objects = scandir($dir); 
         foreach ($objects as $object) { 
           if ($object != "." && $object != "..") { 
             if (is_dir($dir."/".$object))
               $this->_rrmdir($dir."/".$object);
             else
               if(!preg_match('/index\.html|\.htaccess/', $dir."/".$object)){
                    echo "UNLINK:" .$dir."/".$object. "\n";
                    unlink($dir."/".$object); 
               } 
               
           } 
         }
         echo "RMDIR:$dir\n";
         try{
                rmdir($dir); 
         }catch(Exception $e){
            echo $e->getMessage();
         }
         
       } 
     }
    public function cache_clear()
    {
        $cache_path = APPPATH . 'cache/';
        $asset_cache = $cache_path . 'twig/';
        echo "CLEANING ${asset_cache}*\n";
        $this->_rrmdir($asset_cache);

        $cache_path = APPPATH . 'cache/';
        $asset_cache = $cache_path . 'assets/';
        echo "CLEANING ${asset_cache}*\n";

        foreach (glob($asset_cache."*.{js,css,map}", GLOB_BRACE) as $filename) {
            echo "DEL $filename ". "\n";
            unlink($filename);
        }

        $cookies_cache = $cache_path . 'cookies/';
        echo "CLEANING ${cookies_cache}*\n";

        foreach (glob($cookies_cache."*.{txt}", GLOB_BRACE) as $filename) {
            echo "DEL $filename ". "\n";
            unlink($filename);
        }

        $query_cache = $cache_path . 'query/';
        echo "CLEANING ${query_cache}*\n";

        foreach (glob($query_cache."*.{yml}", GLOB_BRACE) as $filename) {
            echo "DEL $filename ". "\n";
            unlink($filename);
        }

        $thumbnail_cache = FCPATH . 'public/assets/caches/image_files/';
        echo "CLEANING ${thumbnail_cache}*\n";

        foreach (glob($thumbnail_cache."*") as $filename) {
            echo "DEL $filename ". "\n";
            unlink($filename);
        }
    }

    public function attach_navprivil($nav)
    {
        if (empty($nav)) {
            echo "attach:navprivil <nav>\n";
            exit;
        }
        $nav = $this->db->where('navigation_name', $nav)->get('main_navigation')->row();

        if (empty($nav)) {
            echo "navigation name $name DOESNT EXISTS\n";
            exit;
        }
        $navprivils = ['superadmin'=>1,'admin'=>2];

        foreach ($navprivils as $group_id) {
            $ck = $this->db->select("count(*) cx")
                    ->from('main_group_navigation gn')
                    ->join('main_navigation mn', 'mn.navigation_id=gn.navigation_id')
                    ->where('mn.navigation_name', $nav->navigation_name)
                    ->where('gn.group_id', $group_id)
                    ->get()
                    ->row()
                    ->cx > 0;
            if ($ck <= 0) {
                $row = [
                    'group_id'=>$group_id,
                    'navigation_id'=>$nav->navigation_id
                ];
                $this->db->insert('main_group_navigation', $row);
            }
        }
    }
    public function dump_menu_config($value = '')
    {
        $menus = [
        'dashboard'=>['title'=>'Dashboard','icon'=>'icon-home','items'=>[ 'dashboard/statistik'=> 'Statistik' ] ],
        'transaksi'=>['title'=>'Transaksi','icon'=>'icon-globe','items'=>[ 'transaksi/details-card-numbers'=> 'Member Details Cards',
                                                                       'transaksi/fasilitas' => 'Fasilitas Member Poin',
                                                                       'transaksi/redeempoin' => 'Redeem Poin',
                                                                       'transaksi/history' => 'History'
                                                                     ]
                 ],
        'manajemen'=>['title'=>'Manajemen','icon'=>'icon-puzzle','items'=>[ 'manajemen/cluster'=> 'Cluster',
                                                                        'manajemen/unit'=>'Unit',
                                                                        'manajemen/tenan'=>'Tenan',
                                                                        'manajemen/fasilitas'=>'Fasilitas',
                                                                        'manajemen/marcendaise'=>'Marcendaise',
                                                                        'manajemen/memberpoin'=>'Member Poin'
                                                                      ]
                 ],
        'laporan'=>['title'=>'Laporan','icon'=>'icon-bar-chart','items'=>[ 'laporan/unit-member-details'=> 'Unit &amp; Member Details',
                                                                        'laporan/tenan-fasilitas'=>'Tenan &amp; Fasilitas',
                                                                        'laporan/unit-member-poin'=>'Unit &amp; Member Poin',
                                                                        'laporan/marcendaise'=>'Marcendaise',
                                                                        'laporan/redeempoin'=>'Redeem Poin',
                                                                        'laporan/memberpoin'=>'Member Poin'
                                                                      ]
                 ],
        'pengaturan'=>['title'=>'Pengaturan','icon'=>'icon-wrench','items'=>[ 'pengaturan/grup'=> 'Grup',
                                                                        'pengaturan/pengguna'=>'Pengguna',
                                                                        'pengaturan/setting'=>'Setting',
                                                                        'pengaturan/modul'=>'Modul'
                                                                      ]
                 ],
        ];

        $dump = Yaml::dump($menus, 4, 4);

        $config_path = APPPATH. 'config/main_menu.yml';

        file_put_contents($config_path, $dump);
        echo "WRITE $config_path\n";
    }
    /* Lavon script start here */
    public function cp_assets()
    {
        $src_theme_dir = realpath(FCPATH.'../metronic/assets').'/';
        $dst_theme_dir = realpath(theme_path('assets')).'/';

        $file_to_proc = APPPATH.'views/theming/login.php';

        echo "SRC:". $src_theme_dir."\n";
        echo "DST:". $dst_theme_dir."\n";
        echo "FILE:". $file_to_proc."\n";

        $src_html = $this->load->view('theming/design', array(), 1);
        $src_html = str_replace('{{ theme_assets }}/', $src_theme_dir, $src_html);

        // $dom = pQuery::parseStr($src_html);
        // $script_tags = $dom->query('link');

        $unexistens = "global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js,global/plugins/jquery-file-upload/js/jquery.fileupload-video.js";
        
        $files = explode(",", $unexistens);
        foreach ($files as $file) {
            $file = trim($file);

            $src = $src_theme_dir . $file;
            $dst = $dst_theme_dir . $file;

            $dir = dirname($dst);
            if (!is_dir($dir)) {
                echo "MD $dir\n";
                mkdir($dir, 0777, true);
            }
            echo "CP $src --> $dst \n";
            copy($src, $dst);
        }
        /*$script_tags = $dom->query('script');
        foreach ($script_tags as $tag) {
            $src = $tag->attr('src'); //. "\n";
            if(preg_match('/^http/',$src)){
                continue;
            }
            $src=trim($src);
            $dst = str_replace($src_theme_dir,$dst_theme_dir,$src);
            // $file = basename($dst);
            $dir = dirname($dst);
            if(!is_dir($dir)){
                echo "MD $dir\n";
                mkdir($dir,0777,true);
            }
            echo "CP $src --> $dst \n";
            copy($src,$dst);
        }

        $script_tags = $dom->query('link');
        foreach ($script_tags as $tag) {
            $src = $tag->attr('href'); //. "\n";
            if(preg_match('/^http/',$src)){
                continue;
            }
            if($tag->attr('rel' != 'stylesheet')){
                continue;
            }
            $dst = str_replace($src_theme_dir,$dst_theme_dir,$src);
            // $file = basename($dst);
            $dir = dirname($dst);
            if(!is_dir($dir)){
                echo "MD $dir\n";
                mkdir($dir,0777,true);
            }
            echo "CP $src --> $dst \n";
            copy($src,$dst);
        }
        */
        // echo $src_html;
    }

    public function reset_passwd()
    {
        $this->load->model('account/m_account');
        $encrypted_passwd = $this->m_account->encrypt_password('admin');
        $this->db->where('user_name', 'admin')->update('main_user', ['password'=>$encrypted_passwd]);
        echo "your admin password is now admin";

        $encrypted_passwd = $this->m_account->encrypt_password('superadmin');
        $this->db->where('user_name', 'superadmin')->update('main_user', ['password'=>$encrypted_passwd]);
        echo "your superadmin password is now superadmin";
    }

    public function extract_xslt($module)
    {
        $sourcefile = APPPATH . 'modules/'.$module.'/template/reports/output/wordTemplate.docx';
        $xslt = APPPATH . 'modules/'.$module.'/template/reports/output/content.xslt';

        $zip = new ZipArchive();
        $zip->open($sourcefile);
        $content = $zip->getFromName('word/document.xml');

        $content = $this->fix_xslt($content);

        if (file_put_contents($xslt, $content)) {
            echo "EXTRACTED : \n\t$xslt\n";
        } else {
            echo 'Problem extracting main content';
        }

        $zip->close();
    }
    public function fix_xslt($path_or_str, $is_file=0,$beautify=1)
    {
        $opening_tag = '' . 
'<?xml version="1.0" encoding="UTF-8" standalone="yes"?>'. "\n".
'<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">'."\n".
'<xsl:template match="/">'."";

        $closing_tag = '' . 
'</xsl:template>'. "\n".
'</xsl:stylesheet>' . "\n";


        // append opening tag and closing tang to template docx
        $content = $path_or_str;
        if($is_file){
            $content = file_get_contents($path_or_str);
        }
        

        //
        $default_opening_tag = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
        $content  = str_replace($default_opening_tag, $opening_tag, $content);
        $content .= $closing_tag;
        
        $prepend_body = '<w:body>' . "\n\t<xsl:for-each select=\"root/row\">\n";

        $content  = str_replace('<w:body>', $prepend_body, $content);

        $append_body = "\n\t</xsl:for-each>\n</w:body>\n";
        $content  = str_replace('</w:body>', $append_body, $content);

        if($beautify){
            $content = $this->_formatXmlString($content);
        }
        // echo $content;
        return $content;


    }
    private function _formatXmlString($xml) {

        // add marker linefeeds to aid the pretty-tokeniser (adds a linefeed between all tag-end boundaries)
        $xml = preg_replace('/(>)(<)(\/*)/', "$1\n$2$3", $xml);

        // now indent the tags
        $token      = strtok($xml, "\n");
        $result     = ''; // holds formatted version as it is built
        $pad        = 0; // initial indent
        $matches    = array(); // returns from preg_matches()

        // scan each line and adjust indent based on opening/closing tags
        while ($token !== false) :

        // test for the various tag states

        // 1. open and closing tags on same line - no change
        if (preg_match('/.+<\/\w[^>]*>$/', $token, $matches)) :
          $indent=0;
        // 2. closing tag - outdent now
        elseif (preg_match('/^<\/\w/', $token, $matches)) :
          $pad--;
        // 3. opening tag - don't pad this one, only subsequent tags
        elseif (preg_match('/^<\w[^>]*[^\/]>.*$/', $token, $matches)) :
          $indent=1;
        // 4. no indentation needed
        else :
          $indent = 0;
        endif;

        // pad the line with the required number of leading spaces
        $line    = str_pad($token, strlen($token)+$pad, ' ', STR_PAD_LEFT);
        $result .= $line . "\n"; // add to the cumulative result, with linefeed
        $token   = strtok("\n"); // get the next token
        $pad    += $indent; // update the pad size for subsequent lines
        endwhile;

        return $result;
    }

    public function dump_tables()
    {
        $yml_path = APPPATH.'modules/artisan/config/tables.yml';
        $tables = $this->db->list_tables();


        $dump = Yaml::dump($tables, 4, 4); 

        file_put_contents($yml_path, $dump);
        echo "WRITE: $yml_path \n";
    }
    public function fix_old_entries()
    {
        $yml_path = APPPATH.'modules/artisan/config/tables.yml';
        $dump   = file_get_contents($yml_path);
        $tables = Yaml::parse($dump); 

        foreach($tables as $table){
            $cx = $this->db->count_all($table);
            if($cx > 0){
                echo "{$table} countains {$cx} records.\n";
                $this->_update_row_entry($table);
            }else{
                 echo "SKIP:{$table} no records.\n"; 

            }
            

        }
        // echo "WRITE: $yml_path \n";
    }
    private function _get_pk($table)
    {
        $fields = $this->db->field_data($table);

        foreach ($fields as $field)
        {
            // echo $field->name;
            // echo $field->type;
            // echo $field->max_length;
            if( $field->primary_key){
                return $field->name;
            }
        }
    }
    private function _field_exist($table,$field_name)
    {
        $fields = $this->db->field_data($table);
        $field_names=[];
        foreach ($fields as $field)
        {
            // echo $field->name;
            // echo $field->type;
            // echo $field->max_length;
            // if( $field->primary_key){
                $field_names[]= $field->name;
            // }
        }
        echo $field_name . ' in ' . json_encode($field_names)."\n";
        return in_array($field_name, $field_names);
    }
    private function _update_row_entry($table)
    {
        echo "FETCHING {$table}.\n";
        $pk = $this->_get_pk($table);
        $select  = "{$pk}";//,no_prop,no_kab,no_kec,no_kel,date";
        $records = $this->db->select($select)->get($table)->result_array();
        
        $data = [
            'no_prop'      => $this->config->item('default_prop'),
            'no_kab'       => $this->config->item('default_kab'),
            'no_kec'       => $this->config->item('default_kec'),
            'no_kel'  => $this->config->item('default_kel'),
            'date' => date('Y-m-d'),
            'archive'=> 0
        ];

        foreach ($records as $rec) {
            $pkv = $rec[$pk];
            unset($rec[$pk]);
            echo "UPDATE {$pk}:{$pkv}.\n";
            $ndata = $data;
            $ndata = $data+($this->_field_exist($table,'create_on')?['update_on'=>date('Y-m-d H:i:s'),'create_on'=>date('Y-m-d H:i:s')]:[] );
            echo json_encode($ndata);
            $this->db->where($pk,$pkv)->update($table,$ndata );

            // break;
        }
    }

    public function fix_old_entries_ttd()
    {
        $yml_path = APPPATH.'modules/artisan/config/tables.yml';
        $dump   = file_get_contents($yml_path);
        $tables = Yaml::parse($dump); 
        $field_name_entries=[];
        $field_tables=[];

        foreach($tables as $table){
            $cx = $this->db->count_all($table);
            if($cx > 0){
               //echo "{$table} countains {$cx} records.\n";
                $this->_update_row_entry_ttd($table,$field_name_entries,$field_tables);

            }else{
                 echo "SKIP:{$table} no records.\n";
            }
            

        }
        // echo json_encode($field_name_entries) . " \n";
        // echo json_encode($field_tables) . " \n";
        $this->_update_row_entry_ttd_2($field_tables);
    }
    private function _update_row_entry_ttd_2($field_tables)
    {
        $field_ttds = [
            "ttd_nama" => config_item('default_ttd_nama'),
            "ttd_nip" => config_item('default_ttd_nip'),
            "ttd_jabatan"=>config_item('default_ttd_jabatan'),
            "ttd_kl_nama"=> config_item('default_ttd_nama'),
            "ttd_kl_nip"=>config_item('default_ttd_nip'),
            "ttd_kl_jabatan"=>config_item('default_ttd_jabatan')
        ];

        foreach ($field_tables as $table => $field_names) {
           
        

            ///////////////////////////////////////////////////////////////
            echo "FETCHING {$table}.\n";
            $pk = $this->_get_pk($table);
            $select  = "{$pk}," . implode(',', $field_names);//,no_prop,no_kab,no_kec,no_kel,date";
            $records = $this->db->select($select)->get($table)->result_array();
            
            

            foreach ($records as $rec) {
                $pkv = $rec[$pk];
                unset($rec[$pk]);

                echo "UPDATE {$pk}:{$pkv}.\n";
                foreach ($rec as $field_name => $value) {
                    $rec[$field_name] = $field_ttds[$field_name];
                }
                
                $this->db->where($pk,$pkv)->update($table,$rec );
                echo json_encode($rec)."\n";
                // break;
            }
        }

        /////////////////////////////////////////////////////////////////
    }
    private function _update_row_entry_ttd($table,&$field_name_entries=[],&$field_tables=[])
    {
        $fields = $this->db->field_data($table);
        $field_names=[];
        
        
        foreach ($fields as $field)
        {
           if(preg_match('/ttd_/', $field->name)){
                if(!isset($field_tables[$table])){
                    $field_tables[$table]=[];
                }
                $field_tables[$table][] = $field->name;
                if(!in_array($field->name, $field_name_entries)){
                    $field_name_entries[]=$field->name;
                }
            }
        }

        // echo json_encode($field_names);
        // echo $field_name . ' in ' . json_encode($field_names)."\n";
        // return in_array($field_name, $field_names);
    }

    public function update_ac_lurah()
    {
        $lurah = [
            "nama" => config_item('default_ttd_nama'),
            "nip" => config_item('default_ttd_nip'),
            "jabatan"=>config_item('default_ttd_jabatan')
        ];

        $data=[
            'nip'=>$lurah['nip'],
            'nama_pegawai'=>$lurah['nama'],
            'jabatan'=>$lurah['jabatan']
        ];
        $this->db->where('id_pegawai','1')->update('r_pegawai',$data);
    }
    private function _loadPackage($dir)
    {
        $composer = json_decode(file_get_contents("$dir/composer.json"), 1);
        $namespaces = isset($composer['autoload']['psr-4'])?$composer['autoload']['psr-4']:$composer['autoload'];

        print_r($namespaces);
        // Foreach namespace specified in the composer, load the given classes
        foreach ($namespaces as $namespace => $classpaths) {
            if (!is_array($classpaths)) {
                $classpaths = array($classpaths);
            }
            spl_autoload_register(function ($classname) use ($namespace, $classpaths, $dir) {
                // Check if the namespace matches the class we are looking for
                if (preg_match("#^".preg_quote($namespace)."#", $classname)) {
                    // Remove the namespace from the file path since it's psr4
                    $classname = str_replace($namespace, "", $classname);
                    $filename = preg_replace("#\\\\#", "/", $classname).".php";
                    foreach ($classpaths as $classpath) {
                        $fullpath = $dir."/".$classpath."/$filename";
                        if (file_exists($fullpath)) {
                            include_once $fullpath;
                        }
                    }
                }
            });
        }
    }
   
    private function _getDirContents($dir, &$results = array(),$ext='docx'){
        $files = scandir($dir);

        foreach($files as $key => $value){
            $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
            if(!is_dir($path)) {
                if(preg_match('/\.'.$ext.'/i', $path))
                    $results[] = $path;
            } else if($value != "." && $value != "..") {
                $this->_getDirContents($path, $results,$ext);
                if(preg_match('/\.'.$ext.'/i', $path))
                    $results[] = $path;
            }
        }

        return $results;
    }

    public function add_menu($name,$url='',$parent=0)
    {
        $menu = [
            'name' => str_replace ('_', ' ', $name),
            'url' =>  $url,
            'parent_id' => $parent
        ];
        echo json_encode($menu);
        echo "\nAre you sure ?[y/n]:";
        $input = rtrim(fgets(STDIN));
        if(preg_match('/^(y|yes)$/i', $input)){

            $menu_exist = $this->db->or_where('url',$url)
                                   ->or_where('name',$name)
                                   ->where('parent_id',$parent)
                                   ->get('setup_menu')
                                   ->num_rows() > 0;
            if($menu_exist){
                die('Menu '.$name.' already exists ....');
            }                       
            $position = $this->db->select('MAX(position) pos')
                                 ->from('setup_menu')
                                 ->where('parent_id',$parent)
                                 ->get()
                                 ->row()
                                 ->pos + 1;

            echo "new menu position is $position\n";
            $menu['position'] = $position;
            echo "INSERT: setup_menu ". json_encode($menu) . '...... ';
            $this->db->insert('setup_menu',$menu);
            $menu['id'] = $this->db->insert_id();
            echo  $menu['id']."        [OK]\n";
            
            $this->create_menumech($menu['id']);
            $this->attach_menurole($menu['id']);

        }else{
            echo "Aborted...\n";
        }

    }
    public function create_menumech($menu_id)
    {
        $menu_mechs = [
            'list' => ['description'=> 'List Data'],
            'add' => ['description'=> 'Tambah Data'],
            'adit' => ['description'=> 'Edit Data'],
            'delete' => ['description'=> 'Hapus Data'],
        ];
        echo "\nAre you sure ?[y/n]:";
        $input = rtrim(fgets(STDIN));
        if(preg_match('/^(y|yes)$/i', $input)){
            $mech_ids = [];
            foreach ($menu_mechs as $key => $mech) {
                $mech['setup_menuid'] = $menu_id;
                $exists = $this->db->where($mech)->get('setup_menu_mechanism')->num_rows() > 0;

                if($exists){
                    echo "SKIP:" .json_encode($mech)."\n";
                    continue;
                }
                echo "INSERT: setup_menu_mechanism " .json_encode($mech);
                $this->db->insert('setup_menu_mechanism',$mech);
                $mech_ids[] = $this->db->insert_id();
                echo " OK\n";
            }

            echo json_encode($mech_ids);
        }
    }
    public function attach_menurole($menu_id)
    {
        echo "menu_id:$menu_id\n\nAre you sure ?[y/n]:";
        $input = rtrim(fgets(STDIN));
        $group_ids = [1,2,3];
        if(preg_match('/^(y|yes)$/i', $input)){
            foreach ($group_ids as $gid) {
                $data = ['setup_roleid'=>$gid,'setup_menuid'=>$menu_id];
                $exists = $this->db->where($data)
                               ->get('setup_role_menu')
                               ->num_rows() > 0;

                if($exists){
                    echo "SKIP:" .json_encode($data)."\n";
                    continue;
                }
                echo "INSERT: setup_menu_mechanism " .json_encode($data);
                $this->db->insert('setup_role_menu',$data);
                // $mech_ids[] = $this->db->insert_id();
                echo " OK\n";
            }
            

        }
    }
    public function attach_menurolemech($menu_id,$a="",$b="",$c="",$d="")
    {
        $args = func_get_args();
        foreach ($args as $index => $mech_id) {
            if($index == 0){
                continue;
            }
        
            $setup_menu_mechanismid = $mech_id;
            echo "menu_id:$menu_id,setup_menu_mechanismid: $setup_menu_mechanismid \n\nAre you sure ?[y/n]:";
            $input = rtrim(fgets(STDIN));
            $group_ids = [1,2,3];
            if(preg_match('/^(y|yes)$/i', $input)){
                foreach ($group_ids as $gid) {
                    $data = ['setup_roleid'=>$gid,'setup_menuid'=>$menu_id,'setup_menu_mechanismid'=>$setup_menu_mechanismid];
                    $exists = $this->db->where($data)
                                   ->get('setup_role_menu_mechanism')
                                   ->num_rows() > 0;

                    if($exists){
                        echo "SKIP:" .json_encode($data)."\n";
                        continue;
                    }
                    echo "INSERT: setup_role_menu_mechanism " .json_encode($data);
                    $this->db->insert('setup_role_menu_mechanism',$data);
                    // $mech_ids[] = $this->db->insert_id();
                    echo " OK\n";
                }
            }
        }
    }
    public function rgx_field($module)
    {
        $xslt = APPPATH . 'modules/'.$module.'/template/reports/output/content.xslt';
        $str  = file_get_contents($xslt);

        // preg_match_all('/<xsl\:value\-of\sselect=\"([a-zA-Z0-9]*)\"\/>.*/', $str, $re);

        // print_r($re); 

        // $xml = simplexml_load_file($xslt);
        // $tagName = 'xsl:value-of';
        // $fields = $xml->{$tagName};

        // foreach ($fields as $el) {
        //     $el = $value->attributes();
        //     print_r($el);
        // }

        // $this->_loadPackage(__DIR__ . '/../libraries/tburry/pquery');

        // $dom = pQuery::parseStr($str);
        // // $nodes = $dom->query('div');
        // $nodes = $dom->query('*[select]');

        // // print_r($nodes);
        // $fields = [];
        // foreach ($nodes as $node) {
        //     $key = $node->attr('select');
        //     if(!in_array($key,$fields)){
        //         $fields[]= $key;
        //     }
        // }

        // echo json_encode($fields);
    }
    // public function FunctionName($value='')
    // {
    //     ["no","tahun_sekarang","lampiran","tanggal_surat","ttd_nama","ttd_nip","ttd_jabatan","nama","ttl","jenis_kelamin","kewarganegaraan","agama","nik","pasport","alamat","tgl_bapl","nama_usaha","jenis_usaha","luas_bangunan","status_bangunan","jumlah_karyawan","no_perusahaan","tanggal_berdiri","lokasi","batas_utara","batas_selatan","batas_timur","sf_toko_ruko","sf_gudang","ruang_kerja_produksi","mesin_produksi","jml_kry_pria","jml_kry_wanita","jml_kry_wna","jml_kry_total","tempat_ibadah","petugas_1","petugas_2"]
    // }

    public function gen_header($table)
    {
        $this->load->helper('inflector');
        $fields = $this->db->field_data($table);
        $field_names=['nama_kel' => 'Kelurahan'];

        $dicts = [
            'date' => ['tanggal_surat'=>'Tanggal Surat'],
            'no' => 'Nomor Surat',
            'jk' => ['jenis_kelamin' => 'Jenis Kelamin'],

        ];

        $switch_prefix=[
            'ayah','ibu','cs','ci','pria','perempuan'
        ];
        $dict_keys = array_keys($dicts);

        $exclude_fields = [
            'no_kec','no_kel',
            'no_kab','no_prop',
            'id',
            'update_on',
            'create_on',
            'update_by',
            'create_by',
            'file','download','archive','syarat','ttd_nip','ttd_nama','ttd_jabatan'
        ];
        $set_ttl = 0;
        foreach ($fields as $field)
        {
            
            $f = $field->name;
            $f_cap = str_replace('tgl', 'tanggal', $f);
            
            $caption = humanize($f_cap);
            foreach ($switch_prefix as $rgx) {
                $rg = '/'.$rgx.'\_/';

                if(preg_match($rg, $f)){
                    $caption = explode(' ', $caption);
                    $caption = $caption[1] . ' ' . $caption[0];


                }
            }
            if($f=='tanggal_lahir' || $f == 'tempat_lahir'){
                if($set_ttl){
                    continue;
                }
                $field_names['ttl'] = 'Tempat/Tanggal Lahir';
                $set_ttl = 1;
            }
            
            if(in_array($f, $exclude_fields)){
                continue;
            }
            if(in_array($f, $dict_keys)){
                $caption = $dicts[$f];
                if(is_array($caption)){
                    $key = array_keys($caption);
                    $key = $key[0];
                    $caption = $caption[$key];
                    $f = $key;
                }
            }
            $caption = str_replace('Nik', 'NIK', $caption);
            $field_names[$f]= $caption;
            

        }

        // print_r($field_names);
        include_once __DIR__ . '/../template/tableHeader_array.php';
    }

    public function gen_action($table)
    {
         
        $fields = $this->db->field_data($table);
        $exclude_fields = [
            'no_kec','no_kel',
            'no_kab','no_prop',
            'id',
            'update_on',
            'create_on',
            'update_by',
            'create_by',
            'file','download','archive','syarat'
        ];

        $dropdown_fields_rgx = [
            'kewarganegaraan','agama','pekerjaan','status_perkawinan','status_pernikahan'
        ];
        $triggers=[];
        foreach ($fields as $field)
        {
            $f = $field->name;
            if(in_array($f, $exclude_fields)){
                continue;
            }
            
            $triggers[$f]='';
            $field_names[]= $f;
            
            foreach ($dropdown_fields_rgx as $rgx) {
                $rg = '/'.$rgx.'/';

                if(preg_match($rg, $f)){
                    $triggers[$f]='.trigger("change")';


                }
            }

            if(preg_match('/tanggal|tgl|date/', $f)){
                $triggers[$f]='.datepicker(\'setDate\', format_tanggal_input(data.'.$f.'))';
            }

        }

        // print_r($field_names);
        include_once __DIR__ . '/../template/action_js.php';
    }

    public function dropdown_enum($table)
    {
        $exclude_fields = ['jk'];
        $fields = $this->db->field_data($table);
        $enum_fields = [];
        foreach ($fields as $field)
        {
            $f = $field->name;
            $t = $field->type;
            if($t=='enum' && !in_array($f, $exclude_fields)){
                $enum_fields[]=$f;
            }
        }

        include_once __DIR__ . '/../template/dropdown_enum.php';
        // print_r($enum_fields);
    }
    public function gen_properties($table)
    {
        $all_fields = [];
        $pk = $this->_get_pk($table);
        $exclude_fields = [$pk,'no_kec','no_kab','no_prop','file','download','archive'];
        $exclude_add_fields = ['update_on','update_by'];
        $exclude_edit_fields = ['create_by','create_on'];
        $fields = $this->db->field_data($table);
        $add_field_names = [];
        $edit_field_names = [];
        $date_fields = [];
        foreach ($fields as $field)
        {
            $f = $field->name;
            $t = $field->type;
            if($f=='no'){
                $f = "'no'";
            }
            $all_fields[] = $f;
            if( !in_array($f, $exclude_fields)){
                if(!in_array($f, $exclude_add_fields)){
                    $add_field_names[]=$f;
                }
                if(!in_array($f, $exclude_edit_fields)){
                    $edit_field_names[]=$f;
                }
                if($t == 'date'){
                    $date_fields[]=$f;
                }
            }
        }
        include_once __DIR__ . '/../template/properties_yml.php';
    }
    public function gen_edit_twig($module)
    {
        $add_twig_path =  APPPATH . 'modules/'.$module.'/views/form/add.twig.php';
        $edit_twig_path =  APPPATH . 'modules/'.$module.'/views/form/edit.twig.php';

        $module_properties = APPPATH . 'modules/'.$module.'/config/properties.yml';
        // $template_path = APPPATH . 'modules/artisan/template/forms/';
        $p = Yaml::parse(file_get_contents($module_properties))['properties'];
        // $properties = $properties;
        // $table = $p['tableName'];
//
        $this->load->helper('inflector');
        $p = Yaml::parse(file_get_contents($module_properties))['properties'];

        if(!file_exists($add_twig_path)){
            die("FILE NOT FOUND : $add_twig_path\n");
        }

        $buffer = '';
        $fh = fopen($add_twig_path, 'r');
        while($line=fgets($fh)){
            // $buffer .= $line;
            if(preg_match('/<\s?(input|textarea)/', $line)){
                 
                $dom = pQuery::parseStr('<div>'.$line.'</div>');
                $dom2 = pQuery::parseStr('<div></div>');
                $div = $dom->query('div');
                // $div->append($line);

                $nodes = $dom->query('input,textarea');
                foreach ($nodes as $node) {
                    $name = $node->attr('name');
                    if($node->hasClass('date-picker')){
                        $node->val('{{ format_datepicker(detail.'.$name.') }}');
                        continue;
                    }
                    if($name == $p['tablePk']){
                        $node->val('{{ '.$name.' }}');

                    }else{
                        $node->val('{{ detail.'.$name.' }}');
                    }

                    // $node;
                }

                $line = $div->html();
                // echo $line;
            } 
            $buffer .= $line;
            
        }

        fclose($fh);
        file_put_contents($edit_twig_path, $buffer);
        echo "WRITE: $edit_twig_path\n";
    }

    public function gen_form($module)
    {
        $this->load->helper('inflector');
        $module_properties = APPPATH . 'modules/'.$module.'/config/properties.yml';
        $template_path = APPPATH . 'modules/artisan/template/forms/';
        $p = Yaml::parse(file_get_contents($module_properties))['properties'];
        // $properties = $properties;
        $table = $p['tableName'];

        
        

        $field_names = [];

        $fields = $this->db->field_data($table);

        // print_r($fields);

        // die();
        $exclude_fields = [
            'no_kec',
            'no_kab','no_prop',
            'id',
            'update_on',
            'create_on',
            'update_by',
            'create_by',
            'file','download','archive','syarat'
        ];
        $int_fields = [];
        $varchar_fields = [];
        $text_fields = [];
        $regular_fields = [];
        
        $dropdown_fields = [];
        $date_fields = [];
        $templates = ['date','jk','agama' ,'kewarganegaraan','lampiran','nama','nik','no_kel', 'ttl'];
        $dropdown_fields_rgx = [
            'kewarganegaraan','agama','pekerjaan','status_perkawinan','status_pernikahan'
        ];
        $triggers=[];
        foreach ($fields as $field)
        {
            $f = $field->name;
            $t = $field->type;


            if(in_array($f, $exclude_fields)){
                continue;
            }
            $field_names[]= $f;
            
            if($f=='tanggal_lahir' || $f == 'tempat_lahir'){
                if($set_ttl){
                    continue;
                }
                $field_names[] = 'ttl';
                $set_ttl = 1;
                continue;
            }
            $triggers[$f]='';
            
            $break = false;
            foreach ($dropdown_fields_rgx as $rgx) {
                $rg = '/'.$rgx.'/';

                if(preg_match($rg, $f)){
                    $dropdown_fields[]=$f;
                    $break = true;
                    break;
                }
            }
            if($break){
                break;
            }

            if(preg_match('/(tanggal|tgl|date)/', $f) || $t == 'date' || $t == 'datetime'){
                $date_fields[]=$f;
                continue;
            }
            if($t=='varchar'){
                $varchar_fields[]=$f;
                continue;
            }
            if($t=='text'){
                $text_fields[]=$f;
                continue;
            }
            if($t=='int'||'decimal'){
                $int_fields[]=$f;
                continue;
            }

        }

        // print_r($field_names);
        include_once __DIR__ . '/../template/form_twig.php';
    }

    public function format_uang()
    {
        $input = 1.200;

        echo format_uang($input);
    }


    private function _map_row_xlsx($r){
        //RETRIEVE AGAMA
        $agama_list = $this->db->get('agama_master')->result_array();
        $agama_list = array_kv($agama_list,'id','deskripsi');

        $dt_now = date('Y-m-d H:i:s',time());
        return [
            'create_on' => $dt_now,
            // 'update_on' => $dt_now,
            'create_by' => 1,
            'no_kk'     => ''.$r[2],
            'nik'       => ''.$r[3],
            'nama'      => $r[4],
            'jk'        => strtolower($r[5]),
            'tmpt_lahir'=> $r[6],
            'tgl_lahir' => date_format_mysql($r[7]),
            'no_akta_lahir' => $r[8],
            'gdr' => $r[9],
            'agama' => $agama_list[$r[10]],
            'status' => $r[11],
            'shdk' => $r[12],
            'ppdk_akhir' => $r[13],
            'pekerjaan' => $r[14],
            'nama_ibu' => $r[15],
            'nama_ayah' => $r[16],
            'alamat' => $r[17],
            'nama_kep_kel'=>$r[16],
            'no_prop' => config_item('default_no_prop'),
            'no_kab' => config_item('default_no_kab'),
            'no_kec' => config_item('default_no_kec'),
            'no_kel' => config_item('default_no_kel'),
            'nama_prop' => config_item('default_nama_prop'),
            'nama_kab' => config_item('default_nama_kab'),
            'nama_kec' => config_item('default_nama_kec'),
            'nama_kel' => config_item('default_nama_kel'),
        ];  
    }
    public function import_data_penduduk()
    {
        die();
        $lib_path = __DIR__ .'/../libraries/spreadsheet-reader-master/';
        require($lib_path . 'SpreadsheetReader.php');

        $xlsx_path = FCPATH .'/docs/data_penduduk_kel_babakan.xlsx';
        $index = 0;
        if(file_exists($xlsx_path)){
            $reader = new SpreadsheetReader($xlsx_path);
            foreach ($reader as $row){
                $index += 1;
                // print_r($row);
                if($index <= 4){
                    continue;
                }
                $row_map = $this->_map_row_xlsx($row);
                $this->db->insert('master_penduduk',$row_map);

                // if($index >10){
                //     break;
                // }
                echo "."."";
                
            }
        }
        else{
            die('FILE NOT FOUND:' . $xlsx_path . "\n");
        }
    }

    public function import_peg()
    {
        // $rows = $this->db->get('r_pegawai')->result_array();
        // $dump = Yaml::dump($rows, 4, 4);

        $config_path = __DIR__. '/../config/r_pegawai.yml';

        $buffer = file_get_contents($config_path);
        $rows   = Yaml::parse($buffer);

        foreach($rows as $r){
            $this->db->insert('r_pegawai',$r);
            echo ".";
        }
        // echo "WRITE $config_path\n";
    }

    public function rename_class()
    {
        /*
        
        */
        $module_path = APPPATH . 'modules/';
        $results=[];
        $files = $this->_getDirContents($module_path, $results,'php');
        $regex = '/template/';
        foreach($results as $index => $path){
            
            if(!preg_match($regex, $path) || preg_match('/artisan/', $path)){
                //echo $path."\n";
                unset($results[$index]);
                continue;
            }
            $dirname = dirname($path);
            $filename = basename($path);

            $new_path = $dirname . '/' . ucfirst($filename);
            $new_path = str_replace('\\', '/', $new_path);    
            $old_path = str_replace('\\', '/', $path); 
            echo "\nRENAME $old_path\n\t --> $new_path ...";
            $status = rename($old_path, $new_path);
            echo '[' . $status?'OK':'FAIL' . ']'."\n\n";
            echo "\nMODIFY $new_path:\n";
            $buffer = file_get_contents($new_path) . '//' . $new_path . "\n";
            file_put_contents($new_path, $buffer);
        }
    }

    public function fix_chmod()
    {
        /*
        
        */
        $module_path = APPPATH . 'modules/';
        $results=[];
        $files = $this->_getDirContents($module_path, $results,'docx');
        
        foreach($results as $index => $path){
            
            
            $dirname = dirname($path);

            $status = system("chmod -R 0777 ".$dirname);
 
            echo "\nCHMOD 0777". $dirname . ' ' . ($status?'[OK]':'[FAIL]') . "\n";
            
        }

        $others = [
            'public/assets/uploads/files',
            'app/cache/twig',
            'app/cache/query',
            'app/logs'
        ];

        foreach($others as $index => $path){
            
            
            $dirname = realpath(FCPATH.$path);
            $status = system("chmod -R 0777 ".$dirname);
 
            echo "\nCHMOD 0777". $dirname . ' ' . ($status?'[OK]':'[FAIL]') . "\n";
        }
    }
    public function cp_fmodule($name,$src="f_126")
    {
        if(empty($name)){
            die('bin/artisan cp:fmodule <name>');
        }
        $split_name = explode('_', $name);
        $split_src = explode('_', $src);
        
        $s_cls = ucfirst($src);
        $s_prefix = $split_src[0];
        $s_number = $split_src[1];
        $s_number_with_dot = preg_replace('/^(\d)/', '$1.', $s_number);

        
        
        $cls = ucfirst($name);
        $prefix = $split_name[0];
        $number = $split_name[1];
        $number_with_dot = preg_replace('/^(\d)/', '$1.', $number);

        if(count($split_name) < 2 || count($split_name) < 2){
            die('suplied argumen' . " $name not valid");
        }
        echo "src: {$src}\n";
        echo json_encode(['prefix'=>$s_prefix,'number'=>$s_number,'number_with_dot'=>$s_number_with_dot]);
        echo "\ntar: {$name}\n\n";
        echo json_encode(['prefix'=>$prefix,'number'=>$number,'number_with_dot'=>$number_with_dot]);
        echo "\nAre you sure ?[y/n]:";

        $input = rtrim(fgets(STDIN));
        if(!preg_match('/^(y|yes)$/i', $input)){
            die('OP: Canceled.'."\n");
        }
        $base_path = APPPATH . 'modules/pindah_datang/';

        $s_css_path = $base_path . 'assets/custom/css/'.$src.'.css';
        $s_js_path  = $base_path . 'assets/custom/js/'.$src.'.js';

        $t_css_path = $base_path . 'assets/custom/css/'.$name.'.css';
        $t_js_path  = $base_path . 'assets/custom/js/'.$name.'.js';

        $s_config_path  = $base_path . 'config/'.$src.'.yml';
        $t_config_path  = $base_path . 'config/'.$name.'.yml';

        $s_lib_path  = $base_path . 'libraries/'.$s_cls.'.php';
        $t_lib_path  = $base_path . 'libraries/'.$cls.'.php';

        $cp_s = [$s_css_path,$s_js_path,$s_config_path,$s_lib_path];
        $cp_t = [$t_css_path,$t_js_path,$t_config_path,$t_lib_path];

        foreach ($cp_s as $index => $s) {
            $t = $cp_t[$index];
            $status = copy($s, $t);
            echo "CP: ".$s. "-->\n\t $t" . "[".($status?'OK':'fail')."]\n";
        }
        if(!file_exists($t_lib_path)){
            die("FAIL: $t_lib_path : NOT FOUND\n");
        }
        // change_name
        $t_lib_buffer = "";
        $t_lib_h = fopen($t_lib_path, "r");
        echo "Fix Line on {$t_lib_path} \n";
        while (!feof ($t_lib_h)) 
        { 
            $line = fgets($t_lib_h); 
            // $line = str_replace('f_126', $name, $line);
            $line = str_replace($s_number, $number, $line);
            $line = str_replace($s_number_with_dot, $number_with_dot, $line);
            // $line = str_replace('F_126', ucfirst($name), $line);

            $t_lib_buffer .= $line;
        }

        file_put_contents($t_lib_path, $t_lib_buffer);
        fclose($t_lib_h);
        $s_table_name = 't_pindah_wni_' . $s_number;
        $t_table_name = 't_pindah_wni_' . $number;
        $this->load->dbforge();
        echo "DROP table {$t_table_name} if exists\n";

        $this->dbforge->drop_table($t_table_name,1);
        echo "DUPLICATE table {$s_table_name} to {$t_table_name}\n";
        
        $this->db->query("CREATE TABLE {$t_table_name} LIKE $s_table_name");
        echo "DUPLICATE table contents";
        $query = $this->db->get($s_table_name);
        foreach ($query->result() as $row) {
              $this->db->insert($t_table_name,$row);
              echo ".";
        }
        echo " done.\n";
        die('OP: Success !');
    }

    public function mp_stripal()
    {
        $data_penduduk = $this->db->select('id pk,alamat,rt,rw')->get('master_penduduk')->result_array();
        foreach ($data_penduduk as &$dp) {
            $pk = $dp['pk'];
            unset($dp['pk']);
            $alamat_split = explode(';',$dp['alamat']);
            if(count($alamat_split)>2){
                $dp['alamat'] = $alamat_split[0];
                $match = [];
                preg_match('/RT\s+:\s+(\d+)/',$alamat_split[1], $match);

                $dp['rt'] = $match[1];

                preg_match('/RW\s+:\s+(\d+)/',$alamat_split[2], $match);

                $dp['rw'] = $match[1];
                echo json_encode($dp) . "\n";

                $this->db->where('id',$pk)->update('master_penduduk',$dp);
            }
            
        }

    }
    public function extract_f($suf)
    {
        echo extract_f($suf);
    }
}
