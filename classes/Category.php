<?php
$filename = realpath(dirname(__FILE__));

include_once($filename . '/../lib/Database.php');
class Category
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function addCategory($category_name)
    {
        $query = "INSERT INTO category (`category_name`,`status`) VALUES ('$category_name',1)";
        $result = $this->db->insert($query);
        // return $query;
        if ($result) {
            return "Categoryを作成しました。";
        } else {
            return false;
        }
    }

    public function getAllCategory(){
            $query= "SELECT * FROM category";
            $resource= $this->db->select($query);
            return $resource;

    }
}
