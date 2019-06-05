<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
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
									<a href="#"><img src="<?php echo $url_path ?>/images/13-1.jpg" alt="product" id="main" height="300px" width="100%"></a>
								</div>
								<div class="row">
									<div class="product-gallery">
										<a href="<?php echo $url_path ?>/images/13-1.jpg" onclick="swap(this); return false;">
											<div class="col-md-3">
												<img style="height: 70px;" src="<?php echo $url_path ?>/images/13-1.jpg" alt="product" class="img-responsive"/>
											</div>
										</a>
										<a href="<?php echo $url_path ?>/images/13-2.jpg" onclick="swap(this); return false;">
											<div class="col-md-3">
												<img style="height: 70px;" src="<?php echo $url_path ?>/images/13-2.jpg" alt="" class="img-responsive"/>
											</div>
										</a>
										<a href="<?php echo $url_path ?>/images/13-3.jpg" onclick="swap(this); return false;">
											<div class="col-md-3">
												<img style="height: 70px;" src="<?php echo $url_path ?>/images/13-3.jpg" alt=""class="img-responsive"/>
											</div>
										</a>
										<a href="<?php echo $url_path ?>/images/13-4.jpg" onclick="swap(this); return false;">
											<div class="col-md-3">
												<img style="height: 70px;" src="<?php echo $url_path ?>/images/13-4.jpg" alt=""class="img-responsive"/>
											</div>
										</a>
									</div>
								</div>
								
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 border-line">
								<div class="product-name">
									<h3>What is Lorem Ipsum?</h3>
								</div>
								<div class="product-info">
									<p class="description">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>


									<div class="product-price">
										<h1 class="price">29.998 ₫</h1>
										<span class="price-tax">45.000 ₫-33%</span>
									</div>
									<div class="product-btnadd">
										<a href="#" class="add-to-cart">Add to Cart</a>
										<a href="#" class="add-to-cart">Add to Wishlist</a>
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
