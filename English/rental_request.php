<!DOCTYPE html>
<html dir="ltr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>  Rental Request  </title>
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
     var type = document.getElementById("duration").value;
      if(type == "hand"){
      document.getElementById("durationhide").style.display = "block";
      }else{
      document.getElementById("durationhide").value = "";
      document.getElementById("durationhide").style.display = "none";
      }
   }



   //deal with hour
   function select_hour(){
     var type = document.getElementById("month_rent").value;
      if(type == "false"){
      document.getElementById("hour_num").style.display = "block";
      }else{
      document.getElementById("hour_num").value = "0";
      document.getElementById("hour_num").style.display = "none";
      }
   }

  //deal with hour of day
   function select_hourday(){
     var type = document.getElementById("work_hours").value;
      if(type == "hand"){
      document.getElementById("work_hourshide").style.display = "block";
      }else{
      document.getElementById("work_hourshide").value = "";
      document.getElementById("work_hourshide").style.display = "none";
      }
   }


    // deal with filed
    function select_work_field(){
     var type = document.getElementById("work_field").value;
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
     var type = document.getElementById("categ").value;
      if(type == "company"){
      document.getElementById("company").style.display = "block";
      }else{
      document.getElementById("company").value = "";
      document.getElementById("company").style.display = "none";
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
          <h2> Rental Request  </h2>
         </div>
      </div>

  

      <div class="container">
        <div class="row mt-5">

   

          <div class="col-lg-12 mt-5 mt-lg-0">

            <form action="rental_request.php" method="post" role="form">

                <h3 for="textAreaRemark">Rental Requirement </h3>

              <div class="my-3">
                <div class="error-message"></div>
                <div class="sent-message">
                  
                  <?php
                  // sendding form 
                  if(isset($_POST['Send-form'])){

                  // get the post value:
                  @$work_typ = $_POST['work_typ'];
                  @$duration = $_POST['duration'];
                  if($duration == "hand")
                    @$duration = $_POST['durationhide'];
                  @$month_rent = $_POST['month_rent'];
                  @$hour_num   = $_POST['hour_num'];
                  @$work_hours = $_POST['work_hours'];
                  if($work_hours == "hand")
                    @$work_hours = $_POST['work_hourshide'];
                  @$work_date = $_POST['work_date'];
                  @$site_a=$_POST['site_a'];@$site_b=$_POST['site_b'];@$site_c=$_POST['site_c'];
                  @$site_d=$_POST['site_d'];@$site_e=$_POST['site_e'];@$site_f=$_POST['site_f'];
                  @$site_g=$_POST['site_g'];@$site_h=$_POST['site_h'];
                  @$site_i=$_POST['site_i'];
                  @$site_j="Narest City ".$_POST['site_j'];
                  @$site_k="Nearest Market  ".$_POST['site_k'];
                  @$site_l="Nearest Paved Road  ".$_POST['site_l'];
                  @$note = $site_a." and ".$site_b." and ".$site_c." and ".$site_d." and ".$site_e." and ".$site_f." and ".$site_g." and ".$site_h." and ".$site_i." and ".$site_j." and ".$site_k." and ".$site_l; 
                  @$distance = $_POST['distance'];
                  @$state   = $_POST['state'];
                  $region    = $_POST['region'];
                  $work_field= $_POST['work_field']; 
                  if($work_field == "hand")
                    @$work_field = $_POST['work_fieldhide'];
                  @$site_age = $_POST['site_age'];
                  if($site_age == "old")
                    @$start_date = $_POST['start_date'];
                  else @$start_date = "2023-05-01";
                  @$name    = $_POST['name'];
                  @$email   = $_POST['email'];
                  @$job     = $_POST['job'];
                  @$categ= $_POST['categ'];
                  if($categ == "company")
                    @$company= $_POST['company'];
                  else
                    @$company = "''";
                  @$work= $_POST['work'];
                  if($work == "yes")
                     // $previous= $_POST['previoushide'];
                  @$know     = $_POST['know'];


                  
                  @$nearest_market     = $_POST['nearest_market'];
                  @$nearest_road     = $_POST['nearest_road'];
                  @$network     = $_POST['network'];
                  @$requested_number     = $_POST['requested_number'];
              //    @$notes     = $_POST['notes'];
                  @$size_machine     = $_POST['size_machine'];

                  @$type_contract     = $_POST['type_contract'];
                  @$machine_type     = $_POST['machine_type'];
                  @$whatsapp_num     = $_POST['whatsapp_num'];
                  @$phone     = $_POST['phone'];


                    // echo "Data:".$work_typ."-".$duration."-".$month_rent."-".$hour_num."-".$work_hours."-".$work_date."-".$note."-".$distance."-".$state."-".$region."-".$work_field."-".$site_age."-".$start_date."-".$name."-".$email."-".$job."-".$categ."-".$company."-".$work."-".$know;
$jayParsedAry = [
  "params" => [
        "args" => [
           "vals_list" => [
              "work_typ" => @$work_typ, 
              "duration" => @$duration, 
              "month_rent" => @$month_rent, 
              "hour_num" => @$hour_num, 
              "work_hours" => @$work_hours, 
              "work_date" => @$work_date, 
              "note" => @$note, 
              "distance" => @$distance, 
              "state" => @$state, 
              "site_age" => @$site_age, 
              "start_date" => @$start_date, 
              "name" => @$name, 
              "email" => @$email, 
              "job" => @$job, 
              "categ" => @$categ, 
              "company" => @$company, 
              "work" => @$work, 
              "know" => @$know, 
              "status" => "draft" ,
              "work_field" => $work_field,
              "region" => $region,
              "nearest_market" => $site_l,
              "nearest_road" =>$site_j,
              "network" =>$network,
              "latitude" => "1234",
              "longitude" => "4321",
              "other_attachment" =>"",
              "requested_number" => $requested_number,
              "type_contract" =>$type_contract,
              "notes" =>"Additional Notes",
              "size_machine" => $size_machine,
              "machine_type" => $machine_type,
              "whatsapp_num" => $whatsapp_num,
              "phone" => $phone

           ] 
        ] 
     ] 
]; 
$done=json_encode($jayParsedAry);
//echo $done;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://equipation-equipation-odoo-com-stage-10590858.dev.odoo.com/apiV2/rental.request/create',
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

            <div class="row">
               
                <div class="col-md-4 form-group">
                WORK TYPE <br/>
                  <select class="form-control mr-1" name="work_typ" id="work_typ" required>
                    <option value="" disabled selected> --  Choose the type  -- </option>
                    <option value="bucket"> bucket </option>
                    <option value="jackhummer"> jackhummer </option>
                    <option value="both"> bucket + jackhummer  </option>
                  </select>
                </div>

                <div class="col-md-3 form-group">
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

                <div class="form-group col-md-3">
        <label>    quantity</label>
         <input type="number" class="form-control" id="inputDate" name="requested_number"  required />
         
      </div>

      <div class="form-group col-md-3">
        <label>     size machine</label>
         <input type="text" class="form-control" id="inputDate" name="size_machine"  required />
         
      </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                DURATION <br/>
                  <select class="form-control mr-1" name="duration" id="duration" onchange="select_period();" required>
                    <option value="" disabled selected> --  Choose the duration  -- </option>
                    <option value="month"> month </option>
                    <option value="3month"> 3 month  </option>
                    <option value="year"> year </option>
                    <option value="hand">  Manual entry </option>
                  </select>

                  <input id="durationhide" name="durationhide" type="text" class="form-control" placeholder="    Manual entry " style="display: none;">

                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                Type of Contract: <br/>
                  <select class="form-control mr-1" name="type_contract" id="month_rent" onchange="select_hour();"  required>
                    <option value="" disabled selected> -- Choose   -- </option>
                    <option value=" Hourly contract "> Hourly contract </option>
                    <option value=" Production contract"> Production contract </option>
                  </select>

                  <input id="hour_num" name="hour_num" type="text" class="form-control" placeholder=" ادخل عدد  الساعات " style="display: none;">
                </div>

                <!-- <div class="col-md-4 form-group mt-3 mt-md-0">
                WORK HOURS <br/>
                  <select class="form-control mr-1" name="month_rent" id="month_rent" onchange="select_hour();" required>
                    <option value="" disabled selected> --   Choose the duration  -- </option>
                    <option value="true">  monthly rent </option>
                    <option value="false"> num hours (manual entry) </option>
                  </select>

                  <input id="hour_num" name="hour_num" type="text" class="form-control" placeholder="  manual entry hour   " style="display: none;">
                </div> -->

              </div>
     <!-- Start Input Start Time -->
     <div class="row">

     <div class="form-group col-md-4">
        <label>DAILY WORK HOURS   </label>

          <select class="form-control mr-1" id="work_hours" name="work_hours" onchange="select_hourday();" required>
            <option value="" disabled selected> -- Choose  -- </option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="20">20</option>
            <option value="hand"> manual entry  </option>
          </select>

          <input id="work_hourshide" name="work_hourshide" type="text" class="form-control" placeholder="  manual entry Hour   " style="display: none;">
        

      </div>

      <div class="form-group col-md-4">
        <label>    EXPECTED WORK START </label>
         <input type="date" class="form-control" id="inputDate" name="work_date" required/>
         
      </div>
      </div>

    <h3 for="textAreaRemark"> SITE DESCRIPTION: </h3>


      <div class="row">
        <div class="col-md-4 form-group">

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
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <br/>
          <input type="text" class="form-control" name="region" id="region" placeholder="Enter the nearest city" required>
        </div>

        <div class="form-group col-md-4">
          <br/>
       <input type="text" class="form-control" name="distance" id="distance" placeholder=" Distance to nearest paved road " required>
          </div>
      </div>

      <div class="row">
       
        <div class="col-md-4 form-group mt-3 mt-md-0">
        WORK FIELD <br/>
                  <select class="form-control mr-1" name="work_field" id="work_field" onchange="select_work_field();" required>
                    <option disabled selected> -- Choose   -- </option>
                    <option> mining </option>
                    <option>  cement </option>
                    <option>  agricultural </option>
                    <option value="hand">   manual entry </option>
                  </select>

                  <input id="work_fieldhide" name="work_fieldhide" type="text" class="form-control" placeholder="   manual entry " style="display: none;">
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
              <label>  Network availability </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="network" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option value="available"> Available  </option>
               <option value="not_available"> Not Available </option>
             </select>
           
           </div>

          </div>

         <div class="form-group col-md-4">
           <label>   SITE AGE </label>
             <select class="form-control mr-1" id="site_age" name="site_age" onchange="select_old();" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="new"> new </option>
               <option value="old"> old </option>
             </select>
             <span id="oldhide" style="display: none;">
             work starting date (manual entry/calendar) :  <br/>
             <input type="date" name="start_date" class="form-control" placeholder="   work starting date (manual entry/calendar) " >
            </span>      
         </div>
              </div>


          <div class="row">

          <label> <b>JOB SITE READINESS  : </b> </label>
          
          <div class="form-group col-md-4">
           <label> living </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_a" name="site_a" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="living is excellent"> excellent </option>
               <option value="living is good"> good </option>
               <option value="living is normal"> normal </option>
             </select>
           </div>
         </div>


          <div class="form-group col-md-4">
           <label> subsistence </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_b" name="site_b" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="subsistence is excellent"> excellent </option>
               <option value="subsistence is good"> good </option>
               <option value="subsistence is normal"> normal </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> internet </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_c" name="site_c" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="internet is available"> available </option>
               <option value="internet is not available"> not available </option>
             </select>
           </div>
         </div>
            
          </div>

       <div class="row">
            
        <div class="form-group col-md-4">
           <label>  communication </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_d" name="site_d" required>
               <option value="" disabled selected> --  Choose  -- </option>
               <option value="communication is available"> available </option>
               <option value="communication is not available">  not available </option>
             </select>
           </div>
         </div>

         <div class="form-group col-md-4">
           <label>  workshop </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_e" name="site_e" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="workshop is available"> available </option>
               <option value="workshop is not available">   not available </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> compressor </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_f" name="site_f" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="compressor is available"> available </option>
               <option value="compressor is not available"> not available  </option>
             </select>
           </div>
         </div>

          </div>

          <div class="row">

          <div class="form-group col-md-4">
           <label> fuel </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_g" name="site_g" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="fuel is available"> available </option>
               <option value="fuel is not available"> not available </option>
             </select>
           </div>
         </div>
            

           <div class="form-group col-md-4">
           <label> water </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_h" name="site_h" required>
               <option value="" disabled selected> --   Choose   -- </option>
               <option value="water is available"> available </option>
               <option value="water is not available "> not available   </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> electricity </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_i" name="site_i" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="electricity is available"> available </option>
               <option value="electricity is not available">  not available  </option>
             </select>
           </div>
         </div>
          </div>

          <div class="row">

            <div class="col-md-4 form-group mt-3 mt-md-0">
            <label> Narest City </label>
            <input type="text" name="site_j" class="form-control" placeholder="Enter nearest city" required/>
            </div>

            <div class="col-md-4 form-group mt-3 mt-md-0">
            <label> Nearest Market </label>
            <input type="text" name="site_k" class="form-control" placeholder="Enter nearest market" required/>
            </div>

            <div class="col-md-4 form-group mt-3 mt-md-0">
            <label> Nearest Paved Road </label>
            <input type="text" name="site_l" class="form-control" placeholder="Enter nearest paved road" required/>
            </div>                        
            
          </div>

                <h3 for="textAreaRemark">CUSTOMER DATA:  </h3>


              <div class="row">

                <div class="col-md-4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="  NAME " required>
                </div>

                <div class="col-md-3 form-group">
                  <input type="number" name="phone" class="form-control"  placeholder="  phone " required>
                </div>

                <div class="col-md-3 form-group">
                  <input type="number" name="whatsapp_num" class="form-control"  placeholder=" whatsap phone " required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder=" EMAIL " required>
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                <lable>     Type of relationship to the site </lable> 
                <select class="form-control mr-1" name="job" id="job" onchange="" required>
                <option value="" disabled selected> --  Choose -- </option>
                <option value="Owner"> Owner   </option>
                <option value="Partner"> Partner </option>
                <option value="Manager"> Manager </option>
                <option value="Employee"> Employee </option>
                <option value="Moderator"> Moderator </option>
                <option value="agent"> agent </option>
                <option value="broker"> broker </option>

                </select>                   </div>

              </div>

              <div class="row">

              <div class="col-md-4 form-group">
                <lable>   CATEGORY </lable> 
                <select class="form-control mr-1" name="categ" id="categ" onchange="select_side();" required>
                <option value="" disabled selected> --  Choose -- </option>
                <option value="company"> company </option>
                <option value="personal"> personal </option>
                </select>  
                <input id="company" name="company" type="text" class="form-control" placeholder="Enter company name" style="display: none;" />
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <lable>     HAVE YOU EVER WORK WITH US </lable> 
                <select class="form-control mr-1" name="work" id="work" onchange="select_wwus();" required>
                <option value="" disabled selected> --  Choose -- </option>
                <option value="yes"> YES </option>
                <option value="no"> NO </option>
                </select>

               <!-- <input id="wwushide" type="text" class="form-control" placeholder=" workplace  " style="display: none;" /> -->
               
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <div class="form-group">
              <label for="exampleFormControlSelect2">  HOW TO RECOGNIZE US</label>
             <select  class="form-control" id="exampleFormControlSelect2" name="know" required>
                <option value="friend">friend</option>
                <option value="social">social</option>
                <option value="tv">tv</option>
                <option value="radio">radio</option>
                <option value="ads">ads</option>
                <option value="other">other</option>
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