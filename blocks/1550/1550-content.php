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
							<div class="col-md-4 col-sm-6 col-xs-12 border-line">
								<div class="product-img">
									<a href="#"><img src="<?php echo $url_path ?>/images/13-1.jpg" alt="product" id="main" height="300px"></a>
								</div>
								<div class="product-gallery">
									<a href="<?php echo $url_path ?>/images/13-1.jpg" onclick="swap(this); return false;"><img src="images/13-1.jpg" alt="product"></a>
									<a href="<?php echo $url_path ?>/images/13-2.jpg" onclick="swap(this); return false;"><img src="images/13-2.jpg" alt=""/></a>
									<a href="<?php echo $url_path ?>/images/13-3.jpg" onclick="swap(this); return false;"><img src="images/13-3.jpg" alt=""/></a>
									<a href="<?php echo $url_path ?>/images/13-4.jpg" onclick="swap(this); return false;"><img src="images/13-4.jpg" alt=""/></a>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 border-line">
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
							<div class="col-md-4 col-sm-12 col-xs-12 tabs">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#home">Slide</a></li>
									<li><a data-toggle="tab" href="#menu1">Information 1</a></li>
									<li><a data-toggle="tab" href="#menu2">Information 2</a></li>
								</ul>
								<div class="tab-content">
									<div id="home" class="tab-pane fade in active">
										<div class="swiper-container">
										    <div class="swiper-wrapper">
										      	<div class="swiper-slide"><img src="<?php echo $url_path ?>/images/13-1.jpg" alt=""></div>
										      	<div class="swiper-slide"><img src="<?php echo $url_path ?>/images/13-2.jpg" alt=""></div>
										      	<div class="swiper-slide"><img src="<?php echo $url_path ?>/images/13-3.jpg" alt=""></div>
										      	<div class="swiper-slide"><img src="<?php echo $url_path ?>/images/13-4.jpg" alt=""></div>
										  	</div>
										  	<!-- Add Pagination -->
										    <div class="swiper-pagination"></div>
										</div>
									</div>
									<div id="menu1" class="tab-pane fade">                                                
										<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

										The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
									</div>
									<div id="menu2" class="tab-pane fade">
										<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

										The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
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
