<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1532">
	<div class="container">
		<div class="title-offers">
			<div data-folder="text" data-type=""><h3>BEST OFFERS ON THE MARKET</h3></div>
		</div>

		<div class="row">
			<div class="col-md-3 col-sm-4 col-xs-6">
				<div class="cmsms_pricing_table">
					<div class="cmsms_pricing table_inner-1" >
						<h3 class="title">Carrots</h3>
						<span class="cmsms_currency currency">$</span>
						<span class="cmsms_price price">8</span>
						<span class="cmsms_coins coins">50</span>
						<span class="cmsms_period period">a pound</span>
					</div>
					<ul class="price_table_list">
						<li class="price_table_list_item">Fresh Grown</li>
						<li class="price_table_list_item">Quality Product</li>
						<li class="price_table_list_item">100% Natural</li>
						<li class="price_table_list_item">Sale Deal</li>
					</ul>
					<div class="pricing_footer">
						<a class="button buy-1"  href="#">Buy Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-6">
				<div class="cmsms_pricing_table">
					<div class="cmsms_pricing table_inner-2" >
						<h3 class="title">Green Salad</h3>
						<span class="cmsms_currency currency">$</span>
						<span class="cmsms_price price">14</span>
						<span class="cmsms_coins coins">00</span>
						<span class="cmsms_period period">per pound</span>
					</div>
					<ul class="price_table_list">
						<li class="price_table_list_item">Lots of Vitamins</li>
						<li class="price_table_list_item">Tasty</li>
						<li class="price_table_list_item">Farm Grown</li>
						<li class="price_table_list_item">No Pesticides</li>
					</ul>
					<div class="pricing_footer">
						<a class="button buy-2"  href="#">Buy</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-6">
				<div class="cmsms_pricing_table">
					<div class="cmsms_pricing table_inner-3">
						<h3 class="title">Sweet Corn</h3>
						<span class="cmsms_currency currency">$</span>
						<span class="cmsms_price price">7</span>
						<span class="cmsms_coins coins">99</span>
						<span class="cmsms_period period"> a pound</span>
					</div>
					<ul class="price_table_list">
						<li class="price_table_list_item">Really Sweet</li>
						<li class="price_table_list_item">Healthy</li>
						<li class="price_table_list_item">100% Natural</li>
						<li class="price_table_list_item">Great Price</li>
					</ul>
					<div class="pricing_footer">
						<a class="button buy-3" href="#">Buy Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-6">
				<div class="cmsms_pricing_table">
					<div class="cmsms_pricing table_inner-4">
						<h3 class="title">Tomatoes</h3>
						<span class="cmsms_currency currency">$</span>
						<span class="cmsms_price price">15</span>
						<span class="cmsms_coins coins">55</span>
						<span class="cmsms_period period">a pound</span>
					</div>
					<ul class="price_table_list">
						<li class="price_table_list_item">Elite Sort</li>
						<li class="price_table_list_item">Great Taste</li>
						<li class="price_table_list_item">Fresh &amp; Ripe</li>
						<li class="price_table_list_item">Healthy</li>
					</ul>
					<div class="pricing_footer">
						<a class="button buy-4"  href="#">Buy Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>