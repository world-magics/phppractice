<?php
    require_once 'autoload.php';
     
    $database=new Database('127.0.0.1','Vlog','root','');
    $pdo=$database->connect();
    Post::$pdo=$pdo;
    // echo "connect succes";
    // var_dump($posts->title);
?>