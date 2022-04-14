<?php
session_start();
include '../../koneksi.php';

$username= $_POST['username'];
$password=$_POST['password'];
$level    = $_POST['level'];

if($level==1){
    $login = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' and password='$password' and level='Admin'");
    $cek = mysqli_num_rows($login);
    foreach($login as $admin) {
        if($cek >0 ){
            session_start();
    $_SESSION['username'] = $admin['username'];
            header ("location:../../admin/dashboard");
        }else{
        echo 'LOGIN GAGAL !';
            }   
        }
}
if($level==2){
    $login = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE username='$username' and password='$password' and level='Peserta'");
    $cek = mysqli_num_rows($login);
    foreach($login as $peserta) {
        if($cek >0 ){
            session_start();     
            $_SESSION['username'] = $peserta['username'];
            header ("location:../../peserta/dashboard");
        }else{
        echo 'maaf, silahkan coba lagi';
            }
        }
}
if($level==3){
    $login = mysqli_query($koneksi, "SELECT * FROM instruktur WHERE username='$username' and password='$password' and level='Instruktur'");
    $cek = mysqli_num_rows($login);
    foreach($login as $instruktur) {
        if($cek >0 ){
            session_start();     
            $_SESSION['username'] = $instruktur['username'];
            header ("location:../../instruktur/dashboard");
        }else{
        echo 'maaf, silahkan coba lagi';
            }
        }
}
?>