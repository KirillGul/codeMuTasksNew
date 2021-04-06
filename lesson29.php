<?php echo 'Задача №1 --- Решение:<br>';
echo preg_replace('#(?<=b)aaa#', '!','baaa baa ba');
echo '<br><br>'; ?>

<?php echo 'Задача №2 --- Решение:<br>';
echo preg_replace('#(?<!b)aaa#', '!','waaa baaa ba');
echo '<br><br>'; ?>

<?php echo 'Задача №3 --- Решение:<br>';
echo preg_replace('#aaa(?=b)#', '!','waaa baaa aaab');
echo '<br><br>'; ?>

<?php echo 'Задача №4 --- Решение:<br>';
echo preg_replace('#aaa(?!b)#', '!','waaa baaa aaab aaaw');
echo '<br><br>'; ?>

<?php echo 'Задача №5 --- Решение:<br>';
echo preg_replace('#(?<!\*)\*(?!\*)#', '!','aaa * bbb ** eee * **');
echo '<br><br>'; ?>

<?php echo 'Задача №6 --- Решение:<br>';
echo preg_replace('#(?<!\*)\*\*(?!\*)#', '!','aaa * bbb ** eee *** kkk ****');
echo '<br><br>'; ?>

<?php echo 'Задача №7 --- Решение:<br>';
echo preg_replace('#([a-z])(?=\1)#', '!','aaa * bbb ** eee *** kkk ****');
echo '<br><br>'; ?>

<?php echo 'Задача №8 --- Решение:<br>';
echo preg_replace('#(?<=([a-z]))\1#', '!', 'aaa * bbb ** eee *** kkk ****');
echo '<br><br>'; ?>

<?php echo 'Задача №9 --- Решение:<br>';
echo preg_replace_callback('#(\d)#', 'stepen', '123');

function stepen($val) {
    return ($val[0]*$val[0]);
}
echo '<br><br>'; ?>

<?php echo 'Задача №10 --- Решение:<br>';
$str = preg_quote("2aaa'3'bbb'4'");
echo preg_replace_callback('#(?<=\\\')(\d+)(?=\\\')#', 'stepen', $str);
echo '<br><br>'; ?>