<?php
include '../../koneksi.php';

$id_admin = addslashes($_POST['id_admin']);
$foto = addslashes($_FILES['foto']['name']);

$temp = explode(".", $_FILES["foto"]["name"]);
$newfilename = 'FotoAdmin'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["foto"]["tmp_name"], "../images/" . $newfilename);

$query = mysqli_query($koneksi, "UPDATE admin SET foto='$newfilename' WHERE id_admin='$id_admin' ");

	if ($query) {
		$_SESSION['id_admin'] = $query['id_admin'];
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
		        	alert('Data Gagal Diupdate !!!');
		        	document.location.href ='../profile';
		        </script>";
		    }
?>