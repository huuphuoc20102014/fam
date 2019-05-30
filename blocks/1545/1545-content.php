<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1545">
    <div class="container">
        <article>
            <div class="item">
                <div class="thumb">
                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/-2nWe5cWjo0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <header>

                    <h1>
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <a href="#">những hoa quả  tốt cho sức khỏe</a>
                    </h1>
                </header>
                <footer class="entry-meta">
                    <a href="#" onclick="cmsmsLike(527); return false;" id="cmsmsLike-527" class="cmsmsLike"><i
                        class="fa fa-heart-o" aria-hidden="true"></i><span> 69</span>
                    </a>
                    <span><a href="#" title="Posts by Steven Masters" rel="author">Lượt yêu thích</a></span>
                </footer>

                <p>We don’t just produce wordpress themes. We give life to whole microcosms, where beautiful
                    designs are powered by immense functionality. We consider our work to be successfully done
                    not when the next product is released for sale, but when our customers share their great
                user experience and showcase the beautiful websites they have managed to…</p>

                <div class="cl"> 
                    <a href="#">đọc thêm</a>
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </div>
            </div>
        </article>
    </div>
    
</div>