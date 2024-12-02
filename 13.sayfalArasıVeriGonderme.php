<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tasarımı</title>
    <style>
        /* Basit CSS eklemeleri */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #ffffff;
            padding: 40px 57px 40px 40px ;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
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
    </style>
</head>
<body>
    <form action="veriAktarma.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="mail" class="form-label">Kullanıcı Mail:</label>
            <input type="email" class="form-control" id="mail" name="mail" placeholder="E-posta adresinizi giriniz">
        </div>
        <div class="mb-3">
            <label for="sifre" class="form-label">Şifre:</label>
            <input type="password" class="form-control" id="pass" name="pass" placeholder="Şifrenizi giriniz">
        </div>
        <div class="mb-3">
            <label for="dosya" class="form-label">Dosya Yükle:</label>
            <input type="file" class="form-control" id="dosya" name="file">
        </div>
        <button type="reset" class="btn btn-danger">İptal</button>
        <button type="submit" class="btn btn-primary">Gönder</button>
    </form>
</body>
</html>
