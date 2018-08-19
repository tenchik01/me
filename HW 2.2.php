<?php
$forecast = file_get_contents('https://samples.openweathermap.org/data/2.5/weather?q=London,uk&appid=b6907d289e10d714a6e88b30761fae22');
$weather = json_decode($forecast);
?>

<!Doctype HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание №2</title>
	<style>
        h1 { 
		  color: #0000FF; 
	   	}
		p {
			font-size: 110%;
			color: #800080; 
		}
	</style>
</head>
<body>
	<div>
		<h1>Данные о погоде в городе: <?= $weather->name ?></h1>
		<p>Текущая температура <?= $weather->name ?> : <?= $weather->main->temp ?> &deg; F. </p>
		<p>Скорость ветра: <?= $weather->wind->speed ?> м/с.</p>
	</div>
</body>
</html>