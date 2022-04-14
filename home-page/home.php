<?php 
session_start();
error_reporting(0);
include '../koneksi.php';

function checkLoginTime($hour) {
    $time = $_SERVER['REQUEST_TIME'];
    $timeout_second = 60;
    $timeout_hour = $hour;
    $timeout_duration = $timeout_second * $timeout_hour;
    $_SESSION['timeout_duration'] = $timeout_duration;

    if (isset($_SESSION['LAST_ACTIVITY'])) {
        if (($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
            session_unset();
            session_destroy();
            session_start();

            echo "
                <script>
                    document.location.href ='';
                </script>
            ";
        }
    } else {
        $_SESSION['LAST_ACTIVITY'] = $time;
    }
}

function setLoginTime() {
    if( ! empty($_POST['rememberme'])) {
        // Batas waktu. 24 jam == 1 hari
        checkLoginTime(72);
    } else {
        checkLoginTime(1);
    }
}

function login($username, $password, $level) {
    global $koneksi;

    if ($level == 'Admin') {
        $login = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' AND password = '$password' AND level = '$level'");
        $cek = mysqli_num_rows($login);

        if ($cek > 0){
            $_SESSION['id_admin'] = $id_admin;
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            $_SESSION['nama'] = $nama;
            $_SESSION['foto'] = $foto;
            $_SESSION['jabatan'] = $jabatan;
            $_SESSION['alamat'] = $alamat;
            $_SESSION['email'] = $email;
            $_SESSION['level'] = $level;

            echo "
                <script>
                    // alert('Berhasil Masuk');
                    document.location.href ='../admin/dashboard';
                </script>
            ";

            setLoginTime();
        } else {
            echo "
                <script>
                    alert('Username / Password Salah !');
                    document.location.href ='';
                </script>";

            logout();
        }
    } else if ($level == 'Peserta') {
        $login = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE username = '$username' AND password = '$password' AND level = '$level'");
          $cek = mysqli_num_rows($login);

          if ($cek > 0) {
            foreach ($login as $row) {
                $_SESSION['id_daftar'] = $row['id_daftar'];
                $_SESSION['username'] = $username;
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['tempat'] = $row['tempat'];
                $_SESSION['status'] = "login";
                $_SESSION['tanggal'] = date('Y-m-d');
                $_SESSION['foto'] = $row['foto'];
                $_SESSION['level'] = $level;
            }

            echo "
                <script>
                    // alert('Berhasil Masuk');
                    document.location.href ='../peserta/dashboard';
                </script>
            ";

            setLoginTime();
          } else {
            echo "
                <script>
                    alert('Username / Password Salah !');
                    document.location.href ='';
                </script>";

              logout();
          }
    } else if ($level == 'Instruktur') {
        $login = mysqli_query($koneksi, "SELECT * FROM user_instruktur WHERE username = '$username' AND password = '$password' AND level = '$level'");
                $cek = mysqli_num_rows($login);
                
        if ($cek > 0) {
            foreach ($login as $row) {
                $_SESSION['id_user'] = $row['id_user'];
                $_SESSION['id_materi'] = $row['id_materi'];
                $_SESSION['jabatan'] = $row['jabatan'];
                $_SESSION['status'] = "login";
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['level'] = $row['level'];
            }

            echo "
                <script>
                    // alert('Berhasil Masuk');
                    document.location.href ='../instruktur/dashboard';
                </script>
            ";

            setLoginTime();
        } else {
            echo "
            <script>
              alert('Username atau Password Salah !');
              document.location.href ='home';
            </script>
            ";

            logout();
        }
    } else {
        echo "
        <script>
            alert('Pilih Level login dahulu');
            document.location.href ='home';
        </script>
        "; 
    }

    return;
}

if (!empty($_SESSION['level'])) {
    switch ($_SESSION['level']) {
        case 'Admin':
            echo "
                <script>
                    document.location.href ='../admin/dashboard';
                </script>
            ";

        case 'Peserta':
            echo "
                <script>
                    document.location.href ='../peserta/dashboard';
                </script>
            ";

            break;
        
        default:
            echo "
                <script>
                    document.location.href ='../';
                </script>
            ";

            break;
    }
}

if (isset($_POST["login"])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];  
    $login = [
        'username' => $username,
        'password' => $password,
        'level' => $level,
    ];

    login($username, $password, $level);
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
                        <div class="form-group">
                            <select id="level" name="level" class="form-control">
                                <option>- Pilih Otoritas -</option>
                                <option value="Admin">Admin</option>
                                <option value="Peserta">Peserta</option>
                                <option value="Instruktur">Instruktur</option>
                            </select>
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing" name="rememberme">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                                </div>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit" name="login">Submit <i class="ti-arrow-right"></i></button>
                        </div><br>
                        <center><a href="../home"><button type="button" class="btn btn-outline-primary mb-3">Kembali</a> </button></center>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Don't have an account? <a href="register">Sign up</a></p>
                            <p class="text-muted"><a href="forgot">Forgot your password</a>?</p>
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
    <?php include 'footer.php'; ?>
</body>

</html>