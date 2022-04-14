<?php
include '../../koneksi.php';

$id_materi = addslashes($_POST['id_materi']);
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

$query = mysqli_query($koneksi, "UPDATE materi SET materi='$materi', jpl='$jpl', angkatan='$angkatan', tgl_pembukaan='$tgl_pembukaan', bulan_pembukaan='$bulan_pembukaan', tgl_penutupan='$tgl_penutupan', bulan_penutupan='$bulan_penutupan', tahun='$tahun', jumlah='$jumlah', status='$status' WHERE id_materi='$id_materi' ");

	if ($query) 
		{
			$_SESSION['id_materi'] = $query['id_materi'];
			echo "
            <script>
                alert('Data Jadwal dan Materi Diklat Berhasil di Edit');
                document.location.href ='../jadwal-diklat';
            </script>
            ";
		}
			else 
			{
		        echo "
		        <script>
		        	alert('Data Jadwal dan Materi Diklat Gagal di Edit !');
		        	document.location.href ='../jadwal-diklat';
		        </script>";
		    }
?>