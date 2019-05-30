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
$less->compileFile('blocks/1525/less/blog.less', 'blocks/1525/css/blog.css');
$less->compileFile('blocks/1520/less/1520.less', 'blocks/1520/css/1520.css');
$less->compileFile('blocks/1525/less/1525.less', 'blocks/1525/css/1525.css');
$less->compileFile('blocks/1548/less/1548.less', 'blocks/1548/css/1548.css');
$less->compileFile('blocks/1547/less/1547.less', 'blocks/1547/css/1547.css');
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
  <link href="<?php echo $url_path ?>/blocks/1525/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $url_path ?>/blocks/1525/css/swiper.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $url_path ?>/blocks/1525/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- File css  -->
  <link href="<?php echo $url_path ?>/blocks/1525/css/blog.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $url_path ?>/blocks/1520/css/1520.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $url_path ?>/blocks/1525/css/1525.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $url_path ?>/blocks/1548/css/1548.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $url_path ?>/blocks/1547/css/1547.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $url_path ?>/blocks/1529/css/1529.css" rel="stylesheet" type="text/css" />
  <!-- Library javascript  -->
  <script src="<?php echo $url_path ?>/blocks/1525/js/jquery-1.12.4.min.js"></script>
  <script src="<?php echo $url_path ?>/blocks/1525/js/jquery.min.js"></script>
  <script src="<?php echo $url_path ?>/blocks/1525/js/bootstrap.min.js"></script>
  <script src="<?php echo $url_path ?>/blocks/1525/js/swiper.min.js"></script>
  <!-- File js  -->
  <script src="<?php echo $url_path ?>/blocks/1547/js/1547.js" type="text/javascript"></script>
  <script src="<?php echo $url_path ?>/blocks/1529/js/1529.js" type="text/javascript"></script>
</head>

<body style="background:#0b7104 url('blocks/background/background.png')repeat 50% 0;
background-repeat: no-repeat;">
<div class="top-header">
    <?php include $dir_block . '/blocks/1520/1520-content.php'; ?>
    <?php include $dir_block . '/blocks/1525/1525-content.php'; ?>
</div>
<div class="body-blog">
    <?php include $dir_block . '/blocks/1548/1548-content.php'; ?>
    <div class="container">
        <div class="text-view" style="background: #fff; padding-top: 1px; padding-bottom: 1px;">
            <?php include $dir_block . '/blocks/1547/1547-content.php'; ?>
        </div>
    </div>
    
</div>
<div class="footer">
    <?php include $dir_block . '/blocks/1529/1529-content.php'; ?>
</div>

</body>
</html>