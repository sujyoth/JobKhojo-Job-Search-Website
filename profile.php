<?php
session_start();

if(isset($_POST['email'])) {
  $email = $_POST['email'];
  $server="localhost";
  $uname="root";
  $pwd="";
  $db="JobKhojo";

  $conn=mysqli_connect($server, $uname, $pwd, $db);
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql="SELECT * FROM Employees where email='$email'";
  $result=mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)==0) {
      echo "<script>alert('Incorrect Email.');</script>";
  }
  while($row=mysqli_fetch_assoc($result))
  {
    session_start();
    $fname=$row["fname"];
    $lname=$row["lname"];
  }

} else {

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
}

  $sql="SELECT * FROM profiles where email='$email'";
  $result=mysqli_query($conn, $sql);

  if(mysqli_num_rows($result)!=0) {
    while($row=mysqli_fetch_assoc($result))
    {
      $designation = $row["designation"];
      $industry = $row["industry"];
      $function = $row["function"];
    }
  } else {
    $designation = "N/A";
    $industry = "N/A";
    $function = "N/A";
  }

  $sql="SELECT * FROM employees where email='$email'";
  $result=mysqli_query($conn, $sql);

  while($row=mysqli_fetch_assoc($result))
  {
    $city = $row["city"];
    $phone = $row["phone"];
  }

  $sql="SELECT * FROM images where email='$email'";
  $result=mysqli_query($conn, $sql);
  $imgpresent = 0;
  while($row=mysqli_fetch_assoc($result))
  {
    $imgpresent = 1;
    $filename = $row["filename"];
  }  

?>
<!DOCTYPE html>
<html>
<title><?php echo "$fname $lname"?></title>
<meta charset="UTF-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="profile.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<body class="w3-light-grey">
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">

      
    </div>
  
      <ul class="nav navbar-nav navbar-right " >
        <li><a href="http://localhost/home_new.php">HOME</a></li>
        <li><button onclick="myFunctionjobs()" class="dropbtn" >JOBS</button>
        <div id="jobs" class="dropdown-content">
    <a href="http://localhost/search_jobs.php">Find Jobs</a>
    <a href="http://localhost/listings.php">Create Listing</a>
    
  </div></li>
        <li><button onclick="myFunction()" class="dropbtn" >SUPPORT</button>
        <div id="support" class="dropdown-content">
    <a href="#home">FAQs</a>
    <a href="#about">About Us</a>
    <a href="#contact">Contact Us</a>
  </div></li>
        <li><button style="background-color: #D44C4C"  onclick="myFunctionlogged()" class="dropbtn" ><?php echo $fname," ",$lname;?></button><div id="logged" class="dropdown-content">
    <a href="http://localhost/profile.php">Profile</a>
    <a href="#about">Change Password</a>
    <a href="logout.php">Log out</a>
  </div></li>
        
      </ul>
  </div>
</nav>

<br><br><br>
<!-- Page Container -->
<div  class="w3-content " style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="<?php if($imgpresent == 1) {echo "$filename";} else {echo 'placeholder.jpg';}?>" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">

            <h2><?php echo "$fname $lname"?></h2>
          </div>
        </div>
        <div class="w3-container"><br>
          <br><?php if($imgpresent != 1) {
            echo '<form action="upload.php" method="post" enctype="multipart/form-data" id="imguploader">
              Add a Profile Picture:
              <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" class="button button1">
              <input type="submit" value="Upload Image" name="submit" class="button button1">
              </form><br><br>';
          }
          ?>
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo "$designation"?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo "$city"?>, India</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo "$phone"?></p><br>
          <form action="//localhost/update_profile.php">
          <p><?php if(!isset($_POST['email'])) { echo '<button  class="button button1">Update Profile</button>'; } ?>
          </form>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          <?php 
            $sql="SELECT * FROM skills where email='$email' ORDER BY proficiency desc";
            $result=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_assoc($result))
            {
              $skill = $row["skill"];
              $proficiency = $row["proficiency"];
              echo "
                          <p>$skill</p>
                          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
                            <div class=\"w3-container w3-center w3-round-xlarge w3-teal\" style=\"width:$proficiency%\">$proficiency%</div>
                          </div>
              ";
            }
          ?>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <?php 
            $sql="SELECT * FROM languages where email='$email' ORDER BY proficiency desc";
            $result=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_assoc($result))
            {
              $language = $row["language"];
              $proficiency = $row["proficiency"];
              echo "
                          <p>$language</p>
                          <div class=\"w3-light-grey w3-round-xlarge\">
                            <div class=\"w3-round-xlarge w3-teal\" style=\"height:24px;width:$proficiency%\"></div>
                          </div>
              ";
            }
          ?>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <?php 
            $sql="SELECT * FROM experiences where email='$email' ORDER BY enddate desc";
            $result=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_assoc($result))
            {
              $position = $row["position"];
              $company = $row["company"];
              $startdate = date("M jS, Y", strtotime($row["startdate"]));
              $enddate = date("M jS, Y", strtotime($row["enddate"]));
              $description = $row["description"];

              echo "
                    <div class=\"w3-container\">
                      <h5 class=\"w3-opacity\"><b>$position / $company</b></h5>
                      <h6 class=\"w3-text-teal\"><i class=\"fa fa-calendar fa-fw w3-margin-right\"></i>$startdate - $enddate</h6>
                      <p>$description</p>
                      <hr>
                    </div>
              ";
            }
          ?>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <?php 
            $sql="SELECT * FROM education where email='$email' ORDER BY enddate desc";
            $result=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_assoc($result))
            {
              $school = $row["school"];
              $startdate = date("M jS, Y", strtotime($row["startdate"]));
              $enddate = date("M jS, Y", strtotime($row["enddate"]));
              $description = $row["description"];

              echo "
                            <div class=\"w3-container\">
                              <h5 class=\"w3-opacity\"><b>$school</b></h5>
                              <h6 class=\"w3-text-teal\"><i class=\"fa fa-calendar fa-fw w3-margin-right\"></i>$startdate - $enddate</h6>
                              <p>$description</p>
                              <hr>
                            </div>
              ";
            }
          ?>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="container-fluid text-center" style="background-color:lightgreen">
  <a href="#myPage" title="To Top">
    
  </a>
  <br>
  <p>All rights reserved <br> @JobKhojo.com </p>
</footer>
<script>

  function myFunction() {
  document.getElementById("support").classList.toggle("show");
}

  function myFunctionjobs() {
  document.getElementById("jobs").classList.toggle("show");
}


// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function myFunctionlogged() {
  document.getElementById("logged").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
