<?php
	include '../../koneksi.php';
	$id = $_GET['id_materi'];
	$query = mysqli_query($koneksi, "DELETE FROM materi WHERE id_materi  = '$id' ");

	if ($query) 
		{
			echo "
		      <script>
		        alert('Berhasil Dihapus');
		        document.location.href ='../jadwal-diklat';
		      </script>
		      ";
				}
			else
			{
				echo "
			      <script>
			        alert('Gagal Dihapus');
			        document.location.href ='../jadwal-diklat';
			      </script>
			      ";
			}
?>