<?php 
  session_start();
  ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html"><img src="assets/img/logo.jpg" style="width: 150px;"></a></h1>

 
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about"> About </a></li>
          <li><a class="nav-link scrollto" href="index.php#departments"> Departments </a></li>
          <li><a class="nav-link scrollto" href="index.php#services"> Our Fields </a></li>
          <li><a class="nav-link scrollto" href="index.php#parenter"> Parenters </a></li>
          <li><a class="nav-link scrollto" href="index.php#cleints"> Clients </a></li>
          <li><a class="nav-link scrollto" href="store.php"> store </a></li>
          <li class="dropdown"><a href="#"><span>  Add Request </span>  <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="rental_request.php">  Rental Request </a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <li><a href="job_request.php"> Job Request  </a></li>
              <li><a href="run_request.php"> Operation Request </a></li>
              <li><a href="maintenance_request.php"> Maintenance Request </a></li>
              <li><a href="deportation_request.php"> Deportation Request </a></li>
              
    
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="notofication_request.php"> Report or complaints </a></li>
          <li><a class="nav-link scrollto" href="index.php#contact"> Contact us </a></li>
            
           <?php
           if(isset($_SESSION['cart']))
          {
           ?>

          <a href="cart.php" style='border:none;'>
          <div class="icon" style='padding: 10px;color:#123;'> <span style='background-color:red;color:#fff;border-radius:50px;padding:6px;margin:5px;'><b> <?php

          echo sizeof($_SESSION['cart']) / 3 ;

          ?> </b></span> <i style="width:100px;" class="fa fa-shopping-cart"></i></div>
          </a>
          <?php
          }
          else
          {
          ?>
          <a href="#" style='border:none;'>
          <div class="icon" style='padding: 10px;color:#123;'> <span style='background-color:red;color:#fff;border-radius:50px;padding:6px;margin:5px;'><b> <?php

          echo '0' ;

          ?> </b></span> <i style="width:100px;" class="fa fa-shopping-cart"></i></div>
          </a>
          <?php
          }
          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

 <!--      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> -->

         
    </div>
  </header><!-- End Header -->