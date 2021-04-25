<?php
//Устанавливаем доступы к базе данных:
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = 'root'; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных

 $link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
 mysqli_query($link, "SET NAMES 'utf8'");

    function showPageTable($link, $info="") {
        $query = "SELECT * FROM pagesJ WHERE url!='404'";
        $result = mysqli_query($link, $query) or die( mysqli_error($link) );
        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    
        $content = "<table>
            <tr>
                <th>Title</th>
                <th>URL</th>
                <th>edit</th>
                <th>delete</th>
            </tr>";        
        foreach ($data as $page) {
            $content .= "<tr>
                <td>{$page['title']}</td>
                <td>{$page['url']}</td>
                <td><a href=\"/45/admin/edit.php?id={$page['id']}\">edit</a></td>
                <td><a href=\"?delete={$page['id']}\">delete</a></td>
            </tr>";    
        }
        $content .= "</table>";

        $title = "admin main page";

        include "layout.php";
    }

    function deletePage($link) {
        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $query = "DELETE FROM pagesJ WHERE id=$id";
            mysqli_query($link, $query) or die( mysqli_error($link) );

            return [
                'text' => 'Page added succesfully', 
                'status' => 'success'
            ];
        } else {
            return 'false';
        }
    }

if (isset($_GET['added'])) {
    $info = [
        'text' => 'Page added succesfully', 
        'status' => 'success'
    ];
} else {
    $info = deletePage($link);
}

showPageTable($link, $info);