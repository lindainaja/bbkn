<?php

function module_url($path)
{
	return site_url('app/modules/'.$path);
}
function CI()
{
    static $CI;
    isset($CI) || $CI = CI_Controller::get_instance();

    return $CI;
}