<?php

    require_once('config.php');

    if(empty($_POST['username'])){
        $errormsg = "Username is required!";
        header("Location: index.php?errormsg=$errormsg");
    }

    if(empty($_POST['password'])){
        $errormsg = "Password is required!";
        header("Location: index.php?errormsg=$errormsg");
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password = '$password'";

    $result = mysqli_query($conn, $sql);

    if($result){
        $row = mysqli_num_rows($result);
        if($row > 0){
            $_SESSION['username'] = $username;
            header("Location: grades.php");
        }else{
            $errormsg = "Invalid credentials!";
            header("Location: index.php?errormsg=$errormsg");
        }
    }else{
        print "some error happened idk";
    }
?>