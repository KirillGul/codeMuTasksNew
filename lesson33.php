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

<?php echo "Задача №4 --- Решение:<br>";
if (isset($_REQUEST['rdat'])) {
    $_COOKIE['rdat'] = $_REQUEST['rdat'];
    $RDAT = explode('.', $_COOKIE['rdat']);
    $dateRDAT = date('z', mktime(0, 0, 0, $RDAT[1], $RDAT[0]))+1;
    $dateNOW = date('z', time())+1;
    if ($dateNOW > $dateRDAT) {
        $dateRDAT = date('z', mktime(0, 0, 0, 12, 31)) -  $dateNOW + $dateRDAT;
        echo "До дня рождения осталось ".$dateRDAT." дней.";
    } elseif ($dateNOW < $dateRDAT) {
        $dateRDAT = $dateRDAT - $dateNOW;
        echo "До дня рождения осталось ".$dateRDAT." дней.";
    } else echo "Ваш день рождения сегодня";
}
?>
<br><br>
<form>
    Введите вашу дату рождения (в формате 31.12.2021): <input name='rdat'><br>
    <input type="submit">
</form>
<?php echo "<br><br>"; ?>