<?php
// $user = 'dbadminmathrixau';
// $pass = 'Mathrix@18';
// $host = 'localhost';
// $db = 'mathrix18';

// $conn = mysqli_connect($host,$user,$pass,$db);
// function getUserIP()
// {
//     $client  = @$_SERVER['HTTP_CLIENT_IP'];
//     $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
//     $remote  = $_SERVER['REMOTE_ADDR'];

//     if(filter_var($client, FILTER_VALIDATE_IP))
//     {
//         $ip = $client;
//     }
//     elseif(filter_var($forward, FILTER_VALIDATE_IP))
//     {
//         $ip = $forward;
//     }
//     else
//     {
//         $ip = $remote;
//     }

//     return $ip;
// }


// $user_ip = getUserIP();


// $query = "INSERT INTO counter (ip) VALUES ('$user_ip')";
//           $result = mysqli_query($conn,$query);


?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	<title>Mathrix'18 - Department of Mathematics</title>
	<link href="https://fonts.googleapis.com/css?family=Orbitron"; rel="stylesheet">
	<link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
	<link rel="icon" href="assets/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" href="css/style3.css">
    
	<link rel="stylesheet" href="animation/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
	<style>
	/* width */
::-webkit-scrollbar {
    width: 4px;
}

/* Track */
::-webkit-scrollbar-track {
    background: black; 
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: #62c85b; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: green; 
}

	#c{
		background-position: fixed;
		position: fixed;height: 100%;
	}
	    .black{
	    	background-color: black;
			border: 1px solid;
		    box-shadow: 2px 2px #62C85B;
		    font-family: "Lucida Console", Monaco, monospace;
	    }
		section {
			scroll-behavior: smooth;
			min-height: 100%;
		}
		body, html, .scroll {
    			height: 100%;
				}
				body,html {
					font-family: 'Orbitron', sans-serif;
					font-size: 15px;
				}
				@import url(https://fonts.googleapis.com/css?family=Droid+Sans);
.loader {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background-color: black;
    background-image: url("https://mathrixau.in/assets/animlogo.svg");
    background-repeat: no-repeat;
    background-position: center;
}

	</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="loader">
	<div style="font-size:28px;position: absolute;bottom: 0;text-align: center;width: 100%;">Loading...</div>
</div>
<div class='ss' style="top:50px;">
  <div onclick="window.location.href='https://www.facebook.com/MATHRIXAU/'" class='icon social fb'><i class='fa fa-facebook'></i></div>
</div>
<div class="ss" style="top:100px;">
  <div onclick="window.location.href='https://www.instagram.com/mathrix2k18/'" class='icon social tw'><i class='fa fa-instagram'></i></div>
</div>
<div class="ss" style="top:150px;">
 <div data-target="#info" data-toggle="modal" class='icon social in'><i class='fa fa-phone'></i></div>
</div>  
  <div style="height: 50% !important;" class="modal fade" id="info">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content black">
      
        
        <div class="modal-header">
          <h4 class="modal-title" style="color: green;font-weight: bolder;">Contact</h4>
          <button type="button" class="close" data-dismiss="modal" style="color: green;">&times;</button>
        </div>
        
       
        <div class="modal-body">
          <ul class="list-group">
          	<li class="list-group-item">
          		<span><i style="color: #62C85B; " class="fa fa-mobile"></i> Raj Kumar S.</span>&nbsp;-&nbsp;<a href="tel:919894875600">+91 9894875600</a>
          	</li>
          	<li class="list-group-item">
          		<span><i style="color: #62C85B; " class="fa fa-mobile"></i>  Viveagalakshmi S.A.</span>&nbsp;-&nbsp;<a href="tel:919894770236">+91 9894770236</a>
          	</li>
          </ul>
        </div>
        
        
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
    <div style="height: 50% !important;" class="modal fade" id="notify">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content black">
      
        
        <div class="modal-header">
          <h4 class="modal-title" style="color: green;font-weight: bolder;">Notification</h4>
          <button type="button" class="close" data-dismiss="modal" style="color: green;">&times;</button>
        </div>
        
       
        <div class="modal-body">
          <ul class="list-group">
          	<li class="list-group-item">
          		Workshop Registrations are now open . Click <a href="#" onclick="return opennot()">here</a> to register . Only limited seats available.
          	</li>
          </ul>
        </div>
        
        
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
		<div class="container-fluid">
			
			<div class="d-lg-none d-md-none">&nbsp;&nbsp;</div><a href="#home" class="navbar-brand"><div style="font-size: 2.2rem;" class="content" data-text="MathRix`18">MathRix`18</div></a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#menuItems">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="menuItems">
				<ul  data-toggle="collapse" data-target="#menuItems" class="navbar-nav ml-auto" style="color: #62C85B;">
					<li class="nav-item">

						<a href="#home" class="nav-link smooth"><div class="navig" data-text="Home">&nbsp;&nbsp;<i style="color: #62C85B; " class="fa fa-home"></i> Home</div></a>
					</li>
					<li class="nav-item">
						<a href="#events" class="nav-link smooth"><div class="navig" data-text="Events">&nbsp;&nbsp;<i style="color: #62C85B; " class="fa fa-cubes"></i> Events</div></a>
					</li>
					<li class="nav-item">
						<a href="#workshops" class="nav-link smooth"><div class="navig" data-text="Workshop">&nbsp;&nbsp;<i style="color: #62C85B; " class="fa fa-cogs"></i> Workshop</div></a>
					</li>
					<li class="nav-item">
						<a href="#" data-target="#info" data-toggle="modal" class="nav-link smooth"><div class="navig" data-text="Contact_Us">&nbsp;&nbsp;<i style="color: #62C85B; " class="fa fa-at"></i> Contact Us</div></a>
					</li>
					<li class="nav-item">
<a href="#" data-target="#regform"  data-toggle="modal" class="nav-link" style="outline:0 !important;height: 50% !important;"><div class="navig" data-text="Register">&nbsp;&nbsp;<i style="color: #62C85B; " class="fa fa-user-circle-o"></i> Register</div></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<header id="home">
	<canvas id="c"></canvas>	
		<div class="dark-overlay">
			<div class="home-inner">
				<div class="container1">
					<div style="text-align: center;position: absolute;top: 0;">
						<img style="padding-top: 35px;" id="animlogo" src="assets/an.svg" width="400" height="400">
						<div class="meow display-4"></div>	
					
					</div>
				
				</div>
			</div>
		</div>
	</header>
	<section id="events" class="text-muted">
		<div class="container py-5">
			<div class="row text-center" style="padding-top: 10px;">
				<div class="col-lg-12"><h1 class="display-4 " style="color: #62C85B;">Events</h1></div>
			</div>
				<div class="row">
				    <?php include 'snippets/clashofcodes.html'; ?>
				    <?php include 'snippets/mathquiz.html'; ?>
				    <?php include 'snippets/creativemaths.html'; ?>
				</div>
				<div class="row">
				    <?php include 'snippets/queryhunt.html'; ?>
				    <?php include 'snippets/cryptomania.html'; ?>
				    <?php include 'snippets/online.html'; ?>
				</div>
		 </div>  
		 <div id="regdiv"><?php include 'snippets/regform.html'; ?> </div>   
		 <?php include 'snippets/bookworkshop.php'; ?>    

	</section>
	<section id="workshops" class="text-muted p-2">
		<div class="container py-5">
			<div class="row text-center" style="padding-top: 10px;">
				<div class="col-lg-12"><h1 class="display-4 " style="color: #62C85B;">Workshop</h1></div>
			</div>
			<div class="row">
				    <?php include 'snippets/workshop.html'; ?>
	
	<script src="js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>		
	<script src="js/index.js"></script>
	
	<script src="js/index1.js"></script>
	<script src="js/ani.js"></script>
 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	<script src="js/validate.js"></script>

		<script>
			
			$(document).ready(function(){
				$( ".loader" ).remove();
				$(".smooth").on('click', function(event) {
				if (this.hash !== "") {
					  event.preventDefault();
					  var hash = this.hash;
					  $('html, body').animate({
				        scrollTop: $(hash).offset().top - 12
				      }, 1000, function(){
						//window.location.hash = hash;
				      });
				    } 
				  });
				});  
        $('#notify').modal('show');
	  </script>
</body>
</html>