<?php 
include 'header.php';
	include '../koneksi.php';
	$id_info = $_GET['id_info'];
	$query = mysqli_query($koneksi, "SELECT * FROM info_jadwal where id_info = '$id_info'");
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
                                        <form method="post" action="update/info-jadwal" novalidate="novalidate" enctype="multipart/form-data" class="form-horizontal" id="validationform" data-parsley-validate="">
					                        <input name="id_info" type="hidden" id="example-text-input" value="<?php echo $edit['id_info']; ?>">
												<div class="form-group">
								                    <label for="example-text-input" class="col-form-label">Judul Pengumuman</label>
								                    <input class="form-control" name="judul_info" type="text" id="example-text-input" placeholder="Judul Pengumuman" autocomplete="off" value="<?php echo $edit['judul_info']; ?>">
								                </div>
								                <div class="form-group">
						                            <label for="validationCustom05">File</label>
						                            <input type="file" class="form-control" id="validationCustom05" placeholder="File" name="file_info" value="<?php echo $edit['file_info']; ?>">
						                        </div>
						                        <div class="form-group">
								                    <label for="example-text-input" class="col-form-label">Keterangan Pengumuman</label>
								                    <input class="form-control" name="ket_info" type="text" id="example-text-input" placeholder="Keterangan Pengumuman" autocomplete="off" value="<?php echo $edit['ket_info']; ?>">
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