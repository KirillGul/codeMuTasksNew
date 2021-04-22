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
echo "Задача №1,2 --- Решение:<br>";
if (isset($_GET['del_id'])) {
   $query = "DELETE FROM users WHERE id=".$_GET['del_id'];
   $result = mysqli_query($link, $query) or die( mysqli_error($link) );
}

$query = "SELECT * FROM users";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );

//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

$result = "<table>";
$result .= "<tr><td>ID</td><td>name</td><td>age</td><td>salary</td><td>удаление</td><td>редактирование</td></tr>";
foreach ($data as $row) {
   $result .= "<tr>";
   $result .= "<td>".$row['id']."</td>";
   $result .= "<td>".$row['name']."</td>";
   $result .= "<td>".$row['age']."</td>";
   $result .= "<td>".$row['salary']."</td>";
   $result .= "<td><a href=\"?del_id=".$row['id']."\">удалить</a></td>";
   $result .= "<td><a href=\"lesson43_edit.php?edit_id=".$row['id']."\">редактировать</a></td>";
   $result .= "</tr>";
}
$result .= "</table>";
echo $result;

echo "<br><br>";
?>

<a href="lesson43_add.php">добавить работника</a>