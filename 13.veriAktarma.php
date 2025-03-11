<?php
// Kullanıcıdan gelen verileri kontrol et
$mail = isset($_POST["mail"]) ? $_POST["mail"] : null;
$pass = isset($_POST["pass"]) ? $_POST["pass"] : null;

// Boş olup olmadığını kontrol et
if ($mail && $pass) {
    echo "Mail: " . $mail . "<br> Password: " . $pass . "<br><br>";
} else {
    echo "Lütfen tüm alanları doldurun.<br><br>";
}





// Dosya yükleme işlemzi
if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
    $file = $_FILES["file"];

    // Dosya bilgileri
    $file_name = $file["name"];
    $file_tmp = $file["tmp_name"];

    // Dosyayı "uploads" klasörüne kaydet
    $upload_dir = "uploads/";

    // Klasör yoksa oluştur
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Hedef dosya yolu
    $new_file_path = $upload_dir . basename($file_name);

    // Dosyayı yükle
    if (move_uploaded_file($file_tmp, $new_file_path)) {
        echo "Dosya başarıyla yüklendi: <a href='$new_file_path'>$file_name</a><br>";
    } else {
        echo "Hata: Dosya yüklenirken bir sorun oluştu!<br>";
    }
} else {
    echo "Hata: Dosya yüklenmedi veya bir hata oluştu.<br>";
}
?>
