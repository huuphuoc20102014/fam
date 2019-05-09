<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="type-1546">
        <div class="information">
            <h2>information</h2>
        </div>
        <aside id="archives">
            <h6 class="widgettitle">Archives</h6>
            <ul>
                <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i> March 2013</a></li>
            </ul>
        </aside>
        <aside id="meta">

            <h6 class="widgettitle">Meta</h6>
            <ul>

                <li><a href="#"> <i class="fa fa-check" aria-hidden="true"></i> Log in</a></li>

                <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Entries <abbr>RSS</abbr></a></li>

                <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Comments <abbr>RSS</abbr></a>
                </li>

                <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i> WordPress.org</a></li>
            </ul>
        </aside>
    </div>
</div>