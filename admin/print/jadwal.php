<?php
include '../../koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM materi order by bulan_pembukaan asc;");
$month = [
    '01' => 'Jan',
    '02' => 'Feb',
    '03' => 'Mar',
    '04' => 'Apr',
    '05' => 'Mei',
    '06' => 'Jun',
    '07' => 'Jul',
    '08' => 'Ags',
    '09' => 'Sep',
    '10' => 'Okt',
    '11' => 'Nov',
    '12' => 'Des',
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Diklat</title>
</head>
<style type="text/css">
    body {
        font-family: "Arial";
        font-size: 10px;
        padding: 3%;
        padding-top: 5px;
        padding-bottom: 0;
    }
    table {
      border-collapse: collapse;
    }
    td, th {
      border: 2px solid black;
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
    .mt0 {
        margin-top: 0;
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
    <center class="mb20">
        <img src="../assets/images/kementerian.png" width="200px" />
        <img src="../assets/images/bdid.png" width="80px" class="mr20" />
        <img src="../assets/images/g2.png" width="50px" class="" />
        <img src="../assets/images/jitu.png" width="60px" />
    </center>

    <table width="100%" border="1">
        <thead>
            <tr>
                <th colspan="9">
                    <h2 class="mb5 mt0">JADWAL</h2>
                    <h4 class="m0">DIKLAT ANIMASI BDI DENPASAR BALI</h4>
                    <h4 class="m0">TAHUN ANGGARAN 2019</h4>
                </th>
            </tr>
            <tr>
                <th width="5%">NO</th>
                <th width="31%">MATERI</th>
                <th width="8%">JPL</th>
                <th width="8%">ANGKATAN</th>
                <th width="24%" colspan="3">JADWAL</th>
                <th width="10%">JUMLAH PESERTA</th>
                <th width="14%">KETERANGAN</th>
            </tr>
        </thead>
        <tbody>

            <?php $no = 0; $jpl = 0; foreach ($query as $data)  { $jpl += $data['jpl']; ?>
                <tr>
                    <td class="center"><?= ++$no ?></td>
                    <td><?= $data['materi'] ?></td>
                    <td class="center"><?= $data['jpl'] ?></td>
                    <td class="center"><?= $data['angkatan'] ?></td>
                    <td class="center bold"><?= $data['tgl_pembukaan'] ?>-<?= $month[$data['bulan_pembukaan']] ?></td>
                    <td class="center">s.d</td>
                    <td class="center bold"><?= $data['tgl_penutupan'] ?>-<?= $month[$data['bulan_penutupan']] ?></td>
                    <td class="center"><?= $data['jumlah'] ?></td>
                    <td class="center"><?= $data['status'] ?></td>
                </tr>
            <?php } ?>

            <tr>
                <td class="center"></td>
                <td></td>
                <td class="center"><?= $jpl ?></td>
                <td class="center"></td>
                <td class="center bold"></td>
                <td class="center"></td>
                <td class="center bold"></td>
                <td class="center"></td>
                <td class="center"></td>
            </tr>
        </tbody>
    </table>

    <table class="no-border" border="1" width="100%">
        <tr>
            <td>
                <p class="bold"><i>Catatan : Jadwal ini masih bersifat tentatif (masih bisa berubah) </i></p>
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