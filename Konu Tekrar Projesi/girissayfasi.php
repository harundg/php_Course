<?php
session_start(); // Oturum başlatılıyor.

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Form gönderildiyse
    $username = $_POST['username']; // Kullanıcı adı alınır
    $password = $_POST['password']; // Şifre alınır

    // Basit kullanıcı doğrulama
    if ($username === 'admin' && $password === '12345') {
        $_SESSION['user'] = $username; // Kullanıcı adı oturuma kaydedilir
        header('Location: anasayfa.php'); // Ana sayfaya yönlendirme
        exit;
    } else {
        $error = "Kullanıcı adı veya şifre hatalı!"; // Hata mesajı
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Giriş Yap</title>
</head>
<body>
    <h1>Giriş Yap</h1> <!-- Sayfa başlığı -->
    <?php if (isset($error)): ?> <!-- Hata mesajını ekrana yazdır -->
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="">
        <label>Kullanıcı Adı: <input type="text" name="username"></label><br>
        <label>Şifre: <input type="password" name="password"></label><br>
        <button type="submit">Giriş</button>
    </form>
</body>
</html>
