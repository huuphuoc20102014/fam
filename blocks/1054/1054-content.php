<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

//code login php
include './admin.php';
if (isset($_POST['btnLogin'])) {
    $adminname = $_POST['adminname'];
    $password = $_POST['password'];
    if (Admin::login($adminname, $password)) {

        header("Location: admin-home.php");
    } else {
        header("Location: login.php");
        echo "<script>alert('Đăng nhập thất bại')</script>";
    }
} else {
    ?>
    <div class="type-1054">
        <div class="container">
            <div class="row">
                <!--BACKGROUND-->
                <div class="cover-bg"></div>
                <!--/END BACKGROUND-->

                <!--TOP LINKS-->
                <div class="top-links">
                    <span>Don't have an account yet?</span>
                    <a href="#" class="ember-view">Sign Up</a>
                    <!--GOOGLE-->

                    <div class="btn-top-links">

                        <div class="btn-top-links">
                            <a class="btn btn-block btn-social btn-google" href="#">
                                <i class="fa fa-google-plus"></i>
                                Google
                            </a>
                        </div>
                        <!--/END GOOGLE-->

                        <!--FACEBOOK-->
                        <div class="btn-top-links">
                            <a class="btn btn-block btn-social btn-facebook" href="#">
                                <i class="fa fa-facebook"></i>
                                Facebook
                            </a>
                        </div>
                        <!--/END FACEBOOK-->
                    </div>
                </div>
                <!--/END TOP LINKS-->
                <!--LOGIN-->
                <div class="landing-page">
                    <!--LOGO-->
                    <div class="logo">

                    </div>
                    <!--/END LOGO-->

                    <!--FORM LOGIN-->
                    <div class="login-page account-container">
                        <h1>Welcome to the admin page</h1>
                        <main>
                            <form  action="login.php" method="POST" id="form">
                                <!-- <input type="text" name="adminname" placeholder="Email Address" class="simple-input">
                                <hr>
                                <input type="password" name="password" placeholder="Password" class="simple-input">
                                <button type="submit" name="btnLogin" form="login-form" class="submit-button black">
                                    Sign In
                                </button> -->
                                <input type="text" class="simple-input" placeholder="Tên đăng nhập" name="adminname">
                                <hr>
                                <input type="password" class="simple-input" placeholder="Mật khẩu" name="password">
                                <button type="submit" name="btnLogin" class="submit-button black">Sign in</button>
                            </form>
                        </main>

                        <div class="extra-login-options">
                            <div class="checkbox white">
                                <input type="checkbox" id="remember-me">
                                <label for="remember-me" class="box"></label>
                            </div> 

                            <label for="remember-me" class="noselect">Remember my password</label>

                            <div class="pull-right">
                                <a href="#" >Forgot your password?</a>
                            </div>
                        </div>

                    </div>
                    <!--/END FORM LOGIN-->

                </div>
                <!--/END LOGIN-->
            </div>
        </div>
    </div>
<?php } ?>
