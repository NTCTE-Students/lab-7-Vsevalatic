<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];


    if ($username == 'student' && $password == 'password123') {

        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;

        header('Location: welcome.php');
        exit(); 
    } else {
        $error = "Неверное имя пользователя или пароль.";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<body>
    <h1>Форма авторизации</h1>

    <?php

    if (isset($error)) {
        echo "<p style='color: red;'>$error</p>";
    }
    ?>

    <form method="POST">
        <label for="username">Имя пользователя:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Войти</button>
    </form>
</body>
</html>
