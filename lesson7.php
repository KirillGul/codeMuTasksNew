<?php
echo 'Задача №1 --- Решение:<br>';
$str = 'php';
echo strtoupper($str);
echo '<br><br>';

echo 'Задача №2 --- Решение:<br>';
$str = 'PHP';
echo strtolower($str);
echo '<br><br>';

echo 'Задача №3 --- Решение:<br>';
$str = 'london';
echo ucfirst($str);
echo '<br><br>';

echo 'Задача №4 --- Решение:<br>';
$str = 'London';
echo lcfirst($str);
echo '<br><br>';

echo 'Задача №5 --- Решение:<br>';
$str = 'london is the capital of great britain';
echo ucwords($str);
echo '<br><br>';

echo 'Задача №6 --- Решение:<br>';
$str = 'LONDON';
echo ucfirst(strtolower($str));
echo '<br><br>';

echo 'Задача №7 --- Решение:<br>';
$str = 'html css php';
echo strlen($str);
echo '<br><br>';

echo 'Задача №8 --- Решение:<br>';
$password = '123456';
if (strlen($password) > 5 && strlen($password) < 10) echo 'Пароль подходит';
else echo 'Пароль не подходит';
echo '<br><br>';

echo 'Задача №9 --- Решение:<br>';
$str = 'html css php';
echo substr($str, 0, 4).'<br>';
echo substr($str, 5, 3).'<br>';
echo substr($str, 9, 3).'<br>';
echo '<br><br>';

echo 'Задача №10 --- Решение:<br>';
$str = 'html css php';
echo substr($str, -3).'<br>';
echo '<br><br>';

echo 'Задача №11 --- Решение:<br>';
$str = 'http://fdfsdf.fdfdf';
if (substr($str, 0, 7) == 'http://') echo 'Ok';
else echo 'Нет';
echo '<br><br>';

echo 'Задача №12 --- Решение:<br>';
$str = 'https://fdfsdf.fdfdf';
if (substr($str, 0, 7) == 'http://' || substr($str, 0, 8) == 'https://') echo 'Ok';
else echo 'Нет';
echo '<br><br>';

echo 'Задача №13 --- Решение:<br>';
$str = 'pict.png';
if (substr($str, -4) == '.png') echo 'Ok';
else echo 'Нет';
echo '<br><br>';

echo 'Задача №14 --- Решение:<br>';
$str = 'pict.jpg';
if (substr($str, -4) == '.png' || substr($str, -4) == '.jpg') echo 'Ok';
else echo 'Нет';
echo '<br><br>';

echo 'Задача №15 --- Решение:<br>';
$str = 'pict';
if (strlen($str) > 5) echo substr($str, 0, 5)."...";
else echo $str;
echo '<br><br>';

echo 'Задача №16 --- Решение:<br>';
$str = '31.12.2013';
echo str_replace('.', '-', $str);
echo '<br><br>';

echo 'Задача №17 --- Решение:<br>';
$str = 'abc';
echo str_replace($str, '123', $str);
echo '<br><br>';

echo 'Задача №18 --- Решение:<br>';
$str = '1a2b3c4b5d6e7f8g9h0';
$arr1 = [1,2,3,4,5,6,7,8,9,0];
$arr2= [];
echo str_replace($arr1, $arr2, $str);
echo '<br><br>';

echo 'Задача №19 --- Решение:<br>';
$str = '1a2b3c4b5d6e7f8g9h0';
echo strtr($str, 'abc', '123');
echo '<br><br>';

echo 'Задача №20 --- Решение:<br>';
$str = 'aaabbccc';
echo substr_replace(substr($str, 2, 5), '!!!', 0, 5);
echo '<br><br>';