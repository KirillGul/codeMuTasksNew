<?php
echo 'Задача №1 --- Решение:<br>';
$arr_1 = ['html', 'css', 'php', 'js', 'jq'];
foreach ($arr_1 as $value)
   echo $value.'<br>';
echo '<br><br>';

echo 'Задача №2 --- Решение:<br>';
$arr_2 = [1,2,3,4,5];
$result = 0;
foreach ($arr_2 as $value)
   $result += $value;
echo $result;
echo '<br><br>';

echo 'Задача №3 --- Решение:<br>';
$arr_3 = [1,2,3,4,5];
$result = 0;
foreach ($arr_3 as $value)
   $result += $value*$value;
echo $result;
echo '<br><br>';

echo 'Задача №4 --- Решение:<br>';
$arr_4 = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
foreach ($arr_4 as $key=>$value)
   echo "'$key - $value'<br>";
echo '<br><br>';

echo 'Задача №5 --- Решение:<br>';
$arr_5 = ['Коля'=>'200', 'Вася'=>'300', 'Петя'=>'400'];
foreach ($arr_5 as $key=>$value)
   echo "'$key - зарплата $value долларов.'<br>";
echo '<br><br>';

echo 'Задача №6 --- Решение:<br>';
$i = 0;
while ($i <= 100) echo $i++;
echo '<br>';
for ($i=0; $i<=100; $i++) echo $i;
echo '<br><br>';

echo 'Задача №7 --- Решение:<br>';
$i = 11;
while ($i <= 33) echo $i++;
echo '<br>';
for ($i=11; $i<=33; $i++) echo $i;
echo '<br><br>';

echo 'Задача №8 --- Решение:<br>';
$i = 0;
while ($i <= 100) {
   if ($i % 2 == 0) echo $i;
   $i++;
}

echo '<br>';
for ($i=0; $i<=100; $i++) {
   if ($i % 2 == 0) echo $i;
}
echo '<br><br>';

echo 'Задача №9 --- Решение:<br>';
$i = 1;
$result = 0;
while ($i <= 100) {
   $result += $i;
   $i++;
}
echo $result;
echo '<br>';

for ($i=1, $result = 0; $i<=100; $i++) {
   $result += $i;
}
echo $result;
echo '<br><br>';

echo 'Задача №10 --- Решение:<br>';
$arr_10 = [2,5,9,15,0,4];
foreach ($arr_10 as $value) {
   if ($value > 3 && $value <10) echo $value."<br>";
}
echo '<br><br>';

echo 'Задача №11 --- Решение:<br>';
$arr_11 = [2,5,-9,15,0,-4];
$sum = 0;
foreach ($arr_11 as $value) {
   if ($value > 0) $sum += $value;
}
echo $sum."<br>";
echo '<br><br>';

echo 'Задача №12 --- Решение:<br>';
$arr_12 = [1,2,5,9,4,13,4,10];
$sum = 0;
foreach ($arr_12 as $value) {
   if ($value > 0) $sum += $value;
}
echo $sum."<br>";
echo '<br><br>';

echo 'Задача №13 --- Решение:<br>';
$arr_13 = ['10', '20', '30', '50', '235', '3000'];
foreach ($arr_13 as $value) {
   if ($value[0] == 1 || $value[0] == 2 || $value[0] == 5) echo $value.'<br>';
}
echo '<br><br>';

echo 'Задача №14 --- Решение:<br>';
$arr_14 = [1,2,3,4,5,6,7,8,9];
$str = '-';
foreach ($arr_14 as $value) {
   $str .= "$value-";
}
echo $str;
echo '<br><br>';

echo 'Задача №15 --- Решение:<br>';
$arr_15 = ['1'=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
foreach ($arr_15 as $key=>$value) {
   if ($key <= 5) {
      echo $value." ";
   } else echo "<span style='font-weight:bold'>".$value."</span> ";
}
echo '<br><br>';

echo 'Задача №16 --- Решение:<br>';
$arr_16 = ['1'=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$day = 'вт';
foreach ($arr_16 as $key=>$value) {
   if ($day == $value) {
      echo "<em>".$value."</em><br>";
   } else echo $value."<br>";
}
echo '<br><br>';

echo 'Задача №17 --- Решение:<br>';
for ($i=1; $i<=100; $i++) $arr_17[] = $i;
var_dump($arr_17);
echo '<br><br>';

echo 'Задача №18 --- Решение:<br>';
$arr_18 = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
foreach ($arr_18 as $key=>$value) {
   $en[] = $key;
   $ru[] = $value;   
}

var_dump($en);
echo '<br>';
var_dump($ru);
echo '<br><br>';

echo 'Задача №19 --- Решение:<br>';
$num = 1000;
$i = 1;
while ($num > 50) {
   $num /= 2;
   $i++;
}
echo $i.'<br>';

for ($i = 1, $num = 1000; $num > 50; $i++)  $num /= 2;
echo $i.'<br>';
echo '<br><br>';