<?php
$file_name=realpath(dirname(__FILE__));
include_once($file_name.'/../lib/Database.php');

class Brand
{

    public $db;
    function __construct()
    {
        $this->db = new Database();
       
    }

    public function selectAllBrands()
    {
        $query= "SELECT * FROM brand";
        $resource= $this->db->select($query);
        return $resource;
    }
}
