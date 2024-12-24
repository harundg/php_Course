<?php
session_start();


$books=[
1 =>['title' =>'PHP Basics','price' => 50],
2 =>['title' =>'Advanced PHP','price' => 75],
3 =>['title' =>'PHP and MySQL','price' => 100],
];

$cart = $_SESSION['cart'] ?? [];
$total_price  = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sepet</title>
    <link rel="stylesheet" href="style copy.css">
</head>
<body>
    <h1>Sepetiniz</h1>
    <ul>

<?php foreach($cart as $book_id): ?>
    <?php if (isset($books[$book_id])): ?>

        <li>
            <?php echo htmlspecialchars($books[$book_id]['title']);  ?>
<?php echo $books[$book_id]['price'];  ?> TL
</li>
<?php $total_price += $books[$book_id]['price']; ?> 
<?php else: ?>
    <li>Geçersiz kitap ID: <?php echo htmlspecialchars($book_id);?></li>
<?php endif; ?>
<?php endforeach; ?>

<h3>Toplam: <?php echo $total_price ?> TL</h3>
<a href="oturumkapatma copy.php">Oturumu Kapat</a>
<a href="sepetibosalt.php">Sepeti Boşalt</a>
    </ul>
</body>
</html>