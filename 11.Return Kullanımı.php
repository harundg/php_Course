<?php
$a=15;
echo"global sayi=".$a."<br/>";

function yazi($a,$b){


    return $a*$b;
}
echo "yerel sayi=".yazi(5,20)."<br/>";




//Return Type
function name(){
    return "John Doe";
}
echo(name()); 
echo "<br>";



function puanKontrol($puan){
if($puan<50){
    return "kaldı";
}
    if($puan>=50 && $puan<70){
    return "geçer";
  }

   if($puan>=70 && $puan<90){
    return "iyi";
} 
  

    return "Pekiyi";

}
$puanc=puanKontrol(90);
echo "Puanımız: $puanc";



?>