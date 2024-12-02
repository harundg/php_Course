<?php

$a = 1;
if($a==1){
    deneme(25,5);
    deneme(10,5);
    deneme(10,30);
}

function deneme($a , $b){
echo "Hello World! ";
echo $a*$b . "<br/>";

echo "---------------------------- <br/><br/>";
}


//Parametreli Fonksiyonlar
    topla(20,41);
    carp(5,6);


    function topla($x, $y){
        echo  "toplam = ".$x+$y . "<br/>";
        echo "---------------------------- <br/>";
    }
    function carp($x, $y){
        echo "çarpma = ".($x*$y) . "<br/>";
        echo "---------------------------- <br/>"; 
    }


    //Anonymus Fonsıyonlar

    $b="hakan";
    $a=function($isim) use($b){

        echo "merhaba $isim"."".$b."<br/>";
    };

    $a("mert");

        
    

//Arrow Function
function name(){
    return "hello!"; 
}
    
$a= function(){
    echo "Merhaba!";
};

echo $a();

$c = 10;
$b = fn($a) => "kisa" . $a . $c; // $a ve $c string olarak birleştiriliyor.

echo $b(5); // Çıktı: "kisa510"





?>