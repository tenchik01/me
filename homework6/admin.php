<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_FILES['testfile'])) {
    
    $fileName = $_FILES['testfile']['name'];
    $jsonDir = 'uploads/';
    $info = pathinfo($jsonDir . $fileName);
    
    if($info['extension']==='json') {
    $tmpFile = file_get_contents($_FILES['testfile']['tmp_name']);
    $decode = json_decode($tmpFile);
    
    if ($_FILES['testfile']['error'] == UPLOAD_ERR_OK && move_uploaded_file($_FILES['testfile']['tmp_name'], "$jsonDir/$fileName"));
    echo "Файл с тестами успешно загружен";
    header('Location: http://homework6/list.php'); 
    }
    
    else{
    echo "Не удалось загрузить файл с тестами. Структура не подходит";
    
    }}
    
?> 

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Загрузка теста</title>
</head>
<body>
    <div role="alert">
        <form method="post" enctype=multipart/form-data>
            <input type=file name=testfile>
            <input type=submit>
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
