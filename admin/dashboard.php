<?php 
include 'header.php';
include '../koneksi.php';
if(empty($_SESSION['username'])){
    header("Location: ../home-page/");
}
?>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- seo fact area start -->
                    <div class="col-lg-11">
                        <div class="row">
                            <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 mt-5 mb-3">
                                <div class="card">
                                    <?php
                                        include '../koneksi.php';
                                        $p = mysqli_query ($koneksi, "SELECT * FROM formulir where proses ='Diterima'");
                                        $formulir = mysqli_num_rows ($p); 
                                    ?>
                                    <div class="seo-fact sbg1">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="fa fa-group"></i> Alumni</div>
                                            <h2><?php echo $formulir; ?></h2>
                                        </div>
                                        <canvas id="seolinechart1" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-5 mb-3">
                                <div class="card">
                                    <?php
                                        include '../koneksi.php';
                                        $p = mysqli_query ($koneksi, "SELECT * FROM formulir");
                                        $semua = mysqli_num_rows ($p); 
                                    ?>
                                    <div class="seo-fact sbg2">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-user"></i> Pendaftar</div>
                                            <h2><?php echo $semua; ?></h2>
                                        </div>
                                        <canvas id="seolinechart2" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5 mb-3">
                                <div class="card">
                                    <?php
                                        include '../koneksi.php';
                                        $p = mysqli_query ($koneksi, "SELECT * FROM instruktur");
                                        $instruktur = mysqli_num_rows ($p); 
                                    ?>
                                    <div class="seo-fact sbg1">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="fa fa-group"></i> Instruktur</div>
                                            <h2><?php echo $instruktur; ?></h2>
                                        </div>
                                        <canvas id="seolinechart1" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-5 mb-3">
                                <div class="card">
                                    <?php
                                        include '../koneksi.php';
                                        $p = mysqli_query ($koneksi, "SELECT * FROM materi");
                                        $materi = mysqli_num_rows ($p); 
                                    ?>
                                    <div class="seo-fact sbg2">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="fa fa-book"></i> Materi</div>
                                            <h2><?php echo $materi; ?></h2>
                                        </div>
                                        <canvas id="seolinechart2" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <?php include 'footer.php'; ?>