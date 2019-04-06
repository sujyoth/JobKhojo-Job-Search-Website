<?php
	session_start();
	$email=$_SESSION['email'];
	$fname=$_SESSION['fname'];
	$lname=$_SESSION['lname'];

	$server="localhost";
	$uname="root";
	$pwd="";
	$db="JobKhojo";

	$conn=mysqli_connect($server, $uname, $pwd, $db);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql="SELECT * FROM employees where email='$email'";
  	$result=mysqli_query($conn, $sql);

  	while($row=mysqli_fetch_assoc($result))
  	{
    	$phone = $row["phone"];
  	}

	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$target_file = $target_dir . $phone . '.' . $imageFileType;

	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 1000000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	    	$sql = "create table images(
			email varchar(40), 
			filename varchar(70)
			)";
			if ($conn->query($sql) === TRUE) {
			    echo "\nTable images created successfully";
			} else {
			    echo "\nError creating table: " . $conn->error;
			}
			$sql = "INSERT INTO images(email, filename)
					VALUES ('$email', '$target_file')";

					if (mysqli_query($conn, $sql)) {
						echo "\nInserted into images successfully";
					} else {
						echo "\nError: " . $sql . "<br>" . mysqli_error($conn);
					}

	        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	        header('Location:http://localhost/profile.php');
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}
?>