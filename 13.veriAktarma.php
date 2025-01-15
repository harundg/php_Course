<?php
$mail= $_POST["mail"];   
$pass= $_POST["pass"];
$file= $_FILES["file"];

echo "Mail=" . $mail . "</br> Password=" . $pass;

print_r($file);

?>