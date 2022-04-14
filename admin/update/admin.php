<?php
include '../../koneksi.php';

$id_admin = addslashes($_POST['id_admin']);
$filename = addslashes($_FILES['foto']['name']);
$nama = addslashes($_POST['nama']);
$jabatan = addslashes($_POST['jabatan']);
$alamat = addslashes($_POST['alamat']);
$email = addslashes($_POST['email']);
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);
$level = addslashes($_POST['level']);

$temp = explode(".", $_FILES["foto"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["foto"]["tmp_name"], "../images/" . $newfilename);

if(empty($filename))   //jika gambar kosong atau tidak di ganti
{
	$query = mysqli_query($koneksi, "UPDATE admin SET nama='$nama', jabatan='$jabatan', alamat='$alamat', email='$email', username='$username', password='$password', level='$level' WHERE id_admin='$id_admin' ");
    echo "
            <script>
                alert('Data Berhasil Diupdate');
                document.location.href ='../profile';
            </script>
            ";
}
elseif (!empty($filename)) // jika gambar di ganti
{
    $query = mysqli_query($koneksi, "UPDATE admin SET foto='$newfilename', nama='$nama', jabatan='$jabatan', alamat='$alamat', email='$email', username='$username', password='$password', level='$level' WHERE id_admin='$id_admin' ");
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
		        	alert('Data Gagal Diupdate !!!');
		        	document.location.href ='../profile';
		        </script>";
		    }
// $query = mysqli_query($koneksi, "UPDATE admin SET nama='$nama', jabatan='$jabatan', alamat='$alamat', email='$email', username='$username', password='$password', level='$level' WHERE id_admin='$id_admin' ");

// 	if ($query) {
// 		$_SESSION['id_admin'] = $query['id_admin'];
// 			echo "
//             <script>
//                 alert('Data Berhasil Diupdate');
//                 document.location.href ='../profile';
//             </script>
//             ";
// 		}
// 			else 
// 			{
// 		        echo "
// 		        <script>
// 		        	alert('Data Gagal Diupdate !!!');
// 		        	document.location.href ='../profile';
// 		        </script>";
// 		    }
?>