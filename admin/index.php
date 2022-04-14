<?php
    if(!empty($_POST["forgot-password"])){
        $conn = mysqli_connect("localhost", "root", "", "jitu");
        
        $condition = "";
        if(!empty($_POST["username"])) 
            $condition = " username = '" . $_POST["username"] . "'";
        if(!empty($_POST["email"])) {
            if(!empty($condition)) {
                $condition = " and ";
            }
            $condition = " email = '" . $_POST["email"] . "'";
        }
        
        if(!empty($condition)) {
            $condition = " where " . $condition;
        }

        $sql = "Select * from pendaftaran " . $condition;
        $result = mysqli_query($conn,$sql);
        $user = mysqli_fetch_array($result);
        
        if(!empty($user)) {
            require_once("forgot-password-recovery-mail.php");
        } else {
            $error_message = 'No User Found';
        }
    }
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jitu Kreasi Utama</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--10">
                <form name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_forgot();">
                    <?php if(!empty($success_message)) { ?>
                    <div class="success_message"><?php echo $success_message; ?></div>
                    <?php } ?>

                    <div id="validation-message">
                        <?php if(!empty($error_message)) { ?>
                    <?php echo $error_message; ?>
                    <?php } ?>
                    <div class="login-form-head">
                        <h4>LOGIN</h4>
                    </div><br>
                    <center><img src="../images/logo.png" style="height: 100px"></center>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username">
                            <i class="ti-user"></i>
                        </div>
                        <div class="form-gp">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password">
                            <i class="ti-lock"></i>
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                                </div>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                        </div><br>
                        <center><a href="../home"><button type="submit" class="btn btn-outline-primary mb-3">Kembali</a> </button></center>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Don't have an account? <a href="register">Sign up</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>