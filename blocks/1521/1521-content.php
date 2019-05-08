<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1521">
    <div class="container">
        <div class="top row">
            <div class="col-md-12 col-xs-12">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="images/01.png" alt="image" class="img-responsive" />
                        </div>
                        <div class="swiper-slide">
                            <img src="images/02.png" alt="image" class="img-responsive"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/03.png" alt="image" class="img-responsive"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/04.png" alt="image" class="img-responsive"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/05.png" alt="image" class="img-responsive"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/01.png" alt="image" class="img-responsive"/>
                        </div>
                         <div class="swiper-slide">
                            <img src="images/01.png" alt="image" class="img-responsive"/>
                        </div>
                         <div class="swiper-slide">
                            <img src="images/03.png" alt="image" class="img-responsive"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/02.png" alt="image" class="img-responsive"/>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>  
</div>  
