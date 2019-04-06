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

	$sql = "create table profiles(
	email varchar(40), 
	designation varchar(30), 
	industry varchar(30), 
	function varchar(30)
	)";

	if ($conn->query($sql) === TRUE) {
	    echo "\nTable profiles created successfully";
	} else {
	    echo "\nError creating table: " . $conn->error;
	}

	$email = $_SESSION["email"];
	$designation = $_POST["designation"];
	$industry = $_POST["industry"];

	$sql = "INSERT INTO profiles(email, designation, industry)
	VALUES ('$email', '$designation', '$industry')";

	if (mysqli_query($conn, $sql)) {
		echo "\nInserted into profiles successfully";
	} else {
		echo "\nError: " . $sql . "<br>" . mysqli_error($conn);
	}

	$i = 0;
	while($i < $_POST["numskills"]) {
		$skill = $_POST["skill"][$i];
		$proficiency = $_POST["skill_prof"][$i];

		$sql = "INSERT INTO skills(email, skill, proficiency)
				VALUES ('$email', '$skill', '$proficiency')";

		if (mysqli_query($conn, $sql)) {
		echo "\nInserted into skills successfully";
		} else {
		echo "\nError: " . $sql . "<br>" . mysqli_error($conn);
		}
		$i= $i + 1;
	}

	$i = 0;
	while($i < $_POST["numlangs"]) {
		$language = $_POST["language"][$i];
		$proficiency = $_POST["language_prof"][$i];

		$sql = "INSERT INTO languages(email, language, proficiency)
				VALUES ('$email', '$language', '$proficiency')";

		if (mysqli_query($conn, $sql)) {
		echo "\nInserted into languages successfully";
		} else {
		echo "\nError: " . $sql . "<br>" . mysqli_error($conn);
		}
		$i= $i + 1;

	}

	$i = 0;
	while($i < $_POST["numjobs"]) {
		$position = $_POST["position"][$i];
		$company = $_POST["company"][$i];
		$start_date = $_POST["start_date"][$i];
		$end_date = $_POST["end_date"][$i];
		$description = $_POST["description"][$i];

		$sql = "INSERT INTO experiences(email, position, company, startdate, enddate, description)
				VALUES ('$email', '$position', '$company', '$start_date', '$end_date', '$description')";

		if (mysqli_query($conn, $sql)) {
		echo "\nInserted into jobs successfully";
		} else {
		echo "\nError: " . $sql . "<br>" . mysqli_error($conn);
		}
		$i= $i + 1;

	}

	$i = 0;
	while($i < $_POST["numqual"]) {
		$school = $_POST["school"][$i];
		$start_year = $_POST["start_year"][$i];
		$end_year = $_POST["end_year"][$i];
		$description = $_POST["course"][$i];

		$sql = "INSERT INTO education(email, school, startdate, enddate, description)
				VALUES ('$email', '$school', '$start_year', '$end_year', '$description')";

		if (mysqli_query($conn, $sql)) {
		echo "\nInserted into education successfully";
		} else {
		echo "\nError: " . $sql . "<br>" . mysqli_error($conn);
		}
		$i= $i + 1;

	}

	header('Location:http://localhost/profile.php');

	$conn->close();
?>