<!DOCTYPE html>
<html dir="ltr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Migration Request </title>
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
    var type = document.getElementById("machine").value;
      if(type == "hand"){
      document.getElementById("machinehide").style.display = "block";
      }else{
      document.getElementById("machinehide").value = "";
      document.getElementById("machinehide").style.display = "none";
      }
   }

   // deal with machine brand
   function select_brand(){
    var type = document.getElementById("model").value;
      if(type == "hand"){
      document.getElementById("modelhide").style.display = "block";
      }else{
      document.getElementById("modelhide").value = "";
      document.getElementById("modelhide").style.display = "none";
      }
   }

   // deal with machine weight
   function select_weight(){
   	 var type = document.getElementById("wieght").value;
      if(type == "hand"){
      document.getElementById("wieghthide").style.display = "block";
      }else{
      document.getElementById("wieghthide").value = "";
      document.getElementById("wieghthide").style.display = "none";
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
     var type = document.getElementById("work_for").value;
      if(type == "company"){
      document.getElementById("work_forhide").style.display = "block";
      }else{
      document.getElementById("work_forhide").value = "";
      document.getElementById("work_forhide").style.display = "none";
      }
   }

   // deal with work with us 
   function select_wwus(){
     var type = document.getElementById("previous").value;
      if(type == "yes"){
      document.getElementById("previoushide").style.display = "block";
      }else{
      document.getElementById("previoushide").value = "";
      document.getElementById("previoushide").style.display = "none";
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
        <div style="margin-bottom:5px;" class="section-title">
          <h2 style="width: 300px;"> Migration Request </h2>
         </div>
      </div>

  

      <div class="container">
        <div class="row mt-5">

   

          <div class="col-lg-12 mt-5 mt-lg-0">

            <form action="deportation_request.php" method="post" role="form">

                <div class="my-3">
                <div class="loading"></div>
                <div class="error-message"></div>
                <div class="sent-message">
                  <?php
                      // sending form :
                      if(isset($_POST['send_form'])){

                    $machine=$_POST['machine']; 
                     if($machine == "hand")
                        @$machine=$_POST['machinehide']; 
                     
                     
                     $model = $_POST['model'];
                     if($model == "hand")
                        $machine=$_POST['modelhide']; 
                     
                
               
               
                $comprossor = $_POST['comprossor'];
                $generator = $_POST['generator'];
                $welding_machine = $_POST['welding_machine'];
                $excavator = $_POST['excavator'];

                $lowbed = $_POST['lowbed'];
                $trailer = $_POST['trailer'];
                $truck = $_POST['truck'];
              



                     //location detailes
                     $state     = $_POST['state'];
                     $zone      = $_POST['zone'];
                     $workplace = $_POST['workplace'];
                     $description=$_POST['description'];
                     $location=$_POST['location'];

                     
                     $wieght = $_POST['wieght'];
                     if($wieght == "hand")
                      $wieght = $_POST['wieghthide'];
                    
                     $phone      = $_POST['phone'];
                     $mobile     = $_POST['mobile'];

                     $des_state     = $_POST['des_state'];
                     $des_zone      = $_POST['des_zone'];
                     $des_workplace = $_POST['des_workplace'];
                     $des_description=$_POST['des_description'];
                     $des_phone     = $_POST['des_phone'];
                     $des_mobile     = $_POST['des_mobile'];

                     // customers detailes 
                     $name    = $_POST['name'];
                     $email   = $_POST['email'];
                     $job     = $_POST['job'];
                     $work_for= $_POST['work_for'];
                     if($work_for == "company"){
                        $work_forhide= $_POST['work_forhide'];
                 
                     }
                     
                     $previous= $_POST['previous'];
                    //  if($previous == "yes")
                    //     $previous= $_POST['previoushide'];
                     
                     $know     = $_POST['know'];


                     // echo "Data:".$machine.$size.$model.$wieght.$state.$zone.$workplace.$description.$phone.$mobile.$name.$email.$job.$work_for.$previous;



$jayParsedAry = [
    "params" => [
          "args" => [
             "vals_list" => [
                "machine" => $machine, 
                "comprossor" =>  $comprossor, 
                "generator" =>  $generator, 
                "welding_machine" =>  $welding_machine, 
                "excavator" =>  $excavator, 
                "model" => $model, 
                "wieght" => $wieght, 
                "license" => "", 
                "certificate" => "", 
                "authorization" => "", 
                "other" => "", 
                "lowbed" => $lowbed, 
                "trailer" => $trailer, 
                "truck" => $truck, 
                "state" => $state, 
                "zone" => $zone, 
                "workplace" => $workplace, 
                "company_name" => $work_forhide, 
                "location" => $location, 
                "description" => $description, 
                "phone" => $phone, 
                "mobile" => $mobile, 
                "des_state" => $des_state, 
                "des_zone" => $des_zone, 
                "des_workplace" => $des_workplace, 
                "des_company_name" => "Company B", 
                "des_location" => "9876 Branch Street", 
                "des_description" => $des_description, 
                "des_phone" => $des_phone, 
                "des_mobile" => $des_mobile, 
                "name" => $name, 
                "email" => $email, 
                "job" => $job, 
                "work_for" => $work_for, 
                "previous" => $previous, 
                "know" =>  $know, 
                "status" => "draft" 
             ] 
          ] 
       ] 
 ]; 



$done=json_encode($jayParsedAry);
//echo $done;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://equipation-equipation-odoo-com-stage-10590858.dev.odoo.com/apiV2/migration.request/create',
  CURLOPT_SSL_VERIFYHOST => 0 ,
  CURLOPT_SSL_VERIFYPEER => 0 ,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$done,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'X-Openerp-Session-Id: {{session_id}}',
    'Cookie: session_id=a1fd8b1c0a71abde4e289ac7f5212eee0e8cc5e7'
  ),
));

 $response = curl_exec($curl);



if(curl_errno($curl)) {
  echo 'Error: ' . curl_error($curl);
} else {

  echo $response;
      // convert response to array
    $array = json_decode(  $response , true );
    // loop the array to fetch item
    foreach ($array as $key => $value) {
        if($key == "msg" )
          if($value == "Success")
                // success add form alert ...
                echo "<div class='alert alert-success'>
                <span class='icon'> <i class='fa fa-check-circle'></i></span>
                 <b> The request has been sent successfully , we at Equipation company are always happy to receive your requests at all times , Equipation company employee will respond to you as soon as possible via the phone number or email sent in the request , Thank you for your Understanding  </b> </div>";
            else
              echo "<div class='alert alert-danger'>
                        <span class='icon'> <i class='fa fa-cancel'></i></span>
                         <b> خطأ في عملية الارسال </b> </div>";
    }

  // echo gettype($x);
  // echo "R".$x;
}
curl_close($curl);



                    
                      }

                  ?>
                </div>
              </div>

                <h3 for="textAreaRemark"> Migration Liabilities:</h3>

              <div class="row">

                <div class="col-md-4 form-group">
                Type Of Machine: <br/>
                  <select class="form-control mr-1" name="machine" id="machine" onchange="select_type();">
                    <option value="" disabled selected> -- Choose   -- </option>
                    <option> Excavator </option>
                    <option> Dozer </option>
                    <option> Generator </option>
                    <option value="hand"> Manual Entry </option>
                  </select>
                  <input id="machinehide" name="machinehide" type="text" class="form-control" placeholder="  Manual Entry " style="display:none">
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                SIZE OF MACHINE <br/>
                <input type="number" step="0.01" id="comprossor" name="comprossor" class="form-control" placeholder="Entry comprossor  size ">
                </div>
                
                <div class="col-md-4 form-group mt-3 mt-md-0">
                <label></label>
                <input type="number" step="0.01" id="generator" name="generator" class="form-control" placeholder="Entry generator size ">
                </div>

              </div>

              <div class="row">

              <div class="col-md-4 form-group mt-3 mt-md-0">
                <label></label>
                <input type="number" step="0.01" id="welding_machine" name="welding_machine" class="form-control" placeholder="Entry welding_machine size ">
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
                <label></label>
                <input type="number" step="0.01" id="excavator" name="excavator" class="form-control" placeholder="Entry excavator size ">
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
                MODEL OF MACHINE <br/>
                 <select class="form-control mr-1" name="model" id="model" onchange="select_brand();">
                    <option disabled selected> --   Choose  -- </option>
                    <option > GAT </option>
                    <option> JCB </option>
                    <option> ATLAS CAPS </option>
                    <option value="hand"> manual entry </option>
                  </select>    
                  <input id="modelhide" name="modelhide" type="text" class="form-control" placeholder="    manual entry " style="display:none">
              
                </div>

                </div>

          
               </div>
     <!-- Start Input Start Time -->
     <div class="row">

     <div class="col-md-4 form-group">
        <label>  WIEGHT OF MACHINE(TON) </label>
       
          <select class="form-control mr-1" name="wieght" id="wieght" onchange="select_weight();">
          <option value="" disabled selected> --  Choose -- </option>  
            <option value="10">10</option>
            <option value="12">20</option>
            <option value="15">30</option>
            <option value="hand"> manual entry</option>
          </select>
          <input id="wieghthide" name="wieghthide" type="text" class="form-control" placeholder="   manual entry " style="display: none;" />
      </div>



      <div class="form-group col-md-4">
        <label>  TYPE OF MACHINE TO MOB/DIMOB </label>
        <input id="lowbed" name="lowbed" type="number" step="0.01" class="form-control" placeholder="Enter lowbed Size"/>
      </div>

    <div class="form-group col-md-4">
     <label></label>
     <input id="truck" name="truck" type="number" step="0.01" class="form-control" placeholder="Enter truck Size"/>
   </div>

   <div class="form-group col-md-4">
     <label>   trailer </label>
          <select class="form-control mr-1" name="trailer" id="trailer" >
            <option value="zs" disabled selected> --  Choose -- </option>
            <option value="zs">  zs </option>
            <option value="zy">  zy </option>
          
          </select>
       
    </div>
    
      </div>

      </div>


      <h3 for="textAreaRemark"> DATA OF FIELD</h3>


      <div class="row">
        <div class="col-md-4 form-group">
        LOCATION MACHINE <br/>
          <input type="text" class="form-control" id="state" name="state" placeholder=" state ">
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <br/>
          <input type="text" class="form-control" id="zone" name="zone"  placeholder=" zone ">
        </div>

        <div class="form-group col-md-4">
          <br/>
          <input type="text" class="form-control" id="workplace" name="workplace" placeholder="  workplace ">
        </div>
      </div>

      <div class="row">
      
      <div class="col-md-4 form-group mt-3 mt-md-0">
        <textarea class="form-control" id="validationTextarea" name="description" placeholder="  write a precise description of the workplace    "></textarea>    
      </div>
      <div class="col-md-4 form-group mt-3 mt-md-0">
      <input type="text" class="form-control" id="location" name="location" placeholder="  location ">

      </div>
       
      <div class="form-group col-md-4">
           
        <input type="number" class="form-control" id="phone" name="phone" placeholder="  phone number 1">  
    </div>
         
   
         <div class="form-group col-md-4">
         <input type="number" class="form-control" id="mobile" name="mobile" placeholder=" phone number 2 ">  
         </div>
    </div>

          <div class="row">
        <div class="col-md-4 form-group">
        DESTINATION  <br/>
          <input type="text" class="form-control" id="des_state" name="des_state" placeholder=" state ">
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <br/>
          <input type="text" class="form-control" id="des_zone" name="des_zone"  placeholder=" zone ">
        </div>

        <div class="form-group col-md-4">
          <br/>
          <input type="text" class="form-control" id="des_workplace" name="des_workplace" placeholder="  workplace ">
        </div>
      </div>

      <div class="row">
      
      <div class="col-md-4 form-group mt-3 mt-md-0">
        <textarea class="form-control" id="validationTextarea" name="des_description" placeholder="  write a precise description of the workplace    "></textarea>    
      </div>
       
      <div class="form-group col-md-4">
           
        <input type="number" class="form-control" id="des_phone" name="des_phone" placeholder="  phone number 1">  
    </div>
         
   
         <div class="form-group col-md-4">
         <input type="number" class="form-control" id="des_mobile" name="des_mobile" placeholder=" phone number 2 ">  
         </div>
    </div>

             
              <!-- **********************Customer Data***************************** -->
              <h3 for="textAreaRemark">CUSTOMER DATA  </h3>
              <div class="row">

                <div class="col-md-4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="  NAME ">
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="email" id="email" placeholder=" EMAIL ">
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="job" id="job" placeholder=" JOB TITLE ">
                  </div>

              </div>

              <div class="row">

              <div class="col-md-4 form-group">
                <lable>   CATEGORY</lable> 
                <select class="form-control mr-1" name="work_for" id="work_for" onchange="select_side();">
                <option value="" disabled selected> -- Choose  -- </option>
                <option value="company"> company </option>
                <option value="individual"> personal </option>
                </select>  
                <input id="work_forhide" name="work_forhide" type="text" class="form-control" placeholder="  company name (manual entry) " style="display: none;" />
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <lable>   HAVE YOU EVER WORK WITH US </lable> 
                <select class="form-control mr-1" name="previous" id="previous" onchange="select_wwus();">
                <option value="" disabled selected> --  Choose -- </option>
                <option value="yes"> Yes </option>
                <option value="no"> No </option>
                </select>

               <input id="previoushide" name="previoushide" type="text" class="form-control" placeholder=" workplace(manual entry)	" style="display: none;" />
    
              
              </div>
              <div class="col-md-4 form-group mt-3 mt-md-0">
              <div class="form-group">
              <label for="exampleFormControlSelect2">  HOW TO RECOGNIZE US?</label>
              <select multiple class="form-control" id="know" name="know">
                <option value="media"> facebook	 </option>
                <option value="google"> google </option>
                <option value="media"> instagram </option>
                <option value="friend">   friend </option>
                <option value="advertisemen">   Advertisemen  </option>
                <option value="other">  other  </option>
              </select>
              </div>
             </div>
             <!-- *****************************End the Section************************ -->

              </div>
              <div class="text-center"><button type="submit" name="send_form">  Send </button></div>
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