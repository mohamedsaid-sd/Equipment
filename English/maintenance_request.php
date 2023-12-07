<!DOCTYPE html>
<html dir="ltr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Maintenance Request </title>
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

  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Jun 23 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<script type="text/javascript">
           // deal with location side
   function select_side(){
     var type = document.getElementById("side").value;
      if(type == "company"){
      document.getElementById("sidehide").style.display = "block";
      }else{
      document.getElementById("sidehide").value = "";
      document.getElementById("sidehide").style.display = "none";
      }
   }

      // deal with work with us 
   function select_wwus(){
     var type = document.getElementById("wwus").value;
      if(type == "yes"){
      document.getElementById("wwushide").style.display = "block";
      }else{
      document.getElementById("wwushide").value = "";
      document.getElementById("wwushide").style.display = "none";
      }
   }
</script>
<body>

  <!-- ======= Top Bar ======= -->
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

  <?php include 'mainlist.php'; ?>

  <main id="main">

  

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
        <br/>
          <h2 style="width:300px"> Maintenance Request </h2>
       </div>
      </div>

  

      <div class="container">
        <div class="row mt-5">

   

          <div class="col-lg-12 mt-5 mt-lg-0">

            <form action="action_maintenance.php" enctype="multipart/form-data" method="post" role="form">

                <h3 for="textAreaRemark">  Maintenance request form : </h3>

              <div class="row">
                <div class="col-md-4 form-group">
                  <input type="text" name="Type" class="form-control" id="Type" placeholder="type of Machine " required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="model" id="model" placeholder=" Machine model   " required>
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="chassis" id="Sashinumber" placeholder=" Chaassis number  " required>
                  </div>

              </div>
     <!-- Start Input Start Time -->
     <div class="row">

     <div class="form-group col-md-4">
            <br/>
            <input type="text" class="form-control" name="km_read" id="time" placeholder=" daily working hours " required>
      </div>

      <div class="form-group col-md-4">
        <label>  Type of repaire </label>
        <div class="d-flex flex-row justify-content-between align-items-center">
          <select class="form-control mr-1" id="typeoffix" name="main_type" required>
            <option value="" disabled selected> -- Choose -- </option>
            <option value="1"> Mechanics </option>
            <option value="2"> Electricity </option>
            <option value="3"> Metalworks </option>
            <option value="4"> Adaptation </option>
            <option value="5"> Hydraulic </option>


          </select>
        
        </div>
      </div>


      <div class="col-md-4 form-group">
        <br/>
        <input type="text" name="site_location" class="form-control" id="location" placeholder=" Machine location " required>
      </div>
    
     

      </div>


      <div class="row">
        

        <div class="form-group col-md-4">
            <label for="inputDate"> Date of manufacture</label>
            <input type="date" class="form-control" id="inputDate" name="date" required />
          </div>
      </div>

      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder=" Discription of the problem " required></textarea>
      </div>
      <br/>
      <h3 for="textAreaRemark"> Site data :  </h3>

      <div class="row">
        <div class="col-md-4 form-group mt-3 mt-md-0">
            <br/>
            <input type="text" class="form-control" name="site_location" id="Counter" placeholder=" Last job site " required>
          </div>
        <div class="form-group col-md-4">
           <label>  The nature of the site </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="site_nature" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option value="1"> Mountains </option>
               <option value="2"> Wells </option>
               <option value="3"> Farm </option>
               <option value="4"> Mine </option>
               <option value="4"> Open sites </option>
             </select>
           </div>
         </div>
   
         <div class="col-md-4 form-group mt-3 mt-md-0">
              <br/>
            <input type="text" class="form-control" name="site_location" id="city" placeholder=" Area name " required>
          </div>

          <div class="col-md-4 form-group mt-3 mt-md-0">
            <br/>
            <input type="text" class="form-control" name="Nearest_market" id="city2" placeholder=" The nearest market " required>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
              <label>  Network availability </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="network" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option value="1"> Communication  </option>
               <option value="2"> WiFi </option>
             </select>
           
           </div>

          </div>

              </div>
             <br/>

             <h3 for="textAreaRemark"> Customer data : </h3>


              <div class="row">

                <div class="col-md-3 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="  Customer name " required>
                </div>

                <div class="col-md-3 form-group">
                  <input type="text" name="phone" class="form-control" id="name" placeholder="  phone " required>
                </div>
                <div class="col-md-3 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="email" id="email" placeholder=" Customer Email " required>
                </div>

                <div class="col-md-3 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="job" id="job" placeholder=" Customer job " required>
                  </div>

              </div>

              <div class="row">

              <div class="col-md-4 form-group">
                <lable>  Your side is </lable> 
                <select class="form-control mr-1" name="work_for" id="side" onchange="select_side();" required>
                <option value="" disabled selected> -- Choose -- </option>
                <option value="company"> Company </option>
                <option value=""> Individual </option>
                </select>  
                <input id="sidehide" type="text" name="company_name" class="form-control" placeholder=" ادخل اسم الشركة يدوي " style="display: none;" />
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <lable> Have you over worked with us : </lable> 
                <select class="form-control mr-1" name="previous" id="wwus" onchange="select_wwus();" required>
                <option value="" disabled selected> -- Choose -- </option>
                <option value="yes"> Yes </option>
                <option value="2"> No </option>
                </select>

               <input id="wwushide" type="text" class="form-control" placeholder=" في اي موقع عملت معنا " style="display: none;" />
               <!-- required style="display:none" -->
               
              

              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <div class="form-group">
              <label for="exampleFormControlSelect2"> How to know us :  </label>
              <select multiple class="form-control" name="know" id="exampleFormControlSelect2">
                <option> Facebook </option>
                <option> Twiter </option>
                <option> Instegram </option>
                <option> By a friend </option>
                <option> By company  </option>
                <option> Others  </option>
              </select>
              </div>
             </div>

              
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit"> Send Request </button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'footer.php'; ?>
  
  <div id="preloader"></div>
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