<?php echo 'Задача №1 --- Решение:<br>';
$int1 = 2;
$int2 = 3;

sravni($int1, $int2);

function sravni ($i1, $i2) {
   return $i1 == $i2;
}
echo '<br><br>'; ?>

<?php echo 'Задача №2 --- Решение:<br>';
$int1 = 5;
$int2 = 6;

echo sravni2($int1, $int2);

function sravni2 ($i1, $i2) {
   return $i1+$i2 > 10;
}
echo '<br><br>'; ?>

<?php echo 'Задача №3 --- Решение:<br>';
$int = -5;

echo fPlusMinus($int);

function fPlusMinus($i) {
   return $i<0;
}
echo '<br><br>'; ?>