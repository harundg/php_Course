<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>

    body{    
        color: whitesmoke;
        font-size:17px;
    }
</style>


<?php

echo "<h1>Konu Tekrar</h1>";
// Foreach ile tek sayıların toplamı
echo "<h3>Foreach ile Tek Sayıların Toplamı</h3>";
$sayilar = [10, 31, 314, 12, 43, 23, 14];
$Total = 0;
foreach($sayilar as $sayi){
    if($sayi % 2!= 0){
        $Total += $sayi;
    }
}
echo "Tek Sayıların Toplamı: $Total";
echo "<br>";



// For döngüsü ile toplama
echo "<h3>For Döngüsü ile Toplama</h3>";
$topam = 0;
for($i = 0; $i <= 5; $i++){
    $topam += $i;
}
echo "Toplam: $topam";
echo "<br>";

// Çift sayıların toplamı
echo "<h3>Foreach ile Çift Sayıların Toplamı</h3>";
$sayilar = [2, 5, 8, 11, 14];
$toplam = 0;
foreach($sayilar as $sayi){
    if($sayi % 2 == 0){
        $toplam += $sayi;
    }
}
echo "Çift Sayıların Toplamı: $toplam";
echo "<br>";

// Azalan sayılarla toplama
echo "<h3>For Döngüsü ile Azalan Sayılarla Toplama</h3>";
$toplam = 0;
for($i = 20; $i >= 1; $i--){
    $toplam += $i;
}
echo "Toplammmm: $toplam";
echo "<br>";

// Çarpım tablosu
echo "<h3>İç İçe For ile Çarpım Tablosu</h3>";
$makss = 10;
for($i = 1; $i <= $makss; $i++){
    echo "<div>";
    for($j = 1; $j <= $makss; $j++){
        echo "$i x $j = ".($i * $j)." | ";
    }
    echo "</div>";
}
echo "<br>";

// While döngüsü ile çift sayılar
echo "<h3>While Döngüsü ile Çift Sayılar</h3>";
$s = 0;
while($s <= 10){
    if($s % 2 == 0){
        echo "$s ";
    }
    $s++;
}
echo "<br>";


// For döngüsü ve break
echo "<h3>For Döngüsü ve Break Kullanımı</h3>";
for($o = 0; $o <= 10; $o++){
    echo "$o ";
    if($o == 5){
        break;
    }
}
echo "<br>";

// Foreach örneği
echo "<h3>Foreach ile Meyve Listesi</h3>";
$meyveler = ["Elma", "Armut", "Muz", "Kivi", "Portakal"];
foreach($meyveler as $meyve){
    echo "Meyve: $meyve<br>";
}
echo "<br>";

// Continue ile for döngüsü
echo "<h3>For Döngüsü ve Continue Kullanımı</h3>";
for($oo = 0; $oo <= 7; $oo++){
    if($oo == 3 || $oo == 5){
        continue;
    }
    echo "$oo ";
}
echo "<br>";

$x=0;
while($x<=10){
if($x %2==0 ){
echo $x;
}
$x++;
}
echo "<br>";



$arrays=[1,4,3,7,9,3];
$Total=0;
foreach($arrays as $array){
if($array % 2 !==0){
$Total+=$array;
}

}
echo "Sonuc: $Total";



$x = 0;

while ($x < 6) {
    echo $x . " ";
    $x += 2;
}


$sayi = 3;

if ($sayi = 7) {
    echo "Burası çalışır mı?";
}


?>
</body>
</html>