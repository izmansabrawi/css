<?php
include '../../koneksi.php';

$id_materi = $_GET['id_materi'];
$query = mysqli_query($koneksi, "SELECT * FROM materi order by bulan_pembukaan DESC");
$month = [
    'Januari' => 'Jan',
    'Februari' => 'Feb',
    'Maret' => 'Mar',
    'April' => 'Aor',
    'Mei' => 'Mei',
    'Juni' => 'Jun',
    'Juli' => 'Jul',
    'Agustus' => 'Ags',
    'September' => 'Sep',
    'Oktober' => 'Okt',
    'November' => 'Nov',
    'Desember' => 'Des',
];

// $materi = [];
// $materiData = mysqli_query($koneksi, "SELECT * FROM materi WHERE materi.id_materi = '$id_materi' LIMIT 1");
// foreach ($query as $data) {
//     $materi = $data;
// }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Peserta</title>
</head>
<style type="text/css">
    body {
        font-family: "Arial";
        padding: 1%;
    }
    table {
      border-collapse: collapse;
    }
    td, th {
      border: 3px solid black;
    }
    .no-border td {
      border: 1px solid white !important;
    }
    th {
        padding: 10px;
    }
    td {
        padding-left: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
    h2 {
        letter-spacing: 5px;
    }
    .bold {
        font-weight: 700;
    }
    .center {
        padding-left: 0;
        text-align: center;
    }
    .mb5 {
        margin-bottom: 5px;
    }
    .m0 {
        margin: 0;
    }
    .mb10 {
        margin-bottom: 10px;
    }
    .ml10 {
        margin-left: 10px;
    }
    .mb20 {
        margin-bottom: 20px;
    }
    .mr20 {
        margin-right: 20px;
    }
    .mr50 {
        margin-right: 50px;
    }
</style>
<body>

    <table class="no-border" border="1" width="100%">
        <tr>
            <td width="70%">
                <table class="no-border" border="1">
                    <tr>
                        <td width="40%"><b>DAFTAR PESERTA</b></td>
                    </tr>
                    <tr>
                        <td width="40%"><b>DIKLAT ANIMASI BDI DENPASAR BALI 2019</b></td>
                    </tr>
                </table>
            </td>
            <td>
                <table class="no-border" border="1">
                    <?php
                    $id_materi = $_GET['id_materi'];
                    $query = mysqli_query($koneksi, "SELECT * FROM materi where id_materi = '$id_materi'");
                        foreach ($query as $d)
                    ?>
                    <tr>
                        <td width="35%"><b>TGL/BLN</b></td>
                        <!-- <td ><b> : <?= $materi['tgl_pembukaan'] . " " . $materi['bulan_pembukaan'] . " " . $materi['tahun']?></b></td> -->
                        <td ><b> : <?= date('d M Y') ?></b></td>
                    </tr>
                    <tr>
                        <td width="35%"><b>MATERI</b></td>
                        <td ><b> : <?= $d['materi'] ?> - <?= $d['angkatan'] ?></b></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table width="100%" border="1">
        <thead>
            <tr>
                <th width="5%">NO</th>
                <th width="20%">NAMA</th>
                <th width="5%">L / P</th>
                <th width="40%">ALAMAT</th>
                <th width="15">No. HP</th>
                <th width="15%" colspan="3">E-Mail</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?> 
            <?php
                $query = mysqli_query($koneksi, "SELECT * FROM formulir join materi on materi.id_materi = formulir.id_materi join pendaftaran on formulir.alamat_email = pendaftaran.email where formulir.id_materi = materi.id_materi AND proses = 'Diterima' AND materi.id_materi = '$id_materi' order by tgl_daftar asc");
                if ($query) {

                    foreach ($query as $data) {
                ?>
                
                    <tr>
                        <td class="center">1</td>
                        <td><?= $data['nama_lengkap'] ?></td>
                        <td class="center"><?= $data['jk'] == 'Laki-Laki' ? 'L' : 'P' ?></td>
                        <td><?= $data['alamat_lengkap'] ?></td>
                        <td><?= $data['nohp'] ?></td>
                        <td><?= $data['email'] ?></td>
                    </tr>

            <?php 
                        $i++;
                    }
                }
            ?>
        </tbody>
    </table>

    <table class="no-border" border="1" width="100%">
        <tr>
            <td width="70%">
            </td>
            <td>
                <p class="center bold">
                    Yogyakarta, <?= date('d M Y') ?>
                    <br>
                    JITU KREASI UTAMA
                </p>
            </td>
        </tr>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>