<?php
include('config.php');
include('custom.php');

if (isset($_POST['submit'])) {
    session_start();
    $fnm = $_POST['fnm'];
    $unm = $_POST['unm'];
    $pwd = $_POST['pwd'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $ch = curl_init("register.php");
    $checkemail = CheckEmail($email);

    if ($checkemail) {
        if (Display('The email address is already registered with us!')) {
            header("Refresh: 0");
            exit();
        }
    }

    $checkusername = CheckUsername($unm);

    if ($checkusername) {
        if (Display('The username is already registered with us!')) {
            header("Refresh: 0");
            exit();
        }
    }

    if (!$checkemail && !$checkusername) {
        $registeruser = RegisterUser($fnm, $unm, $pwd, $email);
        if ($registeruser) {
            if (Display('Registered Successfully!')) {
                header('Location: login.php');
                exit();
            }
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WELCOME | MyVIT Drive Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css"/>


</head>
<body style="background-image: url('style/loginbg.jpg');background-size: cover">
<div class="login-page" style="height: 100%; overflow: hidden;padding: 3% 0 0">
    <div class="form">
        <form method="post">
            <input required type="text" placeholder="Fullname" name="fnm"/>
            <input required type="text" placeholder="Username" name="unm"/>
            <input required type="password" placeholder="Password" name="pwd"/>
            <input required type="text" placeholder="Email Address" name="email"/>
            <input type="submit" name="submit" id="newbtn">
            <p class="message">Already registered? <a href="login.php">Sign In</a></p>
        </form>
    </div>
</div>
</body>
</html>
