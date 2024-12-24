<?php
session_start(); // Oturum işlemlerini başlatıyoruz. Sepet verileri burada saklanacak.

// Kitap bilgilerini içeren dizi: ID, kitap adı (title), yazar (author) ve fiyat (price) alanları içeriyor.
$books = [
    ['id' => 1, 'title' => 'PHP Basics', 'author' => 'John Doe', 'price' => 50],
    ['id' => 2, 'title' => 'Advanced PHP', 'author' => 'Jane Smith', 'price' => 75],
    ['id' => 3, 'title' => 'PHP and MySQL', 'author' => 'David Roe', 'price' => 100],
];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Kütüphane Ana Sayfa</title>
    <link rel="stylesheet" href="/Konu Tekrar Projesi/style.css"> <!-- CSS dosyasını dahil ediyoruz -->
</head>

<body>
    <h1>Kitap Listesi</h1> <!-- Sayfa başlığı -->

    <!-- Kitapları listelemek için döngü kullanıyoruz -->
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <!-- Kitap başlığı, yazar bilgisi ve fiyatı ekrana yazdırılıyor -->
                <strong><?php echo $book['title']; ?></strong> -
                <?php echo $book['author']; ?> -
                <?php echo $book['price']; ?> TL
                <!-- Ödünç alma işlemi için kitap ID'si GET parametresi olarak gönderiliyor -->
                <a href="oduncalma.php?book_id=<?php echo $book['id']; ?>">Ödünç Al</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <!-- Sepete gitmek için bağlantı -->
    <a href="sepet.php">Sepete Git</a>
</body>

</html>