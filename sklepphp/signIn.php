<?php
session_start();
require_once "systemClass.php";
require_once "database.php";

$connection = SystemClass::dbConnect();

if($connection -> connect_errno === 0) {
    $userEmail = htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');
    $userPassword = htmlentities($_POST['password'], ENT_QUOTES, 'UTF-8');

    // echo "email: " . $userEmail . " password: " . $userPassword;

    $sql = sprintf(
        "SELECT * FROM dane WHERE user_email='%s' AND password='%s'",
        mysqli_real_escape_string($connection, $userEmail),
        mysqli_real_escape_string($connection, $userPassword)
    );

    echo "5";

    if($result = $connection -> query($sql)) {
        echo "6";
        if($result -> num_rows > 0) {
            echo "7";
            $data = $result -> fetch_assoc();
            $firstName = $data['firstName'];
            $email = $data['email'];
            $_SESSION['signedIn'] = true;
            unset($_SESSION['signInError']);

            header("Location: index.php");
        } else {
            $_SESSION['signInError'] = true;
            header("LOcation: signInPage.php");
        }
        $result -> close();
    }
    $connection -> close();
}
