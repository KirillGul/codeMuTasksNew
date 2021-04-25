<?php
//Устанавливаем доступы к базе данных:
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = 'root'; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных

$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
mysqli_query($link, "SET NAMES 'utf8'");

function getPage($link, $info = '') {
    $title = "admin edit page";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM pagesJ WHERE id=$id";
        $result = mysqli_query($link, $query) or die( mysqli_error($link) );
        $page = mysqli_fetch_assoc($result);

        if ($page) {
            if (isset($_POST['title']) AND isset($_POST['url']) AND isset($_POST['text'])) {
                $title = $_POST['title'];
                $url = $_POST['url'];
                $text = $_POST['text'];
            } else {
                $title = $page['title'];
                $url = $page['url'];
                $text = $page['text'];        
            }

            ob_start();
            include 'elems/form.php';
            $content = ob_get_clean();

        } else {
            $content = "Page not found";
        }
    } else {
        $content = "Page not found";
    }

    include "layout.php";
}

function addPage($link) {
    if (isset($_POST['title']) AND isset($_POST['url']) AND isset($_POST['text'])) {
        $title = $_POST['title'];
        $url = $_POST['url'];
        $text = $_POST['text'];
        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $query = "SELECT * FROM pagesJ WHERE id=$id";
            $result = mysqli_query($link, $query) or die( mysqli_error($link) );
            $page = mysqli_fetch_assoc($result);

            if ($page['url'] !== $url) {
                $query = "SELECT COUNT(*) as count FROM pagesJ WHERE url='$url'";
                $result = mysqli_query($link, $query) or die( mysqli_error($link) );
                $isPage = mysqli_fetch_assoc($result)['count'];

                if ($isPage == 1) {
                    return [
                        'text' => 'Page whit this url exists!',
                        'status' => 'error'
                    ];
                }
            }

            $query = "UPDATE pagesJ SET title='$title', url='$url', text='$text' WHERE id=$id";
            $result = mysqli_query($link, $query) or die(mysqli_error($link));

            return [
                'text' => 'Page added succesfully', 
                'status' => 'success'
            ];
        }       
    } else {
        return '';
    }
}

$info = addPage($link);
getPage($link, $info);

?>