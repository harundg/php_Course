<?php
class ogrenci{
    public $isim="hakan";
    public $soyisim="bulut";
    public $yas=12;

    function __construct(){
        echo "yapici function calisti... <br/>";
    }


   function __destruct(){
    echo "yapici function calisti... <br/>";
   }



}

$a= new ogrenci();
?>