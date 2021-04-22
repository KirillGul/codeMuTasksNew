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
function input($name)
{
   if (isset($_POST[$name])) {
      $value = $_POST[$name];
   } else {
      $value = '';
   }
   
   return "$name <input name=\"". $name . "\" value=\"" . $value ."\"><br>";
}

if (!empty($_POST)) {
   $name = $_POST['name'];
   $age = $_POST['age'];
   $salary = $_POST['salary'];

   var_dump($_GET);
   
   $query = "UPDATE users SET name='$name', age='$age', salary='$salary' WHERE id=".$_GET['edit_id'];
   mysqli_query($link, $query) or die(mysqli_error($link));
}
?>
<form method="POST">
   <?php echo input('name'); ?>
	<?php echo input('age'); ?>
	<?php echo input('salary'); ?>
	<input type="submit" value="изменить сведения работника">
</form>

<a href="lesson43.php">вернуться к списку работников</a>