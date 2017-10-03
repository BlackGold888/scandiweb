<?php
/**
 * Created by PhpStorm.
 * User: khami
 * Date: 24.09.2017
 * Time: 12:49
 */

class Index extends AController
{
    function get_body()
    {
        $db = new DataBase(HOST,USER,PASS,DB);
        $text = $db->show_all();

        return $this->render('index',array('title' => 'Index Page',
            'text'=>$text));
    }

    public function __construct()
    {
        //echo __CLASS__;
    }
}