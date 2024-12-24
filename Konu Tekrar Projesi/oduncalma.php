<?php
session_start(); // Oturum başlatılıyor

if (isset($_GET['book_id'])) { // Eğer GET ile kitap ID'si gönderildiyse
    $book_id = (int) $_GET['book_id']; // ID'yi integer olarak al

    if (!isset($_SESSION['cart'])) { // Sepet yoksa, oluştur
        $_SESSION['cart'] = [];
    }

    if (!in_array($book_id, $_SESSION['cart'])) { // Sepette yoksa ekle
        $_SESSION['cart'][] = $book_id;
    }

    header(header: 'Location: anasayfa.php'); // Sepet sayfasına yönlendir
    exit;
}
?>
