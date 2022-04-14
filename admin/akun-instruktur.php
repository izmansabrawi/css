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
                                <h4 class="header-title">Akun Instruktur</h4>
                                <button type="button" class="btn btn-dark btn-flat btn-lg mt-3" data-toggle="modal" data-target="#exampleModalCenter">Tambah<i class="fa fa-plus"></i></button>
                                <div class="modal fade" id="exampleModalCenter">
					                <div class="modal-dialog modal-dialog-centered" role="document">
					                    <div class="modal-content">
					                        <div class="modal-header">
					                            <h5 class="modal-title">Tambah Akun Instruktur</h5>
					                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
					                        </div>
					                        <div class="modal-body">
					                            <form method="post" action="proses/akun-instruktur" novalidate="novalidate" enctype="multipart/form-data" class="form-horizontal" id="validationform" data-parsley-validate="">
								                	<div class="form-group">
								                    	<label for="example-text-input" class="col-form-label">Nama Lengkap</label>
								                        <input class="form-control" name="nama" type="text" id="example-text-input" required autofocus="" data-parsley-length="[3,50]" autocomplete="off">
								                    </div>
												    <div class="form-group">
												        <label class="col-form-label" for="username">Username</label>
												        <input type="text" id="username" name="username" class="form-control" required="" data-parsley-length="[5,40]" autocomplete="off">
												    </div>
								                    <div class="form-group">
												        <label for="inputPassword">Password</label>
												        <input id="inputPassword" name="password" type="password" required="" class="form-control" data-parsley-length="[8,30]" autocomplete="off">
												    </div>
												    <div class="form-group">
												        <label for="ulangiPassword">Ulangi Password</label>
												        <input id="ulangiPassword" data-parsley-equalto="#inputPassword" type="password" required=""class="form-control" placeholder="Password" autocomplete="off">
												    </div>
												    <div class="modal-footer">
							                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
							                            <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin dengan Data tersebut?')">Simpan</button>
							                        </div>
												</form>
					                        </div>
					                        
					                    </div>
					                </div>
					            </div><br><br>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                            	<th>No.</th>
                                                <th>Nama Lengkap</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i=1; ?> 
                                        	<?php 
												include '../koneksi.php';
												$query = mysqli_query($koneksi, "SELECT * FROM user_instruktur order by nama asc");
												foreach ($query as $data) 
												{
											?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></th>
                                                <td><?php echo $data['nama']; ?></td>
                                                <td><?php echo $data['username']; ?></td>
                                                <td><?php echo $data['password']; ?></td>
                                                <td>
                                                	<button type="button" onclick="window.location.href='edit-akun?id_user=<?php echo $data['id_user']; ?>'" class="btn btn-dark mb-3"><i class="ti-pencil-alt"></i></button>&nbsp;
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
	                                                <button type="button" onclick="window.location.href='hapus/akun-instruktur?id_user=<?php echo $data['id_user']; ?>'" class="btn btn-danger">Iya, yakin!</button>
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