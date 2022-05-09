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
    public function selectUser($data){
        $email=$data['email'];
        $email=mysqli_real_escape_string($this->db->conn, $email);
        $password=md5($data['password']);
        $check_email_query="SELECT * FROM `users` WHERE uEmail= '$email'";
        $resource= $this->db->conn->query($check_email_query);
        if($resource->num_rows>0){
           $check_password_query="SELECT uPassword FROM `users` WHERE uPassword= '$password'";
          
        }else{
            return "Password Email Incorrect";
        }
        return $resource;
    }

}
?>