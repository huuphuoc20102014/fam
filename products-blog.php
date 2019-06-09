<?php
include './db.php';
class products extends db {
    public function getProducts($keyword) {
        $sql = 'SELECT * FROM `blog` WHERE `blog_tieude` LIKE "%' . $keyword . '%"';
        $data = $this->select($sql);
        return $data;
    }
    public function addnew($data) {
        $sql = 'INSERT INTO blog(blog_videos, uploadfile, blog_tieude, blog_bangtin, category_blog_id)' . 'VALUES ("'
        . $data['blog_videos'] . '","'
        . $data['blog_images'] . '","'
        . $data['blog_tieude'] . '","'
        . $data['blog_bangtin'] . '","'
        . $data['category_blog_id'] . '")';
        $this->query($sql);
    }
    public function Delete($id) {
        $sql = 'DELETE FROM `blog` WHERE  `blog_id`=' . $id;
        $this->query($sql);
    }
    public function getProductsById($id) {
        $sql = 'SELECT * FROM `blog` WHERE `blog_id` LIKE "%' . $id . '%"';
        $data = $this->select($sql);
        return $data;
    }
    public function findUser($id) {
        $sql = 'SELECT * FROM `blog` WHERE  `blog_id`=' . $id;
        $product = $this->select($sql);
        return $product[0];
    }
    public function updateBlog($data) {

        $sql = 'UPDATE `blog` ' .
        'SET `blog_images` = "' . $data['blog_images'] . '", '.
        'WHERE `blog_id=`' . $data['blog_id'];
        $this->query($sql);
    }

    public function updateUser($data) {
        $sql = 'UPDATE `blog` ' .
        'SET `blog_tieude` = "' . $data['blog_tieude'] . '"' .
        'WHERE blog_id=' . $data['id'];
        $this->query($sql);
    }
    public function getAll() {
        $sql = 'SELECT * FROM blog';
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
        $sql = 'SELECT * FROM blog LIMIT ' . $n . ',12';
        $product = $this->select($sql);
        return $product;
    }
}
