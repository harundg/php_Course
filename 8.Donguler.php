<?php


//While
echo "While <br/> ";
$a = 0;

while ($a <= 10) {
    echo "$a . merhaba <br/> ";
    $a++;
}

//İç İçe While
echo "<br/> İç İçe While <br/> ";
$a = 1;
$b = 1;

while ($a <= 10) {
    // echo $a . "";

    while ($b <= 10) {
        // echo "$a x $b = " . $a * $b . "";
        echo $a . ' ' .  $b . " ";
        echo "<br> <br/>";
        $b++;
    }

    $b = 1;
    $a++;
}



//Do-While
$a = 5;
echo " While Döngüsü <br/> ";
while ($a < 6) {
    echo "sayı 6'dan küçük sayi=$a <br/>";
    $a++;
}
echo "sayı 6'dan büyük sayi=$a <br/> <br/>";




$a = 10;
echo "Do While Döngüsü <br/>";
do {
    echo "sayı 6'dan küçük sayi=$a <br/>";
    $a++;
} while ($a < 6);
echo "sayı 6'dan büyük sayi=$a <br/> ";

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
