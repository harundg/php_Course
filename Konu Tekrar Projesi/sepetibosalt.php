<?php
session_start(); // Oturumu başlatıyoruz

// Sepeti boşaltıyoruz
unset($_SESSION['cart']); // cart dizisini oturumdan kaldır

// Sepet sayfasına yönlendir
header('Location: sepet.php');
exit;
?>
