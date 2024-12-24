<?php

class ogrenci {
    public $isim;
    public $soyisim;
    public $yas;

    function __construct($isim, $soyisim, $yas) {
        $this->isim = $isim;
        $this->soyisim = $soyisim;
        $this->yas = $yas;

        echo "İsim: " . $this->isim . "<br/>Soyisim: " . $this->soyisim . "<br/>Yaş: " . $this->yas;
    }
}

// Nesne oluşturma
$sinif = new ogrenci("Orhan", "Bayrak", 21);
?>
