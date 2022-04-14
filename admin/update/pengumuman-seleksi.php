<?php
include '../../koneksi.php';

$id_pengumuman = addslashes($_POST['id_pengumuman']);
$materi = addslashes($_POST['materi']);
$filename = addslashes($_FILES['gambar']['name']);
$filename1 = addslashes($_FILES['file']['name']);
$keterangan = addslashes($_POST['keterangan']);

$temp = explode(".", $_FILES["gambar"]["name"]);
$newfilename = 'GambarPengumuman_'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["gambar"]["tmp_name"], "../images/" . $newfilename);

$temp = explode(".", $_FILES["file"]["name"]);
$newfilename1 = 'FilePengumuman_'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["file"]["tmp_name"], "../file/" . $newfilename1);

// $move=move_uploaded_file($_FILES['berkas']['tmp_name'],'../file/'.$filename);

if(empty($filename) OR ($filename1))   //jika gambar kosong atau tidak di ganti
{
	$query = mysqli_query($koneksi, "UPDATE pengumuman SET materi='$materi', keterangan='$keterangan' WHERE id_pengumuman='$id_pengumuman' ");
    echo "
            <script>
                alert('Data Berhasil Diupdate');
                document.location.href ='../pengumuman-seleksi';
            </script>
            ";
}
elseif (!empty($filename) OR ($filename1)) // jika gambar di ganti
{
    $query = mysqli_query($koneksi, "UPDATE pengumuman SET materi='$materi', filename='$newfilename', filename1='$newfilename1', keterangan='$keterangan' WHERE id_pengumuman='$id_pengumuman' ");
	echo "
            <script>
                alert('Data Berhasil Diupdate');
                document.location.href ='../pengumuman-seleksi';
            </script>
            ";
}
else 
			{
		        echo "
		        <script>
		        	alert('Data Gagal Diupdate !');
		        	document.location.href ='../pengumuman-seleksi';
		        </script>";
		    }

// $query = mysqli_query($koneksi, "UPDATE berkas SET judul='$judul', berkas='$newfilename', ket='$ket' WHERE id_berkas='$id_berkas' ");

// 	if ($query) {
// 		$_SESSION['id_berkas'] = $query['id_berkas'];
// 			echo "
//             <script>
//                 alert('Data Berhasil Diupdate');
//                 document.location.href ='../berkas-persyaratan';
//             </script>
//             ";
// 		}
// 			else 
// 			{
// 		        echo "
// 		        <script>
// 		        	alert('Data Gagal Diupdate !');
// 		        	document.location.href ='../berkas-persyaratan';
// 		        </script>";
// 		    }
?>