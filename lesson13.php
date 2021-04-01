<?php echo 'Задача №1 --- Решение:<br>';
$arr = [1,2,3,4,6,6,7,8,9];

echo findArr($arr);

function findArr ($a) {
   $flag = false;
   foreach ($a as $value) {
      if ($value == 5) {
         $flag = true;
      }
   }

   if ($flag == true)
      return "Да";
   else
      return "Нет";
}
echo '<br><br>'; ?>

<?php echo 'Задача №2 --- Решение:<br>';
$int = 4;

echo prostoeChislo($int);

function prostoeChislo($a) {
   $flag = false;
   for($i = 2; $a > $i; $i++) {
      if ($a%$i == 0)
         $flag=true;
   }

   if ($flag == true)
      return "Нет";
   else
      return "Да";
}
echo '<br><br>'; ?>

<?php echo 'Задача №3 --- Решение:<br>';
$arr = [1,2,3,4,5,6,7,8,9];

echo dubleChislo($arr);

function dubleChislo($a) {
   $flag = false;
   for ($i=0; $i<=count($a); $i++) {
      if (count($a)>0 && $a[$i+1]) {
         if($a[$i] == $a[$i+1]) $flag = true;
      }
   }

   if ($flag == true)
      return "Да";
   else
      return "Нет";
}
echo '<br><br>'; ?>