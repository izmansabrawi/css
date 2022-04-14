<?php
session_start();
include '../../koneksi.php';

$nama = addslashes($_POST['nama']);
$nik = addslashes($_POST['nik']);
$username = addslashes($_POST['username']);
$password = md5($_POST['password']);
$email = addslashes($_POST['email']);
$tempat = addslashes($_POST['tempat']);
$tanggal = addslashes($_POST['tanggal']);
$jk = addslashes($_POST['jk']);
$agama = addslashes($_POST['agama']);
$pendidikan = addslashes($_POST['pendidikan']);
$alamat = addslashes($_POST['alamat']);
$provinsi = addslashes($_POST['provinsi']);
$kota = addslashes($_POST['kota']);
$kecamatan = addslashes($_POST['kecamatan']);
$desa = addslashes($_POST['desa']);
$no = addslashes($_POST['no']);
$status = addslashes($_POST['status']);
$ktp = addslashes($_FILES['ktp']['name']);
$link1 = addslashes($_POST['link1']);
$link2 = addslashes($_POST['link2']);
$link3 = addslashes($_POST['link3']);
$link4 = addslashes($_POST['link4']);
$foto = addslashes($_FILES['foto']['name']);

// move_uploaded_file($_FILES['ktp']['tmp_name'], "../file/".$_FILES['ktp']['name']);
// move_uploaded_file($_FILES['foto']['tmp_name'], "../foto/".$_FILES['foto']['name']);

$temp = explode(".", $_FILES["ktp"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["ktp"]["tmp_name"], "../file/" . $newfilename);

$temp = explode(".", $_FILES["foto"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["foto"]["tmp_name"], "../foto/" . $newfilename);

		$result = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE username = '$username'");
			if(mysqli_fetch_assoc($result)){
				echo "
				<script>
					alert('Username Sudah Terdaftar di Sistem');
					document.location.href ='../register';
				</script>
				";
			return false;
		}

		$result = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE email = '$email'");
			if(mysqli_fetch_assoc($result)){
				echo "
				<script>
					alert('Email Sudah Terdaftar di Sistem');
					document.location.href ='../register';
				</script>
				";
			return false;
		}

		$result = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE nik = '$nik'");
			if(mysqli_fetch_assoc($result)){
				echo "
				<script>
					alert('NIK Sudah Terdaftar di Sistem');
					document.location.href ='../register';
				</script>
				";
			return false;
		}

$query = mysqli_query($koneksi, "INSERT INTO pendaftaran VALUES('', '$nama', '$nik', '$username', '$password', '$email', '$tempat', '$tanggal', '$jk', '$agama', '$pendidikan', '$alamat', '$provinsi', '$kota', '$kecamatan', '$desa', '$no', '$status', '$ktp', '$link1', '$link2', '$link3', '$link4', '$foto')");

	if ($query) 
		{
			$_SESSION['id_daftar'] = $query['id_daftar'];
			echo "
            <script>
                alert('Data Berhasil di Simpan');
                document.location.href ='../';
            </script>
            ";
		}
			else 
			{
		        echo "
		        <script>
		        	alert('Data Gagal di Simpan !');
		        	document.location.href ='../register';
		        </script>";
		    }
?>