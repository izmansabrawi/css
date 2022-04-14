<?php
	include '../../koneksi.php';
	$id = $_GET['id_daftar'];
	$query = mysqli_query($koneksi, "DELETE FROM pendaftaran WHERE id_daftar  = '$id' ");

	if ($query) 
		{
			echo "
		      <script>
		        alert('Berhasil Dihapus');
		        document.location.href ='../data-user';
		      </script>
		      ";
				}
			else
			{
				echo "
			      <script>
			        alert('Gagal Dihapus');
			        document.location.href ='../data-user';
			      </script>
			      ";
			}
?>