<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1536">
    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <aside class="widget widget_search">
                    <div class="input-group">
                        <input class="form-control" placeholder="Search the site" name="s" id="s" type="text">
                        <div class="input-group-btn">
                            <button class="btn btn-default" id="searchsubmit" type="submit"><i                                   class="glyphicon glyphicon-search "></i></button>
                        </div>
                    </div>
                </aside>
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

    </div>
</div>