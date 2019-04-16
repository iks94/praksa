<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "ibis_praksa";

    $connect = mysqli_connect($host,$user,$password);
    mysqli_select_db($connect, $db);

    $error = "";

    

    if(isset($_POST['submit'])){

        if(empty($_POST['mail']) || empty($_POST['pass'])){
            $error = "<p>*Empty fields</p>";
        }
    else {

        $mail = $_POST['mail'];
        $pass = $_POST['pass'];
        

        $result = mysqli_query($connect, "SELECT * FROM users WHERE mail = '$mail' AND password = '".md5($pass)."'");

        if(mysqli_num_rows($result)==1){
            header("Location: main/index.html");
            exit();
        }
        else {
            $error = "<p>*Invalid email or password</p>";
        }
        mysqli_close($connect);

    }

    }

?>
