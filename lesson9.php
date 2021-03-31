<?php
echo 'Задача №1 --- Решение:<br>';
$arr = [1,2,3,4,5];
echo array_sum($arr)/count($arr);
echo '<br><br>';

echo 'Задача №2 --- Решение:<br>';
$arr = range(1,100);
echo array_sum($arr);
echo '<br><br>';

echo 'Задача №3 --- Решение:<br>';
$arr = range(1,100);
echo implode('<br>', $arr);
echo '<br><br>';

echo 'Задача №4 --- Решение:<br>';
$arr = array_fill(0, 10, 'x');
echo "<pre>";
var_dump($arr);
echo "</pre>";
echo '<br><br>';

echo 'Задача №5 --- Решение:<br>';
$arr = range(1, 10);
shuffle($arr);
echo "<pre>";
var_dump($arr);
echo "</pre>";
echo '<br><br>';

echo 'Задача №6 --- Решение:<br>';
$num = 5;
$arr = array_product(range(1, $num));
echo $arr;
echo '<br><br>';

echo 'Задача №7 --- Решение:<br>';
$num = 5;
$arr = array_sum(str_split($num, 1));
echo $arr;
echo '<br><br>';

echo 'Задача №8 --- Решение:<br>';
$str = 'ff';
$num = str_split($str);
$num[count($num)-1] = strtoupper($num[count($num)-1]);
$str = implode('', $num);
echo $str;
echo '<br><br>';

echo 'Задача №9 --- Решение:<br>';
$arr = [1,2,3,4,5];
$arr = array_map('sqrt', $arr);
echo "<pre>";
var_dump($arr);
echo "</pre>";
echo '<br><br>';

echo 'Задача №10 --- Решение:<br>';
$arr1 = range('a','z');
$arr2 = range(1, 26);
$arr = array_combine($arr1, $arr2);
echo "<pre>";
var_dump($arr);
echo "</pre>";
echo '<br><br>';

echo 'Задача №11 --- Решение:<br>';
$str = '1234567890';
$str = str_split($str, 2);
echo array_sum($str);
echo '<br><br>';