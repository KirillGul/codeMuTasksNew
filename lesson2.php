<?php
echo 'Задача №1 --- Решение: ';
$a = 3;
echo $a;
echo '<br><br>';

echo 'Задача №2 --- Решение: ';
$a = 10;
$b = 2;
echo "<br>Сумма = ". ($a+ $b);
echo "<br>Разность = ".($a - $b);
echo "<br>Произведение = ".($a * $b);
echo "<br>Частное = ".($a / $b);
echo '<br><br>';

echo 'Задача №3 --- Решение: ';
$c = 15;
$d = 2;
$result = $c + $d; 
echo $result;
echo '<br><br>';

echo 'Задача №4 --- Решение: ';
$a = 10;
$b = 2;
$c = 5;
echo $a + $b + $c;
echo '<br><br>';

echo 'Задача №5 --- Решение: ';
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo $result;
echo '<br><br>';

echo 'Задача №6 --- Решение: ';
$text = 'Привет, Мир!';
echo $text;
echo '<br><br>';

echo 'Задача №7 --- Решение: ';
$text1 = 'Привет, ';
$text2 = 'Мир!';
echo $text1.$text2;
echo '<br><br>';

echo 'Задача №8 --- Решение: ';
$name = 'Кирилл';
echo $text1.$name.'!';
echo '<br><br>';

echo 'Задача №9 --- Решение: ';
$age = 36;
echo 'Мне '.$age.' лет!';
echo '<br><br>';

echo 'Задача №10 --- Решение: ';
$text = 'abcde';
echo $text[0].$text[2].$text[4];
echo '<br><br>';

echo 'Задача №11 --- Решение: ';
$text = 'abcde';
$text[0] = '!';
echo $text;
echo '<br><br>';

echo 'Задача №12 --- Решение: ';
$num = '12345';
echo $num[0]+$num[1]+$num[2]+$num[3]+$num[4];
echo '<br><br>';

echo 'Задача №13 --- Решение: ';
echo "<br>В часе - ".(60*60).' секунд.';
echo "<br>В сутках - ".(60*60*24).' секунд.';
echo "<br>В месяце - ".(60*60*24*30).' секунд.';
echo '<br><br>';

echo 'Задача №14 --- Решение: ';
$hour = 16;
$minute = 46;
$second = 00;
echo "<br>Текущее время - $hour:$minute:$second";
echo '<br><br>';

echo 'Задача №15 --- Решение: ';
$num = 3;
echo "<br>Квадрат числа $num = ".$num*$num;
echo '<br><br>';

echo 'Задача №16 --- Решение: ';
$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var;
echo '<br><br>';

echo 'Задача №17 --- Решение: ';
$text = 'Я';
$text .= ' хочу';
$text .= ' знать';
$text .= ' PHP!';
echo $text;
echo '<br><br>';

echo 'Задача №18 --- Решение: ';
$var = 10;
$var++;
$var++;
$var--;
echo $var;
echo '<br><br>';

echo 'Задача №19 --- Решение: ';
$var = 10;
$var += 7;
$var++;
$var--;
$var += 12;
$var *= 7;
$var -= 15;
echo $var;
echo '<br><br>';