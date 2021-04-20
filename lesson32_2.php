<?php session_start(); ?>

<?php
echo "Задача №2 --- Решение:<br>";
if (isset($_SESSION['str1'])) echo $_SESSION['str1'];
echo "<br><br>";
?>

<?php
echo "Задача №4 --- Решение:<br>";
echo "Страна пользователя: ".$_SESSION['country'];
echo "<br><br>"
?>