<?php
    $url_host =$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1539">
    <div class="container">
        <!-- BEGIN CONTENT-->
        <div class="row">
            <div class="tab">
                <p class="count">Showing all 16 results</p>
                <select>
                    <option value="menu_order" selected="selected">Default sorting</option>
                    <option value="popularity">Sort by popularity</option>
                    <option value="rating">Sort by average rating</option>
                    <option value="date">Sort by newness</option>
                    <option value="price">Sort by price: low to high</option>
                    <option value="price-desc">Sort by price: high to low</option>

                </select>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="item">
                    <div class="thumb">
                        <img src="./images/1.jpg" alt="#"  class="img-responsive">

                        <div class="overlay">
                            <div class="text1">
                                <img src="./images/basket_hover.png" alt="#" class="img-responsive">
                                <span>TO CART</span>
                            </div>
                            <div class="text2">
                                <img src="./images/details_hover.png" alt="#" class="img-responsive">
                                <span>DETAILS</span>
                            </div>
                        </div>


                    </div>
                    <div class="star-rating">
                        <i class="fa fa-star" style="color:#FF6F24"></i>
                        <i class="fa fa-star" style="color:#FF6F24"></i>
                        <i class="fa fa-star" style="color:#FF6F24"></i>
                        <i class="fa fa-star" style="color:#FF6F24"></i>
                        <i class="fa fa-star" style="color:#FF6F24"></i>
                    </div>
                    <h6 class="entry-title">
                        <a href="#">Blueberries</a>
                    </h6>
                    <div class="price">
                        <del><span><span>$</span>16.00</span></del><span>
                            <span>$</span>13.45</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="item">
                    <div class="thumb">
                        <img src="./images/2.jpg" alt="#" class="img-responsive">

                        <div class="overlay">
                            <div class="text1">
                                <img src="./images/basket_hover.png" alt="#" class="img-responsive">
                                <span>TO CART</span>
                            </div>
                            <div class="text2">
                                <img src="./images/details_hover.png" alt="#" class="img-responsive">
                                <span>DETAILS</span>
                            </div>
                        </div>
                    </div>
                    <div class="star-rating">
                        <i class="fa fa-star" style="color:#B0B0AF"></i>
                        <i class="fa fa-star" style="color:#B0B0AF"></i>
                        <i class="fa fa-star" style="color:#B0B0AF"></i>
                        <i class="fa fa-star" style="color:#B0B0AF"></i>
                        <i class="fa fa-star" style="color:#B0B0AF"></i>
                    </div>
                    <h6 class="entry-title">
                        <a href="#">Broccoli</a>
                    </h6>
                    <div class="price">
                        <span>$</span>8.50</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="item">
                    <div class="thumb">
                        <img src="./images/3.jpg" alt="#" class="img-responsive">

                        <div class="overlay">
                            <div class="text1">
                                <img src="./images/basket_hover.png" alt="#" class="img-responsive">
                                <span>TO CART</span>
                            </div>
                            <div class="text2">
                                <img src="./images/details_hover.png" alt="#" class="img-responsive">
                                <span>DETAILS</span>
                            </div>
                        </div>
                    </div>
                    <div class="star-rating">
                        <i class="fa fa-star" style="color:#FF6F24"></i>
                        <i class="fa fa-star" style="color:#FF6F24"></i>
                        <i class="fa fa-star" style="color:#FF6F24"></i>
                        <i class="fa fa-star" style="color:#FF6F24"></i>
                        <i class="fa fa-star" style="color:#B0B0AF"></i>
                    </div>
                    <h6 class="entry-title">
                        <a href="#">Carrots</a>
                    </h6>
                    <div class="price">
                        <span>$</span>10.55</span>
                    </div>
                </div>
            </div>
            <div class=" col-md-3 col-sm-6 col-xs-12">
                <div class="item">
                    <div class="thumb">
                        <img src="./images/4.jpg" alt="#" class="img-responsive">
                        <div class="overlay">
                            <div class="text1">
                                <img src="./images/basket_hover.png" alt="#" class="img-responsive">
                                <span>TO CART</span>
                            </div>
                            <div class="text2">
                                <img src="./images/details_hover.png" alt="#" class="img-responsive">
                                <span>DETAILS</span>
                            </div>
                        </div>
                    </div>
                    <div class="star-rating">
                        <i class="fa fa-star" style="color:#FF6F24"></i>
                        <i class="fa fa-star" style="color:#FF6F24"></i>
                        <i class="fa fa-star" style="color:#FF6F24"></i>
                        <i class="fa fa-star" style="color:#FF6F24"></i>
                        <i class="fa fa-star" style="color:#FF6F24"></i>
                    </div>
                    <h6 class="entry-title">
                        <a href="#">Cherry Tomatoes</a>
                    </h6>
                    <div class="price">
                        <span>$</span>5.00</span>
                        <span>-</span>
                        <span>$</span>16.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>