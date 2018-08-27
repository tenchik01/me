<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_FILES['testfile'])){
    $fileName = $_FILES['testfile']['name'];
    $jsonDir = 'uploads/';
    $info = pathinfo($jsonDir . $fileName);
    
    if($info['extension']==='json'){
        $tmpFile = file_get_contents($_FILES['testfile']['tmp_name']);
        $decode = json_decode($tmpFile);
        
        if($_FILES['testfile']['error'] !== UPLOAD_ERR_OK){
            echo 'Ошибка, файл не был загружен.';
        }
        elseif(move_uploaded_file($_FILES['testfile']['tmp_name'], "$jsonDir/$fileName")){
            echo "Поздравляем!!! Файл загружен.";
        }
        
    }
    else{
        echo 'Загружаются файлы только с расширением JSON.';
    }
}
    
?>  

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание №5</title>
</head>
<body>
    <div role="alert">
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="testfile">
            <input type="submit">
        </form>
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