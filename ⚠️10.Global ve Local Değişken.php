<?php
$a= 10;
echo"global sayı = ". $a . "<br/>";

goster();   
function goster(){
    $b=20;
    echo "fun içinde global sayı=". $GLOBALS['a'] ."<br/>";
    echo "yerel sayı=". $b . "<br/>";
}
echo "yerel sayi =  ". $b . "<br/>";


//CALISILACAK

?>a