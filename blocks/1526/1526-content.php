<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1526">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="agricul-tural-news">
					<div class="agricul-tural">
						<h2>agricul tural news</h2>
					</div>
					<div class="row view-border-1">
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="img-view">
								<img src="images/img-1.jpg" alt="#" class="img-responsive">
							</div>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-12">
							<div class="text-view">
								<h3>autumn harvest</h3>
								<p>
									We don’t just produce wordpress themes. We give life to whole microcosms, where beautiful designs are powered by immense functionality.
								</p>
							</div>
						</div> 
					</div>
					<br>
					<div class="row view-border-2">
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="img-view">
								<img src="images/img-2.jpg" alt="#" class="img-responsive">
							</div>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-12">
							<div class="text-view">
								<h3>Growing Turnips</h3>
								<p>
									Drag’n’drop content parts across your page with a handy WYSIWYG Content Composer, as well as easily edit their appearance, insert.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12"></div>
		</div>
	</div>
</div>