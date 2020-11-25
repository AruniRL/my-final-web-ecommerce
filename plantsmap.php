<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PLANTS and SEEDS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
<style>
    #map{
    height:800px;
    width:1500px;
    }
    </style>
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 9411 688 4210</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">yourplantsandseeds@email.com@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">Free Shipping In All Orderes Over LKR 500 &amp; FREE RETURNS</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">PLANTS AND SEEDS HOME</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.php">Shop</a>
                <a class="dropdown-item" href="cart.php">Cart</a>
                <a class="dropdown-item" href="checkout.php">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item active dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TIPS & ADVICE</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="tips & advice.php">Tips & Advice</a>
              	<a class="dropdown-item" href="how_to_grow.php">How To Grow Guides</a>
              </div>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	          
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

       <body>
          	<div id="map" class="bg-white"></div>
            <script>
            function initMap(){
              //map options
              var options = {
                zoom:10,
                center:{lat:7.8731,lng: 80.7718}
                //center:{lat:6.9271,lng:79.8612}
              }
              //new map
             // var map = new
              var map = new google.maps.Map(document.getElementById('map'), options);


              //add marker
           /*   var marker = new google.maps.Marker({
                position:{lat:6.9010,lng:79.8549},
                position:{lat:6.0535,lng:80.2210},
               map:map
              });

              //add info window
              var infowindow = new google.maps.InfoWindow({
                content: '<p>Iramusu plants<br> <br> elpitiya<br> </p>'
              });

              google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker);
              });*/


              addMarker({
                coords:{lat:6.0535,lng:80.2210},
                content:'<p>iramusu plants <br> komarika plants </p>'
              });
              addMarker({lat:6.2880,lng:80.1596});
              addMarker({lat:6.7230,lng:80.0647});
              addMarker({lat:7.2906,lng:80.6337});
              addMarker({lat:5.9549,lng:80.5550});
              addMarker({lat:8.3114,lng:80.4037});
              addMarker({lat:6.8728,lng:81.3507});
              

              function addMarker(coords){
                var marker = new google.maps.Marker({
                position:coords,
               map:map,
               icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
             
              });

              }

              

            }
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLQl0kZ4zeh7KCeXQyAcHXaZbc0ULZbCY&callback=initMap">
    </script>
  </body>
  </body>
</html>


        

   



  

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>


  <script src="js/main.js"></script>

  </body>
</html>
