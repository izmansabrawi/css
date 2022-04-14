<?php
    include 'header.php';
?>
<!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Profile</h4>
                                        <form method="post" action="update/admin" novalidate="novalidate" enctype="multipart/form-data" class="form-horizontal" id="validationform" data-parsley-validate="">
                                        	<?php
											    include '../koneksi.php';
											    $username = $_SESSION['username'];
											    $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' ");
											    $data = mysqli_fetch_array($query);
											?>
											<input class="form-control" name="id_admin" type="hidden" id="example-text-input" value="<?php echo $data['id_admin']; ?>">
                                        	<div class="form-group">
	                                            <center><img src="images/<?php echo $data['foto'] ?>" style="width: 170px; height: 240px"></center><br>
	                                            <input class="form-control" name="foto" type="file" id="example-text-input" value="<?php echo $data['foto']; ?>">
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="example-text-input" class="col-form-label">Nama Lengkap</label>
	                                            <input class="form-control" name="nama" type="text" id="example-text-input" autocomplete="off" value="<?php echo $data['nama']; ?>">
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="example-text-input" class="col-form-label">Jabatan</label>
	                                            <input class="form-control" name="jabatan" type="text" id="example-text-input" autocomplete="off" value="<?php echo $data['jabatan']; ?>">
	                                        </div>
	                                        <div class="form-group">
					                            <label class="col-form-label">Alamat</label>
					                                <textarea name="alamat" class="form-control" style="height: 100%"><?php echo $data['alamat']; ?></textarea>
					                        </div>
					                        <div class="form-group">
					                            <label for="inputEmail">Email</label>
					                            <input id="inputEmail" type="email" name="email" data-parsley-trigger="change" autocomplete="off" class="form-control" value="<?php echo $data['email']; ?>">
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="username">Username</label>
					                            <input type="text" id="username" name="username" class="form-control" data-parsley-length="[5,25]" autocomplete="off" value="<?php echo $data['username']; ?>">
					                        </div>
	                                        <div class="form-group">
					                            <label for="inputPassword">Password</label>
					                            <input id="inputPassword" name="password" type="password" class="form-control" data-parsley-length="[8,20]" autocomplete="off" value="<?php echo $data['password']; ?>">
					                        </div>
					                        <input class="form-control" name="level" type="hidden" id="example-text-input" value="<?php echo $data['level']; ?>">
					                        <div class="form-group">
					                            <button type="button" class="btn btn-primary btn-flat btn-lg mt-3" data-toggle="modal" data-target="#exampleModalCenter">UPDATE</button>
				                                <!-- Modal -->
				                                <div class="modal fade" id="exampleModalCenter">
				                                    <div class="modal-dialog modal-dialog-centered" role="document">
				                                        <div class="modal-content">
				                                            <div class="modal-header">
				                                                <h5 class="modal-title">Warning!</h5>
				                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				                                            </div>
				                                            <div class="modal-body">
				                                                <p>Apakah Anda yakin dengan Data tersebut?</p>
				                                            </div>
				                                            <div class="modal-footer">
				                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				                                                <button type="submit" class="btn btn-primary">Simpan</button>
				                                            </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
<?php include 'footer.php'; ?>