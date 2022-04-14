<?php
	include '../../koneksi.php';
	$id = $_GET['id_berkas'];
	$query = mysqli_query($koneksi, "DELETE FROM berkas WHERE id_berkas  = '$id' ");

	if ($query) 
		{
			echo "
		      <script>
		        alert('Berhasil Dihapus');
		        document.location.href ='../berkas-persyaratan';
		      </script>
		      ";
				}
			else
			{
				echo "
			      <script>
			        alert('Gagal Dihapus');
			        document.location.href ='../berkas-persyaratan';
			      </script>
			      ";
			}
?>