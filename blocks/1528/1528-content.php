<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1528">

    <div class="agricul-tural-news">
        <div class="row view-border-1">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="img-view">
                    <img src="<?php echo $url_path ?>/images/img-1.jpg" alt="#" class="img-responsive">
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="text-view">
                    <a href="https://monngonmoingay.com/">móm ngon mỗi ngày trong tích tắc</a>
                    <!-- <h3>perfect recipes to cook delicious organic dishes.</h3> -->
                    <a href="https://monngonmoingay.com/" class="link-1"><i class="fa fa-angle-right"></i></a>
                </div>
            </div> 
        </div>
        <br>
        <div class="row view-border-2">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="img-view">
                    <img src="<?php echo $url_path ?>/images/img-2.jpg" alt="#" class="img-responsive">
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="text-view">
                    <a href="http://kenh14.vn/cac-mon-an-tot-cho-suc-khoe.html">Các Món Ăn Tốt Cho Sức Khỏe</a>
                    <a href="http://kenh14.vn/cac-mon-an-tot-cho-suc-khoe.html" class="link-2"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>