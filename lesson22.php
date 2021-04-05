<?php echo 'Задача №1 --- Решение:<br>';
   echo round((mktime(23,59,59, 12, 31) - time()) / 60 / 60 /24) ;
echo '<br><br>'; ?>

<?php echo 'Задача №2 --- Решение:<br>'; ?>
<form action="" mothod="GET">
   Введите год: <input type="text" name="year">
   <input type='submit' value="Выполнить">
</form>

<?php
if (!empty($_REQUEST['year'])) {
   $year = $_REQUEST['year'];
   if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
      echo "Высокосный";
   } else {
      echo "Не высокосный";
   }
}
echo '<br><br>'; ?>

<?php echo 'Задача №3 --- Решение:<br>'; ?>
<form action="" mothod="GET">
   Введите дату в формате '01.12.1990': <input type="text" name="date">
   <input type='submit' value="Выполнить">
</form>

<?php
$week = [1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
if (!empty($_REQUEST['date']))
   echo $week[date('w' , strtotime($_REQUEST['date']))];
echo '<br><br>'; ?>

<?php echo 'Задача №4 --- Решение:<br>';
$week = [1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$month = [1=>'янв', 'фев', 'мар', 'апр', 'май', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек'];

$now = explode('-', date('d-n-Y-w'  ,time()));
echo $now[0].' '.$month[$now[1]].' '.$now[2].' года, '.$week[$now[3]];
echo '<br><br>'; ?>

<?php echo 'Задача №5 --- Решение:<br>'; ?>
<form action="" mothod="GET">
   Введите дату рождения в формате '01.12.1990': <input type="text" name="happyday">
   <input type='submit' value="Выполнить">
</form>

<?php
if (!empty($_REQUEST['happyday'])) {
   $happyday = date('z'  ,strtotime($_REQUEST['happyday']));
   if ($happyday > date('z', time())) echo $happyday - date('z', time());
   else echo round((mktime(23,59,59, 12, 31) - time()) / 60 / 60 /24) + $happyday - 1;
}  
echo '<br><br>'; ?>

<?php echo 'Задача №6 --- Решение:<br>';
$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];

$datemaslenica = date('t', mktime(0,0,0,5));
for ($i = 0; $i < $datemaslenica; $i++)
   if ($week[date('w', mktime(0,0,0,5,$i))] == 'вс') $dateMas = date('Y-m-d', mktime(0,0,0,5,$i));

   $dateMas = date('z'  ,strtotime($dateMas));
   if ($dateMas > date('z', time())) echo $dateMas - date('z', time());
   else echo round((mktime(23,59,59, 12, 31) - time()) / 60 / 60 /24) + $dateMas - 1;

echo '<br><br>'; ?>

<?php echo 'Задача №7 --- Решение:<br>'; ?>
<form action="" mothod="GET">
Введите дату рождения в формате '01.12': <input type="text" name="happydayZodiak">
<input type='submit' value="Выполнить">
</form>

<?php
if (!empty($_REQUEST['happydayZodiak'])) {
   $happydayZodiak = explode ('.', $_REQUEST['happydayZodiak']);
   $happydayZodiak = mktime(0,0,0,$happydayZodiak[1], $happydayZodiak[0]);
   if ($happydayZodiak >= mktime(0,0,0,3,21) && $happydayZodiak <= mktime(0,0,0,4,20)) echo 'Овен';
   elseif ($happydayZodiak >= mktime(0,0,0,4,21) && $happydayZodiak <= mktime(0,0,0,5,21)) echo 'Телец';
   elseif ($happydayZodiak >= mktime(0,0,0,5,22) && $happydayZodiak <= mktime(0,0,0,6,21)) echo 'Близнецы';
   elseif ($happydayZodiak >= mktime(0,0,0,6,22) && $happydayZodiak <= mktime(0,0,0,7,22)) echo 'Рак';
   elseif ($happydayZodiak >= mktime(0,0,0,7,23) && $happydayZodiak <= mktime(0,0,0,8,23)) echo 'Лев';
   elseif ($happydayZodiak >= mktime(0,0,0,8,24) && $happydayZodiak <= mktime(0,0,0,9,22)) echo 'Дева';
   elseif ($happydayZodiak >= mktime(0,0,0,9,23) && $happydayZodiak <= mktime(0,0,0,10,22)) echo 'Весы';
   elseif ($happydayZodiak >= mktime(0,0,0,10,23) && $happydayZodiak <= mktime(0,0,0,11,22)) echo 'Скорпион';
   elseif ($happydayZodiak >= mktime(0,0,0,11,23) && $happydayZodiak <= mktime(0,0,0,12,21)) echo 'Стрелец';
   elseif ($happydayZodiak >= mktime(0,0,0,12,22) && $happydayZodiak <= mktime(0,0,0,1,20)) echo 'Козерог';
   elseif ($happydayZodiak >= mktime(0,0,0,1,21) && $happydayZodiak <= mktime(0,0,0,2,19)) echo 'Водолей';
   elseif ($happydayZodiak >= mktime(0,0,0,2,20) && $happydayZodiak <= mktime(0,0,0,3,20)) echo 'Рыбы';
}  
echo '<br><br>'; ?>

<?php echo 'Задача №8 --- Решение:<br>';
$arr = ['01.01', '02.01', '03.01', '04.01', '05.01', '06.01', '07.01', '08.01', '23.02', '08.03', '01.05', '09.05', '12.06', '04.11'];

foreach ($arr as $value) {
   $value = explode ('.', $value);
   if (mktime(0,0,0) == mktime(0,0,0,$value[1],$value[0])) {
      $value = $value[0].".".$value[1];
      if ($value == '01.01' || $value == '02.01' || $value == '03.01' || $value == '04.01' || $value == '05.01' || $value == '06.01' || $value == '08.01') echo "С новым годом!";
      elseif ($value == '07.01') echo "С рождеством!";
      elseif ($value == '23.02') echo "С 23 февраля";
      elseif ($value == '08.03') echo "С 8 марта";
      elseif ($value == '01.05') echo "С 1 мая";
      elseif ($value == '09.05') echo "С Днем России";
      elseif ($value == '12.06') echo "С Днем народного единства";
   }
}
echo '<br><br>'; ?>