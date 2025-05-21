<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {


            color: whitesmoke;
            font-size: 17px;
        }
    </style>


    <?php
    // Class içinde fonksiyon
    echo "<h3>Class İçinde Fonksiyon Kullanımı</h3>";
    class ogrnc
    {
        public $i = "haurn";
        public $k = "yılmaz";
        function selamla()
        {
            echo "Merhaba " . $this->i;
            echo $this->k . "<br>";
        }
    }
    $ogr = new ogrnc();
    $ogr->selamla();
    echo "<br>";

    // Fonksiyonlu Class Örneği
    echo "<h3>Class Yapısı - Fonksiyonla Bilgi Gösterimi</h3>";
    class Ogrenci2
    {
        public $ad = "Harun ";
        public $soyisim = "Yılmaz";
        public $yas = "17";
        function bilgiler()
        {
            echo "İsim ve Soyadım: " . $this->ad . $this->soyisim . "<br>";
            echo "Yaşım: " . $this->yas;
        }
    }
    $ogrncbilgi = new Ogrenci2();
    $ogrncbilgi->bilgiler();
    echo "<br>";



    class kullanici
    {
        public $ad = "Muhammed Mustafa";
        public $yas = 61;

        function BilgileriGoster()
        {
            if ($this->yas <= 18) {
                echo "Çocuk";
            } else {
                echo "Yetişkin";
            }
        }
    }

    $kullanici = new kullanici;
    $kullanici->BilgileriGoster();
    echo "<br>";



    class app
    {
        public $name = "Harun";
        public $age = 17;
        function infopreview()
        {
            if ($this->age < 18) {
                echo "Name=$this->name, Adult or child? Children";
            } else {
                echo "Name=$this->name, Adult or child? Adult";
            }
        }
    }
    $app = new app();
    $app->infopreview();
    echo "<br>";
    echo "<br>";


    class book
    {
        public $bookName = "Harry Potter";
        public $numberOfPages = 303;

        function bookPageInfo()
        {
            echo "Book Name:$this->bookName" . "<br>";
            echo "Number Of Page: $this->numberOfPages" . "<br>";
            if ($this->numberOfPages > 300) {
                echo "Status: Long Book" . "<br>";
            } else {
                echo "Status: Short Book" . "<br>";
            }
        }
    }
    $book = new book();
    $book->bookPageInfo();


    ?>




</body>

</html>