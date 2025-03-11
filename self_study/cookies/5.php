<?php
if (isset($_COOKIE['visited'])) {
    $visited = $_COOKIE['visited'] + 1;
} else {
    $visited = 1;
}

setcookie('visited', $visited, time() + 3600, '/'); // 3600 секунд = 1 час
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Добро пожаловать!</h1>
    <p>Вы посетили эту страницу <?php echo $visited; ?> раз.</p>
</body>
</html>