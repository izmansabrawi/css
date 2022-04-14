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
                                <h4 class="header-title">Berkas Persyaratan Diklat</h4>
                                <button type="button" class="btn btn-dark btn-flat btn-lg mt-3" data-toggle="modal" data-target="#exampleModalCenter">Tambah<i class="fa fa-plus"></i></button>
                                <div class="modal fade" id="exampleModalCenter">
					                                    <div class="modal-dialog modal-dialog-centered" role="document">
					                                        <div class="modal-content">
					                                            <div class="modal-header">
					                                                <h5 class="modal-title">Tambah Data Berkas</h5>
					                                            	<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
					                                            </div>
					                                            <div class="modal-body">
					                                                <form method="post" action="proses/berkas" novalidate="novalidate" enctype="multipart/form-data" class="form-horizontal" id="validationform" data-parsley-validate="">
								                                        <div class="form-group">
								                                            <label for="example-text-input" class="col-form-label">Judul Pengumuman</label>
								                                            <input class="form-control" name="judul" type="text" id="example-text-input" placeholder="Judul Pengumuman" required autofocus="" autocomplete="off">
								                                        </div>
								                                        <div class="form-group">
						                                                    <label for="validationCustom05">Zip</label>
						                                                    <input type="file" class="form-control" id="validationCustom05" placeholder="Zip" name="berkas" required="">
						                                                    <div class="invalid-feedback">
						                                                        Please provide a valid zip.
						                                                    </div>
						                                                </div>
						                                                <div class="form-group">
								                                            <label for="example-text-input" class="col-form-label">Keterangan Pengumuman</label>
								                                            <input class="form-control" name="ket" type="text" id="example-text-input" placeholder="Keterangan Pengumuman" required autocomplete="off">
								                                        </div>
					                                            </div>
					                                            <div class="modal-footer">
					                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					                                                <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin dengan Data tersebut?')">Simpan</button>
					                                            </div>
					                                        </div>
					                                    </div>
					                                </div>
                                <br><br>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                            	<th>No.</th>
                                                <th>Tanggal Update</th>
                                                <th>Judul</th>
                                                <th>Berkas</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i=1; ?> 
                                        	<?php 
												include '../koneksi.php';
												$query = mysqli_query($koneksi, "SELECT * FROM berkas");
												foreach ($query as $data) 
												{
											?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></th>
                                                <td><?php echo $data['tgl_berkas']; ?></td>
                                                <td><?php echo $data['judul']; ?></td>
                                                <td><a href="file/<?php echo $data['berkas']; ?>">Download</a></td>
                                                <td><?php echo $data['ket']; ?></td>
                                                <td>
                                                	<button type="button" onclick="window.location.href='edit-berkas?id_berkas=<?php echo $data['id_berkas']; ?>'" class="btn btn-dark mb-3"><i class="fa fa-edit"></i></button>
                                                    <button type="button" onclick="window.location.href='hapus/berkas?id_berkas=<?php echo $data['id_berkas']; ?>'" class="btn btn-danger mb-3"><i class="fa fa-trash"></i></button>
                                                </td>
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