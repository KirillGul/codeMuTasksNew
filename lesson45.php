<?php echo 'Задача №1 --- Решение:<br>';
include '45/file.php';
echo "!!!";
echo '<br><br>'; ?>

<?php echo 'Задача №2 --- Решение:<br>';
$arr = ['1.php', '2.php', '3.php'];
foreach ($arr as $val) {
   include "45/$val";
   echo "<br>";
}
echo '<br><br>'; ?>

<?php echo 'Задача №3,4,5 --- Решение:<br>';
if (isset($_GET['page'])) {
   $pages = $_GET['page'];
   include "45/$pages.php";
}
echo '<br><br>'; ?>
<a href="?page=1">Октрыть 1.php</a>