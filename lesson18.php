<?php echo 'Задача №1 --- Решение:<br>';
function getTransit ($str) {
   $arr = ['a'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 
      'д'=>'d', 'е'=>'e', 'ё'=>'e', 'ж'=>'zh', 'з'=>'z', 
      'и'=>'i', 'й'=>'i', 'к'=>'k', 'л'=>'l', 'м'=>'m', 
      'н'=>'n', 'о'=>'o', 'п'=>'p', 'р'=>'r', 'с'=>'s', 
      'т'=>'t', 'у'=>'u', 'ф'=>'f', 'х'=>'kh', 'ц'=>'ts', 
      'ч'=>'ch', 'ш'=>'sh', 'щ'=>'shch', 'ъ'=>'ie', 'ы'=>'y', 
      'ь'=>'', 'э'=>'e', 'ю'=>'iu', 'я'=>'ia'];

   foreach (str_split($str) as $value) {
      $arrTranslit[] = $arr[$value]; 
   }
   return $arrTranslit;
}
echo '<br><br>'; ?>

<?php echo 'Задача №2 --- Решение:<br>';
function isSklonenie ($int, $str1, $str2, $str3) {
   if ($int == 1) return $int." ".$str1;
   elseif ($int >= 2 && $int <= 4) return $int." ".$str2;
   elseif ($int >= 5) return $int." ".$str3;
}
echo '<br><br>'; ?>

<?php echo 'Задача №3 --- Решение:<br>';
function isTicket ($int) {
   return $int[0]+$int[1]+$int[2] == $int[3]+$int[4]+$int[5];
}
echo '<br><br>'; ?>

<?php echo 'Задача №3 --- Решение:<br>';
for ($i=0; $i<=1000; $i++) {
   $arr[$i] = getSumArray(getDivisors($i));
}

foreach ($arr as $key=>$value) {
   for ($i=0; $i<=count($arr)-1; $i++) {
      if ($value == $arr[$i] && $key != $i) {
         echo $key.' '.$i."<br>";
      }
   }
}

function getDivisors ($int) {
   $arr = [];
   for($i=1; $i <= $int; $i++) {
      if ($int % $i == 0) $arr[] = $i;
   }
   return $arr;
}

function getSumArray ($arr) {
   return array_sum($arr);
}
echo '<br><br>'; ?>