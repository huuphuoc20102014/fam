<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1525">
    <div class="container">
        <nav class="navbar navbar-expand-xl navbar-light bg-light">
            <a class="navbar-brand" href="home.php"><img src="<?php echo $url_path ?>/images/logo.png" alt="img-logo" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentXL" aria-controls="navbarSupportedContentXL" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContentXL">
                <ul class="navbar-nav mr-auto">
                    <li class="active">
                        <a class="nav-link dropdown-toggle before-home" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Home
                            <span class="sr-only">(current)</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Home Page 1</a>
                            <a class="dropdown-item" href="#">Home Page 2</a>
                            <a class="dropdown-item" href="#">Home Page 3</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown nav-item-features">
                        <a class="nav-link dropdown-toggle before-features" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Features
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Shortcodes</a>
                            <a class="dropdown-item" href="#">Block Shortcodes</a>
                            <a class="dropdown-item" href="#">Something here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown nav-item-portfolio">
                        <a class="nav-link dropdown-toggle before-portfolio" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Portfolio
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item nav-item-blog">
                        <a class="nav-link before-blog" href="#">Blog</a>
                    </li>
                    <li class="nav-item nav-item-shop">
                        <a class="nav-link before-shop" href="#">Shop</a>
                    </li>
                    <li class="nav-item nav-item-why-us">
                        <a class="nav-link before-why-us" href="#">Why US?</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>

</div>