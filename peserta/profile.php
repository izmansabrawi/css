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
                                        <form method="post" action="update/pendaftaran" novalidate="novalidate" enctype="multipart/form-data" class="form-horizontal" id="validationform" data-parsley-validate="">
                                        	<?php
											    include '../koneksi.php';
											    $username = $_SESSION['username'];
											    $query = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE username = '$username' ");
											    $data = mysqli_fetch_array($query);
											?>
											<input class="form-control" name="id_daftar" type="hidden" id="example-text-input" value="<?php echo $data['id_daftar']; ?>">
                                        	<div class="form-group">
	                                            <center><img src="foto/<?php echo $data['foto'] ?>" style="width: 170px; height: 240px"></center>
	                                            <center><p>Pastikan Foto yang Anda Upload : Ukuran 4x6, memakai kemeja putih dan latar merah</p></center><br>
	                                            <input class="form-control" name="foto" type="file" id="example-text-input" value="<?php echo $data['foto']; ?>">
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="example-text-input" class="col-form-label">Nama Lengkap</label>
	                                            <input class="form-control" name="nama" type="text" id="example-text-input" autocomplete="off" value="<?php echo $data['nama']; ?>">
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="example-text-input" class="col-form-label">Tempat Lahir</label>
	                                            <input class="form-control" name="tempat" type="text" id="example-text-input" autocomplete="off" value="<?php echo $data['tempat']; ?>">
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="example-text-input" class="col-form-label">
	                                            Tanggal Lahir</label>
	                                            <input class="form-control" name="tanggal" type="date" id="example-text-input" autocomplete="off" value="<?php echo $data['tanggal']; ?>">
	                                        </div>
	                                        <div class="form-group">
					                            <label class="col-form-label" for="jk">Jenis Kelamin</label><br>
					                            <label class="custom-control custom-radio custom-control-inline">
					                                <input type="radio" name="jk" checked="" class="custom-control-input" value="Perempuan" <?php if($data['jk']=="Perempuan"){echo "checked";}?>/><span class="custom-control-label">Perempuan</span>
					                            </label>
					                            <label class="custom-control custom-radio custom-control-inline">
					                                <input type="radio" name="jk" class="custom-control-input" value="Laki-laki" <?php if($data['jk']=="Laki-laki"){echo "checked";}?>/><span class="custom-control-label">Laki-laki</span>
					                            </label>
					                        </div>
	                                        <div class="form-group">
					                            <label class="col-form-label">Alamat</label>
					                                <textarea name="alamat" class="form-control" style="height: 100%"><?php echo $data['alamat']; ?></textarea>
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label">Desa / Kelurahan</label>
					                            <input class="form-control" name="desa" type="text" id="example-text-input" autocomplete="off" value="<?php echo $data['desa']; ?>">
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label">Kecamatan</label>
					                            <input class="form-control" name="kecamatan" type="text" id="example-text-input" autocomplete="off" value="<?php echo $data['kecamatan']; ?>">
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label">Kota</label>
					                            <input class="form-control" name="kota" type="text" id="example-text-input" autocomplete="off" value="<?php echo $data['kota']; ?>">
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label">Provinsi</label>
					                            <input class="form-control" name="provinsi" type="text" id="example-text-input" autocomplete="off" value="<?php echo $data['provinsi']; ?>">
					                        </div>
					                        <div class="form-group">
					                            <label for="agama" class="col-form-label">Agama</label>
					                            <select name="agama" class="form-control">
					                                <option <?php if($data['agama']=="Islam"){echo "selected";}?>>Islam</option>
					                                <option <?php if($data['agama']=="Buddha"){echo "selected";}?>>Buddha</option>
					                                <option <?php if($data['agama']=="Kristen Protestan"){echo "selected";}?>>Kristen Protestan</option>
					                                <option <?php if($data['agama']=="Kristen Katolik"){echo "selected";}?>>Kristen Katolik</option>
					                                <option <?php if($data['agama']=="Hindu"){echo "selected";}?>>Hindu</option>
					                                <option <?php if($data['agama']=="Konghucu"){echo "selected";}?>>Konghucu</option>
					                            </select>
					                        </div>
					                        <div class="form-group">
					                            <label for="pendidikan" class="col-form-label">Pendidikan Terakhir</label>
					                            <select name="pendidikan" class="form-control">
					                                <option>- Pilih -</option>
					                                <option <?php if($data['pendidikan']=="SMA"){echo "selected";}?>>SMA</option>
					                                <option <?php if($data['pendidikan']=="SMK"){echo "selected";}?>>SMK</option>
					                                <option <?php if($data['pendidikan']=="D1"){echo "selected";}?>>D1</option>
					                                <option <?php if($data['pendidikan']=="D2"){echo "selected";}?>>D2</option>
					                                <option <?php if($data['pendidikan']=="D3"){echo "selected";}?>>D3</option>
					                                <option <?php if($data['pendidikan']=="D4"){echo "selected";}?>>D4</option>
					                                <option <?php if($data['pendidikan']=="S1"){echo "selected";}?>>S1</option>
					                                <option <?php if($data['pendidikan']=="S2"){echo "selected";}?>>S2</option>
					                            </select>
					                        </div>
					                        <div class="form-group">
					                            <label for="status" class="col-form-label">Status Pekerjaan</label>
					                            <select name="status" class="form-control">
					                                <option>- Pilih -</option>
					                                <option <?php if($data['status']=="Belum Bekerja"){echo "selected";}?>>Belum Bekerja</option>
					                                <option <?php if($data['status']=="Sudah Bekerja"){echo "selected";}?>>Sudah Bekerja</option>
					                                <option <?php if($data['status']=="Memiliki Usaha"){echo "selected";}?>>Memiliki Usaha</option>
					                            </select>
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