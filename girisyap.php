<?php 
include("db.php");
ob_start();
session_start();

$kadi = $_POST['kadi'];
$sifre = $_POST['sifre'];

    $kullanicisor=$db->prepare("select * from uye where uye_mail=:mail  and uye_sifre=:password ");
    $kullanicisor->execute(array(
        'mail' => $kadi,
        'password' => $sifre
    ));

    $say=$kullanicisor->rowCount();

    if ($say==1) {
        echo $_SESSION['userkullanici_mail']=$kadi;
        echo "Hi ";   echo  $_SESSION['userkullanici_mail'];
        exit;
    } else {
        echo "Error  ";   
    } 
?>