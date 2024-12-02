<?php
session_start();

// Sepetten ürün çıkar
if (isset($_GET['remove_from_cart'])) {
    $product_id = $_GET['remove_from_cart'];

    // Sepetten çıkar
    unset($_SESSION['cart'][$product_id]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>My Cart</h1>

    <ul>
        <?php if (empty($_SESSION['cart'])): ?>
            <li>Your cart is empty.</li>
        <?php else: ?>
            <?php foreach ($_SESSION['cart'] as $product_id => $item): ?>
                <li>
                    <?php echo $item['name']; ?> - <?php echo $item['price']; ?> TL
                    (<?php echo $item['quantity']; ?>)
                    <a href="?remove_from_cart=<?php echo $product_id; ?>">Remove</a>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>

    <h3>Total: <?php echo getTotalPrice($_SESSION['cart']); ?> TL</h3>

    <a href="index.php">Continue Shopping</a>

</body>
</html>

<?php
// Toplam fiyatı hesaplayan fonksiyon
function getTotalPrice($cart) {
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;
}
?>
