<?php
$json = file_get_contents(__DIR__ . '/contacts.json');
$data = json_decode($json, true);
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание №4: Список контактов</title>
    <style>
        table, td {
            padding: 5px 10px;
            border: 1px solid #000000;
            border-color: #008a77;
        }
		.header {
			color: blue;
		}
    </style>
</head>

<body>
    <h1>Список контактов</h1>

    <table>
        <thead>
            <tr>
                <td class="header">Имя</td>
                <td class="header">Фамилия</td>
                <td class="header">Адрес</td>
                <td class="header">Телефон</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $item){ ?>
            <tr>
                <td><?php echo $item['firstName']; ?></td>
                <td><?php echo $item['lastName']; ?></td>
                <td><?php echo $item['address']; ?></td>
                <td><?php echo $item['phoneNumber']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>


