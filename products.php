<?php
include './db.php';
class products extends db {
    public function getProducts($keyword) {
        $sql = 'SELECT * FROM `fam` WHERE `product_name` LIKE "%' . $keyword . '%"';
        $data = $this->select($sql);
        return $data;
    }
    public function addNew($data) {
        $sql = 'INSERT INTO `fam`(`categor_id`, `product_name`, `product_price`, `product_images`, `sale`)' . 'VALUES ("'
                . $data['category_id'] . '","'
                . $data['product_name'] . '","'
                . $data['product_price'] . '","'
                . $data['product_images'] . '")'
                . $data['sale'] . '")';
        $this->query($sql);
    }
    public function Delete($id) {
        $sql = 'DELETE FROM `fam` WHERE  `id` = ' . $id;
        $this->query($sql);
    }
    public function getProductsById($id) {
        $sql = 'SELECT * FROM `fam` WHERE `id` LIKE "%' . $id . '%"';
        $data = $this->select($sql);
        return $data;
    }
    public function findUser($id) {
        $sql = 'SELECT * FROM `fam` WHERE  `id`=' . $id;
        $product = $this->select($sql);
        return $product[0];
    }
    public function updateUser($data) {
        
        $sql = 'UPDATE `fam` ' .
                'SET `product_name` = "' . $data['product_name'] . '", ' .
                'WHERE `id=`' . $data['id'];
        $this->query($sql);
    }
    public function getAll() {
        $sql = 'SELECT * FROM fam';
        $product = $this->select($sql);
        return $product;
    }
    public function getCategories() {
        $sql = 'SELECT * FROM category';
        $product = $this->select($sql);
        return $product;
    }
    public function getPage($p) {
        $n = ($p - 1) * 12;
        $sql = 'SELECT * FROM fam LIMIT ' . $n . ',12';
        $product = $this->select($sql);
        return $product;
    }
}
