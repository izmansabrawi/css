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
            
            $_SESSION['id_daftar'] = $row['id_daftar'];
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
                alert('SELECT * FROM pendaftaran WHERE username = '$username' AND password = '$password');
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
 ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Jitu Kreasi Utama | Home</title>
  <!--meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Biz-Pro Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!--//meta tags ends here-->
  <!--booststrap-->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <!--//booststrap end-->
  <!-- font-awesome icons -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- //font-awesome icons -->
  <!--stylesheets-->
  <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
  <!--//stylesheets-->
  <link href="//fonts.googleapis.com/css?family=Muli:400,600,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
</head>

<body>
  <div class="" id="home">
    <!-- header -->

    <div class="headder-top">
      <div id="logo">
        <h1>
          <a href="home"><img src="images/LOGO.png" style="height: 60px; width: 60px"></a>
        </h1>
      </div>
      <!-- nav -->
      <nav>

        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop">
        <ul class="menu">
          <li class="active">
            <a href="home">Home</a>
          </li>
          <li class="active">
            <a href="login">Login</a>
          </li>
        </ul>
      </nav>
      <div class="form-w3layouts-grid">
          <h2 style="color: red">PT. Jitu Kreasi Utama</h2>
      </div>
    </div>
    
  </div><br><br><br><br><br>
  <!-- //banner -->
  
  <section class="footer-bottom py-lg-4 py-md-3 py-sm-3 py-3" id="contact">
    <div class="container py-lg-12 py-md-4 py-sm-4 py-12">
      <h3 style="font-family: Verdana; font-size: 25px">LOGIN</h3><br>
      <div class=" contact-form-txt">
        <form action="#" method="post">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 form-group contact-forms mb-12">
              <input type="text" name="data" class="form-control" placeholder="Email / Username" required="" autofocus="" autocomplete="">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 form-group contact-forms mb-12">
              <input type="password" name="password" class="form-control" placeholder="Password" required="" autocomplete="">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 form-group contact-forms mb-12">
                <select class="form-control m-bot15" id="level" name="level">
                    <option>- Pilih Otoritas -</option>
                    <option value="Admin">Admin</option>
                    <option value="Peserta">Peserta</option>
                    <option value="Instruktur">Instruktur</option>
                </select>
            </div>
          </div>
          <button type="submit" class="btn sent-butnn">Login</button>&nbsp;<a href="register">Belum punya akun? Daftar disini</a>
        </form>
      </div>
    </div>
  </section><br><br><br><br><br>
  <!--//contact -->
 <?php include 'footer.php'; ?>