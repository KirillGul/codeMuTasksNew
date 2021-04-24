<?php
   function createLink($href, $text) {    
        if ((!isset($_GET['page']) and $href == "/45") or $_GET['page'] == $href) 
            $class = '" class="active"';
        else 
            $class = '';

        if ($href == '/45') {
            $uriPart = "";
            //echo "<a href=\"/45\"$class>$text</a>";
        } else {
            $uriPart = "/45/?page=";
            //echo "<a href=\"/45/?page=$href\"$class>$text</a>";
        }
        echo "<a href=\"$uriPart$href\"$class>$text</a>";
    }

    //createLink('index.php', 'main');
    //createLink('?page=about', 'about');

    $query = "SELECT * FROM pagesJ WHERE url!='404'";
    $result = mysqli_query($link, $query) or die( mysqli_error($link) );
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    foreach ($data as $page) {
        createLink($page['url'], $page['text']);
    }    
?>