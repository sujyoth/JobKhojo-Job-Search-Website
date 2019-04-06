<?php
session_start();
$email=$_SESSION['email'];
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Profile</title>
  <meta charset="UTF-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel='stylesheet' href='home_new.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color: #1094AF">
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


<div class=" w3-padding-large">
      <form class="w3-container w3-card w3-white w3-padding-40 "  action="http://localhost/profile_db.php" method="POST" onsubmit="return formcheck()" name="form1" >
        <center><br><label  style="font-size: 30px">Update Profile</label><br></center>
        <hr>
      <table>
        <tr >
        <td class="col-sm-0"><label style="font-size: 20px">Industry</label></td>
        <td class="col-sm-3"><label style="font-size: 20px">Designation</label></td>
      </tr>
       <td class="col-sm-0"><input type="text" name="industry" class="form-control" style="width: 100%"><br></td>
        <td class="col-sm-5"><input type="text" name="designation" class="form-control" style="width: 100%"><br></td>
      </table>
        <label style="font-size: 20px" >Skills</label><br>
        <table id="skill" class=" table order-list">
   
    <tbody id="skills">
        
        <tr>
          
            <td class="col-sm-3">
                <input type="text"  name="skill[]" class="form-control" placeholder="Skill" />
            </td>
            <td class="col-sm-2">
                <input type="number" name="skill_prof[]"  class="form-control" placeholder="Proficiency in %" />
            </td>
            
           
            <td class="col-sm-0"><a class="deleteRow"></a>

            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" style="text-align: left;">
                <input type="button" class="btn btn-warning " id="addrowskill" onclick="addskill()" value="Add Skill" />
            </td>
        </tr>
        <tr>
        </tr>
    </tfoot>
</table>

<label style="font-size: 20px" >Language</label><br>
        <table id="lang" class=" table order-list">
   
    <tbody id="langs">
        <tr>
            <td class="col-sm-3">
                <input type="text" name="language[]" class="form-control" placeholder="Language" />
            </td>
            <td class="col-sm-2">
                <input type="number"  name="language_prof[]"  class="form-control" placeholder="Proficiency in %" />
            </td>
            
           
            <td class="col-sm-0"><a class="deleteRow"></a>

            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" style="text-align: left;">
                <input type="button" class="btn btn-warning  " id="addrowlang" onclick="addlang()" value="Add Language" />
            </td>
        </tr>
        <tr>
        </tr>
    </tfoot>
</table>



<label style="font-size: 20px" >Past Jobs</label><br>
<table id="jobs" class=" table order-list">
   
    <tbody>
        <tr>
            <td class="col-sm-1">
                <input type="text" name="position[]" class="form-control" placeholder="Position" />
            </td>
            <td class="col-sm-1">
                <input type="text"  name="company[]"  class="form-control" placeholder="Company Name" />
            </td>
            
           
            <td class="col-sm-2"><a class="deleteRow"></a>

            </td>
        </tr>
        <tr>
          <td><label>Start Date</label>
          <input type="date" style="width: 60%" name="start_date[]" class="form-control"></td>
          <td><label>End Date</label>
            <input style="width: 60%" type="date" name="end_date[]" class="form-control"></td>
        </tr>

        <tr>
          <td>
            <label>Description</label></td>
           <td> <textarea class="form-control" name="description[]" rows="4" cols="50"></textarea></td>
          </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" style="text-align: left;">
                <input type="button" class="btn btn-warning  " id="addrowjob" onclick="addjob()" value="Add Job" />
            </td>
        </tr>
        <tr>
        </tr>
    </tfoot>
</table>

<label style="font-size: 20px">Education</label>

<table id="qualification" class=" table order-list">
   
    <tbody>
        <tr>
            <td class="col-sm-4">
                <input type="text" name="school[]" class="form-control" placeholder="School" />
            </td>
          
           <td class="col-sm-1"> <input style="width: 70%" type="text" name="course[]" class="form-control" placeholder="Course Description" /> </td>
            
           
            <td class="col-sm-2"><a class="deleteRow"></a>

            </td>
        </tr>
        <tr>
          <td class="col-sm-1"><label>Start Year</label>
          <input style="width: 60%" type="date" name="start_year[]" class="form-control"></td>
          <td class="col-sm-5"><label>End Year</label>
            <input style="width: 60%" type="date" name="end_year[]" class="form-control"></td>
        </tr>

        
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" style="text-align: left;">
                <input type="button" class="btn btn-warning  " id="addrowqualifiacation" onclick="addqualification()" value="Add Qualification" />
            </td>
        </tr>
        <tr>
        </tr>
    </tfoot>
</table>


<button style="margin-left: 800px " class="btn btn-success btn-lg">Save</button><br><br><br>

</div>
<input type="hidden" name="numskills" id="numskills" value="">
<input type="hidden" name="numlangs" id="numlangs" value="">
<input type="hidden" name="numjobs" id="numjobs" value="">
<input type="hidden" name="numqual" id="numqual" value="">
</form>
</div>



   <footer>
  </a><br>
  <p align="center" style="color: black">All rights reserved <br> @JobKhojo.com </p>
</footer>

<script>

  function myFunction() {
  document.getElementById("support").classList.toggle("show");
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

function myFunctionjobs() {
  document.getElementById("jobs").classList.toggle("show");
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

function formcheck() {
  var jobstartdate = document.forms["form1"]["start_date[]"].value;
  var jobenddate = document.forms["form1"]["end_date[]"].value;
  var qualstartyear = document.forms["form1"]["start_year[]"].value;
  var qualendyear = document.forms["form1"]["end_year[]"].value;
  
  if(jobenddate < jobstartdate) {
    alert("Start Date must be before End Date");
    return false;
  }else if(qualendyear < qualstartyear) {
    alert("Start Date must be before End Date");
    return false;
  }


}





// Add skill
var numskills = 1;
document.getElementById('numskills').value = numskills;

function addskill() { 
  numskills++;

  document.getElementById('skills').insertAdjacentHTML('beforeend','<tr><td class="col-sm-1"><input type="text"  name="skill[]" class="form-control" placeholder="Skill" /></td><td class="col-sm-1"><input type="number" name="skill_prof[]"  class="form-control" placeholder="Proficiency in %" /></td><td class="col-sm-2"><a class="deleteRow"></a></td><td><input type="button" class="ibtnDel1 btn btn-md btn-danger "  value="Delete""></td></tr>');

    document.getElementById('numskills').value = numskills;
}


// Add language
var numlangs = 1;
document.getElementById('numlangs').value = numlangs;
function addlang() {
  numlangs++;

  document.getElementById('langs').insertAdjacentHTML('beforeend','<tr><td class="col-sm-1"><input type="text" name="language[]" class="form-control" placeholder="Language" /></td><td class="col-sm-1"><input type="number"  name="language_prof[]"  class="form-control" placeholder="Proficiency in %" /></td><td class="col-sm-2"><a class="deleteRow"></a></td><td><input type="button" class="ibtnDel2 btn btn-md btn-danger "  value="Delete""></td></tr>');

  document.getElementById('numlangs').value = numlangs;
}


// Add job
var numjobs = 1;
document.getElementById('numjobs').value = numjobs;

function addjob() {
  numjobs++;

  document.getElementById('jobs').insertAdjacentHTML('beforeend','<tbody><tr><td class="col-sm-1"><input type="text" name="position[]" class="form-control" placeholder="Position" /></td><td class="col-sm-1"><input type="text"  name="company[]"  class="form-control" placeholder="Company Name" /></td><td class="col-sm-2"><a class="deleteRow"></a></td></tr><tr><td><label>Start Date</label><input style="width: 60%" type="date" name="start_date[]" class="form-control"></td><td><label>End Date</label><input type="date" style="width: 60%" name="end_date[]" class="form-control"></td></tr><tr><td><label>Description</label></td><td> <textarea class="form-control" name="description[]" rows="4" cols="50"></textarea></td></td><td><input type="button" class="ibtnDel3 btn btn-md btn-danger"  value="Delete""></td></tr></tbody>');

  document.getElementById('numjobs').value = numjobs;

}


//Add Qualification

var numqual = 1;
document.getElementById('numqual').value = numqual;

function addqualification() {
  numqual++;

  document.getElementById('qualification').insertAdjacentHTML('beforeend','<tbody><tr><td class="col-sm-4"><input type="text" name="school[]" class="form-control" placeholder="School" /></td><td class="col-sm-1"><input  type="text" style="width: 70%" name="course[]" class="form-control" placeholder="Course Description" /> </td><td class="col-sm-2"><a    class="deleteRow"></a></td></tr><tr><td class="col-sm-1"><label>Start Year</label><input type="date" style="width: 60%" name="start_year[]" class="form-control"></td><td class="col-sm-5"><label>End Year</label><input style="width: 60%" type="date" name="end_year[]" class="form-control"></td><td><input type="button" class="ibtnDel4 btn btn-md btn-danger"  value="Delete"></td></tr></tbody>');

  document.getElementById('numqual').value = numqual;

}


// Delete skill
$("table.order-list").on("click", ".ibtnDel1", function (event) {
  numskills--;
  $(this).closest("tr").remove();
  document.getElementById('numskills').value = numskills;
});

// Delete language
$("table.order-list").on("click", ".ibtnDel2", function (event) {
  numlangs--;
  $(this).closest("tr").remove();
  document.getElementById('numlangs').value = numlangs;
});

// Delete job
$("table.order-list").on("click", ".ibtnDel3", function (event) {
  numjobs--;
  $(this).closest("tbody").remove();
  document.getElementById('numjobs').value = numjobs;
});

//Delete qualifiaction
$("table.order-list").on("click", ".ibtnDel4", function (event) {
  numqual--;
  $(this).closest("tbody").remove();
  document.getElementById('numqual').value = numqual;
});
</script>
</body>
</html>

