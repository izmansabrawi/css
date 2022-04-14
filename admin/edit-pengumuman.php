<?php 
include 'header.php';
	include '../koneksi.php';
	$id_pengumuman = $_GET['id_pengumuman'];
	$query = mysqli_query($koneksi, "SELECT * FROM pengumuman where id_pengumuman = '$id_pengumuman'");
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
                                        <h4 class="header-title">Edit Data Pengumuman Diklat</h4>
                                        <form method="post" action="update/pengumuman-seleksi" novalidate="novalidate" enctype="multipart/form-data" class="form-horizontal" id="validationform" data-parsley-validate="">
					                        <input name="id_pengumuman" type="hidden" id="example-text-input" value="<?php echo $edit['id_pengumuman']; ?>">
												<div class="form-group">
								                    <label for="example-text-input" class="col-form-label">Materi Diklat</label>
								                    <input class="form-control" name="materi" type="text" id="example-text-input" placeholder="Materi Diklat" autocomplete="off" value="<?php echo $edit['materi']; ?>">
								                </div>
								                <div class="form-group">
						                            <label for="validationCustom05">Gambar</label>
						                            <input type="file" class="form-control" id="validationCustom05" placeholder="Gambar" name="gambar" value="<?php echo $edit['gambar']; ?>">
						                        </div>
						                        <div class="form-group">
						                            <label for="validationCustom05">File</label>
						                            <input type="file" class="form-control" id="validationCustom05" placeholder="File" name="file" value="<?php echo $edit['file']; ?>">
						                        </div>
						                        <div class="form-group">
								                    <label for="example-text-input" class="col-form-label">Keterangan Pengumuman</label>
								                    <input class="form-control" name="keterangan" type="text" id="example-text-input" placeholder="Keterangan Pengumuman" autocomplete="off" value="<?php echo $edit['keterangan']; ?>">
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