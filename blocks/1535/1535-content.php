<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

include './products-blog.php';
//Hiển thị
$obj_products = new products();
$total = $obj_products->getAll();
//phân trang
if (empty($_GET['p'])) {
    $product = $total;
} else {
    $product = $obj_products->getPage($_GET['p']);
}
$dem = 1;
//Tìm kiếm
$keyword = '';
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
$product = $obj_products->getProducts($keyword);
//Hàm Delete
$id = '';
if (isset($_GET['blog_id'])) {
    $id = $_GET['blog_id'];
    $obj_products->deleteProducts($id);
}
?>
<?php foreach ($product as $products): ?>
    <div class="type-1535">
        <div class="container">
            <article>
                <div class="item">
                    <div class="thumb">
                        <img src=" <?php echo 'images/'.$products['blog_images']; ?>"  alt="#" class="img-responsive">
                        <div class="overlay">
                            <div class="text">
                                <img src="<?php echo $url_path ?>/images/details_hover.png" alt="#" class="img-responsive">

                            </div>

                        </div>
                    </div>
                    <header>
                        <h1>
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <a href="#"><?php echo $products['blog_tieude']; ?></a>
                        </h1>
                    </header>
                    <footer class="entry-meta">
                        <a href="#" onclick="cmsmsLike(527); return false;" id="cmsmsLike-527" class="cmsmsLike"><i
                            class="fa fa-heart-o" aria-hidden="true"></i><span> 69</span>
                        </a>
                        <span><a href="#" title="Posts by Steven Masters" rel="author">Lượt yêu thích</a></span>
                    </footer>

                    <p><?php echo $products['blog_bangtin']; ?></p>

                    <div class="cl"> <a href="#">đọc thêm</a>
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </div>
                </div>
            </article>
        </div>
        
    </div>
    <?php endforeach; ?>