<?php
require_once 'functions.php';
if (isAuth())
{
    location('admin');
}
if (!empty($_GET['user_name'])) {
    setcookie('user_name', $_GET['user_name']);
    location('list');
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 7</title>
	<style>
		.test {
			background-image: url(https://event-map.ru/sites/default/files/2017-12/onlain-universitet-netology.jpg);
			width: 1280px;
			height: 640px;
			background-size: cover;
			background-position: center;
		}
		
		.head {
			color: white;
			margin-left: 100px;
		}
		
		.form {
			color: white;
		}
		
		.nav {
			text-decoration: none;
			color: white;
		}
		
		.nav {
			border: 1px solid white; 
			display: inline-block;
			padding: 5px 5px;
			text-decoration: none; 
			color: white; 
			margin-left: 90px;
		}
		
		li {
			list-style-type: none;
		}
		
	</style>
</head>
<body>
    <div class="test" role="alert">
        <h2 class="head">Добро пожаловать в тесты</h2>
        <form method="get">
            <div class="form">
                <label>Введите ваше имя: </label>
                <input type="text" name="user_name">
                <input type="submit" value="Войти">
            </div>
        </form>
        <ul>
            <li>
                <a class="nav" href="login.php">Вход для Администратора</a>
            </li>
        </ul>
    </div>
</body>
</html>
