<?php
echo "Задача №1 --- Решение:<br>";
	//Устанавливаем доступы к базе данных:
    $host = '127.0.0.1'; //имя хоста, на локальном компьютере это localhost
    $user = 'root'; //имя пользователя, по умолчанию это root
    $password = 'root'; //пароль, по умолчанию пустой
    $db_name = 'test'; //имя базы данных

//Соединяемся с базой данных используя наши доступы:
    $link = mysqli_connect($host, $user, $password, $db_name);

//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
    mysqli_query($link, "SET NAMES 'utf8'");

//Формируем тестовый запрос:
    $query = "SELECT * FROM user WHERE id > 0";

//Делаем запрос к БД, результат запроса пишем в $result:
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
//Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
    var_dump($data);
echo "<br><br>";
?>