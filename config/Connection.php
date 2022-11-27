<?php


class Connection{

    public static $conn=false;

    private function __construct()
    {


    }

    public static  function connect($config){

        try{

            if(!self::$conn){

                $con=new PDO("mysql:host={$config['server']};dbname={$config['db']}",$config['db_user'],$config['db_pass']);
                $con->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
                $con->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE,\PDO::FETCH_ASSOC);
                self::$conn=$con;
              
                return self::$conn;

            }

        }catch (\PDOException $e){

            echo $e->getMessage();
            exit();

        }

    }


}