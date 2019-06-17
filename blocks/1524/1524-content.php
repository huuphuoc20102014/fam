<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1524">
    <div class="container">
        <!-- BEGIN CONTENT-->
        <div class="row product-row">
            <div class="col-md-3 col-sm-6 col-xs-12 col-hover">
                <div class="item">
                    <div class="thumb">
                        <img src="<?php echo $url_path ?>/images/1.jpg" alt="#"  class="img-responsive">

                        <div class="overlay">
                            <div class="text2">
                                <img src="<?php echo $url_path ?>/images/details_hover.png" alt="#" class="img-responsive">
                                <p>DETAILS</p>
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
                        <a href="#">cà chua</a>
                    </h6>
                    <!-- <div class="price">
                        <del><span><span>$</span>16.00</span></del><span>
                            <span>$</span>13.45</span>
                    </div> -->
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 col-hover">
                <div class="item">
                    <div class="thumb">
                        <img src="<?php echo $url_path ?>/images/2.jpg" alt="#" class="img-responsive">

                        <div class="overlay">
                            <div class="text2">
                                <img src="<?php echo $url_path ?>/images/details_hover.png" alt="#" class="img-responsive">
                                <p>DETAILS</p>
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
                        <a href="#">salad</a>
                    </h6>
                    <!-- <div class="price">
                        <span>$</span>8.50</span>
                    </div> -->
                    <a href="../../../block/b111_6_phuoc/1524/less/1524.less"></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 col-hover">
                <div class="item">
                    <div class="thumb">
                        <img src="<?php echo $url_path ?>/images/3.jpg" alt="#" class="img-responsive">

                        <div class="overlay">
                            <div class="text2">
                                <img src="<?php echo $url_path ?>/images/details_hover.png" alt="#" class="img-responsive">
                                <p>DETAILS</p>
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
                        <a href="#">dâu</a>
                    </h6>
                    <!-- <div class="price">
                        <span>$</span>10.55</span>
                    </div> -->
                </div>
            </div>
            <div class=" col-md-3 col-sm-6 col-xs-12 col-hover">
                <div class="item">
                    <div class="thumb">
                        <img src="<?php echo $url_path ?>/images/4.jpg" alt="#" class="img-responsive">
                        <div class="overlay">
                            <div class="text2">
                                <img src="<?php echo $url_path ?>/images/details_hover.png" alt="#" class="img-responsive">
                                <p>DETAILS</p>
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
                        <a href="#">cam</a>
                    </h6>
                    <!-- <div class="price">
                        <span>$</span>5.00</span>
                        <span>-</span>
                        <span>$</span>16.00</span>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>  
    