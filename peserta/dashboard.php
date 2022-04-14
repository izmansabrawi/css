<?php include 'header.php'; ?>
            <!-- page title area start -->
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Jadwal Diklat</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">Daftar</th>
                                                    <th scope="col">Materi</th>
                                                    <th scope="col">JPL</th>
                                                    <th scope="col">Angkatan</th>
                                                    <th scope="col">Jadwal</th>
                                                    <th scope="col">Jumlah Peserta</th>
                                                    <th scope="col">Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; ?> 
                                                <?php 
                                                    include '../koneksi.php';
                                                    $query = mysqli_query($koneksi, "SELECT * FROM materi where status = 'Pendaftaran' ");
                                                    foreach ($query as $data) 
                                                    {
                                                        $month = [
                                                                '01' => 'Jan',
                                                                '02' => 'Feb',
                                                                '03' => 'Mar',
                                                                '04' => 'Apr',
                                                                '05' => 'Mei',
                                                                '06' => 'Jun',
                                                                '07' => 'Jul',
                                                                '08' => 'Ags',
                                                                '09' => 'Sep',
                                                                '10' => 'Okt',
                                                                '11' => 'Nov',
                                                                '12' => 'Des',
                                                            ];
                                                ?>
                                                <tr>
                                                    <td><button onclick="window.location.href='daftar-diklat?id_materi=<?php echo $data['id_materi']; ?>'" type="button" class="btn btn-dark btn-xs mb-3">Daftar</button></td>
                                                    <td><?php echo $data['materi']; ?></td>
                                                    <td><?php echo $data['jpl']; ?></td>
                                                    <td><?php echo $data['angkatan']; ?></td>
                                                    <td><?= $data['tgl_pembukaan'] ?> <?= $month[$data['bulan_pembukaan']] ?> s.d. <?= $data['tgl_penutupan'] ?> <?= $month[$data['bulan_penutupan']] ?> <?php echo $data['tahun']; ?></td>
                                                    <td><?php echo $data['jumlah']; ?> Orang</td>
                                                    <td><span class="status-p bg-primary"><?php echo $data['status']; ?></span></td>
                                                </tr>
                                                <?php $i++; ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <?php include 'footer.php'; ?>