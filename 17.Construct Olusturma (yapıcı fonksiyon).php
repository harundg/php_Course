<?php

class ogrenci {
    public $isim;
    public $soyisim;
    public $yas;

    function __construct($isim, $soyad, $yas) {
        $this->isim = $isim;
        $this->soyisim = $soyad;
        $this->yas = $yas;

        echo "İsim: " . $this->isim . "<br/>Soyisim: " . $this->soyisim . "<br/>Yaş: " . $this->yas;
    }
}

// Nesne oluşturma
$sinif = new ogrenci("Orhan", "Bayrak", 21);
?>


