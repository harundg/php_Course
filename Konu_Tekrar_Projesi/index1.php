<?php
session_start();

//Ürünleri tanımla

$products = [
    ['id' => 1, 'name' => 'Phone', 'price' => 2000],
    ['id' => 2, 'name' => 'Laptop', 'price' => 5000],
    ['id' => 3, 'name' => 'Tablet', 'price' => 1000]
];

//Sepeti Başlat
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

//Sepete Ürün Ekle
if (!isset($_GET['add_to_cart'])) {
    $product_id = $_GET['add_to_card'];


    //Ürünü Bul
    foreach($products as $product){
        if($product['id'] == $product_id){
//Ürün zaten sepette varsa ,miktarını  arttır
if(isset($_SESSION)['cart'][$product_id)){
    $_SESSION['cart'][$product_id]=[
'name'=>$product['name'],
'price'=>product['price'],
'quantity'=>1

    ];
}


        }
    }

}

