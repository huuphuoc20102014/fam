<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/blocks/1525/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('blocks/1520/less/1520.less', 'blocks/1520/css/1520.css');
$less->compileFile('blocks/1525/less/1525.less', 'blocks/1525/css/1525.css');
$less->compileFile('blocks/1522/less/1522.less', 'blocks/1522/css/1522.css');
$less->compileFile('blocks/1523/less/1523.less', 'blocks/1523/css/1523.css');
$less->compileFile('blocks/1524/less/1524.less', 'blocks/1524/css/1524.css');
$less->compileFile('blocks/1526/less/1526.less', 'blocks/1526/css/1526.css');
$less->compileFile('blocks/1528/less/1528.less', 'blocks/1528/css/1528.css');
$less->compileFile('blocks/1529/less/1529.less', 'blocks/1529/css/1529.css');
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

        <!-- Library css  -->
        <link href="<?php echo $url_path ?>/blocks/1525/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/blocks/1525/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/blocks/1522/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="blocks/1522/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <!-- File css  -->
        <link href="<?php echo $url_path ?>/blocks/1520/css/1520.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/blocks/1525/css/1525.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/blocks/1522/css/1522.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/blocks/1523/css/1523.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/blocks/1523/css/1524.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/blocks/1524/css/1524.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/blocks/1526/css/1526.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/blocks/1528/css/1528.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/blocks/1529/css/1529.css" rel="stylesheet" type="text/css"/>


        <!-- Library javascript  -->
        <script src="<?php echo $url_path ?>/blocks/1525/js/jquery.min.js"></script>
        <script src="<?php echo $url_path ?>/blocks/1525/js/bootstrap.min.js"></script>
        <script src="<?php echo $url_path ?>/blocks/1522/js/swiper.min.js"></script>

        <script src="blocks/1522/js/swiper.min.js" type="text/javascript"></script>
        <!-- File js  -->
        <script src="<?php echo $url_path ?>/blocks/1522/js/1522.js" type="text/javascript"></script>
    </head>

    <body style="background:#0b7104 url('blocks/background/background.png')repeat 50% 0;
          background-repeat: no-repeat;">
        <div class="top-header">
            <?php include $dir_block . '/blocks/1520/1520-content.php'; ?>
            <?php include $dir_block . '/blocks/1525/1525-content.php'; ?>

        </div>
        <div class="home-body">
            <?php include $dir_block . '/blocks/1522/1522-content.php'; ?>
            <?php include $dir_block . '/blocks/1523/1523-content.php'; ?>
            <?php include $dir_block . '/blocks/1524/1524-content.php'; ?>
            <div class="container">
                <div class="row" style="background: #fff; margin: 0;">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php include $dir_block . '/blocks/1526/1526-content.php'; ?>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php include $dir_block . '/blocks/1528/1528-content.php'; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <?php include $dir_block . '/blocks/1529/1529-content.php'; ?>
        </div>
    </body>
</html>