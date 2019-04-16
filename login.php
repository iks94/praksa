<?php

    include("process.php");

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>Alpha by HTML5 UP - Log In</title>
</head>
<body>
<div class="header">
        <div class="title"><h2><a href="#">Alpha</a> by HTML5 UP</h2></div>
    </div>

    <div class="spinner" id="spinner">
        <img src="static/spinner.svg">
    </div>

    <div class="cover">
        <div class="banners">
            <form action="" method="POST">
                <label>Email: </label>
                <input type="text" id="mail" class="mail" name="mail" placeholder="mail@mail.com">
                <label>Password: </label>
                <input type="password" id="pass" class="pass" name="pass" placeholder="Password">
                <?php echo $error?>
                <input type="submit" name="submit" id="submit" class="submit" value="Login">
            </form>
        </div>
    </div>

    

    

</body>
</html>