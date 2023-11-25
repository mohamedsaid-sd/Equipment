<!DOCTYPE html>
<html dir="ltr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> طلب تاجير  </title>
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
  // ready to go with js function 

   // deal with period  
   function select_period(){
     var type = document.getElementById("period").value;
      if(type == "hand"){
      document.getElementById("periodhide").style.display = "block";
      }else{
      document.getElementById("periodhide").value = "";
      document.getElementById("periodhide").style.display = "none";
      }
   }

   //deal with hour
   function select_hour(){
     var type = document.getElementById("hour").value;
      if(type == "hour"){
      document.getElementById("hourhide").style.display = "block";
      }else{
      document.getElementById("hourhide").value = "";
      document.getElementById("hourhide").style.display = "none";
      }
   }

  //deal with hour of day
   function select_hourday(){
     var type = document.getElementById("hourday").value;
      if(type == "hand"){
      document.getElementById("hourdayhide").style.display = "block";
      }else{
      document.getElementById("hourdayhide").value = "";
      document.getElementById("hourdayhide").style.display = "none";
      }
   }


    // deal with filed
    function select_field(){
     var type = document.getElementById("field").value;
      if(type == "hand"){
      document.getElementById("fieldhide").style.display = "block";
      }else{
      document.getElementById("fieldhide").value = "";
      document.getElementById("fieldhide").style.display = "none";
      }
   }


    // deal with old
    function select_old(){
     var type = document.getElementById("old").value;
      if(type == "old"){
      document.getElementById("oldhide").style.display = "block";
      }else{
      document.getElementById("oldhide").value = "";
      document.getElementById("oldhide").style.display = "none";
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
        <div class="section-title">
          <h2>  Data of Rental Request  </h2>
         </div>
      </div>

  

      <div class="container">
        <div class="row mt-5">

   

          <div class="col-lg-12 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">

                <h3 for="textAreaRemark">Data of Rental Request </h3>

            <div class="row">
               
                <div class="col-md-4 form-group">
                WORK TYPE <br/>
                  <select class="form-control mr-1" name="type" id="type" required>
                    <option disabled selected> --  Choose the type  -- </option>
                    <option> bucket </option>
                    <option>  jackhummer </option>
                    <option>bucket + jackhummer+   </option>
                  </select>
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                DURATION <br/>
                  <select class="form-control mr-1" name="period" id="period" onchange="select_period();" required>
                    <option disabled selected> --  Choose the duration  -- </option>
                    <option> month </option>
                    <option> 3 month  </option>
                    <option> year </option>
                    <option value="hand">  Manual entry </option>
                  </select>

                  <input id="periodhide" type="text" class="form-control" placeholder="    Manual entry " style="display: none;">

                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                WORK HOURS <br/>
                  <select class="form-control mr-1" name="hour" id="hour" onchange="select_hour();" required>
                    <option disabled selected> --   Choose the duration  -- </option>
                    <option>  monthly rent </option>
                    <option value="hour"> num hours  </option>
                  </select>

                  <input id="hourhide" type="text" class="form-control" placeholder="  manual entry hour   " style="display: none;">
                </div>

              </div>
     <!-- Start Input Start Time -->
     <div class="row">

     <div class="form-group col-md-4">
        <label>DAILY WORK HOURS   </label>

          <select class="form-control mr-1" id="hourday" name="hourday" onchange="select_hourday();" required>
            <option value="" disabled selected> -- Choose  -- </option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="20">20</option>
            <option value="hand"> manual entry  </option>
          </select>

          <input id="hourdayhide" type="text" class="form-control" placeholder="  manual entry Hour   " required style="display: none;">
        

      </div>

      <div class="form-group col-md-4">
        <label>    EXPECTED WORK START </label>
         <input type="date" class="form-control" id="inputDate" name="date" required />
         
      </div>
      </div>

    <h3 for="textAreaRemark"> SITE DESCRIPTION:</h3>


      <div class="row">
        <div class="col-md-4 form-group">
        WORK LOCATION <br/>
          <input type="text" name="Type" class="form-control" id="location" placeholder="   state " required>
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <br/>
          <input type="text" class="form-control" name="year" id="Counter" placeholder="   region " required>
        </div>

        <div class="form-group col-md-4">
          <br/>
       <input type="text" class="form-control" name="year" id="Counter" placeholder=" distance from nearest market " required>
          </div>
      </div>

      <div class="row">
       
        <div class="col-md-4 form-group mt-3 mt-md-0">
        WORK FIELD <br/>
                  <select class="form-control mr-1" name="field" id="field" onchange="select_field();" required>
                    <option disabled selected> -- Choose   -- </option>
                    <option> mining </option>
                    <option>  cement </option>
                    <option>  agricultural </option>
                    <option value="hand">   manual entry </option>
                  </select>

                  <input id="fieldhide" type="text" class="form-control" placeholder="   manual entry " style="display: none;">
          </div>

         <div class="form-group col-md-4">
           <label>   SITE AGE </label>
             <select class="form-control mr-1" id="old" name="old" onchange="select_old();" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="new"> new </option>
               <option value="old"> old </option>
             </select>
             <span id="oldhide" style="display: none;">
             work starting date (manual entry/calendar) :  <br/>
             <input type="date" class="form-control" placeholder="   work starting date (manual entry/calendar) " >
            </span>      
         </div>
              </div>


          <div class="row">

          <label> <b>JOB SITE READINESS  : </b> </label>
          
          <div class="form-group col-md-4">
           <label> living </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="1"> excellent </option>
               <option value="2"> good </option>
               <option value="3"> normal </option>
             </select>
           </div>
         </div>


          <div class="form-group col-md-4">
           <label> subsistence </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="1"> excellent </option>
               <option value="2"> good </option>
               <option value="3"> normal </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> internet </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="1"> available </option>
               <option value="2"> not available </option>
             </select>
           </div>
         </div>
            
          </div>

       <div class="row">
            
        <div class="form-group col-md-4">
           <label>  communication </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> --  Choose  -- </option>
               <option value="1"> available </option>
               <option value="2">  not available </option>
             </select>
           </div>
         </div>

         <div class="form-group col-md-4">
           <label>  workshop </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="1"> available </option>
               <option value="2">   not available </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> compressor </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="1"> available </option>
               <option value="2"> not available  </option>
             </select>
           </div>
         </div>

          </div>

          <div class="row">

          <div class="form-group col-md-4">
           <label> fuel </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="1"> available </option>
               <option value="2"> not available </option>
             </select>
           </div>
         </div>
            

           <div class="form-group col-md-4">
           <label> water </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> --   Choose   -- </option>
               <option value="1"> available </option>
               <option value="2"> not available   </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> electricity </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="1"> available </option>
               <option value="2">  not available  </option>
             </select>
           </div>
         </div>
          </div>


             

                <h3 for="textAreaRemark">CUSTOMER DATA:  </h3>


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
                <lable>   CATEGORY </lable> 
                <select class="form-control mr-1" name="side" id="side" onchange="select_side();" required>
                <option value="" disabled selected> --  Choose -- </option>
                <option value="company"> company </option>
                <option value=""> personal </option>
                </select>  
                <input id="sidehide" type="text" class="form-control" placeholder="    company name " style="display: none;" />
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <lable>     HAVE YOU EVER WORK WITH US </lable> 
                <select class="form-control mr-1" name="wwus" id="wwus" onchange="select_wwus();" required>
                <option value="" disabled selected> --  Choose -- </option>
                <option value="yes"> YES </option>
                <option value="2"> NO </option>
                </select>

               <input id="wwushide" type="text" class="form-control" placeholder=" workplace  " style="display: none;" />
               <!-- required style="display:none" -->
               
              

              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <div class="form-group">
              <label for="exampleFormControlSelect2">  HOW TO RECOGNIZE US</label>
              <select multiple class="form-control" id="exampleFormControlSelect2">
                <option> facebook </option>
                <option> twitter </option>
                <option> instagram </option>
                <option> friend</option>
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