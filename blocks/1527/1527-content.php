<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1527">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="view-text" data-folder="text" data-type="">
                    <h3>IN-BUILT WOOCOMMERCE</h3>
                </div>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle-1" data-toggle="dropdown">
                        <span class="view-icon"><i class="fa fa-angle-down"></i></span>
                        Woocommerce Components
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <p>Agriculture Wordpress Theme makes complicated things easy: outstanding simplicity of custom user interface turns website management into a task even a child can handle. Even more, an in-built, customly-designed Woocommerce section lets you add an on line store with a powerful functionality. Many shortcodes and Woocommerce components included  let you add really diverse content. Powerful functionality and many options with intuitive interface.</p>
                        </li>
                    </ul>
                </li>
                <br>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle-2" data-toggle="dropdown">
                        <span class="view-icon"><i class="fa fa-angle-down"></i></span>
                        Shortcodes and widgets  
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <p>Cmsmasters' Custom WordPress theme admin panel includes a Super Extended Shortcodes pack for sophisticated content formatting and improved presentation. A wide collection of useful widgets allow you to improve your website’s interaction with visitors, bringing its functionality to a new level.</p>
                        </li>
                    </ul>
                </li>
                <br>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle-3" data-toggle="dropdown">
                        <span class="view-icon"><i class="fa fa-angle-down"></i></span>
                        2 Slider Plugins Inside 
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <p>Our themes come with two really popular slider plugins - a Layer Slider and a Revolution Slider, already styled to fit the theme design perfectly . Create multiple sliders with an unlimited amount of animated slides and locate them anywhere on any page of your website.  </p>
                        </li>
                    </ul>
                </li>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="view-text" data-folder="text" data-type="">
                    <h3>AGRICULTURAL STATS</h3>
                </div>
                <div class="chart-man" data-folder="stat" data-type="">
                    <div class="percent_parent"> 
                        <!-- item-1 -->
                        <div class="percent_item-1">
                            <div class="percent_item_colored_wrap">
                                <div class="percent_item_colored">
                                </div>
                                <span class="percent_item_text">Green Peas </span> 
                                <span class="percent_item_value">92%</span>
                            </div>
                        </div> 
                        <!-- item-2 -->
                        <div class="percent_item-2">
                            <div class="percent_item_colored_wrap">
                                <div class="percent_item_colored">
                                </div>
                                <span class="percent_item_text">Sunflower Seeds</span> 
                                <span class="percent_item_value">64%</span>
                            </div>
                        </div>
                        <div class="percent_item-3">
                            <div class="percent_item_colored_wrap">
                                <div class="percent_item_colored">
                                </div>
                                <span class="percent_item_text">Carrots</span> 
                                <span class="percent_item_value">87%</span>
                            </div>
                        </div>
                        <div class="percent_item-4">
                            <div class="percent_item_colored_wrap">
                                <div class="percent_item_colored">
                                </div>
                                <span class="percent_item_text">Tomatoes</span> 
                                <span class="percent_item_value">75%</span>
                            </div>
                        </div>
                        <div class="percent_item-5">
                            <div class="percent_item_colored_wrap">
                                <div class="percent_item_colored">
                                </div>
                                <span class="percent_item_text">Salad</span> 
                                <span class="percent_item_value">82%</span>
                            </div>
                        </div>
                        <div class="percent_item-6">
                            <div class="percent_item_colored_wrap">
                                <div class="percent_item_colored">
                                </div>
                                <span class="percent_item_text">Sweet Corn</span> 
                                <span class="percent_item_value">55%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>