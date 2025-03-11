<?php

session_start();

$_SESSION['username'] = 'student';

if (isset($_SESSION['username'])) {
    echo "Значение переменной сессии 'username': " . $_SESSION['username'];
} else {
    echo "Переменная сессии 'username' не установлена.";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Инициализация сессии</title>
</head>
<body>
    <h1>Пример работы сессии</h1>
</body>
</html>
