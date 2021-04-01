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

<?php echo 'Задача №3 --- Решение:<br>'; ?>
<?php if (!isset($_GET['age'])) { ?>
    <form action="" method='GET'>
        Введите ваш возраст:<input type='text' name='age'><br>
        <input type='submit'>
    </form>
<?php 
} elseif (isset($_GET['age'])) { 
    echo "Привет, ".strip_tags($_GET['name']).', '.strip_tags($_GET['age']).' лет.';
    echo "<br>Твоё сообщение:".strip_tags($_GET['massage']);
    
}
?>
<?php echo '<br><br>'; ?>

<?php echo 'Задача №4 --- Решение:<br>'; ?>
<?php 
$login = "Admin";
$pass = "123";

if (!isset($_GET['login']) && !isset($_GET['pass'])) { 
    echo "Доступ запрещен.<br>";
?>
    <form action="" method='GET'>
        Введите логин:<input type='text' name='login'><br>
        Введите пароль:<input type='password' name='pass'><br>
        <input type='submit'>
    </form>
<?php 
} elseif (strip_tags($_GET['login']) == $login && strip_tags($_GET['pass']) == $pass) {
    echo "Доступ разрешён.<br>";    
} else { echo strip_tags($_GET['login'])."-".$login;?>
    <form action="" method='GET'>
        Введите логин:<input type='text' name='login'><br>
        Введите пароль:<input type='password' name='pass'><br>
        <input type='submit'>
    </form>
<?php
}
?>
<?php echo '<br><br>'; ?>

<?php echo 'Задача №5 --- Решение:<br>';?>
<?php if (isset($_GET['name1'])) {
    $name = $_GET['name1'];
} ?>
    <form action="" method='GET'>
        Введите имя:<input type='text' name='name1' <?php if (isset($_GET['name1'])) echo "value='$name'";?>><br>
        <input type='submit'>
    </form>
<?php echo '<br><br>'; ?>

<?php echo 'Задача №6 --- Решение:<br>';?>
<?php if (isset($_GET['name1'])) $name = $_GET['name1']; ?>
    <form action="" method='GET'>
        Введите имя:<input type='text' name='name1' <?php if (isset($_GET['name1'])) echo "value='$name'";?>><br>
        <textarea name="textarea1"><?php if (isset($_GET['textarea1'])) echo $_GET['textarea1'];?></textarea><br>
        <input type='submit'>
    </form>
<?php echo '<br><br>';?>