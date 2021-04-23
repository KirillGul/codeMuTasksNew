<?php 
    if (isset($_GET['page'])) {
        $pages = $_GET['page'];
    } else {
        $pages = 'index';
    }
   
    $path = "pages/$pages.php";
    if (file_exists($path)) {
        $content = file_get_contents($path);
    } else {
        $content = file_get_contents("pages/404.php");
        header("HTTP/1.0 404 Not Found");
    }    

    //$reg= "#<title>(.*?)(</title>?)#";
    $reg= "#\{\{title:(.*?)\}\}#";
    if (preg_match($reg, $content, $match)) {
        $title = $match[1];
        $content = trim(preg_replace($reg, "", $content));
    } else $title = '';
        
    //$reg= "#<meta name=\"description\" content=\"(.*?)(\">?)#";
    $reg= "#\{\{desc:(.*?)\}\}#";        
    if (preg_match($reg, $content, $match)) {
        $desc = $match[1];
        $content = trim(preg_replace($reg, "", $content));
    } else $desc = '';

    include "layout.php";