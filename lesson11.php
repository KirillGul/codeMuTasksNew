<?php echo 'Задача №1 --- Решение:<br>';
echo time();
echo '<br><br>'; ?>

<?php echo 'Задача №2 --- Решение:<br>';
echo mktime(0, 0, 0, 03, 01, 2025);
echo '<br><br>'; ?>

<?php echo 'Задача №3 --- Решение:<br>';
echo mktime(0, 0, 0, 12, 31);
echo '<br><br>'; ?>

<?php echo 'Задача №4 --- Решение:<br>';
echo time() - mktime(13, 12, 59, 03, 15, 2000);
echo '<br><br>'; ?>

<?php echo 'Задача №5 --- Решение:<br>';
echo (time() - mktime(7, 23, 48))/60/60;
echo '<br><br>'; ?>

<?php echo 'Задача №6 --- Решение:<br>';
echo date('Y-m-d h-i-s');
echo '<br><br>'; ?>

<?php echo 'Задача №7 --- Решение:<br>';
echo date('Y-m-d')."<br>";
echo date('d.m.Y')."<br>";
echo date('d.m.y')."<br>";
echo date('h:i:s');
echo '<br><br>'; ?>

<?php echo 'Задача №8 --- Решение:<br>';
echo date('d.m.Y', mktime(0,0,0,02,12,2025));
echo '<br><br>'; ?>

<?php echo 'Задача №9 --- Решение:<br>';
$week = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
echo $week[date('w', mktime(0,0,0,6,6,2006))];
echo '<br><br>'; ?>

<?php echo 'Задача №10 --- Решение:<br>';
$month = [1=>'янв', 'фев', 'мар', 'апр', 'май', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек'];
echo $month[date('n')];
echo '<br><br>'; ?>

<?php echo 'Задача №11 --- Решение:<br>';
echo date('t');
echo '<br><br>'; ?>

<?php echo 'Задача №12 --- Решение:<br>';?>
   <form action='' method="GET">
      Введит год:<input type="text" name="year">
      <input type="submit">
   </form>
<?php 
 if(isset($_GET['year'])) {
   $year = $_GET['year'];
   if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
      echo "Высокосный";
  } else {
      echo "Не высокосный";
  }
 }
?>
<?php echo '<br><br>'; ?>

<?php echo 'Задача №13 --- Решение:<br>';?>
   <form action='' method="GET">
      Введит дату в формате (31.12.2015):<input type="text" name="date">
      <input type="submit">
   </form>
<?php
$week = [1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
 if(isset($_GET['date'])) {
   $date = $_GET['date'];
   $date = explode('.', $date);
   echo $week[date('w', mktime(0,0,0,$date[1], $date[0], $date[2]))];
 }
?>
<?php echo '<br><br>'; ?>

<?php echo 'Задача №14 --- Решение:<br>';?>
   <form action='' method="GET">
      Введит дату в формате (2025-12-31):<input type="text" name="date1">
      <input type="submit">
   </form>
<?php
$month = [1=>'янв', 'фев', 'мар', 'апр', 'май', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек'];
 if(isset($_GET['date1'])) {
   $date1 = $_GET['date1'];
   $date1 = explode('-', $date1);
   echo $month[date('n', mktime(0,0,0,$date1[1], $date1[2], $date1[0]))];
 }
?>
<?php echo '<br><br>'; ?>

<?php echo 'Задача №15 --- Решение:<br>';?>
   <form action='' method="GET">
      Введит дату №1 в формате (2025-12-31):<input type="text" name="date1"><br>
      Введит дату №2 в формате (2025-12-31):<input type="text" name="date2"><br>
      <input type="submit">
   </form>
<?php
 if(isset($_GET['date1'])) {
    $date1 = $_GET['date1'];
    $date1 = explode('-', $date1);
    $date1 = mktime(0,0,0,$date1[1], $date1[2], $date1[0]);
   if(isset($_GET['date2'])) {
      $date2 = $_GET['date2'];
      $date2 = explode('-', $date2);
      $date2 = mktime(0,0,0,$date2[1], $date2[2], $date2[0]);
      if ($date1 > $date2) echo "Первая дата больше";
      else echo "Вторая дата больше";
   }
 }
 
?>
<?php echo '<br><br>'; ?>

<?php echo 'Задача №16 --- Решение:<br>';
$date = '2025-12-31';
echo date('d-m-Y', strtotime($date));
echo '<br><br>'; ?>

<?php echo 'Задача №17 --- Решение:<br>'; ?>
<form action='' method="GET">
      Введит дату в формате (2025-12-31T12:13:59):<input type="text" name="date17"><br>
      <input type="submit">
   </form>
<?php
if(isset($_GET['date17'])) {
   echo date('h:i:s d.m.Y', strtotime($_GET['date17']));
}
echo '<br><br>'; ?>

<?php echo 'Задача №18 --- Решение:<br>';
$date = '2025-12-31';
$date = date_create($date);
date_modify($date, '2 days');
echo date_format($date, 'Y-m-d')."<br>";

date_modify($date, '1 month 3 days');
echo date_format($date, 'Y-m-d')."<br>";

date_modify($date, '1 years');
echo date_format($date, 'Y-m-d')."<br>";

date_modify($date, '-3 days');
echo date_format($date, 'Y-m-d')."<br>";
echo '<br><br>'; ?>

<?php echo 'Задача №19 --- Решение:<br>';
echo date('z', mktime(0,0,0, 12, 31)) - date('z', time()) +1; //плюс 1 день
echo '<br><br>'; ?>

<?php echo 'Задача №20 --- Решение:<br>'; ?>
<form action="" method="GET">
   Введит год:<input type="text" name="year20" <?php if(isset($_GET['year20'])) echo "value='".$_GET['year20']."'"; ?>><br>
   <input type="submit">
</form>
<?php
$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб', ];
$arr = [];
if(isset($_GET['year20'])) {
   for($i=1; $i<=12; $i++) {
      $t = mktime(0,0,0, $i, 13, $_GET['year20']);
      $time = date('w', mktime(0,0,0, $i, 13, $_GET['year20']));
      if ($week[$time] == 'пт') $arr = [$_GET['year20']."-".$i."-13"];
   }
   echo "<pre>";
   var_dump($arr);
   echo "</pre>";
}
?>
<?php echo '<br><br>'; ?>

<?php echo 'Задача №21 --- Решение:<br>';
$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
$tnow = date("Y-m-d", time());
$tmod = date_create($tnow);
date_modify($tmod, '-100 days');
$tmod = date_format($tmod, 'd.m.Y');


echo $week[date("w", strtotime($tmod))];
echo '<br><br>'; ?>