<?php echo 'Задача №1 --- Решение:<br>';
for($i = 1; $i <= 100; $i++) echo $i." ";
echo '<br><br>'; ?>

<?php echo 'Задача №2 --- Решение:<br>';
for($i = 1; $i <= 100; $i++) if ($i % 2 == 0) echo $i." ";
echo '<br><br>'; ?>

<?php echo 'Задача №3 --- Решение:<br>';
for($i = 1, $sum = 0; $i <= 100; $i++, $sum += $i);
echo $sum;
echo '<br><br>'; ?>

<?php echo 'Задача №4 --- Решение:<br>';
for($i = 1, $sum = 0; $i <= 15; $i++, $sum += $i*$i);
echo $sum;
echo '<br><br>'; ?>

<?php echo 'Задача №5 --- Решение:<br>';
for($i = 1, $sum = 0; $i <= 15; $i++, $sum += round(sqrt($i)));
echo $sum;
echo '<br><br>'; ?>

<?php echo 'Задача №6 --- Решение:<br>';
for($i = 1, $sum = 0; $i <= 100; $i++) if ($i % 7 == 0) $sum += $i;
echo $sum;
echo '<br><br>'; ?>

<?php echo 'Задача №7 --- Решение:<br>';
$arr = [];
for($i = 0; $i <= 9; $i++) $arr[] = 'x';

echo "<pre>"; var_dump($arr); echo "</pre>";
echo '<br><br>'; ?>

<?php echo 'Задача №8 --- Решение:<br>';
$arr = [];
for($i = 1; $i <= 10; $i++) $arr[] = $i;

echo "<pre>"; var_dump($arr); echo "</pre>";
echo '<br><br>'; ?>

<?php echo 'Задача №9 --- Решение:<br>';
$arr = [];
for($i = 10; $i >= 1; $i--) $arr[] = $i;

echo "<pre>"; var_dump($arr); echo "</pre>";
echo '<br><br>'; ?>

<?php echo 'Задача №10 --- Решение:<br>';
$arr = [];
for($i = 1; $i <= 10; $i++) $arr[] = mt_rand(1,10);

echo "<pre>"; var_dump($arr); echo "</pre>";
echo '<br><br>'; ?>

<?php echo 'Задача №11 --- Решение:<br>';
$str = '';
for($i = 1; $i <= 6; $i++) $str .= mt_rand(1,9);

echo $str;
echo '<br><br>'; ?>

<?php echo 'Задача №12 --- Решение:<br>';
$arr = [1,2,3,4,5,6,7,8,9];
$sum = 0;
foreach ($arr as $value) $sum += $value;

echo $sum;
echo '<br><br>'; ?>

<?php echo 'Задача №13 --- Решение:<br>';
$arr = [1,2,3,4,5,6,7,8,9];
$sum = 0;
foreach ($arr as $value) $sum += $value*$value;

echo $sum;
echo '<br><br>'; ?>

<?php echo 'Задача №14 --- Решение:<br>';
$arr = [1,2,3,4,5,6,7,8,9];
$sum = 0;
foreach ($arr as $value) $sum += $value*$value;

echo round(sqrt($sum));
echo '<br><br>'; ?>

<?php echo 'Задача №15 --- Решение:<br>';
$arr = [1,2,3,4,5,6,7,8,9];
$sum = 0;
foreach ($arr as $value) 
    if ($value > 0 && $value < 10) $sum += $value;

echo $sum;
echo '<br><br>'; ?>

<?php echo 'Задача №16 --- Решение:<br>';
$arr = [8,9,9,9];
$flag = 0;
if (!empty($arr) && count($arr) >= 3) {
    $elem = array_shift($arr);
    for ($i=0; count($arr) > 0; $elem = array_shift($arr))
        if ($elem == $arr[1] && $elem == $arr[1]) $flag = 1;

   if ($flag) echo "Есть";
   else echo "Нет"; 
    
} else echo "В массиве меньше 3 чисел!";
echo '<br><br>'; ?>

<?php echo 'Задача №17 --- Решение:<br>';
$str = '';
$num = 4;
for ($i = 1; $i <= $num; $i++) {
    for ($j = $i; $j > 0; $j--)
        $str .= $i;
}
echo $str;
echo '<br><br>'; ?>

<?php echo 'Задача №18 --- Решение:<br>';
$arr = [
	0=>['name'=>'Коля', 'salary'=>300],
	1=>['name'=>'Вася', 'salary'=>400],
	2=>['name'=>'Петя', 'salary'=>500],
];
foreach ($arr as $elem) {
    echo $elem['name']." - ".$elem['salary']."<br>";
}

echo '<br><br>'; ?>

<?php echo 'Задача №19 --- Решение:<br>';
for ($i = 0; $i <= 9; $i++)
    for ($j = 0; $j <= 9; $j++)
        $arr[$i][$j] = mt_rand(1,10);

echo "<pre>";var_dump($arr);echo "</pre>";
echo '<br><br>'; ?>

<?php echo 'Задача №20 --- Решение:<br>';
$str = 'hello';
//Вариант 1
echo strtoupper(substr($str, 0, 1)).substr($str, 1);

//Вариант 2
echo ucfirstMy($str);

function ucfirstMy ($str) {
    $string = '';
    $str = str_split($str);
    
    foreach ($str as $key=>$value)
        if ($key == 0) $string .= chr(ord($value)-32);
        else $string .= $value;

    return $string;
}

echo '<br><br>'; ?>

<?php echo 'Задача №21 --- Решение:<br>';
//Вариант 1
$str = 'hello';
echo implode('', array_reverse(str_split($str)));

//Вариант 2
$str = 'hello';
$string = '';
for ($i = strlen($str); $i >= 0; $i--) {
    $string .= $str[$i];
}
echo '<br>';
echo $string;
echo '<br><br>'; ?>

<?php echo 'Задача №22 --- Решение:<br>';
$str = 'hello';
echo array_sum(count_chars($str, 1));

echo '<br><br>'; ?>

<?php echo 'Задача №23 --- Решение:<br>';
$str = 'hElLo';
$string = '';

foreach (str_split($str) as $value) {
    if (ord($value) >= 65 && ord($value) <= 90) $string .= strtolower($value);
    elseif (ord($value) >= 97 && ord($value) <= 122) $string .= strtoupper($value);
}

echo $string;
echo '<br><br>'; ?>

<?php echo 'Задача №24 --- Решение:<br>';
$str = 'var_text_hello';
echo lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $str))));

echo '<br><br>'; ?>

<?php echo 'Задача №25 --- Решение:<br>';
for($i = 1; $i <= 9; $i++) {
    echo str_repeat($i, $i)."<br>";
}
echo '<br><br>'; ?>

<?php echo 'Задача №26 --- Решение:<br>';
$str = 'xxxx';
$i = strlen($str);
while ($i > 0) {
    echo substr($str, 0, $i)."<br>";
    $i--;
}

echo '<br><br>'; ?>

<?php echo 'Задача №27 --- Решение:<br>';
$arr = [1, 3, 2, 4];
$newArr = [];
foreach ($arr as $elem) {
    for ($i = 1; $i <= $elem; $i++) {
        $newArr[] = $elem;
    }
}
var_dump($newArr);
echo '<br><br>'; ?>

<?php echo 'Задача №28 --- Решение:<br>';
$arr = [5, 3, 8, 4];
$newArr = [];
for ($i = 0; $i < count($arr); $i++) {
    if ($i % 2 != 0) $newArr[$keyElem] = $arr[$i];
    else $keyElem = $arr[$i];
}
var_dump($newArr);
echo '<br><br>'; ?>

<?php echo 'Задача №29 --- Решение:<br>';
$str = 'Hello';
$strNew = '';

for($i = strlen($str); $i > 0; $i--)
    if ($i % 2 != 0) $strNew = substr($str, $i, 1).$strNew;
echo $strNew;
echo '<br><br>'; ?>

<?php echo 'Задача №30 --- Решение:<br>';
$str = '12345678';
$strNew = '';

for($i = 0; $i < strlen($str); $i += 2)
    if (!empty($str[$i]) && !empty($str[$i+1]))
        $strNew .= $str[$i+1].$str[$i];
echo $strNew;
echo '<br><br>'; ?>

<?php echo 'Задача №31 --- Решение:<br>';
$arr = [1,1,2,3,1,4,5,6,6,7];

var_dump(arrUniq($arr));

function arrUniq ($arr) {
    $arrUniq = [];
    for ($i = 0; $i < count($arr);) {
        $val = array_shift($arr);
        if (in_array($val, $arr) || in_array($val, $arrUniq)) continue;
        else $arrUniq[] = $val;
    }
    return $arrUniq;
}
echo '<br><br>'; ?>

<?php echo 'Задача №32 --- Решение:<br>';
$arr = [1,1,2,3,1,4,5,6,6,7];

var_dump(arrUniqReverse($arr));

function arrUniqReverse ($arr) {
    $arrUniq = [];
    for ($i = 0; $i < count($arr);) {
        $val = array_shift($arr);
        if (in_array($val, $arr) || in_array($val, $arrUniq)) $arrUniq[] = $val;
        else continue;
    }
    return $arrUniq;
}
echo '<br><br>'; ?>

<?php echo 'Задача №33 --- Решение:<br>';
$num = 31;
$flag = false;
for ($i = 2; $i < $num; $i++) {
	if ($num % $i == 0) {
		$flag = true;
		break;
	}
}

if ($flag == true) {
	echo'Простое число';
} else {
	echo 'Сложное число';
}
echo '<br><br>'; ?>

<?php echo 'Задача №34 --- Решение:<br>';
$arr = ['http://2.ru', '1.ru', '2.ru'];
$arrNew = [];
foreach ($arr as $value) {
    
    if (strstr($value, 'http://') == TRUE) $arrNew[] = $value;
}

var_dump($arrNew);
echo '<br><br>'; ?>