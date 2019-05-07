<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1523">
    <div class="row top-row">
        <!--1-->
        <div class="col-md-3 col-sm-6 col-xs-12 col-hover" style="background-color: #ff6f24;">
                <div class="images">
                    <div class="caption">
                        <h1 class="widgettitle">Next Day Delivery</h1>
                        <p>
                            We don’t just produce wordpress themes. 
                            We give life to whole microcosms,
                            where beautiful designs are powered by immense functionality
                        </p>
                        <a href="#" class="block_link"></a>
                    </div>
                </div>
        </div><!--End 1-->
        <!--2-->
        <div class="col-md-3 col-sm-6 col-xs-12 col-hover" style="background-color: #f54027;">
            <a href="#">
                <div class="images img2">
                    <div class="caption">
                        <h1 class="widgettitle">Next Day Delivery</h1>
                        <p>
                            We don’t just produce wordpress themes. 
                            We give life to whole microcosms,
                            where beautiful designs are powered by immense functionality
                        </p>
                        <a href="#" class="block_link"></a>
                    </div>
                </div>
            </a>
        </div><!--End 2-->
        <!--3-->
        <div class="col-md-3 col-sm-6 col-xs-12 col-hover" style="background-color: #48a21d;">
            <a href="#">
                <div class="images img3">
                    <div class="caption">
                        <h1 class="widgettitle">Next Day Delivery</h1>
                        <p>
                            We don’t just produce wordpress themes. 
                            We give life to whole microcosms,
                            where beautiful designs are powered by immense functionality
                        </p>
                        <a href="#" class="block_link"></a>
                    </div>
                </div>
            </a>
        </div><!--End 3-->
        <!--4-->
        <div class="col-md-3 col-sm-6 col-xs-12 col-hover" style="background-color: #ffbe01;">
            <a href="#">
                <div class="images img4">
                    <div class="caption">
                        <h1 class="widgettitle">Next Day Delivery</h1>
                        <p>
                            We don’t just produce wordpress themes. 
                            We give life to whole microcosms,
                            where beautiful designs are powered by immense functionality
                        </p>
                        <a href="#" class="block_link"></a>
                    </div>
                </div>
            </a>
        </div><!--End 4-->
    </div><!--End row-->               
</div> 