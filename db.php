<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "JobKhojo";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "CREATE TABLE Employees (
email VARCHAR(40)  PRIMARY KEY, 
fname VARCHAR(30),
lname VARCHAR(30),
password VARCHAR(30),
city VARCHAR(50),
phone VARCHAR(13),
gender VARCHAR(20),
dob DATE
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Employees created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$email = $_POST["email"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$password = $_POST["password"];
$city = $_POST["city"];
$phone = $_POST["phone"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];


$sql = "INSERT INTO Employees(email, fname, lname, password, city, phone, gender, dob)
VALUES ('$email', '$fname', '$lname', '$password', '$city', '$phone', '$gender', '$dob')";

if (mysqli_query($conn, $sql)) {
	session_start();
	echo "Account created successfully";
	$_SESSION["email"]=$email;
	$_SESSION["fname"]=$fname;
	$_SESSION["lname"]=$lname;
	header('Location:http://localhost/profile.php');
} else {
	echo "\nError: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();


?>

