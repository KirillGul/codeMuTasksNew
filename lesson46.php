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

<?php echo 'Задача №1 --- Решение:<br>';
//задачи на IN
//$query = "SELECT * FROM `workers` WHERE id IN (1,2,3,5,14)";
//$query = "SELECT * FROM `workers` WHERE login IN ('eee', 'bbb', 'zzz')";
//$query = "SELECT * FROM `workers` WHERE id IN (1,2,3,7,9) AND login IN ('user', 'admin', 'ivan') AND salary > 300";

//задачи на BETWEEN
//$query = "SELECT * FROM `workers` WHERE salary BETWEEN 100 AND 1000";
//$query = "SELECT * FROM `workers` WHERE (id BETWEEN 3 AND 10) AND (salary BETWEEN 300 AND 500)";

//задачи на AS
//$query = "SELECT id AS userId, login AS userLogin, salary AS userSalary FROM `workers`";

//задачи на DISTINCT
//$query = "SELECT DISTINCT salary FROM `workers`";

//задачи на MIN и MAX
//$query = "SELECT MIN(salary) FROM `workers`";
//$query = "SELECT MAX(salary) FROM `workers`";

//задачи на SUM
//$query = "SELECT SUM(salary) FROM `workers`";
//$query = "SELECT SUM(salary) FROM `workers` WHERE age BETWEEN 21 AND 25";
//$query = "SELECT SUM(salary) FROM `workers` WHERE id IN(1,2,3,5)";

//задачи на AVG
//$query = "SELECT AVG(salary) FROM `workers`";
//$query = "SELECT AVG(age) FROM `workers`";

//задачи на NOW, CURRENT_DATE, CURRENT_TIME
//$query = "SELECT * FROM `workers` WHERE date > DATE()";
//$query = "INSERT INTO `workers` SET date = DATE()";
//$query = "INSERT INTO `workers` SET date = CURRENT_DATE()";
//$query = "INSERT INTO `workers` SET date = CURRENT_TIME()";

//задачи на работу с частью даты (SECOND, MINUTE, HOUR, DAY, MONTH, YEAR, DAYOFWEEK, WEEKDAY)
//$query = "SELECT * FROM `workers` WHERE YEAR(date) = 2021";
//$query = "SELECT * FROM `workers` WHERE MONTH(date) = 04";
//$query = "SELECT * FROM `workers` WHERE DAY(date) = 03";
//$query = "SELECT * FROM `workers` WHERE DAY(date) = 04 AND MONTH(date) = 04";
//$query = "SELECT * FROM `workers` WHERE DAY(date) IN (1,7,11,12,15,19,21,29)";
//$query = "SELECT * FROM `workers` WHERE DAYOFWEEK(date) = 3";
//$query = "SELECT * FROM `workers` WHERE YEAR(date) = 2016 AND DAY(date) BETWEEN 1 AND 10";
//$query = "SELECT * FROM `workers` WHERE DAY(date) < MONTH(date)";
//$query = "SELECT EXTRACT(DAY FROM date) AS day, 
//EXTRACT(MONTH FROM date) AS month, 
//EXTRACT(YEAR FROM date) AS year FROM workers";
//$query = "SELECT WEEKDAY(NOW()) as today FROM workers";

//задачи на EXTRACT, DATE
//$query = "SELECT EXTRACT(DAY FROM date) AS day, 
//EXTRACT(MONTH FROM date) AS month, 
//EXTRACT(YEAR FROM date) AS year FROM workers";
//$query = "SELECT DATE(date) FROM workers";

//задачи на DATE_FORMAT
//$query = "SELECT DATE_FORMAT(date, '%d.%m.%Y') FROM workers";
//$query = "SELECT DATE_FORMAT(date, '%Y%%.%d.%m.') FROM workers";

//задачи на INTERVAL, DATE_ADD, DATE_SUB
//$query = "SELECT date + INTERVAL 1 DAY FROM workers";
//$query = "SELECT date - INTERVAL 1 DAY FROM workers";
//$query = "SELECT date + INTERVAL '1-2' DAY_HOUR FROM workers";
//$query = "SELECT date + INTERVAL '1-2' YEAR_MONTH FROM workers";
//$query = "SELECT date + INTERVAL '1-2-3-5' DAY_SECOND FROM workers";
//$query = "SELECT date + INTERVAL '2-3-5' HOUR_SECOND FROM workers";
//$query = "SELECT date + INTERVAL '1' DAY - INTERVAL '2' HOUR FROM workers";
//$query = "SELECT date + INTERVAL '1' DAY - INTERVAL '2-3' HOUR_MINUTE FROM workers";

//задачи на математические операции
//$query = "SELECT 3 as res FROM workers";
//$query = "SELECT 'eee' as res FROM workers";
//$query = "SELECT 3 FROM workers";
//$query = "SELECT SUM(age) + SUM(salary) as res FROM workers";
//$query = "SELECT (salary-age) as res FROM workers";
//$query = "SELECT (age*salary) as res FROM workers";
//$query = "SELECT ((age+salary)/2) as res FROM workers";
//$query = "SELECT date FROM workers WHERE (DAY(date)+MONTH(date))<10";

//задачи на LEFT, RIGHT, SUBSTRING
//$query = "SELECT LEFT(description, 5) FROM workers";
//$query = "SELECT RIGHT(description, 5) FROM workers";
//$query = "SELECT SUBSTRING(description, 2, 10) FROM workers";

//задачи на UNION
//$query = "SELECT name FROM categor UNION SELECT name FROM sub_category";

//задачи на CONCAT, CONCAT_WS
//$query = "SELECT CONCAT(salary, age) as res FROM workers";
//$query = "SELECT CONCAT(salary, age, '!!!') as res FROM workers";
//$query = "SELECT CONCAT_WS('-', salary, age) as res FROM workers";
//$query = "SELECT CONCAT_WS('', LEFT(login, 5), '...') as res FROM workers";

//задачи на GROUP BY
//$query = "SELECT age, MIN(salary) as min FROM workers GROUP BY age";
//$query = "SELECT MAX(age), salary as min FROM workers GROUP BY salary";

//задачи на GROUP_CONCAT
//$query = "SELECT DISTINCT age, GROUP_CONCAT(id SEPARATOR '-') as res FROM workers GROUP BY age";

//задачи на подзапросы
//$query = "SELECT * FROM workers WHERE salary >(SELECT AVG(salary) FROM workers)";
//$query = "SELECT * FROM workers WHERE age < (SELECT AVG(salary)/2*3 FROM workers)";
//$query = "SELECT * FROM workers WHERE salary = (SELECT MIN(salary) FROM workers)";
//$query = "SELECT * FROM workers WHERE salary = (SELECT MAX(salary) FROM workers)";
//$query = "SELECT MAX(salary) AS max FROM workers WHERE age = 25";
//$query = "SELECT (SELECT (MAX(age) - MIN(age))/2 FROM workers) AS avg";
//$query = "SELECT (SELECT (MAX(age)-MIN(age))/2 FROM workers) AS avg FROM workers WHERE age = 25";


$result = mysqli_query($link, $query) or die( mysqli_error($link) );
//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
//$row = mysqli_fetch_assoc($result);
//Массив результата лежит в $data, выведем его на экран:
echo "<pre>";var_dump($data);echo "</pre>";
echo '<br><br>'; ?>