<?php echo 'Задача №1 --- Решение:<br>';
$name = 'Иван';

echo 'Привет, '.$name.'!<br>';
echo "Привет, $name!";
echo '<br><br>'; ?>

<?php echo 'Задача №2 --- Решение:<br>';
$arr = ['name'=>'Иван', 'age'=>30];

echo 'Привет, '.$arr['name'].'! Тебе '.$arr['age'].'лет.<br>';
echo "Привет, {$arr['name']}! Тебе {$arr['age']} лет.";
echo '<br><br>'; ?>

<?php echo 'Задача №3 --- Решение:<br>';
$text = '!!!';
echo '<p>'.$text.'</p>';
echo "<p>$text</p>";
echo '<br><br>'; ?>

<?php echo 'Задача №4 --- Решение:<br>';
$href = 'index.html';
$text = 'ссылка';
echo '<a href="'.$href.'">'.$text.'</a><br>';
echo "<a href=\"$href\">$text</a>";
echo '<br><br>'; ?>

<?php echo 'Задача №5 --- Решение:<br>';
$arr = [1, 2, 3, 4, 5];
foreach ($arr as $value) {
    echo "<p>$value</p>";
}
echo '<br><br>'; ?>

<?php echo 'Задача №6 --- Решение:<br>';
$arr = [1, 2, 3, 4, 5];
echo "<ul>";
foreach ($arr as $value) {
    echo "<li>$value</li>";
}
echo "</ul>";
echo '<br><br>'; ?>

<?php echo 'Задача №7,8 --- Решение:<br>';
$arr = [
	['href'=>'1.html', 'text'=>'ссылка 1'],
	['href'=>'2.html', 'text'=>'ссылка 2'],
	['href'=>'3.html', 'text'=>'ссылка 3'],
];
echo "<ul>";
foreach ($arr as $value) {
    echo "<li><a href=\"$value[href]\">$value[text]</a></li>";
}
echo "</ul>";
echo '<br><br>'; ?>

<?php echo 'Задача №9 --- Решение:<br>';
$arr = [
	['name'=>'Коля', 'age'=>30, 'salary'=>500],
	['name'=>'Вася', 'age'=>31, 'salary'=>600],
	['name'=>'Петя', 'age'=>32, 'salary'=>700],
];
echo "<table><tr>";
foreach ($arr as $value) {
    echo "<tr>
            <td>$value[name]</td>
            <td>$value[age]</td>
            <td>$value[salary]</td>
        </tr>";
}
echo "</tr></table>";
echo '<br><br>'; ?>