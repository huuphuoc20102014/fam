<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1540">
	<!-- Đường viền  -->
	<div class="header-1540">
		<div class="divider"></div>

		<div class="divider-text">
			<h3>Tasty Berries</h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-12">
			<article class="person_block_1">
				<figure>
					<img src="./images/agriculture-8-670x390.jpg" class="img_max_width">
				</figure>
				<div class="person_info_1">
					<header class="entry-header person_header_1">
						<h4 class="person_title">Strawberry</h4>
					</header>

					<p dir="ltr">Agriculture Wordpress Theme makes complicated things easy: outstanding simplicity of custom user interface turns website management into a task even a child can handle. Even more, an in-built, customly-designed Woocommerce section lets you add an on line store with a powerful functionality.</p>
				</div>
			</article>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<article class="person_block_2">
				<figure>
					<img src="./images/agriculture-68-670x390.jpg" class="img_max_width">
				</figure>
				<div class="person_info_2">
					<header class="entry-header person_header_2">
						<h4 class="person_title">Strawberry</h4>
					</header>

					<p dir="ltr">Agriculture Wordpress Theme makes complicated things easy: outstanding simplicity of custom user interface turns website management into a task even a child can handle. Even more, an in-built, customly-designed Woocommerce section lets you add an on line store with a powerful functionality.</p>
				</div>
			</article>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<article class="person_block_3">
				<figure>
					<img src="./images/agriculture-41-670x390.jpg" class="img_max_width">
				</figure>
				<div class="person_info_3">
					<header class="entry-header person_header_3">
						<h4 class="person_title">Strawberry</h4>
					</header>

					<p dir="ltr">Agriculture Wordpress Theme makes complicated things easy: outstanding simplicity of custom user interface turns website management into a task even a child can handle. Even more, an in-built, customly-designed Woocommerce section lets you add an on line store with a powerful functionality.</p>
				</div>
			</article>
		</div>
	</div>

</div>
