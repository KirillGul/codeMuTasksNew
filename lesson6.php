<?php
echo 'Задача №1 --- Решение:<br>';
$a = 10;
$b = 3;
$c = $a % $b;
echo $c;
echo '<br><br>';

echo 'Задача №2 --- Решение:<br>';
$a = 10;
$b = 2;
if ($a % $b == 0) echo 'Делиться, результат = '.$a % $b;
else echo 'Не делиться';
echo '<br><br>';

echo 'Задача №3 --- Решение:<br>';
$st = pow(2, 10);
echo $st;
echo '<br><br>';

echo 'Задача №4 --- Решение:<br>';
$st = sqrt(245);
echo $st;
echo '<br><br>';

echo 'Задача №5 --- Решение:<br>';
$arr = [4,2,5,19,13,0,10];
$st = 0;
foreach ($arr as $value) {
   $st += pow($value, 2);
}
$result = sqrt($st);
echo $result;
echo '<br><br>';

echo 'Задача №6 --- Решение:<br>';
echo round(sqrt(379), 2).'<br>';
echo round(sqrt(379), 1).'<br>';
echo round(sqrt(379)).'<br>';
echo '<br><br>';

echo 'Задача №7 --- Решение:<br>';
$arr = [];
$arr['floor'] = floor(sqrt(587));
$arr['ceil'] = ceil(sqrt(587));

echo '<pre>';
var_dump($arr);
echo $arr['floor'].'<br>';
echo $arr['ceil'];
echo '</pre>';
echo '<br><br>';

echo 'Задача №8 --- Решение:<br>';
echo min(4, -2, 5, 19, -130, 0, 10);
echo '<br>';
echo max(4, -2, 5, 19, -130, 0, 10);
echo '<br><br>';

echo 'Задача №9 --- Решение:<br>';
echo rand(1, 100);
echo '<br><br>';

echo 'Задача №10 --- Решение:<br>';
$arr = [];
for($i=1; $i<10; $i++) $arr[] = rand();

echo '<pre>';
var_dump($arr);
echo '</pre>';
echo '<br><br>';

echo 'Задача №11 --- Решение:<br>';
$a = 8;
$b = 7;
echo abs($a-$b);
echo '<br><br>';

echo 'Задача №12 --- Решение:<br>';
$arr = [1, 2, -1, -2, 3, -3];
foreach ($arr as $key=>$value) {
   $arr[$key] = abs($value);
}
echo '<pre>';
var_dump($arr);
echo '</pre>';
echo '<br><br>';

echo 'Задача №13 --- Решение:<br>';
$a = 30;
$arr = [];
$i = 1;
while ($a >= $i) {
   if ($a % $i == 0) $arr[] = $i;
   $i++;
}

echo '<pre>';
var_dump($arr);
echo '</pre>';
echo '<br><br>';

echo 'Задача №14 --- Решение:<br>';
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$result = 0;
$i = 1;
foreach ($arr as $value) {
   $result += $value;
   if ($result > 10) break;
   $i++;
}

echo $i;
echo '<br><br>';