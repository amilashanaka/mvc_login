<?php

class HomeModel{

    public $db;

    public function checkUserLogin($username,$password){

        $querry="select count(*) FROM user_tbl  where username='{$username}' AND password='{$password}'";
        $stmt=$this->db->prepare($querry)->execute();
       
        return $stmt;

    }


}