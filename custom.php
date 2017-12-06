<?php
include('config.php');

$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);


function Display($message){

	echo "<script>alert('$message')</script>";
	return true;
}

function RegisterUser($fnm, $unm, $pwd, $email, $contact, $city)
{
    global $con;

    $fnm = mysqli_real_escape_string($con, $fnm);
    $unm = mysqli_real_escape_string($con, $unm);
    $pwd = mysqli_real_escape_string($con, $pwd);
    $email = mysqli_real_escape_string($con, $email);
    $sql = $con->query("insert into user(u_fnm,u_unm,u_pwd,u_email) values('$fnm','$unm','$pwd','$email')");
    if ($sql) {
        return true;
    } else {
        return false;
    }

}


function Login($unm, $pwd)
{
    global $con;

    $unm = mysqli_real_escape_string($con, $unm);
    $pwd = mysqli_real_escape_string($con, $pwd);

    $sql = "SELECT u_id FROM user WHERE u_unm = '$unm' and u_pwd = '$pwd'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        session_start();
        $_SESSION['u_unm'] = $unm;
        return true;
    } else {
        return false;
    }

}

function CheckEmail($email){
    global $con;

    $email = mysqli_real_escape_string($con,$email);
    $sql = "SELECT email FROM user WHERE email = '$email'";
    $result = mysqli_query($con,$sql);
    $rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count>0)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function CheckUsername($unm){
    global $con;

    $sql = "SELECT u_unm FROM user WHERE u_unm = '$unm'";
    $result = mysqli_query($con,$sql);
    $rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count>0)
    {
        return true;
    }
    else
    {
        return false;
    }
}

?>
