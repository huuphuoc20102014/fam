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
$less->compileFile('less/1918.less', 'css/1918.css');
$less->compileFile('less/1916.less', 'css/1916.css');
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

        <title>Home - AloShop</title>

        <link rel="stylesheet" href="<?php echo $url_path ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/swiper.min.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/imagehover.min.css">

        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1900.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1918.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1916.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1912.css">

        <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo $url_path ?>/js/owl.carousel.min.js"></script>
        <script src="<?php echo $url_path ?>/js/swiper.min.js"></script>
        <script src="<?php echo $url_path ?>/js/jquery.final-countdown.js"></script>
        <script src="<?php echo $url_path ?>/js/kinetic.js"></script>

        <script src="<?php echo $url_path ?>/js/1900.js"></script>
        <script src="<?php echo $url_path ?>/js/1918.js"></script>
        <script src="<?php echo $url_path ?>/js/1912.js"></script>

    </head>

    <body>
        <?php include $dir_block . '/blocks/1900/1900-content.php'; ?>
        <?php include $dir_block . '/blocks/1918/1918-content.php'; ?>
        <?php include $dir_block . '/blocks/1916/1916-content.php'; ?>
        
        


        <?php include $dir_block . '/blocks/1912/1912-content.php'; ?>
    </body>
</html>