<?php
session_start();

$books = [
    ['id' => 1, 'title' => 'PHP Basics', 'author' => 'John Doe ', 'price' => 50],
    ['id' => 2, 'title' => 'Advanced PHP', 'author' => 'Jane Smith ', 'price' => 75],
    ['id' => 3, 'title' => 'PHP and MySQL', 'author' => 'David Roe ', 'price' => 100],
];
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="/Konu Tekrar Projesi/style copy.css">
</head>

<body>
    <h1>Kitap Listesi</h1>


    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <strong><?php echo $book['title']; ?></strong>
                <?php echo $book['author']; ?>
                <?php echo $book['price']; ?> TL

                <a href="oduncalma copy.php?book_id=<?php echo $book['id']; ?>">Ödünç Al</a>
            </li>
        <?php endforeach; ?>


        </li>
        <a href="sepet copy.php">Sepete git</a>



    </ul>
</body>

</html>