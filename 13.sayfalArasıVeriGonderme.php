<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tasarımı</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #111;
            margin: 0;
            padding: 20px;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        .form-wrapper {
            background-color: #222;
            padding: 40px 40px 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #555;
            border-radius: 4px;
            font-size: 16px;
            background-color: #333;
            color: #fff;
        }

        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .sonuc {
            border-color: #007bff;
            margin-top: 20px;
            font-size: 16px;
            color: #d4d4d4;
        }
    </style>
</head>
<body>

    <div class="form-wrapper">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="mail" class="form-label">Kullanıcı Mail:</label>
                <input type="email" class="form-control" id="mail" name="mail" placeholder="E-posta adresinizi giriniz">
            </div>
            <div class="mb-3">
                <label for="sifre" class="form-label">Şifre:</label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Şifrenizi giriniz">
            </div>

            <button type="reset" class="btn btn-danger">İptal</button>
            <button type="submit" class="btn btn-primary">Gönder</button>
        </form>

        <?php
        if ($_POST) {
            $mail = $_POST["mail"];
            $pass = $_POST["pass"];
            echo "<div class='sonuc'>Mailiniz: $mail<br>Şifreniz: $pass</div>";
        }
        ?>
    </div>

</body>
</html>
