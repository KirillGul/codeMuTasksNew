<style>
   a {
      text-decoration: none;
   }
   a.active {
      text-decoration: underline;
   }
</style>
<?php
	//Устанавливаем доступы к базе данных:
   $host = 'localhost'; //имя хоста, на локальном компьютере это localhost
   $user = 'root'; //имя пользователя, по умолчанию это root
   $password = ''; //пароль, по умолчанию пустой
   $db_name = 'test'; //имя базы данных

//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));

//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
mysqli_query($link, "SET NAMES 'utf8'");

if (isset($_GET['page'])) {
   $page = $_GET['page'];
} else {
   $page = 1;
}

$notesOnPage = 2;
$from = ($page-1) * $notesOnPage;

$query = "SELECT * FROM users LIMIT $from,$notesOnPage";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
//Массив результата лежит в $data, выведем его на экран:
echo "<pre>";var_dump($data);echo "</pre>";

$query = "SELECT COUNT(*) as count FROM users";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
$count = mysqli_fetch_assoc($result)['count'];
$pagesCount = ceil($count/$notesOnPage);

if ($page != 1) {
   $prev = $page - 1;
   echo "<a href=\"?page=$prev\"><<</a> ";
}

for ($i = 1; $i <= $pagesCount; $i++) {
   if ($i == $page) {
      $class = ' class="active"';
   } else $class = '';
   echo "<a href=\"?page=$i\"$class>$i</a> ";
}

if ($page != $pagesCount) {
   $next = $page + 1;
   echo "<a href=\"?page=$next\"$class>>></a> ";
}

?>