<?php
include '../../koneksi.php';

$id_info = addslashes($_POST['id_info']);
$judul_info = addslashes($_POST['judul_info']);
$filename = addslashes($_FILES['file_info']['name']);
$ket_info = addslashes($_POST['ket_info']);

$temp = explode(".", $_FILES["file_info"]["name"]);
$newfilename = 'InformasiJadwalDiklat_'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["file_info"]["tmp_name"], "../file/" . $newfilename);

// $move=move_uploaded_file($_FILES['berkas']['tmp_name'],'../file/'.$filename);

if(empty($filename))   //jika gambar kosong atau tidak di ganti
{
	$query = mysqli_query($koneksi, "UPDATE info_jadwal SET judul_info='$judul_info', ket_info='$ket_info' WHERE id_info='$id_info' ");
    echo "
            <script>
                alert('Data Berhasil Diupdate');
                document.location.href ='../info-jadwal';
            </script>
            ";
}
elseif (!empty($filename)) // jika gambar di ganti
{
    $query = mysqli_query($koneksi, "UPDATE info_jadwal SET judul_info='$judul_info', file_info='$newfilename', ket_info='$ket_info' WHERE id_info='$id_info' ");
	echo "
            <script>
                alert('Data Berhasil Diupdate');
                document.location.href ='../info-jadwal';
            </script>
            ";
}
else 
			{
		        echo "
		        <script>
		        	alert('Data Gagal Diupdate !');
		        	document.location.href ='../info-jadwal';
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