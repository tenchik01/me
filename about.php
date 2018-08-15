<?php
    $name = "Юрий Тен";
    $age = 25;
    $email = "yt1992@mail.com";
    $city = "Москва";
    $about = "Обучаюсь в Нетологии, специальность: WEB-разработчик";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "$name - $about" ?></title>
	<style>
	 .personal_data { 
		width: 200px;
		color: blue; 
	 }
    </style>
    <meta name="description" content="Урок №1">
</head>
<body>
<h1>Моя страница</h1>
	<table>
		<tr>
			<td class="personal_data">Имя:</td>
			<td><?= $name ?></td>
		</tr>
		<tr>
			<td class="personal_data">Возраст:</td>
			<td><?= $age ?></td>
		</tr>
		<tr>
			<td class="personal_data">Адрес электронной почты:</td>
			<td><?= $email ?></td>
		</tr>
		<tr>
			<td class="personal_data">Город:</td>
			<td><?= $city ?></td>
		</tr>
		<tr>
			<td class="personal_data">Обо мне:</td>
			<td><?= $about ?></td>
		</tr>
	</table>
</body>
</html>
