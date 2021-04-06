<?php echo 'Задача №1 --- Решение:<br>';
echo preg_replace('#ab{2,4}a#', '!', 'aa aba abba abbba abbbba abbbbba');
echo '<br><br>'; ?>

<?php echo 'Задача №2 --- Решение:<br>';
echo preg_replace('#ab{0,3}a#', '!', 'aa aba abba abbba abbbba abbbbba');
echo '<br><br>'; ?>

<?php echo 'Задача №3 --- Решение:<br>';
echo preg_replace('#ab{4,}a#', '!', 'aa aba abba abbba abbbba abbbbba');
echo '<br><br>'; ?>

<?php echo 'Задача №4 --- Решение:<br>';
echo preg_replace('#a\da#', '!', 'a1a a2a a3a a4a a5a aba aca');
echo '<br><br>'; ?>

<?php echo 'Задача №5 --- Решение:<br>';
echo preg_replace('#a\d+a#', '!', 'a1a a22a a333a a4444a a55555a aba aca');
echo '<br><br>'; ?>

<?php echo 'Задача №6 --- Решение:<br>';
echo preg_replace('#a\d*a#', '!', 'aa a1a a22a a333a a4444a a55555a aba aca');
echo '<br><br>'; ?>

<?php echo 'Задача №7 --- Решение:<br>';
echo preg_replace('#a\Db#', '!', 'avb a1b a2b a3b a4b a5b abb acb');
echo '<br><br>'; ?>

<?php echo 'Задача №8 --- Решение:<br>';
echo preg_replace('#a\Wb#', '!', 'ave a#b a2b a$b a4b a5b a-b acb');
echo '<br><br>'; ?>

<?php echo 'Задача №9 --- Решение:<br>';
echo preg_replace('#\s#', '!', 'ave a#a a2a a$a a4a a5a a-a aca');
echo '<br><br>'; ?>

<?php echo 'Задача №10 --- Решение:<br>';
echo preg_replace('#a[bex]a#', '!', 'aba aea aca aza axa');
echo '<br><br>'; ?>

<?php echo 'Задача №11 --- Решение:<br>';
echo preg_replace('#a[b.+*]a#', '!', 'aba aea aca aza axa a.a a+a a*a');
echo '<br><br>'; ?>

<?php echo 'Задача №12 --- Решение:<br>';
echo preg_replace('#a[3-7]a#', '!', 'a111ba a1111a aca aza axa a.a a+a a*a');
echo '<br><br>'; ?>

<?php echo 'Задача №13 --- Решение:<br>';
echo preg_replace('#a[a-g]a#', '!', 'a111ba a1111a aca aza axa a.a a+a a*a');
echo '<br><br>'; ?>

<?php echo 'Задача №14 --- Решение:<br>';
echo preg_replace('#a[a-fj-z]a#', '!', 'a111ba a1111a aca aza axa a.a a+a a*a');
echo '<br><br>'; ?>

<?php echo 'Задача №15 --- Решение:<br>';
echo preg_replace('#a[a-fA-Z]a#', '!', 'a111ba a1111a aca aza axa a.a a+a a*a');
echo '<br><br>'; ?>

<?php echo 'Задача №16 --- Решение:<br>';
echo preg_replace('#a[^ex]a#', '!', 'aba aea aca aza axa a-a a#a');
echo '<br><br>'; ?>

<?php echo 'Задача №17 --- Решение:<br>';
echo preg_replace('#w[а-яА-ЯЁё]w#u', '!', 'wйw wяw wёw wqw');
echo '<br><br>'; ?>

<?php echo 'Задача №18 --- Решение:<br>';
echo preg_replace('#a[a-z]+a#', '!', 'aAXa aeffa aGha aza ax23a a3sSa');
echo '<br><br>'; ?>

<?php echo 'Задача №19 --- Решение:<br>';
echo preg_replace('#a[a-zA-Z]+a#', '!', 'aAXa aeffa aGha aza ax23a a3sSa');
echo '<br><br>'; ?>

<?php echo 'Задача №20 --- Решение:<br>';
echo preg_replace('#a[a-z\d]+a#', '!', 'aAXa aeffa aGha aza ax23a a3sSa');
echo '<br><br>'; ?>

<?php echo 'Задача №21 --- Решение:<br>';
echo preg_replace('#[а-яА-ЯЁё]+#u', '!', 'ааа ббб ёёё ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ');
echo '<br><br>'; ?>

<?php echo 'Задача №22 --- Решение:<br>';
echo preg_replace('#^aaa#', '!', 'aaa aaa aaa');
echo '<br><br>'; ?>

<?php echo 'Задача №23 --- Решение:<br>';
echo preg_replace('#aaa$#', '!', 'aaa aaa aaa');
echo '<br><br>'; ?>

<?php echo 'Задача №24 --- Решение:<br>';
echo preg_replace('#a(e+|x+)a#', '!', 'aeeea aeea aea axa axxa axxxa');
echo '<br><br>'; ?>

<?php echo 'Задача №25 --- Решение:<br>';
echo preg_replace('#a(e{0,2}|x+)a#', '!', 'aeeea aeea aea axa axxa axxxa');
echo '<br><br>'; ?>

<?php echo 'Задача №26 --- Решение:<br>';
echo preg_replace('#\b#', '!', 'xbx aca aea abba adca abea');
echo '<br><br>'; ?>

<?php echo 'Задача №27 --- Решение:<br>';
echo preg_replace('#a\\\\a#', '!', 'a\a abc');
echo '<br><br>'; ?>

<?php echo 'Задача №28 --- Решение:<br>';
echo preg_replace('#a\\\\\\\a#', '!', 'a\a a\\a a\\\a');
echo '<br><br>'; ?>

<?php echo 'Задача №29 --- Решение:<br>';
echo preg_replace('#/\w+\\\\#', '!', 'bbb /aaa\ bbb /ccc\\');
echo '<br><br>'; ?>

<?php echo 'Задача №30 --- Решение:<br>';
echo preg_replace('#<b>(.+?)</b>#', '!', 'bbb <b> hello </b>, <b> world </b> eee');
echo '<br><br>'; ?>