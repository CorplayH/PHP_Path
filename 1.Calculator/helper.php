<?php
/**
 * 1.Configuration
 * @param $file string
 * @param $name string
 * @param null/string $value
 * @return mixed
 */

function config ($file, $name, $value = null){
    static $cache = [];
    if ( ! isset($cache[$file])){
        $cache[$file] = include 'config/'.$file.'.php';
    }
    if ( ! is_null($value)){
        $cache[$file][$name] = $value;
    }else{
        return $cache[$file][$name];
    }
}

/**
 * 2.加载模版
 * User: Will
 * Date: 20/07/18
 * Time: 08:24
 */
function view ($name, $file = []){
    $file = config('view','view_path').'/'.$name.'.blade.php';
    include $file;
}
