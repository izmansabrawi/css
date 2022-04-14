<?php
include 'header.php';
include '../koneksi.php';
$id_materi = $_GET['id_materi'];
$query = mysqli_query($koneksi, "SELECT * FROM materi where id_materi = '$id_materi'");
    foreach ($query as $d) 
?>
            <!-- page title area start -->
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Peserta Diklat <?php echo $d['materi'] ?> Angkatan <?php echo $d['angkatan'] ?></h4>
                                <a href="print/peserta?id_materi=<?php echo $d['id_materi'] ?>">
                                    <button type="button" class="btn btn-dark mb-3">Cetak Data&nbsp;<i class="fa fa-print"></i></button>
                                </a>
                                <br>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        	<thead class="bg-light text-capitalize">
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">TTL</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">No. Handphone</th>
                                                    <th scope="col">Alamat</th>
                                                    <th scope="col">Berkas</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; ?> 
                                                <?php
                                                    include '../koneksi.php';
                                                    $id_materi = $_GET['id_materi'];
                                                    $query = mysqli_query($koneksi, "SELECT * FROM formulir join materi on materi.id_materi = formulir.id_materi where formulir.id_materi = materi.id_materi AND proses = 'Diterima' AND materi.id_materi = '$id_materi' order by tgl_daftar asc");
                                                    if ($query) {

                                                        foreach ($query as $data) {
                                                    ?>
                                                    <tr>
                                                        <th scope="row"><?= $i; ?></th>
                                                        <td><?php echo $data['nama_lengkap']; ?></td>
                                                        <td><?php echo $data['tempat_lahir']; ?>, <?php echo $data['tgl_lahir']; ?>/td>
                                                        <td><?php echo $data['alamat_email']; ?></td>
                                                        <td><?php echo $data['nohp']; ?></td>
                                                        <td><?php echo $data['alamat_lengkap']; ?></td>
                                                        <td>
                                                            <a target="_blank" href="print/formulir?id_formulir=<?php echo $data['id_formulir']; ?>">
                                                                <button type="button" class="btn btn-dark btn-xs mb-3">Formulir</button>
                                                            </a>
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
                                                    </tr>

                                                <?php 
                                                            $i++;
                                                        }
                                                    }
                                                ?>
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