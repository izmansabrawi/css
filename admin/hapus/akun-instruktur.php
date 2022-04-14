<?php
	include '../../koneksi.php';
	$id = $_GET['id_user'];
	$query = mysqli_query($koneksi, "DELETE FROM user_instruktur WHERE id_user  = '$id' ");

	if ($query) 
		{
			echo "
		      <script>
		        alert('Berhasil Dihapus');
		        document.location.href ='../akun-instruktur';
		      </script>
		      ";
				}
			else
			{
				echo "
			      <script>
			        alert('Gagal Dihapus');
			        document.location.href ='../akun-instruktur';
			      </script>
			      ";
			}
?>