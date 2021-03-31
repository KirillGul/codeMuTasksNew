<?php
echo 'Задача №1 --- Решение:<br>';
$arr = [1,2,3,4,5];
echo count($arr);
echo '<br><br>';

echo 'Задача №2 --- Решение:<br>';
$arr = [1,2,3,4,88];
echo $arr[count($arr)-1];
echo '<br><br>';

echo 'Задача №3 --- Решение:<br>';
$arr = [1,2,3,43,88];
echo in_array(3, $arr);
echo '<br><br>';

echo 'Задача №4 --- Решение:<br>';
$arr = [1,2,3,4,5];
echo array_sum($arr);
echo '<br><br>';

echo 'Задача №5 --- Решение:<br>';
$arr = [1,2,3,4,5];
echo array_product($arr);
echo '<br><br>';

echo 'Задача №6 --- Решение:<br>';
$arr = [1,2,3,4,5];
echo array_sum($arr)/count($arr);
echo '<br><br>';

echo 'Задача №7 --- Решение:<br>';
$arr = range(1,100);
var_dump($arr);
echo '<br><br>';

echo 'Задача №8 --- Решение:<br>';
$arr = range('a', 'z');
var_dump($arr);
echo '<br><br>';

echo 'Задача №9 --- Решение:<br>';
$arr = range(1, 9);
echo $str = implode('-', $arr);
echo '<br><br>';

echo 'Задача №10 --- Решение:<br>';
echo array_sum(range(1, 100));
echo '<br><br>';

echo 'Задача №11 --- Решение:<br>';
echo array_product(range(1, 10));
echo '<br><br>';

echo 'Задача №12 --- Решение:<br>';
$arr1 = [1,2,3];
$arr2 = ['a','b','c'];
$arr = array_merge($arr1, $arr2);
var_dump($arr);
echo '<br><br>';

echo 'Задача №13 --- Решение:<br>';
$arr1 = [1,2,3, 4, 5];
$arr = array_slice($arr1, 1, 3);
var_dump($arr);
echo '<br><br>';

echo 'Задача №14 --- Решение:<br>';
$arr1 = [1, 2, 3, 4, 5];
array_splice($arr1, 1, 2);
var_dump($arr1);
echo '<br><br>';

echo 'Задача №15 --- Решение:<br>';
$arr1 = [1, 2, 3, 4, 5];
$arr = array_splice($arr1, 1, 3);
var_dump($arr);
echo '<br><br>';

echo 'Задача №16 --- Решение:<br>';
$arr1 = [1, 2, 3, 4, 5];
$arr = array_splice($arr1, 0, 3, ['a', 'b', 'c']);
$arr = array_merge($arr, $arr1);
var_dump($arr);
echo '<br><br>';

echo 'Задача №17 --- Решение:<br>';
$arr = [1, 2, 3, 4, 5];
$arr = array_splice($arr1, 0, 1, ['a', 'b']);
$arr1 = array_merge($arr, $arr1);
$arr = array_splice($arr1, 0, 6, ['c']);
$arr1 = array_merge($arr, $arr1);
$arr = array_splice($arr1, 0, 8, ['e']);
$arr1 = array_merge($arr, $arr1);
var_dump($arr);
echo '<br><br>';

echo 'Задача №18 --- Решение:<br>';
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$keys = array_keys($arr);
$values = array_values($arr);
var_dump($keys);
echo '<br>';
var_dump($values);
echo '<br><br>';

echo 'Задача №19 --- Решение:<br>';
$arr1 = ['a', 'b', 'c'];
$arr2 = [1,2,3];
$arr = array_combine($arr1, $arr2);
var_dump($arr);
echo '<br><br>';

echo 'Задача №20 --- Решение:<br>';
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$arr = array_flip($arr);
var_dump($arr);
echo '<br><br>';

echo 'Задача №21 --- Решение:<br>';
$arr = [1,2,3,4,5];
$arr = array_reverse($arr);
var_dump($arr);
echo '<br><br>';

echo 'Задача №22 --- Решение:<br>';
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$symbol = array_search('-', $arr);
echo $symbol;
echo '<br><br>';

echo 'Задача №23 --- Решение:<br>';
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
array_splice($arr, array_search('-', $arr), 1);
var_dump($arr);
echo '<br><br>';

echo 'Задача №24 --- Решение:<br>';
$arr = ['a', 'b', 'c', 'd', 'e'];
$arr1 = [0=>'!', 3=>'!!'];
$arr = array_replace($arr, $arr1);
var_dump($arr);
echo '<br><br>';

echo 'Задача №25 --- Решение:<br>';
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
sort($arr);
var_dump($arr);
echo '<br><br>';

echo 'Задача №26 --- Решение:<br>';
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
sort($arr);
var_dump($arr);
echo '<br><br>';