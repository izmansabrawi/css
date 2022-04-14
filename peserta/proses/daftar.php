<?php
session_start();
include '../../koneksi.php';

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
$ktp = addslashes($_FILES['ktp']['name']);
$surat_dokter = addslashes($_FILES['surat_dokter']['name']);
$surat_pernyataan = addslashes($_FILES['surat_pernyataan']['name']);
$pakta = addslashes($_FILES['pakta']['name']);
$proses = addslashes($_POST['proses']);

$temp = explode(".", $_FILES["ktp"]["name"]);
$ktp = 'KTP_'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["ktp"]["tmp_name"], "../file/" . $ktp);

$temp = explode(".", $_FILES["surat_dokter"]["name"]);
$surat_dokter = 'SuratKeteranganSehat_'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["surat_dokter"]["tmp_name"], "../file/" . $surat_dokter);

$temp = explode(".", $_FILES["surat_pernyataan"]["name"]);
$surat_pernyataan = 'SuratPernyataanBelumBekerja_'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["surat_pernyataan"]["tmp_name"], "../file/" . $surat_pernyataan);

$temp = explode(".", $_FILES["pakta"]["name"]);
$pakta = 'PaktaIntegritas_'.round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["pakta"]["tmp_name"], "../file/" . $pakta);

$result = mysqli_query($koneksi, "SELECT * FROM `formulir` WHERE `id_materi` = '$id_materi' AND `nik` = '$nik' AND '$thn_materi' = '".date('Y')."';");
    if(mysqli_fetch_assoc($result)){
        echo "
        <script>
            alert('Maaf, anda telah melakukan pendaftaran Diklat pada tahun ini.');
            document.location.href ='../dashboard';
        </script>
        ";
    return false;
}

$query = mysqli_query($koneksi, "INSERT INTO formulir VALUES(NULL, '', '$id_materi', '$id_daftar', '$thn_materi', '$angk_materi', '$tgl_buka', '$bulan_buka', '$tgl_akhir', '$bulan_akhir', '$nama_lengkap', '$tempat_lahir', '$tgl_lahir', '$jns_kelamin', '$agm', '$pend', '$jurusan', '$nik', '$alamat_lengkap', '$nohp', '$alamat_email', '$software', '$tujuan', '$rencana', '$pernah', '$materi_diklat', '$thn_diklat', '$portofolio', '$alamat_link', '$ktp', '$surat_dokter', '$surat_pernyataan', '$pakta', 'Proses Seleksi')");

	if ($query) 
		{
			$_SESSION['id_formulir'] = $query['id_formulir'];
			echo "
            <script>
                alert('Formulir Pendaftaran Anda Berhasil di Simpan');
                document.location.href ='../pendaftaran';
            </script>
            ";
		}
			else 
			{
		        echo "
		        <script>
		        	alert('Formulir Pendaftaran Anda Gagal di Simpan !');
		        	document.location.href ='../daftar-diklat';
		        </script>";
		    }
?>