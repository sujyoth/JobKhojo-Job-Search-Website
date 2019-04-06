<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "JobKhojo";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("\nConnection failed: " . $conn->connect_error);
} 
echo "\nConnected successfully";

$sql = "create table listings(
company varchar(40),
industry varchar(50),
designation varchar(50),
experience int,
salary int,
education varchar(40),
city varchar(70)
)";

if ($conn->query($sql) === TRUE) {
	echo "\nTable listings created successfully";
} else {
	echo "\nError creating table: " . $conn->error;
}

$company = $_POST["company"];
$industry = $_POST["industry"];
$designation = $_POST["designation"];
$experience = $_POST["experience"];
$salary = $_POST["salary"];
$education = $_POST["education"];
$city = $_POST["city"];

$sql = "INSERT INTO listings(company, industry, designation, experience, salary, education,city)
VALUES ('$company', '$industry', '$designation', '$experience', '$salary', '$education', '$city')";

if (mysqli_query($conn, $sql)) {
	echo "\nInserted into profiles successfully";
	header('Location:http://localhost/listings.php');
} else {
	echo "\nError: " . $sql . "<br>" . mysqli_error($conn);
}
?>