<?php
session_start();

if (isset($GET['book_id'])){
$book_id = $GET['book_id'];


if(!isset($_SESSION['cart'])){
$_SESSION['cart'] = [];
}


    if(!in_array($book_id, $_SESSION['cart']))
    $_SESSION['cart'] []= $book_id;
}

header("Location: sepet copy.php");
exit;

?>