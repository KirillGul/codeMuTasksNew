<?php echo 'Задача №1 --- Решение:<br>';
//?test1=2
echo $_GET['test1'];
echo '<br><br>'; ?>

<?php echo 'Задача №2 --- Решение:<br>';
//?test1=2
echo pow($_GET['test1'], 2);
echo '<br><br>'; ?>

<?php echo 'Задача №3 --- Решение:<br>';
//?test1=2&test2=3
echo $_GET['test1'] + $_GET['test2'];
echo '<br><br>'; ?>

<?php echo 'Задача №4 --- Решение:<br>';
//?test1=1 или ?test1=2
if ($_GET['test1'] == 1) echo "Привет";
elseif ($_GET['test1'] == 2) echo "Пока";
echo '<br><br>'; ?>

<?php echo 'Задача №5 --- Решение:<br>';
//?test1=1
$arr = ['a', 'b', 'c'];
if (isset($arr[$_GET['test1']]))
    echo $arr[$_GET['test1']];
echo '<br><br>'; ?>

<?php echo 'Задача №6 --- Решение:<br>';
//?test1=1
if (isset($_GET['test1']))
    echo $_GET['test1'];
?>
<br>
<a href="?test1=1">Ссылка 1</a>
<a href="?test1=2">Ссылка 2</a>
<a href="?test1=3">Ссылка 2</a>
<?php echo '<br><br>'; ?>

<?php echo 'Задача №7,8,9 --- Решение:<br>';
//?test1=1
if (isset($_GET['test1']))
    echo $_GET['test1']."<br>";
echo "<ul>";
for ($i = 1; $i <= 10; $i++) {
    //echo "<a href=\"?test1=$i\">Ссылка $i</a>";
    //echo "<p><a href=\"?test1=$i\">Ссылка $i</a></p>";
    echo "<li><a href=\"?test1=$i\">Ссылка $i</a></li>";
}
echo "</ul>";
echo '<br><br>'; ?>

<?php echo 'Задача №10, 11 --- Решение:<br>';
//?test1=1
$arr = ['a', 'b', 'c'];
if (isset($_GET['test1']) && isset($arr[$_GET['test1']]))
    echo $arr[$_GET['test1']];

//10
echo "<br>";
/*echo "<a href=\"?test1=0\">Ссылка 1</a> ";
echo "<a href=\"?test1=1\">Ссылка 2</a> ";
echo "<a href=\"?test1=2\">Ссылка 3</a>  ";*/

//11
foreach ($arr as $key=>$value) {
    echo "<a href=\"?test1=$key\">Ссылка $value</a> ";
}
echo '<br><br>'; ?>