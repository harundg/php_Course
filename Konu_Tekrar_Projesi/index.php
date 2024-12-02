<?php
session_start();

// Ürünleri tanımla
$products = [
    ['id' => 1, 'name' => 'Phone', 'price' => 2000],
    ['id' => 2, 'name' => 'Laptop', 'price' => 5000],
    ['id' => 3, 'name' => 'Tablet', 'price' => 1500]
];

// Sepeti başlat (eğer daha önce başlatılmamışsa)
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Sepete ürün ekle
if (isset($_GET['add_to_cart'])) {
    $product_id = $_GET['add_to_cart'];

    // Ürünü bul
    foreach ($products as $product) {
        if ($product['id'] == $product_id) {
            // Ürün zaten sepette varsa, miktarını arttır
            if (isset($_SESSION['cart'][$product_id])) {
                $_SESSION['cart'][$product_id]['quantity']++;
            } else {
                // Ürün ilk kez sepete ekleniyorsa, miktar 1 olarak başlat
                $_SESSION['cart'][$product_id] = [
                    'name' => $product['name'],
                    'price' => $product['price'],
                    'quantity' => 1
                ];
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <?php echo $product['name']; ?> - <?php echo $product['price']; ?> TL
                <a href="?add_to_cart=<?php echo $product['id']; ?>">Add to Cart</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <hr>

    <h2>Cart</h2>
    <ul>
        <?php foreach ($_SESSION['cart'] as $item): ?>
            <li>
                <?php echo $item['name']; ?> - <?php echo $item['price']; ?> TL
                <?php if ($item['quantity'] > 1): ?>
                    (<?php echo $item['quantity']; ?>)
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <h3>Total: <?php echo getTotalPrice($_SESSION['cart']); ?> TL</h3>

    <a href="sepet.php">Go to Cart</a>

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
