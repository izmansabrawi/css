<?php
	include '../../koneksi.php';
	$id = $_GET['id_admin'];
	$query = mysqli_query($koneksi, "DELETE FROM admin WHERE id_admin  = '$id' ");

	if ($query) 
		{
			echo "
		      <script>
		        alert('Berhasil Dihapus');
		        document.location.href ='../data-admin';
		      </script>
		      ";
				}
			else
			{
				echo "
			      <script>
			        alert('Gagal Dihapus');
			        document.location.href ='../data-admin';
			      </script>
			      ";
			}
?>