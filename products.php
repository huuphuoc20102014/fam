<?php
include './db.php';
class products extends db {
    public function getProducts($keyword) {
        $sql = 'SELECT * FROM `products` WHERE `product_name` LIKE "%' . $keyword . '%"';
        $data = $this->select($sql);
        return $data;
    }
    public function addnew($data) {
        $sql = 'INSERT INTO products(product_name, product_price, category_id, product_image)' . 'VALUES ("'
                . $data['product_name'] . '","'
                . $data['product_price'] . '","'
                . $data['category_id'] . '","'
                . $data['product_image'] . '")';
        $this->query($sql);
    }
    public function Delete($id) {
        $sql = 'DELETE FROM `products` WHERE  `product_id`=' . $id;
        $this->query($sql);
    }
    public function getProductsById($id) {
        $sql = 'SELECT * FROM `products` WHERE `product_id` LIKE "%' . $id . '%"';
        $data = $this->select($sql);
        return $data;
    }
    public function findUser($id) {
        $sql = 'SELECT * FROM `products` WHERE  `product_id`=' . $id;
        $product = $this->select($sql);
        return $product[0];
    }
    public function updateUser($data) {
        
        $sql = 'UPDATE `products` ' .
                'SET `product_name` = "' . $data['product_name'] . '", ' .
                    '`category_id` = "' . $data['category_id'] . '", '.
                    '`product_image` = "' . $data['product_image'] . '", '.
                    '`product_price` = "' . $data['product_price'] . '"'.
                'WHERE `product_id=`' . $data['product_id'];
        $this->query($sql);
    }
    public function getAll() {
        $sql = 'SELECT * FROM products';
        $product = $this->select($sql);
        return $product;
    }
    public function getCategories() {
        $sql = 'SELECT * FROM categories';
        $product = $this->select($sql);
        return $product;
    }
    public function getPage($p) {
        $n = ($p - 1) * 12;
        $sql = 'SELECT * FROM products LIMIT ' . $n . ',12';
        $product = $this->select($sql);
        return $product;
    }
}
