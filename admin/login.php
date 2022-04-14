<?php 
session_start();
error_reporting(0);
include 'koneksi.php';

  if(isset($_POST["login"])){
    $username     = $_POST['username'];
    $password   = $_POST['password'];

    if ($level == 'Admin') {
      $login = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
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

          echo "
          <script>
            alert('Berhasil Masuk');
            document.location.href ='admin/dashboard';
          </script>
          ";
        
        }else {
          echo "<script>
            alert('Username / Password Salah !');
            document.location.href ='login';
          </script>";
        }
    } else if ($level == 'Peserta') {
      $login = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE username = '$username' AND password = '$password'");
          $cek = mysqli_num_rows($login);

          if ($cek > 0){

            foreach ($login as $row) {
            
            $_SESSION['id_daftar'] = $id_daftar;
            $_SESSION['username'] = $username;
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['nik'] = $row['nik'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['tempat'] = $row['tempat'];
            $_SESSION['status'] = "login";
            $_SESSION['tanggal'] = $tanggal;
            $_SESSION['nama'] = $nama;
            $_SESSION['foto'] = $foto;
            $_SESSION['jk'] = $jk;
            $_SESSION['agama'] = $agama;
            $_SESSION['pendidikan'] = $pendidikan;
            $_SESSION['alamat'] = $alamat;
            $_SESSION['provinsi'] = $provinsi;
            $_SESSION['kota'] = $kota;
            $_SESSION['kecamatan'] = $kecamatan;
            $_SESSION['desa'] = $desa;
            $_SESSION['no'] = $no;
            $_SESSION['status'] = $status;
            $_SESSION['ktp'] = $ktp;
            $_SESSION['foto'] = $foto;
            }

              echo "
              <script>
                alert('Berhasil Masuk');
                document.location.href ='peserta/dashboard';
            </script>
              ";
            
             $error = true;
          } else {
            echo "<script>
                alert('Username / Password Salah !');
                document.location.href ='login';
              </script>";
          }
    } else if ($level == 'Instruktur') {
        $login = mysqli_query($conn, "SELECT * FROM instruktur WHERE username = '$username' AND password = '$password'");
                $cek = mysqli_num_rows($login);
                
                if ($cek > 0){
                  foreach ($login as $row) {
                  
                  $_SESSION['id_instruktur'] = $row['id_instruktur'];
                  $_SESSION['status']   = "login";
                  $_SESSION['nama']     = $row['nama'];
                  }
                    echo "
                    <script>
                      alert('Berhasil Masuk');
                      document.location.href ='instruktur/dashboard';
                    </script>
                    ";
                  
                } else {
                    echo "
                    <script>
                      alert('Username atau Password Salah !');
                      document.location.href ='index.php';
                    </script>
                    ";
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
                <form>
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