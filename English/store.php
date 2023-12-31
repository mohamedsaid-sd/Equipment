<?php
session_start();
if(isset($_GET['exit'])){
session_unset();
session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title> Products </title>
	<meta content="" name="description">
  	<meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<style type="text/css">
  .card{
    color: #555;
    font-weight: bold;
    font-size: 15px;
  }
</style>
<body>

<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">

        <a href="../English/index.php" class="linkedin" style="padding: 5px;margin: 5px;">Eng</i></i></a> | 
        <a href="../Arabic/index.php" class="linkedin" style="padding: 5px;margin: 5px;"">Ara</i></i></a>

        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="bi bi-phone"></i> +249 6445


      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>

      </div>
    </div>
  </div>

  <?php

  $flag = false ; 
  $flagalert = false;

   // the array that hold the cart valse
      if(!isset($_SESSION['cart']))
      {$_SESSION['cart'] = array();}
      // ADD ITEM TO CART
      if(isset($_POST['add_to_cart']))
      {
        $id    = $_POST['id'];
        $name  = $_POST['name'];
        $price = $_POST['price'];

        // check if item found
        $flag = false;
        foreach ($_SESSION['cart'] as $key => $value) {
          if($key % 3 == 0){
              if($value == $id)
                  $flag = true;
          }
        }
        
        if($flag){

        }else{
        // add item to cart 
        array_push($_SESSION['cart'] ,
        $id , $name , $price );
        $flagalert = true;
        // array_unique($_SESSION['cart'] , SORT_REGULAR);
        }



      }

   include 'mainlist.php'; ?>

  <main id="main">

  <!-- ======= Contact Section ======= -->
    <section class="contact">
      <div class="container">
        <br/>
        <div class="section-title">
          <h2> Our fleet  </h2>
         </div>
      </div>

    <?php

    if($flagalert){
       echo "<div class='alert alert-success'>
                        <span class='icon'> <i class='fa fa-check-circle'></i></span>
                         <b> ِAdded Item to cart successfully  </b> </div>";
    }

    ?>
     <div class="container">
        <div class="row mt-5">
          <div class="col-lg-12 mt-5 mt-lg-0">
				<?php 

                if(isset($_GET['suc'])){
 echo "<div class='alert alert-success'>
                        <span class='icon'> <i class='fa fa-check-circle'></i></span>
                         <b> The request has been sent successfully , we at Equipation company are always happy to receive your requests at all times , Equipation company employee will respond to you as soon as possible via the phone number or email sent in the request , Thank you for your Understanding  </b> </div>";
}
				// get the products from the server 
				include 'fetch_products.php' ; 
				?>
			</div>
		</div>
	</div>
</section>
</main>
 

  <!-- ======= Footer ======= -->
  <?php include 'footer.php'; ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>