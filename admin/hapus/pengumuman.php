<?php
	include '../../koneksi.php';
	$id = $_GET['id_pengumuman'];
	$query = mysqli_query($koneksi, "DELETE FROM pengumuman WHERE id_pengumuman  = '$id' ");

	if ($query) 
		{
			echo "
		      <script>
		        alert('Berhasil Dihapus');
		        document.location.href ='../pengumuman-seleksi';
		      </script>
		      ";
				}
			else
			{
				echo "
			      <script>
			        alert('Gagal Dihapus');
			        document.location.href ='../pengumuman-seleksi';
			      </script>
			      ";
			}
?>