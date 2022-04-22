<?php
namespace Databases;

class DB{
    const HOST="localhost";
    const DATABASE="csv";
    const PASSWORD="";
    const USERNAME="root";
    private $connection;
    
    
    public function __construct()
    {
        $this->connection= $this->openConnection();;
    }

    public function openConnection(){

        $connection = new \mysqli(self::HOST,self::USERNAME,self::PASSWORD,self::DATABASE);
        if(mysqli_connect_errno()){
            trigger_error("Eror");
        }
        $connection->set_charset('utf8');
        
        return $connection;
    }

    public function select(){
        $db= new DB();
        $connection=  $db->openConnection();
        $sql= 'SELECT * FROM import_csv';
       return $resource= $connection->query($sql);

    }

}
?>