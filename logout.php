<?php
require_once './Model/Member.php';
session_start();

if(session_destroy()) // Destroying All Sessions
{
error_reporting(E_ERROR || E_PARSE);
//$user_id=$_SESSION['user_id'];
//$single_login = "UPDATE user_login SET login_status='0',logout_date=NOW() WHERE user_id='$user_id' ";
//$rr_single_login=mysqli_query($conn, $single_login);
//exit();
header("Location: index.php"); // Redirecting To Home Page
}
?>