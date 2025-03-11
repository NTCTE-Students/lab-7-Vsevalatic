<?php
$cookie_country = 'Russia';

setcookie('Russia', $cookie_country, time() + 3600, '/'); // 3600 секунд = 1 час

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
    <p>Ваша страна: <?php echo $cookie_country; ?></p>
</body>
</html>