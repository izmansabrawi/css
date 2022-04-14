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
                                <h4 class="header-title">Saran & Pertanyaan</h4>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        	<thead class="bg-light text-capitalize">
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">No. Handphone</th>
                                                    <th scope="col">Isi</th>
                                                    <th scope="col">Tanggal</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; ?> 
                                                <?php
                                                    include '../koneksi.php';
                                                    $query = mysqli_query($koneksi, "SELECT * FROM saran");
                                                    foreach ($query as $data) {
                                                ?>
                                                <tr>
                                                	<th scope="row"><?= $i; ?></th>
                                                    <td><?php echo $data['nama_depan']; ?> <?php echo $data['nama_belakang']; ?></td>
                                                    <td><?php echo $data['email']; ?></td>
                                                    <td><?php echo $data['nohp']; ?></td>
                                                    <td><?php echo $data['isi']; ?></td>
                                                    <td><?php echo $data['tgl']; ?></td>
                                                    <td>
                                                    	<button type="button" class="btn btn-danger mb-3" data-toggle="modal" data-target="#exampleModalCenter1"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
	                                <div class="modal fade" id="exampleModalCenter1">
	                                    <div class="modal-dialog modal-dialog-centered" role="document">
	                                        <div class="modal-content">
	                                            <div class="modal-header">
	                                                <h5 class="modal-title">IMPORTANT!</h5>
	                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
	                                            </div>
	                                            <div class="modal-body">
	                                                <p>Apakah Anda yakin ingin menghapus data ini?</p>
	                                            </div>
	                                            <div class="modal-footer">
	                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                                <button type="button" onclick="window.location.href='hapus/saran?id_saran=<?php echo $data['id_saran']; ?>'" class="btn btn-danger">Iya, yakin!</button>
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