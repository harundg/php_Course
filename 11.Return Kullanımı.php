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




?>