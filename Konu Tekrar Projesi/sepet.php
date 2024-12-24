<?php
session_start(); // Oturumu başlatıyoruz

// Kitap listesi: ID'lere karşılık gelen kitap bilgileri
$books = [
    1 => ['title' => 'PHP Basics', 'price' => 50],
    2 => ['title' => 'Advanced PHP', 'price' => 75],
    3 => ['title' => 'PHP and MySQL', 'price' => 100],
];

// Sepetteki kitapların ID'leri oturumdan alınıyor
$cart = $_SESSION['cart'] ?? []; // Sepet boşsa, boş dizi döndür
$total_price = 0; // Toplam fiyat başlangıcı
?>
<!DOCTYPE html>
<html>

<head>
    <title>Sepet</title>
    <link rel="stylesheet" href="style.css"> <!-- CSS dosyasını dahil et -->
</head>

<body>
    <h1>Sepetiniz</h1> <!-- Sayfa başlığı -->
    <ul>
        <?php foreach ($cart as $book_id): ?>
            <?php if (isset($books[$book_id])): // Kitap ID'sinin geçerli olduğunu kontrol et 
            ?>
                <li>
                    <?php echo htmlspecialchars($books[$book_id]['title']); ?> -
                    <?php echo $books[$book_id]['price']; ?> TL
                </li>
                <?php $total_price += $books[$book_id]['price']; // Toplam fiyata ekle 
                ?>
            <?php else: ?>
                <li>Geçersiz kitap ID: <?php echo htmlspecialchars($book_id); ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <!-- Toplam fiyat ekrana yazdırılır -->
    <h3>Toplam: <?php echo $total_price; ?> TL</h3>
    <a href="oturumkapatma.php">Oturumu Kapat</a> <!-- Oturumu kapatma bağlantısı -->
    <a href="sepetibosalt.php">Sepeti Boşalt</a> <!-- Sepet Boşaltma bağlantısı -->
</body>
</html>