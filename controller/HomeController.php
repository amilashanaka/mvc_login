<?php
session_start();

class HomeController{
    public $model;


    public function indexAction(){

        if(isset($_POST['login_submit'])){

            $username = $_POST['username'];
            $password = $_POST['password'];
            $checkUserLogin = $this->model->checkUserLogin($username, $password);
           
            if($checkUserLogin==1){
                $_SESSION['userLogin']=1;
            }
        }

        $this->routeManager();

    

    }

    public function routeManager(){

        if(isset($_SESSION['userLogin'])){

            return require_once('view/dashboard.php');
        }

        return require_once ('view/login.php');
    }

}
