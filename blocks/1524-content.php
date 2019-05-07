<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1524">
    <div class="top row">
        <div class="col-md-12 col-xs-12">
            <div class="swiper-container swiper-1524">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-style">
                            <img src="./blocks/images/1.jpg" alt="Avatar" class="image img-responsive">
                            <div class="overlay">
                                <div class="text">
                                    <a href="#" >
                                        <img src="./blocks/images/details_hover.png" alt="detail" class="img-responsive"/>
                                        <p>Details</p>
                                    </a>
                                    <a href="#" >
                                        <img src="./blocks/images/basket_hover.png" alt="detail" class="img-responsive"/>
                                        <p>To Cart</p>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="info">
                            <span>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>

                            </span>
                            <h4>CHERRY TOMATOES</h4>
                            <span class="price">$5.00–$16.00</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-style">
                            <img src="./blocks/images/2.jpg" alt="Avatar" class="image img-responsive">
                            <div class="overlay">
                                <div class="text">
                                    <a href="#" >
                                        <img src="./blocks/images/details_hover.png" alt="detail" class="img-responsive"/>
                                        <p>Details</p>
                                    </a>
                                    <a href="#" >
                                        <img src="./blocks/images/basket_hover.png" alt="detail" class="img-responsive"/>
                                        <p>To Cart</p>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="info">
                            <span>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </span>
                            <h4>CHERRY TOMATOES</h4>
                            <span class="price">$5.00–$16.00</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-style">
                            <img src="./blocks/images/3.jpg" alt="Avatar" class="image img-responsive">
                            <div class="overlay">
                                <div class="text">
                                    <a href="#" >
                                        <img src="./blocks/images/details_hover.png" alt="detail" class="img-responsive"/>
                                        <p>Details</p>
                                    </a>
                                    <a href="#" >
                                        <img src="./blocks/images/basket_hover.png" alt="detail" class="img-responsive"/>
                                        <p>To Cart</p>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="info">
                            <span>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </span>
                            <h4>CHERRY TOMATOES</h4>
                            <span class="price">$5.00–$16.00</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-style">
                            <img src="blocks/images/4.jpg" alt="Avatar" class="image img-responsive">
                            <div class="overlay">
                                <div class="text">
                                    <a href="#" >
                                        <img src="./blocks/images/details_hover.png" alt="detail" class="img-responsive"/>
                                        <p>Details</p>
                                    </a>
                                    <a href="#" >
                                        <img src="./blocks/images/basket_hover.png" alt="detail" class="img-responsive"/>
                                        <p>To Cart</p>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="info">
                            <span>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>

                            </span>
                            <h4>CHERRY TOMATOES</h4>
                            <span class="price">$5.00–$16.00</span>
                        </div>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
                <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>  
</div>  
