<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h1>Login</h1>
        <form method="post" action="login.php">
            Username: <input type="text" id="username" name="username" /> </br>
            Password: <input type="password" id="password" name="password" /> </br>
            <input type="submit" value="Login" name="login_btn" id="login_btn" /> </br>
        </form>
        <?php
            if(isset($_GET['errormsg'])){
                $errormsg = $_GET['errormsg'];
                echo '<span style="color: red;">' . $errormsg . '</span>';
            }
        ?>
    </body>
</html>