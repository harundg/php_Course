
<?php
session_start(); // Oturum başlatılır

// Giriş yapılıp yapılmadığını kontrol et
if (isset($_POST['login'])) {
    // Kullanıcı adı ve şifre kontrolü (basit doğrulama örneği)
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kullanıcı adı ve şifreyi kontrol et (örnek olarak "admin" ve "12345" kullanıyoruz)
    if ($username == 'admin' && $password == '12345') {
        $_SESSION['loggedin'] = true;  // Oturum açıldı bilgisi kaydedilir
        $_SESSION['username'] = $username;  // Kullanıcı adı oturumda saklanır
    } else {
        $error = "Wrong username or password!";
    }
}

// Çıkış yapıldıysa oturum sonlandırılır
if (isset($_GET['logout'])) {
    session_unset(); // Oturum verilerini temizler
    session_destroy(); // Oturumu sonlandırır
    header("Location: 15.sessionKullanimi.php"); // Sayfa yenilenir
    exit;
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş ve Çıkış İşlemleri</title>
</head>
<body>
    <style>
section{
    
    border: 1px solid black;
    border-radius: 7px;
    background-color: #f1f1f1;
    width: 300px;
    text-align: center;
    padding: 25px 25px 40px 25px;
    margin: 0 auto;
    margin-top: 140px;
}
a{
    text-decoration: none;
    color: black;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    background-color: gray ;
    transition: 0.3s ease;
}

    </style>

    <section>
    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <?php echo "Date:".date(format: "d/m/Y"); ?>
        <p>You have successfully logged in.</p>
        <a href="15.sessionveDateKullanimi.php?logout=true">Log Out</a>
        </section>

    <?php else: ?>
        <h2 style="font-size:27px;">Sign In</h2>
        <?php
        // Hata mesajını göster
        if (isset($error)) {
            echo "<p style='color: red;'>$error</p>";
        }
        ?>
        <form method="POST" action="15.sessionveDateKullanimi.php">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <br><br>
            <input type="submit" name="login" value="Sign In">
        </form>
    <?php endif; ?>
</body>
</html>
