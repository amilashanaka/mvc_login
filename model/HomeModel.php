<?php
class HomeModel{

    public $db;

    public function checkUserLogin($username,$password){

        $querry="SElECT * FROM users  WHERE username='{$username}' AND password='{$password}'";
        $stmt=$this->db->prepare($querry)->execute();
        return $stmt;

    }


}