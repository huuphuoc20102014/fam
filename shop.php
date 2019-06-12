<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
  $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
  require_once($dir_block . '/blocks/1520/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('blocks/1520/less/1520.less', 'blocks/1520/css/1520.css');
$less->compileFile('blocks/1525/less/1525.less', 'blocks/1525/css/1525.css');
$less->compileFile('blocks/1538/less/1538.less', 'blocks/1538/css/1538.css');
$less->compileFile('blocks/1539/less/1539.less', 'blocks/1539/css/1539.css');
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
  <link href="<?php echo $url_path ?>/blocks/1525/css/swiper.min.css" rel="stylesheet" type="text/css"/>

  <!-- File css  -->
  <link href="<?php echo $url_path ?>/blocks/1520/css/1520.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $url_path ?>/blocks/1525/css/1525.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $url_path ?>/blocks/1538/css/1538.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $url_path ?>/blocks/1539/css/1539.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $url_path ?>/blocks/1529/css/1529.css" rel="stylesheet" type="text/css" />

  <!-- Library javascript  -->
  <script src="<?php echo $url_path ?>/blocks/1525/js/jquery-1.12.4.min.js"></script>
  <script src="<?php echo $url_path ?>/blocks/1525/js/bootstrap.min.js"></script>
  <script src="<?php echo $url_path ?>/blocks/1525/js/swiper.min.js"></script>

  <!-- File js  -->
  <script src="<?php echo $url_path ?>/blocks/1529/js/1529.js" type="text/javascript"></script>

  
</head>

<body style="background:#0b7104 url('blocks/background/background.png')repeat 50% 0; ">
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v3.3'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat"
    attribution=setup_tool
    page_id="408153699781286"
    theme_color="#0084ff"
    logged_in_greeting="Shop rau sạch Đà Lạt kính chào quý khách!"
    logged_out_greeting="Shop rau sạch Đà Lạt kính chào quý khách!">
  </div>
</div>
<?php include $dir_block . '/blocks/1520/1520-content.php'; ?>
<?php include $dir_block . '/blocks/1525/1525-content.php'; ?>
<?php include $dir_block . '/blocks/1538/1538-content.php'; ?>
<?php include $dir_block . '/blocks/1539/1539-content.php'; ?>
<?php include $dir_block . '/blocks/1529/1529-content.php'; ?>
</body>
</html>