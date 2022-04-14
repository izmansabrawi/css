<?php include 'header.php'; ?>
<!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Tambah Data Admin</h4>
                                        <form method="post" action="proses/admin" novalidate="novalidate" enctype="multipart/form-data" class="form-horizontal" id="validationform" data-parsley-validate="">
                                        	<div class="form-group">
	                                            <label for="example-text-input" class="col-form-label">Foto</label>
	                                            <input class="form-control" name="foto" type="file" id="example-text-input" required>
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="example-text-input" class="col-form-label">Nama Lengkap</label>
	                                            <input class="form-control" name="nama" type="text" id="example-text-input" required autofocus="" autocomplete="off">
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="example-text-input" class="col-form-label">Jabatan</label>
	                                            <input class="form-control" name="jabatan" type="text" id="example-text-input" required autocomplete="off">
	                                        </div>
	                                        <div class="form-group">
					                            <label class="col-form-label">Alamat</label>
					                                <textarea required="" name="alamat" class="form-control" style="height: 100%"></textarea>
					                        </div>
					                        <div class="form-group">
					                            <label for="inputEmail">Email</label>
					                            <input id="inputEmail" type="email" name="email" data-parsley-trigger="change" required="" autocomplete="off" class="form-control">
					                        </div>
					                        <div class="form-group">
					                            <label for="email">Ulangi Email</label>
					                            <input id="email" data-parsley-equalto="#inputEmail" type="email" required=""class="form-control" autocomplete="off">
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="username">Username</label>
					                            <input type="text" id="username" name="username" class="form-control" required="" data-parsley-length="[5,25]" autocomplete="off">
					                        </div>
	                                        <div class="form-group">
					                            <label for="inputPassword">Password</label>
					                            <input id="inputPassword" name="password" type="password" required="" class="form-control" data-parsley-length="[8,20]" autocomplete="off">
					                        </div>
					                        <div class="form-group">
					                            <label for="ulangiPassword">Ulangi Password</label>
					                            <input id="ulangiPassword" data-parsley-equalto="#inputPassword" type="password" required=""class="form-control" placeholder="Password" autocomplete="off">
					                        </div>
					                        <input type="hidden" id="level" name="level">
					                        <div class="form-group">
					                            <button type="button" class="btn btn-primary btn-flat btn-lg mt-3" data-toggle="modal" data-target="#exampleModalCenter">SIMPAN</button>
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