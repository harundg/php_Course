<!-- Aritmetik Operatorler -->
<?php
$num1=10;
$num2=2;

echo $num1. "**".$num2."=? <br>";
echo "sonuç:".$num1**$num2 . "<br>";
?>


<!-- Atama Opertorler -->
<?php
$num1=10;
$num2=2;

$num1-=$num2;
echo "sonuç=". $num1 ."<br>";
?>



<!-- Karsilastirma Opertorleri -->
<?php
$a = 10;
$b = 2;

// Eşittir
echo "Eşittir (==): ";
var_dump($a == $b); // Çıktı: bool(false)
echo "<br>";

// Aynı mı (değer ve veri tipi açısından)
echo "Aynı mı (===): ";
var_dump($a === $b); // Çıktı: bool(false)
echo "<br>";

// Eşit değil
echo "Eşit değil (!=): ";
var_dump($a != $b); // Çıktı: bool(true)
echo "<br>";

// Eşit değil
echo "Eşit değil (<>): ";
var_dump($a <> $b); // Çıktı: bool(true)
echo "<br>";

// Aynı değil (değer ve veri tipi açısından)
echo "Aynı değil (!==): ";
var_dump($a !== $b); // Çıktı: bool(true)
echo "<br>";

// Küçüktür
echo "Küçüktür (<): ";
var_dump($a < $b); // Çıktı: bool(false)
echo "<br>";

// Küçük veya eşittir
echo "Küçük veya eşittir ); // Çıktı: bool(false)

var_dump($a <= $b);

// Büyüktür
echo "Büyüktür (>): ";
var_dump($a > $b); // Çıktı: bool(true)
echo "<br>";

// Büyük veya eşittir
echo "Büyük veya eşittir (>=): ";
var_dump($a >= $b); // Çıktı: bool(true)
echo "<br>";

// Uzay gemisi operatörü (<=>)
echo "Uzay gemisi (<=>): ";
var_dump($a <=> $b); // Çıktı: int(1) (a > b olduğu için 1 döner)
echo "<br>";

// Mantıksal NOT operatörü
echo "Mantıksal NOT (!): ";
var_dump($a != !$b); // Çıktı: bool(true)
echo "<br>";

?>


<!-- Artirma ve Eksiltme Operatorleri -->
<?php

$num = 10;
$num; //

echo "Artırılmış sayı: ". $num. "<br>";
?>



<!-- Mantiksal Operatorler -->
<?php
// Mantıksal "ve" operatörü (AND, &&)
// Her iki koşul doğruysa true döner
$a = true;
$b = false;
echo "AND (&&) sonucu: ";
var_dump($a && $b); // Çıktı: bool(false)

echo "<br>AND (and) sonucu: ";
var_dump($a and $b); // Çıktı: bool(false)

// Mantıksal "veya" operatörü (OR, ||)
// En az bir koşul doğruysa true döner
echo "<br>OR (||) sonucu: ";
var_dump($a || $b); // Çıktı: bool(true)

echo "<br>OR (or) sonucu: ";
var_dump($a or $b); // Çıktı: bool(true)

// Mantıksal "değil" operatörü (!)
// Koşulun tersini alır (true -> false, false -> true)
echo "<br>NOT (!) sonucu: ";
var_dump(!$a); // Çıktı: bool(false)

// Mantıksal "XOR" operatörü (XOR)
// Sadece bir koşul doğruysa true döner, ikisi de doğru veya ikisi de yanlışsa false
echo "<br>XOR sonucu: ";
var_dump($a xor $b); // Çıktı: bool(true)
"<br>"
?>



<!-- String Operatorleri -->
<?php
$name="hakan ";
$surname="mutlu ";

$name.=$surname;
echo $name."student";
?>



<!-- İf Else operatörü -->

<?php
$number = -         1;

// if yapısı
if ($number > 0) {
    echo "Sayı pozitiftir.<br>"; // Eğer $number 0'dan büyükse bu çalışır
} 

// else yapısı
else {
    echo "Sayı negatif ya da sıfırdır.<br>"; // Eğer $number 0'dan küçük ya da eşitse bu çalışır
}

// if-else-if yapısı
if ($number > 20) {
    echo "Sayı 20'den büyüktür.<br>";
} elseif ($number == 10) {
    echo "Sayı 10'dur.<br>"; // Eğer $number 10'a eşitse bu çalışır
} else {
    echo "Sayı 10'dan küçüktür.<br>";
}


//Kısa İf Else Kullanımı
$sayii=10;

echo $sayii== 10 ? "sayi 10": "sayi 10 degil";      

// if($sayii==10){
//     echo  "sayi 10";
// }else{
//     echo "sayi 10 degil";
// }



$gun = 1    ;

switch ($gun) {
    case 1:
        echo "Pazartesi";
        break;
    case 2:
        echo "Salı";
        break;
    case 3:
        echo "Çarşamba";
        break;
    default:
        echo "Geçersiz gün";
}




?>




