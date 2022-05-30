<?php
    session_start();
    $host = 'database';
    $user = 'ddavid';
    $pass = 'davidpw';
    $database = 'dockertestdb';

    $conn = new mysqli($host, $user, $pass, $database);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>