<?php
$x = 10; // GLOBAL değişken

function goster()
{
    $y = 5; // LOCAL değişken
    echo "Local y: $y <br>";

    // Global değişkeni kullanmak istersek:
    global $x;
    echo "Global x: $x <br>";
}

goster();

// echo $y; // ❌ Hata! Çünkü $y sadece fonksiyonun içinde geçerli (local)
// echo $x; // ✅ Çalışır çünkü $x dışarıda tanımlandı



//Tekrar Çalışması
$score = 95;
function writeScore()
{
    global $score;
    echo "Your Score: $score"."<br>";
    
    $score2 = 96;
    echo "Your Score 2: $score2"."<br>";
    return $score2;
}
$deger=writeScore();
echo "Fun İçinde Yerel Sayı: ".$deger+10;

