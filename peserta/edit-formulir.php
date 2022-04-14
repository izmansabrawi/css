<?php
    include 'header.php';
    include '../koneksi.php';
    $id_formulir = $_GET['id_formulir'];
    $query = mysqli_query($koneksi, "SELECT * FROM formulir join materi on materi.id_materi = formulir.id_materi join pendaftaran on pendaftaran.id_daftar = formulir.id_daftar WHERE formulir.id_formulir='$id_formulir'");
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
                                        <h4 class="header-title">Edit Formulir</h4>
                                        <form method="post" action="update/daftar" novalidate="novalidate" enctype="multipart/form-data" class="form-horizontal" id="validationform" data-parsley-validate="">
											<input class="form-control" name="id_formulir" type="hidden" id="example-text-input" value="<?php echo $data['id_formulir']; ?>">
                                        	<input class="form-control" name="id_daftar" type="hidden" id="example-text-input" value="<?php echo $data['id_daftar']; ?>">
											<input class="form-control" name="id_materi" type="hidden" id="example-text-input" value="<?php echo $data['id_materi']; ?>">
											<input class="form-control" name="thn_materi" type="hidden" id="example-text-input" value="<?php echo $data['thn_materi']; ?>">
											<input class="form-control" name="angk_materi" type="hidden" id="example-text-input" value="<?php echo $data['angk_materi']; ?>">
											<input class="form-control" name="tgl_buka" type="hidden" id="example-text-input" value="<?php echo $data['tgl_buka']; ?>">
											<input class="form-control" name="bulan_buka" type="hidden" id="example-text-input" value="<?php echo $data['bulan_buka']; ?>">
											<input class="form-control" name="tgl_akhir" type="hidden" id="example-text-input" value="<?php echo $data['tgl_akhir']; ?>">
											<input class="form-control" name="bulan_akhir" type="hidden" id="example-text-input" value="<?php echo $data['bulan_akhir']; ?>">
                                        	<div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Materi Diklat</label>
                                                <select id="id_materi" name="id_materi" class="form-control">
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
	                                            <input class="form-control" name="nama_lengkap" type="text" id="example-text-input" autocomplete="off" value="<?php echo $data['nama_lengkap']; ?>">
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="example-text-input" class="col-form-label">Tempat Lahir</label>
	                                            <input class="form-control" name="tempat_lahir" type="text" id="example-text-input" autocomplete="off" value="<?php echo $data['tempat_lahir']; ?>">
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="example-text-input" class="col-form-label">
	                                            Tanggal Lahir</label>
	                                            <input class="form-control" name="tgl_lahir" type="date" id="example-text-input" autocomplete="off" value="<?php echo $data['tgl_lahir']; ?>">
	                                        </div>
	                                        <div class="form-group">
					                            <label class="col-form-label" for="jns_kelamin">Jenis Kelamin</label><br>
					                            <label class="custom-control custom-radio custom-control-inline">
					                                <input type="radio" name="jns_kelamin" checked="" class="custom-control-input" value="Perempuan" <?php if($data['jns_kelamin']=="Perempuan"){echo "checked";}?>/><span class="custom-control-label" >Perempuan</span>
					                            </label>
					                            <label class="custom-control custom-radio custom-control-inline">
					                                <input type="radio" name="jns_kelamin" class="custom-control-input" value="Laki-laki" <?php if($data['jns_kelamin']=="Laki-laki"){echo "checked";}?>/><span class="custom-control-label" >Laki-laki</span>
					                            </label>
					                        </div>
					                        <div class="form-group">
					                            <label for="agm" class="col-form-label">Agama</label>
					                            <select name="agm" class="form-control">
					                                <option <?php if($data['agm']=="Islam"){echo "selected";}?>>Islam</option>
					                                <option <?php if($data['agm']=="Buddha"){echo "selected";}?>>Buddha</option>
					                                <option <?php if($data['agm']=="Kristen Protestan"){echo "selected";}?>>Kristen Protestan</option>
					                                <option <?php if($data['agm']=="Kristen Katolik"){echo "selected";}?>>Kristen Katolik</option>
					                                <option <?php if($data['agm']=="Hindu"){echo "selected";}?>>Hindu</option>
					                                <option <?php if($data['agm']=="Konghucu"){echo "selected";}?>>Konghucu</option>
					                            </select>
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" >Alamat&nbsp;<span style="color: red; font-size: 12px; font-style: italic;">(sesuai KTP / identitas)</span></label>
					                                <textarea name="alamat_lengkap" class="form-control" style="height: 100%"><?php echo $data['alamat_lengkap']; ?></textarea>
					                        </div>
					                        <div class="form-group">
					                            <label for="inputEmail">Email</label>
					                            <input id="inputEmail" type="email" name="alamat_email" data-parsley-trigger="change" autocomplete="off" class="form-control" value="<?php echo $data['alamat_email']; ?>">
					                        </div>
					                        <div class="form-group">
					                            <label for="pend" class="col-form-label">Pendidikan Terakhir</label>
					                            <select name="pend" class="form-control">
					                                <option>- Pilih -</option>
					                                <option <?php if($data['pend']=="SMA"){echo "selected";}?>>SMA</option>
					                                <option <?php if($data['pend']=="SMK"){echo "selected";}?>>SMK</option>
					                                <option <?php if($data['pend']=="D1"){echo "selected";}?>>D1</option>
					                                <option <?php if($data['pend']=="D2"){echo "selected";}?>>D2</option>
					                                <option <?php if($data['pend']=="D3"){echo "selected";}?>>D3</option>
					                                <option <?php if($data['pend']=="D4"){echo "selected";}?>>D4</option>
					                                <option <?php if($data['pend']=="S1"){echo "selected";}?>>S1</option>
					                                <option <?php if($data['pend']=="S2"){echo "selected";}?>>S2</option>
					                            </select>
					                        </div>
					                        <div class="form-group">
	                                            <label for="example-text-input" class="col-form-label">Jurusan</label>
	                                            <input class="form-control" name="jurusan" type="text" id="example-text-input" autocomplete="off"  value="<?php echo $data['jurusan']; ?>">
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="example-text-input" class="col-form-label">No.KTP / Identitas</label>
	                                            <input class="form-control" name="nik" type="number" id="example-text-input" autocomplete="off"  data-parsley-length="[16,16]" value="<?php echo $data['nik']; ?>">
	                                        </div>
	                                        
					                        <div class="form-group">
	                                            <label for="example-text-input" class="col-form-label">No.Telp / HP</label>
	                                            <input class="form-control" name="nohp" type="number" id="example-text-input" autocomplete="off"  data-parsley-length="[10,13]" value="<?php echo $data['nohp']; ?>">
	                                        </div><br>
					                        <h5>Kompetensi Dasar</h5>
					                        <div class="form-group">
					                            <label class="col-form-label" for="software">Penguasaan Software</label>
					                            <textarea name="software" class="form-control" style="height: 100%" ><?php echo $data['software']; ?></textarea>
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="tujuan">Tujuan ikut Diklat</label>
					                            <textarea name="tujuan" class="form-control" style="height: 100%" ><?php echo $data['tujuan']; ?></textarea>
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="rencana">Rencana Kerja</label>
					                            <textarea name="rencana" class="form-control" style="height: 100%" ><?php echo $data['rencana']; ?></textarea>
					                            <p>(sebutkan Instansi / Institusinya)</p>
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="pernah">Apakah pernah ikut diklat sejenis di BDI Kemenperin Denpasar</label><br>
					                            <label class="custom-control custom-radio custom-control-inline">
					                                <input type="radio" checked="" name="pernah" class="custom-control-input" value="Pernah" <?php if($data['pernah']=="Pernah"){echo "checked";}?>/><span class="custom-control-label">Pernah</span>
					                            </label>
					                            <label class="custom-control custom-radio custom-control-inline">
					                                <input type="radio" name="pernah" class="custom-control-input" value="Belum Pernah" <?php if($data['pernah']=="Belum Pernah"){echo "checked";}?>/><span class="custom-control-label">Belum Pernah</span>
					                            </label>
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="materi_diklat">Jika Pernah, sebutkan Materi :</label>
					                            <input class="form-control" type="text" name="materi_diklat" id="example-url-input"  autocomplete="off" value="<?php echo $data['materi_diklat']; ?>">
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="thn_diklat">Tahun Diklat</label>
					                            <input class="form-control" type="number" name="thn_diklat" id="example-url-input" data-parsley-length="[4,4]"  autocomplete="off" value="<?php echo $data['thn_diklat']; ?>">
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="portofolio">Portofolio</label><br>
					                            <label class="custom-control custom-radio custom-control-inline">
					                                <input type="radio" checked="" name="portofolio" class="custom-control-input" value="Ada" <?php if($data['portofolio']=="Ada"){echo "checked";}?>/><span class="custom-control-label">Ada</span>
					                            </label>
					                            <label class="custom-control custom-radio custom-control-inline">
					                                <input type="radio" name="portofolio" class="custom-control-input" value="Tidak Ada" <?php if($data['portofolio']=="Tidak Ada"){echo "checked";}?>/><span class="custom-control-label">Tidak Ada</span>
					                            </label>
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="alamat_link">Alamat Link Portofolio</label>
					                            <input class="form-control" type="url" name="alamat_link" id="example-url-input" autocomplete="off" value="<?php echo $data['alamat_link']; ?>">
					                        </div>
					                        <h5>Berkas Persyaratan</h5>
					                        <div class="form-group">
					                            <label class="col-form-label" for="ktp">Fotocopy KTP</label>
					                            <input class="form-control" name="ktp" type="file" id="example-text-input" autocomplete="off"  value="<?php echo $data['ktp']; ?>">
					                            <p><?php echo $data['ktp']; ?></p>
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="surat_dokter">Surat Keterangan Sehat dari Dokter</label>
					                            <input class="form-control" name="surat_dokter" type="file" id="example-text-input" autocomplete="off" value="<?php echo $data['surat_dokter']; ?>" >
					                            <p><?php echo $data['surat_dokter']; ?></p>
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="surat_pernyataan">Surat Pernyataan Belum Bekerja dengan materai 6000</label>
					                            <input class="form-control" name="surat_pernyataan" type="file" id="example-text-input" autocomplete="off"  value="<?php echo $data['surat_pernyataan']; ?>"> 
					                            <p><?php echo $data['surat_pernyataan']; ?></p>
					                        </div>
					                        <div class="form-group">
					                            <label class="col-form-label" for="pakta">Pakta Integritas</label>
					                            <input class="form-control" name="pakta" type="file" id="example-text-input" autocomplete="off"  value="<?php echo $data['pakta']; ?>">
					                            <p><?php echo $data['pakta']; ?></p>
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
				                                                <p>Apakah Anda yakin akan mengedit Data tersebut? Jika Anda Yakin, silahkan Simpan data ini dan Tim Seleksi Peserta Diklat akan melakukan pengecekan Data Anda. Terima Kasih</p>
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