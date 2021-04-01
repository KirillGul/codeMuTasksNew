<?php echo 'Задача №1 --- Решение:<br>';
$str = "";
for ($i=1; $i<=9; $i++) $str .= $i;
echo $str;
echo '<br><br>'; ?>

<?php echo 'Задача №2 --- Решение:<br>';
$str = "";
for ($i=9; $i>=1; $i--) $str .= $i;
echo $str;
echo '<br><br>'; ?>

<?php echo 'Задача №3 --- Решение:<br>';
$str = "-";
for ($i=1; $i<=9; $i++) $str .= $i."-";
echo $str;
echo '<br><br>'; ?>

<?php echo 'Задача №4 --- Решение:<br>';
$str = "";
for ($i=1; $i<=20; $i++) {
    echo $str .= "x";
    echo "<br>";
}
echo '<br><br>'; ?>

<?php echo 'Задача №5 --- Решение:<br>';
for ($i=1; $i<=9; $i++) {
    for ($j=1; $j<=$i; $j++) {
        echo $i;        
    }
    echo "<br>";
}
echo '<br><br>'; ?>

<?php echo 'Задача №6 --- Решение:<br>';
for ($i=1; $i<=5; $i++) {
    echo str_repeat('x', $i*2);
    echo "<br>";
}
echo '<br><br>'; ?>