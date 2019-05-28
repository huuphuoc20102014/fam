<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-1526">
    <div class="agricul-tural-news">
        <div class="agricul-tural">
            <h2>nông sản việt</h2>
        </div>
        <div class="row view-border-1">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="img-view">
                    <img src="<?php echo $url_path ?>/images/img-1.jpg" alt="#" class="img-responsive">
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="text-view">
                    <a href="https://tuoitre.vn/nong-san-da-lat.html">thông tin về nông sản đà lạt</a>
                    <p>
                        Đà Lạt là thành phố trực thuộc tỉnh Lâm Đồng nằm trên Cao nguyên Lâm Viên thuộc vùng Tây Nguyên.
                        Thành Phố Đà Lạt cách Biên Hòa(Đồng Nai) 278km, thủ đô Hà Nội 1.481km, Tp. Hồ Chí Minh 293km, Nha Trang (Khánh Hòa) 205km.
                    </p>
                </div>
            </div> 
        </div>
        <br>
        <div class="row view-border-2">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="img-view">
                    <img src="<?php echo $url_path ?>/images/img-2.jpg" alt="#" class="img-responsive">
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="text-view">
                    <a href="https://tuoitre.vn/nong-san-da-lat.html">Nông sản sạch</a>
                    <p>
                        Hạn chế đến mức thấp nhất hoặc không sử dụng phân hoá học, thuốc trừ sâu, thuốc kích thích nhằm giảm tối đa dư lượng độc tố có trong nông sản như Nitrat, thuốc trừ sâu, kim loại nặng, các vi sinh vật gây bệnh...
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>