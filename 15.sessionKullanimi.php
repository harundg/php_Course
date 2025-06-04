<?php

//SESSİON
session_start(); //oturum başlatıldı

$_SESSION["isim"]="Harun";
$_SESSION["mail"]="harun@gmail.com";
$_SESSION["sifre"]="harun+qw";

// session_unset(); // tüm session değişkenlerini siler
session_destroy(); // oturumu tamamen sonlandırır
print_r($_SESSION);
echo "<br>";


//DATE
$tarihimiz= date("d/m/Y h:i:s");
echo "Tarih: $tarihimiz";