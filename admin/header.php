<?php
session_start();

if (empty($_SESSION['level'])) {
    echo "
        <script>
            document.location.href ='../home-page';
        </script>
    ";
}

$username = $_SESSION['username'];
$level = $_SESSION['level'];  
?>
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
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
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
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <img src="assets/images/logo.jpg" alt="logo" style="height: 70px"><br>
                    <h2 style="color: white; font-size: 15px; font-family: Times New Roman"><b>JITU KREASI UTAMA</b></h2>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                        	<li class="active">
                                <a href="dashboard"><i class="ti-dashboard"></i> <span>dashboard</span></a>
                            <li>
                                <a href="profile"><i class="ti-user"></i> <span>Profile</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-home"></i><span>Informasi Website</span></a>
                                <ul class="collapse">
                                    <li><a href="berkas-persyaratan">Berkas Persyaratan</a></li>
                                    <li><a href="info-jadwal">Jadwal Diklat</a></li>
                                    <li><a href="pengumuman-seleksi">Pengumuman Diklat</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i><span>Admin</span></a>
                                <ul class="collapse">
                                    <li><a href="tambah-admin">Tambah Data</a></li>
                                    <li><a href="data-admin">Data Admin</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>Instruktur</span></a>
                                <ul class="collapse">
                                    <li><a href="akun-instruktur">Akun Instruktur</a></li>
                                    <li><a href="data-instruktur">Data Instruktur</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-agenda"></i><span>Diklat</span></a>
                                <ul class="collapse">
                                    <li><a href="jadwal-diklat">Data Jadwal Diklat</a></li>
                                    <li><a href="data-user">Data User</a></li>
                                    <li><a href="proses-seleksi">Pendaftar</a></li>
                                    <li><a href="data-peserta">Data Peserta</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="saran"><i class="fa fa-group"></i> <span>Saran & Pertanyaan</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                    </div>
                    <?php
                        include '../koneksi.php';
                        $username = $_SESSION['username'];
                        $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' ");
                        $data = mysqli_fetch_array($query);
                    ?>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="images/<?php echo $data['foto'] ?>" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $data['nama'] ?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../logout">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->