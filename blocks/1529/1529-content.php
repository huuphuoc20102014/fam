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
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3&appId=459678921451900&autoLogAppEvents=1"></script>
                    <div class="fb-page" data-href="https://www.facebook.com/shopraudalat" data-tabs="timeline" data-width="360" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/shopraudalat" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/shopraudalat">Shopraudalat.com</a></blockquote></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="view-recent-testimonials"> 
                    <h3 class="fb-testimonials">thông tin về cửa hàng</h3>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="view-name">
                                    <span><a href="#">ms.oanh/</a>sake trần</span>
                                </div>
                                <a class="view-img" href="#">
                                    <img src="<?php echo $url_path ?>/images/img-2.jpg" alt="s1" class="img-responsive">
                                </a>
                                <div class="view-pointer">
                                    <span><i class="fa fa-angle-left"></i></span>
                                    <span><i class="fa fa-angle-right"></i></span>
                                </div>
                                <p>
                                    Shop chuyên cung cấp các loại <a href="#">Rau Củ Quả Đà Lạt.</a> 
                                    Được canh tác theo phương pháp hữu cơ .
                                    Đảm bảo cho người sử dụng an toàn tuyệt đối .
                                    Quý khách có thể ghé shop để chọn lựa những sản phẩm phù hợp với từng bữa ăn gia đình mình.<a href="#">Shop luôn nhận order online trực tuyến 24/24.</a>
                                    Rất vui lòng phục vụ quý khách !
                                </p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="view-time">
                    <h3 class="fb-twitter">Thông tin liên hệ cửa hàng</h3>
                    <div class="view-years">
                        <div class="years">
                            <i class="fa fa-twitter"></i>
                            <span>[HỖ TRỢ KHÁCH HÀNG]</span>
                        </div>
                        
                        <p>
                            HOTLINE : 
                            <a href="#" target="_blank" rel="nofollow">0902.903.199</a>
                        </p>
                        <p>
                         HOTLINE : 
                         <a href="#" target="_blank" rel="nofollow">0707.804.416</a>
                     </p>
                 </div>
             </div>
             <br>
             <div class="view-time">
                <div class="view-years">
                    <div class="years">
                        <i class="fa fa-twitter"></i>
                        <span>[CƠ SỞ SHOP NÔNG SẢN]</span>
                    </div>
                    <p>
                        cơ sở 1: 
                        <a href="https://www.google.com/maps/place/23+Tr%E1%BA%A7n+V%C4%83n+%C6%A0n,+T%C3%A2n+S%C6%A1n+Nh%C3%AC,+T%C3%A2n+Ph%C3%BA,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.8021341,106.6285801,17z/data=!3m1!4b1!4m5!3m4!1s0x31752957b8d724ff:0x53717794511a2bef!8m2!3d10.8021288!4d106.6307688" target="_blank" rel="nofollow">23 Trần văn ơn - Phường tân sơn nhì - quận tân phú.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" role="contentinfo">
        <div class="row footer-row">
            <div class="col-md-8">
                <div class="footer_inner">
                    <span class="copyright">Powered and Designed by "H-P" Group Copyright © 2019 HP Group - All Rights Reserved</span>
                </div>
            </div>
            <div class="col-md-3">
                <span class="social_icons">
                    <span class="icon-twitter"><i class="fa fa-twitter"></i></span>
                    <span class="icon-facebook">
                        <a href="https://www.facebook.com/saketran1987">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </span>
                    <span class="icon-google"><i class="fa fa-google"></i></span>
                    <span class="icon-rss"><i class="fa fa-rss"></i></span>
                </span>
            </div>
        </div>
        <!--  -->
    </footer>
</div>
</div>