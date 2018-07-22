<?php
include_once 'helper.php';
if (config('site', 'enable')) {
    config('view', 'view_path', 'views/default');
    view('index');
}else {
    include_once 'views/close.blade.php';
}