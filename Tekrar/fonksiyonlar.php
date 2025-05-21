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


?>


</body>
</html>