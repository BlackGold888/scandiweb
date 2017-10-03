<?php
/**
 * Created by PhpStorm.
 * User: khami
 * Date: 24.09.2017
 * Time: 17:14
 */

class DataBase
{
    public $db;
    public function __construct($host,$user,$pass,$db)
    {
        $this->db = mysqli_connect($host,$user,$pass);
        if (!$this->db) {
            exit('No connection with data base!');
        }
        if (!mysqli_select_db($this->db, $db)) {
            exit('No DB');
        }

        return $this->db;
    }
    public function show_all(){
        $sql = "SELECT * FROM product";
        $res = mysqli_query($this->db, $sql);
        if (!$res) {
            return FALSE;
        }
        for ($i = 0; $i < mysqli_num_rows($res); $i++) {
            $row[] = mysqli_fetch_array($res,MYSQLI_ASSOC);
        }
        return $row;
    }
    public function add_product($sku,$name,$price,$type,$size,$weight,$height,$width,$length){
        $check = "SELECT * FROM product WHERE sku='$sku'";
        $res = mysqli_query($this->db, $check);
        $num = mysqli_num_rows($res);
        if ($num == 0) {
            $sql = "INSERT INTO `product` (`id`, `sku`, `name`, `price`, `type`, `size`, `weight`, `height`, `width`, `length`) VALUES (NULL, '$sku','$name','$price','$type','$size','$weight','$height','$width','$length')";
            $add = mysqli_query($this->db, $sql);
            if ($add) {
                return "<h4 style='color: green;'>Your product added</h4>";
            }

        }else{
            return "<h4 style='color: red;'>Sku name is EXIST</h4>";
        }


//        $check = "SELECT sku FROM product WHERE EXISTS (SELECT sku FROM product WHERE sku = $sku)";
//        $sql = "INSERT INTO `product` (`id`, `sku`, `name`, `price`, `type`, `size`, `weight`, `height`, `width`, `length`) VALUES (NULL, '$sku','$name','$price','$type','$size','$weight','$height','$width','$length')";
//        if (mysqli_query($this->db, $check) == 1) {
//            $res =  mysqli_query($this->db, $sql);
//            if (!$res) {
//                echo "ERROR";
//            }
//            return "Your Product Added";
//        }else{
//            return "SKU NAME IS EXISTS";
//        }





//
//        $sql = "INSERT INTO `product` (`id`, `sku`, `name`, `price`, `type`, `size`, `weight`, `height`, `width`, `length`) VALUES (NULL, '$sku','$name','$price','$type','$size','$weight','$height','$width','$length')";
//      $res =  mysqli_query($this->db, $sql);
//        if (!$res) {
//            echo "ERROR";
//        }
    }
    public function delete_select_product_db($delete){
//        foreach ($delete as $item) {
//            $sql = "DELETE FROM `product` WHERE `product`.`id` = $delete";
//            $res =  mysqli_query($this->db, $sql);
//        }
        array_shift($delete);
        foreach ($delete as $key => $item) {
            $sql = "DELETE FROM `product` WHERE `product`.`id` = $item";
            $res =  mysqli_query($this->db, $sql);

        }

    }


}