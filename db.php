<?php
include './config.php';
class db {
    public static $conn = NULL;
    public function __construct() {
        if (self::$conn == NULL) {
            self::$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            self::$conn->query('SET NAMES UTF8');
        }
    }
    public function query($sql) {
        $data = mysqli_query(self::$conn, $sql);
        return $data;
    }
    public function select($sql) {
        $data = $this->query($sql);
        $rows = [];
        while ($row = mysqli_fetch_assoc($data)) 
        {
            $rows[] = $row;
        }
        return $rows;
    }
}

// require "config.php";
// class db
// {
//     public static $conn;
//     public function __construct(){
//         self::$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
//         self::$conn->set_charset('utf8');

//     }

//     public function getAllProduct($page, $per_page){
//         $first_link = ($page - 1) * $per_page;
//         $sql="SELECT * FROM fam, category WHERE fam.category_id = category.category_id ORDER BY fam.id DESC LIMIT $first_link,$per_page";
//         $result = self::$conn->query($sql);
//         $arr = array();
//         while($row = $result->fetch_assoc()){
//             $arr[] = $row;
//         }
//         return $arr;
//     }

//     public function count($tab){
//         $sql="SELECT * FROM $tab";
//         $result = self::$conn->query($sql);
//         return $result->num_rows;
//     }


//     public function countSearch($key){
//         $sql="SELECT * FROM fam WHERE product_name LIKE '%".$key."%'";
//         $result = self::$conn->query($sql);
//         return $result->num_rows;
//     }

//     public function search($key, $page, $per_page){
//         $first_link = ($page - 1) * $per_page;
//         $sql="SELECT * FROM fam, category WHERE fam.category_id = category.category_id AND product_name LIKE '%".$key."%' LIMIT $first_link,$per_page";
//         $result = self::$conn->query($sql);
//         $arr = array();
//         while($row = $result->fetch_assoc()){
//             $arr[] = $row;
//         }
//         return $arr;
//     }   

//     public function create_links ($base_url, $total_rows, $page, $per_page){
//         $total_links = ceil($total_rows/$per_page);
//         $link ="";
//         for($j=1; $j <= $total_links ; $j++)
//         {
//             if ($j == $page)
//             {
//                 $link = $link."<li class='active'><a href='".$base_url."page=$j'> $j </a></li>";
//             }
//             else
//             {
//                 $link = $link."<li><a href='".$base_url."page=$j'> $j </a></li>";
//             }
//         }
//         return $link;
//     }

//     public function getAllProtype(){
//         $sql="SELECT * FROM protype";
//         $result = self::$conn->query($sql);
//         $arr = array();
//         while($row = $result->fetch_assoc()){
//             $arr[] = $row;
//         }
//         return $arr;
//     }

//     public function getManuByProtype($id){
//         $sql="SELECT * FROM manufactures WHERE type_id = $id";
//         $result = self::$conn->query($sql);
//         $arr = array();
//         while($row = $result->fetch_assoc()){
//             $arr[] = $row;
//         }
//         return $arr;

//     }

//     public function addProduct($product_name, $category_id, $product_price, $product_images, $mota){
//         $sql ="INSERT INTO fam(product_name, category_id, product_price, product_images, mota, date) VALUES ('$product_name','$category_id','$product_price','$product_images','$mota', now())";
//         $result = self::$conn->query($sql);
//         return $result;
//     }

//     public function editProduct($product_name, $category_id, $product_price, $product_images, $mota, $id){
//         if ($image == "")
//         {
//             $sql ="UPDATE fam SET product_name = '$product_name', category_id = '$category_id', product_price = '$product_price', product_images = '$product_images', mota = '$mota', date = now() WHERE id = $id";
//         }
//         else
//         {
//             $sql ="UPDATE fam SET product_name = '$product_name', category_id = '$category_id', product_price = '$product_price', product_images = '$product_images', mota = '$mota', date = now() WHERE id = $id";
//         }
//         $result = self::$conn->query($sql);
//         return $result;
//     }


//     public function getProtypeByID($id){
//         $sql="SELECT * FROM products, protype, manufactures WHERE products.manu_id = manufactures.manu_id  AND manufactures.type_id = protype.type_id AND products.id = $id";
//         $result = self::$conn->query($sql);
//         $row = $result->fetch_assoc();
//         return $row;
//     }

//     public function getProductByID($id){
//         $sql="SELECT * FROM products WHERE id = $id";
//         $result = self::$conn->query($sql);
//         $row = $result->fetch_assoc();
//         return $row;
//     }
// }
?>