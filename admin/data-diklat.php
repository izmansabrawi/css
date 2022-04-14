<?php include 'header.php'; ?>
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Peserta Diklat</h4>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th>No.</th>
                                                <th>Materi</th>
                                                <th>JPL</th>
                                                <th>Jadwal</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; ?> 
                                            <?php 
                                                
                                                include '../koneksi.php';
                                                $query = mysqli_query($koneksi, "SELECT * FROM materi ORDER BY bulan_pembukaan asc;");
                                                // SELECT *
                                                // FROM products
                                                // WHERE product_id <> 7
                                                // ORDER BY category_id DESC, product_name ASC;
                                                foreach ($query as $data) 
                                                {

                                                    $month = [
                                                        '01' => 'Januari',
                                                        '02' => 'Februari',
                                                        '03' => 'Maret',
                                                        '04' => 'April',
                                                        '05' => 'Mei',
                                                        '06' => 'Juni',
                                                        '07' => 'Juli',
                                                        '08' => 'Agustus',
                                                        '09' => 'September',
                                                        '10' => 'Oktober',
                                                        '11' => 'November',
                                                        '12' => 'Desember',
                                                    ];
                                            ?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></th>
                                                <td><?php echo $data['materi']; ?> Angkatan <?php echo $data['angkatan']; ?></td>
                                                <td><?php echo $data['jpl']; ?></td>
                                                <td><?= $data['tgl_pembukaan'] ?> <?= $month[$data['bulan_pembukaan']] ?> s.d. <?= $data['tgl_penutupan'] ?> <?= $month[$data['bulan_penutupan']] ?> <?php echo $data['tahun']; ?></td>
                                                <td><?php echo $data['status']; ?></td>
                                                <td><button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='proses-seleksi?id_materi=<?php echo $data['id_materi']; ?>'">View
                                                        </button> </td>
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
<?php include 'footer.php'; ?>