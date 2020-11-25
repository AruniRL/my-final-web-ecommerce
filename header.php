<?php
session_start();
include("functions.php");
include("admin_area/includes/db.php");

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
	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="css/style2.css" media="all"/>
  </head>

  <body>


  <div class= "main_wrapper">

  <div class="header_wrapper">

<div class="header_logo">
  <a href="shop.php">
    <img id="logo" src="images/logo.png"/>
</a>
</div>


  
</div>
</div>
<div class="cart">
				<ul>
					<li class="nav-item">
						<div id="notification_total_cart" class="shopping cart">
							<img src="images/cart_icon.png" id="cart_image">
							<div class="noti_cart_number">
							<?php

                            total_items();?>
							</div>
</div>
</li>
</ul>
</div>
<?php if(!isset($_SESSION['user_id'])){ ?>

<div class= "register_login">
  <div class="login"><a href="shop.php?action=login">Login</a></div>
  <div class="register"><a href="register.php">Register</a></div>
</div>
<?php } else{ ?>
	<?php 
	$select_user = mysqli_query($con, "select * from user_s where id='$_SESSION[user_id]' ");
	$data_user= mysqli_fetch_array($select_user);
?>

	<div id="profile">
		<ul><li class="dropdown_header">
			<a>
				<?php if($data_user['image'] !='') { ?>
					<span><img src="upload-files/<?php echo $data_user['image']; ?>"></span>

				<?php } else{ ?>

					<span><img src="images/profile.png"></span>

				<?php } ?>
</a>

<ul class="dropdown_menu_header">
	<li><a href="my_account.php?action=edit_account"> Account Setting</a></li>
	<li><a href="logout.php">Logout</a></li>
</ul>
</li>
</ul>
</div>


	</div>
<?php } ?>
</div>

