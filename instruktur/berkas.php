<?php
error_reporting();
include 'header.php';
?>
            <!-- page title area start -->
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                            	<h4>Data Instruktur</h4>
                            	<button type="button" class="btn btn-dark btn-flat btn-lg mt-3" data-toggle="modal" data-target="#exampleModalCenter">Tambah<i class="fa fa-plus"></i></button>
                                <div class="modal fade" id="exampleModalCenter">
					                <div class="modal-dialog modal-dialog-centered" role="document">
					                    <div class="modal-content">
					                        <div class="modal-header">
					                            <h5 class="modal-title">Tambah Data</h5>
					                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
					                        </div>
					                        <div class="modal-body">
					                        	<form method="post" action="proses/data-instruktur" novalidate="novalidate" enctype="multipart/form-data" class="form-horizontal" id="validationform" data-parsley-validate="">
					                        		<?php
													    include '../koneksi.php';
													    $username = $_SESSION['username'];
													    $query = mysqli_query($koneksi, "SELECT * FROM user_instruktur WHERE username = '$username' ");
													    $data = mysqli_fetch_array($query);
													?>
													<input class="form-control" name="id_user" type="hidden" id="example-text-input" value="<?php echo $data['id_user']; ?>">
													<div class="form-group">
								                        <label for="example-text-input" class="col-form-label">Nama Lengkap</label>
								                        <input class="form-control" disabled="" type="text" id="example-text-input" required autofocus="" autocomplete="off" value="<?php echo $data['nama']; ?>">
								                    </div>
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Jabatan</label>
                                                        <select class="form-control" name="jabatan" required="">
                                                            <option value="">- Pilih Jabatan -</option>
                                                            <option value="Instruktur">Instruktur</option>
                                                            <option value="Asisten Instruktur">Asisten Instruktur</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Materi Diklat</label>
                                                        <select id="id_materi" name="id_materi" class="form-control" required="required">
                                                            <option>- Pilih Diklat-</option>
                                                                <?php
                                                                    include '../koneksi.php';
                                                                    $query = mysqli_query($koneksi, "SELECT * FROM materi ORDER BY materi ASC, angkatan ASC ");
                                                                    foreach ($query as $b)
                                                                    {
                                                                ?>
                                                            <option value="<?= $b['id_materi']; ?>"><?= $b['materi']; ?> Angkatan <?= $b['angkatan']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
								                    <div class="form-group">
								                        <label for="example-text-input" class="col-form-label">No. KTP</label>
								                        <input class="form-control" type="number" id="example-text-input" required autocomplete="off" name="no_ktp" data-parsley-length="[16,16]">
								                    </div>
								                    <div class="form-group">
								                        <label for="example-text-input" class="col-form-label">KTP</label>
								                        <input class="form-control" type="file" id="example-text-input" required autocomplete="off" name="file_ktp">
								                    </div>
								                    <div class="form-group">
								                        <label for="example-text-input" class="col-form-label">No. NPWP</label>
								                        <input class="form-control" type="text" id="example-text-input" required autocomplete="off" name="no_npwp">
								                    </div>
								                    <div class="form-group">
								                        <label for="example-text-input" class="col-form-label">NPWP</label>
								                        <input class="form-control" type="file" id="example-text-input" required autocomplete="off" name="file_npwp">
								                    </div>
								                    <div class="form-group">
								                        <label for="example-text-input" class="col-form-label">CV</label>
								                        <input class="form-control" type="file" id="example-text-input" required autocomplete="off" name="cv">
								                    </div>
								                    <div class="form-group">
								                        <label for="example-text-input" class="col-form-label">Alamat</label>
								                        <textarea class="form-control" name="alamat" style="height: 100%" required></textarea>
								                    </div>
								                    <div class="form-group">
								                        <label for="example-text-input" class="col-form-label">Portofolio (wajib)</label>
								                        <input class="form-control" type="url" id="example-text-input" required autocomplete="off" name="portofolio1">
								                    </div>
								                    <div class="form-group">
								                        <label for="example-text-input" class="col-form-label">Portofolio (opsional)</label>
								                        <input class="form-control" type="url" id="example-text-input" autocomplete="off" name="portofolio2">
								                    </div>
								                    <div class="form-group">
								                        <label for="example-text-input" class="col-form-label">Portofolio (opsional)</label>
								                        <input class="form-control" type="url" id="example-text-input" autocomplete="off" name="portofolio3">
								                    </div>
					                                <div class="modal-footer">
					                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					                                    <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin dengan Data tersebut?')">Simpan</button>
					                                </div>
					                            </form>
					                        </div>
					                    </div>
					                </div>
					            </div><br><br>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                            <thead class="bg-light text-capitalize">
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Materi Diklat</th>
                                                    <th scope="col">Jabatan</th>
                                                    <th scope="col">No. KTP</th>
                                                    <th scope="col">No. NPWP</th>
                                                    <th scope="col">File</th>
                                                    <th scope="col">Alamat</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; ?> 
                                                <?php
                                                    include '../koneksi.php';
                                                    $id_user = $_SESSION['id_user'];
                                                    $query = mysqli_query($koneksi, "SELECT * FROM user_instruktur join instruktur on instruktur.id_user = user_instruktur.id_user join materi on materi.id_materi = instruktur.id_materi WHERE username = '".$_SESSION['username']."'");
                                                    foreach ($query as $data) {
                                                ?>
                                                <tr>
                                                    
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td><?php echo $data['materi']; ?> Angkatan <?php echo $data['angkatan']; ?> <?php echo $data['tahun']; ?></td>
                                                    <td><?php echo $data['jabatan']; ?></td>
                                                    <td><?php echo $data['no_ktp']; ?></td>
                                                    <td><?php echo $data['no_npwp']; ?></td>
                                                    <td>
                                                    	<button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='file/<?php echo $data['file_ktp']; ?>'">FILE KTP
                                                    	</button>
                                                    	<button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='file/<?php echo $data['file_npwp']; ?>'">FILE NPWP
                                                    	</button>
                                                    	<button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='file/<?php echo $data['cv']; ?>'">FILE CV
                                                    	</button>
                                                    	<button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='https://<?php echo $data['portofolio1']; ?>'">Portofolio1
                                                        </button> 
                                                        <button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='https://<?php echo $data['portofolio2']; ?>'">Portofolio2
                                                        </button>
                                                        <button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='https://<?php echo $data['portofolio3']; ?>'">Portofolio3
                                                        </button>
                                                    </td>
                                                    <td><?php echo $data['alamat']; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='edit-data?id_instruktur=<?php echo $data['id_instruktur']; ?>'">Edit&nbsp;<i class="ti-pencil-alt"></i>
                                                    	</button>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php } ?>
                                            </tbody>
                                            
                                        </table>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Himbauan!</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Proses Seleksi akan dilaksanakan sampai maksimal h-7 hari sebelum pelaksanaan Pembukaan Diklat.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Oke, Paham!</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <?php include 'footer.php'; ?>