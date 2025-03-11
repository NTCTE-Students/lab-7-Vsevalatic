<?php
if (isset($_COOKIE['session_id'])) {
    setcookie('session_id', '', time() - 3600, '/');
    echo "Кука 'session_id' удалена.";
} else {
    echo "Кука 'session_id' не существует.";
}

if (!isset($_COOKIE['session_id'])) {
    echo "<br>Кука 'session_id' успешно удалена.";
} else {
    echo "<br>Кука 'session_id' все еще существует.";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Страница удаления куки</h1>
    <p>Если кука с именем 'session_id' существовала, она была удалена.</p>
</body>
</html>
