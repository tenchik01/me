<?php
require_once 'functions.php';
if (isAuth())
{
    location('admin');
}
$errors = [];
if (isPost())
{
    if (login($_POST['login'], $_POST['password']))
    {
        location('admin');
    }else{
        $errors[] = 'Неверный логин и пароль';
    }
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 7</title>
 </head>
<body>
    <div class="alert alert-success" role="alert">
        <form method="POST">
            <div>
                <label for="login">Логин</label>
                <input name="login" id="login">
                <label for="password">Пароль</label>
                <input name="password" id="password">
                <input type="submit" value="Войти">
            </div>
        </form>
        <ul>
        <?php foreach ($errors as $error) : ?>
            <li><?=$error;?></li>
        <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>