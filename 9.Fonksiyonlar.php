<?php

// $a = 1;
// if($a==1){
//     deneme(25,5);
//     deneme(10,5);
//     deneme(10,30);
// }

// function deneme($a , $b){
// echo "Hello World! ";
// echo $a*$b . "<br/>";

// echo "---------------------------- <br/><br/>";
// }


// //Parametreli Fonksiyonlar
//     topla(20,41);
//     carp(5,6);


//     function topla($x, $y){
//         echo  "toplam = ".$x+$y . "<br/>";
//         echo "---------------------------- <br/>";
//     }
//     function carp($x, $y){
//         echo "çarpma = ".($x*$y) . "<br/>";
//         echo "---------------------------- <br/>"; 
//     }


//     //Anonymus Fonsıyonlar

//     $b="hakan";
//     $a=function($isim) use($b){

//         echo "merhaba $isim"."".$b."<br/>";
//     };

//     $a("mert");

        
    

// //Arrow Function
// function name(){
//     return "hello!"; 
// }
    
// $a= function(){
//     echo "Merhaba!";
// };

// echo $a();

// $c = 10;
// $b = fn($a) => "kisa" . $a . $c; // $a ve $c string olarak birleştiriliyor.

// echo $b(5)."<br>"; // Çıktı: "kisa510"


// //Class İçinde Fonksiyon
// // class ogrenci{
// //     public $isim;
// //     public $soyisim="bulut";
// //     public $yas=12;

// //     function goster(){
// //         echo $this->isim="hakan";
// //     }
// // }

// // $a= new ogrenci();

// // $a->goster();


// class Ogrenci {
//     public $isim;
//     public $soyisim;
//     public $yas;
//     public $dersler = [];

//     function tanit() {
//         echo "Benim adım {$this->isim} {$this->soyisim}, yaşım {$this->yas}.<br>";
//     }

//     function dersEkle($dersadi, $not) {
//         $this->dersler[$dersadi] = $not;
//         echo "{$dersadi} dersi eklendi, not: {$not}.<br>";
//     }

//     function ortalamaHesapla() {
//         $toplam = array_sum($this->dersler);
//         $dersSayisi = count($this->dersler);
//         $ortalama = $dersSayisi > 0 ? $toplam / $dersSayisi : 0; // Doğru mantık kontrolü
//         echo "Not Ortalamam: {$ortalama}.<br>";
//     }
// }

// // Sınıfın dışına geçiyoruz
// $ogrenci = new Ogrenci();
// $ogrenci->isim = "Ahmet";
// $ogrenci->soyisim = "Kaya";
// $ogrenci->yas = 18;

// $ogrenci->tanit();
// $ogrenci->dersEkle("Matematik", 85);
// $ogrenci->dersEkle("Türkçe", 90);
// $ogrenci->ortalamaHesapla();

//Class içinde fonksiyon
 
class ogrenci{
    public $isim;
    public $soyisim="bulut";
    public $yas=12;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
    function goster($deger){
        echo $this->isim=$deger;
        return 10;
    }

}


$a= new ogrenci();
$a->goster("ayse");

?>