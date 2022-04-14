<?php include 'header.php'; ?>
            <!-- page title area start -->
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Daftar Diklat</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Diklat</th>
                                                    <th scope="col">Berkas</th>
                                                    <th scope="col">Tanggal Pelaksanaan</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; ?> 
                                                <?php 
                                                    include '../koneksi.php';
                                                    $query = mysqli_query($koneksi, "SELECT * FROM formulir JOIN materi on materi.id_materi = formulir.id_materi WHERE id_daftar = '".$_SESSION['id_daftar']."' order by thn_materi asc");
                                                    foreach ($query as $data) 
                                                    {
                                                ?>
                                                <tr>
                                                	<th scope="row"><?= $i; ?></th>
                                                    <td><?php echo $data['materi']; ?> Angkatan <?php echo $data['angk_materi']; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='https://<?php echo $data['alamat_link']; ?>'">Portofolio
                                                        </button> 
                                                    	<button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='../admin/print/formulir?id_formulir=<?php echo $data['id_formulir']; ?>'">Formulir
                                                    	</button> 
                                                    	<button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='file/<?php echo $data['ktp']; ?>'">KTP
                                                    	</button> 
                                                    	<button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='file/<?php echo $data['surat_dokter']; ?>'">Surat Keterangan Sehat
                                                    	</button> 
                                                    	<button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='file/<?php echo $data['surat_pernyataan']; ?>'">Surat Pernyataan
                                                    	</button>
                                                    	<button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='file/<?php echo $data['pakta']; ?>'">Pakta Integritas
                                                    	</button>
                                                    </td>
                                                    <td><?php echo $data['tgl_buka']; ?> <?php echo $data['bulan_buka']; ?> s.d. <?php echo $data['tgl_akhir']; ?> <?php echo $data['bulan_akhir']; ?> <?php echo $data['thn_materi']; ?></td>
                                                    <td>
                                                    	<button type="button" class="btn btn-danger btn-xs mb-3" data-toggle="modal" data-target="#exampleModalCenter" disabled=""><?php echo $data['proses']; ?></button>
                                                    </td>
                                                    <td>
                                                    	<?php if (($data['proses']=='Proses Seleksi')) : ?>
                                                    	<button onclick="window.location.href='edit-formulir?id_formulir=<?php echo $data['id_formulir']; ?>'" type="button" class="btn btn-dark btn-xs mb-3"><i class="ti-pencil-alt"></i></button>
                                                    	<?php endif ?>
                                                    	<?php if (($data['proses']=='Diterima')) : ?>
                                                            <button type="button" class="btn btn-info btn-xs mb-3" data-toggle="modal" data-target="#exampleModalCenter"><i class="ti-eye"></i></button>
                                                    	<?php endif ?>
                                                        <?php if (($data['proses']=='Cadangan')) : ?>
                                                            <button type="button" class="btn btn-info btn-xs mb-3" data-toggle="modal" data-target="#exampleModalCenter1"><i class="ti-eye"></i></button>
                                                        <?php endif ?>
                                                    	<?php if (($data['proses']=='Tidak Diterima')) : ?>
                                                    	<button type="button" class="btn btn-dark btn-xs mb-3">Tidak Diterima</button>
                                                    	<?php endif ?>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
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
                                <div class="modal fade" id="exampleModalCenter1">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Himbauan!</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Anda di nyatakan sebagai Peserta Cadangan di Materi Diklat yang telah Anda pilih. Jika ada Peserta yang mengundurkan diri atau berhalangan hadir, maka Tim Seleksi akan segera menghubungi Anda. Terima Kasih.</p>
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