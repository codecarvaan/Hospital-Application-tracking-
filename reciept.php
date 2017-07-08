<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      DETAILS
    </title>
  
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
    
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    
	<link rel="stylesheet" media="screen" href="assets/fonts/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/plain/plain-fonts.css">
    
     
    <link rel="stylesheet" type="text/css" href="assets/fonts/lovelo/lovelo.css">
    
	<link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/slicknav.css">

    <link rel="stylesheet" type="text/css" href="assets/css/colors/green.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/colors/default.css" title="default" media="screen" />      
    <link rel="stylesheet" type="text/css" href="assets/css/colors/lightblue.css" title="lightblue" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/colors/gray.css" title="gray" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/colors/coffee.css" title="coffee" media="screen" />    
    <link rel="stylesheet" type="text/css" href="assets/css/colors/orange.css" title="orange" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/colors/wisteria.css" title="wisteria" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/colors/mblue.css" title="mblue" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/colors/greensea.css" title="greensea" media="screen" /> 
    <link rel="stylesheet" href="css/style.css">
  
   
  </head>
  <body>
<?php 

$pid=$_GET["pid"];
$hid=$_GET["hid"];
include "conn.php";
$sql="select * from patient where pid='$pid'";
$res=mysql_query($sql);
while($row=mysql_fetch_assoc($res))
{
$name=$row["name"];
$address=$row["address"];
$phone=$row["phone"];
$type=$row["identitytype"];
$value=$row["identityvalue"];
$email=$row["email"];


}

$sql1="select * from hospital where id='$hid'";
$res1=mysql_query($sql1);
while($row1=mysql_fetch_assoc($res1))
{

$nameh=$row1["name"];
$addressh=$row1["address"];
}


$sql2="select * from appointment where pid='$pid' and hid='$hid'";
$res2=mysql_query($sql2);
while($row2=mysql_fetch_assoc($res2))
{

$time=$row2["time"];
$date=$row2["date"];
$issue=$row2["issue"];
$description=$row2["discription"];
}



?>


     <header id="header-wrap">
	
	      <div id="roof" class="hidden-xs">
        <div class="container">

            <div class="social-links text-center pull-right">
              <a href="emergency.php" class="social-link" data-toggle="tooltip" data-placement="bottom" title="EMERGENCY">
                <i>EMERGENCY<p> </p>
                </i>
              </a>
              <a href="Sign_in.php" class="social-link" data-toggle="tooltip" data-placement="bottom" title="SIGN IN">
                <i><p> </p> SIGN IN <p> </p>    
                </i>
              </a>
              <a href="logout.php" class="social-link" data-toggle="tooltip" data-placement="bottom" title="SIGN UP">
                <i><p> </p>Logout<p> </p>
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
                    <a href="appointment.php" data-toggle="dropdown">
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
                <a href="appointment.php">
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
  
  <div class="col-md-8 col-md-offset-3">
<div class="respond">
              <h3>Reciept</h3>
              <form action="emersubmit.php" method="post" class="form-horizontal">
               <div class="col-xs-6 col-sm-5">
                   <b> Name:</b>&nbsp&nbsp&nbsp<?php echo $name;?>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                   <b> Email:</b>&nbsp&nbsp&nbsp<?php echo $email;?>
                    </div>
                  <div class="col-xs-6 col-sm-5">
                   <b> Phone-Number:</b>&nbsp&nbsp&nbsp<?php echo $phone;?>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                    <b> Identity Type:</b><?php echo $type;?>::<?php echo $value;?>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                    <b>Patient ID:</b>&nbsp&nbsp&nbsp<?php echo $pid;?>
                    </div>

                
                  
                 <div class="col-md-12" >
                  
                 <b> Address:</b> <?php echo $address;?>
                 </div>
                   

                
                  <div class="col-md-12" >
                 <b>  Symptoms</b>:<?php echo $issue;?>
                 </div>
                 <div class="col-md-12" >

                 <b> Description: </b><?php echo $description;?>
                 <br><br>
                 </div>
                   
                   

</div><div class="col-md-12" >
                

                  <h3>Hospital Details</h3>

                </div>
 <div class="col-md-12" >
                 <b>  Name:</b><?php echo $nameh;?>
                 </div>
                 <div class="col-md-12" >

                 <b> Address: </b><?php echo $addressh;?>

                 </div>
<div class="col-md-12" >
                

                  <h3 style="margin-bottom:100px">Location</h3>
<iframe
  width="800px";
  height="600px"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyAbd318t5kTkd5tBcqCxISXCeWRSdcL-sI&origin=<?php echo $address;?>&destination=<?php echo $nameh;?>,&avoid=tolls|highways">
</iframe>
                </div>



             <div class="form-group">
                  <div class="col-md-12">
                 
                  </div>

                </div>
<div class="col-md-12">
<br><a href="logout.php" class="btn btn-info">logout and submit</a>
               </form>
               </div>
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
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbd318t5kTkd5tBcqCxISXCeWRSdcL-sI&signed_in=true&libraries=places&callback=initAutocomplete"
        async defer></script>
  </body>
</html>