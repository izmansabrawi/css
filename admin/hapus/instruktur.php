<?php
	include '../../koneksi.php';
	$id = $_GET['id_instruktur'];
	$query = mysqli_query($koneksi, "DELETE FROM instruktur WHERE id_instruktur  = '$id' ");

	if ($query) 
		{
			echo "
		      <script>
		        alert('Berhasil Dihapus');
		        document.location.href ='../data-instruktur';
		      </script>
		      ";
				}
			else
			{
				echo "
			      <script>
			        alert('Gagal Dihapus');
			        document.location.href ='../data-instruktur';
			      </script>
			      ";
			}
?>