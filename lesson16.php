<?php echo 'Задача №1 --- Решение:<br>';
$arr = [];
for ($i=1; $i<=5; $i++) {
    for ($j=1; $j<=$i; $j++)
        $arr[$i-1] .= 'x';
}
var_dump($arr);
echo '<br><br>'; ?>

<?php echo 'Задача №2 --- Решение:<br>';
$arr = [];
for ($i=1; $i<=5; $i++) {
    for ($j=1; $j<=$i; $j++)
        $arr[$i-1] .= $i;
}
var_dump($arr);
echo '<br><br>'; ?>

<?php echo 'Задача №3 --- Решение:<br>';
$arr = arrayFill('x', 5);

function arrayFill($elem, $countelem) {
    $a = [];
    for($i=0; $i<$countelem; $i++) {
        $a[] = 'x';
    }
    return $a;
}
var_dump($arr);
echo '<br><br>'; ?>

<?php echo 'Задача №4 --- Решение:<br>';
$arr = [10,2,3,4,5,6,7,8,9];
$sum = 0;
for($i=0, $count=0; $i<=$sum; $i++, $count++) {
    if ($sum > 10) break;
    $sum += $arr[$i];
}
echo $count;
echo '<br><br>'; ?>

<?php echo 'Задача №5 --- Решение:<br>';
$arr = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($arr as $elem) {
    foreach ($elem as $key=>$subvalue) {
        $sum += $subvalue;
    }   
}
echo $sum;
echo '<br><br>'; ?>

<?php echo 'Задача №6 --- Решение:<br>';
$arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
$sum = 0;
foreach ($arr as $elem) {
    foreach ($elem as $subvalue) {
        foreach ($subvalue as $subsubvalue) {
            $sum += $subsubvalue;
        }
    }   
}
echo $sum;
echo '<br><br>'; ?>

<?php echo 'Задача №7 --- Решение:<br>';
$arr =[];

for ($i = 0, $k = 1; $i<3; $i++) {
    for ($j=0; $j<3; $j++, $k++)
        $arr[$i][$j] = $k;
}
echo "<pre>";
var_dump($arr);
echo "</pre>";
echo '<br><br>'; ?>