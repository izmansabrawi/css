<?php 
include 'header.php';
	include '../koneksi.php';
	$id_materi = $_GET['id_materi'];
	$query = mysqli_query($koneksi, "SELECT * FROM materi where id_materi = '$id_materi'");
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
                                        <h4 class="header-title">Edit Data Materi Diklat</h4>
                                        <form method="post" action="update/materi" novalidate="novalidate" enctype="multipart/form-data" class="form-horizontal" id="validationform" data-parsley-validate="">
					                        <input name="id_materi" type="hidden" id="example-text-input" value="<?php echo $edit['id_materi']; ?>">
												<div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Materi Diklat</label>
                                                    <input class="form-control" name="materi" type="text" id="example-text-input" required autofocus="" autocomplete="off" value="<?php echo $edit['materi']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" for="jpl">JPL</label>
                                                    <input type="number" id="jpl" name="jpl" class="form-control" required="" autocomplete="off" value="<?php echo $edit['jpl']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Angkatan</label>
                                                    <input id="" name="angkatan" type="number" required="" class="form-control" autocomplete="off" value="<?php echo $edit['angkatan']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Tanggal Pembukaan</label>
                                                    	<div class="col-sm-6">
                                                            <select name="tgl_pembukaan" class="form-control" required="">
                                                                <?php for ($i = 1; $i <= 31; $i++) { ?>
                                                                <option value="<?= $i ?>" <?= ($edit['tgl_pembukaan'] == $i ? 'selected' : '') ?>><?= $i ?></option>
                                                                <?php } ?>
                                                            </select><br>
                                                            <select name="bulan_pembukaan" class="form-control" required="">
                                                                <option <?php if($edit['bulan_pembukaan']=="01"){echo "selected";}?>>Januari</option>
				                                                <option <?php if($edit['bulan_pembukaan']=="02"){echo "selected";}?>>Februari</option>
				                                                <option <?php if($edit['bulan_pembukaan']=="03"){echo "selected";}?>>Maret</option>
				                                                <option <?php if($edit['bulan_pembukaan']=="04"){echo "selected";}?>>April</option>
				                                                <option <?php if($edit['bulan_pembukaan']=="05"){echo "selected";}?>>Mei</option>
				                                                <option <?php if($edit['bulan_pembukaan']=="06"){echo "selected";}?>>Juni</option>
				                                                <option <?php if($edit['bulan_pembukaan']=="07"){echo "selected";}?>>Juli</option>
				                                                <option <?php if($edit['bulan_pembukaan']=="08"){echo "selected";}?>>Agustus</option>
				                                                <option <?php if($edit['bulan_pembukaan']=="09"){echo "selected";}?>>September</option>
				                                                <option <?php if($edit['bulan_pembukaan']=="10"){echo "selected";}?>>Oktober</option>
				                                                <option <?php if($edit['bulan_pembukaan']=="11"){echo "selected";}?>>November</option>
				                                                <option <?php if($edit['bulan_pembukaan']=="12"){echo "selected";}?>>Desember</option>
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Tanggal Penutupan</label>
                                                        <div class="col-sm-6">
                                                            <select name="tgl_penutupan" class="form-control" required="">
                                                                <?php for ($i = 1; $i <= 31; $i++) { ?>
                                                                <option value="<?= $i ?>" <?= ($edit['tgl_penutupan'] == $i ? 'selected' : '') ?>><?= $i ?></option>
                                                                <?php } ?>
                                                            </select><br>
                                                            <select name="bulan_penutupan" class="form-control" required="">
                                                                <option <?php if($edit['bulan_penutupan']=="01"){echo "selected";}?>>Januari</option>
				                                                <option <?php if($edit['bulan_penutupan']=="02"){echo "selected";}?>>Februari</option>
				                                                <option <?php if($edit['bulan_penutupan']=="03"){echo "selected";}?>>Maret</option>
				                                                <option <?php if($edit['bulan_penutupan']=="04"){echo "selected";}?>>April</option>
				                                                <option <?php if($edit['bulan_penutupan']=="05"){echo "selected";}?>>Mei</option>
				                                                <option <?php if($edit['bulan_penutupan']=="06"){echo "selected";}?>>Juni</option>
				                                                <option <?php if($edit['bulan_penutupan']=="07"){echo "selected";}?>>Juli</option>
				                                                <option <?php if($edit['bulan_penutupan']=="08"){echo "selected";}?>>Agustus</option>
				                                                <option <?php if($edit['bulan_penutupan']=="09"){echo "selected";}?>>September</option>
				                                                <option <?php if($edit['bulan_penutupan']=="10"){echo "selected";}?>>Oktober</option>
				                                                <option <?php if($edit['bulan_penutupan']=="11"){echo "selected";}?>>November</option>
				                                                <option <?php if($edit['bulan_penutupan']=="12"){echo "selected";}?>>Desember</option>
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="form-group">
	                                                <label for="">Tahun Diklat</label>
	                                                    <div class="col-sm-6">
	                                                        <select name="tahun" class="form-control" required="">
	                                                        	<?php for ($i = date('Y'); $i <= date('Y') + 10; $i++) { ?>
	                                                                <option value="<?= $i ?>" <?= ($edit['tahun'] == $i ? 'selected' : '') ?>><?= $i ?></option>
	                                                                <?php } ?>
	                                                            
	                                                        </select>
	                                               		</div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Jumlah Peserta</label>
                                                    <input id="" name="jumlah" type="number" required="" class="form-control" autocomplete="off" value="<?php echo $edit['jumlah']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Status / Keterangan</label>
                                                        <select name="status" class="form-control" required>
                                                        	<option <?php if($edit['status']=="Pendaftaran"){echo "selected";}?>>Pendaftaran</option>
                                                        	<option <?php if($edit['status']=="Selesai"){echo "selected";}?>>Selesai</option>
                                                        </select>
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