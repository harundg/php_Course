<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === 'admin' ){
        $_SESSION['user'] = $username;
        header('Location: anasayfa copy.php');
        exit;
    }else{
        $error= "Kullanıcı Adı veya Şifre Hatalı!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
</head>
<body>
    <h1>Giriş Yap</h1>
    <?php if(isset($error)): ?>
        <p style="color: red;"><?php echo $error;?></p>
    <?php endif;?>
    <form method="POST" action="">
<label>Kullanıcı Adı:<input type="text" name="username">  </label><br>
<label>Şifre: <input type="password" name="password"> </label><br>
<button type="submit">Giriş</button>

    </form>
</body>
</html>     