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
    <script src="<?php echo $url_path ?>/blocks/1529/js/1529.js" type="text/javascript"></script>
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

<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<style>
    #cfacebook{position:fixed;bottom:38px;right:20px;z-index:99;width:260px;height:auto;box-shadow:6px 6px 6px 10px rgba(0,0,0,0.2);border-top-left-radius:5px;border-top-right-radius:5px;overflow:hidden;}
    #cfacebook .fchat{float:left;width:100%;height:270px;overflow:hidden;display:none;background-color:#fff;}
    #cfacebook .fchat .fb-page{margin-top:-5px;float:left;}
    #cfacebook a.chat_fb{float:left;padding:0 25px;width:260px;color:#fff;text-decoration:none;height:40px;line-height:40px;text-shadow:0 1px 0 rgba(0,0,0,0.1);background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAqCAMAAABFoMFOAAAAWlBMV…8/UxBxQDQuFwlpqgBZBq6+P+unVY1GnDgwqbD2zGz5e1lBdwvGGPE6OgAAAABJRU5ErkJggg==);background-repeat:repeat-x;background-size:auto;background-position:0 0;background-color:#3a5795;border:0;border-bottom:1px solid #133783;z-index:9999999;margin-right:12px;font-size:18px;}
    #cfacebook a.chat_fb:hover{color:yellow;text-decoration:none;}
    .fchat span{ width:260px!important;}
</style>
<script>
    jQuery(document).ready(function () {
        jQuery(".chat_fb").click(function() {
            jQuery('.fchat').toggle('slow');
        });
    });
</script>
<div id="cfacebook">
    <a href="javascript:;" class="chat_fb" onClick="return:false;"><i class="fa fa-facebook-square"></i> Shopraudalat.com</a>
    <div class="fchat">
        <div style="width:250px;" class="fb-page"
        data-href="https://www.facebook.com/shopraudalat"
        data-tabs="messages"
        data-width="260"
        data-height="280"
        data-small-header="true">
        <div class="fb-xfbml-parse-ignore">
            <blockquote></blockquote>
        </div>
    </div> 
</div>
</body>
</html>