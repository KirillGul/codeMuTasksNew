<?php echo 'Задача №1 --- Решение:<br>';
//Функция проверки числа на больше 0 и меньше 10
function isNumberInRange ($int) {
   return $int > 0 && $int < 10;
}
echo '<br><br>'; ?>

<?php echo 'Задача №2 --- Решение:<br>';
$arr = [-3, 2, 4, 11, 10];

foreach ($arr as $value) {
   if (isNumberInRange($value)) $arrnew[] = $value;
}

echo "<pre>";
var_dump($arrnew);
echo "</pre>";
echo '<br><br>'; ?>

<?php echo 'Задача №3 --- Решение:<br>';
//Функция принимет число и возвращает сумму чисел
function getDigitsSum ($int) {
   return array_sum(str_split($int));
}
echo '<br><br>'; ?>

<?php echo 'Задача №4 --- Решение:<br>';
for ($i=1; $i<=2021; $i++) {
   if (getDigitsSum($i) == 13) echo $i." ";
}
echo '<br><br>'; ?>

<?php echo 'Задача №5 --- Решение:<br>';
//Функция проверяет четное или не четное число
function isEven ($int) {
   return $int % 2 == 0;
}
echo '<br><br>'; ?>

<?php echo 'Задача №6 --- Решение:<br>';
$arr = [1,2,3,4,5,6,7,8,9];
foreach ($arr as $value) {
   if (isEven($value)) $arrnew2[] = $value;
}
echo "<pre>";
var_dump($arrnew2);
echo "</pre>";
echo '<br><br>'; ?>

<?php echo 'Задача №7 --- Решение:<br>';
//Функция возвращает делители числа в виде массива
function getDivisors ($int) {
   $arr = [];
   for($i=1; $i <= $int; $i++) {
      if ($int % $i == 0) $arr[] = $i;
   }
   return $arr;
}
echo '<br><br>'; ?>

<?php echo 'Задача №8 --- Решение:<br>';
//Функция вовращает массив общих делителей двух чисел
function getCommonDivisors ($int1, $int2) {
   return array_intersect(getDivisors($int1), getDivisors($int2));
}
echo '<br><br>'; ?>