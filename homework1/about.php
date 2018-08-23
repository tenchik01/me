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
	<hr>
	<?php
    $x = rand(0,100);
    echo '<h1>Число: ' . $x . '</h1>';
    $x1 = 1;
    $x2 = 1;
    echo '<ul>';
    while ($x<=100)
    {
        if ($x1 > $x) {
            echo '<p>Задуманное число НЕ входит в числовой ряд</p>';
            break;
        }
        if ($x1 === $x) {
            echo '<p>Задуманное число входит в числовой ряд</p>';
            break;
        }
        $x3 = $x1;
        $x1 = $x1 + $x2;
        $x2 = $x3;
        echo '<li>' . $x1 . '</li>';
    }
    echo '</ul>';
    ?>
</body>
</html>
