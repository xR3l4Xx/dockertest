<?php

    include "config.php";

    if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }

    if(isset($_POST['but_logout'])){
        session_destroy();
        header('Location: index.php');
    }

    $username = $_SESSION['username'];
    $sql =  "SELECT s.name, g.grade
        FROM users u
        JOIN grades g ON u.Id = g.userid
        JOIN subjects s ON s.Id = g.subjectid
        WHERE u.username = '$username'";

    if($result = $conn->query($sql)){
        while ($grade = $result->fetch_object()){
            $grades[] = $grade;
        }
    }else{
        echo 'No results?';
    }
?>

<html>
    <head>
        <title>Grades</title>
        <meta charset="utf-8" />
        <style>
            .alert {
                padding: 20px;
                background-color: #f44336;
                color: white;
                max-width: 500px;
            }
            .closebtn {
                margin-left: 15px;
                color: white;
                font-weight: bold;
                float: right;
                font-size: 22px;
                line-height: 20px;
                cursor: pointer;
                transition: 0.3s;
            }

            .closebtn:hover {
                color: black;
            }
        </style>
    </head>
        <form method='post' action="">
            (<?=$username?>)
            <input type="submit" value="Logout" name="but_logout">
        </form>

        <?php
        
            if(isset($grades)){
                echo '<table>';
                echo '<thead>';
                echo '<tr>';
                echo '<th>Subject</th>';
                echo '<th>Grade</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                    foreach ($grades as $grade){
                        echo '<tr><td>' . $grade->name . '</td><td>' . $grade->grade . '</td></tr>';
                    }
                echo '</tbody>';
                echo '</table>';
            }

            if($username == 'admin'){
                echo '<div class="alert">';
                echo '<span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>';
                echo '<strong>Congratulations!</strong> You logged in as admin!';
                echo '</div>';
            }
        ?>
</html>