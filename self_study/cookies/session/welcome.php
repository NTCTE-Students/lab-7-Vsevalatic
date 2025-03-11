<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {

    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добро пожаловать!</title>
</head>
<body>
    <h1>Добро пожаловать, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Вы успешно авторизовались.</p>
    <a href="logout.php">Выйти</a>
</body>
</html>
