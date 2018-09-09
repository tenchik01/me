<?php
//$pdo = new PDO("mysql:host=localhost;dbname=books;charset=utf8", "root", ""); 
$pdo = new PDO("mysql:host=localhost;dbname=global;charset=utf8", "yuten", "neto1844");
$sql = "SELECT * FROM books";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Домашнее задание 9</title>
	<style>
		.head {
			color: #0000ff;
			font-weight: 600;
		}
		table {
			border: 4px double black;
		}
	</style>
</head>
<body>
    <h1>Книги</h1>
    <br>
    <table class="table">
        <thead class="head">
            <tr>
                <td>Название</td>
                <td>Автор</td>
                <td>Год выпуска</td>
                <td>Жанр</td>
                <td>ISBN</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pdo->query($sql) as $row) : ?>
                <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['author'] ?></td>
                    <td><?php echo $row['year'] ?></td>
                    <td><?php echo $row['genre'] ?></td>
                    <td><?php echo $row['isbn'] ?></td>
                </tr>
            <<?php endforeach; ?>   
        </tbody>
    </table>
</body>
</html>
