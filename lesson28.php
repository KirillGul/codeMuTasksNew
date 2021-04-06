<?php echo 'Задача №1 --- Решение:<br>';
echo preg_replace('#([\w]+)@([\w]+)#', '$2@$1', 'aaa@bbb eee7@kkk');
echo '<br><br>'; ?>

<?php echo 'Задача №2 --- Решение:<br>';
echo preg_replace('#\d#', '$0$0', 'a1b2c3');
echo '<br><br>'; ?>

<?php echo 'Задача №3 --- Решение:<br>';
echo preg_replace('#(\w)\1#', '!', 'aae xxz 33a');
echo '<br><br>'; ?>

<?php echo 'Задача №4 --- Решение:<br>';
echo preg_replace('#([a-z])\1+#', '!', 'aaa bcd xxx efg');
echo '<br><br>'; ?>

<?php echo 'Задача №5 --- Решение:<br>';
echo preg_match('#^[a-z-0-9._-]+@[a-z-0-9.-]+\.\w{2,3}$#', 'my_mail@mail.ru');
echo '<br><br>'; ?>

<?php echo 'Задача №6 --- Решение:<br>';
echo preg_match_all('#[a-z-0-9._-]+@[a-z-0-9.-]+\.\w{2,3}#', 'my-mail@mail.ru, my_mail@mail.ru, my-mail@mail.ru,', $m);
echo '<br><br>'; ?>

<?php echo 'Задача №7 --- Решение:<br>';
echo preg_match('#^[\w-]+(\.\w{2,3})$#', 'site.com');
echo '<br><br>'; ?>

<?php echo 'Задача №8 --- Решение:<br>';
echo preg_match('#^[\w-]+\.[\w-]+\.\w{2,3}$#', 'hello.site.com');
echo '<br><br>'; ?>

<?php echo 'Задача №9 --- Решение:<br>';
echo preg_match('#^(http)://[\w-]+\.\w{2,3}$#', 'http://site.ru');
echo '<br><br>'; ?>

<?php echo 'Задача №10 --- Решение:<br>';
echo preg_match('#^https?://[\w-]+\.\w{2,3}$#', 'https://site.ru');
echo '<br><br>'; ?>

<?php echo 'Задача №11 --- Решение:<br>';
echo preg_match('#^https?://[\w-]+\.\w{2,3}/?$#', 'https://site.ru/');
echo '<br><br>'; ?>

<?php echo 'Задача №12 --- Решение:<br>';
echo preg_match('#^https?#', 'https://site.com/');
echo '<br><br>'; ?>

<?php echo 'Задача №13 --- Решение:<br>';
echo preg_match('#\.(txt|html|php)$#', 'index.html');
echo '<br><br>'; ?>

<?php echo 'Задача №14 --- Решение:<br>';
echo preg_match('#\.(jpg|jpeg)$#', 'index.jpeg');
echo '<br><br>'; ?>

<?php echo 'Задача №15 --- Решение:<br>';
echo preg_match('#^\d{0,11}$#', '11122233344');
echo '<br><br>'; ?>

<?php echo 'Задача №16 --- Решение:<br>';
preg_match_all('#(\d+)#', 'fff 111 333', $arr);
$sub = 0;
foreach ($arr as $key=>$value) {
   if (isset($value) && $key != 0) {
      foreach ($value as $subval) {
         $sum += $subval;
      }
   }   
}
echo $sum;
echo "<pre>";
var_dump($arr);
echo "</pre>";
echo '<br><br>'; ?>

<?php echo 'Задача №17 --- Решение:<br>';
echo preg_replace('#([0-9]{2,2})\-([0-9]{2,2})\-([0-9]{4,4})#', '$3.$2.$1', '31-12-2014');
echo '<br><br>'; ?>

<?php echo 'Задача №18 --- Решение:<br>';
$str = 'http://site.ru, https://site.com';
echo preg_replace('#https?://([a-z0-9-]+\.[a-z]{2,})#', '<a href="$0">$1</a>', $str);
echo '<br><br>'; ?>