<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1522">
    <div class="container">
        <div class="top row">
            <div class="col-md-12 col-xs-12">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo $url_path ?>/images/1.jpg" alt="background" class="img-responsive"/>
                            <div class="title">
                                <h3>
                                    organic
                                    <br>
                                    <span>
                                        autumn
                                    </span>
                                    <br>
                                    <a href="#">
                                        read more...
                                    </a>
                                </h3>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo $url_path ?>/images/2.jpg" alt="background" class="img-responsive"/>
                            <div class="list-sp">
                                <ul>
                                    <li>1. carrots</li>
                                    <li>2. tomatoes</li>
                                    <li>3. organic</li>
                                    <li>4. butternut</li>
                                </ul>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo $url_path ?>/images/3.jpg" alt="background" class="img-responsive"/>
                            <div class="title">
                                <h3>
                                    RASPBERRY
                                    <br>
                                    <span>
                                        autumn
                                    </span>
                                    <br>
                                    <a href="#">
                                        read more...
                                    </a>
                                </h3>

                            </div>
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
