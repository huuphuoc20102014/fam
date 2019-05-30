<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<script>
    $(document).ready(function(){

        $('.dropdown').click(function(){
            $('.inactive, .active').toggle();

        });
    });
</script>
<div class="birdd">

    <!-- <h1>TYPE 1149</h1> -->
    
    <div class="bird-birdd bird-birdd--one">
        <div class="bird bird--one"></div>
    </div>
    
    <div class="bird-birdd bird-birdd--two">
        <div class="bird bird--two"></div>
    </div>
    
    <div class="bird-birdd bird-birdd--three">
        <div class="bird bird--three"></div>
    </div>
    
    <div class="bird-birdd bird-birdd--four">
        <div class="bird bird--four"></div>
    </div>
    
</div>
</br>
</br>
<div class="type-1149">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="col-md-3">
                </div>
                <div class="row content5">
                    <div class="col-md-12">
                        <div class="x_panel5">
                            <div class="x_title">
                                <h2>giới thiệu</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <a data-toggle="collapse"href="#button5" class="dropdown">
                                        <li>
                                         <i class="fa fa-chevron-up active" id="on" style="display:none;"></i>
                                         <i class="fa fa-chevron-down inactive" id="off" ></i>
                                     </a>
                                 </li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Chưa phát triển</a>
                                        </li>
                                        <li><a href="#">Chưa phát triển</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a id="close-link5"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div id="button5" class="view-text">
                            <p>
                                kiến nghị xem xét mở rộng dự án chế biến alumin
                                Dự án Tổ hợp bauxite - nhôm Lâm Đồng được đánh giá hoạt động hiệu quả. Đến năm 2018, Công ty Nhôm Lâm Đồng khai thác quặng nguyên khai đạt trên 3,7 triệu tấn/năm, sản xuất và xuất khẩu sản phẩm alumina hydrate vượt công suất thiết kế 650.000 tấn/năm, tham gia giải quyết việc làm cho trên 1.500 lao động, trồng và phục hồi môi trường trên 58 ha cây keo, nộp ngân sách trên 300 tỉ đồng, kim ngạch xuất khẩu alumin chiếm 40% kim ngạch xuất khẩu của tỉnh Lâm Đồng.
                                Lãnh đạo tỉnh Lâm Đồng kiến nghị Bộ Công Thương quan tâm hơn nữa trong việc phát triển ngành khai thác và chế biến alumin luyện nhôm thành ngành công nghiệp quan trọng. Chỉ đạo Tập đoàn Than Khoáng sản tiếp tục quan tâm, đẩy nhanh tiến độ triển khai và mở rộng dự án đầu tư chế biến alumin; nghiên cứu dự án đầu tư sản xuất nhôm và các sản phẩm sau nhôm, hỗ trợ các dự án thu hồi quặng kim loại, sản xuất vật liệu không nung từ bùn đỏ qua khai thác, chế biến quặng bauxite, sản xuất alumin...
                            </p>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

    </div>
</div>
</div>