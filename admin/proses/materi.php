<?php
session_start();
include '../../koneksi.php';

$materi = addslashes($_POST['materi']);
$jpl = addslashes($_POST['jpl']);
$angkatan = addslashes($_POST['angkatan']);
$tgl_pembukaan = addslashes($_POST['tgl_pembukaan']);
$bulan_pembukaan = addslashes($_POST['bulan_pembukaan']);
$tgl_penutupan = addslashes($_POST['tgl_penutupan']);
$bulan_penutupan = addslashes($_POST['bulan_penutupan']);
$tahun = addslashes($_POST['tahun']);
$jumlah = addslashes($_POST['jumlah']);
$status = addslashes($_POST['status']);

$query = mysqli_query($koneksi, "INSERT INTO materi VALUES('', '$materi', '$jpl', '$angkatan', '$tgl_pembukaan', '$bulan_pembukaan', '$tgl_penutupan', '$bulan_penutupan', '$tahun', '$jumlah', '$status')");

	if ($query) 
		{
			$_SESSION['id_materi'] = $query['id_materi'];
			echo "
            <script>
                alert('Materi Diklat Berhasil di Simpan');
                document.location.href ='../jadwal-diklat';
            </script>
            ";
		}
			else 
			{
		        echo "
		        <script>
		        	alert('Materi Diklat Gagal di Simpan !');
		        	document.location.href ='../jadwal-diklat';
		        </script>";
		    }
?>