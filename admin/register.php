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
            <div class="login-box ptb--20">
                <form method="post" action="proses/pendaftaran" novalidate="novalidate" enctype="multipart/form-data" class="form-horizontal" id="validationform" data-parsley-validate="">
                    <div class="login-form-head">
                        <h4>Sign up</h4>
                    </div>
                    <div class="login-form-body">
                        <div class="form-group">
                            <label class="col-form-label" for="nama">Nama Lengkap<span style="font-size: 12px; color: red"> *Sesuai KTP</span></label>
                            <input type="text" id="nama" name="nama" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="nik">NIK/Kartu Pelajar<span style="font-size: 12px; color: red"> *Pastikan Anda memasukkan Angka</span></label>
                            <input data-parsley-type="number" type="text" id="nik" name="nik" class="form-control" required="" data-parsley-length="[10,16]">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="username">Username</label>
                            <input type="text" id="username" name="username" class="form-control" required="" data-parsley-length="[5,20]">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input id="inputPassword" name="password" type="password" required="" class="form-control" data-parsley-length="[8,20]">
                        </div>
                        <div class="form-group">
                            <label for="ulangiPassword">Ulangi Password</label>
                            <input id="ulangiPassword" data-parsley-equalto="#inputPassword" type="password" required=""class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input id="inputEmail" type="email" name="email" data-parsley-trigger="change" required="" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Ulangi Email</label>
                            <input id="email" data-parsley-equalto="#inputEmail" type="email" required=""class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="tempat">Tempat Lahir</label>
                            <input type="text" id="tempat" name="tempat" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="tanggal">Tanggal Lahir</label>
                            <input type="date" id="tanggal" name="tanggal" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="jk">Jenis Kelamin</label><br>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="jk" checked="" class="custom-control-input" value="Perempuan"><span class="custom-control-label">Perempuan</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="jk" class="custom-control-input" value="Laki-laki"><span class="custom-control-label">Laki-laki</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="agama" class="col-form-label">Agama</label>
                            <select name="agama" class="form-control">
                                <option value="">- Pilih -</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Kristen Katolik">Kristen Katolik</option>
                                <option value="Kristen Protestan">Kristen Protestan</option>
                                <option value="Islam">Islam</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan" class="col-form-label">Pendidikan Terakhir</label>
                            <select name="pendidikan" class="form-control">
                                <option>- Pilih -</option>
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
                        <div class="form-group">
                            <label class="col-form-label">Alamat</label>
                                <textarea required="" name="alamat" class="form-control" style="height: 100%"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="provinsi">Provinsi</label>
                            <input type="text" id="provinsi" name="provinsi" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="kota">Kota / Kabupaten</label>
                            <input type="text" id="kota" name="kota" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="kecamatan">Kecamatan</label>
                            <input type="text" id="kecamatan" name="kecamatan" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="desa">Desa / Kelurahan</label>
                            <input type="text" id="desa" name="desa" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="no">No. WhatsApp</label>
                            <input data-parsley-type="number" type="text" name="no" class="form-control" required="" data-parsley-length="[10,13]" type="text">
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-form-label">Status Pekerjaan</label>
                            <select name="status" class="form-control">
                                <option>- Pilih -</option>
                                <option value="Belum Bekerja">Belum Bekerja</option>
                                <option value="Sudah Bekerja">Sudah Bekerja</option>
                                <option value="Memiliki Usaha">Memiliki Usaha</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>KTP<span style="font-size: 12px; color: red"> *</span></label>
                            <input type="file" name="ktp" class="form-control" required="" autocomplete=""><br>
                        </div>
                        <div class="form-group">
                            <label for="link1">Link Portofolio (wajib diisi)</label>
                            <input type="text" class="form-control" id="link1" name="link1" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link2">Link Portofolio (opsional)</label>
                            <input type="text" class="form-control" id="link2" name="link2" >
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link3">Link Portofolio (opsional)</label>
                            <input type="text" class="form-control" id="link3" name="link3" >
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link4">Link Portofolio (opsional)</label>
                            <input type="text" class="form-control" id="link4" name="link4" >
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <p style="font-size: 10px; font-family: Volte; color: red">Silahkan upload portofolio anda ke Google Drive, Youtube, 4shared, Mediafire, Dropbox dan lain-lain. lalu copy linknya ke field di atas. Minimal 1 link Portofolio</p>
                        <p>Contoh Foto</p>
                        <img src="../images/merah.jpg" style="width: 170px; height: 240px"><br>
                          <label>Foto<span style="font-size: 12px; color: red"> *</span></label>
                          <input type="file" name="foto" class="form-control" required="" autocomplete=""><br>
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit" onclick="return confirm('Apakah Anda Yakin dengan Data tersebut?')">Submit <i class="ti-arrow-right"></i></button>
                            <div class="login-other row mt-4">
                                <div class="col-6">
                                    <a class="google-login" href="../">Batal</a>
                                </div>
                                <div class="col-6">
                                    <a class="fb-login" href="register">Reset</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Do yo have account? <a href="login">Sign in</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->
    <script src="assets/js/password-meter/pwstrength-bootstrap.min.js"></script>
    <script src="assets/js/password-meter/zxcvbn.js"></script>
    <script src="assets/js/password-meter/password-meter-active.js"></script>
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
    <script src="assets/parsley/parsley.js"></script>
    <script>
    $('#form').parsley();
    </script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
</body>

</html>