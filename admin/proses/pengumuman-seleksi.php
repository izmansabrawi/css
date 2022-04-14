<?php
session_start();
include '../../koneksi.php';

$materi = addslashes($_POST['materi']);
$gambar = addslashes($_FILES['gambar']['name']);
$file = addslashes($_FILES['file']['name']);
$keterangan = addslashes($_POST['keterangan']);

$temp = explode(".", $_FILES["gambar"]["name"]);
$gambar = 'GambarDepan_'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["gambar"]["tmp_name"], "../images/" . $gambar);

$temp = explode(".", $_FILES["file"]["name"]);
$file = 'FilePengumuman_'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["file"]["tmp_name"], "../file/" . $file);

$query = mysqli_query($koneksi, "INSERT INTO pengumuman VALUES(NULL, '', '$materi', '$gambar', '$file', '$keterangan')");

	if ($query) 
		{
			$_SESSION['id_pengumuman'] = $query['id_pengumuman'];
			echo "
            <script>
                alert('Data Berhasil di Simpan');
                document.location.href ='../pengumuman-seleksi';
            </script>
            ";
		}
			else 
			{
		        echo "
		        <script>
		        	alert('Data Gagal di Simpan !');
		        	document.location.href ='../pengumuman-seleksi';
		        </script>";
		    }
?>