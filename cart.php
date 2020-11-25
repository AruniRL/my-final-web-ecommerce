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
              	<a class="dropdown-item" href="wishlist.php">Wishlist</a>
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
                <a class="dropdown-item" href="what_to_plant.php">What To Plant Where</a>
                <a class="dropdown-item" href="what_to_grow.php">What To Grow When</a>
                <a class="dropdown-item" href="what_disease.php">What Disease Is That</a>
              </div>
			  <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
</ul>
</div>
</div>
</div>

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_5.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html"></a></span> <span></span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>



<div class="content_wrapper">
	<div id="sidebar">
		<div id="slidebar_title">Categories</div>
		<ul id="cats">
		

						<?php 
						getCats();
						?>
</ul>
					
<div id="content_area">
	  
<div class= "shopping_cart_container">

<div id="shopping_cart" align ="right" style="padding:15px">
<?php 
if(isset($_SESSION['customer_email'])){
	echo "<b>Your Email:</b>" .$_SESSION['customer_email'];
}else{
echo "";
}
?>
<b style="color:green">Your Cart - </b>Total Items: <?php total_items ();?> Total Price: <?php total_price(); ?>
</div>
<form action="" method="POST" enctype="multipart/form-data">
<table align= "center" width="100%">

<tr align="center">
	<th>Remove</th>
	<th>Product</th>
	<th>Quality</th>
	<th>Price</th>
</tr>


<?php
$total = 0;
    $ip= get_ip();
    $run_cart= mysqli_query($con, "select * from cart where ip_address='$ip'");
    while($fetch_cart= mysqli_fetch_array($run_cart)){

        $product_id= $fetch_cart['product_id'];
        $result_product= mysqli_query($con, "select * from products where product_id='$product_id'");

        while($fetch_product = mysqli_fetch_array($result_product)){
            $product_price = array($fetch_product['product_price']);
            $product_title = $fetch_product['product_title'];
            $product_image = $fetch_product['product_image'];
            $sing_price = $fetch_product['product_price'];
            $values = array_sum($product_price);

            //Getting Quality of the products
            $run_qty = mysqli_query($con, "select * from cart where product_id='$product_id'");
            $row_qty = mysqli_fetch_array($run_qty);
            $qty = $row_qty['quality'];
            $values_qty = $values * $qty;

			$total +=$values_qty;
		
       
	?>

<tr align="center">
	<td><input type="checkbox" name="remove[]" value="<?php echo $product_id; ?>" /></td>
	<td>
	<?php echo $product_title; ?>
<br/>
<img src="admin_area/product_images/<?php echo $product_image;?>" />
</td>
	<td><input type="text" size="4" name="qty" value="<?php echo $qty;?>" /></td>
	<td><?php echo "LKR" . $sing_price; ?></td>
</tr>

<?php } }//End While ?>

<tr>
	<td colspan="4" align="right"><b>Sub Total:</b></td>
	<td><?php echo total_price(); ?></td>
</tr>

<tr align="center">
	<td colspan="2"><input type="submit" name="update_cart" value="Update Cart"/></td>
	<td><input type="submit" name="continue" value="Continue Shopping" /></td>
	<td><button><a href="checkout.php">Checkout</a></td>
</tr>

</table>
</form>

<?php 
if(isset($_POST['remove'])){
	
	foreach($_POST['remove'] as $remove_id){
		$run_delete = mysqli_query($con, "delete from cart where product_id = '$remove_id' AND ip_address='$ip'");

		if($run_delete){
			echo "<script>window.open('cart.php','_self')</script>";
		}
	}
}

if(isset($_POST['continue'])){
	echo "<script>window.open('shop.php','_self')</script>";
}
?>

</div>
	<div id="products_box">

                     
			</div>
				</div>
</div>
 <footer>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Plants and Seeds Home</h2>
              <p>Based in Sri lanka we specialise in sri lanka native seed and also stock a large selection of heirloom, 
			  vegetable, flower and exotic seeds, including many rare and unusual.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Tips & Advice</a></li>
                <li><a href="#" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">27/1 Old Road,Kollupitiya , Colombo 03, Sri Lanka</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+ 9411 688 4210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">yourplantsandseeds@email.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
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