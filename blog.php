<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/1900.less', 'css/1900.css');
$less->compileFile('less/1914.less', 'css/1914.css');
$less->compileFile('less/1915.less', 'css/1915.css');
$less->compileFile('less/1911.less', 'css/1911.css');
$less->compileFile('less/1913.less', 'css/1913.css');
$less->compileFile('less/1912.less', 'css/1912.css');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--Meta, title, CSS, favicons, etc.--> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog - AloShop</title>

        <link rel="stylesheet" href="<?php echo $url_path ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/swiper.min.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/imagehover.min.css">

        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1900.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1914.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1915.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1911.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1913.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1912.css">


        <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo $url_path ?>/js/owl.carousel.min.js"></script>
        <script src="<?php echo $url_path ?>/js/swiper.min.js"></script>
        <script src="<?php echo $url_path ?>/js/jquery.final-countdown.js"></script>
        <script src="<?php echo $url_path ?>/js/kinetic.js"></script>

        <script src="<?php echo $url_path ?>/js/1900.js"></script>
        <script src="<?php echo $url_path ?>/js/1914.js"></script>
        <script src="<?php echo $url_path ?>/js/1915.js"></script>
        <script src="<?php echo $url_path ?>/js/1911.js"></script>
        <script src="<?php echo $url_path ?>/js/1913.js"></script>
        <script src="<?php echo $url_path ?>/js/1912.js"></script>

    </head>

    <body>
        <?php include $dir_block . '/blocks/1900/1900-content.php'; ?>
        <div class="blog-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <?php include $dir_block . '/blocks/1914/1914-content.php'; ?>
                        <?php include $dir_block . '/blocks/1915/1915-content.php'; ?>
                        <?php include $dir_block . '/blocks/1911/1911-content.php'; ?>
                    </div>
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <?php include $dir_block . '/blocks/1913/1913-content.php'; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include $dir_block . '/blocks/1912/1912-content.php'; ?>
    </body>
</html>