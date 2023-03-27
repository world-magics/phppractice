<?php
    require_once 'autoload.php';
    $conn=new Database('127.0.0.1','Vlog','root','');

    echo 'Success Connected';
    Post::$pdo=$conn;
?>