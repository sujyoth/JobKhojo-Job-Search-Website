<?php
session_start();
$server="localhost";
$uname="root";
$pwd="";
$db="JobKhojo";

$conn=mysqli_connect($server, $uname, $pwd, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email=$_POST["username"];
$password=$_POST["pwd"];

$sql="SELECT * FROM Employees where email='$email' and password='$password'";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result)==0) {
		//header('Location:http://localhost/home_new.php#login');
		echo "<script>alert('Wrong email/password combination. Please try again.');</script>";
}
while($row=mysqli_fetch_assoc($result))
{
	session_start();
	$_SESSION["email"]=$row["email"];
	$_SESSION["fname"]=$row["fname"];
	$_SESSION["lname"]=$row["lname"];
	header('Location:http://localhost/home_new.php');
}
?>
