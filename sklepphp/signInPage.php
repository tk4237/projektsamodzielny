<?php
    session_start();
    require_once "systemClass.php";
    require_once "database.php";

    SystemClass::blockEntraceSigned("index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="signIn.php" method="post">
        <label>E-mail</label>
        <input type="email" name="email" id="" />
        <label>Password</label>
        <input type="password" name="password" id="" />
        <input type="submit" value="Zaloguj się" />
    </form>
    <?php
        if(isset($_SESSION['signInError'])) {
            echo "<p class='blueColor' style='color: red'>Niepoprawny login lub hasło!</p>";
        }
    ?>
</body>
</html>