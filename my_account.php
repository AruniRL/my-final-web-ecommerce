
<?php include('header.php'); ?>
<div class="menu_bar">
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
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
                <
              </div>
        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
</ul>
</div>
</div>
</div>



<div class="content_wrapper">

<?php if(isset($_SESSION['user_id'])){ ?>
    
<div class="user_container">
    
<div class="user_content">

<?php 
if(isset($_GET['action'])){
$action = $_GET['action'];
}else{
    $action='';

}
switch($action){
    case "edit_account";
    include('users/edit_account.php');
break;

case "edit_profile";
    include('users/edit_profile.php');
break;

case "user_profile_picture";
    include('users/user_profile_picture.php');
break;

case "change_password";
include('users/change_password.php');
break;

case "delete_account";
include('users/delete_account.php');
break;



default;
echo "Do something";
break;
}

/*if($_GET['action'] == 'edit_account'){
    echo $action; 
}*/
?>
</div>

<div class= "user_slidebar">
    
<?php 
$run_image = mysqli_query($con, "select * from user_s where id='$_SESSION[user_id]'");

$row_image = mysqli_fetch_array($run_image);

if($row_image['image'] !=''){
?>

<div class="user_image" align="center">
<img src="upload-files/<?php echo $row_image['image'];?>"/>
</div>

<?php } else { ?>

    <div class="user_image" align="center">
<img src="images/profile.png"/>
</div>
<?php } ?>

    <ul>
        <li><a href="my_account.php?action=my_order">My Order</a></li>
        <li><a href="my_account.php?action=edit_account">Edit Account</a></li>
        <li><a href="my_account.php?action=edit_profile">Edit Profile</a></li>
        <li><a href="my_account.php?action=user_profile_picture">User profile picture</a></li>
        <li><a href="my_account.php?action=delete_account">Delete Account</a></li>
        <li><a href="logout.php">Logout</a></li>
</ul>
</div>
</div>

<?php } else { ?>

    <h1>Account setting page</h1>

    <h5><a href="shop.php?action=login">Log in</a>to Your Account</h5>

<?php } ?>
</div>
 <footer>
        
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Plants and Seeds Home <i class="icon-heart color-danger" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank"></a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>