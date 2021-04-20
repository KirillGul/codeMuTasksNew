<?php
echo "Задача №1 --- Решение:<br>";
setcookie('test', '123');
echo $_COOKIE['test'];
echo "<br><br>";
?>

<?php
echo "Задача №2 --- Решение:<br>";
setcookie('test', '', time());
echo $_COOKIE['test'];
echo "<br><br>";
?>

<?php
echo "Задача №3 --- Решение:<br>";
if (empty($_COOKIE['count2'])) setcookie('count2', 1);
else setcookie('count2', $_COOKIE['count2']+1);

echo "Вы посетили страницу: ".$_COOKIE['count2']." раз.";
echo "<br><br>";
?>

<?php
echo "Задача №4 --- Решение:<br>";

echo "<br><br>";
?>