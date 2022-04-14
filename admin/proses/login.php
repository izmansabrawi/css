<?php
session_start();
require "koneksi.php";



$username= $_POST['username'];
$password=$_POST['password'];
$level    = $_POST['level'];

if($level==1){
    $login = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password' and level='pegawai'");
    $cek = mysqli_num_rows($login);
    foreach($login as $pegawai) {
        if($cek >0 ){
            session_start();
    $_SESSION['username'] = $pegawai['username'];
            header ("location:pegawai/index.php");
        }else{
        echo 'maaf, silahkan coba lagi';
            }   
        }
}
if($level==2){
    $login = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password' and level='manajer'");
    $cek = mysqli_num_rows($login);
    foreach($login as $manajer) {
        if($cek >0 ){
            session_start();     
            $_SESSION['username'] = $manajer['username'];
            header ("location:manajer/index.php");
        }else{
        echo 'maaf, silahkan coba lagi';
            }
        }
}
?>