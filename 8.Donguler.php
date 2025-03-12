<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
            background-color: black;
            color: aliceblue
        }
    </style>
</body>

</html>

<?php


//While
echo "While <br/> ";
$a = 0;

while ($a <=  10) {
    echo "$a . Merhaba <br/> ";
    $a++;
}
echo "<br>";

echo "While Tekrar <br/> ";
$bir = 0;

while ($bir < 10) {
    echo "$bir <br>";
    $bir++;
}
echo "<br>";



// İç içe While döngüsü ile çarpım tablosu örneği
echo "<br/> İç İçe While (Çarpım Tablosu)<br/>";

// $a değişkenini 1 olarak başlatıyoruz (dış döngünün kontrol değişkeni)
$a = 1;

// $b değişkenini 1 olarak başlatıyoruz (iç döngünün kontrol değişkeni)
$b = 1;

// Dış döngü: $a değişkeni 1'den 10'a kadar çalışır
while ($a <= 10) {

    // Dış döngüde $a'nın değerini yazdırıyoruz
    echo $a . " ";

    // İç döngü: $b değişkeni 1'den 10'a kadar çalışır
    while ($b <= 10) {
        // Çarpım işlemini yazdırıyoruz (örnek: "1 x 1 = 1")
        echo "$a x $b = " . $a * $b . " || ";
        $b++; // İç döngü kontrol değişkenini bir artırıyoruz
    }

    // İç döngü bittiğinde $b değişkenini tekrar 1'e sıfırlıyoruz
    // Bu, iç döngünün bir sonraki dış döngü için tekrar çalışmasını sağlar
    $b = 1;
    echo "<br>";
    // Dış döngü kontrol değişkenini bir artırıyoruz
    $a++;
}
echo "<br>";
echo "<br>";



echo "While ve Do-While Farkı";
// While Döngüsü

$x = 5;

while ($x < 3) { // Koşul baştan yanlış olduğu için döngü hiç çalışmaz
    echo "x = $x <br/>";
    $x++;
}

echo "While bitti, x = $x <br/>";




$a = 10;
echo "</br>" . "</br>" . "While Döngüsü: Önce şart kontrol edilir, sonra döngü çalışır. <br/>";
while ($a < 6) {
    echo "sayı 6'dan küçük sayi = $a <br/>";
    $a++;
}
echo "sayı 6'dan büyük sayi = $a <br/><br/>";


// Do-While Döngüsü
$a = 10;
echo "Do-While Döngüsü: Önce döngü çalışır, sonra koşulu kontrol eder. <br/>";
do {

    echo "sayı 6'dan küçük sayi = $a <br/>";
    $a++;
} while ($a < 6);
echo "sayı 6'dan büyük sayi = $a <br/>";

echo "<br>";


//For
echo "<br/> For Döngüsü <br/>";
for ($a = 0; $a <= 10; $a++) {
    echo "sayı=$a <br/>";
}
echo "<br>";

echo "<br/> Break ile For Döngüsü <br/>";
for ($a = 0; $a <= 10; $a++) {
    echo "sayı = $a <br/>"; // Her sayıyı yazdırır

    if ($a == 5) { // Eğer $a 5'e eşitse
        break; // Döngüyü sonlandır
    }
}
echo "<br>";



echo "<br/> Diziler İle For Döngüsü <br/>";

$name = ["ahmet", "mehemt", "arda", "can", "cancan", "kadr", "besr", "harn"];
for ($a = 0; $a < count($name); $a++) {
    echo "name=$name[$a] <br/> ";
}
echo "<br>";


echo "<br/> İç İçe For Döngüsü <br/>";
for ($a = 1; $a <= 10; $a++) {
    echo "$a. ";

    for ($b = 1; $b <= 10; $b++) {
        echo " $a x $b = " . $a * $b;
    }


    echo "<br/><br/>  ";
}
echo "<br>";



echo "<br/> İç İçe Foreach Döngüsü <br/>";
$name = ["Ahmet", "Mehmet", "Ayşe"];
foreach ($name as $deger) {
    echo "isim = $deger <br>";
}
echo "<br>";


echo "<br/> Break ve Continue Kullanımı <br/>";
echo "<br/>Break Kullanımı: <br/>";
$x = 0;
while ($x < 10) {
    if ($x == 5) {
        echo "Invalid number writed. Loop over. <br/>";
        break;
    }
    echo "$x" . "<br>";
    $x++;
}
echo "<br>";



echo "<br/> Diziler ile Break Kullanımı: <br/>";
$isim = ["Ahmet", "Mehmet", "Ayşe", "Serkan"];
$a = 0;
while ($a < count($isim)) {
    if (($name)[$a] == "Ayşe") {
        echo "Invalid name writed. Loop over. <br/>";
        break;
    }
    echo "$isim[$a]" . "<br>";
    $a++;
}
echo "<br>";




echo "<br/>Continue Kullanımı <br/>";
$a = 0;
while ($a <= 10) {

    if ($a == 5) {
        echo "Invlaid number.<br/>";
        $a++;
        continue;
    }
    echo "num=$a <br/>";
    $a++;
}
echo "<br>";




echo "<br/> Diziler ile Continue Kullanımı <br/>";
$r = 0;
while ($r < count($isim)) {
    if (($isim)[$r] == "Ayşe") {
        echo "Invalid name writed. <br>";
        $r++;
        continue;
    }
    echo "$isim[$r]" . "<br>";
    $r++;
}
