<?php
include '../koneksi.php';
$id_formulir = $_GET['id_formulir'];
$query = mysqli_query($koneksi, "SELECT * FROM formulir JOIN materi ON materi.id_materi = formulir.id_materi WHERE formulir.id_formulir = '$id_formulir'");
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

$result = [];

foreach ($query as $row) {
    $result = $row;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Peserta</title>
</head>
<style type="text/css">
    body {
        font-family: "Arial";
        padding: 10%;
        padding-top: 50px;
        padding-bottom: 0;
    }
    table {
      border-collapse: separate;
      border: 1px solid white !important;
    }
    td, th {
      border: 3px solid black;
    }
    .no-border td {
      border-collapse: separate;
      border: 1px solid white !important;
    }
    .border {
      border-collapse: separate;
      border: 1px solid black !important;
    }
    tr {
        vertical-align: top;
    }
    th {
        padding: 10px;
    }
    td {
        padding-left: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
    hr {
        display: block;
        height: 1px;
        border: 0;
        border-top: 2px solid #000;
        padding: 0;
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
    .p0 {
        padding: 0;
    }
    .pb50 {
        padding-bottom: 50px;
    }
    .m0 {
        margin: 0;
    }
    .m-10 {
        margin: -10px;
    }
    .m-20 {
        margin: -20px;
    }
    .mt-20 {
        margin-top: -20px;
    }
    .ml-100 {
        margin-left: -50px;
    }
    .mb10 {
        margin-bottom: 10px;
    }
    .mt10 {
        margin-top: 10px;
    }
    .ml10 {
        margin-left: 10px;
    }
    .mb20 {
        margin-bottom: 20px;
    }
    .mb50 {
        margin-bottom: 50px;
    }
    .mr20 {
        margin-right: 20px;
    }
    .mr50 {
        margin-right: 50px;
    }
    .small {
        font-size: 0.8em;
    }
    .header {
        /*width: 600px;*/
        /*margin-left: -100px;*/
        /*margin-right: -100px;*/
    }
</style>
<body>
    <div class="mb20 ml-100">
        <table class=".header no-border" width="100%" border="1">
            <tr>
                <td width="65%">
                    <img src="../assets/images/kementerian.png" width="200px" />
                    <img src="../assets/images/bdid.png" width="80px" class="mr20" />
                    <img src="../assets/images/g2.png" width="50px" class="" />
                    <img src="../assets/images/jitu.png" width="60px" />
                </td>
                <td class="p0">
                    <table class="border" border="1">
                        <tr>
                            <td width="80%"><b>NO.</b></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><b>TGL.</b></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td width="80%"><b></b></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><b></b></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td width="80%"><b></b></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><b></b></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </td>
        </table>
    </div>

    <center>
        <h3>FORMULIR PENDAFTARAN</h3>
        <hr class="m-10">
        <h3>DIKLAT ANIMASI / MULTIMEDIA</h3>
        <h3 class="mt-20">Balai Diklat Industri (BDI) Denpasar Kemenperin RI</h3>
        <hr class="m-10">
    </center>

    <table class="no-border mt10" border="1">
        <tr>
            <td width="30%">Materi Diklat</td>
            <td width="1%">: </td>
            <td width="60%"><?= $result['materi'] ?></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>: </td>
            <td><?= $result['nama_lengkap'] ?></td>
        </tr>
        <tr>
            <td>Tempat, Tgl lahir</td>
            <td>: </td>
            <td><?= $result['tempat_lahir'] ?>, <?= date('d M Y', strtotime($result['tgl_lahir'])) ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: </td>
            <td><b><?= $result['jns_kelamin'] ?></b></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>: </td>
            <td><?= $result['agm'] ?></td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir</td>
            <td>: </td>
            <td><?= $result['pend'] ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>: </td>
            <td><?= $result['jurusan'] ?></td>
        </tr>
        <tr>
            <td>No. KTP/Identitas </td>
            <td>: </td>
            <td><?= $result['nik'] ?></td>
        </tr>
        <tr>
            <td>Alamat Lengkap</td>
            <td>: </td>
            <td><?= $result['alamat_lengkap'] ?></td>
        </tr>
        <tr>
            <td>Telp / HP</td>
            <td>: </td>
            <td><?= $result['nohp'] ?></td>
        </tr>
        <tr>
            <td>E-Mail</td>
            <td>: </td>
            <td><?= $result['alamat_email'] ?></td>
        </tr>
    </table>

    <hr>
    <center class="small"><b>(Bila terjadi perubahan no. Telp/HP dan alamat email harap memberitahu)</b></center>

    <table class="no-border mt-10" border="1">
        <tr>
            <td colspan="3" width="20%"><h4>KOMPETENSI DASAR</h4></td>
        </tr>
    </table>
    <table class="no-border mt-20" border="1">
        <tr>
            <td width="30%">Penguasaan Software</td>
            <td width="1%">: </td>
            <td width="60%"><?= $result['software'] ?></td>
        </tr>
        <tr>
            <td>Tujuan ikut Diklat</td>
            <td width="1%">: </td>
            <td><?= $result['tujuan'] ?></td>
        </tr>
        <tr>
            <td>Rencana Kerja</td>
            <td width="1%">: </td>
            <td><?= $result['rencana'] ?></td>
        </tr>
        <tr>
            <td colspan="4">
                Apakah pernah ikut diklat sejenis di BDI Kemenperin Denpasar : 
                <b><?= $result['pernah'] ?></b>
            </td>
        </tr>
        <tr>
            <td>Materi</td>
            <td width="1%">: </td>
            <td><?= $result['materi_diklat'] ?> Thn <?= $result['thn_diklat'] ?></td>
        </tr>
        <tr>
            <td>Portofolio</td>
            <td width="1%">: </td>
            <td><b><?= $result['portofolio'] ?></b></td>
        </tr>
        <tr>
            <td>Alamat Link</td>
            <td width="1%">: </td>
            <td><?= $result['alamat_link'] ?></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="4" width="20%" class="small">
                <i>Demikian Biodata ini saya buat sebenar-benarnya & apabila dikemudian hari ditemukan ketidak benaran maka saya bersedia dikenakan sangsi sesuai peraturan dan Undang-undang yang berlaku.</i>
            </td>
        </tr>
    </table>

    <table class="no-border" border="1">
        <tr>
            <td width="65%"></td>
            <td>_______________, _________________</td>
        </tr>
        <tr>
            <td></td>
            <td><center>Pendaftar</center></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>_________________________________</td>
        </tr>
    </table>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>