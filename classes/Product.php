<?php
$filename = realpath(dirname(__FILE__));
include_once($filename . '\..\lib\Database.php');
include_once($filename . '\..\helpers\Format.php');


class Product
{

    public $db;
    public $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function getAllProduct()
    {
        $qry = "SELECT * FROM `product` ";
        $resource = $this->db->select($qry);
        return $resource;
    }
    public function getSelectProduct($id)
    {
        $qry = "SELECT * FROM `product` WHERE `pId`=$id";
        $resource = $this->db->select($qry)->fetch_assoc();
        return $resource;
    }

    public function delete($id)
    {
        $check_delete_id = $this->fm->validate($id);
        $check_delete_id = mysqli_real_escape_string($this->db->conn, $check_delete_id);
        $query = "DELETE FROM product WHERE `pId`=$check_delete_id";
        $result = $this->db->conn->query($query);
        if ($result) {
            return "Product Deleted";
        } else {
            return false;
        }
    }
    
    public function insert($select_category, $select_brand, $product_name, $product_price, $quantity, $date, $status = 1)
    {
        $check_query = "SELECT `product_name` FROM product WHERE `product_name`='$product_name' ";
        $check_product_name= $this->db->select($check_query);
       echo $check_query;
        print_r($check_product_name) ;
        if ($check_product_name->num_rows>0) {
            echo "このProductの名前はすでに作成された。";
            return false;
        } else {
            $query = "INSERT INTO product( `cId`, `bId`, `product_name`, `product_price`, `product_stock`, `date`, `status`) 
            VALUES ('$select_category','$select_brand','$product_name','$product_price','$quantity','$date',$status)";
            $insert = $this->db->insert($query);
            return $insert;
        }
        return false;
    }
}
