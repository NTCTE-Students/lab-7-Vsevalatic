<?php

session_start();

if (isset($_GET['product'])) {

    $product = $_GET['product'];
    $price = 100;

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    $_SESSION['cart'][] = array('product' => $product, 'price' => $price);

    echo "Товар '$product' добавлен в корзину.";
}

echo "<br><a href='view_cart.php'>Перейти к корзине</a>";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление товара</title>
</head>
<body>
    <h1>Добавить товар в корзину</h1>
    <p><a href="add_to_cart.php?product=Товар 1">Добавить Товар 1 в корзину</a></p>
    <p><a href="add_to_cart.php?product=Товар 2">Добавить Товар 2 в корзину</a></p>
    <p><a href="add_to_cart.php?product=Товар 3">Добавить Товар 3 в корзину</a></p>
</body>
</html>
