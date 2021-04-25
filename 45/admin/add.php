<?php
//Устанавливаем доступы к базе данных:
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = 'root'; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных

$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
mysqli_query($link, "SET NAMES 'utf8'");

function getPage($info = '') {
    $title = "admin add page";

    if (isset($_POST['title']) AND isset($_POST['url']) AND isset($_POST['text'])) {
        $title = $_POST['title'];
        $url = $_POST['url'];
        $text = $_POST['text'];
    } else {
        $title = '';
        $url = '';
        $text = '';
    }

    ob_start();
    include 'elems/form.php';
    $content = ob_get_clean();

    include "layout.php";
}

function addPage($link) {
    if (isset($_POST['title']) AND isset($_POST['url']) AND isset($_POST['text'])) {
        $title = $_POST['title'];
        $url = $_POST['url'];
        $text = $_POST['text'];

        $query = "SELECT COUNT(*) as count FROM pagesJ WHERE url='$url'";
        $result = mysqli_query($link, $query) or die( mysqli_error($link) );
        $isPage = mysqli_fetch_assoc($result)['count'];
        
        if ($isPage) {
            return [
                'text' => 'Page whit this url exists!', 
                'status' => 'error'
            ];
        } else {
            $query = "INSERT INTO pagesJ (title, url, text) VALUES ('$title', '$url', '$text')";
            mysqli_query($link, $query) or die( mysqli_error($link) );

            header('Location: /45/admin/?added=1');
        }

        
    } else {
        return '';
    }
}

$info = addPage($link);
getPage($info);

?>