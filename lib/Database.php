<?php
$filename= realpath(dirname(__FILE__));
include($filename.'/../config/config.php');
class Database{

   public  $servername = DB_HOST;
   public $username = USERNAME;
   public $password = PASSWORD;
   public $dbname = DB_NAME;
   public $conn;
   public $error;

    public function __construct()
    {
        $this->getConnection();
    }

    public function getConnection(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ( $this->conn->connect_error) {
          $this->error=  $this->conn->connect_error;
          return false;
          }
    }

    public function select($query){
        $resourc= $this->conn->query($query);
        return $resourc;
    }

    public function insert($query){
        $resourc= $this->conn->query($query);
        if($resourc){
            echo "Created Successfully";
        }
        else{
            return false;
        }
        // return $resourc;
    }


    
}
