<?php
session_start();
include('config.php');
$user_check=$_SESSION['u_unm'];
 
$sql = mysqli_query($con,"SELECT u_unm FROM user WHERE u_unm='$user_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$username=$row['u_unm'];

$_SESSION['u_unm']=$row['u_unm'];

if(empty($username))
{
    //echo $username;
header("Location: index.php");
}
?>