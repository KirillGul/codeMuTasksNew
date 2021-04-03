<?php echo 'Задача №1 --- Решение:<br>';
echo "<pre>";var_dump($_REQUEST);echo "</pre><br>";
    
if (!empty($_REQUEST['name'])) {
    if ($_REQUEST['hello'] == 1) echo "Привет ".$_REQUEST['name']."!";
    else echo "Пока ".$_REQUEST['name']."!";
}
?>

<form action="" method="GET">
    Введите ваше имя - <?php echo inpute('text', 'name'); ?><br>
    <?php echo inpute('checkbox', 'hello', '1'); ?><br>
    <input type="submit" value="Отбравить">
</form>

<?php //Задача 7, 8, 9, 10 и свои доработки
function inpute($type, $name, $value = "", $placeholder = "", $ckeck=0) {
    if (isset($_REQUEST[$value])) {
        $value = $_REQUEST[$value];
    }

    if ($type == 'checkbox') {
        if (empty($value)) {
            $strhidden = "<input type='hidden' name='".$name."' value='0'>";
            $str .= " value='".$value."'";
        }
        else $str .= " value='".$value."'";
    } elseif(!empty($value)) $str .= " value='".$value."'";

    if ($type == 'checkbox') {
        if(isset($_REQUEST[$name])) $str .= ' checked';
        elseif(!empty($ckeck)) $str .= ' checked'; 
    } elseif(!empty($ckeck)) $str .= ' checked';

    $str = "<input type='".$type."' name='".$name."'";    
    if(!empty($placeholder)) $str .= " placeholder='".$placeholder."'";    
    $str .= ">";

    $str .= $strhidden;
    return $str;
}
echo '<br><br>'; ?>



<?php echo 'Задача №2 --- Решение:<br>';
echo "<pre>";var_dump($_REQUEST);echo "</pre><br>";
    
if (!empty($_REQUEST['nameLang'])) {
   echo implode(', ', $_REQUEST['nameLang']);
}
?>

<form action="" method="GET">
    Какие языки вы знаете?<br>
    HTML<?php echo inpute('checkbox', 'nameLang[]', 'html'); ?><br>
    CSS<?php echo inpute('checkbox', 'nameLang[]', 'css'); ?><br>
    PHP<?php echo inpute('checkbox', 'nameLang[]', 'php'); ?><br>
    JavaScript<?php echo inpute('checkbox', 'nameLang[]', 'javascript'); ?><br>
    <input type="submit" value="Отбравить">
</form>
<?php echo '<br><br>'; ?>



<?php echo 'Задача №3 --- Решение:<br>';
echo "<pre>";var_dump($_REQUEST);echo "</pre><br>";
    
if ($_REQUEST['knowPHP'] == 1) echo "Да";
else echo "Нет";
?>

<form action="" method="GET">
    Знаете ли вы PHP? | 
    Да<?php echo inpute('radio', 'knowPHP', '1', '', 1); ?>
    Нет<?php echo inpute('radio', 'knowPHP', '2'); ?>
    <br>
    <input type="submit" value="Отбравить">
</form>
<?php echo '<br><br>'; ?>



<?php echo 'Задача №4 --- Решение:<br>';
echo "<pre>";var_dump($_REQUEST);echo "</pre><br>";
    
if (!empty($_REQUEST['year'])) {
    if ($_REQUEST['year'] == '1') echo "менее 20 лет";
    if ($_REQUEST['year'] == '2') echo "20-25";
    if ($_REQUEST['year'] == '3') echo "26-30";
    if ($_REQUEST['year'] == '4') echo "более 30";
}
?>

<form action="" method="GET">
    Ваш возраст? | <br>
    менее 20 лет <?php echo inpute('radio', 'year', '1'); ?><br>
    20-25 <?php echo inpute('radio', 'year', '2'); ?><br>
    26-30 <?php echo inpute('radio', 'year', '3'); ?><br>
    более 30 <?php echo inpute('radio', 'year', '4'); ?><br>
    <input type="submit" value="Отбравить">
</form>

<?php echo '<br><br>'; ?>



<?php echo 'Задача №5 --- Решение:<br>';
echo "<pre>";var_dump($_REQUEST);echo "</pre><br>";
    
if (!empty($_REQUEST['yearSel'])) {
    if ($_REQUEST['yearSel'] == '1') echo "менее 20 лет";
    if ($_REQUEST['yearSel'] == '2') echo "20-25";
    if ($_REQUEST['yearSel'] == '3') echo "26-30";
    if ($_REQUEST['yearSel'] == '4') echo "более 30";
}
?>

<form action="" method="GET">
    Ваш возраст? | <br>
    <select name="yearSel">
        <option value="1">менее 20 лет</option>
        <option value="2">20-25</option>
        <option value="3">26-30</option>
        <option value="4">более 30</option>
    </select>
    <input type="submit" value="Отбравить">
</form>

<?php echo '<br><br>'; ?>



<?php echo 'Задача №6 --- Решение:<br>';
echo "<pre>";var_dump($_REQUEST);echo "</pre><br>";
    
if (!empty($_REQUEST['yearSel2'])) {
    echo implode (',', $_REQUEST['yearSel2']);
}
?>

<form action="" method="GET">
    Ваш возраст? | <br>
    <select name="yearSel2[]" multiple>
        <option value="менее 20 лет">менее 20 лет</option>
        <option value="20-25">20-25</option>
        <option value="26-30">26-30</option>
        <option value="более 30">более 30</option>
    </select>
    <input type="submit" value="Отбравить">
</form>

<?php echo '<br><br>'; ?>



<?php echo 'Задача №7 --- Решение:<br>';
echo "<pre>";var_dump($_REQUEST);echo "</pre><br>";
    
if (!empty($_REQUEST['yearSel2'])) {
    echo implode (',', $_REQUEST['yearSel2']);
}
?>

<form action="" method="GET">
    Ваш возраст? | <br>
    <select name="yearSel2[]" multiple>
        <option value="менее 20 лет">менее 20 лет</option>
        <option value="20-25">20-25</option>
        <option value="26-30">26-30</option>
        <option value="более 30">более 30</option>
    </select>
    <input type="submit" value="Отбравить">
</form>

<?php echo '<br><br>'; ?>