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
$less->compileFile('less/1523.less', 'css/1523.css');
$less->compileFile('less/1524.less', 'css/1524.css');
$less->compileFile('less/1530.less', 'css/1530.css');
$less->compileFile('less/1528.less', 'css/1528.css');
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

    <!-- Library  -->
    <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/swiper.min.css" rel="stylesheet" type="text/css"/>
    <script src="<?php echo $url_path ?>/js/jquery.min.js"></script>
    <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $url_path ?>/js/swiper.min.js"></script>


    <!-- File css  -->
    <link href="<?php echo $url_path ?>/css/home.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $url_path ?>/css/1525.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/1520.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $url_path ?>/css/1522.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $url_path ?>/css/1523.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $url_path ?>/css/1524.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $url_path ?>/css/1530.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $url_path ?>/css/1528.css" rel="stylesheet" type="text/css"/>
    <!-- File js  -->
    <script src="<?php echo $url_path ?>/js/1522.js" type="text/javascript"></script>
    <script src="<?php echo $url_path ?>/js/1524.js" type="text/javascript"></script>

</head>

<body>
    <div class="top-header">
        <?php include $dir_block . '/blocks/1520-content.php'; ?>

    </div>
    <div class="page-content">
       <div class="container main-page-content">
            <?php include $dir_block . '/blocks/1525-content.php'; ?>
           <?php include $dir_block . '/blocks/1522-content.php'; ?>
           <?php include $dir_block . '/blocks/1523-content.php'; ?>
           <?php include $dir_block . '/blocks/1524-content.php'; ?>
           <div class="type-1530-1528">
               <div class="row">
                   <div class="col-md-6">
                       <?php include $dir_block . '/blocks/1530-content.php'; ?>
                   </div>
                   <div class="col-md-6">
                       <?php include $dir_block . '/blocks/1528-content.php'; ?>
                   </div>
               </div>
           </div>
       </div>
   </div>
</body>
</html>