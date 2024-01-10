<!DOCTYPE html>
<html dir="ltr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>  Contract Request  </title>
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
  $skill_counter = 2 ; 

   // deal with period  
   function select_period(){
     var type = document.getElementById("work_duration_id").value;
      if(type == "hand"){
      document.getElementById("durationhide").style.display = "block";
      }else{
      document.getElementById("durationhide").value = "";
      document.getElementById("durationhide").style.display = "none";
      }
   }

  //deal with hour of day
   function select_hourday(){
     var type = document.getElementById("daily_work_hours_id").value;
      if(type == "hand"){
      document.getElementById("work_hourshide").style.display = "block";
      }else{
      document.getElementById("work_hourshide").value = "";
      document.getElementById("work_hourshide").style.display = "none";
      }
   }


    // deal with filed
    function select_work_field(){
     var type = document.getElementById("work_field_id").value;
      if(type == "hand"){
      document.getElementById("work_fieldhide").style.display = "block";
      }else{
      document.getElementById("work_fieldhide").value = "";
      document.getElementById("work_fieldhide").style.display = "none";
      }
   }


    // deal with old
    function select_old(){
     var type = document.getElementById("site_age").value;
      if(type == "old"){
      document.getElementById("oldhide").style.display = "block";
      }else{
      document.getElementById("start_date").value = "";
      document.getElementById("oldhide").style.display = "none";
      }
   }


      // deal with location side
   function select_side(){
     var type = document.getElementById("customer_type_selection").value;
      if(type == "company"){
      document.getElementById("company").style.display = "block";
      }else{
      document.getElementById("company").value = "";
      document.getElementById("company").style.display = "none";
      }
   }

   // deal with work with us 
   function select_wwus(){
     var type = document.getElementById("ever_work_with_us").value;
      if(type == "yes"){
      document.getElementById("wwushide").style.display = "block";
      }else{
      document.getElementById("wwushide").value = "";
      document.getElementById("wwushide").style.display = "none";
      }
   }


    // deal with work with us 
    function select_wwus(){
     var type = document.getElementById("ever_work_with_us").value;
      if(type == "yes"){
      document.getElementById("wwushide").style.display = "block";
      }else{
      document.getElementById("wwushide").value = "";
      document.getElementById("wwushide").style.display = "none";
      }
   }

   function add_distance_line() {
    //alert("go");
    var skills = document.getElementById("distancediv");

    var div = document.createElement("div");
    div.setAttribute("class" , "col-md-3 form-group");
    var label = document.createElement("label");
    var input = document.createElement("input");
    input.setAttribute("class" , "form-control");
    input.setAttribute("placeholder" , "product name ");
    input.setAttribute("name" , "product" + $skill_counter);
    div.appendChild(label);
    div.appendChild(input);

    var div2 = document.createElement("div");
    div2.setAttribute("class" , "col-md-3 form-group");
    var label2 = document.createElement("label");
    label2.innerHTML = "";
    var input2 = document.createElement("input");
    input2.setAttribute("class" , "form-control");
    input2.setAttribute("placeholder" , "Transportation distance ");
    input2.setAttribute("name" , "distance" + $skill_counter);
    div2.appendChild(label2);
    div2.appendChild(input2);


    skills.appendChild(div);
    skills.appendChild(div2);
    
    $skill_counter ++;
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
          <h2> Contract Request  </h2>
         </div>
      </div>

  

      <div class="container">
        <div class="row mt-5">

   

          <div class="col-lg-12 mt-5 mt-lg-0">

            <form action="contract_request.php" method="post" role="form">

                <h3 for="textAreaRemark">Contract Requirement </h3>

              <div class="my-3">
                <div class="error-message"></div>
                <div class="sent-message">
                  
                  <?php

                  // sendding form 
                  if(isset($_POST['Send-form'])){

                  // get the post value:
  $work_type_id = $_POST['work_type_id'];
  $work_duration_id =  $_POST['work_duration_id'];
//  $mobilization_row_distance =  $_POST['mobilization_row_distance'];
 // $mobilization_waste_distance =  $_POST['mobilization_waste_distance'];
 $unit_of_measure =  $_POST['unit_of_measure'];

  $total_ton =  $_POST['total_ton'];
  $daily_ton =  $_POST['daily_ton'];
  $daily_work_hours_id =  $_POST['daily_work_hours_id'];
  $expected_beginning_of_work =  $_POST['expected_beginning_of_work'];
  $state =  $_POST['state'];
  $region =  $_POST['region'];
 // $distance_from_nearest =  $_POST['distance_from_nearest'];
  $work_field_id =  $_POST['work_field_id'];
  $living_selection = $_POST['living_selection'];
  $subsistence_selection = $_POST['subsistence_selection'];
  $internet_selection =  $_POST['internet_selection'];
  $communication_selection = $_POST['communication_selection'];
  $workshop_selection =  $_POST['workshop_selection'];
  $compressor_selection =  $_POST['compressor_selection'];
  $fuel_selection =  $_POST['fuel_selection'];
  $water_selection =  $_POST['water_selection'];
  $electricity_selection = $_POST['electricity_selection'];
  $nearest_city =  $_POST['nearest_city'];
  //$nearest_market =  $_POST['nearest_market'];
  $nearest_paved_road =  $_POST['nearest_paved_road'];
  //$site_age = $_POST['site_age'];
  $customer_name =  $_POST['customer_name'];
  $customer_email =  $_POST['customer_email'];
  $customer_job_title =  $_POST['customer_job_title'];
  $customer_type_selection = $_POST['customer_type_selection'];
  $ever_work_with_us =  $_POST['ever_work_with_us'];
  $social_media_selection =  $_POST['social_media_selection'];
  $friend = @$_POST['friend'];
  $company =  $_POST['company'];
  $phone = $_POST['phone'];
  $whatsapp_num = $_POST['whatsapp_num'];
  $start_date = $_POST['start_date'];


       // INSERT SKILL ARRAY
       $skill_array = array();
       $skill_counter = 1 ;
       while (isset($_POST['product'.$skill_counter])) {
           array_push($skill_array,
            $_POST['product'.$skill_counter],
            $_POST['distance'.$skill_counter]);
           $skill_counter ++;
       }
   // PRINT SKILLS ARRAY
   $skill_name = "";
   $skill_value = "";
   $skillsArray = array();
   foreach ($skill_array as $key => $value) {
     if($key % 2 == 0)
       $skill_name = $value ;
     elseif ($key % 2 == 1) {
       $skill_value = $value;
     }
     if($key % 2 == 1){
       // echo "Data:".$skill_name." - ".$skill_value."<br/>"; 
       array_push($skillsArray,[0,0,["name" => $skill_name,"distance" => $skill_value]]);
     }

   }


  
  // echo "Data".$work_type_id.$work_duration_id.$mobilization_row_distance.$mobilization_waste_distance.$total_ton.$daily_ton.$daily_work_hours_id.$expected_beginning_of_work.$state.$region.$distance_from_nearest.$work_field_id.$living_selection.$subsistence_selection.$internet_selection.$communication_selection.$workshop_selection.$compressor_selection.$fuel_selection.$water_selection.$electricity_selection.$nearest_city.$nearest_market.$nearest_paved_road.$site_age.$customer_name.$customer_email.$customer_job_title.$customer_type_selection.$ever_work_with_us.$social_media_selection.$friend.$company;


$jayParsedAry = [
  "params" => [
        "args" => [
           "vals_list" => [
            "work_type_id" => $work_type_id, 
            "work_duration_id" => $work_duration_id, 
            "total_ton" => $total_ton, 
            "daily_ton" => $daily_ton, 
            "daily_work_hours_id" => $daily_work_hours_id, 
            "expected_beginning_of_work" => $expected_beginning_of_work, 
            "state" => $state, 
            "region" => $region, 
            "work_field_id" => $work_field_id, 
            "living_selection" => $living_selection, 
            "subsistence_selection" => $subsistence_selection, 
            "internet_selection" => $internet_selection, 
            "communication_selection" =>$communication_selection, 
            "workshop_selection" => $workshop_selection, 
            "compressor_selection" => $compressor_selection, 
            "fuel_selection" => $fuel_selection, 
            "water_selection" => $water_selection, 
            "electricity_selection" => $electricity_selection, 
            "nearest_city" => $nearest_city, 
            "nearest_paved_road" => $nearest_paved_road, 
            "site_age" => $start_date, 
            "customer_name" => $customer_name, 
            "customer_email" => $customer_email, 
            "customer_job_title" => $customer_job_title, 
            "customer_type_selection" => $customer_type_selection, 
            "ever_work_with_us" => $ever_work_with_us ,
            "social_media_selection" => $social_media_selection, 
            "unit_of_measure" => $unit_of_measure, 
            "friend" => $friend, 
            "company" => $company, 
            "mobilization_distance_ids" => $skillsArray ,
            "whatsapp_num" => $whatsapp_num,
            "phone" => $phone,
            "status" => "draft" 
           ] 
        ] 
     ] 
]; 
$done=json_encode($jayParsedAry);
//echo $done;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://equipation-equipation-odoo-com-stage-10590858.dev.odoo.com/apiV2/contracting.request/create',
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
      //  echo $key."".$value;
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

            <div class="row">
               
                <div class="col-md-4 form-group">
                Work type <br/>

                <select class="form-control mr-1" name="work_type_id" id="work_type_id" onchange="select_period();" required>
                    <option value="Moving materials">Moving materials</option>
                    <option value="Run Mine">Run Mine</option>
                    <option value="Establishing a camp">Establishing a camp</option>
                    <option value="Equipping basins">Equipping basins</option>
                    <option value="road paving">road paving</option>

                  </select>
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                Duration <br/>
                  <select class="form-control mr-1" name="work_duration_id" id="work_duration_id" onchange="select_period();" required>
                    <option value="" disabled selected> --  Choose the duration  -- </option>
                    <option value="month"> month </option>
                    <option value="3month"> 3 month  </option>
                    <option value="year"> year </option>
                    <option value="hand">  Manual entry </option>
                  </select>
                  <input id="durationhide" name="durationhide" type="text" class="form-control" placeholder="    Manual entry " style="display: none;">
                </div>


                <div class="col-md-4 form-group">
         <label>Unit of measurement</label>
         <select class="form-control mr-1" id="unit_of_measure" name="unit_of_measure" onchange="select_hourday();" required>
            <option value="" disabled selected> </option>
            <option value="tons">tons</option>
            <option value="cubic metres">cubic metres</option>
            <option value="kilometers">Kilometers</option>
            <option value="other">other</option>
          </select>
        </div>

                <!-- <div class="col-md-4 form-group">
                <label></label>
                <input id="mobilization_row_distance" name="mobilization_row_distance" type="number" class="form-control" placeholder="Distance of mobilization row"/>
                </div> -->

              </div>

              <div class="row">

              <!-- <div class="col-md-4 form-group">
              <label></label>
              <input id="mobilization_waste_distance" name="mobilization_waste_distance" type="text" class="form-control" placeholder="distance of mobilization waste"/>
              </div>    -->

              <div class="col-md-4 form-group">
              <label>Otal TION</label>
              <input id="total_ton" name="total_ton" type="number" class="form-control" placeholder="distance of mobilization waste"/>
              </div> 

              <div class="col-md-4 form-group">
              <label>Daily TON</label>
              <input id="daily_ton" name="daily_ton" type="number" class="form-control" placeholder="distance of mobilization waste"/>
              </div> 

              </div>

              <h3>  Add the name of the transport intended to be transported and the transport distance </h3>
      
      <div id="distancediv" class="row">

      <div class="col-md-3 form-group">
      <label></label>
      <input type="text" name="product1" class="form-control" placeholder="product name"/>
      </div>

      <div class="col-md-3 form-group">
      <label>  </label>
      <input type="text" name="distance1" class="form-control" placeholder="Transportation distance"/>

      </div>


      </div><br/>
      <span style="width: 150px; padding: 3px; margin: 5px;" class="btn btn-primary" onclick="add_distance_line();">  Add a product + </span>
    

              <div class="row">

        <div class="form-group col-md-4">
        <label> Daily work hours   </label>
          <select class="form-control mr-1" id="daily_work_hours_id" name="daily_work_hours_id" onchange="select_hourday();" required>
            <option value="" disabled selected> -- Choose  -- </option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="20">20</option>
            <option value="hand"> manual entry  </option>
          </select>
          <input id="work_hourshide" name="work_hourshide" type="number" class="form-control" placeholder="  manual entry Hour   " style="display: none;">
        </div>

         <div class="col-md-4 form-group">
         <label> Expected begining of work</label>
          <input id="expected_beginning_of_work" name="expected_beginning_of_work" type="date" class="form-control" placeholder=" "/>
        </div> 
                
              </div>
    <br/>
    <h3 for="textAreaRemark"> SITE DESCRIPTION: </h3>


      <div class="row">
      
        <div class="form-group col-md-4">
           <label>  states  </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="state" name="state" required>
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


          <div class="form-group col-md-4">
           <label>  The nature of the site </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="region" name="region" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option value="Mountains"> Mountains </option>
               <option value=" Wells"> Wells </option>
               <option value="Farm"> Farm </option>
               <option value="Mine"> Mine </option>
               <option value="Open sites"> Open sites </option>
             </select>
           </div>
         </div>

             
        <div class="col-md-4 form-group mt-3 mt-md-0">
        WORK FIELD <br/>
                  <select class="form-control mr-1" name="work_field_id" id="work_field_id" onchange="select_work_field();" required>
                    <option disabled selected> -- Choose   -- </option>
                    <option value="1"> mining </option>
                    <option value="2">  cement </option>
                    <option value="3">  agricultural </option>
                    <option value="hand">   manual entry </option>
                  </select>

                  <input id="work_fieldhide" name="work_fieldhide" type="text" class="form-control" placeholder="   manual entry " style="display: none;">
          </div>
        <!-- <div class="form-group col-md-4">
       <input type="number" class="form-control" name="distance_from_nearest" id="distance_from_nearest" placeholder=" Nearest city  " required>
          </div> -->



          <div class="col-md-4 form-group mt-3 mt-md-0">
            <label> Narest City </label>
            <input type="text" name="nearest_city" class="form-control" placeholder="Enter nearest city" required/>
            </div>

            <!-- <div class="col-md-4 form-group mt-3 mt-md-0">
            <label> Nearest Market </label>
            <input type="text" id="nearest_market" name="nearest_market" class="form-control" placeholder="Enter nearest market" required/>
            </div> -->

            <div class="col-md-4 form-group mt-3 mt-md-0">
            <label> Nearest Paved Road </label>
            <input type="text" id="nearest_paved_road" name="nearest_paved_road" class="form-control" placeholder="Enter nearest paved road" required/>
            </div>

            <div class="form-group col-md-4">
             work starting date (manual entry/calendar) :  <br/>
             <input type="date" name="start_date" class="form-control" placeholder="   work starting date (manual entry/calendar) " required>     
         </div>                      
            
      </div>

      <div class="row">
   

        
             

        </div>


          <div class="row">

          <label> <b>JOB SITE READINESS  : </b> </label>
          
          <div class="form-group col-md-4">
           <label> living </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="living_selection" name="living_selection" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="excellent"> excellent </option>
               <option value="good"> good </option>
               <option value="normal"> normal </option>
             </select>
           </div>
         </div>


          <div class="form-group col-md-4">
           <label> subsistence </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="subsistence_selection" name="subsistence_selection" required>
               <option value="" disabled selected> --   Choose -- </option>
                <option value="excellent"> excellent </option>
               <option value="good"> good </option>
               <option value="normal"> normal </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> internet </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="internet_selection" name="internet_selection" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="available"> available </option>
               <option value="not_available"> not available </option>
             </select>
           </div>
         </div>
            
          </div>

       <div class="row">
            
        <div class="form-group col-md-4">
           <label>  communication </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="communication_selection" name="communication_selection" required>
               <option value="" disabled selected> --  Choose  -- </option>
               <option value="available"> available </option>
               <option value="not_available"> not available </option>
             </select>
           </div>
         </div>

         <div class="form-group col-md-4">
           <label>  workshop </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="workshop_selection" name="workshop_selection" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="available"> available </option>
               <option value="not_available"> not available </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> compressor </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="compressor_selection" name="compressor_selection" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="available"> available </option>
               <option value="not_available"> not available </option>
             </select>
           </div>
         </div>

          </div>

          <div class="row">

          <div class="form-group col-md-4">
           <label> fuel </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="fuel_selection" name="fuel_selection" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="available"> available </option>
               <option value="not_available"> not available </option>
             </select>
           </div>
         </div>
            

           <div class="form-group col-md-4">
           <label> water </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="water_selection" name="water_selection" required>
               <option value="" disabled selected> --   Choose   -- </option>
               <option value="available"> available </option>
               <option value="not_available"> not available </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> electricity </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="electricity_selection" name="electricity_selection" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="available"> available </option>
               <option value="not_available"> not available </option>
             </select>
           </div>
         </div>
          </div>

          <div class="row">

         
          </div>

                <h3 for="textAreaRemark">CUSTOMER DATA:  </h3>

              <div class="row">

                <div class="col-md-4 form-group">
                  <label></label>
                  <input type="text" name="customer_name" class="form-control" placeholder=" Full name " required>
                </div>


                <div class="col-md-4 form-group">
                  <label style="color: red">  </label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="  phone number ex: 00249123000000" required>
                </div>

                <div class="col-md-4 form-group">
                  <label style="color: red"> </label>
                  <input type="text" name="whatsapp_num" class="form-control" id="phone" placeholder="Whatsapp number ex: 00249123000000" required>
                </div>

              </div>

              <div class="row">

                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <label></label>
                  <input type="email" class="form-control" name="customer_email" placeholder=" Email " required>
                </div>


              <div class="col-md-4 form- mt-4 mt-md-0">
              <label>   Type of relationship to the site </label> 
                <select class="form-control mr-1" name="customer_job_title" id="job" onchange="" required>
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

              <div class="col-md-4 form-group">
                <label>  Your side is </label> 
                <select class="form-control mr-1" name="customer_type_selection" id="customer_type_selection" onchange="select_side();" required>
                <option value="" disabled selected> -- Choose -- </option>
                <option value="company"> Company </option>
                <option value="person"> Individual </option>
                </select>  
                <input id="company" name="company" type="text" class="form-control" placeholder="    Company Name" style="display: none;" />
              </div>

    

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <label> Have you over worked with us : </label>
                <select class="form-control mr-1" name="ever_work_with_us" id="ever_work_with_us" onchange="select_wwus();" required>
                <option value="" disabled selected> -- Choose -- </option>
                <option value="yes"> Yes </option>
                <option value="no"> No </option>
                </select>

               <!-- <input id="wwushide" type="text" class="form-control" placeholder=" workplace  " style="display: none;" /> -->
               
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <div class="form-group">
              <label for="exampleFormControlSelect2"> How to know us : </label>
              <select  class="form-control" id="exampleFormControlSelect2" name="social_media_selection" required>
                <option value="facebook"> Facebook </option>
                <option value="twitter"> Twitter </option>
                <option value="instagram"> Instagram </option>
              </select>
              </div>
             </div>

              </div>

              <div class="text-center"><button style="background-color:orange;border-radius:20px;padding:10px;" type="submit" name="Send-form">  Send </button></div>
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