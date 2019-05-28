<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1529">
    <div class="container">
        <div class="view-border-top"></div>
        <div class="row footer-row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="one_third">
                    <a href="#"><h3 class="fb-facebook">fanpage facebook sake tran</h3></a>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhuylele24%2F&tabs=timeline&width=340&height=300&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="360" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="view-recent-testimonials"> 
                    <h3 class="fb-testimonials">Recent Testimonials</h3>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="view-name">
                                    <span><a href="#">mr.jones/</a>manor farm</span>
                                </div>
                                <a class="view-img" href="#">
                                    <img src="<?php echo $url_path ?>/images/img-1.jpg" alt="s1" class="img-responsive">
                                </a>
                                <div class="view-pointer">
                                    <span><i class="fa fa-angle-left"></i></span>
                                    <span><i class="fa fa-angle-right"></i></span>
                                </div>
                                <p>Jus’ great for my farm website. So easy to use, never thought it would be so. I set up my website almost in no time, loved that!</p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="view-time">
                    <h3 class="fb-twitter">Twitter</h3>
                    <div class="view-years">
                        <div class="years">
                            <i class="fa fa-twitter"></i>
                            <span>[3 years ago]</span>
                        </div>
                        
                        <p>
                            Learn how great sports websites are created @cmsmasters: 
                            <a href="#" target="_blank" rel="nofollow">https://t.co/LJzYA0kwIk</a>
                        </p>
                    </div>
                </div>
                <br>
                <div class="view-time">
                    <div class="view-years">
                        <div class="years">
                            <i class="fa fa-twitter"></i>
                            <span>[3 years ago]</span>
                        </div>
                        
                        <p>
                            Learn how great sports websites are created @cmsmasters: 
                            <a href="#" target="_blank" rel="nofollow">https://t.co/LJzYA0kwIk</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer" role="contentinfo">
            <div class="row footer-row">
                <div class="col-md-6">
                    <div class="footer_inner">
                        <span class="copyright">This is a sample website - cmsmasters © 2019 / All Rights Reserved</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <span class="social_icons">
                        <span class="icon-twitter"><i class="fa fa-twitter"></i></span>
                        <span class="icon-facebook"> <i class="fa fa-facebook"></i></span>
                        <span class="icon-google"><i class="fa fa-google"></i></span>
                        <span class="icon-rss"><i class="fa fa-rss"></i></span>
                    </span>
                </div>
            </div>
            
            <!--  -->
        </footer>
    </div>
</div>
    <!-- border: 1px solid;
    width: 50%;
    height: 30px;
    border-radius: 50%;
    vertical-align: middle;
    text-align: center; -->