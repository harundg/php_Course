<!-- Aritmetik Operatörler -->
<?php
$num1 = 10;
$num2 = 2;

echo $num1 . "**" . $num2 . " = ? <br>";
echo "Sonuç: " . $num1 ** $num2 . "<br>";
?>


<!-- Atama Operatörler -->
<?php
$num1 = 10;
$num2 = 2;

$num1 += $num2; // num1 = num1 + num2
//" +=" işlemi toplamayı ve sonucu aynı değişkene atamayı sağlar.
echo "Sonuç = " . $num1 . "<br>";
?>


<!-- Karşılaştırma Operatörleri -->
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

// Eşit değil (<>)
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
echo "Küçük veya eşittir (<=): ";
var_dump($a <= $b); // Çıktı: bool(false)
echo "<br>";

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
?>


<!-- Artırma ve Eksiltme Operatörleri -->
<?php
$num = 10;

// Artırma işlemi
$num++; // num = num + 1
echo "Artırılmış sayı: " . $num . "<br>";
?>


<!-- Mantıksal Operatörler -->
<?php
$a = true;
$b = false;

// Mantıksal "ve" operatörü (AND, &&)
echo "AND (&&) sonucu: ";
var_dump($a && $b); // Çıktı: bool(false)
echo "<br>";

// Mantıksal "veya" operatörü (OR, ||)
echo "OR (||) sonucu: ";
var_dump($a || $b); // Çıktı: bool(true)
echo "<br>";

// Mantıksal "değil" operatörü (!)
echo "NOT (!) sonucu: ";
var_dump(!$a); // Çıktı: bool(false)
echo "<br>";

// Mantıksal "XOR" operatörü (XOR)
echo "XOR sonucu: ";
var_dump($a xor $b); // Çıktı: bool(true)
echo "<br>";
?>


<!-- String Operatörleri -->
<?php
$name = "Hakan ";
$surname = "Mutlu";

// Birleştirme operatörü (.)
$name .= $surname;
echo $name . "student";
?>


<!-- If-Else Yapısı -->
<?php
$number = -1;

// if yapısı
if ($number > 0) {
    echo "Sayı pozitiftir.<br>";
} else {
    echo "Sayı negatif ya da sıfırdır.<br>";
}

// if-else-if yapısı
if ($number > 20) {
    echo "Sayı 20'den büyüktür.<br>";
} elseif ($number == 10) {
    echo "Sayı 10'dur.<br>";
} else {
    echo "Sayı 10'dan küçüktür.<br>";
}

// Kısa if-else kullanımı
$sayii = 10;
echo $sayii == 10 ? "Sayı 10" : "Sayı 10 değil";
echo "<br>";

// Switch-case yapısı
$gun = 1;
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
