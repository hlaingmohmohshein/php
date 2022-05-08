<?php
$file_name= realpath(dirname(__FILE__));
include_once($file_name."/../lib/Database.php");
class User{
    public $db;
    public function __construct()
    {
        $this->db=new Database();
    }

    public function getAllUser(){
        $users= "SELECT * FROM `user`";
        $resource= $this->db->conn->query($users);
        return $resource;
    }
    public function selectUser($query){
        $resource= $this->db->conn->select($query);
        return $resource;
    }

}
?>