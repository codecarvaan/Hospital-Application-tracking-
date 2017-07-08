<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
     
    </title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!--Fonts-->
    <link rel="stylesheet" media="screen" href="assets/fonts/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/plain/plain-fonts.css">
    
     
    <link rel="stylesheet" type="text/css" href="assets/fonts/lovelo/lovelo.css">
    <!-- Extras -->
    <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/slicknav.css">

      <!-- Color CSS Styles  -->  
    
    <link rel="stylesheet" type="text/css" href="assets/css/colors/default.css" title="default" media="screen" />      
    
   
   
  </head>
  <body>
    <header id="header-wrap">
  
        <div id="roof" class="hidden-xs">
        <div class="container">

            <div class="social-links text-center pull-right">
              <a href="#" class="social-link" data-toggle="tooltip" data-placement="bottom" title="EMERGENCY">
                <i><a href="emegency.php">EMERGENCY</a><p> </p>
                </i>
              </a>
              <a href="#" class="social-link" data-toggle="tooltip" data-placement="bottom" title="SIGN IN">
                <i><p> </p> SIGN IN <p> </p>    
                </i>
              </a>
              <a href="#" class="social-link" data-toggle="tooltip" data-placement="bottom" title="SIGN UP">
                <i><p> </p>SIGN UP<p> </p>
                </i>
              </a>
            </div>
        </div>
      </div>

  
      <section id="header">
        <div class="logo-menu">

          <nav class="navbar navbar-default navbar-plain" role="navigation" data-spy="affix" data-offset-top="50">
            <div class="container">

              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                </button>
                <a class="navbar-brand" href="index.html">
                  <img src="assets/img/logo.png" alt="DOCTOR VECTOR">
                </a>
              </div>
        
              <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav animated-nav navbar-right">
                  <li class="active">
                    <a href="index.php">
                      HOME
                    </a>
                  </li>                                    
                  <li>
                    <a href="about2.php" data-toggle="dropdown">
                      HOSPITALS
                    </a>
                  </li>             
                  <li>
                    <a href="doc-proposal.php" >
                      DOCTOR DASHBOARD
                    </a>                                        
                  </li>
                  <li>
                    <a href="#" data-toggle="dropdown">
                      MAKE AN APPOINTMENT
                    </a>
                  </li>

                  <li>
                    <a href="faq.php" >
                      FAQ
                    </a>  
                  </li>
                 
                </ul>       
       
              </div>
            </div>

            <ul class="wpb-mobile-menu">
              <li class="active">
                <a href="index.php">
                  HOME
                </a>
              </li>                                    
              <li>
                <a href="about2.php">
                  HOSPITAL
                </a>
              </li>             
              <li>
                <a href="doc-proposal.php">
          DOCTOR DASHBOARD
                </a>    
              </li>
              
        <li>
                <a href="#">
                  MAKE AN APPOINTMENT
                </a>
              </li>
        
        <li>
                <a href="faq.php">
          FAQ
        </a>
              </li>
      
      </ul>
            
          </nav>
          
        </div>
        
      </section>    
    </header>

    <div class="page-header">
      <div class="page-header-inner">
        <div class="container">
          <h1 class="section-title page-title">
          Dr Dashboard
          </h1>
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="page">Dr Dashboard</li>
          </ol>
        </div>
      </div>
    </div>


<div class="col-md-6 col-md-offset-3">
<div class="respond">
              <h3>Emergecy Form</h3>
              <form action="emersubmit.php" method="post" class="form-horizontal">
                <div class="form-group">
                  <div class="col-md-5">
                    <input class="form-control" name="Name" id="author" value="" type="text" placeholder="Name">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-5">
                    <input class="form-control" name="Email" id="author" value="" type="text" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12" >
                 <b> Select one of the following to give the proof that you are the citizen of <strong>INDIA</strong></b>
                 </div>
                    <div class="col-xs-6 col-sm-5">
                    <select name="identitytype" class="form-control">
                    <option value="Adhar Card Number(ACN)">Adhar Card Number(ACN)</option>
                    <option value="Driving Licence Number(DLN)">Driving Licence Number(DLN)</option>
                    </select>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                    <input class="form-control"  type="text" name="identityvalue" placeholder="ACN/DLN">
                    </div>
                    </div>




                 <div class="form-group">
                  <div class="col-xs-6 col-sm-3" >
                 <b> Select your Symptoms</strong></b>
                 </div>
                    <div class="col-xs-6 col-sm-5">
                   <select name="symptoms" class="form-control">
<option value = "fever">fever</option>
<option value = "chest pain">chest pain</option>
<option value = "headache">headache</option>
<option value = "chillstoothache">chillstoothache</option>
<option value = "dizziness">dizziness</option>
<option value = "nauseated">nauseated</option>
<option value = "sea sickness">sea sickness</option>
<option value = "cold">cold</option>
<option value = "short of breath">short of breath</option>
<option value = "sleepy">sleepy</option>
<option value = "sweaty">sweaty</option>
<option value = "thirsty">thirsty</option>
<option value = "tired">tired</option>
<option value = "weakness">weakness</option>
<option value = "blindness">blindness</option>
<option value = "blurred vision">blurred vision</option>
<option value = "double vision">double vision</option>
<option value = "cachexia">cachexia</option>
<option value = "fatigue">fatigue</option>
<option value = "jaundice">jaundice</option>
<option value = "pyrexia">pyrexia</option>
<option value = "nausea">nausea</option>
<option value = "abdominal pain">abdominal pain</option>
<option value = "bruising">bruising</option>
<option value = "tremor">tremor</option>
<option value = "muscle cramps">muscle cramps</option>
<option value = "hypothermia">hypothermia</option>
<option value = "hyperthermia">hyperthermia</option>
<option value = "noise bleeding">noise bleeding</option>
<option value = "vomiting">vomiting</option>
<option value = "diarrhea">diarrhea</option>
<option value = "anorexia">anorexia</option>
<option value = "constipation">constipation</option>
<option value = "anxiety">aniety</option>
<option value = "anomia">anomia</option>
<option value = "paralysis">paralysis</option>
<option value = "faint">faint</option>
</select>
                    </div>
                   

</div>
                <div class="form-group">
                  <div class="col-md-12">
                    <textarea class="form-control input-lg" name="comment" rows="4" placeholder="Decription/Additional Allergies" fixed></textarea>
                  </div>
                </div>



<p onclick="getLocation()" >Click here to access your location.
<input type="text" id="locateradio"  value="" >
</p>

<input type="hidden" name="lat" value="" id="lat">
<input type="hidden" name="long" value="" id="long">
<p id="demo"></p>

<script type="text/javascript">
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    
  document.getElementById("lat").value = position.coords.latitude;
  document.getElementById("long").value = position.coords.longitude;
  document.getElementById("locateradio").value = "Location Enabled ";
}

</script>

             <div class="form-group">
                  <div class="col-md-12">
                    <button class="btn btn-common" type="submit">Submit</button><br><br><br><br><br><br>
                </div>
               </form></div>
              </div>









    
    <!-- JavaScript & jQuery Plugins -->
    <!-- jQuery Load -->
    <script src="assets/js/jquery-min.js">
    </script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js">
    </script>
    <!--Text Rotator-->
    <script src="assets/js/jquery.mixitup.js">
    </script>
    <!--WOW Scroll Spy-->
    <script src="assets/js/wow.js">
    </script>
    <!-- OWL Carousel -->
    <script src="assets/js/owl.carousel.js">
    </script>
    <!-- Placeholder -->
    <script src="assets/js/placeholdem.min.js">
    </script>
    <!-- Vide -->
    <script src="assets/js/jquery.vide.js">
    </script>
    <!-- Skrollr -->
    
    <!-- Smooth Scroll -->
    <script src="assets/js/smooth-scroll.js">
    </script>
    <!-- WayPoint -->
    <script src="assets/js/waypoints.min.js">
    </script>
    <!-- CounterUp -->
    <script src="assets/js/jquery.counterup.min.js">
    </script>
    <!-- ScrollTop -->
    <script src="assets/js/scroll-top.js">
    </script>
    <!-- Appear -->
    <script src="assets/js/jquery.appear.js">
    </script>
    <!-- Slicknav -->
    <script src="assets/js/jquery.slicknav.js">
    </script>
    <!-- All JS plugin Triggers -->
    <script src="assets/js/main.js">
    </script>
    
  </body>
</html>