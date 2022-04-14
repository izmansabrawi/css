<?php
session_start();
include '../../koneksi.php';

$foto = addslashes($_FILES['foto']['name']);
$nama = addslashes($_POST['nama']);
$jabatan = addslashes($_POST['jabatan']);
$alamat = addslashes($_POST['alamat']);
$email = addslashes($_POST['email']);
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);
$level = addslashes($_POST['level']);

$temp = explode(".", $_FILES["foto"]["name"]);
$foto = 'FotoAdmin_'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["foto"]["tmp_name"], "../images/" . $foto);

		$result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username'");
			if(mysqli_fetch_assoc($result)){
				echo "
				<script>
					alert('Username Sudah Terdaftar di Sistem');
					document.location.href ='../tambah-admin';
				</script>
				";
			return false;
		}

		$result = mysqli_query($koneksi, "SELECT * FROM admin WHERE email = '$email'");
			if(mysqli_fetch_assoc($result)){
				echo "
				<script>
					alert('Email Sudah Terdaftar di Sistem');
					document.location.href ='../tambah-admin';
				</script>
				";
			return false;
		}

$query = mysqli_query($koneksi, "INSERT INTO admin VALUES('', '$foto', '$nama', '$jabatan', '$alamat', '$email', '$username', '$password', 'Admin')");

	if ($query) 
		{
			$_SESSION['id_admin'] = $query['id_admin'];
			echo "
            <script>
                alert('Data Admin Berhasil di Simpan');
                document.location.href ='../data-admin';
            </script>
            ";
		}
			else 
			{
		        echo "
		        <script>
		        	alert('Data Gagal di Simpan !');
		        	document.location.href ='../tambah-admin';
		        </script>";
		    }
?>