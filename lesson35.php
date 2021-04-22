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
echo "Задача №1-8 --- Решение:<br>";
//$query = "SELECT * FROM workers WHERE id = 3";
//$query = "SELECT * FROM workers WHERE salary = 1000";
//$query = "SELECT * FROM workers WHERE age = 23";
//$query = "SELECT * FROM workers WHERE salary > 400";
//$query = "SELECT * FROM workers WHERE salary >= 500";
//$query = "SELECT * FROM workers WHERE salary <> 500";
//$query = "SELECT * FROM workers WHERE salary <= 900";
$query = "SELECT * FROM workers WHERE name = 'Вася'";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );

//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
//Массив результата лежит в $data, выведем его на экран:
echo "<pre>";var_dump($data);echo "</pre>";
echo "<br><br>";
?>

<?php
echo "Задача №9-16 --- Решение:<br>";
//$query = "SELECT * FROM workers WHERE age > 25 AND age <= 28";
//$query = "SELECT * FROM workers WHERE name = 'Петя'";
//$query = "SELECT * FROM workers WHERE name = 'Вася' OR name = 'Петя'";
//$query = "SELECT * FROM workers WHERE name <> 'Петя'";
//$query = "SELECT * FROM workers WHERE age = 27 OR salary = 1000";
//$query = "SELECT * FROM workers WHERE (age >= 23 AND age < 27) OR salary = 1000";
//$query = "SELECT * FROM workers WHERE (age > 23 AND age < 27) OR (salary >= 400 AND salary <= 1000)";
$query = "SELECT * FROM workers WHERE age = 27 OR salary <> 400";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );

//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
//Массив результата лежит в $data, выведем его на экран:
echo "<pre>";var_dump($data);echo "</pre>";
echo "<br><br>";
?>

<?php
echo "Задача №17,18,19 --- Решение:<br>";
//$query = "INSERT INTO workers SET name = 'Никита', age = 27, salary = 300";
//$query = "INSERT INTO workers (name, salary) VALUES ('Светлана', 1000)";
//$query = "INSERT INTO workers (name, salary, age) VALUES ('Ярослава', 1200, 30), ('Петр', 1000, 31)";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
echo "<br><br>";
?>

<?php
echo "Задача №20,21,22 --- Решение:<br>";
//$query = "DELETE FROM workers WHERE id = 7";
//$query = "DELETE FROM workers WHERE name = 'Коля'";
//$query = "DELETE FROM workers WHERE age = 23";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
echo "<br><br>";
?>

<?php
echo "Задача №23-27 --- Решение:<br>";
//$query = "UPDATE workers SET salary=200 WHERE name='Вася'";
//$query = "UPDATE workers SET age=35 WHERE id=4";
//$query = "UPDATE workers SET salary=700 WHERE salary=500";
//$query = "UPDATE workers SET age=23 WHERE id>2 AND id <=5";
//$query = "UPDATE workers SET name='Женя', salary=900 WHERE name='Вася'";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
echo "<br><br>";
?>