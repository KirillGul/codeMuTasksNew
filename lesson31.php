<?php
echo "Задача №1 --- Решение:<br>";
//echo file_get_contents ('test.txt');
echo "<br><br>";
?>

<?php
echo "Задача №2 --- Решение:<br>";
//echo file_put_contents ('test.txt', '12345');
echo "<br><br>";
?>

<?php
echo "Задача №3 --- Решение:<br>";
//echo file_put_contents ('test1.txt', '12345');
echo "<br><br>";
?>

<?php
echo "Задача №4 --- Решение:<br>";
//echo file_put_contents ('new.txt', '');
echo "<br><br>";
?>

<?php
echo "Задача №5 --- Решение:<br>";
/*$arr = ['1.txt', '2.txt', '3.txt'];
foreach ($arr as $value)
   file_put_contents ($value, '');*/
echo "<br><br>";
?>

<?php
echo "Задача №6 --- Решение:<br>";
/*$text = file_get_contents ('test.txt');
file_put_contents ('test.txt', $text.'!');*/
echo "<br><br>";
?>

<?php
echo "Задача №7 --- Решение:<br>";
/*$text = pow(file_get_contents ('test.txt'), 2);
file_put_contents ('test.txt', $text);*/
echo "<br><br>";
?>

<?php
echo "Задача №8 --- Решение:<br>";
/*$text = file_get_contents ('counter.txt') + 1;
file_put_contents ('counter.txt', $text);*/
echo "<br><br>";
?>

<?php
echo "Задача №9 --- Решение:<br>";
/*$arr = ['1.txt', '2.txt', '3.txt'];
$text = '';
foreach ($arr as $value)
   $text .= file_get_contents ($value);
file_put_contents ('new.txt', $text);*/
echo "<br><br>";
?>

<?php
echo "Задача №10 --- Решение:<br>";
/*$arr = ['1.txt', '2.txt', '3.txt'];
foreach ($arr as $value) {
   $text = file_get_contents ($value);
   file_put_contents ($value, $text.'!');
}*/
echo "<br><br>";
?>

<?php
echo "Задача №11 --- Решение:<br>";
//rename ('old.txt', 'new.txt');
echo "<br><br>";
?>

<?php
echo "Задача №12 --- Решение:<br>";
//rename ('test.txt', 'test/test.txt');
echo "<br><br>";
?>

<?php
echo "Задача №13 --- Решение:<br>";
//rename ('test/test.txt', 'dir2/test.txt');
echo "<br><br>";
?>

<?php
echo "Задача №14 --- Решение:<br>";
//copy ('test.txt', 'copy.txt');
echo "<br><br>";
?>

<?php
echo "Задача №15 --- Решение:<br>";
//copy ('test.txt', 'test/test.txt');
echo "<br><br>";
?>

<?php
echo "Задача №16 --- Решение:<br>";
//unlink ('test/test.txt');
echo "<br><br>";
?>

<?php
echo "Задача №17 --- Решение:<br>";
/*$arr = ['1.txt', '2.txt', '3.txt'];
foreach ($arr as $value)
   unlink ($value);*/
echo "<br><br>";
?>

<?php
echo "Задача №18 --- Решение:<br>";
//var_dump(file_exists('test.txt'));
echo "<br><br>";
?>

<?php
echo "Задача №19 --- Решение:<br>";
/*$file = 'test.txt';
if (file_exists($file)) unlink($file);
else file_put_contents($file, '');*/
echo "<br><br>";
?>

<?php
echo "Задача №20 --- Решение:<br>";
/*$arr = ['1.txt', '2.txt', '3.txt'];
foreach ($arr as $value) {
   if (file_exists($value)) echo $value." - существует.<br>";
   else echo $value." - не существует.<br>";
}*/
echo "<br><br>";
?>

<?php
echo "Задача №21 --- Решение:<br>";
//echo filesize('test.txt');
echo "<br><br>";
?>

<?php
echo "Задача №22 --- Решение:<br>";
//echo filesize('test.txt') / 1024;
echo "<br><br>";
?>

<?php
echo "Задача №23 --- Решение:<br>";
//echo filesize('asciifull.gif') / 1024 / 1024;
echo "<br><br>";
?>

<?php
echo "Задача №24 --- Решение:<br>";
//echo filesize('asciifull.gif') / 1024 / 1024 / 1024;
echo "<br><br>";
?>

<?php
echo "Задача №25 --- Решение:<br>";
/*$text = file_get_contents('test.txt');
echo "<pre>";
var_dump(explode(PHP_EOL, $text));
echo "</pre>";*/
echo "<br><br>";
?>

<?php
echo "Задача №26 --- Решение:<br>";
/*$text = file_get_contents('test.txt');
$text = explode(PHP_EOL, $text);
file_put_contents('sum.txt', array_sum($text));*/
echo "<br><br>";
?>

<?php
echo "Задача №27 --- Решение:<br>";
/*$arr = [1,2,3,4,5];
file_put_contents('new1.txt', implode(PHP_EOL, $arr));*/
echo "<br><br>";
?>

<?php
echo "Задача №28 --- Решение:<br>";
//echo array_sum(file('test.txt', FILE_IGNORE_NEW_LINES));
echo "<br><br>";
?>

<?php
echo "Задача №29 --- Решение:<br>";
/*$sum = array_sum(file('test.txt', FILE_IGNORE_NEW_LINES));
$text = file_get_contents('test.txt');
file_put_contents('test.txt', $text.PHP_EOL.$sum);*/
echo "<br><br>";
?>

<?php
echo "Задача №30 --- Решение:<br>";
//mkdir('dir');
echo "<br><br>";
?>

<?php
echo "Задача №31 --- Решение:<br>";
/*$arr = ['dir1', 'dir2', 'dir3'];
foreach ($arr as $value)
   mkdir($value);*/
echo "<br><br>";
?>

<?php
echo "Задача №32 --- Решение:<br>";
/*mkdir('test32');
$arr = ['1', '2', '3'];
foreach ($arr as $value)
   file_put_contents ('test32/'.$value, "");*/
echo "<br><br>";
?>

<?php
echo "Задача №33 --- Решение:<br>";
//rmdir('test32');
echo "<br><br>";
?>

<?php
echo "Задача №34 --- Решение:<br>";
//rename('dir1', 'dir4');
echo "<br><br>";
?>

<?php
echo "Задача №35 --- Решение:<br>";
//var_dump(scandir('dir2'));
echo "<br><br>";
?>

<?php
echo "Задача №36 --- Решение:<br>";
/*$arr = array_diff((scandir('dir2')), ['.','..']);
foreach ($arr as $value) {
   $text = file_get_contents('dir2/'.$value);
   file_put_contents('dir2/'.$value, $text.PHP_EOL.'!');
}*/
echo "<br><br>";
?>

<?php
echo "Задача №37 --- Решение:<br>";
/*$arr = array_diff((scandir('dir2')), ['.','..']);
foreach ($arr as $value) {
   $text = file_get_contents('dir2/'.$value);
   echo "$text<br>";
}*/
echo "<br><br>";
?>

<?php
echo "Задача №38 --- Решение:<br>";
/*$path = 'dir2';
var_dump(is_file($path));
echo "<br>";
var_dump(is_dir($path));*/
echo "<br><br>";
?>

<?php
echo "Задача №39 --- Решение:<br>";
/*$path = 'dir';
$arr_path = array_diff((scandir($path)), ['.','..']);
foreach ($arr_path as $value) {
   if (is_dir($path.'/'.$value)) echo "$value<br>";
}*/
echo "<br><br>";
?>

<?php
echo "Задача №40 --- Решение:<br>";
/*$path = 'dir';
$arr_path = array_diff((scandir($path)), ['.','..']);
foreach ($arr_path as $value) {
   if (is_file($path.'/'.$value)) echo "$value<br>";
}*/
echo "<br><br>";
?>

<?php
echo "Задача №41 --- Решение:<br>";
/*get_path('dir');

function get_path ($dir) {
   $arr = array_diff((scandir($dir)), ['.','..']);
   foreach ($arr as $value) {
      $path = $dir.'/'.$value;
      if (is_dir($path)) {
         get_path($path);
      } else {
         echo "<pre>";
         var_dump($path);
         echo "</pre>";
      }
   }
}*/
echo "<br><br>";
?>

<?php
echo "Задача №42 --- Решение:<br>";
/*getPathToFile('dir');

function getPathToFile ($dir) {
   $arr = array_diff((scandir($dir)), ['.','..']);
   foreach ($arr as $value) {
      $path = $dir.'/'.$value;
      if (is_dir($path)) {
         getPathToFile($path);
      } else {
         $text = file_get_contents($path);
         file_put_contents($path, $text.PHP_EOL.'!');
      }
   }
}*/
echo "<br><br>";
?>

<?php
echo "Задача №43 --- Решение:<br>";
/*removePath('dir2');

function removePath ($dir) {
   $arr = array_diff((scandir($dir)), ['.','..']);
   foreach ($arr as $value) {
      $path = $dir.'/'.$value;
      if (is_dir($path)) {
         removePath($path);
      } else {
         unlink($path);
      }
   }
   rmdir($dir);
}*/
echo "<br><br>";
?>