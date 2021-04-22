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
   
   $query = "INSERT INTO users SET name='$name', age='$age', salary='$salary'";
   mysqli_query($link, $query) or die(mysqli_error($link));
}

?>
<form method="POST">
   <?php echo input('name'); ?>
	<?php echo input('age'); ?>
	<?php echo input('salary'); ?>
	<input type="submit" value="добавить работника">
</form>

<a href="lesson43.php">вернуться к списку работников</a>