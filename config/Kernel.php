<?php



include_once 'config.php';
include_once 'Connection.php';

spl_autoload_register(function ($class) {

    if(file_exists('controller/'.$class.'.php')){

        require 'controller/'.$class.'.php';

    }

    if(file_exists('model/'.$class.'.php')){

        require 'model/'.$class.'.php';

    }
});

$db=Connection::connect($config);
var_dump($db);
$load_new=new HomeController();
$model=new HomeModel();
$load_new->model=$model;
$index=$load_new->indexAction();