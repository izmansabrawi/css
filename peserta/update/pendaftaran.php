<?php
session_start();
include '../../koneksi.php';

$id_daftar = addslashes($_POST['id_daftar']);
$nama = addslashes($_POST['nama']);
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);
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
$status = addslashes($_POST['status']);
$filename = addslashes($_FILES['foto']['name']);

$temp = explode(".", $_FILES["foto"]["name"]);
$newfilename = 'FotoPeserta'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["foto"]["tmp_name"], "../foto/" . $newfilename);

if(empty($filename)) //jika gambar kosong atau tidak di ganti
{
	$query = mysqli_query($koneksi, "UPDATE pendaftaran SET id_daftar='$id_daftar', nama='$nama', username='$username', password='$password', email='$email', tempat='$tempat', tanggal='$tanggal', jk='$jk', agama='$agama', pendidikan='$pendidikan', alamat='$alamat', provinsi='$provinsi', kota='$kota', kecamatan='$kecamatan', desa='$desa', status='$status' WHERE id_daftar='$id_daftar' ");
    echo "
            <script>
                alert('Data Berhasil Diupdate');
                document.location.href ='../pendaftaran';
            </script>
            ";
}

elseif (!empty($filename)) // jika gambar di ganti
{
    $query = mysqli_query($koneksi, "UPDATE pendaftaran SET id_daftar='$id_daftar', nama='$nama', username='$username', password='$password', email='$email', tempat='$tempat', tanggal='$tanggal', jk='$jk', agama='$agama', pendidikan='$pendidikan', alamat='$alamat', provinsi='$provinsi', kota='$kota', kecamatan='$kecamatan', desa='$desa', status='$status', foto='$foto' WHERE id_daftar='$id_daftar' ");
	echo "
            <script>
                alert('Data Berhasil Diupdate');
                document.location.href ='../profile';
            </script>
            ";
}
else 
			{
		        echo "
		        <script>
		        	alert('Data Gagal Diupdate !');
		        	document.location.href ='../profile';
		        </script>";
		    }
?>