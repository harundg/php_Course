<!-- Aritmetik Operatörler -->
<?php
$num1 = 10;
$num2 = 2;

echo $num1 . "**" . $num2 . " = ? <br>";
echo "Sonuç: " . ($num1 ** $num2) . "<br><br>";
?>

<!-- Atama Operatörleri -->
<?php
$num1 = 10;
$num2 = 2;

$num1 += $num2; // num1 = num1 + num2
echo "Sonuç = " . $num1 . "<br><br>";
?>

<!-- Karşılaştırma Operatörleri -->
<?php
$a = 10;
$b = 2;

// Eşittir
echo "Eşittir (==): ";
var_dump($a == $b);
echo "<br><br>";

// Aynı mı (değer ve veri tipi açısından)
echo "Aynı mı (===): ";
var_dump($a === $b);
echo "<br><br>";

// Eşit değil
echo "Eşit değil (!=): ";
var_dump($a != $b);
echo "<br><br>";

// Eşit değil (<>)
echo "Eşit değil (<>): ";
var_dump($a <> $b);
echo "<br><br>";

// Aynı değil (değer ve veri tipi açısından)
echo "Aynı değil (!==): ";
var_dump($a !== $b);
echo "<br><br>";

// Küçüktür
echo "Küçüktür (<): ";
var_dump($a < $b);
echo "<br><br>";

// Küçük veya eşittir
echo "Küçük veya eşittir (<=): ";
var_dump($a <= $b);
echo "<br><br>";

// Büyüktür
echo "Büyüktür (>): ";
var_dump($a > $b);
echo "<br><br>";

// Büyük veya eşittir
echo "Büyük veya eşittir (>=): ";
var_dump($a >= $b);
echo "<br><br>";

// Uzay gemisi operatörü (<=>)
echo "Uzay gemisi (<=>): ";
var_dump($a <=> $b);
echo "<br><br>";
?>

<!-- Artırma ve Eksiltme Operatörleri -->
<?php
$num = 10;

// Artırma işlemi
$num++; // num = num + 1
echo "Artırılmış sayı: " . $num . "<br><br>";
?>

<!-- Mantıksal Operatörler -->


<?php
$a = true;
$b = true;

// Mantıksal "ve" operatörü (AND, &&)
echo "AND (&&) sonucu: ";
var_dump($a && $b);
echo "<br><br>";

// Mantıksal "veya" operatörü (OR, ||)
echo "OR (||) sonucu: ";
var_dump($a || $b);
echo "<br><br>";

// Mantıksal "değil" operatörü (!)
echo "NOT (!) sonucu: ";
var_dump(!$a);
echo "<br><br>";

// Mantıksal "XOR" operatörü (XOR)
echo "XOR sonucu: ";
var_dump($a xor $b);
echo "<br><br>";
?>

<!-- String Operatörleri -->
<?php
$name = "Hakan ";
$surname = "Mutlu";

// Birleştirme operatörü (.)
$name .= $surname;
echo $name . "student<br><br>";
?>

<!-- If-Else Yapısı -->
<?php
$number = -1;

// if yapısı
if ($number > 0) {
    echo "Sayı pozitiftir.<br><br>";
} else {
    echo "Sayı negatif ya da sıfırdır.<br><br>";
}

// if-else-if yapısı
if ($number > 20) {
    echo "Sayı 20'den büyüktür.<br><br>";
} elseif ($number == 10) {
    echo "Sayı 10'dur.<br><br>";
} else {
    echo "Sayı 10'dan küçüktür.<br><br>";
}

// Kısa if-else kullanımı
$sayii = 10;
echo $sayii == 10 ? "Sayı 10<br><br>" : "Sayı 10 değil<br><br>";

// Switch-case yapısı
$gun = 1;
switch ($gun) {
    case 1:
        echo "Pazartesi<br><br>";
        break;
    case 2:
        echo "Salı<br><br>";
        break;
    case 3:
        echo "Çarşamba<br><br>";
        break;
    default:
        echo "Geçersiz gün<br><br>";
}




echo "Konu Tekrar:" . "<br>";
$s1 = 6;
$s2 = '6';

var_dump($s1 = ! $s2);


$şehir=0;
switch($şehir){
case 1:
    echo"izmir";
    break;
    case 2:
        echo"bursa";
        break;
        default:
        echo"Geçersiz şehir";

}

?>