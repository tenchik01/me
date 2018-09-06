<?php
require_once "class.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 8 </title>
</head>
<body>
    <div role="alert">
        <h3>Распишите своё понимание инкапсуляции. Представьте, что вас спрашивают на собеседовании.</h3>
        <p>Инкапсуляция - это механизм, который объединяет 
        параметры или значения, и проводит манипуляции с ними, защищая их при этом 
        от внешнего вмешательства или неправильного использования. 
        Например, у компьютера есть устройства ввода и вывода информации: клавиатура, мышка, монитор и т.д. это все в 
        прямом доступе пользователя, но так же есть материнская плата, жесткий диск, кулеры т.д. механизмы которые 
        выполняют свои функции автономно, и необходимы для выполнения целей пользователя.</p>
        <h3>Сформулируйте своими словами в чём плюсы объектов, а в чём минусы?</h3>
        <h4>Плюсы</h4>
        <ul>
            <li>Повышение производительности работы над кодом </li>
            <li>Удобно при разработке в команде</li>
            <li>Защищает наиболее критичные данные от несанкционированного доступа</li>
        </ul>
    
        <h4>Минусы</h4>
    
        <ul>
            <li> Необходимо много чего знать ( классы, наследование и тд), что приводит к значительной потери времени на изучение материала </li>
        </ul>

        <?php
        echo '<h3>Список автомобилей:</h3>';
        $toyota-> getInfo ();
        $kia-> getInfo ();
        echo '<h3>Список TV</h3>';
        $samsung-> getInfo ();
        $lg-> getInfo ();
        echo '<h3>Список ручек:</h3>';
        $w1-> getInfo ();
        $w2-> getInfo ();
        echo '<h3>Породы уток:</h3>';
        $duck1-> getInfo ();
        $duck2-> getInfo ();
        echo '<h3>Список покупок:</h3>';
        $cake-> getInfo ();
        $coffee-> getInfo ();
        ?>
    </div>
</body>
</html>