<?php

session_start();

if (!isset($_SESSION['first_visit_time'])) {
    $_SESSION['first_visit_time'] = date('Y-m-d H:i:s'); 
}

$_SESSION['last_visit_time'] = date('Y-m-d H:i:s');

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информация о посещениях</title>
</head>
<body>
    <h1>Информация о посещениях</h1>

    <p>Первое посещение: <?php echo $_SESSION['first_visit_time']; ?></p>
    <p>Последнее посещение: <?php echo $_SESSION['last_visit_time']; ?></p>

</body>
</html>
