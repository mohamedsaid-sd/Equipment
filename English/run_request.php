<!DOCTYPE html>
<html dir="ltr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Operation Request  </title>
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
   function select_brand(){
     var type = document.getElementById("brand_id").value;
      if(type == "hand"){
      document.getElementById("brand_idhide").style.display = "block";
      }else{
      document.getElementById("brand_idhide").value = "";
      document.getElementById("brand_idhide").style.display = "none";
      }
   }

    function select_size(){
     var type = document.getElementById("size_id").value;
      if(type == "hand"){
      document.getElementById("size_idhide").style.display = "block";
      }else{
      document.getElementById("size_idhide").value = "";
      document.getElementById("size_idhide").style.display = "none";
      }
   }

   function select_model(){
     var type = document.getElementById("model_id").value;
      if(type == "hand"){
      document.getElementById("model_idhide").style.display = "block";
      }else{
      document.getElementById("model_idhide").value = "";
      document.getElementById("model_idhide").style.display = "none";
      }
   }

  function select_year(){
     var type = document.getElementById("year_of_manufacture_id").value;
      if(type == "hand"){
      document.getElementById("year_of_manufacture_idhide").style.display = "block";
      }else{
      document.getElementById("year_of_manufacture_idhide").value = "";
      document.getElementById("year_of_manufacture_idhide").style.display = "none";
      }
   }

   function select_condition(){
     var type = document.getElementById("condition_id").value;
      if(type == "hand"){
      document.getElementById("condition_idhide").style.display = "block";
      }else{
      document.getElementById("condition_idhide").value = "";
      document.getElementById("condition_idhide").style.display = "none";
      }
   }

  function select_state(){
     var type = document.getElementById("state_id").value;
      if(type == "hand"){
      document.getElementById("state_idhide").style.display = "block";
      }else{
      document.getElementById("state_idhide").value = "";
      document.getElementById("state_idhide").style.display = "none";
      }
   }

   function select_advance(){
     var type = document.getElementById("advance_id").value;
      if(type == "hand"){
      document.getElementById("advance_idhide").style.display = "block";
      }else{
      document.getElementById("advance_idhide").value = "";
      document.getElementById("advance_idhide").style.display = "none";
      }
   }

   function select_catogry(){
     var type = document.getElementById("category_id").value;
      if(type == "hand"){
      document.getElementById("category_idhide").style.display = "block";
      }else{
      document.getElementById("category_idhide").value = "";
      document.getElementById("category_idhide").style.display = "none";
      }
   }

   function select_hourly_work(){
    var variable = document.getElementById("hourly_work_id").value;
    if(variable == "hand" || variable == "handx"){
      document.getElementById("hourly_work_idhide").style.display = "block";
    }else{
      document.getElementById("hourly_work_idhide").value = "";
      document.getElementById("hourly_work_idhide").style.display = "none";
    }
   }

   function select_gorvernment_fees(){
    var variable = document.getElementById("gorvernment_fees_id").value;
    if(variable == "hand" || variable == "handx"){
      document.getElementById("gorvernment_fees_idhide").style.display = "block";
    }else{
      document.getElementById("gorvernment_fees_idhide").value = "";
      document.getElementById("gorvernment_fees_idhide").style.display = "none";
    }
   }

   function select_availablity(){
    var variable = document.getElementById("availability_id").value;
    if(variable == "hand" || variable == "handx"){
      document.getElementById("availability_idhide").style.display = "block";
    }else{
      document.getElementById("availability_idhide").value = "";
      document.getElementById("availability_idhide").style.display = "none";
    }
   }

   function select_hair_operator(){
    var variable = document.getElementById("hair_operator_id").value;
    if(variable == "hand"){
      document.getElementById("hair_operator_idhide").style.display = "block";
    }else{
      document.getElementById("hair_operator_idhide").value = "";
      document.getElementById("hair_operator_idhide").style.display = "none";
    }
   }

   function select_maintenance(){
    var variable = document.getElementById("maintenance_id").value;
    if(variable == "hand" || variable == "handx"){
      document.getElementById("maintenance_idhide").style.display = "block";
    }else{
      document.getElementById("maintenance_idhide").value = "";
      document.getElementById("maintenance_idhide").style.display = "none";
    }
   }

   function select_contracts(){
    var variable = document.getElementById("cotracts_id").value;
    if(variable == "hand"){
      document.getElementById("cotracts_idhide").style.display = "block";
    }else{
      document.getElementById("cotracts_idhide").value = "";
      document.getElementById("cotracts_idhide").style.display = "none";
    }
   }

   function select_clearences(){
    document.getElementById("clearances_idhide").style.display = "block";
   }
</script>
<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">

        <a href="../English/index.php" class="linkedin" style="padding: 5px;margin: 5px;">Eng</i></i></a> | 
        <a href="../Arabic/index.php" class="linkedin" style="padding: 5px;margin: 5px;"">Ara</i></i></a>

        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">info@equipation.sd</a>
        <i class="bi bi-phone"></i> +249912322447 


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

             <div class="my-3">
                
                <div class="error-message"></div>
                <div class="sent-message">

                  <?php

                  if(isset($_POST['send'])){
                                            // sending values :
                      $full_name = $_POST['full_name'];
                      $machine_type = $_POST['machine_type'];
                      $phone_number = $_POST['phone_number'];
                      $insurance_type = $_POST['insurance_type'];
                      $description = $_POST['description'];
                      $cotracts_id = $_POST['cotracts_id'];      
                      $whatsapp_num = $_POST['whatsapp_num'];
                      $nearest_road = $_POST['nearest_road'];
                      $network = $_POST['network'];
                      $job = $_POST['job'];        
                      $email = $_POST['email'];
                      $address = $_POST['address'];
                      @$brand_id=$_POST['brand_id']; 
                      @$size_id=$_POST['size_id']; 
                      @$year_of_manufacture_id=$_POST['year_of_manufacture_id'];
                      if(@$year_of_manufacture_id == "hand")
                      $year_of_manufacture_id = $_POST['year_of_manufacture_idhide'];
                      @$state_id=$_POST['state_id']; 
                      if($state_id == "hand")
                      $state_id = $_POST['state_idhide'];
                      @$category_id=$_POST['category_id'];
                      if($category_id == "hand")
                      $category_id = $_POST['category_idhide'];
                     @$hair_operator_id=$_POST['hair_operator_id'];
                     if($hair_operator_id == "hand")
                     $hair_operator_id = $_POST['hair_operator_idhide'];
                     
                        // echo " Data : ".$full_name."-".$nationality."-".$id_number."-".$phone_number."-".$phone_number_2."-".$whatsapp_num."-".$email."-".$tax_file."-".$address."-".$recommendation."-".$code_number."-".$years_in_field."-".$owned_machines."-".$full_authority_agent."-".$limit_authority_agent."-".$date_of_foundation."-".$registration_number."-".$file_tax_number."-".$expatriate_date."-".$compressor."-".$generator_tower_light."-".$welding_machine."-".$cranes."-".$heavy_trucks."-".$excavation_equipment."-".$pipeline_equipment."-".$civil_equipment."-".$mining_equipment."-".$agricultural_equipment."-".$facility."".$light_vehicles_trucks."-".$air_compressor_selection."".$generator_tower_light_selection."-".$welding_machine_selection."-".$excavator_selection ."-".$brand_id."-".$size_id."-".$model_id."-".$year_of_manufacture_id."".$monthly_rental_id."-".$condition_id."-".$state_id."-".$advance_id."-".$category_id."-".$clearances_id."".$maintenance_id."-".$hair_operator_id."-".$availability_id."".$gorvernment_fees_id."-".$hourly_work_id;

                    $jayParsedAry = [
    "params" => [
          "args" => [
             "vals_list" => [
                "full_name" => $full_name, 
                "nationality" => "", 
                "phone_number" => $phone_number, 
                "insurance_type" => $insurance_type, 
                "description" => $description, 
                "whatsapp_num" => $whatsapp_num, 
                "email" => $email, 
                "contracts_id" => $cotracts_id, 
                "address" => $address, 
                "nearest_road" => $nearest_road, 
                "network" => $network, 
                "job" => $job, 
                "owned_machines" => "", 
                "brand_id" => $brand_id, 
                "size_id" => $size_id, 
                "year_of_manufacture_id" => $year_of_manufacture_id, 
                "state_id" => $state_id, 
                "category_id" => $category_id, 
                "machine_type" => $machine_type ,
                "hair_operator_id" => $hair_operator_id
             ] 
          ] 
       ] 
 ]; 

 $done=json_encode($jayParsedAry);
//echo $done;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://equipation-equipation-odoo-com-stage-10590858.dev.odoo.com/apiV2/operating.request/create',
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

   //echo $response;
        // convert response to array
    $array = json_decode(  $response , true );
    // loop the array to fetch item
    foreach ($array as $key => $value) {
       // echo $key."".$value;
        if($key == "msg" )
          if($value == "Success")
                // success add form alert ...
                         echo "<div class='alert alert-success'>
                <span class='icon'> <i class='fa fa-check-circle'></i></span>
                 <b> The request has been sent successfully , we at Equipation company are always happy to receive your requests at all times , Equipation company employee will respond to you as soon as possible via the phone number or email sent in the request , Thank you for your Understanding  </b> </div>";
            else
              echo "<div class='alert alert-danger'>
      <span class='icon'> <i class='fa fa-cancel'></i></span>
       <b> Erorr in sending Request </b> </div>";
    }
  // echo gettype($x);
  // echo "R".$x;
}
curl_close($curl);

                  }
                   ?>

                </div>
              </div>

  

      <div class="container">

       <form action="run_request.php" method="post" role="form">

        <div class="row mt-5">

          <h3>  Equipment Detailes </h3>

          <div class="col-md-4 form-group">
                Equipment type:  <br/>
                
                  <select class="form-control mr-1" name="machine_type" id="machine_type"  required>
                    <option value="" disabled selected> --   Choose  -- </option>
                    <option value="Digger"> Digger </option>
                    <option value="LOBID">  LOBID </option>
                    <option value="Loader">  Loader </option>
                    <option value="Dozer">  Dozer </option>
                    <option value="Forklift">  Forklift </option>
                    <option value="Checkout">  Checkout </option>
                    <option value="Crane">  Crane </option>
                    <option value=" Water Disguise ">   Water Disguise </option>
                    <option value="reader">  reader </option>
                    <option value="  Tanker Jazz">    Tanker Jazz </option>
                    <option value="Flat">  Flat </option>
                    <option value="generator">  generator </option>
                  </select>
                </div>


                <div class="form-group col-md-4">
        <label>     Size machine </label>
         <input type="text" class="form-control" id="inputDate" name="size_id"  required />
         
      </div>

      <div class="form-group col-md-4">
        <label>     Brand machine </label>
         <input type="text" class="form-control" id="inputDate" name="brand_id"  required />
         
      </div>



        </div>

        <div class="row">

       <div class="form-group col-md-4">
        <label>     Year of manufacture </label>
        <input type="text" class="form-control " id="year_of_manufacture_idhide" name="year_of_manufacture_idhide" placeholder="Enter year of manufacture" >
      </div>

        <div class="form-group col-md-4">
            <label>  License </label>
            <select class="form-control" id="" name="">
              <option value="" disabled selected> -- Choose --  </option>
              <option value="valid license">  Valid License </option>
              <option value="expired license">   Expired License  </option>
              <option value="not licensed">   Not Licensed  </option>

            </select>
          </div>

          <div class="form-group col-md-4">
            <label>  Insuarance </label>
            <select class="form-control" id="insurance_type" name="insurance_type">
              <option value="" disabled selected> </option>
              <option value="full insuarance"> Full Insuarance </option>
              <option value="engineering insuarance"> Engineering Insuarance </option>
              <option value="compulsory Insuarance"> Compulsory Insuarance </option>
              <option value="without insuarance"> Without Insuarance </option>


            </select>
          </div>
          
        </div>

        <div class="row">
        
        <div class="col-md-4 form-group  mt-3 mt-md-0"> 
        <label>  Add any accessories with the equipment  </label>
        <input type="text" id="description" name="description" class="form-control" placeholder="
        Add any accessories with the equipment"> <font color="red">  </font> 
        </div> 


        <div class="col-md-4 form-group mt-3 mt-md-0">
              Work field <br/>
                  <select class="form-control mr-1" name="work_field" id="work_field" onchange="select_work_field();"  required>
                    <option disabled selected>  </option>
                    <option disabled selected> -- Choose   -- </option>
                    <option> mining </option>
                    <option>  cement </option>
                    <option>  agricultural </option>
                    <!-- <option value="hand">  ادخال يدوي </option> -->
                  </select>

                  <!-- <input id="work_fieldhide" name="work_fieldhide" type="text" class="form-control" placeholder=" ادخل مجال العمل  يدويا " style="display: none;"> -->
          </div>


          <div class="form-group col-md-4">
          <label> Contracts:  </label>
          <select class="form-control" id="cotracts_id" name="cotracts_id" onchange="select_contracts();">
            <option value="" disabled selected>  </option>
            <option> none </option>
            <option> long (not less than 12 months) </option>
            <option> medium (not less than 3 months)  </option>
            <option> short ( no more than a month)  </option>
            <option value="hand"> manual entry </option>
          </select>
        <input  id="cotracts_idhide" name="cotracts_idhide" type="text" class="form-control" placeholder="Enter the contract" style="display: none;">
        </div>

        </div>

        <div class="row">

                <div class="form-group col-md-3">
          <label> State </label>
          <select class="form-control" id="state_id" name="state_id" onchange="select_state();">
            <option value="" disabled selected>  </option>
            <option> none </option>
            <option> inside sudan </option>
            <option> all state of sudan except ……… </option>
            <option> specific state….. </option>
            <option value="hand"> add new place </option>
          </select>
        <input type="text" id="state_idhide" name="state_idhide" class="form-control" placeholder="حدد الولاية" style="display: none;">
        </div>

        <div class="form-group col-md-4">
          <label> Maintenance </label>
            <select class="form-control mr-1" id="hair_operator_id" name="hair_operator_id" onchange="select_hair_operator();" required>
               <option value="" disabled selected> -- Choose --  </option>
               <option> by equipation </option>
               <option> by me </option>
               <option value="hand"> manual entry </option>
             </select>
        <input id="hair_operator_idhide" name="hair_operator_idhide" type="text" class="form-control" placeholder=" حدد القيد  " style="display: none;">
        </div>


        <div class="form-group col-md-3">
          <label> Category  </label>
          <select class="form-control" id="category_id" name="category_id" onchange="select_catogry();">
            <option value="" disabled selected> -- Choose -- </option>
            <option>  none    </option>
            <option> companies only </option>
            <!-- <option  value="hand"> اضافة قيد جديد </option> -->
          </select>
        <input type="text" id="category_idhide" name="category_idhide" class="form-control" placeholder="Entry the category " style="display: none;">
        </div>

          
        </div>


        <div class="row mt-5">

          <h3>  Site description </h3>

          <div class="form-group col-md-4">

      </div>

      <div class="row">

          <div class="form-group col-md-4">
           <label>  states </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
           <select class="form-control mr-1" id="state_id" name="" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option value="Khartoum"> Khartoum </option>
               <option value=" North Kordofan"> North Kordofan </option>
               <option value="Northern"> Northern </option>
               <option value="Kassala"> Kassala </option>
               <option value="Blue Nile"> Blue Nile </option>
               <option value="North Darfur "> North Darfur  </option>
               <option value="South Darfur "> South Darfur  </option>
               <option value="South Kordofan "> South Kordofan  </option>
               <option value="Gezira"> Gezira </option>
               <option value="White Nile "> White Nile  </option>
               <option value="River Nile "> River Nile  </option>
               <option value="Red Sea"> Red Sea </option>
               <option value="Al Qadarif "> Al Qadarif  </option>
               <option value="Sennar"> Sennar </option>
               <option value="West Darfur "> West Darfur  </option>
               <option value="Central Darfur "> Central Darfur  </option>
               <option value="East Darfur "> East Darfur  </option>
               <option value="West Kordofan"> West Kordofan </option>
             </select>
             </div>
             
          
         </div>

         <div class="col-md-4 form- mt-3 mt-md-0">
              <br/>
            <input type="text" class="form-control" name="address" id="address" placeholder="  Enter the nearest city" required>
          </div>

          <div class="col-md-4 form- mt-3 mt-md-0">
            <br/>
            <input type="text" class="form-control" name="nearest_road" id="nearest_road" placeholder="Distance to nearest paved road" required>
          </div>

          <div class="col-md-4 form- mt-3 mt-md-0">
              <label>  Network availability </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="network" required>
                <option value="" disabled selected> -- Choose -- </option>
               <option value="available"> Available  </option>
               <option value="not_available"> Not Available </option>
             </select>
           </div>
          </div>  
      </div>



     <br/><h3 for="textAreaRemark"> Customer data </h3>


     <div class="row">

<div class="col-md-4 form-">
  <label></label>
  <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Customer name" required>
</div>

<div class="col-md-4 form-">
  <label></label>
  <input type="text" name="phone_number" class="form-control" id="phone" placeholder="  phone (002499123xxx) " required>
</div>

<div class="col-md-4 form-">
  <label></label>
  <input type="text" name="whatsapp_num" class="form-control" id="whatsapp_num" placeholder="    whatsapp phone (002499123xxx) " required>
</div>

</div>



      <div class="row">

      <div class="col-md-4 form- mt-3 mt-md-0">
                  <label></label>
                  <input type="text" class="form-control" name="email" id="email" placeholder="Customer Email " required>
                </div>

                <div class="col-md-4 form- mt-3 mt-md-0">
                <label>   Type of relationship to the site </label> 
                <select class="form-control mr-1" name="job" id="job" onchange="" required>
               <option value="" disabled selected> --  Choose -- </option>
                <option value="Owner"> Owner   </option>
                <option value="Partner"> Partner </option>
                <option value="Manager"> Manager </option>
                <option value="Employee"> Employee </option>
                <option value="Moderator"> Moderator </option>
                <option value="agent"> agent </option>
                <option value="broker"> broker </option>
                </select> 
                  </div>

              <div class="col-md-4 form-">
                <label>  Your side is </label> 
                <select class="form-control mr-1" name="work_for" id="work_for" onchange="select_side();" required>
                <option value="" disabled selected> -- Choose -- </option>
                <option value="company"> Company </option>
                <option value="individual"> Individual </option>
                </select>  
                <input id="sidehide" type="text" name="company_name" class="form-control" placeholder="Enter company Name" style="display: none;" />
              </div>  



              <div class="col-md-4 form- mt-3 mt-md-0">
              <label>  Have you over worked with us : </label> 
                <select class="form-control mr-1" name="previous" id="previous" onchange="select_wwus();" required>
                 <option value="" disabled selected> -- Choose -- </option>
                <option value="yes"> Yes </option>
                <option value="no"> No </option>
                </select>
               <input id="wwushide" type="text" class="form-control" placeholder=" On any construction site with us" style="display: none;" />
               <!-- required style="display:none" -->
               
              

              </div>


              <div class="col-md-4 form- mt-3 mt-md-0">
              <div class="form-">
              <label for="exampleFormControlSelect2"> How to know us : </label>
              <select  class="form-control" name="know" id="exampleFormControlSelect2">
                <option value="media"> Facebook </option>
                <option value="media"> Twiter </option>
                <option value="advertisemen"> Advertisment </option>
                <option value="friend"> By a friend </option>
                <option value="other"> Others  </option>
              </select>
              </div>
             </div>

      </div>


              <div class="text-center">  <br/><br/><button type="submit" name="send" style="background-color:orange;border-radius:20px;padding:10px;"> Send Request </button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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