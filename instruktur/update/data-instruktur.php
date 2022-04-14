<?php
session_start();
include '../../koneksi.php';

$id_instruktur = addslashes($_POST['id_instruktur']);
$id_user = addslashes($_POST['id_user']);
$id_materi = addslashes($_POST['id_materi']);
$jabatan = addslashes($_POST['jabatan']);
$no_ktp = addslashes($_POST['no_ktp']);
$filename1 = addslashes($_FILES['file_ktp']['name']);
$no_npwp = addslashes($_POST['no_npwp']);
$filename2 = addslashes($_FILES['file_npwp']['name']);
$filename3 = addslashes($_FILES['cv']['name']);
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

if(empty($filename1) OR ($filename2) OR ($filename3)) //jika gambar kosong atau tidak di ganti
{
	$query = mysqli_query($koneksi, "UPDATE instruktur SET id_user='$id_user', id_materi='$id_materi', jabatan='$jabatan', no_ktp='$no_ktp', no_npwp='$no_npwp', alamat='$alamat', portofolio1='$portofolio1', portofolio2='$portofolio2', portofolio3='$portofolio3' WHERE id_instruktur='$id_instruktur' ");
    echo "
            <script>
                alert('Data Berhasil Diupdate');
                document.location.href ='../berkas';
            </script>
            ";
}

elseif (!empty($filename1) OR ($filename2) OR ($filename3)) // jika gambar di ganti
{
    $query = mysqli_query($koneksi, "UPDATE instruktur SET id_user='$id_user', no_ktp='$no_ktp', file_ktp='$file_ktp', no_npwp='$no_npwp', file_npwp='$file_npwp', cv='$cv', alamat='$alamat', portofolio1='$portofolio1', portofolio2='$portofolio2', portofolio3='$portofolio3' WHERE id_instruktur='$id_instruktur' ");
	echo "
            <script>
                alert('Data Berhasil Diupdate');
                document.location.href ='../berkas';
            </script>
            ";
}
else 
			{
		        echo "
		        <script>
		        	alert('Data Gagal Diupdate !');
		        	document.location.href ='../berkas';
		        </script>";
		    }

?>