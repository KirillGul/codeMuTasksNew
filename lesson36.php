<?php
	//Устанавливаем доступы к базе данных:
   $host = 'localhost'; //имя хоста, на локальном компьютере это localhost
   $user = 'root'; //имя пользователя, по умолчанию это root
   $password = ''; //пароль, по умолчанию пустой
   $db_name = 'test'; //имя базы данных

//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));

//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
mysqli_query($link, "SET NAMES 'utf8'")
?>

<?php
echo "Задача №1 --- Решение:<br>";
//$query = "SELECT * FROM workers WHERE name = 'Вася'";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );

//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
//Массив результата лежит в $data, выведем его на экран:
echo "<pre>";var_dump($data);echo "</pre>";
echo "<br><br>";
?>