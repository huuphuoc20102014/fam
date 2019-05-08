<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1535">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-6 col-xs-12">
                <article>
                    <div class="item">
                        <div class="thumb">
                            <img src="./images/1.jpg"  alt="#" class="img-responsive">

                            <div class="overlay">
                                <div class="text">
                                    <img src="./images/details_hover.png" alt="#" class="img-responsive">

                                </div>

                            </div>
                        </div>
                        <header>

                            <h1>
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <a href="#">Autumn Harvest</a>
                            </h1>
                        </header>
                        <footer class="entry-meta">
                            <a href="#" onclick="cmsmsLike(527); return false;" id="cmsmsLike-527" class="cmsmsLike"><i
                                    class="fa fa-heart-o" aria-hidden="true"></i><span> 69</span>
                            </a>
                            <abbr title="March 13, 2013">March 13, 2013

                            </abbr>
                            / <a href="#">1 Comment</a>
                            / <span>in
                                <a href="#" rel="category tag">Standard Post With an Image</a>
                            </span>
                            / <span>by <a href="#" title="Posts by Steven Masters" rel="author">Steven
                                    Masters</a></span>
                        </footer>

                        <p>We don’t just produce wordpress themes. We give life to whole microcosms, where beautiful
                            designs are powered by immense functionality. We consider our work to be successfully done
                            not when the next product is released for sale, but when our customers share their great
                            user experience and showcase the beautiful websites they have managed to…</p>

                        <div class="cl"> <a href="#">Read More</a>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </div>
                        </div>
                </article>

            </div>
        </div>

    </div>
</div>