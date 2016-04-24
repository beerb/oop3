<?php
require_once __DIR__.'/../classes/DB.php';

class Users{
    public $id;
    public $full_name;
    public $balance;

    public static function GetAll(){
        $db = new DB;
        return $db->query("SELECT * FROM users",'Users');
    }

}