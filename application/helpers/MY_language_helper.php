<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

function lang()
{
    $CI =& get_instance();
    $args = func_get_args();
    $line = array_shift($args);
    $lang = $CI->lang->line($line);

    return vsprintf($lang, $args);
}

function str_replace_first($search_for, $replace_with, $in)
{
    $pos = strpos($in, $search_for);
    if($pos === false)
    {
        return $in;
    }
    else
    {
        return substr($in, 0, $pos) . $replace_with . substr($in, $pos + strlen($search_for), strlen($in));
    }
}

function get_lang()
{
    $CI =& get_instance();
    return $CI->lang->lang();
}

/* End of file MY_language_helper.php */
/* Location: ./application/helpers/MY_language_helper */
