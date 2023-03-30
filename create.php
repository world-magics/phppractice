<?php
require_once 'config/bootstrap.php';
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="practice1css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">
    <title>Sign-Up-Form</title>

    <style>
        * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Alkatra', cursive;
}

#sign-form {
    width: 50%;
    height: 100%;
    margin: 10vh auto;
    /* background-color: brown; */
    padding: 5%;
}

label:not(label:first-of-type) {
    display: block;
    margin: 15px 0 5px 0;
    font-size: 14px;
}

.sentence-agree {
    display: inline;
    font-size: 14px;
}

#submit {
    display: block;
    width: 100%;
    height: 30px;
    padding: 0 20px;
    background-color: #333399 !important;
    color: #fff !important;
    font-size: 1rem;
    cursor: pointer;
}

#submit:hover {
    background-color: #23236a !important;
}

div.hr-left, div.hr-right {
    width: 30%;
    height: 1px;
    background-color: #cccccc;
}

p.guide-google {
    font-size: 14px;
    color: #cccccc;
    width: 40%;
    margin: auto 5px;
}

input:not(input#terms-agree) {
    background-color: #fff; 
    width: 100%;
    height: 45px;
    padding-left: 20px;
    border: 1px solid #cccccc;
    border-radius: 30px;
    color: #333399;
}

input:focus {
    outline: 1px solid #333399;
}

.google-sign-btn {
    width: 100%;
    height: 45px;
    border: 1px solid #cccccc;
    border-radius: 30px;
    outline: none;
    background-color: #fff;
    font-size: 1rem;
    cursor: pointer;
}

.google-sign-btn:hover {
    background-color: #cccccc;
}

i.fa-google {
    font-size: 25px;
    margin-right: 5px;
    vertical-align: middle;  
    color: #333399;
}

.form-caption {
    color: #737373;
    margin-bottom: 30px;;
}

.star-required {
    color:#333399;
}

input[type=checkbox] {
    margin: 30px 0 30px 0;
    accent-color: #333399;
}

a {
    color: #333399;
    text-decoration: none;
    font-size: 14px;
}

a:hover {
    color: #23236a;
}

.have-account-line {
    margin: 30px 0 30px 0;
    font-size: 14px;
}

.info {
    color: #737373;
    font-size: 14px;
}

.google-guide-container {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 20px 0;
}
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post" class="sign-form" id="sign-form" autocomplete="on">
            <h1 class="form-title">Sign Up</h1>
            <p class="form-caption">See your growth and get consulting support!</p>
            <button class="google-sign-btn"><i class="fa fa-google"></i> Sign up with Google</button>

            <br>

            <div class="google-guide-container">
                <div class="hr-left"></div>
                <p class="guide-google">or Sign up with Email</p>
                <div class="hr-right"></div>
            </div>

            <label for="username">Name<span class="star-required">*</span></label>
            <input type="text" name="username" id="username" placeholder="Name" autofocus required>

            <label for="email">Email<span class="star-required">*</span></label>
            <input type="email" name="email" id="email" placeholder="mail@website.com" required>

            <label for="password">Password<span class="star-required">*</span></label>
            <input type="password" name="password" id="password" placeholder="Min. 8 character" required>
           
            <br>

            <input type="checkbox" name="terms-agree" id="terms-agree" required>
            <p class="sentence-agree">I agree to the <a href="">Terms & Conditions</a></p>

            <input type="submit" value="Sign Up" id="submit">

            <p class="have-account-line">Already have an Account? <a href="">Sign in</a></p>

            <p class="info">&copy;2023 Felix All rights reserved.</p>
        </form>
    </div>
</body>
</html>

