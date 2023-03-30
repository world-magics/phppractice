<?php
    require_once 'bootstrap.php';
    
    $posts=Post::getAll();
    
    // var_dump($posts);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h1>OOP Blog</h1>
    <ul>
        <?php foreach($posts as $post):?>
        <li>
            <h4><?=$post->title ?> </h4>
            <p><?=$post->body?></p>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>