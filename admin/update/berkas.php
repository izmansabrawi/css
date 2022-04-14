<?php
include '../../koneksi.php';

$id_berkas = addslashes($_POST['id_berkas']);
$judul = addslashes($_POST['judul']);
$filename = addslashes($_FILES['berkas']['name']);
$ket = addslashes($_POST['ket']);

$temp = explode(".", $_FILES["berkas"]["name"]);
$newfilename = 'BerkasPersyaratan_'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["berkas"]["tmp_name"], "../file/" . $newfilename);

// $move=move_uploaded_file($_FILES['berkas']['tmp_name'],'../file/'.$filename);

if(empty($filename))   //jika gambar kosong atau tidak di ganti
{
	$query = mysqli_query($koneksi, "UPDATE berkas SET judul='$judul', ket='$ket' WHERE id_berkas='$id_berkas' ");
    echo "
            <script>
                alert('Data Berhasil Diupdate');
                document.location.href ='../berkas-persyaratan';
            </script>
            ";
}
elseif (!empty($filename)) // jika gambar di ganti
{
    $query = mysqli_query($koneksi, "UPDATE berkas SET judul='$judul', berkas='$newfilename', ket='$ket' WHERE id_berkas='$id_berkas' ");
	echo "
            <script>
                alert('Data Berhasil Diupdate');
                document.location.href ='../berkas-persyaratan';
            </script>
            ";
}
else 
			{
		        echo "
		        <script>
		        	alert('Data Gagal Diupdate !');
		        	document.location.href ='../berkas-persyaratan';
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