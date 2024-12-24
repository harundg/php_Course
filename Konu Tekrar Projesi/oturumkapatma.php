<?php
session_start(); // Oturumu başlatıyoruz
session_destroy(); // Tüm oturum verilerini siliyoruz
header('Location: girissayfasi.php'); // Giriş sayfasına yönlendirme
exit;
?>
