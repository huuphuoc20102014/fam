<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1520">
    <div class="container">
        <div class="fam-header row">
            <div class="col-md-3">
                <a href="1.php">
                    <img src="<?php echo $url_path ?>/image/logo.png" alt="erorr" class="img-responsive">
                </a>
            </div>
            <div class="col-md-5 fam-menu">
                
            </div>
            <div class="col-md-4 fam-search">
                <form action="#">
                    <input type="text" placeholder="Nhập từ khóa">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    <button>
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </button>
                    <button class="fam-login">
                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                        Login
                    </button>
                    <button class="fam-login">
                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                        register
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>