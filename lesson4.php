<?php
echo 'Задача №1 --- Решение: ';
$a = 1;
if ($a == 0) echo "Верно"; else echo "Неверно";
echo '<br><br>';

echo 'Задача №2 --- Решение: ';
$a = 1;
if ($a > 0) echo "Верно"; else echo "Неверно";
echo '<br><br>';

echo 'Задача №3 --- Решение: ';
$a = 1;
if ($a < 0) echo "Верно"; else echo "Неверно";
echo '<br><br>';

echo 'Задача №4 --- Решение: ';
$a = 1;
if ($a >= 0) echo "Верно"; else echo "Неверно";
echo '<br><br>';

echo 'Задача №5 --- Решение: ';
$a = 1;
if ($a <= 0) echo "Верно"; else echo "Неверно";
echo '<br><br>';

echo 'Задача №6 --- Решение: ';
$a = 1;
if ($a != 0) echo "Верно"; else echo "Неверно";
echo '<br><br>';

echo 'Задача №7 --- Решение: ';
$a = 'test';
if ($a == 'test') echo "Верно"; else echo "Неверно";
echo '<br><br>';

echo 'Задача №8 --- Решение: ';
$a = 1;
if ($a === '1') echo "Верно"; else echo "Неверно";
echo '<br><br>';

echo 'Задача №9 --- Решение: ';
$a = 1;
if (empty($a)) echo "Верно"; else echo "Неверно";
echo '<br><br>';

echo 'Задача №10 --- Решение: ';
$a = 1;
if (!empty($a)) echo "Верно"; else echo "Неверно";
echo '<br><br>';

echo 'Задача №11 --- Решение: ';
$a = 1;
if (isset($a)) echo "Верно"; else echo "Неверно";
echo '<br><br>';

echo 'Задача №12 --- Решение: ';
$a = NULL;
if (!isset($a)) echo "Верно"; else echo "Неверно";
echo '<br><br>';

echo 'Задача №13 --- Решение: ';
$var = FALSE;
if ($var == TRUE) echo "Верно"; else echo "Неверно";
if ($var == TRUE) { echo "Верно"; } else { echo "Неверно"; }
echo '<br><br>';

echo 'Задача №14 --- Решение: ';
$var = FALSE;
if ($var != TRUE) echo "Верно"; else echo "Неверно";
if ($var != TRUE) { echo "Верно"; } else { echo "Неверно"; }
echo '<br><br>';

echo 'Задача №15 --- Решение: ';
$a = 5;
if ($a > 0 AND $a < 5) echo "Верно"; else echo "Неверно";
echo '<br><br>';

echo 'Задача №16 --- Решение: ';
$a = 0;
if ($a == 0 OR $a == 2) echo $a + 7; else echo $a / 10;
echo '<br><br>';

echo 'Задача №17 --- Решение: ';
$a = 5;
$b = 3;
if ($a <= 1 AND $b >= 3) echo $a + $b; else echo $a - $b;
echo '<br><br>';

echo 'Задача №18 --- Решение: ';
$a = 1;
$b = 3;
if (($a > 2 AND $a < 11) OR ($b >= 6 AND $b <= 14)) echo "Верно"; else echo "Неверно";
echo '<br><br>';

echo 'Задача №19 --- Решение: ';
$num = 3;
switch ($num) {
    case '1':
        $result = 'зима';
        break;
    case '2':
        $result = 'лето';
        break;
    case '3':
        $result = 'весна';
        break;
    case '4':
        $result = 'осень';
        break;
}
echo $result;
echo '<br><br>';

echo 'Задача №20 --- Решение: ';
$day = 15;
if ($day >= 1 AND $day <=10) {
    echo "Первая декада";
} elseif ($day >= 11 AND $day <=20) {
    echo "Вторая декада";
} elseif ($day >= 21 AND $day <=30) {
    echo "Третья декада";
}
echo '<br><br>';

echo 'Задача №21 --- Решение: ';
$month = 1;
if ($month == 12 OR $month <=2) {
    echo "Зима";
} elseif ($month >= 3 AND $month <=5) {
    echo "Весна";
} elseif ($month >= 6 AND $month <=8) {
    echo "Лето";
} elseif ($month >= 9 AND $month <=11) {
    echo "Осень";
}
echo '<br><br>';