<?php
/**
 * Created by PhpStorm.
 * User: khami
 * Date: 24.09.2017
 * Time: 13:05
 */

abstract class AController
{
    abstract function get_body();
    protected function render($file,$params){
        extract($params);
        ob_start();
        include("views/$file.php");
        return ob_get_clean();
    }
}