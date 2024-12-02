<?php

include 'gonder.php'; // Dosya bulunamazsa sadece uyarı verir, kod çalışmaya devam eder.
echo "Kod çalışmaya devam ediyor.";



require 'gonder.php'; // Dosya bulunamazsa kod burada durur ve çalışmaz.
echo "Bu satır çalışmaz çünkü require hata verdi.";




include_once 'gonder.php'; // Dosya bir kez dahil edilir.
include_once 'gonder.php'; // Tekrar çağrılsa bile eklenmez.
require_once 'gonder.php'; // Dosya bir kez dahil edilir.Tekrar çağrılsa bile eklenmez.
?>



