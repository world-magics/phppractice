<?php
require_once 'config/bootstrap.php';
// var_dump($_SERVER);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $title=$_POST['title'];
    $body=$_POST['body'];

    $result=Post::create($title,$body);

    // var_dump($result);
    if($result==1){
        header("Location:index.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    
</head>
<body>
    
<form method='POST' action=''>
    <div>
        <input type='text' name='title' placeholder='title'>
    </br>
    </br>
    </div>
    <div>
        <textarea name="body" cols="30" rows="10" placeholder='post body'>
    
        </textarea>
    </div>
    <div>
        <button type='submit'>Submit</button>
    </div>
</form>
</body>
</html>