<?php
$fileList = glob('uploads/*.json');
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список тестов</title>
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
                echo "<ul class=\"nav\">";
                echo "<li class=\"nav-item\">";
                echo "<a class=\"nav-link\" href=\"test.php?test=$key\">$question</a>";
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
            <a href="list.php">Список тестов</a>
        </li>
    </ul>
</div>
</body>
</html>
