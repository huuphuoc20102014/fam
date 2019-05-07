<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1530">
	<div class="post-content">
		<h3 class="no_sliding">Agricultural news</h3>
		<article class="post-527">
			<figure class="post_type_img">
				<img src="images/1530-agriculture-36-150x150.jpg" class="img-thumbnail" alt="Autumn Harvest" >
			</figure>
			<header>
				<h4 class="entry-title">
					<a href="#">Autumn Harvest</a>
				</h4>
			</header>

			<div class="entry-content">
				<p>We don’t just produce wordpress themes. We give life to whole microcosms, where beautiful designs are powered by immense functionality....</p>
			</div>
		</article>

		<article class="post-489">
			<figure class="post_type_img">
				<img src="images/1530-agriculture-32-150x150.jpg" class="img-thumbnail" alt="Autumn Harvest" >
			</figure>

			<header>
				<h4 class="entry-title">
					<a href="#">Growing Turnips</a>
				</h4>
			</header>

			<div class="entry-content">
				<p>Drag’n’drop content parts across your page with a handy WYSIWYG Content Composer, as well as easily edit their appearance, insert...</p>
			</div>
		</article>
	</div>
</div>