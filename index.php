<?php
/**
 * Created by PhpStorm.
 * User: khami
 * Date: 24.09.2017
 * Time: 12:34
 */

include 'config.php';

function __autoload($file){
    if (file_exists('controllers/' . $file.'.php')) {
        require_once 'controllers/' . $file.'.php';
    }else{
        require_once 'models/' . $file.'.php';
    }
}

if (isset($_GET['option'])) {
    $class = strip_tags($_GET['option']);
    switch ($class) {
        case 'add':
            $init = new View();
            break;
        default:
            $init = new Index();
    }
}else{
    $init = new Index();
}

echo $init->get_body();