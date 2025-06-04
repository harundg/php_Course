<?php

include '../PhpCourse/13.sayfalArasıVeriGonderme.php'; // Dosya bulunamazsa sadece uyarı verir, kod çalışmaya devam eder.
echo "Kod çalışmaya devam ediyor.";


    
require '../PhpCourse/13.sayfalArasıVeriGonderme.php'; // Dosya bulunamazsa kod burada durur ve sayfa patlar.





include_once '../PhpCourse/13.sayfalArasıVeriGonderme.php'; // Dosya bir kez dahil edilir.
include_once '../PhpCourse/13.sayfalArasıVeriGonderme.php'; // Tekrar çağrılsa bile eklenmez.
require_once '../PhpCourse/13.sayfalArasıVeriGonderme.php'; // Dosya bir kez dahil edilir.Tekrar çağrılsa bile eklenmez.
?>



