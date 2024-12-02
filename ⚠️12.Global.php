<?php
$a= 10;
$c= 34;
function yaz($b){
global $a,$c;
return $a+$c;
    
}
echo (yaz(20));




?>      