<?php echo 'Задача №1 --- Решение:<br>'; ?>
<form action="" method='GET'>
    Введите ваше имя:<input type='text' name='name'>
    <input type='submit'>
</form>
<?php 
if (isset($_GET['name'])) { 
    echo "Привет, ".$name = $_GET['name'];
    
}
?>
<?php echo '<br><br>'; ?>

<?php echo 'Задача №2 --- Решение:<br>'; ?>
<form action="" method='GET'>
    Введите ваше имя:<input type='text' name='name'><br>
    Введите ваш возраст:<input type='text' name='age'><br>
    Введите сообщение:<textarea name='massage'></textarea><br>
    <input type='submit'>
</form>
<?php 
if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['massage'])) { 
    echo "Привет, ".strip_tags($_GET['name']).', '.strip_tags($_GET['age']).' лет.';
    echo "<br>Твоё сообщение:".strip_tags($_GET['massage']);
    
}
?>
<?php echo '<br><br>'; ?>