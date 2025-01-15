<?php
// Global bir değişken olan $a'ya 10 değerini atıyoruz
$a = 10;

// Global değişkenin değerini ekrana yazdırıyoruz
echo "global sayı(Fonksiyon Dışında) = " . $a . "<br/>";

// goster adında bir fonksiyon çağırıyoruz


// Global ve local değişkenleri tanımlamak ve kullanmak için bir fonksiyon oluşturuyoruz
function goster(){
    // Yerel bir değişken olan $b'ye 20 değerini atıyoruz
    $b = 20;

    // $GLOBALS dizisi yardımıyla global değişken $a'nın değerini ekrana yazdırıyoruz
    echo "fun içinde global sayı = " . $GLOBALS['a'] . "<br/>";

    // Fonksiyon içinde tanımlanan yerel değişken $b'nin değerini ekrana yazdırıyoruz
    echo "<br/>"."yerel sayı(fonksiyonun içinde) = " . $b . "<br/>";
    return $b;
}

// Fonksiyon dışında $b değişkenine erişmeye çalışıyoruz
// Ancak bu bir hata üretecektir, çünkü $b sadece goster fonksiyonu içinde tanımlıdır
echo ">>>>Fonksiyonun Dışında Yerel Sayı"."$b"."</br>"."</br>";



$sonuc = goster(); // Fonksiyondan dönen değeri alıyoruz
echo "Fonksiyon dışında yerel sayı kullanılıyor.(return komutu sayesinde): " . $sonuc . "<br/>";

