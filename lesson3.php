<?php
echo 'Задача №1 --- Решение: ';
$arr=['a', 'b', 'c'];
var_dump($arr);
echo '<br><br>';

echo 'Задача №2 --- Решение: ';
echo $arr[0].$arr[1].$arr[2];
echo '<br><br>';

echo 'Задача №3 --- Решение: ';
$arr=['a', 'b', 'c', 'd'];
echo $arr[0]."+".$arr[1].", ".$arr[2]."+".$arr[3];
echo '<br><br>';

echo 'Задача №4 --- Решение: ';
$arr=[2, 5, 3, 9];
$result=$arr[0]*$arr[1]+$arr[2]*$arr[3];
echo $result;
echo '<br><br>';

echo 'Задача №5 --- Решение: ';
$arr1[]=1;
$arr1[]=2;
$arr1[]=3;
$arr1[]=4;
$arr1[]=5;
var_dump($arr1);
echo '<br><br>';

echo 'Задача №6 --- Решение: ';
$arr6 = ['a'=>1, 'b'=>2, 'c'=>3];
echo $arr6['c'];
echo '<br><br>';

echo 'Задача №7 --- Решение: ';
$arr7 = ['a'=>1, 'b'=>2, 'c'=>3];
echo $arr7['a']+$arr7['b']+$arr7['c'];
echo '<br><br>';

echo 'Задача №8 --- Решение: ';
$arr8 = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo "<br>Коля = ".$arr8['Коля'];
echo "<br>Петя = ".$arr8['Петя'];
echo '<br><br>';

echo 'Задача №9 --- Решение: ';
$arr9 = ['1'=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
echo "<br>Сегодня - ".$arr9[4];
echo '<br><br>';

echo 'Задача №10 --- Решение: ';
$arr10 = ['1'=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$day = 3;
echo "<br>Сегодня - ".$arr10[$day];
echo '<br><br>';

echo 'Задача №11 --- Решение: ';
$arr11 = [
	'cms'=>['joomla', 'wordpress', 'drupal'],
	'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];
echo "<br>".$arr11['cms'][0];
echo "<br>".$arr11['cms'][2];
echo "<br>".$arr11['colors']['red'];
echo "<br>".$arr11['colors']['green'];
echo '<br><br>';

echo 'Задача №12 --- Решение: ';
$arr12 = [
	'ru'=>[1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
	'en'=>[1 => 'mon', 'tue', 'wed', 'thur', 'fri', 'sat', 'san'],
];
echo "<br>".$arr12['ru'][1];
echo "<br>".$arr12['en'][3];
echo '<br><br>';

echo 'Задача №13 --- Решение: ';
$arr13 = [
	'ru'=>[1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
	'en'=>[1 => 'mon', 'tue', 'wed', 'thur', 'fri', 'sat', 'san'],
];
$lang = 'ru';
$day = 3;
echo "<br>".$arr13[$lang][$day];
echo '<br><br>';