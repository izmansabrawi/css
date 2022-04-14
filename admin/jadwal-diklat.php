<?php include 'header.php'; ?>
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Jadwal Diklat</h4>
                                <button type="button" class="btn btn-dark btn-flat btn-lg mt-3" data-toggle="modal" data-target="#exampleModalCenter">Tambah<i class="fa fa-plus"></i></button>&nbsp;&nbsp;
                                <a target="_blank" href="print/jadwal">
                                    <button type="button" class="btn btn-info btn-flat btn-lg mt-3">Print&nbsp;<i class="fa fa-print"></i>
                                    </button>
                                </a>
                                <div class="modal fade" id="exampleModalCenter">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Tambah Materi Diklat</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="post" action="proses/materi" novalidate="novalidate" enctype="multipart/form-data" class="form-horizontal" id="validationform" data-parsley-validate="">
                                                                        <div class="form-group">
                                                                            <label for="example-text-input" class="col-form-label">Materi Diklat</label>
                                                                            <input class="form-control" name="materi" type="text" id="example-text-input" required autofocus="" autocomplete="off">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-form-label" for="jpl">JPL</label>
                                                                            <input type="number" id="jpl" name="jpl" class="form-control" required="" autocomplete="off">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Angkatan</label>
                                                                            <input id="" name="angkatan" type="number" required="" class="form-control" autocomplete="off">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Tanggal Pembukaan</label>
                                                                            <div class="col-sm-6">
                                                                            <select name="tgl_pembukaan" class="form-control" required="">
                                                                                <option value="">Filter Tanggal</option>
                                                                                <?php for ($i = 1; $i <= 31; $i++) { ?>
                                                                                <option value="<?= $i ?>"><?= $i ?></option>
                                                                                <?php } ?>
                                                                            </select><br>
                                                                            <select name="bulan_pembukaan" class="form-control" required="">
                                                                                <option value="">Filter Bulan</option>
                                                                                <option value="01">Januari</option>
                                                                                <option value="02">Februari</option>
                                                                                <option value="03">Maret</option>
                                                                                <option value="04">April</option>
                                                                                <option value="05">Mei</option>
                                                                                <option value="06">Juni</option>
                                                                                <option value="07">Juli</option>
                                                                                <option value="08">Agustus</option>
                                                                                <option value="09">September</option>
                                                                                <option value="10">Oktober</option>
                                                                                <option value="11">November</option>
                                                                                <option value="12">Desember</option>
                                                                            </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Tanggal Penutupan</label>
                                                                            <div class="col-sm-6">
                                                                            <select name="tgl_penutupan" class="form-control" required="">
                                                                                <option value="">Filter Tanggal</option>
                                                                                <?php for ($i = 1; $i <= 31; $i++) { ?>
                                                                                <option value="<?= $i ?>"><?= $i ?></option>
                                                                                <?php } ?>
                                                                            </select><br>
                                                                            <select name="bulan_penutupan" class="form-control" required="">
                                                                                <option value="">Filter Bulan</option>
                                                                                <option value="01">Januari</option>
                                                                                <option value="02">Februari</option>
                                                                                <option value="03">Maret</option>
                                                                                <option value="04">April</option>
                                                                                <option value="05">Mei</option>
                                                                                <option value="06">Juni</option>
                                                                                <option value="07">Juli</option>
                                                                                <option value="08">Agustus</option>
                                                                                <option value="09">September</option>
                                                                                <option value="10">Oktober</option>
                                                                                <option value="11">November</option>
                                                                                <option value="12">Desember</option>
                                                                            </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Tahun Diklat</label>
                                                                            <select name="tahun" class="form-control" required="">
                                                                                <option value="">Filter Tahun</option>
                                                                                <?php for ($i = date('Y'); $i <= date('Y') + 10; $i++) { ?>
                                                                                <option value="<?= $i ?>"><?= $i ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Jumlah Peserta</label>
                                                                            <input id="" name="jumlah" type="number" required="" class="form-control" autocomplete="off">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="example-text-input" class="col-form-label">Status / Keterangan</label>
                                                                            <select name="status" class="form-control" required>
                                                                                <option value="Pendaftaran">Pendaftaran</option>
                                                                                <option value="Selesai">Selesai</option>
                                                                            </select>
                                                                        </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                    <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin dengan Data tersebut?')">Simpan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                <br><br>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th>No.</th>
                                                <th>Materi</th>
                                                <th>JPL</th>
                                                <th>Angkatan</th>
                                                <th>Jadwal</th>
                                                <th>Jumlah Peserta</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; ?> 
                                            <?php 
                                                
                                                include '../koneksi.php';
                                                $query = mysqli_query($koneksi, "SELECT * FROM materi where status = 'Pendaftaran' ORDER BY bulan_pembukaan asc ;");
                                                // SELECT *
                                                // FROM products
                                                // WHERE product_id <> 7
                                                // ORDER BY category_id DESC, product_name ASC;
                                                foreach ($query as $data) 
                                                {

                                                    $month = [
                                                        '01' => 'Januari',
                                                        '02' => 'Februari',
                                                        '03' => 'Maret',
                                                        '04' => 'April',
                                                        '05' => 'Mei',
                                                        '06' => 'Juni',
                                                        '07' => 'Juli',
                                                        '08' => 'Agustus',
                                                        '09' => 'September',
                                                        '10' => 'Oktober',
                                                        '11' => 'November',
                                                        '12' => 'Desember',
                                                    ];
                                            ?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></th>
                                                <td><?php echo $data['materi']; ?></td>
                                                <td><?php echo $data['jpl']; ?></td>
                                                <td><?php echo $data['angkatan']; ?></td>
                                                <td><?= $data['tgl_pembukaan'] ?> <?= $month[$data['bulan_pembukaan']] ?> s.d. <?= $data['tgl_penutupan'] ?> <?= $month[$data['bulan_penutupan']] ?> <?php echo $data['tahun']; ?></td>
                                                <td><?php echo $data['jumlah']; ?> Orang</td>
                                                <td><span class="status-p bg-primary"><?php echo $data['status']; ?></span></td>
                                                <td>
                                                    <button type="button" onclick="window.location.href='edit-jadwal?id_materi=<?php echo $data['id_materi']; ?>'" class="btn btn-dark mb-3"><i class="fa fa-edit"></i></button>
                                                    <button type="button" onclick="window.location.href='hapus/jadwal?id_materi=<?php echo $data['id_materi']; ?>'" class="btn btn-danger mb-3"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php include 'footer.php'; ?>