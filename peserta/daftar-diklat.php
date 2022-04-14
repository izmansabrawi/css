<?php
    include 'header.php';
    include '../koneksi.php';
    $id_materi = $_GET['id_materi'];
    $query = mysqli_query($koneksi, "SELECT * FROM materi WHERE materi.id_materi='$id_materi'");
    foreach ($query as $data)
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
                                        <h4 class="header-title">Formulir Pendaftaran Diklat</h4>
                                        <form method="post" action="proses/daftar" novalidate="novalidate" enctype="multipart/form-data" class="form-horizontal" id="validationform" data-parsley-validate="">
                                        	<?php
											    include '../koneksi.php';
											    $username = $_SESSION['username'];
											    $query = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE username = '$username' ");
											    $d = mysqli_fetch_array($query);
											?>
                                        	<input class="form-control" name="id_daftar" type="hidden" id="example-text-input" value="<?php echo $d['id_daftar']; ?>">
											<input class="form-control" name="id_materi" type="hidden" id="example-text-input" value="<?php echo $data['id_materi']; ?>">
											<input class="form-control" name="thn_materi" type="hidden" id="example-text-input" value="<?php echo $data['tahun']; ?>">
											<input class="form-control" name="angk_materi" type="hidden" id="example-text-input" value="<?php echo $data['angkatan']; ?>">
											<?php
	                                                        include '../koneksi.php';
	                                                        $query = mysqli_query($koneksi, "SELECT * FROM materi ORDER BY materi ASC ");
	                                                        foreach ($query as $b)
	                                                    ?>
											<input class="form-control" name="tgl_buka" type="hidden" id="example-text-input" value="<?php echo $b['tgl_pembukaan']; ?>">
											<input class="form-control" name="bulan_buka" type="hidden" id="example-text-input" value="<?php echo $b['bulan_pembukaan']; ?>">
											<input class="form-control" name="tgl_akhir" type="hidden" id="example-text-input" value="<?php echo $b['tgl_penutupan']; ?>">
											<input class="form-control" name="bulan_akhir" type="hidden" id="example-text-input" value="<?php echo $b['bulan_penutupan']; ?>">
                                        	<div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Materi Diklat</label>
                                                <select id="id_materi" name="id_materi" class="form-control" required="required">
	                                                <option>- Pilih Diklat-</option>
	                                                    <?php
	                                                        include '../koneksi.php';
	                                                        $query = mysqli_query($koneksi, "SELECT * FROM materi ORDER BY materi ASC ");
	                                                        foreach ($query as $b)
	                                                        {
	                                                    ?>
	                                                <option value="<?= $b['id_materi']; ?>" <?= ($b['id_materi'] == $data['id_materi'] ? 'selected' : '') ?>><?= $b['materi']; ?></option>
	                                                <?php } ?>

                                                </select>
                                                <p>Angkatan : <?= $b['angkatan']; ?> | Tanggal Pelaksanaan : <?= $b['tgl_pembukaan']; ?> <?= $b['bulan_pembukaan']; ?> s.d. <?= $b['tgl_penutupan']; ?> <?= $b['bulan_penutupan']; ?></p>
                                            </div>
	                                        <div class="form-group">
	                                            <label for="example-text-input" class="col-form-label">Nama Lengkap</label>
	                                            <input class="form-control" name="nama_lengkap" type="text" id="example-text-input" autocomplete="off" value="<?php echo $d['nama']; ?>">
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="example-text-input" class="col-form-label">Tempat Lahir</label>
	                                            <input class="form-control" name="tempat_lahir" type="text" id="example-text-input" autocomplete="off" value="<?php echo $d['tempat']; ?>">
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="example-text-input" class="col-form-label">
	                                            Tanggal Lahir</label>
	                                            <input class="form-control" name="tgl_lahir" type="date" id="example-text-input" autocomplete="off" value="<?php echo $d['tanggal']; ?>" data-date-format="dd-mm-yyyy" value="<?php echo date("d-m-Y"); ?>">
	                                        </div>
	                                        <div class="form-group">
					                            <label class="col-form-label" for="jns_kelamin">Jenis Kelamin</label><br>
					                            <label class="custom-control custom-radio custom-control-inline">
					                                <input type="radio" name="jns_kelamin" checked="" class="custom-control-input" value="Perempuan" <?php if($d['jk']=="Perempuan"){echo "checked";}?>/><span class="custom-control-label" >Perempuan</span>
					                            </label>
					                            <label class="custom-control custom-radio custom-control-inline">
					                                <input type="radio" name="jns_kelamin" class="custom-control-input" value="Laki-laki" <?php if($d['jk']=="Laki-laki"){echo "checked";}?>/><span class="custom-control-label" >Laki-laki</span>
					                            </label>
					                        </div>
					                        <div class="form-group">
					                            <label for="agm" class="col-form-label">Agama</label>
					                            <select name="agm" class="form-control">
					                                <option <?php if($d['agama']=="Islam"){echo "selected";}?>>Islam</option>
					                                <option <?php if($d['agama']=="Buddha"){echo "selected";}?>>Buddha</option>
					                                <option <?php if($d['agama']=="Kristen Protestan"){echo "selected";}?>>Kristen Protestan</option>
					                                <option <?php if($d['agama']=="Kristen Katolik"){echo "selected";}?>>Kristen Katolik</option>
					                                <option <?php if($d['agama']=="Hindu"){echo "selected";}?>>Hindu</option>
					                                <option <?php if($d['agama']=="Konghucu"){echo "selected";}?>>Konghucu</option>
					                            </select>
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" >Alamat&nbsp;<span style="color: red; font-size: 12px; font-style: italic;">(sesuai KTP / identitas)</span></label>
					                                <textarea name="alamat_lengkap" class="form-control" style="height: 100%"><?php echo $d['alamat']; ?>, <?php echo $d['desa']; ?>, <?php echo $d['kecamatan']; ?>, <?php echo $d['kota']; ?>, <?php echo $d['provinsi']; ?></textarea>
					                        </div>
					                        <div class="form-group">
					                            <label for="inputEmail">Email</label>
					                            <input id="inputEmail" type="email" name="alamat_email" data-parsley-trigger="change" autocomplete="off" class="form-control" value="<?php echo $d['email']; ?>">
					                        </div>
					                        <div class="form-group">
					                            <label for="pend" class="col-form-label">Pendidikan Terakhir</label>
					                            <select name="pend" class="form-control">
					                                <option>- Pilih -</option>
					                                <option <?php if($d['pendidikan']=="SMA"){echo "selected";}?>>SMA</option>
					                                <option <?php if($d['pendidikan']=="SMK"){echo "selected";}?>>SMK</option>
					                                <option <?php if($d['pendidikan']=="D1"){echo "selected";}?>>D1</option>
					                                <option <?php if($d['pendidikan']=="D2"){echo "selected";}?>>D2</option>
					                                <option <?php if($d['pendidikan']=="D3"){echo "selected";}?>>D3</option>
					                                <option <?php if($d['pendidikan']=="D4"){echo "selected";}?>>D4</option>
					                                <option <?php if($d['pendidikan']=="S1"){echo "selected";}?>>S1</option>
					                                <option <?php if($d['pendidikan']=="S2"){echo "selected";}?>>S2</option>
					                            </select>
					                        </div>
					                        <div class="form-group">
	                                            <label for="example-text-input" class="col-form-label">Jurusan</label>
	                                            <input class="form-control" name="jurusan" type="text" id="example-text-input" autocomplete="off" required>
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="example-text-input" class="col-form-label">No.KTP / Identitas</label>
	                                            <input class="form-control" name="nik" type="number" id="example-text-input" autocomplete="off" required data-parsley-length="[16,16]">
	                                        </div>
	                                        
					                        <div class="form-group">
	                                            <label for="example-text-input" class="col-form-label">No.Telp / HP</label>
	                                            <input class="form-control" name="nohp" type="number" id="example-text-input" autocomplete="off" required data-parsley-length="[10,13]">
	                                        </div><br>
					                        <h5>Kompetensi Dasar</h5>
					                        <div class="form-group">
					                            <label class="col-form-label" for="software">Penguasaan Software</label>
					                            <textarea name="software" class="form-control" style="height: 100%" required></textarea>
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="tujuan">Tujuan ikut Diklat</label>
					                            <textarea name="tujuan" class="form-control" style="height: 100%" required></textarea>
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="rencana">Rencana Kerja</label>
					                            <textarea name="rencana" class="form-control" style="height: 100%" required></textarea>
					                            <p>(sebutkan Instansi / Institusinya)</p>
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="pernah">Apakah pernah ikut diklat sejenis di BDI Kemenperin Denpasar</label><br>
					                            <label class="custom-control custom-radio custom-control-inline">
					                                <input type="radio" checked="" name="pernah" class="custom-control-input" value="Pernah"><span class="custom-control-label">Pernah</span>
					                            </label>
					                            <label class="custom-control custom-radio custom-control-inline">
					                                <input type="radio" name="pernah" class="custom-control-input" value="Belum Pernah"><span class="custom-control-label">Belum Pernah</span>
					                            </label>
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="materi_diklat">Jika Pernah, sebutkan Materi :</label>
					                            <input class="form-control" type="text" name="materi_diklat" id="example-url-input" autocomplete="off">
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="thn_diklat">Tahun Diklat</label>
					                            <input class="form-control" type="number" name="thn_diklat" id="example-url-input" data-parsley-length="[4,4]" autocomplete="off">
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="portofolio">Portofolio</label><br>
					                            <label class="custom-control custom-radio custom-control-inline">
					                                <input type="radio" checked="" name="portofolio" class="custom-control-input" value="Ada"><span class="custom-control-label">Ada</span>
					                            </label>
					                            <label class="custom-control custom-radio custom-control-inline">
					                                <input type="radio" name="portofolio" class="custom-control-input" value="Tidak Ada"><span class="custom-control-label">Tidak Ada</span>
					                            </label>
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="alamat_link">Alamat Link Portofolio</label>
					                            <input class="form-control" type="url" name="alamat_link" id="example-url-input" autocomplete="off">
					                        </div>
					                        <h5>Berkas Persyaratan</h5>
					                        <div class="form-group">
					                            <label class="col-form-label" for="ktp">Fotocopy KTP</label>
					                            <input class="form-control" name="ktp" type="file" id="example-text-input" autocomplete="off" required>
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="surat_dokter">Surat Keterangan Sehat dari Dokter</label>
					                            <input class="form-control" name="surat_dokter" type="file" id="example-text-input" autocomplete="off" required>
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="surat_pernyataan">Surat Pernyataan Belum Bekerja dengan materai 6000</label>
					                            <input class="form-control" name="surat_pernyataan" type="file" id="example-text-input" autocomplete="off" required> 
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="pakta">Pakta Integritas</label>
					                            <input class="form-control" name="pakta" type="file" id="example-text-input" autocomplete="off" required>
					                        </div>
					                        <input class="form-control" name="proses" type="hidden" id="example-text-input">
					                        <div class="form-group">
					                            <button type="button" class="btn btn-primary btn-flat btn-lg mt-3" data-toggle="modal" data-target="#exampleModalCenter">SUBMIT</button>
				                                <!-- Modal -->
				                                <div class="modal fade" id="exampleModalCenter">
				                                    <div class="modal-dialog modal-dialog-centered" role="document">
				                                        <div class="modal-content">
				                                            <div class="modal-header">
				                                                <h5 class="modal-title">Warning!</h5>
				                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				                                            </div>
				                                            <div class="modal-body">
				                                                <p>Apakah Anda yakin bahwa Data tersebut memang benar dan tidak ada manipulasi Data? Jika Anda Yakin, silahkan Simpan data ini dan Tim Seleksi Peserta Diklat akan melakukan pengecekan Data Anda. Terima Kasih</p>
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