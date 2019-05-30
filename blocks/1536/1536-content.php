<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="type-1536">
        <aside class="widget widget_search">
            <div class="input-group">
                <input class="form-control" placeholder="Search the site" name="s" id="s" type="text">
                <div class="input-group-btn">
                    <button class="btn btn-default" id="searchsubmit" type="submit">
                        <!-- <i class="glyphicon glyphicon-search "></i -->
                        <i class="fa fa-search"></i>
                    </button>
                    </div>
                </div>
            </aside>
            <aside id="archives">
                <h6 class="widgettitle">Bài đăng mới</h6>
                <ul>
                    <li><a href="blog.php"><i class="fa fa-check" aria-hidden="true"></i> cập nhật</a></li>
                </ul>
            </aside>
            <aside id="meta">

                <h6 class="widgettitle">Phân loại</h6>
                <ul>
                    <li><a href="blog.php"> <i class="fa fa-check" aria-hidden="true"></i> Tất cả</a></li>
                    <li><a href="blog.php"><i class="fa fa-check" aria-hidden="true"></i> nông sản rau</a></li>
                    <li><a href="blog.php"><i class="fa fa-check" aria-hidden="true"></i> nông sản củ</a></li>
                    <li><a href="blog.php"><i class="fa fa-check" aria-hidden="true"></i> nông sản quả</a></li>
                </ul>
            </aside>
        </div>
    </div>