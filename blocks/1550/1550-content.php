<?php

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);


//code details php
include './products.php';
//Hiển thị
$obj_products = new products();
//Tìm kiếm
// $keyword = '';
// if (isset($_GET['keyword'])) {
// 	$keyword = $_GET['keyword'];
// }
$products = $obj_products->getProductsById($_GET['id']);
?>

<div class="type-1550">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="admin-panel">
					<div class="admin-content">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12 border-line">
								<div class="product-img">
									<a href="#"><img src="./images/<?php echo $products[0]['product-images'];?>" alt="product" id="main" height="300px" width="100%"></a>
								</div>
								<div class="row">
									<div class="product-gallery">
										<a href="./images/<?php echo $products[0]['images-1'];?>" onclick="swap(this); return false;">
											<img style="height: 70px;" src="./images/<?php echo $products[0]['images-1'];?>" alt="product" class="img-responsive"/>
											<!-- <div class="col-md-3">
												<img style="height: 70px;" src="<?php echo $url_path ?>/images/13-1.jpg" alt="product" class="img-responsive"/>
											</div> -->
										</a>
										<a href="./images/<?php echo $products[0]['images-2'];?>" onclick="swap(this); return false;">
											<img style="height: 70px;" src="./images/<?php echo $products[0]['images-2'];?>" alt="" class="img-responsive"/>
											<!-- <div class="col-md-3">
												<img style="height: 70px;" src="<?php echo $url_path ?>/images/13-2.jpg" alt="" class="img-responsive"/>
											</div> -->
										</a>
										<a href="./images/<?php echo $products[0]['images-3'];?>" onclick="swap(this); return false;">
											<img style="height: 70px;" src="./images/<?php echo $products[0]['images-3'];?>" alt=""class="img-responsive"/>
											<!-- <div class="col-md-3">
												<img style="height: 70px;" src="<?php echo $url_path ?>/images/13-3.jpg" alt=""class="img-responsive"/>
											</div> -->
										</a>
										<a href="./images/<?php echo $products[0]['images-4'];?>" onclick="swap(this); return false;">
											<img style="height: 70px;" src="./images/<?php echo $products[0]['images-4'];?>" alt=""class="img-responsive"/>
											<!-- <div class="col-md-3">
												<img style="height: 70px;" src="<?php echo $url_path ?>/images/13-4.jpg" alt=""class="img-responsive"/>
											</div> -->
										</a>
									</div>
								</div>
								
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 border-line">
								<div class="product-name">
									<h3>
										<a href="detail.php?id=<?php echo $products[0]['product_id']; ?>">
											<?php
											echo $products[0]['product-name'];
											?>
										</a></h3>
									</div>
									<div class="product-info">
										<p class="description">
											<?php echo $products[0]['mota'];?>
										</p>
										<div class="product-price">
											<h1 class="price"><?php echo $products[0]['product-price'];?>VNĐ</h1>
											<!-- <span class="price-tax">45.000 ₫-33%</span> -->
										</div>
										<br>
										<div class="product-btnadd">
											<a href="#" class="add-to-cart">Thêm vào giỏ hàng</a>
											<!-- <a href="#" class="add-to-cart">Add to Wishlist</a> -->
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
