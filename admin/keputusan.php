<?php 
error_reporting();
include 'header.php'; 
?>
<div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Tentukan</h4>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php 
                                                include '../koneksi.php';
                                                $id_formulir = $_GET['id_formulir'];
                                                $query = mysqli_query($koneksi, "SELECT * FROM formulir where id_formulir = '$id_formulir' ");
                                                foreach ($query as $data) 
                                            ?>
                                            <tr>
                                            	<form action="proses/lulus" method="post">
                                            		<input type="hidden" name="id_formulir" value="<?php echo $data['id_formulir']; ?>">
                                            		<input type="hidden" name="proses" value="<?php echo $data['proses']; ?>">
                                                	<button type="submit" onclick="window.location.href='proses/lulus?id_formulir=<?php echo $data['id_formulir']; ?>'" class="btn btn-info mb-3">DITERIMA</button> &nbsp;
                                                </form>
                                                <form action="proses/cadangan" method="post">
                                                    <input type="hidden" name="id_formulir" value="<?php echo $data['id_formulir']; ?>">
                                                    <input type="hidden" name="proses" value="<?php echo $data['proses']; ?>">
                                                    <button type="submit" onclick="window.location.href='proses/cadangan?id_formulir=<?php echo $data['id_formulir']; ?>'" class="btn btn-success mb-3">CADANGAN</button>
                                                </form>&nbsp;
                                                <form action="proses/tidak-lulus" method="post">
                                                	<input type="hidden" name="id_formulir" value="<?php echo $data['id_formulir']; ?>">
                                                	<input type="hidden" name="proses" value="<?php echo $data['proses']; ?>">
                                                	<button type="submit" onclick="window.location.href='proses/tidak-lulus?id_formulir=<?php echo $data['id_formulir']; ?>'" class="btn btn-danger mb-3">TIDAK DITERIMA</button>
                                                </form>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br><br><br><br><br><br><br><br>
<?php include 'footer.php'; ?>