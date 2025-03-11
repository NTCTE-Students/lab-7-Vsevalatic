<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['theme']) && $_POST['theme'] == 'dark') {
        setcookie('theme', 'dark', time() + 3600, '/'); 
    } else {
        setcookie('theme', 'light', time() + 3600, '/'); 
    }
}


$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light'; 

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?php echo $theme == 'dark' ? '#333' : '#f0f0f0'; ?>;
            color: <?php echo $theme == 'dark' ? '#f0f0f0' : '#333'; ?>;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>Выберите тему:</h1>
    <form method="POST">
        <label>
            <input type="radio" name="theme" value="light" <?php echo $theme == 'light' ? 'checked' : ''; ?>> Светлая
        </label>
        <label>
            <input type="radio" name="theme" value="dark" <?php echo $theme == 'dark' ? 'checked' : ''; ?>> Тёмная
        </label>
        <button type="submit">Сохранить</button>
    </form>

    <p>Текущая тема: <?php echo $theme == 'dark' ? 'Тёмная' : 'Светлая'; ?></p>
</body>
</html>