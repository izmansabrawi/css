<?php 
include 'header.php';
	include '../koneksi.php';
	$id_berkas = $_GET['id_berkas'];
	$query = mysqli_query($koneksi, "SELECT * FROM berkas where id_berkas = '$id_berkas'");
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
                                        <h4 class="header-title">Edit Data Berkas</h4>
                                        <form method="post" action="update/berkas" novalidate="novalidate" enctype="multipart/form-data" class="form-horizontal" id="validationform" data-parsley-validate="">
					                        <input name="id_berkas" type="hidden" id="example-text-input" value="<?php echo $edit['id_berkas']; ?>">
												<div class="form-group">
								                    <label for="example-text-input" class="col-form-label">Judul Pengumuman</label>
								                    <input class="form-control" name="judul" type="text" id="example-text-input" placeholder="Judul Pengumuman" autocomplete="off" value="<?php echo $edit['judul']; ?>">
								                </div>
								                <div class="form-group">
						                            <label for="validationCustom05">Zip</label>
						                            <input type="file" class="form-control" id="validationCustom05" placeholder="Zip" name="berkas" value="<?php echo $edit['berkas']; ?>">
						                        </div>
						                        <div class="form-group">
								                    <label for="example-text-input" class="col-form-label">Keterangan Pengumuman</label>
								                    <input class="form-control" name="ket" type="text" id="example-text-input" placeholder="Keterangan Pengumuman" autocomplete="off" value="<?php echo $edit['ket']; ?>">
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