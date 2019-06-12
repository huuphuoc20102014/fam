<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1548">
	<div class="container">
		<div class="head-line">
			<h1 class="heading-title">
				About
			</h1>
			<h5 class="heading_subtitle">Nông sản sạch đà lạt</h5>
		</div>

		<div class="cmsms_breadcrumbs_1534">
			<a href="index.php" class="cms_home_1534">Home</a>
			<span class="bread-crumbs_sep"> / </span>
			<span>About</span>
		</div>
	</div>
</div>
