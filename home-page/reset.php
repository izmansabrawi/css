<?php
session_start();
include '../koneksi.php';

if (empty($_GET['key'])) {
    echo "
        <script>
            document.location.href ='../home-page';
        </script>
    ";
}

function encryptString($string) {
    $string_to_encrypt="Test";
    $password="jitu2019";

    return openssl_encrypt($string,"AES-128-ECB",$password);
}

function decryptString($string) {
    $password="jitu2019";
    $encrypted_string=openssl_encrypt($string,"AES-128-ECB",$password);

    return openssl_decrypt($string,"AES-128-ECB",$password);
}

if ( ! empty($_POST['password'])) {
    $email = $_SESSION['reset_email'];
    $password = $_POST['password'];
    $query = mysqli_query($koneksi, "UPDATE `pendaftaran` SET `password` = '$password' WHERE `pendaftaran`.`email` = '$email';");
    
    if ($query) {
        echo "
        <script>
            alert('Kata sandi anda berhasil diganti.');
            document.location.href ='../home-page';
        </script>
        ";
    } else {
        echo "
            <script>
                alert('Kata sandi anda gagal diganti.');
                document.location.href ='../home';
            </script>
        ";
    }
} else {
    if ( ! empty($_GET['key'])) {
        $status = false;
        $data = json_decode(decryptString(base64_decode($_GET['key'])), TRUE);
        $email = $data['email'];
        $password = $data['password'];
        $login = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE email = '$email' AND password = '$password' LIMIT 1");
        $cek = mysqli_num_rows($login);

        if ($cek > 0) {
            $_SESSION['reset_email'] = $email;
            $status = true;
        } else {
            session_destroy();
        }
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

                <form action="" method="post">
                    <div class="login-form-head">
                        <h4>Reset Password</h4>
                    </div><br>
                    <center><img src="../images/logo.png" style="height: 100px"></center>
                    <div class="login-form-body">
                        <div class="form-gp">

                            <?php if ($status) { ?>
                                <label for="password">New Password</label>
                                <input type="text" id="password" name="password">
                                <i class="ti-lock"></i>
                            <?php } else { ?>
                                <center>Maaf, link yang anda berikan tidak sah/telah kedaluwarsa.</center>
                            <?php } ?>

                        </div>

                        <?php if ($status) { ?>
                            <div class="submit-btn-area">
                                <button id="form_submit" type="submit" name="login">Submit <i class="ti-arrow-right"></i></button>
                            </div>
                        <?php } else { ?>
                            <div class="submit-btn-area">
                                <center><a href="../home"><button type="submit" class="btn btn-outline-primary mb-3">Kembali</a> </button></center>
                            </div>
                        <?php } ?>

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