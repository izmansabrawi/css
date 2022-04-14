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
                                <h4 class="header-title">Data User</h4>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                            	<th>No.</th>
                                            	<th>Aksi</th>
                                                <th>Nama Lengkap</th>
                                                <th>Foto</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>TTL</th>
                                                <th>Agama</th>
                                                <th>Alamat</th>
                                                <th>Status</th>
                                                <th>Pendidikan</th>
                                                <th>Jenis Kelamin</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i=1; ?> 
                                        	<?php 
												include '../koneksi.php';
												$query = mysqli_query($koneksi, "SELECT * FROM pendaftaran");
												foreach ($query as $data) 
												{
											?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></th>
                                                <td>
                                                	<button type="button" onclick="window.location.href='hapus/user?id_daftar=<?php echo $data['id_daftar']; ?>'" class="btn btn-danger mb-3"><i class="fa fa-trash"></i></button>
                                                </td>
                                                <td><?php echo $data['nama']; ?></td>
                                                <td><a href="../peserta/foto/<?php echo $data['foto']; ?>">View</a></td>
                                                <td><?php echo $data['email']; ?></td>
                                                <td><?php echo $data['username']; ?></td>
                                                <td><?php echo $data['tempat']; ?>, <?php echo $data['tanggal']; ?></td>
                                                <td><?php echo $data['agama']; ?></td>
                                                <td><?php echo $data['alamat']; ?>, <?php echo $data['desa']; ?>, <?php echo $data['kecamatan']; ?>, <?php echo $data['kota']; ?>, <?php echo $data['provinsi']; ?></td>
                                                <td><?php echo $data['status']; ?></td>
                                                <td><?php echo $data['pendidikan']; ?></td>
                                                <td><?php echo $data['jk']; ?></td>
                                                
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