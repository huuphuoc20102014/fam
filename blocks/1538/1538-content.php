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
        <div class="row">
            <div class="col-md-12 ">
                <div class="headline"
                    style="background-color:#419005; background-image:url(../../images/heading-bg-3.png);">
                    <h1>Shop</h1>
                </div>
                <div class = "breadcrumb">
                    <a hef = "#">Home</a>
                    <a hef = "#">/ Shop</a>
                </div>
            </div>
        </div>

    </div>
</div>