<?php
session_start();
?>
<head>
	<style type="text/css">
		    body {
  font-family: "Helvetica Neue", Helvetica, Arial;
  font-size: 14px;
  line-height: 20px;
  font-weight: 400;
  color: #3b3b3b;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
  
}
@media screen and (max-width: 580px) {
  body {
    font-size: 16px;
    line-height: 22px;
  }
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
.wrapper {
  margin: 0 auto;
  padding: 40px;
  max-width: 800px;
}

.table {
  margin: 0 0 40px 0;
  width: 100%;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
  display: table;
}
@media screen and (max-width: 580px) {
  .table {
    display: block;
  }
}

.row {
  display: table-row;
  background: #f6f6f6;
}
.row:nth-of-type(odd) {
  background: #e9e9e9;
}
.row.header {
  font-weight: 900;
  color: #ffffff;
  background: #ea6153;
}
.row.green {
  background: #27ae60;
}
.row.blue {
  background: #2980b9;
}
@media screen and (max-width: 580px) {
  .row {
    padding: 14px 0 7px;
    display: block;
  }
  .row.header {
    padding: 0;
    height: 6px;
  }
  .row.header .cell {
    display: none;
  }
  .row .cell {
    margin-bottom: 10px;
  }
  .row .cell:before {
    margin-bottom: 3px;
    content: attr(data-title);
    min-width: 98px;
    font-size: 10px;
    line-height: 10px;
    font-weight: bold;
    text-transform: uppercase;
    color: #969696;
    display: block;
  }
}

.cell {
  padding: 6px 12px;
  display: table-cell;
}
@media screen and (max-width: 580px) {
  .cell {
    padding: 2px 16px;
    display: block;
  }
}

	</style>
</head>
<?php
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

$company = $_GET["company"];
$industry = $_GET["industry"];
$designation = $_GET["designation"];
$experience = $_GET["experience"];
$salary = $_GET["salary"];
$education = $_GET["education"];
$city = $_GET["city"];

/*if($company == "") {
	$company = "%%";
}
if($industry == "") {
	$industry = "%%";
}
if($designation == "") {
	$designation = "%%";
}
if($experience == "") {
	$experience = 0;
}
if($salary == "") {
	$salary = 0;
}
if($education == "") {
	$education = "%%";
}
if($city == "") {
	$city = "%%";
}*/

$sql="SELECT * FROM listings where company like '%$company%' and industry like '%$industry%' and designation like '%$designation%' and experience >='$experience' and salary >='$salary' and education like '%$education%' and city like '%$city%' ";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result)==0) {
		echo "<script>alert('No jobs found.');</script>";
		//header('Location:http://localhost/search_jobs.php');
}

echo "<h2 align=\"center\">Search Results</h2>
	<div class=\"table\">
	<div class=\"cell\">
      </div>
      <div class=\"cell\">
        <b>Company Name</b>
      </div>
      <div class=\"cell\">
        Industry
      </div>
      <div class=\"cell\">
        Designation
      </div>
      <div class=\"cell\">
        Experience
      </div>
      <div class=\"cell\">
        Salary
      </div>
      <div class=\"cell\">
        Education
      </div>
      <div class=\"cell\">
        City
      </div>
      ";
while($row=mysqli_fetch_assoc($result))
{	$com = $row['company'];
	$ind = $row['industry'];
	$des = $row['designation'];
	$exp = $row['experience'];
	$sal = $row['salary'];
	$edu = $row['education'];
	$cit = $row['city'];
	echo "
	<div class=\"row\">
      <div class=\"cell\" >
        <b>$com</b>
      </div>
      <div class=\"cell\">
        $ind
      </div>
      <div class=\"cell\" >
        $des
      </div>
      <div class\"cell\">
        $exp+ Years
      </div>
      <div class=\"cell\">
        ₹$sal
      </div>
      <div class=\"cell\">
        $edu 
      </div>
      <div class=\"cell\">
        $cit
      </div>
      <div class=\"cell\">
        <button class=\"button button2\">Apply</button>
      </div>
    </div>";
}
echo "</div>";
?>