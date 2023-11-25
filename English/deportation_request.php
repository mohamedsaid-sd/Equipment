<!DOCTYPE html>
<html dir="ltr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> طلب ترحيل  </title>
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

<script>
  
  // deal with machine type
   function select_type(){
    var type = document.getElementById("type").value;
      if(type == "hand"){
      document.getElementById("typehide").style.display = "block";
      }else{
      document.getElementById("typehide").value = "";
      document.getElementById("typehide").style.display = "none";
      }
   }

   // deal with machine brand
   function select_brand(){
    var type = document.getElementById("brand").value;
      if(type == "hand"){
      document.getElementById("brandhide").style.display = "block";
      }else{
      document.getElementById("brandhide").value = "";
      document.getElementById("brandhide").style.display = "none";
      }
   }

   // deal with machine weight
   function select_weight(){
   	 var type = document.getElementById("weight").value;
      if(type == "hand"){
      document.getElementById("weighthide").style.display = "block";
      }else{
      document.getElementById("weighthide").value = "";
      document.getElementById("weighthide").style.display = "none";
      }
   }

   // deal with machine paper
   function select_paper(){
   	 var type = document.getElementById("paper").value;
      if(type == "hand"){
      document.getElementById("paperhide").style.display = "block";
      }else{
      document.getElementById("paperhide").value = "";
      document.getElementById("paperhide").style.display = "none";
      }
   }

   // deal with machine size
   function select_size(){
     var type = document.getElementById("size").value;
      if(type == "hand"){
      document.getElementById("sizehide").style.display = "block";
      }else{
      document.getElementById("sizehide").value = "";
      document.getElementById("sizehide").style.display = "none";
      }
   }

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

        <a href="../English/index.html" class="linkedin" style="padding: 5px;margin: 5px;">Eng</i></i></a> | 
        <a href="../Arabic/index.html" class="linkedin" style="padding: 5px;margin: 5px;"">Ara</i></i></a>

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
    <section class="contact">

    
      <div class="container">
      <br/>
        <div style="margin-bottom:5px;" class="section-title">
          <h2> Data for a Migration Request </h2>
         </div>
      </div>

  

      <div class="container">
        <div class="row mt-5">

   

          <div class="col-lg-12 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">

                <h3 for="textAreaRemark"> Migration Liabilities:</h3>

              <div class="row">
                <div class="col-md-4 form-group">
                Type Of Machine: <br/>
                  <select class="form-control mr-1" name="type" id="type" onchange="select_type();" required>
                    <option disabled selected> -- Choose   -- </option>
                    <option> Excavator </option>
                    <option> Dozer </option>
                    <option> Generator </option>
                    <option value="hand"> Manual Entry </option>
                  </select>
                  <input id="typehide" type="text" class="form-control" placeholder="  Manual Entry " required style="display:none">
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                SIZE OF MACHINE <br/>
                  <input type="text" class="form-control" placeholder=" manual entry size    " required>
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                MODEL OF MACHINE <br/>
                 <select class="form-control mr-1" name="brand" id="brand" onchange="select_brand();" required>
                    <option disabled selected> --   Choose  -- </option>
                    <option> GAT </option>
                    <option> JCB </option>
                    <option> ATLAS CAPS </option>
                    <option value="hand"> manual entry </option>
                  </select>    
                  <input id="brandhide" type="text" class="form-control" placeholder="    manual entry " required style="display:none">
              
                </div>
               </div>
     <!-- Start Input Start Time -->
     <div class="row">

     <div class="col-md-4 form-group">
        <label>  WIEGHT OF MACHINE(TON) </label>
       
          <select class="form-control mr-1" name="weight" id="weight" onchange="select_weight();" required>
          <option value="" disabled selected> --  Choose -- </option>  
            <option value="10">10</option>
            <option value="12">20</option>
            <option value="15">30</option>
            <option value="hand"> manual entry</option>
          </select>
          <input id="weighthide" type="text" class="form-control" placeholder="   manual entry " style="display: none;" />
        
        
      </div>

      <div class="form-group col-md-4">
        <label>   DOCUMENTS </label>
          <select class="form-control mr-1" name="paper" id="paper" onchange="select_paper();" required>
            <option value="" disabled selected> --  Choose -- </option>
            <option value="1">  machine license </option>
            <option value="2">  custom certificate </option>
            <option value="3"> authorization </option>
            <option value="hand">  other document</option>
          </select>
          <input id="paperhide" type="text" class="form-control" placeholder=" manual entry  other document " style="display: none" />
      </div>

      <div class="form-group col-md-4">
        <label>     TYPE OF MACHINE TO MOB/DIMOB </label>
   
          <select class="form-control mr-1" name="size" id="size" onchange="select_size();" required>
            <option value="" disabled selected> --  Choose -- </option>
            <option value="1"> lowbed</option>
            <option value="2"> trailer </option>
            <option value="3"> truck </option>
            <option value="hand">  manual entry </option>
          </select>

          <input id="sizehide" type="text" class="form-control" placeholder="   manual entry " style="display: none;" />
    
      </div>

      </div>


      <h3 for="textAreaRemark"> DATA OF FIELD</h3>


      <div class="row">
        <div class="col-md-4 form-group">
        LOCATION MACHINE <br/>
          <input type="text" class="form-control" placeholder=" state " required>
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <br/>
          <input type="text" class="form-control"  placeholder=" zone " required>
        </div>

        <div class="form-group col-md-4">
          <br/>
          <input type="text" class="form-control" placeholder="  workplace " required>
        </div>
      </div>

      <div class="row">
      
      <div class="col-md-4 form-group mt-3 mt-md-0">
        <textarea class="form-control" id="validationTextarea" placeholder="  write a precise description of the workplace    " required></textarea>    
      </div>
       
      <div class="form-group col-md-4">
           
        <input type="text" class="form-control" placeholder="  phone number 1" required>  
    </div>
         
   
         <div class="form-group col-md-4">
         <input type="text" class="form-control" placeholder=" phone number 2 " required>  
         </div>
              </div>
             

              <h3 for="textAreaRemark">CUSTOMER DATA  </h3>


              <div class="row">

                <div class="col-md-4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="  NAME " required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="email" id="email" placeholder=" EMAIL " required>
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="job" id="job" placeholder=" JOB TITLE " required>
                  </div>

              </div>

              <div class="row">

              <div class="col-md-4 form-group">
                <lable>   CATEGORY</lable> 
                <select class="form-control mr-1" name="side" id="side" onchange="select_side();" required>
                <option value="" disabled selected> -- Choose  -- </option>
                <option value="company"> company </option>
                <option value=""> personal </option>
                </select>  
                <input id="sidehide" type="text" class="form-control" placeholder="  company name (manual entry) " style="display: none;" />
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <lable>   HAVE YOU EVER WORK WITH US </lable> 
                <select class="form-control mr-1" name="wwus" id="wwus" onchange="select_wwus();" required>
                <option value="" disabled selected> --  Choose -- </option>
                <option value="yes"> Yes </option>
                <option value="2"> No </option>
                </select>

               <input id="wwushide" type="text" class="form-control" placeholder=" workplace(manual entry)	" style="display: none;" />
               <!-- required style="display:none" -->
               
              

              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <div class="form-group">
              <label for="exampleFormControlSelect2">  HOW TO RECOGNIZE US?</label>
              <select multiple class="form-control" id="exampleFormControlSelect2">
                <option> facebook	 </option>
                <option> twitter </option>
                <option> instagram </option>
                <option>   friend </option>
                <option>   company  </option>
                <option>  other  </option>
              </select>
              </div>
             </div>

              </div>

              
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">  Send </button></div>
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