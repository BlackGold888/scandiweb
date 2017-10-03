<?php
/**
 * Created by PhpStorm.
 * User: khami
 * Date: 24.09.2017
 * Time: 12:50
 */

class View extends AController
{
    function get_body()
    {
        $db = new DataBase(HOST,USER,PASS,DB);
        $text = $db->show_all();

        return $this->render('add',array('title' => 'Index Page',
            'text'=>$text));
    }

    public function add_disc($sku,$name,$price,$size){
        $test = 1;
        $db = new DataBase(HOST,USER,PASS,DB);
        $res = $db->add_product($sku,$name,$price,$test,$size,$test,$test,$test,$test);
        return $res;
    }
    public function add_book($sku,$name,$price,$weight){
        $test = 2;
        $db = new DataBase(HOST,USER,PASS,DB);
        $res = $db->add_product($sku,$name,$price,$test,$test,$weight,$test,$test,$test);
        return $res;
    }
    public function add_furniture($sku,$name,$price,$height,$width,$length){
        $test = 3;
        $db = new DataBase(HOST,USER,PASS,DB);
        $res = $db->add_product($sku,$name,$price,$test,$test,$test,$height,$width,$length);
        return $res;
    }

    public function delete_select_product($var){
        $db = new DataBase(HOST,USER,PASS,DB);
        $res = $db->delete_select_product_db($var);
        return $res;
    }


}