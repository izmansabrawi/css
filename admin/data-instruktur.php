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
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                            <thead class="bg-light text-capitalize">
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama</th>
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
                                                    $query = mysqli_query($koneksi, "SELECT * FROM user_instruktur join instruktur on instruktur.id_user = user_instruktur.id_user");
                                                    foreach ($query as $data) {
                                                ?>
                                                <tr>
                                                    
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td><?php echo $data['nama']; ?></td>
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
                                                        <button type="button" class="btn btn-dark btn-xs mb-3" onclick="window.location.href='hapus/instruktur?id_instruktur=<?php echo $data['id_instruktur']; ?>'">Edit&nbsp;<i class="ti-pencil-alt"></i>
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