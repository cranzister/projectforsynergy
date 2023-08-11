<!DOCTYPE html>
<form action="check.php" method="POST">
<?php
    session_start();
    $mysqli = new mysqli('localhost', 'root', '', 'projectsynnn');
    require_once('classes/User.php');
    $path = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD'];
    $content = "Страница не найдена";
 ?> 
   
</html>  