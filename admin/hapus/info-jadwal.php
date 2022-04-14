<?php
	include '../../koneksi.php';
	$id = $_GET['id_info'];
	$query = mysqli_query($koneksi, "DELETE FROM info_jadwal WHERE id_info  = '$id' ");

	if ($query) 
		{
			echo "
		      <script>
		        alert('Berhasil Dihapus');
		        document.location.href ='../info-jadwal';
		      </script>
		      ";
				}
			else
			{
				echo "
			      <script>
			        alert('Gagal Dihapus');
			        document.location.href ='../info-jadwal';
			      </script>
			      ";
			}
?>