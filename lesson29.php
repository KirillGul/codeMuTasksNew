<?php echo 'Задача №1 --- Решение:<br>';
$str = 'http://site.ru, https://site.com';
echo preg_replace('#https?://([a-z0-9-]+\.[a-z]{2,})#', '<a href="$0">$1</a>', $str);
echo '<br><br>'; ?>