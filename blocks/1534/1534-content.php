<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1534">
	<div class="headline">
		<h1 class="heading-title">
			Agricultural Blog
		</h1>
		<h5 class="heading_subtitle">Delicious News</h5>
	</div>

	<div class="cmsms_breadcrumbs_1534">
		<a href="#" class="cms_home_1534">Home</a>
		<span class="breadcrumbs_sep"> / </span>
		<span>Blog</span>
	</div>
</div>
