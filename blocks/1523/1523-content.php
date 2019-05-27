<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1523">
    <div class="container">
        <div class="row top-row">
            <div class="col-md-3 col-sm-6 col-xs-12 col-hover" >
                <div class="images" style="background-color: #ff6f24;">
                    <div class="caption">
                        <h2 class="widgettitle">ăn rau xanh hàng ngày</h2>
                        <a href="http://vfa.gov.vn/dinh-duong-hop-ly/tram-ngan-loi-ich-khi-an-rau-xanh-hang-ngay.html" class="view-text">Ngăn ngừa ung thư</a>
                        <p>
                            Chúng chứa nhiều chất chống oxy hóa, carotenoids, flavonoids giúp chống lại các bệnh ung thư dạ dày, ruột, da và ung thư vú. Thường xuyên tiêu thụ bông cải xanh, cải bruxen, bắp cải kích thích cơ thể sản xuất ra các hợp chất chống ung thư như indoles, sulforaphane, isothiocyanates...
                        </p>
                        <a href="#" class="block_link"></a>

                    </div>
                </div>
            </div><!--End 1-->
            <!--2-->
            <div class="col-md-3 col-sm-6 col-xs-12 col-hover">
                <a href="#">
                    <div class="images img2"  style="background-color: #f54027;">
                        <div class="caption">
                            <h2 class="widgettitle">ăn trái cây hàng ngày</h2>
                            <a href="https://news.zing.vn/6-loi-ich-tuyet-voi-cua-viec-an-trai-cay-tuoi-hang-ngay-post571306.html" class="view-text">Công dụng về trái cay</a>
                            <p>
                                Tránh ung thư, Tăng miễn dịch, Ngăn chặn các bệnh mãn tính, Tăng cường trí não, Ngăn chặn bệnh về tim và động mạch, Giảm cân, Làm đẹp da,..
                                <br>
                                Trái cây cung cấp nhiều vitamin:
                                Vitamin A, Vitamin B, Vitamin B6, vitamin B9 và vitamin B12, Vitamin C, Vitamin E, Vitamin P.
                            </p>
                            <a href="#" class="block_link"></a>
                        </div>
                    </div>
                </a>
            </div><!--End 2-->
            <!--3-->
            <div class="col-md-3 col-sm-6 col-xs-12 col-hover" >
                <a href="#">
                    <div class="images img3" style="background-color: #48a21d;">
                        <div class="caption">
                            <h2 class="widgettitle">Bữa ăn đủ dinh dưỡng</h2>
                            <a href="http://viendinhduong.vn/vi/tin-tuc---su-kien-noi-bat/bua-an-hop-ly-va-du-dinh-duong-tai-gia-dinh.html" class="view-text">Bữa ăn hợp lý</a>
                            <p>
                                Một bữa ăn cân đối cần có đủ 4 nhóm thực phẩm chính là nhóm bột đường (chủ yếu từ các loại ngũ cốc), nhóm chất đạm (thịt, cá, trứng, sữa, các loại đậu, đỗ...), nhóm chất béo (mỡ động vật, dầu thực vật), nhóm vitamin và khoáng chất (các loại rau, củ, quả và trái cay...)
                            </p>
                            <a href="#" class="block_link"></a>
                        </div>
                    </div>
                </a>
            </div><!--End 3-->
            <!--4-->
            <div class="col-md-3 col-sm-6 col-xs-12 col-hover" >
                <a href="#">
                    <div class="images img4" style="background-color: #ffbe01;">
                        <div class="caption">
                            <h2 class="widgettitle">bao nhiêu là đủ vitamin?</h2>
                            <a href="https://news.zing.vn/moi-ngay-an-bao-nhieu-rau-qua-de-du-vitamin-post710099.html" class="view-text">Ăn bao nhiêu là đủ?</a>
                            <p>
                                Chất bột đường: trung bình 12kg/người/tháng

                                - Chất đạm: ăn vừa phải, trung bình 2,5kg cá và thủy sản; 1,5kg thịt/người/tháng

                                - Chất béo (dầu ăn,mỡ,bơ): có mưc độ, khoảng 600gr/người/tháng

                                - Đường: ăn ít, dưới 500gr/người/tháng

                                - Muối: ăn hạn chế, dưới 180gr/người/tháng
                            </p>
                            <a href="#" class="block_link"></a>
                        </div>
                    </div>
                </a>
            </div><!--End 4-->
        </div><!--End row-->               
    </div> 
</div> 