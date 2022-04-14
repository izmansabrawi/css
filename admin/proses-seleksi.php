<?php
include 'header.php';
?>
            <!-- page title area start -->
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Calon Peserta</h4>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                            <thead class="bg-light text-capitalize">
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Materi</th>
                                                    <th scope="col">Tanggal</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Berkas</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; ?> 
                                                <?php
                                                    include '../koneksi.php';
                                                    $query = mysqli_query($koneksi, "SELECT * FROM formulir join materi on materi.id_materi = formulir.id_materi where proses = 'Proses Seleksi' OR proses = 'Cadangan' order by tgl_daftar asc");
                                                    foreach ($query as $data) {
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
                                                    <td><?php echo $data['materi']; ?> Angkatan <?php echo $data['angkatan']; ?> [<?= $data['tgl_pembukaan'] ?> <?= $month[$data['bulan_pembukaan']] ?> s.d. <?= $data['tgl_penutupan'] ?> <?= $month[$data['bulan_penutupan']] ?> <?php echo $data['tahun']; ?>]</td>
                                                    <td><?php echo $data['tgl_daftar']; ?></td>
                                                    <td><?php echo $data['nama_lengkap']; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='print/formulir?id_formulir=<?php echo $data['id_formulir']; ?>'">Formulir
                                                        </button> 
                                                        <button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='../peserta/file/<?php echo $data['ktp']; ?>'">KTP
                                                        </button> 
                                                        <button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='../peserta/file/<?php echo $data['surat_dokter']; ?>'">Surat Keterangan Sehat
                                                        </button> 
                                                        <button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='../peserta/file/<?php echo $data['surat_pernyataan']; ?>'">Surat Pernyataan
                                                        </button>
                                                        <button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='../peserta/file/<?php echo $data['pakta']; ?>'">Pakta Integritas
                                                        </button>
                                                        <button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='https://<?php echo $data['alamat_link']; ?>'">Portofolio
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger btn-xs mb-3" data-toggle="modal" data-target="#exampleModalCenter"><?php echo $data['proses']; ?></button>
                                                    </td>
                                                    <td>
                                                        <button onclick="window.location.href='keputusan?id_formulir=<?php echo $data['id_formulir']; ?>'" type="button" class="btn btn-dark btn-xs mb-3">Tentukan</button>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Himbauan!</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Proses Seleksi akan dilaksanakan sampai maksimal h-7 hari sebelum pelaksanaan Pembukaan Diklat.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Oke, Paham!</button>
                                            </div>
                                        </div>
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