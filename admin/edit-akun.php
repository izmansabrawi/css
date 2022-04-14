<?php 
include 'header.php';
	include '../koneksi.php';
	$id_user = $_GET['id_user'];
	$query = mysqli_query($koneksi, "SELECT * FROM user_instruktur where user_instruktur.id_user = '$id_user'");
	foreach ($query as $edit) 
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
                                        <h4 class="header-title">Edit Data Informasi Jadwal Diklat</h4>
                                        <form method="post" action="update/akun-instruktur" novalidate="novalidate" enctype="multipart/form-data" class="form-horizontal" id="validationform" data-parsley-validate="">
					                        <input name="id_user" type="hidden" id="example-text-input" value="<?php echo $edit['id_user']; ?>">
												<div class="form-group">
								                    <label for="example-text-input" class="col-form-label">Nama Lengkap</label>
								                    <input class="form-control" name="nama" type="text" id="example-text-input" autocomplete="off" value="<?php echo $edit['nama']; ?>">
								                </div>
								                
												<div class="form-group">
												    <label class="col-form-label" for="username">Username</label>
												    <input type="text" id="username" name="username" class="form-control" data-parsley-length="[5,40]" autocomplete="off" value="<?php echo $edit['username']; ?>">
												</div>
								                <div class="form-group">
												    <label for="inputPassword">Password</label>
												    <input id="inputPassword" name="password" type="password" class="form-control" data-parsley-length="[8,30]" autocomplete="off" value="<?php echo $edit['password']; ?>">
												</div>
								                <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin dengan Data tersebut?')">Update</button>
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