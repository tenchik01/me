<?php
$fileList = glob('uploads/*.json');
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 7</title>
</head>
<body>
<div class="alert alert-success" role="alert">
    <?php
        foreach ($fileList as $key => $file) 
        {
            $fileTest = file_get_contents($file);
            $decodeFile = json_decode($fileTest, true);
            foreach ($decodeFile as $test) 
            {
                $question = $test['question'];
                echo "<ul>";
                echo "<li>";
                echo "<a href=\"test.php?test=$key\">$question</a>";
                echo "</li>";
                echo "</ul>";
            }
        }
    ?>
    <ul>
        <li>
            <a href="admin.php">Загрузить тест</a>
        </li>
        <li>
            <a href="list.php">Выбрать</a>
        </li>
    </ul>
</div>
</body>
</html>
