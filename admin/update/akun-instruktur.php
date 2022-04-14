<?php
include '../../koneksi.php';

$id_user = addslashes($_POST['id_user']);
$nama = addslashes($_POST['nama']);
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);

$query = mysqli_query($koneksi, "UPDATE user_instruktur SET nama='$nama', username='$username', password='$password' WHERE id_user='$id_user' ");

	if ($query) 
		{
			$_SESSION['id_user'] = $query['id_user'];
			echo "
            <script>
                alert('Data Akun Instruktur Berhasil di Edit');
                document.location.href ='../akun-instruktur';
            </script>
            ";
		}
			else 
			{
		        echo "
		        <script>
		        	alert('Data Akun Instruktur Gagal di Edit !');
		        	document.location.href ='../akun-instruktur';
		        </script>";
		    }
?>