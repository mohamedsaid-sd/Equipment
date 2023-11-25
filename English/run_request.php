<!DOCTYPE html>
<html dir="ltr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Operation Request   </title>
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
<script type="text/javascript">
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
    <section class="contact">
      <div class="container">
      <br/>
        <div class="section-title">
          <h2> Operation request </h2>
         </div>
      </div>

  

      <div class="container">

       <form action="run_request.php" method="post" role="form">

        <div class="row mt-5">

          <h3> OWNER DETAILS  </h3>

          <div class="col-md-4 form-group  mt-3 mt-md-0">
              <input type="text" name="name" class="form-control" placeholder="Full name"required>
          </div>

           <div class="col-md-4 form-group  mt-3 mt-md-0">
              <input type="text" name="name" class="form-control" placeholder=" Nationality " required>
          </div>

           <div class="col-md-4 form-group  mt-3 mt-md-0">
              <input type="number" name="name" class="form-control" placeholder=" ID number "> <font color="red"> * Optionaly </font> 
          </div>

        </div>

        <div class="row">

          <div class="col-md-4 form-group">
              <input type="number" name="name" class="form-control" placeholder=" phone number  " required>
          </div>

          <div class="col-md-4 form-group  mt-3 mt-md-0">
              <input type="text" name="name" class="form-control" placeholder=" phone number 2 "> <font color="red"> * Optionaly </font> 
          </div>

          <div class="col-md-4 form-group">
              <input type="number" name="name" class="form-control" placeholder=" whatsapp number  " required>
          </div>
          
        </div>

        <div class="row">

        <div class="col-md-4 form-group">
            <input type="email" name="name" class="form-control" placeholder=" Email " required>
        </div>

        <div class="col-md-4 form-group">
            <input type="number" name="name" class="form-control" placeholder=" TAX file  ">  <font color="red"> * Optionaly </font> 
        </div>

         <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" placeholder=" Address " required>
        </div>
          
        </div>

        <div class="row">

         <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" placeholder=" Recommendation  " required>
        </div>

        <div class="col-md-4 form-group">
             <input type="text" name="name" class="form-control" placeholder=" code number " required disabled>
        </div>

       <div class="col-md-4 form-group">
             <input type="text" name="name" class="form-control" placeholder=" TITLE  " required>
        </div>  
          
        </div>

        <div class="row mt-5">

          <h3> MACHINES INFORMATION  </h3>

          <div class="form-group col-md-4">
           <label> Group  </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option> Compressor </option>
               <option> generator and tower light  </option>
               <option> welding machine  </option>
               <option> carnes  </option>
               <option> Heavy trucks  </option>
               <option> Excavation equipment  </option>
               <option> Pipe line equipment  </option>
               <option> Civil equipment   </option>
               <option> Mining equipment  </option>
               <option> agricultural equipment  </option>
               <option> facility </option>
               <option> Light vihicles and trucks   </option>
               <option> Entry new category </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="" placeholder="Entry new category">

           
         </div>

         <div class="form-group col-md-4">
           <label> TYPE MACHINE </label>
             <select class="form-control mr-1" id="ready" name="ready" required>
              <option value="" disabled selected> -- Choose -- </option>
              <option> air compressor  </option>
              <option> generator and tower light </option>
              <option> welding machine  </option>
              <option> excavation equipment   </option>
             </select>

            <select class="form-control mr-1" id="ready" name="ready" required>
              <option value="" disabled selected> -- Choose -- </option>
              <option> excavtor </option>
              <option> dozer </option>
              <option> grader </option>
            </select>

            <select class="form-control mr-1" id="ready" name="ready" required>
              <option value="" disabled selected> -- Choose -- </option>
              <option> fixed </option>
              <option> mobile </option>
            </select>

            <select class="form-control mr-1" id="ready" name="ready" required>
              <option value="" disabled selected> -- Choose -- </option>
              <option> fuel </option>
              <option> electrical </option>
            </select>

            <select class="form-control mr-1" id="ready" name="ready" required>
              <option value="" disabled selected> -- Choose -- </option>
              <option> soundproof </option>
              <option> open  </option>
            </select>   

            <select class="form-control mr-1" id="ready" name="ready" required>
              <option value="" disabled selected> -- Choose -- </option>
              <option> crawler  </option>
              <option> wheel </option>
            </select>   
        </div>

          <div class="form-group col-md-4">
           <label> BRAND  </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option> cat </option>
               <option> JCB </option>
               <option> Atlas Capco </option>
               <option> HYUNDAI </option>
               <option> DOOSAN </option>
               <option> Entry new brand </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="" placeholder=" Entry new brand ">
         </div>

          <div class="form-group col-md-4">
           <label> SIZE </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option> 250 CFM ( Compressor ) </option>
               <option> 2000 KVA ( gen ) </option>
               <option> 220 ( excavator ) </option>
               <option> D9R ( dozer ) </option>
               <option> 160أ ( grader ) </option>
               <option> Entry new size </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="" placeholder="   Entry new size ">
         </div>

            <div class="form-group col-md-4">
           <label>  MODEL </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- choose -- </option>
               <option> HX225 </option>
               <option> SD25 </option>
               <option> entry new model </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="" placeholder=" Entry machine model ">
         </div>

         <div class="form-group col-md-4">
           <label> YEAR OF MANUFACTURE   </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option> 2022 </option>
               <option> 2023 </option>
               <option> manualy entry </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="" placeholder=" Entry manufacture year ">
         </div>

      </div>

      <div class="row">

          <div class="form-group col-md-4">
           <label> MONTHLY RENTAL </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option> SGD </option>
               <option> USD </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="" placeholder="  entry rental amount ">
         </div>

          <div class="form-group col-md-4">
           <label>  CONDITION </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option> new (not more than 500 hours or 1500 km) </option>
               <option> almost new (between 501 hours and 1000 hrs ) </option>
               <option> medium (between 1001 hrs and 2500 hrs) </option>
               <option> consumable (over 2501 hrs) </option>
               <option> entry manual condition </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="" placeholder=" entry manual condition ">
         </div>
        
      </div>





      <div class="row">

        <h3> CONTRACT TERMS  :  </h3>

        <div class="form-group col-md-4">
          <label> STATE </label>
          <select class="form-control">
            <option value="" disabled selected> -- Choose -- </option>
            <option> none </option>
            <option> inside sudan </option>
            <option> all state of sudan except ... </option>
            <option> specific state ... </option>
            <option> add new place </option>
          </select>
        <input type="text" class="form-control" placeholder=" Specified the state ">
        </div>

        <div class="form-group col-md-4">
          <label> ADVANCE </label>
          <select class="form-control">
            <option value="" disabled selected> -- Choose -- </option>
            <option> none </option>
            <option> required (XX% of contract value ) </option>
            <option> full rent required  </option>
            <option> guarantee </option>
            <option> entry new condition </option>
          </select>
        <input type="text" class="form-control" placeholder=" entry new condition ">
        </div>

        <div class="form-group col-md-4">
          <label> CATEGORY  </label>
          <select class="form-control">
            <option value="" disabled selected> -- حدد -- </option>
            <option> none </option>
            <option> companies only </option>
            <option> contractiong only </option>
            <option> manual entry </option>
          </select>
        <input type="text" class="form-control" placeholder="  manual entry ">
        </div>
        
      </div>

      <div class="row">
        <div class="form-group col-md-4">
          <label> CONTRACTS  </label>
          <select class="form-control">
            <option value="" disabled selected> -- Choose -- </option>
            <option> none </option>
            <option> long (not less than 12 month) </option>
            <option> medium (not less than 3 month) </option>
            <option> short (no more than a month) </option>
            <option> manual entry </option>
          </select>
        <input type="text" class="form-control" placeholder="manual entry contract ">
        </div>

        <div class="form-group col-md-4">
          <label> CLEARENCES  </label>
          <select class="form-control">
            <option value="" disabled selected> -- Choose -- </option>
            <option> USD </option>
            <option> SDG </option>
            <option> manual entry </option>
          </select>
        <input type="text" class="form-control" placeholder=" maanual entry clearences ">
        </div>

        <div class="form-group col-md-4">
          <label> MAINTENANCE  </label>
            <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option> by me </option>
               <option> by equipation with ful detucted </option>
               <option> by equipation with XX% detucted </option>
               <option> by equipation </option>
               <option> manual entry </option>
             </select>
        <input type="text" class="form-control" placeholder=" manual entry ">
        </div>

     </div>

      <div class="row">

         <div class="form-group col-md-4">
          <label>  HAIR OPRATOR  </label>
            <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option> by equipation </option>
               <option> set by me </option>
               <option> manual entry </option>
             </select>
        <input type="text" class="form-control" placeholder=" manual entry  ">
        </div>

         <div class="form-group col-md-4">
           <label> AVAILABLITY  </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option> on request </option>
               <option> after request before xx day </option>
               <option> manual entry </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="" placeholder=" manual entry ">
         </div>  

         <div class="form-group col-md-4">
           <label> GOVERNMENT FEES </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option> by me </option>
               <option> by equipation with full detucted </option>
               <option> by equipation with XX% detucted </option>
               <option> by equipation </option>
               <option> manual entry </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="" placeholder=" manualy entry ">
         </div>        

          <div class="form-group col-md-4">
           <label> HOURLY WORK  </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option> none </option>
               <option> not execeed xx hrs per day </option>
               <option> manual entry </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="" placeholder="  manual entry ">
         </div>


      </div>



      
              
              <div class="my-3">
                
                <div class="error-message"></div>
                <div class="sent-message">

                  <?php

                  if(isset($_POST['send'])){
                        // نوع العمل 
                        $work_type = $_POST['work_type'];
                        // مدة العمل
                        $period    = $_POST['period'];
                        if($period == "hand"){
                          $period = $_POST['periodhide'];
                        }
                        // رقم الشاسي
                        $chassis = $_POST['chassis'];
                        // ساعات العمل 
                        $hour    = $_POST['hour'];
                        // ملكية الآلية
                        $owners  = $_POST['owners'];
                        // نوع التشغيل
                        $Operatingtype = $_POST['Operatingtype'];
                        //  موقع الآلية
                        $location    = $_POST['location'];
                        // عداد الآلية
                        $counter     = $_POST['counter'];
                        // سنه التصنيع
                        $mdate       = $_POST['mdate'];
                        // اخر موقع
                        $lastloc     = $_POST['lastloc'];
                        // جاهزية  الموقع
                        $ready       = $_POST['ready'];
                        // مجالات العمل
                        $workfields   = $_POST['workfields'];
                        // اسم العميل
                        $name        = $_POST['name'];
                        // البريد الالكتروني 
                        $email       = $_POST['email'];
                        // الوظيفة 
                        $job         = $_POST['job'];
                        // الجهه
                        $side        = $_POST['side'];
                        // العمل معنا 
                        $wwus        = $_POST['wwus'];

                        echo "<div class='alert alert-success'>";
                        echo $work_type ."-". $period ."-". $chassis ."-". $hour ."-". $owners ."-". $Operatingtype ."-". $location ."-". $counter ."-". $mdate  ."-". $lastloc ."-". $ready ."-". $workfields ."-". $name ."-". $email ."-". $job ."-". $side ."-". $wwus;
                        echo "</div>";
                  }
                   ?>

                </div>
              </div>
              <div class="text-center"><button type="submit" name="send" style="background-color:orange;border-radius:20px;padding:10px;"> Send Request </button></div>
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