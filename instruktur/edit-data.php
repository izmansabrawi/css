<?php 
include 'header.php';
	include '../koneksi.php';
	$id_instruktur = $_GET['id_instruktur'];
	$query = mysqli_query($koneksi, "SELECT * FROM user_instruktur join instruktur on instruktur.id_user = user_instruktur.id_user where instruktur.id_instruktur = '$id_instruktur'");
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
                                        <h4 class="header-title">Edit Data Instruktur</h4>
                                        <form method="post" action="update/data-instruktur" novalidate="novalidate" enctype="multipart/form-data" class="form-horizontal" id="validationform" data-parsley-validate="">
					                        <input name="id_instruktur" type="hidden" id="example-text-input" value="<?php echo $edit['id_instruktur']; ?>">
					                        <input name="id_user" type="hidden" id="example-text-input" value="<?php echo $edit['id_user']; ?>">
												<div class="form-group">
								                    <label for="example-text-input" class="col-form-label">Nama Lengkap</label>
								                    <input class="form-control" type="text" id="example-text-input" value="<?php echo $edit['nama']; ?>" disabled>
								                </div>
								                <div class="form-group">
								                    <label for="example-text-input" class="col-form-label">Jabatan</label>
								                    <select class="form-control" name="jabatan">
								                        <option <?php if($data['jabatan']=="Instruktur"){echo "selected";}?>>Instruktur</option>
								                        <option <?php if($data['jabatan']=="Asisten Instruktur"){echo "selected";}?>>Asisten Instruktur</option>
								                    </select>
								                </div>
								                <div class="form-group">
	                                                <label for="example-text-input" class="col-form-label">Materi Diklat</label>
	                                                <select id="id_materi" name="id_materi" class="form-control">
		                                                    <?php
		                                                        include '../koneksi.php';
		                                                        $query = mysqli_query($koneksi, "SELECT * FROM materi ORDER BY materi ASC, angkatan ASC ");
		                                                        foreach ($query as $b)
		                                                        {
		                                                    ?>
		                                                <option value="<?= $b['id_materi']; ?>" <?= ($b['id_materi'] == $edit['id_materi'] ? 'selected' : '') ?>><?= $b['materi']; ?> Angkatan <?= $b['angkatan']; ?></option>
		                                                <?php } ?>
	                                                </select>
	                                            </div>
								                <div class="form-group">
								                        <label for="example-text-input" class="col-form-label">No. KTP</label>
								                        <input class="form-control" type="number" id="example-text-input" autocomplete="off" name="no_ktp" data-parsley-length="[16,16]" value="<?php echo $edit['no_ktp']; ?>">
								                    </div>
								                    <div class="form-group">
								                        <label for="example-text-input" class="col-form-label">KTP</label>
								                        <input class="form-control" type="file" id="example-text-input" autocomplete="off" name="file_ktp" value="<?php echo $edit['file_ktp']; ?>"><?php echo $edit['file_ktp']; ?>
								                    </div>
								                    <div class="form-group">
								                        <label for="example-text-input" class="col-form-label">No. NPWP</label>
								                        <input class="form-control" type="text" id="example-text-input" autocomplete="off" name="no_npwp" value="<?php echo $edit['no_npwp']; ?>">
								                    </div>
								                    <div class="form-group">
								                        <label for="example-text-input" class="col-form-label">NPWP</label>
								                        <input class="form-control" type="file" id="example-text-input" autocomplete="off" name="file_npwp" value="<?php echo $edit['file_npwp']; ?>"><?php echo $edit['file_npwp']; ?>
								                    </div>
								                    <div class="form-group">
								                        <label for="example-text-input" class="col-form-label">CV</label>
								                        <input class="form-control" type="file" id="example-text-input" autocomplete="off" name="cv" value="<?php echo $edit['cv']; ?>"><?php echo $edit['cv']; ?>
								                    </div>
								                    <div class="form-group">
								                        <label for="example-text-input" class="col-form-label">Alamat</label>
								                        <textarea class="form-control" name="alamat" style="height: 100%"><?php echo $edit['alamat']; ?></textarea>
								                    </div>
								                    <div class="form-group">
								                        <label for="example-text-input" class="col-form-label">Portofolio (wajib)</label>
								                        <input class="form-control" type="url" id="example-text-input" autocomplete="off" name="portofolio1" value="<?php echo $edit['portofolio1']; ?>">
								                    </div>
								                    <div class="form-group">
								                        <label for="example-text-input" class="col-form-label">Portofolio (opsional)</label>
								                        <input class="form-control" type="url" id="example-text-input" autocomplete="off" name="portofolio2" value="<?php echo $edit['portofolio2']; ?>">
								                    </div>
								                    <div class="form-group">
								                        <label for="example-text-input" class="col-form-label">Portofolio (opsional)</label>
								                        <input class="form-control" type="url" id="example-text-input" autocomplete="off" name="portofolio3" value="<?php echo $edit['portofolio3']; ?>">
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