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
if (empty($_GET['page'])) {
    $product = $total;
} else {
    $product = $obj_products->getPage($_GET['page']);
}
$dem = 1;

//Hàm Delete
$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $obj_products->deleteProducts($id);
}
?>
<div class="type-1539">
    <div class="container">
        <div class="content-type-1539">
            <!-- BEGIN CONTENT-->
            <div class="tabs">
                <p class="count">tất cả sản phẩm</p>
                <form class="ordering" method="get">
                    <select name="orderby" class="orderby">
                        <option value="menu_order" selected="selected">mặt hàng kinh doanh</option>
                        <option value="popularity">mặt hàng rau</option>
                        <option value="rating">mặt hàng củ</option>
                        <option value="date">mặt hàng quả</option>
                        <option value="price">mặt hàng hạt</option>
                        <option value="price-desc">mặt hàng khô</option>
                    </select>
                </form>
            </div>
            <div class="row">
                <?php
                foreach ($product as $products):
                    $dem++;
                    ?>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="item">
                            <div class="thumb">

                                <img src="<?php echo 'images/' . $products['product_images']; ?>" alt="#"  class="img-responsive">
                                <div class="overlay">
                                    <a class="text1" href="#">
                                        <img src="http://<?php echo $url_path ?>/images/basket_hover.png" alt="#">
                                        <span>TO CART</span>
                                    </a>
                                    <a class="text2" href="details.php?id=<?php echo $products['id'] ?>">
                                        <img src="http://<?php echo $url_path ?>/images/details_hover.png" alt="#" >
                                        <span>DETAILS</span>
                                    </a>
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
                                <a href="#"><?php echo $products['product_name']; ?></a>
                            </h6>
                            <div class="price">
                                <span>
                                    <span>$</span>
                                    <?php echo number_format($products['product_price'], 0, ',', '.'); ?> ₫
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php
                    if ($dem == 12) {
                        break;
                    }
                    ?>
                <?php endforeach; ?>
            </div>
            <div class="phan_trang">
                <?php $n = ceil(count($total) / 12) ?>
                <?php
                $current_page = $_GET['page'] ;
                if ($current_page> 1) {
                    echo '<a href="shop.php?page=' . ($current_page - 1) . '">Prev</a> ';
                }
                ?>
                <?php for ($i = 1; $i <= $n; $i++): ?>

                <a class="perpage" href="shop.php?page=<?php echo $i ?>"
                   style=" 
                       <?php
                        if ($i == $current_page)
                        {
                          echo 'background: #FFCB33; color: #fff;';  
                        }
                        ?>">
                       <?php echo $i;?>
                       
                    </a>


                <?php endfor; 
                 echo '<a href="shop.php?page=' . ($current_page + 1) . '">Next</a> ';
                ?>

            </div>
        </div>
    </div>
</div>