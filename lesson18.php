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
   
}
echo '<br><br>'; ?>