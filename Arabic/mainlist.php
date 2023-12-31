<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">

        <a href="../English/index.php" class="linkedin" style="padding: 5px;margin: 5px;">Eng</i></i></a> | 
        <a href="../Arabic/index.php" class="linkedin" style="padding: 5px;margin: 5px;"">Ara</i></i></a>

        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">info@equipation.sd</a>
        <i class="bi bi-phone"></i>  +249912322447 


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
  session_start();
  ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

 
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul> 
          <li><a class="nav-link scrollto active" href="index.php#hero">الرئيسية</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">من نحن</a></li>
          <li><a class="nav-link scrollto" href="index.php#departments">الخدمات</a></li>
          <li><a class="nav-link scrollto" href="index.php#services"> مجالات عملنا </a></li>
          <li><a class="nav-link scrollto" href="index.php#parenter"> شركائنا </a></li>
          <li><a class="nav-link scrollto" href="index.php#cleints"> عملاءنا</a></li>
          <li><a class="nav-link scrollto" href="store.php">
            الاسطول
          <li class="dropdown"><a href="#"><span> تقديم طلب </span>  <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="contract_request.php">طلب مقاولة</a></li>
              <li><a href="rental_request.php">طلب تأجير</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <li><a href="job_request.php">طلب توظيف</a></li>
              <li><a href="run_request.php">طلب تشغيل</a></li>
              <li><a href="maintenance_request.php">طلب صيانة</a></li>
              <li><a href="deportation_request.php">طلب ترحيل</a></li>
              
    
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="notofication_request.php">رفع بلاغ او شكوى</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">تواصل معنا</a></li>
           
           <?php
           if(isset($_SESSION['cart']))
          {
           ?>

          <a href="cart.php" style='border:none;'>
          <div id="cart" class="icon" style='padding: 10px;color:#123;'> <span style='background-color:red;color:#fff;border-radius:50px;padding:6px;margin:5px;'><b> <?php

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

           <h1 class="logo me-auto"><a href="index.php"><img src="assets/img/logo.jpg" style="width: 150px;"></a></h1>

    </div>
  </header><!-- End Header -->
