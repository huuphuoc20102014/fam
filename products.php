<?php
include './db.php';
class products extends db {
    public function getProducts($keyword) {
        $sql = 'SELECT * FROM `fam` WHERE `product-name` LIKE "%' . $keyword . '%"';
        $data = $this->select($sql);
        return $data;
    }
    public function addNew($data) {
        $sql = 'INSERT INTO `fam`(`product-category-id`, `product-name`, `product-price`, `product-images`, `sale`)' . 'VALUES ("'
                . $data['product-category-id'] . '","'
                . $data['product-name'] . '","'
                . $data['product-price'] . '","'
                . $data['product-images'] . '")'
                . $data['sale'] . '")';
        $this->query($sql);
    }
    public function Delete($id) {
        $sql = 'DELETE FROM `fam` WHERE  `product-id` = ' . $id;
        $this->query($sql);
    }
    public function getProductsById($id) {
        $sql = 'SELECT * FROM `fam` WHERE `product-id` LIKE "%' . $id . '%"';
        $data = $this->select($sql);
        return $data;
    }
    public function findUser($id) {
        $sql = 'SELECT * FROM `fam` WHERE  `product-id`=' . $id;
        $product = $this->select($sql);
        return $product[0];
    }
    public function updateUser($data) {
        
        $sql = 'UPDATE `fam` ' .
                'SET `product-name` = "' . $data['product-name'] . '", ' .
                'WHERE `product-id=`' . $data['product-id'];
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
