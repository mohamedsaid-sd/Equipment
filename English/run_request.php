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

                   <div class="my-3">
                
                <div class="error-message"></div>
                <div class="sent-message">

                  <?php

                  if(isset($_POST['send'])){
                        // sending values :
                        $full_name = $_POST['full_name'];
                        $nationality = $_POST['nationality'];
                        $id_number = $_POST['id_number'];
                        $phone_number = $_POST['phone_number'];
                        $phone_number_2 = $_POST['phone_number_2'];
                        $whatsapp_num = $_POST['whatsapp_num'];
                        $email = $_POST['email'];
                        $tax_file = $_POST['tax_file'];
                        $address = $_POST['address'];
                        $recommendation = $_POST['recommendation'];
                        $code_number = $_POST['code_number'];
                        $years_in_field=$_POST['years_in_field'];
                        $owned_machines=$_POST['owned_machines'];

                        $agent = $_POST['agent'];
                        if($agent == "full_authority_agent"){
                            $full_authority_agent= "true";
                            $limit_authority_agent= "false";
                        }else{
                            $full_authority_agent= "false";
                            $limit_authority_agent= "true";
                        }
                        $date_of_foundation=$_POST['date_of_foundation'];
                        $registration_number=$_POST['registration_number'];
                        $file_tax_number=$_POST['file_tax_number'];
                        $expatriate_date=$_POST['expatriate_date'];
                        @$compressor=$_POST['compressor'];
                        if($compressor == "on")
                        $compressor = "true"; else $compressor = "false";
                        @$generator_tower_light=$_POST['generator_tower_light'];
                        if($generator_tower_light == "on")
                        $generator_tower_light = "true"; else $generator_tower_light = "false";
                        @$welding_machine=$_POST['welding_machine'];
                        if($welding_machine == "on")
                        $welding_machine = "true"; else $welding_machine = "false";
                        @$cranes  =$_POST['cranes']; 
                        if($cranes == "on")
                        $cranes = "true"; else $cranes = "false";
                        @$heavy_trucks=$_POST['heavy_trucks'];
                        if($heavy_trucks == "on")
                        $heavy_trucks = "true"; else $heavy_trucks = "false";
                        @$excavation_equipment =$_POST['excavation_equipment'];
                        if($excavation_equipment == "on")
                        $excavation_equipment = "true"; else $excavation_equipment = "false";
                        @$pipeline_equipment =$_POST['pipeline_equipment'];
                        if($pipeline_equipment == "on")
                        $pipeline_equipment = "true"; else $pipeline_equipment = "false";
                        @$civil_equipment =$_POST['civil_equipment'];
                        if($civil_equipment == "on")
                        $civil_equipment = "true"; else $civil_equipment = "false";
                        @$mining_equipment =$_POST['mining_equipment']; 
                        if($mining_equipment == "on")
                        $mining_equipment = "true"; else $mining_equipment = "false";
                        @$agricultural_equipment =$_POST['agricultural_equipment'];
                        if($agricultural_equipment == "on")
                        $agricultural_equipment = "true"; else $agricultural_equipment = "false";
                        @$facility=$_POST['facility']; 
                        if($facility == "on")
                        $facility = "true"; else $facility = "false";
                        @$light_vehicles_trucks =$_POST['light_vehicles_trucks'];
                        if($light_vehicles_trucks == "on")
                        $light_vehicles_trucks = "true"; else $light_vehicles_trucks = "false";
                        $air_compressor_selection =$_POST['air_compressor_selection']; 
                        $generator_tower_light_selection=$_POST['generator_tower_light_selection']; 
                        $welding_machine_selection=$_POST['welding_machine_selection'];
                        $excavator_selection =$_POST['excavator_selection']; 
                        $brand_id=$_POST['brand_id']; 
                        if($brand_id == "hand")
                          $brand_id = $_POST['brand_idhide'];
                        $size_id=$_POST['size_id']; 
                        if($size_id == "hand")
                          $size_id = $_POST['size_idhide'];
                        $model_id=$_POST['model_id'];
                        if($model_id == "hand")
                          $model_id = $_POST['model_idhide'];
                        $year_of_manufacture_id=$_POST['year_of_manufacture_id'];
                        if($year_of_manufacture_id == "hand")
                          $year_of_manufacture_id = $_POST['year_of_manufacture_idhide'];
                        $monthly_rental_id=$_POST['monthly_rental_idhide']." ".$_POST['monthly_rental_id']; 
                        $condition_id=$_POST['condition_id'];
                        if($condition_id == "hand")
                          $condition_id = $_POST['condition_idhide'];
                        $state_id=$_POST['state_id']; 
                        if($state_id == "hand")
                          $state_id = $_POST['state_idhide'];
                        $advance_id =$_POST['advance_id']; 
                        if($advance_id == "hand")
                          $advance_id = $_POST['advance_idhide'];
                        $category_id=$_POST['category_id'];
                        if($category_id == "hand")
                          $category_id = $_POST['category_idhide'];

                        // the missing value 
                        // CONTRACT TERMS FROM category

                        // echo " Data : ".$full_name."-".$nationality."-".$id_number."-".$phone_number."-".$phone_number_2."-".$whatsapp_num."-".$email."-".$tax_file."-".$address."-".$recommendation."-".$code_number."-".$years_in_field."-".$owned_machines."-".$full_authority_agent."-".$limit_authority_agent."-".$date_of_foundation."-".$registration_number."-".$file_tax_number."-".$expatriate_date."-".$compressor."-".$generator_tower_light."-".$welding_machine."-".$cranes."-".$heavy_trucks."-".$excavation_equipment."-".$pipeline_equipment."-".$civil_equipment."-".$mining_equipment."-".$agricultural_equipment."-".$facility."".$light_vehicles_trucks."-".$air_compressor_selection."".$generator_tower_light_selection."-".$welding_machine_selection."-".$excavator_selection ."-".$brand_id."-".$size_id."-".$model_id."-".$year_of_manufacture_id."".$monthly_rental_id."-".$condition_id."-".$state_id."-".$advance_id."-".$category_id;

                    $jayParsedAry = [
    "params" => [
          "args" => [
             "vals_list" => [
                "full_name" => $full_name, 
                "nationality" => $nationality, 
                "id_number" => $id_number, 
                "phone_number" => $phone_number, 
                "phone_number_2" => $phone_number_2, 
                "whatsapp_num" => $whatsapp_num, 
                "email" => $email, 
                "tax_file" => $tax_file, 
                "address" => $address, 
                "recommendation" => $recommendation, 
                "code_number" => $code_number, 
                "years_in_field" => $years_in_field, 
                "owned_machines" => $owned_machines, 
                "full_authority_agent" => $full_authority_agent, 
                "limit_authority_agent" => $limit_authority_agent, 
                "date_of_foundation" => $date_of_foundation, 
                "registration_number" => $registration_number, 
                "file_tax_number" => $file_tax_number, 
                "expatriate_date" => $expatriate_date, 
                "compressor" => $compressor, 
                "generator_tower_light" => $generator_tower_light, 
                "welding_machine" => $welding_machine, 
                "cranes" => $cranes, 
                "heavy_trucks" => $heavy_trucks, 
                "excavation_equipment" => $excavation_equipment, 
                "pipeline_equipment" => $pipeline_equipment, 
                "civil_equipment" => $civil_equipment, 
                "mining_equipment" => $mining_equipment, 
                "agricultural_equipment" => $agricultural_equipment, 
                "facility" => $facility, 
                "light_vehicles_trucks" => $light_vehicles_trucks, 
                "air_compressor_selection" => $air_compressor_selection, 
                "generator_tower_light_selection" => $generator_tower_light_selection, 
                "welding_machine_selection" => $welding_machine_selection, 
                "excavator_selection" => $excavator_selection, 
                "brand_id" => $brand_id, 
                "size_id" => $size_id, 
                "model_id" => $model_id, 
                "year_of_manufacture_id" => $year_of_manufacture_id, 
                "monthly_rental_id" => $monthly_rental_id, 
                "condition_id" => $condition_id, 
                "state_id" => $state_id, 
                "advance_id" => $advance_id, 
                "category_id" => $category_id, 
                "status" => "draft" 
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
       echo $key."".$value;
        if($key == "msg" )
          if($value == "Success")
                // success add form alert ...
                        echo "<div class='alert alert-success'>
                        <span class='icon'> <i class='fa fa-check-circle'></i></span>
                         <b> تم ارسال الطلب بنجاح يسعدنا دوما في شركة ايكيوبيشن استقبال طلباتكم طوال الوقت , سوف يقوم موظف شركة ايكيوبيشن بالرد عليك في اقرب وقت عن طريق رقم الهاتف او البريد الالكتروني المرسلين في الطلب ... شكرا لتفهمكم  </b> </div>";
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

          <div class="col-md-4 form-group  mt-3 mt-md-0">
              <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Full name" >
          </div>

           <div class="col-md-4 form-group  mt-3 mt-md-0">
              <input type="text" id="nationality" name="nationality" class="form-control" placeholder=" Nationality " >
          </div>

           <div class="col-md-4 form-group  mt-3 mt-md-0">
              <input type="number" id="id_number" name="id_number" class="form-control" placeholder=" ID number "> <font color="red"> * Optionaly </font> 
          </div>

        </div>

        <div class="row">

          <div class="col-md-4 form-group">
              <input type="number" id="phone_number" name="phone_number" class="form-control" placeholder=" phone number  "  >
          </div>

          <div class="col-md-4 form-group  mt-3 mt-md-0">
              <input type="text" id="phone_number_2" name="phone_number_2" class="form-control" placeholder=" phone number 2 "> <font color="red"> * Optionaly </font> 
          </div>

          <div class="col-md-4 form-group">
              <input type="number" id="whatsapp_num" name="whatsapp_num" class="form-control" placeholder=" whatsapp number  " >
          </div>
          
        </div>

        <div class="row">

        <div class="col-md-4 form-group">
            <input type="email" id="email" name="email" class="form-control" placeholder=" Email "  >
        </div>

        <div class="col-md-4 form-group">
            <input type="number" id="tax_file" name="tax_file" class="form-control" placeholder=" TAX file  ">  <font color="red"> * Optionaly </font> 
        </div>

         <div class="col-md-4 form-group">
            <input type="text" id="address" name="address" class="form-control" placeholder=" Address " >
        </div>
          
        </div>

        <div class="row">

         <div class="col-md-4 form-group">
            <input type="text" id="recommendation" name="recommendation" class="form-control" placeholder=" Recommendation  "  >
        </div>

        <div class="col-md-4 form-group">
             <input type="text" id="code_number" name="code_number" class="form-control" placeholder=" code number ">
        </div>

       <div class="col-md-4 form-group">
             <!-- <input type="text" name="name" class="form-control" placeholder=" TITLE  "  > -->
        </div>  
          
        </div>

        <div class="row">
          <label> TITLE </label>

          <div class="form-group col-md-4">
            <input type="number" class="form-control" id="years_in_field" name="years_in_field" placeholder="Enter the number of years in field" />
          </div>

          <div class="form-group col-md-4">
            <input type="number" class="form-control" id="owned_machines" name="owned_machines" placeholder="Enter the number of owned machines" />
          </div>

         <div class="form-group col-md-4">
            <label> agent/broker </label>
            <select class="form-control" id="agent" name="agent">
              <option value="" disabled selected> -- select -- </option>
              <option>full authority agent</option>
              <option>limit authority agent</option>
            </select>
          </div>

        </div>

        <div class="row">

        <div class="form-group col-md-4">
          <label> date of foundation </label>
            <input type="date" class="form-control" id="date_of_foundation" name="date_of_foundation"/>
        </div>

         <div class="form-group col-md-4">
          <label> registration number </label>
            <input type="text" class="form-control" id="registration_number" name="registration_number" placeholder="Enter the registration number" />
        </div>

         <div class="form-group col-md-4">
          <label> file tax number </label>
            <input type="text" class="form-control" id="file_tax_number" name="file_tax_number" placeholder="Enter the file tax number" />
        </div>

        </div>

        <div class="row">

        <div class="form-group col-md-4">
          <label> expatriate </label>
            <input type="date" class="form-control" id="expatriate_date" name="expatriate_date" />
        </div>
          
        </div>

        <div class="row mt-5">

          <h3> MACHINES INFORMATION  </h3>

          <div class="form-group col-md-4">
           <label> Group  </label><br/>
           <input type="checkbox" name="compressor"> Compressor <br/>
           <input type="checkbox" name="generator_tower_light"> Generator Tower Light <br/>
           <input type="checkbox" name="welding_machine"> Welding Machine <br/>
           <input type="checkbox" name="cranes"> Cranes <br/>
           <input type="checkbox" name="heavy_trucks"> Heavy Trucks <br/>
           <input type="checkbox" name="excavation_equipment"> Excavation Equipment <br/>
           <input type="checkbox" name="pipeline_equipment"> Pipeline Equipment <br/>
           <input type="checkbox" name="civil_equipment"> Civil Equipment <br/>
           <input type="checkbox" name="mining_equipment"> Mining Equipment <br/>
           <input type="checkbox" name="agricultural_equipment"> Agricultural Equipment <br/>
           <input type="checkbox" name="facility"> Facility <br/>
           <input type="checkbox" name="light_vehicles_trucks"> Light Vehicles Trucks <br/>

           <!-- <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" >
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
             </div> -->
             <!-- <input type="text" class="form-control
             " name="" placeholder="Entry new category"> -->

           
         </div>

         <div class="form-group col-md-4">
           <label> TYPE MACHINE </label><br/>

          <label> air compressor </label>
          <select class="form-control mr-1" id="air_compressor_selection" name="air_compressor_selection"  >
              <option value="" disabled selected> -- Choose -- </option>
              <option> fixed </option>
              <option> mobile </option>
           </select> 

           <label> welding machine </label>
          <select class="form-control mr-1" id="welding_machine_selection" name="welding_machine_selection"  >
              <option value="" disabled selected> -- Choose -- </option>
              <option> fixed </option>
              <option> mobile </option>
           </select> 


           <!--   <select class="form-control mr-1" id="ready" name="ready"  >
              <option value="" disabled selected> -- Choose -- </option>
              <option> air compressor  </option>
              <option> generator and tower light </option>
              <option> welding machine  </option>
              <option> excavation equipment   </option>
             </select> -->

            

 <!--            <select class="form-control mr-1" id="ready" name="ready" >
              <option value="" disabled selected> -- Choose -- </option>
              <option> fuel </option>
              <option> electrical </option>
            </select>
 -->
           
<!-- 
            <select class="form-control mr-1" id="ready" name="ready" >
              <option value="" disabled selected> -- Choose -- </option>
              <option> crawler  </option>
              <option> wheel </option>
            </select>    -->
        </div>

          <div class="form-group col-md-4">
          <br/>
          <label> generator and tower light </label>
          <select class="form-control mr-1" id="generator_tower_light_selection" name="generator_tower_light_selection"  >
              <option value="" disabled selected> -- Choose -- </option>
              <option> soundproof </option>
              <option> open  </option>
            </select>  

          <label>excavation equipment</label><br/>
          <select class="form-control mr-1" id="excavator_selection" name="excavator_selection" >
              <option value="" disabled selected> -- Choose -- </option>
              <option> excavtor </option>
              <option> dozer </option>
              <option> grader </option>
            </select>


           <label> BRAND  </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="brand_id" name="brand_id" onchange="select_brand();">
               <option value="" disabled selected> -- Choose -- </option>
               <option> cat </option>
               <option> JCB </option>
               <option> Atlas Capco </option>
               <option> HYUNDAI </option>
               <option> DOOSAN </option>
               <option value="hand"> Entry new brand </option>
             </select>
             </div>
             <input type="text" class="form-control
             " id="brand_idhide" name="brand_idhide" placeholder=" Entry new brand " style="display: none;">
         </div>

          <div class="form-group col-md-4">
           <label> SIZE </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="size_id" name="size_id" onchange="select_size();">
               <option value="" disabled selected> -- Choose -- </option>
               <option> 250 CFM ( Compressor ) </option>
               <option> 2000 KVA ( gen ) </option>
               <option> 220 ( excavator ) </option>
               <option> D9R ( dozer ) </option>
               <option> 160أ ( grader ) </option>
               <option value="hand"> Entry new size </option>
             </select>
             </div>
             <input type="text" class="form-control
             " id="size_idhide" name="size_idhide" placeholder="   Entry new size " style="display: none;" />
         </div>

            <div class="form-group col-md-4">
           <label>  MODEL </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="model_id" name="model_id"  onchange="select_model();">
               <option value="" disabled selected> -- choose -- </option>
               <option> HX225 </option>
               <option> SD25 </option>
               <option value="hand"> entry new model </option>
             </select>
             </div>
             <input type="text" class="form-control
             " id="model_idhide" name="model_idhide" placeholder=" Entry machine model " style="display: none;">
         </div>

         <div class="form-group col-md-4">
           <label> YEAR OF MANUFACTURE   </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="year_of_manufacture_id" name="year_of_manufacture_id" onchange="select_year();">
               <option value="" disabled selected> -- Choose -- </option>
               <option> 2022 </option>
               <option> 2023 </option>
               <option value="hand"> manualy entry </option>
             </select>
             </div>
             <input type="text" class="form-control
             " id="year_of_manufacture_idhide" name="year_of_manufacture_idhide" placeholder=" Entry manufacture year " style="display: none;">
         </div>

      </div>

      <div class="row">

          <div class="form-group col-md-4">
           <label> MONTHLY RENTAL </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="monthly_rental_id" name="monthly_rental_id">
               <option value="" disabled selected> -- Choose -- </option>
               <option> SGD </option>
               <option> USD </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="monthly_rental_idhide" placeholder="entry rental amount ">
         </div>

          <div class="form-group col-md-4">
           <label>  CONDITION </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="condition_id" name="condition_id" onchange="select_condition();">
               <option value="" disabled selected> -- Choose -- </option>
               <option> new (not more than 500 hours or 1500 km) </option>
               <option> almost new (between 501 hours and 1000 hrs ) </option>
               <option> medium (between 1001 hrs and 2500 hrs) </option>
               <option> consumable (over 2501 hrs) </option>
               <option value="hand"> entry manual condition </option>
             </select>
             </div>
             <input type="text" class="form-control" id="condition_idhide" name="condition_idhide" placeholder=" entry manual condition " style="display: none;">
         </div>
        
      </div>





      <div class="row">

        <h3> CONTRACT TERMS  :  </h3>

        <div class="form-group col-md-4">
          <label> STATE </label>
          <select class="form-control" id="state_id" name="state_id" onchange="select_state();">
            <option value="" disabled selected> -- Choose -- </option>
            <option> none </option>
            <option> inside sudan </option>
            <option> all state of sudan except ... </option>
            <option> specific state ... </option>
            <option value="hand"> add new place </option>
          </select>
        <input type="text" id="state_idhide" name="state_idhide" class="form-control" placeholder=" Specified the state " style="display: none;">
        </div>

        <div class="form-group col-md-4">
          <label> ADVANCE </label>
          <select class="form-control" id="advance_id" name="advance_id" onchange="select_advance();">
            <option value="" disabled selected> -- Choose -- </option>
            <option> none </option>
            <option> required (XX% of contract value ) </option>
            <option> full rent required  </option>
            <option> guarantee </option>
            <option value="hand"> entry new condition </option>
          </select>
        <input type="text" id="advance_idhide" name="advance_idhide" class="form-control" placeholder=" entry new condition " style="display: none;">
        </div>

        <div class="form-group col-md-4">
          <label> CATEGORY  </label>
          <select class="form-control" id="category_id" name="category_id" onchange="select_catogry();">
            <option value="" disabled selected> -- Choose -- </option>
            <option> none </option>
            <option> companies only </option>
            <option> contractiong only </option>
            <option value="hand"> manual entry </option>
          </select>
        <input type="text" id="category_idhide" name="category_idhide" class="form-control" placeholder="  manual entry " style="display: none;">
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
            <select class="form-control mr-1" id="ready" name="ready" >
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
            <select class="form-control mr-1" id="ready" name="ready" >
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
             <select class="form-control mr-1" id="ready" name="ready" >
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
             <select class="form-control mr-1" id="ready" name="ready" >
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
             <select class="form-control mr-1" id="ready" name="ready" >
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