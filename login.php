<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
  $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
  require_once($dir_block . '/blocks/1054/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('blocks/1054/less/1054.less', 'blocks/1054/css/1054.css');
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
  <link href="<?php echo $url_path ?>/blocks/1054/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $url_path ?>/blocks/1054/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <!-- File css  -->
  <link href="<?php echo $url_path ?>/blocks/1054/css/1054.css" rel="stylesheet" type="text/css" />

  <!-- Library javascript  -->
  <script src="<?php echo $url_path ?>/blocks/1054/js/jquery-1.12.4.min.js"></script>
  <script src="<?php echo $url_path ?>/blocks/1054/js/bootstrap.min.js"></script>
  <script src="<?php echo $url_path ?>/blocks/1054/js/swiper.min.js"></script>

  <!-- File js  -->
  <!-- <script src="<?php echo $url_path ?>/blocks/1054/js/1054.js" type="text/javascript"></script> -->

  
</head>

<body>
    <?php include $dir_block . '/blocks/1054/1054-content.php'; ?>
</body>
</html>