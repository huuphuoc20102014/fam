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
$less->compileFile('less/home.less', 'css/home.css');
$less->compileFile('less/1525.less', 'css/1525.css');
$less->compileFile('less/1520.less', 'css/1520.css');
$less->compileFile('less/1522.less', 'css/1522.css');


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--Meta, title, CSS, favicons, etc.--> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agriculture</title>

        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
                <link href="<?php echo $url_path ?>/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        
        <link href="<?php echo $url_path ?>/css/home.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/1525.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/1520.css" rel="stylesheet" type="text/css"/>
        <link href="css/1522.css" rel="stylesheet" type="text/css"/>
        
        <script src="<?php echo $url_path ?>/js/jquery.min.js"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo $url_path ?>/js/swiper.min.js"></script>
        <script src="<?php echo $url_path ?>/js/1522.js" type="text/javascript"></script>


    </head>

    <body>
        <div class="top-header">
            <?php include $dir_block . '/blocks/1520/1520-content.php'; ?>
            <?php include $dir_block . '/blocks/1525/1525-content.php'; ?>
             <?php include $dir_block . '/blocks/1522/1522-content.php'; ?>
        </div>
        
    </body>
</html>