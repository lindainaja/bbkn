<?php
if(!class_exists('UploadHandler')){
    class UploadHandler
    {
        private $options;
        
        function __construct($options=null) {
            $this->options = array(
                'script_url' => $this->getFullUrl().'/'.basename(__FILE__),
                'upload_dir' => dirname(__FILE__).'/files/',
                'upload_url' => $this->getFullUrl().'/files/',
                'param_name' => 'files',
                // The php.ini settings upload_max_filesize and post_max_size
                // take precedence over the following max_file_size setting:
                'max_file_size' => null,
                'min_file_size' => 1,
                'accept_file_types' => '/.+$/i',
                'max_number_of_files' => null,
                // Set the following option to false to enable non-multipart uploads:
                'discard_aborted_uploads' => true,
                // Set to true to rotate images based on EXIF meta data, if available:
                'orient_image' => false,
                'image_versions' => array(
                    // Uncomment the following version to restrict the size of
                    // uploaded images. You can also add additional versions with
                    // their own upload directories:
                    /*
                    'large' => array(
                        'upload_dir' => dirname(__FILE__).'/files/',
                        'upload_url' => dirname($_SERVER['PHP_SELF']).'/files/',
                        'max_width' => 1920,
                        'max_height' => 1200
                    ),
                    
                    'thumbnail' => array(
                        'upload_dir' => dirname(__FILE__).'/thumbnails/',
                        'upload_url' => $this->getFullUrl().'/thumbnails/',
                        'max_width' => 80,
                        'max_height' => 80
                    )
                    */
                )
            );
            if ($options) {
                // Or else for PHP >= 5.3.0 use: $this->options = array_replace_recursive($this->options, $options);
                foreach($options as $option_name => $option)
                {
                	$this->options[$option_name] = $option;
                }
            }
        }

        function getFullUrl() {
          	return
            		(isset($_SERVER['HTTPS']) ? 'https://' : 'http://').
            		(isset($_SERVER['REMOTE_USER']) ? $_SERVER['REMOTE_USER'].'@' : '').
            		(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : ($_SERVER['SERVER_NAME'].
            		(isset($_SERVER['HTTPS']) && $_SERVER['SERVER_PORT'] === 443 ||
            		$_SERVER['SERVER_PORT'] === 80 ? '' : ':'.$_SERVER['SERVER_PORT']))).
            		substr($_SERVER['SCRIPT_NAME'],0, strrpos($_SERVER['SCRIPT_NAME'], '/'));
        }
        
        private function get_file_object($file_name) {
            $file_path = $this->options['upload_dir'].$file_name;
            if (is_file($file_path) && $file_name[0] !== '.') {
                $file = new stdClass();
                $file->name = $file_name;
                $file->size = filesize($file_path);
                $file->url = $this->options['upload_url'].rawurlencode($file->name);
                foreach($this->options['image_versions'] as $version => $options) {
                    if (is_file($options['upload_dir'].$file_name)) {
                        $file->{$version.'_url'} = $options['upload_url']
                            .rawurlencode($file->name);
                    }
                }
                $file->delete_url = $this->options['script_url']
                    .'?file='.rawurlencode($file->name);
                $file->delete_type = 'DELETE';
                return $file;
            }
            return null;
        }
        
        private function get_file_objects() {
            return array_values(array_filter(array_map(
                array($this, 'get_file_object'),
                scandir($this->options['upload_dir'])
            )));
        }

        private function create_scaled_image($file_name, $options) {
            $file_path = $this->options['upload_dir'].$file_name;
            $new_file_path = $options['upload_dir'].$file_name;
            list($img_width, $img_height) = @getimagesize($file_path);
            if (!$img_width || !$img_height) {
                return false;
            }
            $scale = min(
                $options['max_width'] / $img_width,
                $options['max_height'] / $img_height
            );
            if ($scale > 1) {
                $scale = 1;
            }
            $new_width = $img_width * $scale;
            $new_height = $img_height * $scale;
            $new_img = @imagecreatetruecolor($new_width, $new_height);
            switch (strtolower(substr(strrchr($file_name, '.'), 1))) {
                case 'jpg':
                case 'jpeg':
                    $src_img = @imagecreatefromjpeg($file_path);
                    $write_image = 'imagejpeg';
                    break;
                case 'gif':
                    @imagecolortransparent($new_img, @imagecolorallocate($new_img, 0, 0, 0));
                    $src_img = @imagecreatefromgif($file_path);
                    $write_image = 'imagegif';
                    break;
                case 'png':
                    @imagecolortransparent($new_img, @imagecolorallocate($new_img, 0, 0, 0));
                    @imagealphablending($new_img, false);
                    @imagesavealpha($new_img, true);
                    $src_img = @imagecreatefrompng($file_path);
                    $write_image = 'imagepng';
                    break;
                default:
                    $src_img = $image_method = null;
            }
            $success = $src_img && @imagecopyresampled(
                $new_img,
                $src_img,
                0, 0, 0, 0,
                $new_width,
                $new_height,
                $img_width,
                $img_height
            ) && $write_image($new_img, $new_file_path);
            // Free up memory (imagedestroy does not delete files):
            @imagedestroy($src_img);
            @imagedestroy($new_img);
            return $success;
        }
        
        private function has_error($uploaded_file, $file, $error) {
            if ($error) {
                return $error;
            }
            if (!preg_match($this->options['accept_file_types'], $file->name)) {
                return 'acceptFileTypes';
            }
            if ($uploaded_file && is_uploaded_file($uploaded_file)) {
                $file_size = filesize($uploaded_file);
            } else {
                $file_size = $_SERVER['CONTENT_LENGTH'];
            }
             
            if ($this->options['max_file_size'] && (
                    $file_size > $this->options['max_file_size'] ||
                    $file->size > $this->options['max_file_size'])
                ) {
                return 'maxFileSize';
            }
            if ($this->options['min_file_size'] &&
                $file_size < $this->options['min_file_size']) {
                return 'minFileSize';
            }
            if (is_int($this->options['max_number_of_files']) && (
                    count($this->get_file_objects()) >= $this->options['max_number_of_files'])
                ) {
                return 'maxNumberOfFiles';
            }
            return $error;
        }
        
        private function trim_file_name($name, $type) {
            // Remove path information and dots around the filename, to prevent uploading
            // into different directories or replacing hidden system files.
            // Also remove control characters and spaces (\x00..\x20) around the filename:
            $file_name = trim(basename(stripslashes($name)), ".\x00..\x20");
            // Add missing file extension for known image types:
            if (strpos($file_name, '.') === false &&
                preg_match('/^image\/(gif|jpe?g|png)/', $type, $matches)) {
                $file_name .= '.'.$matches[1];
            }

            //Ensure that we don't have disallowed characters and add a unique id just to ensure that the file name will be unique
            $file_name = substr(uniqid(),-5).'-'.preg_replace("/([^a-zA-Z0-9\.\-\_]+?){1}/i", '-', $file_name);

            return $file_name;
        }

        private function orient_image($file_path) {
          	$exif = exif_read_data($file_path);
          	$orientation = intval(@$exif['Orientation']);
          	if (!in_array($orientation, array(3, 6, 8))) { 
          	    return false;
          	}
          	$image = @imagecreatefromjpeg($file_path);
          	switch ($orientation) {
            	  case 3:
              	    $image = @imagerotate($image, 180, 0);
              	    break;
            	  case 6:
              	    $image = @imagerotate($image, 270, 0);
              	    break;
            	  case 8:
              	    $image = @imagerotate($image, 90, 0);
              	    break;
              	default:
              	    return false;
          	}
          	$success = imagejpeg($image, $file_path);
          	// Free up memory (imagedestroy does not delete files):
          	@imagedestroy($image);
          	return $success;
        }
        
        private function handle_file_upload($uploaded_file, $name, $size, $type, $error) {
            $file = new stdClass();
            $file->name = $this->trim_file_name($name, $type);
            $file->size = intval($size);
            $file->type = $type;
            $error = $this->has_error($uploaded_file, $file, $error);
            if (!$error && $file->name) {
                $file_path = $this->options['upload_dir'].$file->name;
                $append_file = !$this->options['discard_aborted_uploads'] &&
                    is_file($file_path) && $file->size > filesize($file_path);
                clearstatcache();
                if ($uploaded_file && is_uploaded_file($uploaded_file)) {
                    // multipart/formdata uploads (POST method uploads)
                    if ($append_file) {
                        file_put_contents(
                            $file_path,
                            fopen($uploaded_file, 'r'),
                            FILE_APPEND
                        );
                    } else {
                        move_uploaded_file($uploaded_file, $file_path);
                    }
                } else {
                    // Non-multipart uploads (PUT method support)
                    file_put_contents(
                        $file_path,
                        fopen('php://input', 'r'),
                        $append_file ? FILE_APPEND : 0
                    );
                }
                $file_size = filesize($file_path);
                if ($file_size === $file->size) {
                		if ($this->options['orient_image']) {
                		    $this->orient_image($file_path);
                		}
                    $file->url = $this->options['upload_url'].rawurlencode($file->name);
                    foreach($this->options['image_versions'] as $version => $options) {
                        if ($this->create_scaled_image($file->name, $options)) {
                            $file->{$version.'_url'} = $options['upload_url']
                                .rawurlencode($file->name);
                        }
                    }
                } else if ($this->options['discard_aborted_uploads']) {
                    unlink($file_path);
                    $file->error = 'abort';
                }
                $file->size = $file_size;
                $file->delete_url = $this->options['script_url']
                    .'?file='.rawurlencode($file->name);
                $file->delete_type = 'DELETE';
            } else {
                $file->error = $error;
            }
            return $file;
        }
        
        public function get() {
            $file_name = isset($_REQUEST['file']) ?
                basename(stripslashes($_REQUEST['file'])) : null;
            if ($file_name) {
                $info = $this->get_file_object($file_name);
            } else {
                $info = $this->get_file_objects();
            }
            header('Content-type: application/json');
            echo json_encode($info);
        }
        
        public function post() {
            if (isset($_REQUEST['_method']) && $_REQUEST['_method'] === 'DELETE') {
                return $this->delete();
            }
            $upload = isset($_FILES[$this->options['param_name']]) ?
                $_FILES[$this->options['param_name']] : null;
            $info = array();
            if ($upload && is_array($upload['tmp_name'])) {
                foreach ($upload['tmp_name'] as $index => $value) {
                    $info[] = $this->handle_file_upload(
                        $upload['tmp_name'][$index],
                        isset($_SERVER['HTTP_X_FILE_NAME']) ?
                            $_SERVER['HTTP_X_FILE_NAME'] : $upload['name'][$index],
                        isset($_SERVER['HTTP_X_FILE_SIZE']) ?
                            $_SERVER['HTTP_X_FILE_SIZE'] : $upload['size'][$index],
                        isset($_SERVER['HTTP_X_FILE_TYPE']) ?
                            $_SERVER['HTTP_X_FILE_TYPE'] : $upload['type'][$index],
                        $upload['error'][$index]
                    );
                }
            } elseif ($upload || isset($_SERVER['HTTP_X_FILE_NAME'])) {
                $info[] = $this->handle_file_upload(
                    isset($upload['tmp_name']) ? $upload['tmp_name'] : null,
                    isset($_SERVER['HTTP_X_FILE_NAME']) ?
                        $_SERVER['HTTP_X_FILE_NAME'] : $upload['name'],
                    isset($_SERVER['HTTP_X_FILE_SIZE']) ?
                        $_SERVER['HTTP_X_FILE_SIZE'] : $upload['size'],
                    isset($_SERVER['HTTP_X_FILE_TYPE']) ?
                        $_SERVER['HTTP_X_FILE_TYPE'] : $upload['type'],
                    isset($upload['error']) ? $upload['error'] : null
                );
            }
            header('Vary: Accept');
            
            $redirect = isset($_REQUEST['redirect']) ?
                stripslashes($_REQUEST['redirect']) : null;
            if ($redirect) {
                header('Location: '.sprintf($redirect, rawurlencode($json)));
                return;
            }
            if (isset($_SERVER['HTTP_ACCEPT']) &&
                (strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false)) {
                header('Content-type: application/json');
            } else {
                header('Content-type: text/plain');
            }
            return $info;
        }
        
        public function delete() {
            $file_name = isset($_REQUEST['file']) ?
                basename(stripslashes($_REQUEST['file'])) : null;
            $file_path = $this->options['upload_dir'].$file_name;
            $success = is_file($file_path) && $file_name[0] !== '.' && unlink($file_path);
            if ($success) {
                foreach($this->options['image_versions'] as $version => $options) {
                    $file = $options['upload_dir'].$file_name;
                    if (is_file($file)) {
                        unlink($file);
                    }
                }
            }
            header('Content-type: application/json');
            echo json_encode($success);
        }

    }
}
function convert_bytes_ui_to_bytes($bytes_ui)
{
	$bytes_ui = str_replace(' ','',$bytes_ui);
	if(strstr($bytes_ui,'MB'))
		$bytes = (int)(str_replace('MB','',$bytes_ui))*1024*1024;
	elseif(strstr($bytes_ui,'KB'))
		$bytes = (int)(str_replace('KB','',$bytes_ui))*1024;
	elseif(strstr($bytes_ui,'B'))
		$bytes = (int)(str_replace('B','',$bytes_ui));
	else 
		$bytes = (int)($bytes_ui);
		
	return $bytes;
}
// Notes : Please Place jqueryui.js at the top / first place before your scripts 
function load_file_uploader_assets(){
	$assets = array(
		'css' => array(
            // ADD PrettyPhoto
			'/../prettyPhoto/css/prettyPhoto.css',
			'/jquery_plugins/file_upload/file-uploader.css',
			'/jquery_plugins/file_upload/jquery.fileupload-ui.css',
			'/jquery_plugins/file_upload/fileuploader.css'),
		'js' => array(
            '/../prettyPhoto/js/jquery.prettyPhoto.js',
			'/jquery_plugins/tmpl.min.js',
			'/jquery_plugins/load-image.min.js',
			'/jquery_plugins/jquery.iframe-transport.js',
			'/jquery_plugins/jquery.fileupload.js',
			'/jquery_plugins/config/jquery.fileupload.config.js')
	);

	foreach ($assets['css'] as $file) {
		echo '<link rel="stylesheet" href="'.base_url('public/assets/css'.$file).'"/>'."\n";
	}
	foreach ($assets['js'] as $file) {
		echo '<script type="text/javascript" src="'.base_url('public/assets/js'.$file).'">'."</script>\n"; }
}
function file_uploader($name, $value, $attribute,$uploadUrl,$deleteUrl,$allowedFiles="jpeg|jpg|png", $maxFileSize="20MB",$is_Image='auto')
{
    // $ci =& get_instance();
	// $uploadUrl = 'doUpload';
	// $deleteUrl = 'doDelete';
	$uploadPath = config_item('web_upload_path');

	$unique = 'file_upload_'.$name;
	
	// $ci = &get_instance();
	// $ci->config->load('grocery_crud');		
	
	$allowed_files = $allowedFiles;
	$allowed_files_ui = '.'.str_replace('|',',.',$allowed_files);
	$max_file_size_ui = $maxFileSize;
	$max_file_size_bytes = convert_bytes_ui_to_bytes($max_file_size_ui);
	
	$_inline_js = '
		var upload_info_'.$unique.' = { 
			accepted_file_types: /(\\.|\\/)('.$allowed_files.')$/i, 
			accepted_file_types_ui : "'.$allowed_files_ui.'", 
			max_file_size: '.$max_file_size_bytes.', 
			max_file_size_ui: "'.$max_file_size_ui.'" 
		};
			
		var string_upload_file 	= "Unggah File";
		var string_delete_file 	= "Hapus File";
		var string_progress 			= "Memuat";
		var error_on_uploading 			= "Gagal mengunggah";
		var message_prompt_delete_file 	= "Apakah anda yakin ingin menghapus file ini?";
		
		var error_max_number_of_files 	= "Jumlah file maximal melebihi batasan yang ditentukan";
		var error_accept_file_types 	= "Jenis file tidak diperbolehkan";
		var error_max_file_size 		= "Ukuran file terlalu besar";
		var error_min_file_size 		= "Ukuran file minimimal";				
	';		
	
	
	
	$uploader_display_none 	= empty($value) ? "" : "display:none;";
	$file_display_none  	= empty($value) ?  "display:none;" : "";
	
	$input = '<span class="fileinput-button qq-upload-button" id="upload-button-'.$unique.'" style="'.$uploader_display_none.'">
		<span>'."Upload File".'</span>
		<input type="file" name="'.$unique.'" class="gc-file-upload" rel="'.$uploadUrl.'" id="'.$unique.'">
		<input class="hidden-upload-input" type="hidden" name="'.$name.'" value="'.$value.'" rel="'.$unique.'" />
	</span>';
	
    $cleanFilename = preg_replace('/(.*?\-)/', '', $value);
    echo $cleanFilename;

    // IS IMAGE
    $isImage = false;

    if( preg_match('/\.(jpg|jpeg|png|gif)(?:[\?\#].*)?$/i', $cleanFilename, $matches) ) {
        // matching file extensions are in $matches[1]
        $isImage = true;
    }
	
    if($is_Image){
        $isImage = true;
    }
	$input .= "<div id='uploader_$unique' rel='$unique' class='grocery-crud-uploader' style='$uploader_display_none'></div>";
	$input .= "<div id='success_$unique' class='upload-success-url' style='$file_display_none padding-top:7px;'>";
	$input .= "		<a ".($isImage?'rel="prettyPhoto"':'')." href='".$uploadPath.$value."' class='open-file' target='_blank' id='file_$unique'>".$cleanFilename."</a> ";
	$input .= "		<a href='javascript:void(0)' id='delete_$unique' class='delete-anchor'>".'Hapus'."</a> ";
	$input .= "</div><div style='clear:both'></div>";
	$input .= "<div id='loading-$unique' style='display:none'><span id='upload-state-message-$unique'></span> <span class='qq-upload-spinner'></span> <span id='progress-$unique'></span></div>";
	$input .= "<div style='display:none'><a href='".$uploadUrl.'/'.$name."' id='url_$unique'></a></div>";
	$input .= "<div style='display:none'><a href='".$deleteUrl.'/'.$name."' id='delete_url_$unique' rel='$value' ></a></div>";
	echo "<script type='text/javascript'>".$_inline_js."</script>\n";
	load_file_uploader_assets();

    if($isImage){
        echo '<script>$("a[rel=prettyPhoto]").prettyPhoto({social_tools:""});</script>';
    }
	
	return $input;
}