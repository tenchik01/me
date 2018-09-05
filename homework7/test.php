<?php
$fileList = glob('uploads/*.json');
$test = [];
foreach ($fileList as $key => $file) 
{
    if ($key == $_GET['test']) 
    {
        $fileTest = file_get_contents($fileList[$key]);
        $decodeFile = json_decode($fileTest, true);
        $test = $decodeFile;
    }
}
if (empty($test)) {
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
    exit;
}
$question = $test[0]['question'];
$answers[] = $test[0]['answers'];
$resultTrue = 0;
foreach ($answers[0] as $item) 
{
    if ($item['result'] === true) 
    {
        $resultTrue++;
    }
}
$postTrue = 0;
$postFalse = 0;
$testSuccess = 0;
if (!empty($_POST['formAnswer'])) 
{
    foreach ($_POST['formAnswer'] as $item) 
    {
        if ($answers[0][$item]['result'] === true) 
        {
            $postTrue++;
        }
        else
        {
            $postFalse++;
        }
    }
    if ($postTrue === $resultTrue && $postFalse === 0) 
    {
        $testSuccess++;
    }
    else
    {
        echo 'Вы ошиблись';
    }
}
if (!empty($_POST['nameForm']))
{
    $name = $_POST['nameForm'];
    $img = imagecreatetruecolor(800, 565);
    $backColor = imagecolorallocate($img, 255, 224, 221);
    $textColor = imagecolorallocate($img, 0, 0, 0);
    $imgBox = imagecreatefromjpeg('img.jpg');
    imagefill($img, 0, 0, $backColor);
    imagecopy($img, $imgBox, 0, 0, 0, 0, 800, 565);
    imagettftext($img, 30, 0, 200, 285, $textColor, './12188.otf', $name);
    imagettftext($img, 30, 0, 200, 328, $textColor, './12188.otf', 'Зачёт');
    imagettftext($img, 20, 0, 150, 480, $textColor, './12190.otf', date("d.m.y"));
    header('Content-Type: image/jpg');
    imagejpeg($img);
    imagedestroy($img);
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание №6</title>
</head>
<body>
    <div role="alert">
        <form method="post">
            <fieldset>
                <legend><?=$question?></legend>
                <?php foreach ($answers[0] as $key => $item) : ?>
                <label>
                    <input type="radio" name="formAnswer[]" value="<?=$key;?>"> <?=$item['answer'];?>
                    </label>
                <?php endforeach; ?>
            </fieldset>
            <input type="submit" value="Загрузить">
        </form>


        <?php if(!empty($testSuccess)): ?>
        <form method="post">
            <input type="text" name="nameForm" placeholder="Введите ваше имя">
            <button>Отправить</button>
        </form>
        <?php endif;?>

        <?php if (!empty($_POST['nameForm'])): ?>
            <img src="certificate.jpg">
        <?php endif;?>
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
