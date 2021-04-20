<?php
session_start();
//session_destroy();
?>

<?php
echo "Задача №1 --- Решение:<br>";
$_SESSION['str'] = 'test';
if (isset($_SESSION['str'])) echo $_SESSION['str'];
echo "<br><br>";
?>

<?php
echo "Задача №2 --- Решение:<br>";
$_SESSION['str1'] = 'test';
echo "<a href='lesson32_2.php'>lesson32_2.php</a><br><br>";
?>

<?php
echo "Задача №3 --- Решение:<br>";
if (empty($_SESSION['str3'])) {
   echo "Вы ещё не обновляли страницу";
   $_SESSION['str3'] = 0;
}
else echo $_SESSION['str3'] += 1;
echo "<br><br>";
?>

<?php
echo "Задача №4,5,6 --- Решение:<br>";
if (isset($_REQUEST['country'])) {
   $_SESSION['country'] = $_REQUEST['country'];  
}
$_SESSION['time_second'] = date('s', time());
$_SESSION['email'] = $_REQUEST['email'];
?>
<form>
   Введите страну: <input name='country'><br>
   Введите emeail: <input name='email' value='<?php if (isset($_SESSION['email'])) echo $_SESSION ['email']; ?>'><br>
   <input type='submit'>
</form>
<?php
echo "Время с момента захода на сайт: ".$_SESSION['time_second'];
echo "<br><br>";
?>