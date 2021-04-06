<?php echo 'Задача №1 --- Решение:<br>';
echo preg_replace('#a.b#', '!', 'ahb acb aeb aeeb adcb axeb');
echo '<br><br>'; ?>

<?php echo 'Задача №2 --- Решение:<br>';
echo preg_replace('#a..a#', '!', 'aba aca aea abba adca abea');
echo '<br><br>'; ?>

<?php echo 'Задача №3 --- Решение:<br>';
echo preg_replace('#ab.a#', '!', 'aba aca aea abba adca abea');
echo '<br><br>'; ?>

<?php echo 'Задача №4 --- Решение:<br>';
echo preg_replace('#ab+a#', '!', 'aa aba abba abbba abca abea');
echo '<br><br>'; ?>

<?php echo 'Задача №5 --- Решение:<br>';
echo preg_replace('#ab*a#', '!', 'aa aba abba abbba abca abea');
echo '<br><br>'; ?>

<?php echo 'Задача №6 --- Решение:<br>';
echo preg_replace('#ab?a#', '!', 'aa aba abba abbba abca abea');
echo '<br><br>'; ?>

<?php echo 'Задача №7 --- Решение:<br>';
echo preg_replace('#(ab)+#', '!', 'ab abab abab abababab abea');
echo '<br><br>'; ?>

<?php echo 'Задача №8 --- Решение:<br>';
echo preg_replace('#a\.a#', '!', 'a.a aba aea');
echo '<br><br>'; ?>

<?php echo 'Задача №9 --- Решение:<br>';
echo preg_replace('#2\+3#', '!', '2+3 223 2223');
echo '<br><br>'; ?>

<?php echo 'Задача №10 --- Решение:<br>';
echo preg_replace('#2\++3#', '!', '23 2+3 2++3 2+++3 345 567');
echo '<br><br>'; ?>

<?php echo 'Задача №11 --- Решение:<br>';
echo preg_replace('#2\+*3#', '!', '23 2+3 2++3 2+++3 445 677');
echo '<br><br>'; ?>

<?php echo 'Задача №12 --- Решение:<br>';
echo preg_replace('#q+\+#', '!', '+ *q+ *qq+ *qqq+ *qqq qqq+');
echo '<br><br>'; ?>

<?php echo 'Задача №13 --- Решение:<br>';
echo preg_replace('#q*\+#', '!', '+ *q+ *qq+ *qqq+ *qqq qqq+');
echo '<br><br>'; ?>

<?php echo 'Задача №14 --- Решение:<br>';
echo preg_replace('#a.*?a#', '!', 'aba accca azzza wwwwa');
echo '<br><br>'; ?>