<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h6> This is Session Page </h6><br>
    <a href="demo.php"><h6>Redirecting to Demo Page</h6></a><br> -->
    <form action="session.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        password: <br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])){

        if(!empty($_POST["username"]) &&
           !empty($_POST["password"])){

            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            // echo $_SESSION["username"] . "<br>";
            // echo $_SESSION["password"] . "<br>";

            header("Location: demo.php");
        }
        else{
            echo "Missing username/password <br>";
        } 
    }
    
    // echo $_SESSION["username"] . "<br>";
    // echo $_SESSION["password"] . "<br>";
?>