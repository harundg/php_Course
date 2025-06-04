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

// Ortalama fonksiyonu
echo "<h3>Fonksiyon ile Ortalama Hesaplama </h3>";
function ortalamal($s1, $s2){
    return ($s1 + $s2) / 2;     
}
echo ortalamal(10, 20);
echo "<br>";




function blg(){
    echo "hey";
}
blg();

// Global ve local değişken farkı
echo "<h3>Global ve Local Değişkenler</h3>";
$x = "i"; // Global
function goster(){
    $x = 10; // Local
    echo $x; // 10
}
goster();
echo $x; // "i"
echo "<br>";



// İç içe fonksiyon tanımı
echo "<h3>İç İçe Fonksiyon Tanımı</h3>";
function selam() {
    echo "Merhaba";
    function gizli() {
        echo " - Gizli fonksiyon!";
    }
}
selam();   // sadece Merhaba yazar
// gizli(); // çalıştırılmazsa hata verir çünkü ancak selam() çağrıldıktan sonra tanımlanır
echo "<br>";


//Arrow Function
$kare= fn($x)=> $x * $x;
echo $kare(4);
echo "<br>";

$yaskontrolu= fn($yasi)=>$yasi <19 ? "Çocuk":"Yetişkin";
echo $yaskontrolu(18);
echo "<br>";




$yaribulma= fn($c) =>$c/2;
echo $yaribulma(10);
echo "<br>";

$puanYorum= fn($p)=> $p >= 50 ? "Geçti":"Kaldı";
echo $puanYorum(50);
echo "<br>";

$indirimlifiyat = fn($f) => $f - ($f * 0.20);
echo $indirimlifiyat(100);
echo "<br>";

$yascontrol= fn($yaass)=> $yaass >=18 ? "Reşit":"Reşit Değil";
echo $yascontrol(10);
echo "<br>";

$urunBilgi= fn($fiyat) => "Orjinal Fiyat: $fiyat TL - İndirim:".($fiyat * 0.20)." TL - İndirimli Fiyat:".($fiyat -($fiyat * 0.20))." TL";
echo $urunBilgi(200);
echo "<br>"; 

    
$yasas= fn($yascik)=> $yascik>=18 ? "tamam":"Yok";
echo $yasas(10);
echo "<br>";    


$tekrar1= fn($studentNote)=> $studentNote >= 85 ? "AA" :
($studentNote>=70?"BB":
($studentNote>=50?"CC":"FF"));
echo $tekrar1(49);
echo "<br>";

$bmiYorum = fn($kilo, $boy) =>
   $kilo/($boy*$boy)>=30?"Obez":
   ($kilo/($boy*$boy)>=25?"Fazla Kilolu":($kilo/($boy*$boy)>=18.5?"Normal":"Zayıf"));
echo $bmiYorum(64.90,1.73);

//Recursive Fonksiyon
echo "<h3>Recursive Fonksiyon</h3>";
function say($a){

    echo $a."<br/>";

    if($a<10){
        return say($a +1);
    }
    }

    say(1);


// Fonksiyonla Ortalama Hesaplama (Parametreli + Return)
function tekrarort($s1,$s2){
    return ($s1+$s2)/2;
}
echo tekrarort(10,20);
echo "<br>";


//Anonymus Fonksiyon(İsimsiz Fonskiyon)
$y="Harun";
$z= function($bir, $iki, $uc) use ($y){
echo "Merhaba $bir $iki $uc $y";
};
$z("gunaydin","iyiaksamlar","iyisabahlar");
echo "<br>";




function notDurumu($not){
if($not>=85){
echo"Pekiyi";
}

if($not>=70 & $not<=85 ){
echo"iyi";

}
if($not>=50 & $not<=69 ){
echo"Orta";

}

if($not<50 ){
echo"Kaldı";

}
}
echo notDurumu(70);
?>


</body>
</html>