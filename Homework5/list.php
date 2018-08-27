<?php
$fileList = glob('uploads/*.json');
$num = 0;
?>

<!Doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание №5</title>
</head>
<body>
<div role="alert">
    <?php
        foreach ($fileList as $key => $file) 
        {
            $num++;
            $fileTest = file_get_contents($file);
            $decodeFile = json_decode($fileTest, true);
                echo "<ul class=\"nav\"><li class=\"nav-item\"><a class=\"nav-link\" href=\"test.php?test=$key\">Тест №: $num</a></li></ul>";
        }
    ?>

    <ul>
        <li>
            <a href="admin.php">Загрузить тест</a>
        </li>
        <li>
            <a href="list.php">Выбрать тест</a>
        </li>
    </ul>
</div>
</body>
</html>