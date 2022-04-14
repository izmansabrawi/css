<?php
session_start();
include '../../koneksi.php';

$id_user = addslashes($_POST['id_user']);
$id_materi = addslashes($_POST['id_materi']);
$jabatan = addslashes($_POST['jabatan']);
$no_ktp = addslashes($_POST['no_ktp']);
$file_ktp = addslashes($_FILES['file_ktp']['name']);
$no_npwp = addslashes($_POST['no_npwp']);
$file_npwp = addslashes($_FILES['file_npwp']['name']);
$cv = addslashes($_FILES['cv']['name']);
$alamat = addslashes($_POST['alamat']);
$portofolio1 = addslashes($_POST['portofolio1']);
$portofolio2 = addslashes($_POST['portofolio2']);
$portofolio3 = addslashes($_POST['portofolio3']);

$temp = explode(".", $_FILES["file_ktp"]["name"]);
$file_ktp = 'KTP_'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["file_ktp"]["tmp_name"], "../file/" . $file_ktp);

$temp = explode(".", $_FILES["file_npwp"]["name"]);
$file_npwp = 'NPWP_'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["file_npwp"]["tmp_name"], "../file/" . $file_npwp);

$temp = explode(".", $_FILES["cv"]["name"]);
$cv = 'CV_'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["cv"]["tmp_name"], "../file/" . $cv);

$query = mysqli_query($koneksi, "INSERT INTO instruktur VALUES('', '$id_user', '$id_materi', '$jabatan', '$no_ktp', '$file_ktp', '$no_npwp', '$file_npwp', '$cv', '$alamat', '$portofolio1', NULL, NULL)");

	if ($query) 
		{
			$_SESSION['id_instruktur'] = $query['id_instruktur'];
			echo "
            <script>
                alert('Data Anda Berhasil di Simpan');
                document.location.href ='../berkas';
            </script>
            ";
		}
			else 
			{
		        echo "
		        <script>
		        	alert('Data Anda Gagal di Simpan !');
		        	document.location.href ='../berkas';
		        </script>";
		    }
?>