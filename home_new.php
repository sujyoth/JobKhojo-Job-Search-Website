<?php 
session_start();
if(!isset($_SESSION['email'])) {
  echo "
                <!DOCTYPE html>
                <html lang=\"en\">
                <head>
                  
                  <title>JobKhojo.com</title>
                  <meta charset=\"utf-8\">
                  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css\">
                  <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\" type=\"text/css\">
                  <link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\" type=\"text/css\">
                  <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
                  <link rel=\"stylesheet\" href=\"home_new.css\">
                  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
                  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js\"></script>
     
                  
                </head>
                <body id=\"myPage\" data-spy=\"scroll\" data-target=\".navbar\" data-offset=\"60\">

                <nav class=\"navbar navbar-default navbar-fixed-top\">
                  <div class=\"container\">
                    <div class=\"navbar-header\">
                      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>                        
                      </button>
                      
                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                      <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"#about\">ABOUT</a></li>
                        <li><a href=\"#services\">SERVICES</a></li>
                        <li><a href=\"#portfolio\">CLIENTS</a></li>
                        <li><a href=\"#contact\">CONTACT</a></li>
                      </ul>
                    </div>
                  </div>
                </nav>

                <div class=\"jumbotron text-center\">
                  <h1>JobKhojo.com</h1> 
                  <p>Earn part-time, Spend full time.</p> 
                  
                    <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#login\">Login</button>
                  <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#signup\" >Sign Up</button>
                </div>
"; 
} else {
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
echo "
                <!DOCTYPE html>
                <html>
                <head>
                  <title>Welcome $fname</title>
                </head>
                <body>

                  <!DOCTYPE html>
                <html lang=\"en\">
                <head>
                   By www.w3schools.com -->
                  <title>JobKhojo.com</title>
                  <meta charset=\"utf-8\">
                  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css\">
                  <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\" type=\"text/css\">
                  <link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\" type=\"text/css\">
                  <link rel=\"stylesheet\" href=\"home_new.css\">
                  <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
                  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
                  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js\"></script>
              
                </head>
                <body id=\"myPage\" data-spy=\"scroll\" data-target=\".navbar\" data-offset=\"60\">

                <nav class=\"navbar navbar-default navbar-fixed-top\">
                  <div class=\"container\">
                    <div class=\"navbar-header\">

                      
                    </div>
                  
                      <ul class=\"nav navbar-nav navbar-right \" >
                        <li><a>HOME</a></li>
                        <li><button onclick=\"myFunctionjobs() \" class=\"dropbtn\" >JOBS</button>
        <div id=\"jobs\" class=\"dropdown-content\">
    <a href=\"http://localhost/search_jobs.php\">Find Jobs</a>
    <a href=\"http://localhost/listings.php\">Create Listing</a>
    
  </div></li>
                        <li><button onclick=\"myFunction()\" class=\"dropbtn\" >SUPPORT</button>
                        <div id=\"support\" class=\"dropdown-content\">
                    <a href=\"#home\">FAQs</a>
                    <a href=\"#about\">About Us</a>
                    <a href=\"#contact\">Contact Us</a>
                  </div></li>
                        <li><button style=\"background-color: #D44C4C\"  onclick=\"myFunctionlogged()\" class=\"dropbtn\" >$fname $lname</button><div id=\"logged\" class=\"dropdown-content\">
                    <a href=\"http://localhost/profile.php\">Profile</a>
                    <a href=\"#about\">Change Password</a>
                    <a href=\"logout.php\">Log out</a>
                  </div></li>
                        
                      </ul>
                  </div>
                </nav>

                 


                <div class=\"jumbotron text-center\">
                  <h1>JobKhojo.com</h1> 
                  <p>Earn part-time, Spend full time.</p>
                </div>
                <div  >
                  
                </div>
                    
                  
                  </div>
  ";
}
?>
<!-- Container (About Section) -->
<div id="about" class="container-fluid bg-grey">
  <div class="row">
    <div >
      <h2>About JobKhojo.com</h2><br>
      <h4>JobKhojo.com, India's leading online career and recruitment resource with its cutting edge technology provides relevant profiles to employers and relevant jobs to jobseekers across industry verticals, experience levels and geographies. More than 200 million people have registered on the JobKhojo Worldwide network. Today, with operations in more than 40 countries, JobKhojo provides the widest and most sophisticated job seeking, career management, recruitment and talent management capabilities globally. JobKhojo India started its operations in 2001 and headquartered in Mumbai.</h4><br>
      
      <img src="new_how.png" width="100%">
    </div>
  
  </div>
</div>



<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
     
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
     
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
     
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, Friends</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->


<!-- Container (Contact Section) -->
<div  id="contact" class="container-fluid ">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div>
      
      <p align="center"><span class="glyphicon glyphicon-map-marker"></span> Mumbai, MH</p>
      <p align="center"><span class="glyphicon glyphicon-phone"></span> +91 91234 1234</p>
      <p align="center"><span class="glyphicon glyphicon-envelope"></span> customer.support@jobkhojo.com</p>
    </div>
   
     </div>
   </div>

   <footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>All rights reserved <br> @JobKhojo.com </p>
</footer>










 

<script>
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
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog" style="margin-top: 50px">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login Here</h4>
      </div>
      <div class="modal-body">
         <form  action="//localhost/login.php" method="POST" >
        <div class="w3-section">
          
          <input class="w3-input" style="width:100%;" type="Email-Id" required name="username" placeholder="Username"><br>
          <input class="w3-input" style="width:100%;" type="password" required name="pwd" placeholder="Password">
          
        </div>
     
      <button type="submit" class="btn btn-success"  >Log In
          </button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="signup" class="modal fade" role="dialog">
  <div class="modal-dialog" style="margin-top: 50px">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign Up here</h4>
      </div>
      <div class="modal-body">
        <form class="w3-container w3-card w3-padding-32 w3-white" action="//localhost/profile_db.php" method="POST" name="form1">
        <div class="w3-section">
          <label>First Name</label>
          <input class="w3-input" style="width:100%;" type="text" required name="fname" id="fname" placeholder="John"><br>
          <label>Last Name</label>
           <input class="w3-input" style="width:100%;" type="text" required name="lname" id="lname" placeholder="Smith"><br>
           <label>Email-Id</label>
           <input class="w3-input" style="width:100%;" type="Email-Id" required name="email" id="email" placeholder="johnsmith@example.com"><br>
           <label>Password</label>
           <input class="w3-input" style="width:100%;" type="Password" required name="password" id="password" placeholder="Atleast 6 characters"><br>
            <label>Re-enter Password</label>
           <input class="w3-input" style="width:100%;" type="Password" required name="cpassword" id="cpassword" placeholder="Atleast 6 characters"><br>
           <label>Date of Birth</label>
           <input class="w3-input" style="width:100%;" type="Date" required name="dob" id="dob" ><br>
           <label>Gender</label><br>
           <select name="gender" id="gender" class="w3-input">
            <option disabled="disabled" selected="selected" value="">Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
           <label>City</label><br>
           <select name="city" class="w3-input">
            <option disabled="disabled" selected="selected" value="">Select City</option>
            <option value="Adilabad">Adilabad</option>
            <option value="Agra">Agra</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Ahmednagar">Ahmednagar</option>
            <option value="Aizawl">Aizawl</option>
            <option value="Ajitgarh (Mohali)">Ajitgarh (Mohali)</option>
            <option value="Ajmer">Ajmer</option>
            <option value="Akola">Akola</option>
            <option value="Alappuzha">Alappuzha</option>
            <option value="Aligarh">Aligarh</option>
            <option value="Alirajpur">Alirajpur</option>
            <option value="Allahabad">Allahabad</option>
            <option value="Almora">Almora</option>
            <option value="Alwar">Alwar</option>
            <option value="Ambala">Ambala</option>
            <option value="Ambedkar Nagar">Ambedkar Nagar</option>
            <option value="Amravati">Amravati</option>
            <option value="Amreli district">Amreli district</option>
            <option value="Amritsar">Amritsar</option>
            <option value="Anand">Anand</option>
            <option value="Anantapur">Anantapur</option>
            <option value="Anantnag">Anantnag</option>
            <option value="Angul">Angul</option>
            <option value="Anjaw">Anjaw</option>
            <option value="Anuppur">Anuppur</option>
            <option value="Araria">Araria</option>
            <option value="Ariyalur">Ariyalur</option>
            <option value="Arwal">Arwal</option>
            <option value="Ashok Nagar">Ashok Nagar</option>
            <option value="Auraiya">Auraiya</option>
            <option value="Aurangabad">Aurangabad</option>
            <option value="Aurangabad">Aurangabad</option>
            <option value="Azamgarh">Azamgarh</option>
            <option value="Badgam">Badgam</option>
            <option value="Bagalkot">Bagalkot</option>
            <option value="Bageshwar">Bageshwar</option>
            <option value="Bagpat">Bagpat</option>
            <option value="Bahraich">Bahraich</option>
            <option value="Baksa">Baksa</option>
            <option value="Balaghat">Balaghat</option>
            <option value="Balangir">Balangir</option>
            <option value="Balasore">Balasore</option>
            <option value="Ballia">Ballia</option>
            <option value="Balrampur">Balrampur</option>
            <option value="Banaskantha">Banaskantha</option>
            <option value="Banda">Banda</option>
            <option value="Bandipora">Bandipora</option>
            <option value="Bangalore Rural">Bangalore Rural</option>
            <option value="Bangalore Urban">Bangalore Urban</option>
            <option value="Banka">Banka</option>
            <option value="Bankura">Bankura</option>
            <option value="Banswara">Banswara</option>
            <option value="Barabanki">Barabanki</option>
            <option value="Baramulla">Baramulla</option>
            <option value="Baran">Baran</option>
            <option value="Bardhaman">Bardhaman</option>
            <option value="Bareilly">Bareilly</option>
            <option value="Bargarh (Baragarh)">Bargarh (Baragarh)</option>
            <option value="Barmer">Barmer</option>
            <option value="Barnala">Barnala</option>
            <option value="Barpeta">Barpeta</option>
            <option value="Barwani">Barwani</option>
            <option value="Bastar">Bastar</option>
            <option value="Basti">Basti</option>
            <option value="Bathinda">Bathinda</option>
            <option value="Beed">Beed</option>
            <option value="Begusarai">Begusarai</option>
            <option value="Belgaum">Belgaum</option>
            <option value="Bellary">Bellary</option>
            <option value="Betul">Betul</option>
            <option value="Bhadrak">Bhadrak</option>
            <option value="Bhagalpur">Bhagalpur</option>
            <option value="Bhandara">Bhandara</option>
            <option value="Bharatpur">Bharatpur</option>
            <option value="Bharuch">Bharuch</option>
            <option value="Bhavnagar">Bhavnagar</option>
            <option value="Bhilwara">Bhilwara</option>
            <option value="Bhind">Bhind</option>
            <option value="Bhiwani">Bhiwani</option>
            <option value="Bhojpur">Bhojpur</option>
            <option value="Bhopal">Bhopal</option>
            <option value="Bidar">Bidar</option>
            <option value="Bijapur">Bijapur</option>
            <option value="Bijapur">Bijapur</option>
            <option value="Bijnor">Bijnor</option>
            <option value="Bikaner">Bikaner</option>
            <option value="Bilaspur">Bilaspur</option>
            <option value="Bilaspur">Bilaspur</option>
            <option value="Birbhum">Birbhum</option>
            <option value="Bishnupur">Bishnupur</option>
            <option value="Bokaro">Bokaro</option>
            <option value="Bongaigaon">Bongaigaon</option>
            <option value="Boudh (Bauda)">Boudh (Bauda)</option>
            <option value="Budaun">Budaun</option>
            <option value="Bulandshahr">Bulandshahr</option>
            <option value="Buldhana">Buldhana</option>
            <option value="Bundi">Bundi</option>
            <option value="Burhanpur">Burhanpur</option>
            <option value="Buxar">Buxar</option>
            <option value="Cachar">Cachar</option>
            <option value="Central Delhi">Central Delhi</option>
            <option value="Chamarajnagar">Chamarajnagar</option>
            <option value="Chamba">Chamba</option>
            <option value="Chamoli">Chamoli</option>
            <option value="Champawat">Champawat</option>
            <option value="Champhai">Champhai</option>
            <option value="Chandauli">Chandauli</option>
            <option value="Chandel">Chandel</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Chandrapur">Chandrapur</option>
            <option value="Changlang">Changlang</option>
            <option value="Chatra">Chatra</option>
            <option value="Chennai">Chennai</option>
            <option value="Chhatarpur">Chhatarpur</option>
            <option value="Chhatrapati Shahuji Maharaj Nagar">Chhatrapati Shahuji Maharaj Nagar</option>
            <option value="Chhindwara">Chhindwara</option>
            <option value="Chikkaballapur">Chikkaballapur</option>
            <option value="Chikkamagaluru">Chikkamagaluru</option>
            <option value="Chirang">Chirang</option>
            <option value="Chitradurga">Chitradurga</option>
            <option value="Chitrakoot">Chitrakoot</option>
            <option value="Chittoor">Chittoor</option>
            <option value="Chittorgarh">Chittorgarh</option>
            <option value="Churachandpur">Churachandpur</option>
            <option value="Churu">Churu</option>
            <option value="Coimbatore">Coimbatore</option>
            <option value="Cooch Behar">Cooch Behar</option>
            <option value="Cuddalore">Cuddalore</option>
            <option value="Cuttack">Cuttack</option>
            <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
            <option value="Dahod">Dahod</option>
            <option value="Dakshin Dinajpur">Dakshin Dinajpur</option>
            <option value="Dakshina Kannada">Dakshina Kannada</option>
            <option value="Daman">Daman</option>
            <option value="Damoh">Damoh</option>
            <option value="Dantewada">Dantewada</option>
            <option value="Darbhanga">Darbhanga</option>
            <option value="Darjeeling">Darjeeling</option>
            <option value="Darrang">Darrang</option>
            <option value="Datia">Datia</option>
            <option value="Dausa">Dausa</option>
            <option value="Davanagere">Davanagere</option>
            <option value="Debagarh (Deogarh)">Debagarh (Deogarh)</option>
            <option value="Dehradun">Dehradun</option>
            <option value="Deoghar">Deoghar</option>
            <option value="Deoria">Deoria</option>
            <option value="Dewas">Dewas</option>
            <option value="Dhalai">Dhalai</option>
            <option value="Dhamtari">Dhamtari</option>
            <option value="Dhanbad">Dhanbad</option>
            <option value="Dhar">Dhar</option>
            <option value="Dharmapuri">Dharmapuri</option>
            <option value="Dharwad">Dharwad</option>
            <option value="Dhemaji">Dhemaji</option>
            <option value="Dhenkanal">Dhenkanal</option>
            <option value="Dholpur">Dholpur</option>
            <option value="Dhubri">Dhubri</option>
            <option value="Dhule">Dhule</option>
            <option value="Dibang Valley">Dibang Valley</option>
            <option value="Dibrugarh">Dibrugarh</option>
            <option value="Dima Hasao">Dima Hasao</option>
            <option value="Dimapur">Dimapur</option>
            <option value="Dindigul">Dindigul</option>
            <option value="Dindori">Dindori</option>
            <option value="Diu">Diu</option>
            <option value="Doda">Doda</option>
            <option value="Dumka">Dumka</option>
            <option value="Dungapur">Dungapur</option>
            <option value="Durg">Durg</option>
            <option value="East Champaran">East Champaran</option>
            <option value="East Delhi">East Delhi</option>
            <option value="East Garo Hills">East Garo Hills</option>
            <option value="East Khasi Hills">East Khasi Hills</option>
            <option value="East Siang">East Siang</option>
            <option value="East Sikkim">East Sikkim</option>
            <option value="East Singhbhum">East Singhbhum</option>
            <option value="Eluru">Eluru</option>
            <option value="Ernakulam">Ernakulam</option>
            <option value="Erode">Erode</option>
            <option value="Etah">Etah</option>
            <option value="Etawah">Etawah</option>
            <option value="Faizabad">Faizabad</option>
            <option value="Faridabad">Faridabad</option>
            <option value="Faridkot">Faridkot</option>
            <option value="Farrukhabad">Farrukhabad</option>
            <option value="Fatehabad">Fatehabad</option>
            <option value="Fatehgarh Sahib">Fatehgarh Sahib</option>
            <option value="Fatehpur">Fatehpur</option>
            <option value="Fazilka">Fazilka</option>
            <option value="Firozabad">Firozabad</option>
            <option value="Firozpur">Firozpur</option>
            <option value="Gadag">Gadag</option>
            <option value="Gadchiroli">Gadchiroli</option>
            <option value="Gajapati">Gajapati</option>
            <option value="Ganderbal">Ganderbal</option>
            <option value="Gandhinagar">Gandhinagar</option>
            <option value="Ganganagar">Ganganagar</option>
            <option value="Ganjam">Ganjam</option>
            <option value="Garhwa">Garhwa</option>
            <option value="Gautam Buddh Nagar">Gautam Buddh Nagar</option>
            <option value="Gaya">Gaya</option>
            <option value="Ghaziabad">Ghaziabad</option>
            <option value="Ghazipur">Ghazipur</option>
            <option value="Giridih">Giridih</option>
            <option value="Goalpara">Goalpara</option>
            <option value="Godda">Godda</option>
            <option value="Golaghat">Golaghat</option>
            <option value="Gonda">Gonda</option>
            <option value="Gondia">Gondia</option>
            <option value="Gopalganj">Gopalganj</option>
            <option value="Gorakhpur">Gorakhpur</option>
            <option value="Gulbarga">Gulbarga</option>
            <option value="Gumla">Gumla</option>
            <option value="Guna">Guna</option>
            <option value="Guntur">Guntur</option>
            <option value="Gurdaspur">Gurdaspur</option>
            <option value="Gurgaon">Gurgaon</option>
            <option value="Gwalior">Gwalior</option>
            <option value="Hailakandi">Hailakandi</option>
            <option value="Hamirpur">Hamirpur</option>
            <option value="Hamirpur">Hamirpur</option>
            <option value="Hanumangarh">Hanumangarh</option>
            <option value="Harda">Harda</option>
            <option value="Hardoi">Hardoi</option>
            <option value="Haridwar">Haridwar</option>
            <option value="Hassan">Hassan</option>
            <option value="Haveri district">Haveri district</option>
            <option value="Hazaribag">Hazaribag</option>
            <option value="Hingoli">Hingoli</option>
            <option value="Hissar">Hissar</option>
            <option value="Hooghly">Hooghly</option>
            <option value="Hoshangabad">Hoshangabad</option>
            <option value="Hoshiarpur">Hoshiarpur</option>
            <option value="Howrah">Howrah</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Idukki">Idukki</option>
            <option value="Imphal East">Imphal East</option>
            <option value="Imphal West">Imphal West</option>
            <option value="Indore">Indore</option>
            <option value="Jabalpur">Jabalpur</option>
            <option value="Jagatsinghpur">Jagatsinghpur</option>
            <option value="Jaintia Hills">Jaintia Hills</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Jaisalmer">Jaisalmer</option>
            <option value="Jajpur">Jajpur</option>
            <option value="Jalandhar">Jalandhar</option>
            <option value="Jalaun">Jalaun</option>
            <option value="Jalgaon">Jalgaon</option>
            <option value="Jalna">Jalna</option>
            <option value="Jalore">Jalore</option>
            <option value="Jalpaiguri">Jalpaiguri</option>
            <option value="Jammu">Jammu</option>
            <option value="Jamnagar">Jamnagar</option>
            <option value="Jamtara">Jamtara</option>
            <option value="Jamui">Jamui</option>
            <option value="Janjgir-Champa">Janjgir-Champa</option>
            <option value="Jashpur">Jashpur</option>
            <option value="Jaunpur district">Jaunpur district</option>
            <option value="Jehanabad">Jehanabad</option>
            <option value="Jhabua">Jhabua</option>
            <option value="Jhajjar">Jhajjar</option>
            <option value="Jhalawar">Jhalawar</option>
            <option value="Jhansi">Jhansi</option>
            <option value="Jharsuguda">Jharsuguda</option>
            <option value="Jhunjhunu">Jhunjhunu</option>
            <option value="Jind">Jind</option>
            <option value="Jodhpur">Jodhpur</option>
            <option value="Jorhat">Jorhat</option>
            <option value="Junagadh">Junagadh</option>
            <option value="Jyotiba Phule Nagar">Jyotiba Phule Nagar</option>
            <option value="Kabirdham (formerly Kawardha)">Kabirdham (formerly Kawardha)</option>
            <option value="Kadapa">Kadapa</option>
            <option value="Kaimur">Kaimur</option>
            <option value="Kaithal">Kaithal</option>
            <option value="Kakinada">Kakinada</option>
            <option value="Kalahandi">Kalahandi</option>
            <option value="Kamrup">Kamrup</option>
            <option value="Kamrup Metropolitan">Kamrup Metropolitan</option>
            <option value="Kanchipuram">Kanchipuram</option>
            <option value="Kandhamal">Kandhamal</option>
            <option value="Kangra">Kangra</option>
            <option value="Kanker">Kanker</option>
            <option value="Kannauj">Kannauj</option>
            <option value="Kannur">Kannur</option>
            <option value="Kanpur">Kanpur</option>
            <option value="Kanshi Ram Nagar">Kanshi Ram Nagar</option>
            <option value="Kanyakumari">Kanyakumari</option>
            <option value="Kapurthala">Kapurthala</option>
            <option value="Karaikal">Karaikal</option>
            <option value="Karauli">Karauli</option>
            <option value="Karbi Anglong">Karbi Anglong</option>
            <option value="Kargil">Kargil</option>
            <option value="Karimganj">Karimganj</option>
            <option value="Karimnagar">Karimnagar</option>
            <option value="Karnal">Karnal</option>
            <option value="Karur">Karur</option>
            <option value="Kasaragod">Kasaragod</option>
            <option value="Kathua">Kathua</option>
            <option value="Katihar">Katihar</option>
            <option value="Katni">Katni</option>
            <option value="Kaushambi">Kaushambi</option>
            <option value="Kendrapara">Kendrapara</option>
            <option value="Kendujhar (Keonjhar)">Kendujhar (Keonjhar)</option>
            <option value="Khagaria">Khagaria</option>
            <option value="Khammam">Khammam</option>
            <option value="Khandwa (East Nimar)">Khandwa (East Nimar)</option>
            <option value="Khargone (West Nimar)">Khargone (West Nimar)</option>
            <option value="Kheda">Kheda</option>
            <option value="Khordha">Khordha</option>
            <option value="Khowai">Khowai</option>
            <option value="Khunti">Khunti</option>
            <option value="Kinnaur">Kinnaur</option>
            <option value="Kishanganj">Kishanganj</option>
            <option value="Kishtwar">Kishtwar</option>
            <option value="Kodagu">Kodagu</option>
            <option value="Koderma">Koderma</option>
            <option value="Kohima">Kohima</option>
            <option value="Kokrajhar">Kokrajhar</option>
            <option value="Kolar">Kolar</option>
            <option value="Kolasib">Kolasib</option>
            <option value="Kolhapur">Kolhapur</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Kollam">Kollam</option>
            <option value="Koppal">Koppal</option>
            <option value="Koraput">Koraput</option>
            <option value="Korba">Korba</option>
            <option value="Koriya">Koriya</option>
            <option value="Kota">Kota</option>
            <option value="Kottayam">Kottayam</option>
            <option value="Kozhikode">Kozhikode</option>
            <option value="Krishna">Krishna</option>
            <option value="Kulgam">Kulgam</option>
            <option value="Kullu">Kullu</option>
            <option value="Kupwara">Kupwara</option>
            <option value="Kurnool">Kurnool</option>
            <option value="Kurukshetra">Kurukshetra</option>
            <option value="Kurung Kumey">Kurung Kumey</option>
            <option value="Kushinagar">Kushinagar</option>
            <option value="Kutch">Kutch</option>
            <option value="Lahaul and Spiti">Lahaul and Spiti</option>
            <option value="Lakhimpur">Lakhimpur</option>
            <option value="Lakhimpur Kheri">Lakhimpur Kheri</option>
            <option value="Lakhisarai">Lakhisarai</option>
            <option value="Lalitpur">Lalitpur</option>
            <option value="Latehar">Latehar</option>
            <option value="Latur">Latur</option>
            <option value="Lawngtlai">Lawngtlai</option>
            <option value="Leh">Leh</option>
            <option value="Lohardaga">Lohardaga</option>
            <option value="Lohit">Lohit</option>
            <option value="Lower Dibang Valley">Lower Dibang Valley</option>
            <option value="Lower Subansiri">Lower Subansiri</option>
            <option value="Lucknow">Lucknow</option>
            <option value="Ludhiana">Ludhiana</option>
            <option value="Lunglei">Lunglei</option>
            <option value="Madhepura">Madhepura</option>
            <option value="Madhubani">Madhubani</option>
            <option value="Madurai">Madurai</option>
            <option value="Mahamaya Nagar">Mahamaya Nagar</option>
            <option value="Maharajganj">Maharajganj</option>
            <option value="Mahasamund">Mahasamund</option>
            <option value="Mahbubnagar">Mahbubnagar</option>
            <option value="Mahe">Mahe</option>
            <option value="Mahendragarh">Mahendragarh</option>
            <option value="Mahoba">Mahoba</option>
            <option value="Mainpuri">Mainpuri</option>
            <option value="Malappuram">Malappuram</option>
            <option value="Maldah">Maldah</option>
            <option value="Malkangiri">Malkangiri</option>
            <option value="Mamit">Mamit</option>
            <option value="Mandi">Mandi</option>
            <option value="Mandla">Mandla</option>
            <option value="Mandsaur">Mandsaur</option>
            <option value="Mandya">Mandya</option>
            <option value="Mansa">Mansa</option>
            <option value="Marigaon">Marigaon</option>
            <option value="Mathura">Mathura</option>
            <option value="Mau">Mau</option>
            <option value="Mayurbhanj">Mayurbhanj</option>
            <option value="Medak">Medak</option>
            <option value="Meerut">Meerut</option>
            <option value="Mehsana">Mehsana</option>
            <option value="Mewat">Mewat</option>
            <option value="Mirzapur">Mirzapur</option>
            <option value="Moga">Moga</option>
            <option value="Mokokchung">Mokokchung</option>
            <option value="Mon">Mon</option>
            <option value="Moradabad">Moradabad</option>
            <option value="Morena">Morena</option>
            <option value="Mumbai City">Mumbai City</option>
            <option value="Mumbai suburban">Mumbai suburban</option>
            <option value="Munger">Munger</option>
            <option value="Murshidabad">Murshidabad</option>
            <option value="Muzaffarnagar">Muzaffarnagar</option>
            <option value="Muzaffarpur">Muzaffarpur</option>
            <option value="Mysore">Mysore</option>
            <option value="Nabarangpur">Nabarangpur</option>
            <option value="Nadia">Nadia</option>
            <option value="Nagaon">Nagaon</option>
            <option value="Nagapattinam">Nagapattinam</option>
            <option value="Nagaur">Nagaur</option>
            <option value="Nagpur">Nagpur</option>
            <option value="Nainital">Nainital</option>
            <option value="Nalanda">Nalanda</option>
            <option value="Nalbari">Nalbari</option>
            <option value="Nalgonda">Nalgonda</option>
            <option value="Namakkal">Namakkal</option>
            <option value="Nanded">Nanded</option>
            <option value="Nandurbar">Nandurbar</option>
            <option value="Narayanpur">Narayanpur</option>
            <option value="Narmada">Narmada</option>
            <option value="Narsinghpur">Narsinghpur</option>
            <option value="Nashik">Nashik</option>
            <option value="Navsari">Navsari</option>
            <option value="Nawada">Nawada</option>
            <option value="Nawanshahr">Nawanshahr</option>
            <option value="Nayagarh">Nayagarh</option>
            <option value="Neemuch">Neemuch</option>
            <option value="Nellore">Nellore</option>
            <option value="New Delhi">New Delhi</option>
            <option value="Nilgiris">Nilgiris</option>
            <option value="Nizamabad">Nizamabad</option>
            <option value="North 24 Parganas">North 24 Parganas</option>
            <option value="North Delhi">North Delhi</option>
            <option value="North East Delhi">North East Delhi</option>
            <option value="North Goa">North Goa</option>
            <option value="North Sikkim">North Sikkim</option>
            <option value="North Tripura">North Tripura</option>
            <option value="North West Delhi">North West Delhi</option>
            <option value="Nuapada">Nuapada</option>
            <option value="Ongole">Ongole</option>
            <option value="Osmanabad">Osmanabad</option>
            <option value="Pakur">Pakur</option>
            <option value="Palakkad">Palakkad</option>
            <option value="Palamu">Palamu</option>
            <option value="Pali">Pali</option>
            <option value="Palwal">Palwal</option>
            <option value="Panchkula">Panchkula</option>
            <option value="Panchmahal">Panchmahal</option>
            <option value="Panchsheel Nagar district (Hapur)">Panchsheel Nagar district (Hapur)</option>
            <option value="Panipat">Panipat</option>
            <option value="Panna">Panna</option>
            <option value="Papum Pare">Papum Pare</option>
            <option value="Parbhani">Parbhani</option>
            <option value="Paschim Medinipur">Paschim Medinipur</option>
            <option value="Patan">Patan</option>
            <option value="Pathanamthitta">Pathanamthitta</option>
            <option value="Pathankot">Pathankot</option>
            <option value="Patiala">Patiala</option>
            <option value="Patna">Patna</option>
            <option value="Pauri Garhwal">Pauri Garhwal</option>
            <option value="Perambalur">Perambalur</option>
            <option value="Phek">Phek</option>
            <option value="Pilibhit">Pilibhit</option>
            <option value="Pithoragarh">Pithoragarh</option>
            <option value="Pondicherry">Pondicherry</option>
            <option value="Poonch">Poonch</option>
            <option value="Porbandar">Porbandar</option>
            <option value="Pratapgarh">Pratapgarh</option>
            <option value="Pratapgarh">Pratapgarh</option>
            <option value="Pudukkottai">Pudukkottai</option>
            <option value="Pulwama">Pulwama</option>
            <option value="Pune">Pune</option>
            <option value="Purba Medinipur">Purba Medinipur</option>
            <option value="Puri">Puri</option>
            <option value="Purnia">Purnia</option>
            <option value="Purulia">Purulia</option>
            <option value="Raebareli">Raebareli</option>
            <option value="Raichur">Raichur</option>
            <option value="Raigad">Raigad</option>
            <option value="Raigarh">Raigarh</option>
            <option value="Raipur">Raipur</option>
            <option value="Raisen">Raisen</option>
            <option value="Rajauri">Rajauri</option>
            <option value="Rajgarh">Rajgarh</option>
            <option value="Rajkot">Rajkot</option>
            <option value="Rajnandgaon">Rajnandgaon</option>
            <option value="Rajsamand">Rajsamand</option>
            <option value="Ramabai Nagar (Kanpur Dehat)">Ramabai Nagar (Kanpur Dehat)</option>
            <option value="Ramanagara">Ramanagara</option>
            <option value="Ramanathapuram">Ramanathapuram</option>
            <option value="Ramban">Ramban</option>
            <option value="Ramgarh">Ramgarh</option>
            <option value="Rampur">Rampur</option>
            <option value="Ranchi">Ranchi</option>
            <option value="Ratlam">Ratlam</option>
            <option value="Ratnagiri">Ratnagiri</option>
            <option value="Rayagada">Rayagada</option>
            <option value="Reasi">Reasi</option>
            <option value="Rewa">Rewa</option>
            <option value="Rewari">Rewari</option>
            <option value="Ri Bhoi">Ri Bhoi</option>
            <option value="Rohtak">Rohtak</option>
            <option value="Rohtas">Rohtas</option>
            <option value="Rudraprayag">Rudraprayag</option>
            <option value="Rupnagar">Rupnagar</option>
            <option value="Sabarkantha">Sabarkantha</option>
            <option value="Sagar">Sagar</option>
            <option value="Saharanpur">Saharanpur</option>
            <option value="Saharsa">Saharsa</option>
            <option value="Sahibganj">Sahibganj</option>
            <option value="Saiha">Saiha</option>
            <option value="Salem">Salem</option>
            <option value="Samastipur">Samastipur</option>
            <option value="Samba">Samba</option>
            <option value="Sambalpur">Sambalpur</option>
            <option value="Sangli">Sangli</option>
            <option value="Sangrur">Sangrur</option>
            <option value="Sant Kabir Nagar">Sant Kabir Nagar</option>
            <option value="Sant Ravidas Nagar">Sant Ravidas Nagar</option>
            <option value="Saran">Saran</option>
            <option value="Satara">Satara</option>
            <option value="Satna">Satna</option>
            <option value="Sawai Madhopur">Sawai Madhopur</option>
            <option value="Sehore">Sehore</option>
            <option value="Senapati">Senapati</option>
            <option value="Seoni">Seoni</option>
            <option value="Seraikela Kharsawan">Seraikela Kharsawan</option>
            <option value="Serchhip">Serchhip</option>
            <option value="Shahdol">Shahdol</option>
            <option value="Shahjahanpur">Shahjahanpur</option>
            <option value="Shajapur">Shajapur</option>
            <option value="Shamli">Shamli</option>
            <option value="Sheikhpura">Sheikhpura</option>
            <option value="Sheohar">Sheohar</option>
            <option value="Sheopur">Sheopur</option>
            <option value="Shimla">Shimla</option>
            <option value="Shimoga">Shimoga</option>
            <option value="Shivpuri">Shivpuri</option>
            <option value="Shopian">Shopian</option>
            <option value="Shravasti">Shravasti</option>
            <option value="Sibsagar">Sibsagar</option>
            <option value="Siddharthnagar">Siddharthnagar</option>
            <option value="Sidhi">Sidhi</option>
            <option value="Sikar">Sikar</option>
            <option value="Simdega">Simdega</option>
            <option value="Sindhudurg">Sindhudurg</option>
            <option value="Singrauli">Singrauli</option>
            <option value="Sirmaur">Sirmaur</option>
            <option value="Sirohi">Sirohi</option>
            <option value="Sirsa">Sirsa</option>
            <option value="Sitamarhi">Sitamarhi</option>
            <option value="Sitapur">Sitapur</option>
            <option value="Sivaganga">Sivaganga</option>
            <option value="Siwan">Siwan</option>
            <option value="Solan">Solan</option>
            <option value="Solapur">Solapur</option>
            <option value="Sonbhadra">Sonbhadra</option>
            <option value="Sonipat">Sonipat</option>
            <option value="Sonitpur">Sonitpur</option>
            <option value="South 24 Parganas">South 24 Parganas</option>
            <option value="South Delhi">South Delhi</option>
            <option value="South Garo Hills">South Garo Hills</option>
            <option value="South Goa">South Goa</option>
            <option value="South Sikkim">South Sikkim</option>
            <option value="South Tripura">South Tripura</option>
            <option value="South West Delhi">South West Delhi</option>
            <option value="Sri Muktsar Sahib">Sri Muktsar Sahib</option>
            <option value="Srikakulam">Srikakulam</option>
            <option value="Srinagar">Srinagar</option>
            <option value="Subarnapur (Sonepur)">Subarnapur (Sonepur)</option>
            <option value="Sultanpur">Sultanpur</option>
            <option value="Sundergarh">Sundergarh</option>
            <option value="Supaul">Supaul</option>
            <option value="Surat">Surat</option>
            <option value="Surendranagar">Surendranagar</option>
            <option value="Surguja">Surguja</option>
            <option value="Tamenglong">Tamenglong</option>
            <option value="Tarn Taran">Tarn Taran</option>
            <option value="Tawang">Tawang</option>
            <option value="Tehri Garhwal">Tehri Garhwal</option>
            <option value="Thane">Thane</option>
            <option value="Thanjavur">Thanjavur</option>
            <option value="The Dangs">The Dangs</option>
            <option value="Theni">Theni</option>
            <option value="Thiruvananthapuram">Thiruvananthapuram</option>
            <option value="Thoothukudi">Thoothukudi</option>
            <option value="Thoubal">Thoubal</option>
            <option value="Thrissur">Thrissur</option>
            <option value="Tikamgarh">Tikamgarh</option>
            <option value="Tinsukia">Tinsukia</option>
            <option value="Tirap">Tirap</option>
            <option value="Tiruchirappalli">Tiruchirappalli</option>
            <option value="Tirunelveli">Tirunelveli</option>
            <option value="Tirupur">Tirupur</option>
            <option value="Tiruvallur">Tiruvallur</option>
            <option value="Tiruvannamalai">Tiruvannamalai</option>
            <option value="Tiruvarur">Tiruvarur</option>
            <option value="Tonk">Tonk</option>
            <option value="Tuensang">Tuensang</option>
            <option value="Tumkur">Tumkur</option>
            <option value="Udaipur">Udaipur</option>
            <option value="Udalguri">Udalguri</option>
            <option value="Udham Singh Nagar">Udham Singh Nagar</option>
            <option value="Udhampur">Udhampur</option>
            <option value="Udupi">Udupi</option>
            <option value="Ujjain">Ujjain</option>
            <option value="Ukhrul">Ukhrul</option>
            <option value="Umaria">Umaria</option>
            <option value="Una">Una</option>
            <option value="Unnao">Unnao</option>
            <option value="Upper Siang">Upper Siang</option>
            <option value="Upper Subansiri">Upper Subansiri</option>
            <option value="Uttar Dinajpur">Uttar Dinajpur</option>
            <option value="Uttara Kannada">Uttara Kannada</option>
            <option value="Uttarkashi">Uttarkashi</option>
            <option value="Vadodara">Vadodara</option>
            <option value="Vaishali">Vaishali</option>
            <option value="Valsad">Valsad</option>
            <option value="Varanasi">Varanasi</option>
            <option value="Vellore">Vellore</option>
            <option value="Vidisha">Vidisha</option>
            <option value="Viluppuram">Viluppuram</option>
            <option value="Virudhunagar">Virudhunagar</option>
            <option value="Visakhapatnam">Visakhapatnam</option>
            <option value="Vizianagaram">Vizianagaram</option>
            <option value="Vyara">Vyara</option>
            <option value="Warangal">Warangal</option>
            <option value="Wardha">Wardha</option>
            <option value="Washim">Washim</option>
            <option value="Wayanad">Wayanad</option>
            <option value="West Champaran">West Champaran</option>
            <option value="West Delhi">West Delhi</option>
            <option value="West Garo Hills">West Garo Hills</option>
            <option value="West Kameng">West Kameng</option>
            <option value="West Khasi Hills">West Khasi Hills</option>
            <option value="West Siang">West Siang</option>
            <option value="West Sikkim">West Sikkim</option>
            <option value="West Singhbhum">West Singhbhum</option>
            <option value="West Tripura">West Tripura</option>
            <option value="Wokha">Wokha</option>
            <option value="Yadgir">Yadgir</option>
            <option value="Yamuna Nagar">Yamuna Nagar</option>
            <option value="Yanam">Yanam</option>
            <option value="Yavatmal">Yavatmal</option>
            <option value="Zunheboto">Zunheboto</option>
          </select><br>
          <label>Contact Number</label>
          <input type="Number" name="phone" id="phone" class="w3-input"
          placeholder="Verification via SMS"><br>
        
  
          <input name="privacy" id="privacy" type="checkbox"/> I have read and agree to JobKhojo's privacy statement, terms of use and default preferences</br>


              <button type="submit" class="btn btn-success w3-right" onclick="return checkReg()">Register</button>
        </div>
   
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script>
  var x = new Date('2019-03-20');
  function checkReg() {
    var dateString = document.getElementById('dob').value;
    var myDate = new Date(dateString);
    var today = new Date();

    if( myDate > today ) { 
      alert('You cannot enter a date in the future!.');
      return false;
    }
    if(document.getElementById("privacy").checked == false) {
      alert("You need to agree to JobKhojo's privacy policy before continuing.");
      return false;
    }
    if(document.getElementById("password").value != document.getElementById("cpassword").value) {
      alert("Passwords don't match.");
      return false;
    }
    if(document.getElementById("email").value == "" || document.getElementById("fname").value == "" || document.getElementById("lname").value == "" || document.getElementById("gender").value == "" || document.getElementById("city").value == "") {
      alert("All fields should be filled.");
      return false;
    } 
  }

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
</script>
</body>
</html>
