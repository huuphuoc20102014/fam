	<?php
	$url_host = 'http://' . $_SERVER['HTTP_HOST'];
	$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
	$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
	preg_match_all($pattern_uri, __DIR__, $matches);
	$url_path = $url_host . $matches[1][0];
	$url_path = str_replace('\\', '/', $url_path);
	?>

	<div class="type-1541">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="img-inner">
						<img alt="agriculture-55" src="./images/dautay.jpg">
					</div>
				</div>
				<div class="col-md-6">
					<div class="one_half" data-folder="column" data-type="">
						<div data-folder="text" data-type>
							<div>
								<h3>Delicious Treat</h3>
							</div>
							<p dir="ltr">CMSMasters Studio is a team of professionals. Every member of our team has spent many hours polishing professional skills and earning a unique experience in the spheres of website design, &nbsp;wordpress development, technical support etc. We enjoy &nbsp;the process of creating a theme from its start to its end - from a sparkling design idea, all the way through coding, programming, testing, to the very release, and then still on and on, providing our customers with superior support and guidance.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>