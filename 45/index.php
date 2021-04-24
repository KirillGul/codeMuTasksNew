<?php
//Устанавливаем доступы к базе данных:
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = 'root'; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных

 $link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
 mysqli_query($link, "SET NAMES 'utf8'");
 
/*echo "<pre>";
var_dump($_GET['page']);
var_dump($_SERVER['REQUEST_URI']);
echo "</pre>";*/

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = '/45';
    }

    $query = "SELECT * FROM pagesJ WHERE url='$page'";
    $result = mysqli_query($link, $query) or die( mysqli_error($link) );
    $page = mysqli_fetch_assoc($result);
   
    if (!$page) {
        $query = "SELECT * FROM pagesJ WHERE url='404'";
        $result = mysqli_query($link, $query) or die( mysqli_error($link) );
        $page = mysqli_fetch_assoc($result);
        header("HTTP/1.0 404 Not Found");
    }

    $title = $page['title'];
    $content = $page['text'];

    include "layout.php";