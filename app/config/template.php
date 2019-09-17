<?php

$config = ['ci_version'=>'3.1.9'];
$template = [
	'active_template' => 'default'
];

$template['default']['template'] = 'template';
$template['default']['regions'] = array(
   'header',
   'content',
   'footer',
);
$template['default']['parser'] = 'parser';
$template['default']['parser_method'] = 'parse';
$template['default']['parse_template'] = FALSE;


$template['login']['template'] = 'template_login';
$template['login']['regions'] = array(
   'header',
   'content',
   'footer',
);
$template['login']['parser'] = 'parser';
$template['login']['parser_method'] = 'parse';
$template['login']['parse_template'] = FALSE;