<?php

session_start();

$kullanicilar= [];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $ad=$_POST["ad"];
    $yas=$_POST["yas"];
    $sehir=$_POST["sehir"];

  //Dizinin sonuna kullanıcıyı ekle (bir dizi olarak)
    $kullanicilar[]=["ad"=>$ad,"yas"=>$yas,"sehir"=>$sehir];
}
?>

<h2>Kullanıcı Bilgisi Ekle</h2>
<form method="post">
Ad: <input type="text" name="ad" required><br>
Yaş: <input type="number" name="yas" required><br>
Şehir: <input type="text" name="sehir" required><br>
<button type="submit">Kaydet</button>
</form>

<hr>

<h3>Eklenen Kullanıcılar</h3>
<ul>

<?php
foreach($kullanicilar as $k){
    echo "<li>"."Ad:".$k["ad"]." -  Yaş:".$k["yas"]." - Şehir:".$k["sehir"]."</li>"; 
}
?>
</ul>

