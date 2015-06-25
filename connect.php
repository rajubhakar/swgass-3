<?php
$username = "root";
$password = "";
$hostname = "localhost"; 
$dbname="forbanking";

$conn = mysqli_connect($hostname, $username, $password, $dbname);  
  if(!$conn){
  die("Unable to connect to MySQL".mysqli_connect_error());}
?>