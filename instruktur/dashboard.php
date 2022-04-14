<?php
error_reporting();
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
                                <div class="alert alert-primary" role="alert">
                                    <h4 class="alert-heading">Welcome!</h4>
                                    <p>Berikut ini Data Peserta Diklat sesuai dengan Materi Diklat yang telah ditentukan.</p><hr>
                                    <p class="mb-0">Selamat Melaksanakan Tugas.</p>
                                </div><br>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                            <thead class="bg-light text-capitalize">
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Diklat</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">TTL</th>
                                                    <th scope="col">Alamat</th>
                                                    <th scope="col">Berkas</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; ?> 
                                                <?php
                                                    include '../koneksi.php';
                                                    $query = mysqli_query($koneksi, "SELECT * FROM user_instruktur join instruktur on instruktur.id_user = user_instruktur.id_user join materi on materi.id_materi = instruktur.id_materi join formulir on formulir.id_materi = materi.id_materi where instruktur.id_materi = formulir.id_materi AND proses = 'Diterima' order by tgl_buka AND bulan_buka desc");
                                                    foreach ($query as $data) {
                                                ?>
                                                <tr>
                                                    
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td><?php echo $data['materi']; ?> Angkatan <?php echo $data['angkatan']; ?></td>
                                                    <td><?php echo $data['nama_lengkap']; ?></td>
                                                    <td><?php echo $data['tempat_lahir']; ?>, <?php echo $data['tgl_lahir']; ?></td>
                                                    <td><?php echo $data['alamat_lengkap']; ?>
                                                    <td>
                                                        <button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='../admin/print/formulir?id_formulir=<?php echo $data['id_formulir']; ?>'">Formulir
                                                        </button> 
                                                        <button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='https://<?php echo $data['alamat_link']; ?>'">Portofolio
                                                        </button>
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