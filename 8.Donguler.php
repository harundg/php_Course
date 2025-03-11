<?php


//While
echo "While <br/> ";
$a = 0;

while ($a <=  10) {
    echo "$a . merhaba <br/> ";
    $a++;
}



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
        echo "$a x $b = " . $a * $b . " "."<br>";
        $b++; // İç döngü kontrol değişkenini bir artırıyoruz
    }

    // İç döngü bittiğinde $b değişkenini tekrar 1'e sıfırlıyoruz
    // Bu, iç döngünün bir sonraki dış döngü için tekrar çalışmasını sağlar
    $b = 1;

    // Dış döngü kontrol değişkenini bir artırıyoruz
    $a++;
}


// While Döngüsü
$a = 5;
echo "</br>"."</br>"."While Döngüsü <br/>";
while ($a < 6) { // $a başlangıçta 5, koşul doğru olduğu için döngü çalışır
    echo "sayı 6'dan küçük sayi = $a <br/>";
    $a++; // $a değeri artırılır (6 olur ve döngü sonlanır)
}
echo "sayı 6'dan büyük sayi = $a <br/><br/>";


// Do-While Döngüsü
$a = 10; // $a değeri başlangıçta 10
echo "Do While Döngüsü <br/>";
do {
    // Koşul kontrol edilmeden önce bu blok mutlaka bir kez çalışır
    echo "sayı 6'dan küçük sayi = $a <br/>";
    $a++; // $a artırılır
} while ($a < 6); // Koşul kontrol edilir ($a başlangıçta 10 olduğu için yanlış)
echo "sayı 6'dan büyük sayi = $a <br/>";

//For

echo "<br/> For Döngüsü <br/>";
for ($a = 0; $a <= 10; $a++) {
    echo "sayı=$a <br/>";
}

echo "<br/> Break   For Döngüsü <br/>";
for ($a = 0; $a <= 10; $a++) {
    echo "sayı = $a <br/>"; // Her sayıyı yazdırır

    if ($a == 5) { // Eğer $a 5'e eşitse
        break; // Döngüyü sonlandır
    }
}



echo "<br/> Diziler İle For Döngüsü <br/>";

$name = ["ahmet", "mehemt", "arda", "can", "cancan", "kadr", "besr", "harn"];
for ($a = 0; $a < count($name); $a++) {
    echo "name=$name[$a] <br/> ";
}


echo "<br/> İç İçe For Döngüsü <br/>";
for ($a = 1; $a <= 10; $a++) {
    echo "$a. ";

    for ($b = 1; $b <= 10; $b++) {
        echo " $a x $b = " . $a * $b;
    }


    echo "<br/><br/>  ";
}


echo "<br/> İç İçe Foreach Döngüsü <br/>";

$name = ["Ahmet", "Mehmet", "Ayşe"]; 
foreach ($name as $deger) {
    echo "isim = $deger <br>";
}




$a = 0;
while ($a <= 10) {

    if ($a == 5) {
        echo "Loop over <br/>";
        $a++;
        continue;
    }
    echo "num=$a <br/>";
    $a++;
}
