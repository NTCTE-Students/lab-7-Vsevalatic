<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['font_size'])) {
        setcookie('font_size', $_POST['font_size'], time() + 3600, '/');
    }

    if (isset($_POST['layout'])) {
        setcookie('layout', $_POST['layout'], time() + 3600, '/');
    }
}

$font_size = isset($_COOKIE['font_size']) ? $_COOKIE['font_size'] : '16px';
$layout = isset($_COOKIE['layout']) ? $_COOKIE['layout'] : 'default';

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Настройки страницы</title>
    <style>
        body {
            font-size: <?php echo $font_size; ?>;
            <?php if ($layout == 'grid'): ?>
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 10px;
            <?php else: ?>
                display: block;
            <?php endif; ?>
        }
    </style>
</head>
<body>
    <h1>Настройки страницы</h1>

    <p>Текущий размер шрифта: <?php echo $font_size; ?></p>
    <p>Текущий макет: <?php echo ucfirst($layout); ?></p>

    <form method="POST">
        <h2>Выберите размер шрифта:</h2>
        <label>
            <input type="radio" name="font_size" value="16px" <?php echo $font_size == '16px' ? 'checked' : ''; ?>> 16px
        </label>
        <label>
            <input type="radio" name="font_size" value="20px" <?php echo $font_size == '20px' ? 'checked' : ''; ?>> 20px
        </label>
        <label>
            <input type="radio" name="font_size" value="24px" <?php echo $font_size == '24px' ? 'checked' : ''; ?>> 24px
        </label>

        <h2>Выберите макет:</h2>
        <label>
            <input type="radio" name="layout" value="default" <?php echo $layout == 'default' ? 'checked' : ''; ?>> Стандартный
        </label>
        <label>
            <input type="radio" name="layout" value="grid" <?php echo $layout == 'grid' ? 'checked' : ''; ?>> Сетка
        </label>

        <br><br>
        <button type="submit">Сохранить настройки</button>
    </form>
</body>
</html>
