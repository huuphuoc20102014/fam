<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1531">
	<div class="container">
		<div class="content-wrap">
			<section id="middle_content" class="cmsms_woo" role="main">
				<ul class="products">
					<li class="post-5842">
						<div class="product_inner">
							<span class="onsale">Sale!</span>

							<figure>
								<span class="preloader" style="background-image: none;">
									<span class="image_container_img">
										<span id="img1" class="p_img_container">
											<img src="./images/agriculture-68-274x182.jpg">
											<span class="image_rollover">
											</span>
										</span>
									</span>
								</span>

								<a href="#" data-product_id="5842" data-product_sku="blueberry-1" class="add_to_cart_button">To Cart</a>
								<a href="#" data-product_id="5842" data-product_sku="blueberry-1" class="cmsms_details_button">Details</a>		
							</figure>

							<header class="entry-header">
								<div class="star-rating" title="Rated 5 out of 5">
									<span ><strong class="rating">5</strong> out of 5</span>
								</div>			
								<h6 class="entry-title">
									<a href="#">Blueberries</a>
								</h6>
							</header>

							<footer class="entry-meta">
								<span class="price">
									<del>
										<span class="price-amount-1">
											<span class="price-currencySymbol">$</span>16.00</span>
									</del>
										<ins><span class="price-amount-2"><span class="price-currencySymbol">$</span>13.45</span></ins>
									</span>
							</footer>
						</div>
					</li>


					<li class="post-5857 product type-product status-publish has-post-thumbnail last instock shipping-taxable purchasable product-type-simple">
						<div class="product_inner">
							<figure>
								<span class="preloader" style="background-image: none;"><span class="image_container_img"><span id="img2" class="p_img_container"><img src="http://agriculture.cmsmasters.net/wp-content/uploads/2013/09/agriculture-82-274x182.jpg" title="agriculture-82" alt="agriculture-82" class="attachment-shop_catalog size-shop_catalog wp-post-image" style="opacity: 1;"><span class="image_rollover"></span></span></span>
							</span>
							<a href="/shop/?add-to-cart=5857" data-product_id="5857" data-product_sku="broccoli-1" class="add_to_cart_button cmsms_add_to_cart_button product_type_simple ajax_add_to_cart">To Cart</a><a href="http://agriculture.cmsmasters.net/product/broccoli/" data-product_id="5857" data-product_sku="broccoli-1" class="cmsms_details_button">Details</a>		</figure>
							<header class="entry-header">
								<div title="Rated 0.00 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0.00</strong> out of 5</span></div>			<h6 class="entry-title">
									<a href="http://agriculture.cmsmasters.net/product/broccoli/">Broccoli</a>
								</h6>
							</header>
							<footer class="entry-meta">

								<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>8.50</span></span>
							</footer>
						</div>
					</li>
					<li class="first post-5840 product type-product status-publish has-post-thumbnail product_cat-veg  instock shipping-taxable purchasable product-type-simple">
						<div class="product_inner">
							<figure>
								<span class="preloader" style="background-image: none;"><span class="image_container_img"><span id="img3" class="p_img_container"><img src="http://agriculture.cmsmasters.net/wp-content/uploads/2013/09/agriculture-74-274x182.jpg" title="agriculture-74" alt="agriculture-74" class="attachment-shop_catalog size-shop_catalog wp-post-image" style="opacity: 1;"><span class="image_rollover"></span></span></span>
							</span>
							<a href="/shop/?add-to-cart=5840" data-product_id="5840" data-product_sku="carrot-1" class="add_to_cart_button cmsms_add_to_cart_button product_type_simple ajax_add_to_cart">To Cart</a><a href="http://agriculture.cmsmasters.net/product/carrots/" data-product_id="5840" data-product_sku="carrot-1" class="cmsms_details_button">Details</a>		</figure>
							<header class="entry-header">
								<div class="star-rating" title="Rated 4 out of 5"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div>			<h6 class="entry-title">
									<a href="http://agriculture.cmsmasters.net/product/carrots/">Carrots</a>
								</h6>
							</header>
							<footer class="entry-meta">

								<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>10.55</span></span>
							</footer>
						</div>
					</li>
					<li class="post-5828 product type-product status-publish has-post-thumbnail pa_package-size-88 pa_package-size-89 pa_package-size-87 last instock featured shipping-taxable purchasable product-type-variable has-default-attributes has-children">
						<div class="product_inner">
							<figure>
								<span class="preloader" style="background-image: none;"><span class="image_container_img"><span id="img4" class="p_img_container"><img src="http://agriculture.cmsmasters.net/wp-content/uploads/2013/09/agriculture-42-274x182.jpg" title="agriculture-42" alt="agriculture-42" class="attachment-shop_catalog size-shop_catalog wp-post-image" style="opacity: 1;"><span class="image_rollover"></span></span></span>
							</span>
							<a href="http://agriculture.cmsmasters.net/product/cherry-tomatoes/" data-product_id="5828" data-product_sku="tomato-1" class="cmsms_details_button">Details</a>		</figure>
							<header class="entry-header">
								<div title="Rated 0.00 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0.00</strong> out of 5</span></div>			<h6 class="entry-title">
									<a href="http://agriculture.cmsmasters.net/product/cherry-tomatoes/">Cherry Tomatoes</a>
								</h6>
							</header>
							<footer class="entry-meta">

								<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>5.00</span>–<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>16.00</span></span>
							</footer>
						</div>
					</li>
				</ul>
			</section>
		</div>
	</div>
</div>