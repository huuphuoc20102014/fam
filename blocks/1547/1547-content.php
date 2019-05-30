<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1547">
	<div class="container">
		<div class="view-text">
			<h2>hình ảnh</h2>
		</div>
		<div class="title">
			<div class="toolbar mb2 mt2">
				<button class="btn fil-cat" href="" data-rel="all">Tất cả</button>
				<button class="btn fil-cat" data-rel="web">Rau</button>
				<button class="btn fil-cat" data-rel="flyers">Củ</button>
				<button class="btn fil-cat" data-rel="bcards">Quả</button>
			</div> 
		</div>
		<div class="images">
			<div id="portfolio">
				<div class="tile scale-anm web all">
					<img src="<?php echo $url_path ?>/images/1.jpg" alt="" />
				</div>
				<div class="tile scale-anm web all">
					<img src="<?php echo $url_path ?>/images/2.jpg" alt="" />
				</div>
				<div class="tile scale-anm bcards all">
					<img src="<?php echo $url_path ?>/images/3.jpg" alt="" />
				</div>
				<div class="tile scale-anm bcards all">
					<img src="<?php echo $url_path ?>/images/4.jpg" alt="" />
				</div>
				<div class="tile scale-anm bcards all">
					<img src="<?php echo $url_path ?>/images/5.jpg" alt="" />
				</div>
				<div class="tile scale-anm bcards all">
					<img src="<?php echo $url_path ?>/images/6.jpg" alt="" />
				</div>
				<div class="tile scale-anm web all">
					<img src="<?php echo $url_path ?>/images/7.jpg" alt="" />
				</div>
				<div class="tile scale-anm flyers all">
					<img src="<?php echo $url_path ?>/images/8.jpg" alt="" />
				</div>
				<div class="tile scale-anm bcards all">
					<img src="<?php echo $url_path ?>/images/9.jpg" alt="" />
				</div>
				<div class="tile scale-anm flyers all">
					<img src="<?php echo $url_path ?>/images/10.jpg" alt="" /> 
				</div>
				<div class="tile scale-anm bcards all">
					<img src="<?php echo $url_path ?>/images/11.jpg" alt="" />
				</div>
				<div class="tile scale-anm web all">
					<img src="<?php echo $url_path ?>/images/12.jpg" alt="" />
				</div>
				<div class="tile scale-anm web all">
					<img src="<?php echo $url_path ?>/images/13.jpg" alt="" />
				</div>
				<div class="tile scale-anm bcards all">
					<img src="<?php echo $url_path ?>/images/14.jpg" alt="" />
				</div>
				<div class="tile scale-anm bcards all">
					<img src="<?php echo $url_path ?>/images/15.jpg" alt="" />
				</div> 
				<div class="tile scale-anm bcards all">     
					<img src="<?php echo $url_path ?>/images/16.jpg" alt="" />
				</div>
				<div class="tile scale-anm web bcards all">     
					<img src="<?php echo $url_path ?>/images/17.jpg" alt="" />
				</div>
				<div class="tile scale-anm bcards all">     
					<img src="<?php echo $url_path ?>/images/18.jpg" alt="" />
				</div>
				<div class="tile scale-anm bcards all">     
					<img src="<?php echo $url_path ?>/images/19.jpg" alt="" />
				</div>
				<div class="tile scale-anm bcards all">     
					<img src="<?php echo $url_path ?>/images/20.jpg" alt="" />
				</div>
				<div class="tile scale-anm web all">     
					<img src="<?php echo $url_path ?>/images/21.jpg" alt="" />
				</div>
				<div class="tile scale-anm web all">     
					<img src="<?php echo $url_path ?>/images/22.jpg" alt="" />
				</div>
				<div class="tile scale-anm web all">     
					<img src="<?php echo $url_path ?>/images/23.jpg" alt="" />
				</div>
				<div class="tile scale-anm bcards all">     
					<img src="<?php echo $url_path ?>/images/26.jpg" alt="" />
				</div>
				<div class="tile scale-anm bcards all">     
					<img src="<?php echo $url_path ?>/images/27.jpg" alt="" />
				</div>
				<div class="tile scale-anm flyers all">     
					<img src="<?php echo $url_path ?>/images/30.jpg" alt="" />
				</div>
			</div>
		</div>
	</div>
</div>
