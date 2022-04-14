<?php
session_start();
include '../../koneksi.php';

$judul = addslashes($_POST['judul']);
$berkas = addslashes($_FILES['berkas']['name']);
$ket = addslashes($_POST['ket']);

$temp = explode(".", $_FILES["berkas"]["name"]);
$berkas = 'BerkasPersyaratan_'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["berkas"]["tmp_name"], "../file/" . $berkas);

$query = mysqli_query($koneksi, "INSERT INTO berkas VALUES(NULL, '', '$judul', '$berkas', '$ket')");

	if ($query) 
		{
			$_SESSION['id_berkas'] = $query['id_berkas'];
			echo "
            <script>
                alert('Data Berkas Berhasil di Simpan');
                document.location.href ='../berkas-persyaratan';
            </script>
            ";
		}
			else 
			{
		        echo "
		        <script>
		        	alert('Data Berkas di Simpan !');
		        	document.location.href ='../berkas-persyaratan';
		        </script>";
		    }
?>