<?php
session_start();
include '../../koneksi.php';

$nama_depan = htmlspecialchars($_POST['nama_depan']);
$nama_belakang = htmlspecialchars($_POST['nama_belakang']);
$email = htmlspecialchars($_POST['email']);
$nohp = htmlspecialchars($_POST['nohp']);
$isi = htmlspecialchars($_POST['isi']);

$query = mysqli_query($koneksi, "INSERT INTO saran VALUES(NULL, '', '$nama_depan', '$nama_belakang', '$email', '$nohp', '$isi')");

	if ($query) 
		{
			$_SESSION['id_saran'] = $query['id_saran'];
			echo "
            <script>
                alert('Terima Kasih atas Saran / Pertanyaan Anda');
                document.location.href ='../../home';
            </script>
            ";
		}
			else 
			{
		        echo "
		        <script>
		        	alert('Saran / Pertanyaan Anda Gagal di Simpan. Silahkan coba lagi !');
		        	document.location.href ='../../home';
		        </script>";
		    }
?>