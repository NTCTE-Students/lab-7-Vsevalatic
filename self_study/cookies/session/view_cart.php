<?php

session_start();

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "Ваша корзина пуста.";
    exit();
}

if (isset($_GET['remove'])) {
    $index = $_GET['remove'];
    unset($_SESSION['cart'][$index]);

    $_SESSION['cart'] = array_values($_SESSION['cart']);
    echo "Товар удален из корзины.<br>";
}

echo "<h1>Содержимое вашей корзины</h1>";

echo "<ul>";

foreach ($_SESSION['cart'] as $index => $item) {
    echo "<li>";
    echo $item['product'] . " - " . $item['price'] . " руб.";
    echo " <a href='view_cart.php?remove=$index'>Удалить</a>";
    echo "</li>";
}
echo "</ul>";

echo "<br><a href='add_to_cart.php'>Добавить еще товары</a>";
?>
