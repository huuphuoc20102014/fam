<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);


include './products.php';
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
if (isset($_GET['product-id'])) {
    $id = $_GET['product-id'];
    $obj_products->deleteProducts($id);
}
?>
<div class="type-1539">
    <div class="container">
        <div class="content-type-1539">
            <!-- BEGIN CONTENT-->
            <div class="tabs">
                <p class="count">Showing all 16 results</p>
                <form class="ordering" method="get">
                    <select name="orderby" class="orderby">
                        <option value="menu_order" selected="selected">Default sorting</option>
                        <option value="popularity">Sort by popularity</option>
                        <option value="rating">Sort by average rating</option>
                        <option value="date">Sort by newness</option>
                        <option value="price">Sort by price: low to high</option>
                        <option value="price-desc">Sort by price: high to low</option>
                    </select>
                </form>
            </div>
            <div class="row">
                <?php foreach ($product as $products): ?>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="item">
                            <div class="thumb">

                                <img src="http://<?php echo $url_path ?>/images/1539-1.jpg" alt="#"  class="img-responsive">
                                <div class="overlay">
                                    <div class="text1">
                                        <img src="http://<?php echo $url_path ?>/images/basket_hover.png" alt="#">
                                        <span>TO CART</span>
                                    </div>
                                    <div class="text2">
                                        <img src="http://<?php echo $url_path ?>/images/details_hover.png" alt="#" >
                                        <span>DETAILS</span>
                                    </div>
                                </div>


                            </div>
                            <div class="star-rating">
                                <i class="fa fa-star" style="color:#FF6F24"></i>
                                <i class="fa fa-star" style="color:#FF6F24"></i>
                                <i class="fa fa-star" style="color:#FF6F24"></i>
                                <i class="fa fa-star" style="color:#FF6F24"></i>
                                <i class="fa fa-star" style="color:#FF6F24"></i>
                            </div>
                            <h6 class="entry-title">
                                 <a href="#"><?php echo $products['product-name']; ?></a>
                            </h6>
                            <div class="price">
                                <del>
                                    <span>
                                        <span>$</span>
                                        16.00
                                    </span>
                                </del>
                                <span>
                                    <span>$</span>
                                    <p><?php echo number_format($products['product-price'], 0, ',', '.'); ?> ₫</p>
                                </span>
                            </div>
                        </div>
                    </div>
                
                        <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>