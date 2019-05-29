<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1538">
    <div class="container">
        <div class="headline">
            <h1 class="heading-title">
                Shop
            </h1>
        </div>

        <div class="cmsms_breadcrumbs_1538">
            <a href="#" class="cms_home_1538">Home</a>
            <span class="breadcrumbs_sep"> / </span>
            <span>Blog</span>
        </div>
    </div>
</div>