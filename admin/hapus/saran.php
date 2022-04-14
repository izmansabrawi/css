<?php
	include '../../koneksi.php';
	$id = $_GET['id_saran'];
	$query = mysqli_query($koneksi, "DELETE FROM saran WHERE id_saran  = '$id' ");

	if ($query) 
		{
			echo "
		      <script>
		        alert('Berhasil Dihapus');
		        document.location.href ='../saran';
		      </script>
		      ";
				}
			else
			{
				echo "
			      <script>
			        alert('Gagal Dihapus');
			        document.location.href ='../saran';
			      </script>
			      ";
			}
?>