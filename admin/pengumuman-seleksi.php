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
                                <h4 class="header-title">Pengumuman Seleksi Diklat</h4>
                                <button type="button" class="btn btn-dark btn-flat btn-lg mt-3" data-toggle="modal" data-target="#exampleModalCenter">Tambah<i class="fa fa-plus"></i></button>
                                <div class="modal fade" id="exampleModalCenter">
					                <div class="modal-dialog modal-dialog-centered" role="document">
					                    <div class="modal-content">
					                        <div class="modal-header">
					                            <h5 class="modal-title">Tambah Pengumuman Seleksi Diklat</h5>
					                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
					                        </div>
					                        <div class="modal-body">
					                            <form method="post" action="proses/pengumuman-seleksi" novalidate="novalidate" enctype="multipart/form-data" class="form-horizontal" id="validationform" data-parsley-validate="">
								                    <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Materi Diklat</label>
                                                        <select id="materi" name="materi" class="form-control" required="required">
                                                            <option>- Pilih Diklat-</option>
                                                                <?php
                                                                    include '../koneksi.php';
                                                                    $query = mysqli_query($koneksi, "SELECT * FROM materi ORDER BY materi ASC, angkatan ASC ");
                                                                        foreach ($query as $b)
                                                                    {
                                                                ?>
                                                            <option value="<?= $b['materi']; ?> Angkatan <?= $b['angkatan']; ?>"><?= $b['materi']; ?> Angkatan <?= $b['angkatan']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
								                    <div class="form-group">
						                                <label for="validationCustom05">File</label>
						                                    <input type="file" class="form-control" id="validationCustom05" placeholder="File" name="file" required="">
						                            </div>
						                            <div class="form-group">
						                                <label for="validationCustom05">Gambar Depan</label>
						                                <input type="file" class="form-control" id="validationCustom05" placeholder="Gambar Depan" name="gambar" required="">
						                            </div>
						                            <div class="form-group">
								                        <label for="example-text-input" class="col-form-label">Keterangan Pengumuman</label>
								                        <input class="form-control" name="keterangan" type="text" id="example-text-input" placeholder="Keterangan" required autocomplete="off">
								                    </div>
					                        </div>
					                        <div class="modal-footer">
					                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					                            <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin dengan Data tersebut?')">Simpan</button>
					                        </div>
					                    </div>
					                </div>
					            </div><br><br>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                            	<th>No.</th>
                                                <th>Tanggal Update</th>
                                                <th>Judul</th>
                                                <th>Gambar Depan</th>
                                                <th>File</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i=1; ?> 
                                        	<?php 
												include '../koneksi.php';
												$query = mysqli_query($koneksi, "SELECT * FROM pengumuman");
												foreach ($query as $data) 
												{
											?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></th>
                                                <td><?php echo $data['tgl_pengumuman']; ?></td>
                                                <td><?php echo $data['materi']; ?></td>
                                                <td><a href="images/<?php echo $data['gambar']; ?>">View</a></td>
                                                <td><a href="file/<?php echo $data['file']; ?>">View</a></td>
                                                <td><?php echo $data['keterangan']; ?></td>
                                                <td>
                                                	<button type="button" onclick="window.location.href='edit-pengumuman?id_pengumuman=<?php echo $data['id_pengumuman']; ?>'" class="btn btn-dark mb-3"><i class="fa fa-edit"></i></button>
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
                                                    <button type="button" onclick="window.location.href='hapus/pengumuman?id_pengumuman=<?php echo $data['id_pengumuman']; ?>'" class="btn btn-danger">Iya, yakin!</button>
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