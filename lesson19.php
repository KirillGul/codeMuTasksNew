<?php echo 'Задача №1 --- Решение:<br>';
$str = '12345678901011';
$int = 3;

echo cut($str, $int);
echo "<br>";
echo cut($str);

function cut($str, $int=10) {
    return substr($str, 0, $int);
}
echo '<br><br>'; ?>

<?php echo 'Задача №2 --- Решение:<br>';
$arr = [1,2,3,4,5,6];

lastArray($arr);

function lastArray($arr) {
    echo array_shift($arr);
    if (!empty($arr)) lastArray($arr);
}
echo '<br><br>'; ?>

<?php echo 'Задача №3 --- Решение:<br>';
$int = 123456545;

intSumNine($int);

function intSumNine($int) {
    $i = array_sum(str_split($int));
    if ($i > 9) intSumNine($i);
    else echo $i;
}
echo '<br><br>'; ?>