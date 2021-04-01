<?php echo 'Задача №1 --- Решение:<br>';
echo kvadrat(2);

function kvadrat ($num) {
   return $num*$num;
}
echo '<br><br>'; ?>

<?php echo 'Задача №2 --- Решение:<br>';
echo int_sum(2, 3);

function int_sum ($num1, $num2) {
   return $num1+$num2;
}
echo '<br><br>'; ?>

<?php echo 'Задача №3 --- Решение:<br>';
echo f3(3, 2, 2);

function f3 ($num1, $num2, $num3) {
   return ($num1-$num2)/$num3;
}
echo '<br><br>'; ?>

<?php echo 'Задача №4 --- Решение:<br>';
echo f4Week(5);

function f4Week ($num1) {
   $week = [1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
   return $week[$num1];
}
echo '<br><br>'; ?>