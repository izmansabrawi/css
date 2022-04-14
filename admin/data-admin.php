<?php 
error_reporting();
include 'header.php'; 
?>
<div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Admin</h4>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                            	<th>No.</th>
                                                <th>Nama Lengkap</th>
                                                <th>Foto</th>
                                                <th>Jabatan</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i=1; ?> 
                                        	<?php 
												include '../koneksi.php';
												$query = mysqli_query($koneksi, "SELECT * FROM admin");
												foreach ($query as $data) 
												{
											?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></th>
                                                <td><?php echo $data['nama']; ?></td>
                                                <td><img src="images/<?php echo $data['foto']; ?>" style="height: 100px; width: 100px"></td>
                                                <td><?php echo $data['jabatan']; ?></td>
                                                <td><?php echo $data['alamat']; ?></td>
                                                <td><?php echo $data['email']; ?></td>
                                                <td><?php echo $data['username']; ?></td>
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
                                                    <button type="button" onclick="window.location.href='hapus/admin?id_admin=<?php echo $data['id_admin']; ?>'" class="btn btn-danger">Iya, yakin!</button>
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
<?php include 'footer.php'; ?>