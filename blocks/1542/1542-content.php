<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1542">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<section class="content-1542">
					<div class="row">
						<div class="col-md-6">
							<div class="cmsms-1542-left-column">
								<span class="onsale">
									Sale!
								</span>
								<figure>
									<a href="#">
										<span class="image_container_img">
											<img src="./images/agriculture-68-430x286.jpg" alt="" class="attachment-shop_single size-shop_single wp-post-image">
											<span class="image_rollover"></span>
										</span>
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-6">
							<div class="cmsms_1542_right_column">
								<h1 class="product_title_1542">Blueberries</h1>
								<div class="cmsms_wrap_price">
									<div class="offer">
										<p class="price">
											<del><span><span>$</span>16.00</span></del>
											<ins>
												<span><span>$</span>13.45</span>
											</ins>
										</p>
									</div>
									<div class="star-rating" title="Rated 5 out of 5">
										<span><strong itemprop="ratingValue" class="rating">5</strong> out of 5</span>
									</div>
								</div>
								<div class="description">
									<p>Perfectly ripe naturally grown wild blueberries. Premium product,&nbsp; quality control passed. Instant delivery throughout the state.</p>
								</div>
								<div class="cmsms_wrap_cart_form">
									<form class="cart" method="post" enctype="multipart/form-data">
										<div class="quantity">
											<input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
										</div>
										<input type="hidden" name="add-to-cart" value="5842">
										<button type="submit" class="single_add_to_cart_buttont">Add to cart</button>
									</form>
								</div>
								<div class="product_meta">
									<span class="sku_wrapper">SKU: <span class="sku" itemprop="sku">blueberry-1</span>.</span>
									<span class="posted_in">Category: <a href="#" rel="tag">Fruit</a>.</span>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>

			<div class="col-md-3">
				<!-- Phần nội dung khác  -->
			</div>
		</div>
	</div>
</div>
