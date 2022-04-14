<?php
session_start();
include '../../koneksi.php';

$id_formulir = addslashes($_POST['id_formulir']);
$id_materi = addslashes($_POST['id_materi']);
$id_daftar = addslashes($_POST['id_daftar']);
$thn_materi = addslashes($_POST['thn_materi']);
$angk_materi = addslashes($_POST['angk_materi']);
$tgl_buka = addslashes($_POST['tgl_buka']);
$bulan_buka = addslashes($_POST['bulan_buka']);
$tgl_akhir = addslashes($_POST['tgl_akhir']);
$bulan_akhir = addslashes($_POST['bulan_akhir']);
$nama_lengkap = addslashes($_POST['nama_lengkap']);
$tempat_lahir = addslashes($_POST['tempat_lahir']);
$tgl_lahir = addslashes($_POST['tgl_lahir']);
$jns_kelamin = addslashes($_POST['jns_kelamin']);
$agm = addslashes($_POST['agm']);
$pend = addslashes($_POST['pend']);
$jurusan = addslashes($_POST['jurusan']);
$nik = addslashes($_POST['nik']);
$alamat_lengkap = addslashes($_POST['alamat_lengkap']);
$nohp = addslashes($_POST['nohp']);
$alamat_email = addslashes($_POST['alamat_email']);
$software = addslashes($_POST['software']);
$tujuan = addslashes($_POST['tujuan']);
$rencana = addslashes($_POST['rencana']);
$pernah = addslashes($_POST['pernah']);
$materi_diklat = addslashes($_POST['materi_diklat']);
$thn_diklat = addslashes($_POST['thn_diklat']);
$portofolio = addslashes($_POST['portofolio']);
$alamat_link = addslashes($_POST['alamat_link']);
$filename1 = addslashes($_FILES['ktp']['name']);
$filename2 = addslashes($_FILES['surat_dokter']['name']);
$filename3 = addslashes($_FILES['surat_pernyataan']['name']);
$filename4 = addslashes($_FILES['pakta']['name']);
$proses = addslashes($_POST['proses']);

$temp = explode(".", $_FILES["ktp"]["name"]);
$ktp1 = 'KTP_'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["ktp"]["tmp_name"], "../file/" . $ktp1);

$temp = explode(".", $_FILES["surat_dokter"]["name"]);
$surat_dokter1 = 'SuratKeteranganSehat_'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["surat_dokter"]["tmp_name"], "../file/" . $surat_dokter1);

$temp = explode(".", $_FILES["surat_pernyataan"]["name"]);
$surat_pernyataan1 = 'SuratPernyataanBelumBekerja_'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["surat_pernyataan"]["tmp_name"], "../file/" . $surat_pernyataan1);

$temp = explode(".", $_FILES["pakta"]["name"]);
$pakta1 = 'PaktaIntegritas_'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["pakta"]["tmp_name"], "../file/" . $pakta1);

if(empty($filename1) OR ($filename2) OR ($filename3) OR ($filename4)) //jika gambar kosong atau tidak di ganti
{
	$query = mysqli_query($koneksi, "UPDATE formulir SET id_materi='$id_materi', id_daftar='$id_daftar', thn_materi='$thn_materi', angk_materi='$angk_materi', tgl_buka='$tgl_buka', bulan_buka='$bulan_buka', tgl_akhir='$tgl_akhir', bulan_akhir='$bulan_akhir', nama_lengkap='$nama_lengkap', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jns_kelamin='$jns_kelamin', agm='$agm', pend='$pend', jurusan='$jurusan', nik='$nik', alamat_lengkap='$alamat_lengkap', nohp='$nohp', alamat_email='$alamat_email', software='$software', tujuan='$tujuan', rencana='$rencana', pernah='$pernah', materi_diklat='$materi_diklat', thn_diklat='$thn_diklat', portofolio='$portofolio', alamat_link='$alamat_link', proses='Proses Seleksi' WHERE id_formulir='$id_formulir' ");
    echo "
            <script>
                alert('Data Berhasil Diupdate');
                document.location.href ='../pendaftaran';
            </script>
            ";
}

elseif (!empty($filename1) OR ($filename2) OR ($filename3) OR ($filename4)) // jika gambar di ganti
{
    $query = mysqli_query($koneksi, "UPDATE formulir SET id_materi='$id_materi', id_daftar='$id_daftar', thn_materi='$thn_materi', angk_materi='$angk_materi', tgl_buka='$tgl_buka', bulan_buka='$bulan_buka', tgl_akhir='$tgl_akhir', bulan_akhir='$bulan_akhir', nama_lengkap='$nama_lengkap', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jns_kelamin='$jns_kelamin', agm='$agm', pend='$pend', jurusan='$jurusan', nik='$nik', alamat_lengkap='$alamat_lengkap', nohp='$nohp', alamat_email='$alamat_email', software='$software', tujuan='$tujuan', rencana='$rencana', pernah='$pernah', materi_diklat='$materi_diklat', thn_diklat='$thn_diklat', portofolio='$portofolio', alamat_link='$alamat_link', filename1='$ktp1', filename2='$surat_dokter1', filename3='$surat_pernyataan1', filename4='$pakta1', proses='Proses Seleksi' WHERE id_formulir='$id_formulir' ");
	echo "
            <script>
                alert('Data Berhasil Diupdate');
                document.location.href ='../pendaftaran';
            </script>
            ";
}
else 
			{
		        echo "
		        <script>
		        	alert('Data Gagal Diupdate !');
		        	document.location.href ='../pendaftaran';
		        </script>";
		    }
// $query = mysqli_query($koneksi, "INSERT INTO formulir VALUES(NULL, '', '$id_materi', '$id_daftar', '$thn_materi', '$angk_materi', '$tgl_buka', '$bulan_buka', '$tgl_akhir', '$bulan_akhir', '$nama_lengkap', '$tempat_lahir', '$tgl_lahir', '$jns_kelamin', '$agm', '$pend', '$jurusan', '$nik', '$alamat_lengkap', '$nohp', '$alamat_email', '$software', '$tujuan', '$rencana', '$pernah', '$materi_diklat', '$thn_diklat', '$portofolio', '$alamat_link', '$ktp', '$surat_dokter', '$surat_pernyataan', '$pakta', 'Proses Seleksi')");

// 	if ($query) 
// 		{
// 			$_SESSION['id_formulir'] = $query['id_formulir'];
// 			echo "
//             <script>
//                 alert('Formulir Pendaftaran Anda Berhasil di Simpan');
//                 document.location.href ='../pendaftaran';
//             </script>
//             ";
// 		}
// 			else 
// 			{
// 		        echo "
// 		        <script>
// 		        	alert('Formulir Pendaftaran Anda Gagal di Simpan !');
// 		        	document.location.href ='../daftar-diklat';
// 		        </script>";
// 		    }
?>