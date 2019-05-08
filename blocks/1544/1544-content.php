<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1544">
	<div class="container" >
		<div class="form-contact ">
			<div class="row">
				<div class="name col-md-6">
				<p>Your Name* </p>
				<input type="text" name="name"  size="40" class="contact-name" aria-required="true" aria-invalid="false" >
			</div>

			</div>
			<div class="row">		
			<div class="email col-md-6">
				<p>Last Name* </p>
				<input type="text" name="email" value="" size="40" class="contact-email" aria-required="true" aria-invalid="false">
			</div>

			</div>
			<div class="row">
			<div class="your mail col-md-6">
				<p>Your Mail* </p>
				<input type="text" name="site" value="" size="40" class="contact-website" aria-invalid="false">
			</div>

			</div>
			<div class="row">
			<div class="messager subject col-md-6">
				<p>Messager subject </p>
				<input type="text" name="site" value="" size="40" class="contact-website" aria-invalid="false">
			</div>

			</div>
			<div class=send>
				<p>Messager</p>
				<textarea name="message" cols="40" rows="10" class="textarea-contact" aria-required="true" aria-invalid="false"></textarea>
				<input type="submit" value="Send Messager" class="send-info">
				<span class="ajax-loader"></span>
			</div>
		</div>
	</div>
</div>