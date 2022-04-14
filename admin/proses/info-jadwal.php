<?php
session_start();
include '../../koneksi.php';

$judul_info = addslashes($_POST['judul_info']);
$file_info = addslashes($_FILES['file_info']['name']);
$ket_info = addslashes($_POST['ket_info']);

$temp = explode(".", $_FILES["file_info"]["name"]);
$file_info = 'InformasiJadwalDiklat_'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["file_info"]["tmp_name"], "../file/" . $file_info);

$query = mysqli_query($koneksi, "INSERT INTO info_jadwal VALUES(NULL, '', '$judul_info', '$file_info', '$ket_info')");

	if ($query) 
		{
			$_SESSION['id_info'] = $query['id_info'];
			echo "
            <script>
                alert('Data Berhasil di Simpan');
                document.location.href ='../info-jadwal';
            </script>
            ";
		}
			else 
			{
		        echo "
		        <script>
		        	alert('Data Gagal di Simpan !');
		        	document.location.href ='../info-jadwal';
		        </script>";
		    }
?>