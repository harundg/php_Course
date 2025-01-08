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


//Class İçinde Fonksiyon
// class ogrenci{
//     public $isim;
//     public $soyisim="bulut";
//     public $yas=12;

//     function goster(){
//         echo $this->isim="hakan";
//     }
// }

// $a= new ogrenci();

// $a->goster();


class Ogrenci{  
    public $isim;
    public $soyisim;
    public $yas;

    function tanit(){
        echo "Benım adım {$this->isim} {$this->soyisim}, yaşım {$this->yas}.<br>";
    }
}

$ogrenci1= new Ogrenci();
$ogrenci1->isim = "Ahmet";
$ogrenci1->soyisim = "Kaya";
$ogrenci1->yas = 18;

$ogrenci2= new Ogrenci();
$ogrenci2->isim = "Elif";
$ogrenci2

?>