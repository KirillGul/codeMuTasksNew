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
?>