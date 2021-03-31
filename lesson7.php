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

echo 'Задача №21 --- Решение:<br>';
$str = 'abc abc abc';
echo strpos($str, 'b');
echo '<br><br>';

echo 'Задача №22 --- Решение:<br>';
$str = 'abc abc abc';
echo strrpos($str, 'b');
echo '<br><br>';

echo 'Задача №23 --- Решение:<br>';
$str = 'abc abc abc';
echo strpos($str, 'b', 3);
echo '<br><br>';

echo 'Задача №24 --- Решение:<br>';
$str = 'aaa aaa aaa aaa aaa';
echo strpos($str, ' ', 4);
echo '<br><br>';

echo 'Задача №25 --- Решение:<br>';
$str = 'aaa..aaa aaa aaa aaa';
if (strpos($str, '..')) echo "Есть";
else echo "Нет";
echo '<br><br>';

echo 'Задача №26 --- Решение:<br>';
$str = 'http://aaa..aaa aaa aaa aaa';
if (strpos($str, 'http://') == 0) echo "Есть";
else echo "Нет";
echo '<br><br>';

echo 'Задача №27 --- Решение:<br>';
$str = 'html css php';
$str = explode(' ', $str);

echo '<pre>';
var_dump($str);
echo '</pre>';
echo '<br><br>';

echo 'Задача №28 --- Решение:<br>';
$str = ['html', 'css', 'php'];
$str = implode(',', $str);
echo $str;
echo '<br><br>';

echo 'Задача №29 --- Решение:<br>';
$date = '2013-12-31';
$str = explode('-', $date);
$str = $str[2].".".$str[1].".".$str[0];
echo $str;
echo '<br><br>';

echo 'Задача №30 --- Решение:<br>';
$date = '1234567890';
$str = str_split($date, 2);

echo '<pre>';
var_dump($str);
echo '</pre>';
echo '<br><br>';

echo 'Задача №31 --- Решение:<br>';
$date = '1234567890';
$str = str_split($date, 1);

echo '<pre>';
var_dump($str);
echo '</pre>';
echo '<br><br>';

echo 'Задача №32 --- Решение:<br>';
$date = '1234567890';
$str = str_split($date, 2);
$str = implode("-", $str);
echo $str;
echo '<br><br>';

echo 'Задача №33 --- Решение:<br>';
$str = ' 1234567890 ';
echo trim($str);
echo '<br><br>';

echo 'Задача №34 --- Решение:<br>';
$str = '/php/';
echo trim($str, '/');
echo '<br><br>';

echo 'Задача №35 --- Решение:<br>';
$str = 'слова слова слова.';
$str = rtrim($str, '.');
echo $str.".";
echo '<br><br>';

echo 'Задача №36 --- Решение:<br>';
$str = '12345';
echo strrev($str);
echo '<br><br>';

echo 'Задача №37 --- Решение:<br>';
$str = 'otto';
if ($str == strrev($str)) echo "Да";
else echo "Нет";
echo '<br><br>';

echo 'Задача №38 --- Решение:<br>';
$str = 'otto';
echo str_shuffle($str);
echo '<br><br>';

echo 'Задача №39 --- Решение:<br>';
$str = 'abcdefghijklmnopqrsxyuw';
echo substr(str_shuffle($str), 0, 6);
echo '<br><br>';

echo 'Задача №40 --- Решение:<br>';
$str = '12345678';
echo number_format($str, 0, '', ' ');
echo '<br><br>';

echo 'Задача №41 --- Решение:<br>';
$str = 'x';
for($i=1; $i<=9; $i++) echo str_repeat($str, $i).'<br>';
echo '<br><br>';

echo 'Задача №42 --- Решение:<br>';
for($i=1; $i<=9; $i++) echo str_repeat($i, $i).'<br>';
echo '<br><br>';

echo 'Задача №43 --- Решение:<br>';
$str = 'html, <b>php</b>, js';
echo $str=strip_tags($str);
echo '<br><br>';

echo 'Задача №44 --- Решение:<br>';
$str = '<i>html</i>, <b>php</b>, <span>js</span>';
echo $str=strip_tags($str, '<i><b>');
echo '<br><br>';

echo 'Задача №45 --- Решение:<br>';
$str = 'html, <b>php</b>, js';
echo htmlspecialchars($str);
echo '<br><br>';

echo 'Задача №46 --- Решение:<br>';
echo ord('a')." ";
echo ord('b')." ";
echo ord('c')." ";
echo ord(' ')." ";
echo '<br><br>';

echo 'Задача №48 --- Решение:<br>';
echo chr(33)." ";
echo '<br><br>';

echo 'Задача №49 --- Решение:<br>';
echo $str = chr(rand(65,90));
echo '<br><br>';

echo 'Задача №50 --- Решение:<br>';
$len = 20;
$str = '';
while ($len > 0) {
    $str .= chr(rand(97,122));
    $len--;
}
echo $str;
echo '<br><br>';

echo 'Задача №51 --- Решение:<br>';
$str = 'f';
if (ord($str) >= 65 && ord($str) <= 90) echo "Большая";
elseif (ord($str) >= 97 && ord($str) <= 122) echo "Маленькая";
echo '<br><br>';

echo 'Задача №52 --- Решение:<br>';
$str = 'ab-cd-ef';
echo strchr($str, '-');
echo '<br><br>';

echo 'Задача №53 --- Решение:<br>';
$str = 'ab-cd-ef';
echo strrchr($str, '-');
echo '<br><br>';

echo 'Задача №54 --- Решение:<br>';
$str = 'ab--cd--ef';
echo strstr($str, '--');
echo '<br><br>';

echo 'Задача №55 --- Решение:<br>';
$str = 'var_test_text';
echo str_replace(' ', '', lcfirst(ucwords(str_replace('_', ' ', $str))));
echo '<br><br>';

echo 'Задача №56 --- Решение:<br>';
$arr = [1,2,3,4,535,33];
foreach ($arr as $value) {
   if(strstr($value, '3')) echo $value."<br>";
}
echo '<br><br>';