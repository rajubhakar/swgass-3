<?php 
if($_POST['password']==$_POST['cpass']){
require('connect.php');
if(isset($_POST['username']) && isset ($_POST['password'])){
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpass = $_POST['cpass'];
	$email = $_POST['email'];
	$resident=$_POST['resident'];
	$city=$_POST['city'];	
	
	
	$sql= "INSERT INTO xyz (Name, UserName, Password, ConfirmPassword, Email, resd, City) VALUES ('$name', '$username', '$password', '$cpass', '$email', '$resident', '$city' )";
	if (mysqli_query($conn, $sql)) {
    {echo "User Registered. Click here	"; echo '<a href="index.php" style="text-decoration:none; font-size:30px; color:red;">Visit Site</a>';}
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}}
else

{
	echo '<script language="javascript">';
echo 'alert("Password does not match")';
echo '</script>';
}
?>