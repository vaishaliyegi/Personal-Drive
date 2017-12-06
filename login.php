<?php

include('config.php');
include('custom.php');

if (isset($_SESSION['u_unm'])) {
    header('Location: home.php');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $unm = $_POST['unm'];
    $pwd = $_POST['pwd'];

    $login = Login($unm, $pwd);

    if ($login) {
        header('location: index.php');
    } else {
        if (Display('Your Login Name or Password is invalid')) {
            header('Refresh: 0');
            exit();
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My VIT Drive</title>
    <link rel="stylesheet" type="text/css" href="css/login.css"/>


</head>
<body style="background-image: url('style/loginbg.jpg');background-size: cover">
<div class="login-page">
    <div class="form">
        <form method="post">
            <input required type="text" placeholder="Username" name="unm">
            <input required type="password" placeholder="Password" name="pwd">
            <input type="submit" name="register" class="btn" id="newbtn">
            <p class="message">New user? <a href="register.php">Register here</a></p>
        </form>
    </div>
</div>
</body>
</html>
