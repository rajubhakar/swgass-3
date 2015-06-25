<?php
session_start();
$error=''; 
if (isset($_POST['btn-login'])) {
if (empty($_POST['myusername']) || empty($_POST['mypassword'])) {
$error = "Username or Password is invalid";
}
else
{

$username=$_POST['myusername'];
$password=$_POST['mypassword'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$db = mysql_select_db("forbanking", $connection);

$query = mysql_query("select * from xyz where Password='$password' AND UserName='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>