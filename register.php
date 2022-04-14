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
      <h3 style="font-family: Verdana; font-size: 25px">REGISTRASI</h3><br>
      <div class=" contact-form-txt">
        <form action="proses-regist" method="post" novalidate="novalidate" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
            <label>Nama Lengkap<span style="font-size: 12px; color: red"> *Sesuai KTP</span></label>
              <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="" autofocus="" autocomplete="">
            </div>
            <!-- <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
              <label>No. KTP/Kartu Pelajar<span style="font-size: 12px; color: red"> *pastikan no ktp 16 digit</span></label>
              <input type="text" name="no_ktp" class="form-control" placeholder="No. KTP/Kartu Pelajar" required="" autocomplete="">
            </div> -->
            <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
              <label>Username<span style="font-size: 12px; color: red"> *</span></label>
              <input type="text" name="username" class="form-control" placeholder="Username" required="" autocomplete="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
              <label>Agama<span style="font-size: 12px; color: red"> *</span></label>
              <select class="form-control" required="" name="agama">
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Kristen Katolik">Kristen Katolik</option>
                <option value="Kristen Protestan">Kristen Protestan</option>
                <option value="Islam">Islam</option>
                <option value="Konghucu">Konghucu</option>
              </select>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
              <label>Password<span style="font-size: 12px; color: red"> *</span></label>
              <input type="password" name="password" class="form-control" placeholder="Password" required="" autocomplete="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
              <label>Confirm Password<span style="font-size: 12px; color: red"> *</span></label>
              <input type="password" name="password2" class="form-control" placeholder="Confirm Password" required="" autocomplete="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
              <label>Email<span style="font-size: 12px; color: red"> *</span></label>
              <input type="email" name="email" class="form-control" placeholder="Email" required="" autocomplete="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
              <label>Confirm Email<span style="font-size: 12px; color: red"> *</span></label>
              <input type="email" name="email2" class="form-control" placeholder="Confirm Email" required="" autocomplete="">
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
              <label>Tempat Lahir<span style="font-size: 12px; color: red"> *</span></label>
              <input type="text" name="tempat" class="form-control" placeholder="Tempat Lahir" required="" autocomplete="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
              <label>Tanggal Lahir<span style="font-size: 12px; color: red"> *</span></label>
              <input type="date" name="tgl" class="form-control" placeholder="Tanggal Lahir" required="" autocomplete="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 form-group mb-12">
              <label>Jenis Kelamin<span style="font-size: 12px; color: red"> *</span></label><br>
              <input type="radio" name="jk" required=""> Laki - laki <br>
              <input type="radio" name="jk" required=""> Perempuan
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
              <label>Pendidikan Terakhir<span style="font-size: 12px; color: red"> *</span></label>
              <select class="form-control" required="" name="pendidikan">
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="SMK">SMK</option>
                <option value="D1">D1</option>
                <option value="D2">D2</option>
                <option value="D3">D3</option>
                <option value="D4">D4</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
              </select>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
              <label>Alamat Rumah<span style="font-size: 12px; color: red"> *Tidak disertai Provinsi, Kabupaten atau Kecamatan</span></label>
              <input type="text" name="" class="form-control" placeholder="Contoh : Jl. Ahmad Yani, Lorong Manggis No. 63" required="" autocomplete="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
              <label>Provinsi<span style="font-size: 12px; color: red"> *contoh : Sumatera Selatan</span></label>
              <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" required="" autocomplete="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
              <label>Kota/Kabupaten<span style="font-size: 12px; color: red"> *contoh : Kota Palembang / Kab. Lahat</span></label>
              <input type="text" name="" class="form-control" placeholder="Kota/Kabupaten" required="" autocomplete="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
              <label>Kecamatan<span style="font-size: 12px; color: red"> *</span></label>
              <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" required="" autocomplete="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
              <label>Desa/Kelurahan<span style="font-size: 12px; color: red"> *</span></label>
              <input type="text" name="desa" class="form-control" placeholder="Desa/Kelurahan" required="" autocomplete="">
            </div>
            <!-- <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
              <label>No. WhatsApp<span style="font-size: 12px; color: red"> *</span></label>
              <input type="number" name="no" class="form-control" placeholder="No. WhatsApp" required="" autocomplete="">
            </div> -->
            <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
              <label>Status Pekerjaan<span style="font-size: 12px; color: red"> *</span></label>
              <select class="form-control" required="" name="status">
                <option value="Belum">Belum</option>
                <option value="Sudah Bekerja">Sudah Bekerja</option>
                <option value="Memiliki Usaha">Memiliki Usaha</option>
              </select>
            </div>
            
            <!-- <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
              <label>KTP<span style="font-size: 12px; color: red"> *</span></label>
              <input type="file" name="ktp" class="form-control" placeholder="" required="" autocomplete="">
            </div> -->
            <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
            <p>Contoh Foto</p>
            <img src="images/merah.jpg" style="width: 170px; height: 240px"><br>
              <label>Foto<span style="font-size: 12px; color: red"> *</span></label>
              <input type="file" name="foto" class="form-control" required="" autocomplete="">
            </div>
            <!-- <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
              <label>Link Fortofolio</label>
              <input type="text" name="link1" class="form-control" placeholder="Link Fortofolio (Wajib Diisi)" required="" autocomplete=""><br>
              <input type="text" name="link2" class="form-control" placeholder="Link Fortofolio (Opsional)" required="" autocomplete=""><br>
              <input type="text" name="link3" class="form-control" placeholder="Link Fortofolio (Opsional)" required="" autocomplete=""><br>
              <input type="text" name="link4" class="form-control" placeholder="Link Fortofolio (Opsional)" required="" autocomplete=""><br>
              <input type="text" name="link5" class="form-control" placeholder="Link Fortofolio (Opsional)" required="" autocomplete=""><br>
              <p style="font-size: 12px">Silahkan upload portofolio anda ke Google Drive, Youtube, 4shared, Mediafire, Dropbox dan lain-lain. lalu copy linknya ke field di atas. Minimal 1 link Portofolio</p>
            </div> -->
          </div>
          <button type="submit" class="btn sent-butnn">DAFTAR</button>
          <a href="home"><button type="submit" class="btn btn-danger">BATAL</button></a>
          <a href="register" class="btn btn-success">RESET</a>
        </form>
      </div>
    </div>
  </section><br><br><br><br><br>
  <!--//contact -->
  <?php include 'footer.php'; ?>