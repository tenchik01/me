<?php
$fileList = glob('uploads/*.json');
$num = $_GET['test'];
$num = (int)$num;
$num++;
foreach ($fileList as $key => $file){
    if ($key == $_GET['test']){
        $fileTest = file_get_contents($fileList[$key]);
        $decodeFile = json_decode($fileTest, true);
    }
}
$countAnswer = 0;
$countQuestions = 0;
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Тест: <?=$num;?></title>
</head>
<body>
<div role="alert">
<?php
    if (!empty($_POST) > 0){
        foreach ($_POST as $key => $val){
            $quest = str_replace("_", " ", $key);
            $expAnswer = explode("/", $quest);
            if ($val == true) {
                $countAnswer++;
                $countQuestions++;
                echo "<p>Вопрос: " . $expAnswer[0] . "</p>";
                echo "<p style='color: black;'>Ответ: Правильный" . "</p><br>";
            }
            else{
                $countQuestions++;
                echo "<p>Вопрос: " . $expAnswer[0] . "</p>";
                echo "<p style='color: red;'>Ответ: Не верный" . "</p><br>";
            }
        }
    ?>
<p><a href="list.php">Выбрать тест</a></p>
<p><a href="admin.php">Загрузить тест</a></p>
<?php } else {?>
<form method="post" style="margin-top: 20px">
    <?php
    for($i=0; $i<count($decodeFile); $i++) {
        $question = $decodeFile[$i]['question'];
        $answers = $decodeFile[$i]['answers'];
   ?>
    <fieldset style="margin: 20px 0">
        <legend><?=$question?></legend>
        <?php foreach ($answers as $key => $val) : ?>
            <label><input type="radio" name="<?=$question?>" value="<?=$val['result'];?>"> <?=$val['answer'];?></label><br>
        <?php endforeach; ?>
    </fieldset>

    <?php } ?>

    <input type="submit" value="Отправить">
</form>

    <br><br>
    <p><a href="list.php">Выбрать тест</a></p>
    <p><a href="admin.php">Загрузить тест</a></p>

<?php } ?>
</body>
</html>