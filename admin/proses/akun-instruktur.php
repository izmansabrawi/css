<?php
session_start();
include '../../koneksi.php';

$nama = addslashes($_POST['nama']);
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);

$query = mysqli_query($koneksi, "INSERT INTO user_instruktur VALUES('', '$nama', '$username', '$password', 'Instruktur')");

	if ($query) 
		{
			$_SESSION['id_user'] = $query['id_user'];
			echo "
            <script>
                alert('Data Akun Instruktur Berhasil di Simpan');
                document.location.href ='../akun-instruktur';
            </script>
            ";
		}
			else 
			{
		        echo "
		        <script>
		        	alert('Data Instruktur Gagal di Simpan !');
		        	document.location.href ='../akun-instruktur';
		        </script>";
		    }
?>