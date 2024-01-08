<!DOCTYPE html>
<html dir="rtl">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>  طلب مقاولة  </title>
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
          <h2> طلب المقاولة  </h2>
         </div>
      </div>

  

      <div class="container">
        <div class="row mt-5">

   

          <div class="col-lg-12 mt-5 mt-lg-0">

            <form action="contract_request.php" method="post" role="form">

                <h3 for="textAreaRemark"> متطلبات المقاولة </h3>

              <div class="my-3">
                <div class="error-message"></div>
                <div class="sent-message">
                  
                  <?php

                  // sendding form 
                  if(isset($_POST['Send-form'])){

                  // get the post value:
  $work_type_id = $_POST['work_type_id'];
  $work_duration_id =  $_POST['work_duration_id'];
  $mobilization_row_distance =  $_POST['mobilization_row_distance'];
  $mobilization_waste_distance =  $_POST['mobilization_waste_distance'];
  $total_ton =  $_POST['total_ton'];
  $daily_ton =  $_POST['daily_ton'];
  $daily_work_hours_id =  $_POST['daily_work_hours_id'];
  $expected_beginning_of_work =  $_POST['expected_beginning_of_work'];
  $state =  $_POST['state'];
  $region =  $_POST['region'];
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


    // echo "Data".$work_type_id.$work_duration_id.$mobilization_row_distance.$mobilization_waste_distance.$total_ton.$daily_ton.$daily_work_hours_id.$expected_beginning_of_work.$state.$region.$distance_from_nearest.$work_field_id.$living_selection.$subsistence_selection.$internet_selection.$communication_selection.$workshop_selection.$compressor_selection.$fuel_selection.$water_selection.$electricity_selection.$nearest_city.$nearest_market.$nearest_paved_road.$site_age.$customer_name.$customer_email.$customer_job_title.$customer_type_selection.$ever_work_with_us.$social_media_selection.$friend.$company;

$jayParsedAry = [
  "params" => [
        "args" => [
           "vals_list" => [
            "work_type_id" => $work_type_id, 
            "work_duration_id" => $work_duration_id, 
            "mobilization_row_distance" => $mobilization_row_distance, 
            "mobilization_waste_distance" => $mobilization_waste_distance, 
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
            "nearest_market" => "", 
            "nearest_paved_road" => $nearest_paved_road, 
            "site_age" => $start_date, 
            "customer_name" => $customer_name, 
            "customer_email" => $customer_email, 
            "customer_job_title" => $customer_job_title, 
            "customer_type_selection" => $customer_type_selection, 
            "ever_work_with_us" => $ever_work_with_us ,
            "social_media_selection" => $social_media_selection, 
            "friend" => $friend, 
            "company" => $company, 
            "other" => "Some other information", 
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

  echo $response;
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

            <div class="row">
               
                <div class="col-md-4 form-group">
                نوع العمل <br/>
                <input id="work_type_id" name="work_type_id" type="text" class="form-control" placeholder=" ادخل نوع العمل ">
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                المدة  <br/>
                  <select class="form-control mr-1" name="work_duration_id" id="work_duration_id" onchange="select_period();" required>
                    <option value="" disabled selected> --  اختار  -- </option>
                    <option value="month"> شهر </option>
                    <option value="3month"> 3 شهور  </option>
                    <option value="year"> سنه </option>
                    <option value="hand">  يدوي </option>
                  </select>
                  <input id="durationhide" name="durationhide" type="text" class="form-control" placeholder=" ادخال يدوي" style="display: none;">
                </div>

                <div class="col-md-4 form-group">
                <label style="color: red;">   </label> 
                <input id="mobilization_row_distance" name="mobilization_row_distance" type="number" class="form-control" placeholder="Distance of mobilization row"/>
                </div>

              </div>

              <div class="row">

              <div class="col-md-4 form-group">
              <label style="color: red;">   </label> 
              <input id="mobilization_waste_distance" name="mobilization_waste_distance" type="text" class="form-control" placeholder="Distance of mobilization waste"/>
              </div>

              <div class="col-md-4 form-group">
              <label style="color: red;">   </label> 
              <input id="total_ton" name="total_ton" type="number" class="form-control" placeholder="Enter OTAL TON"/>
              </div>

              <div class="col-md-4 form-group">
              <label style="color: red;">   </label> 
              <input id="daily_ton" name="daily_ton" type="number" class="form-control" placeholder="Enter DAILY TON"/>
              </div> 

              </div>

              <div class="row">

        <div class="form-group col-md-4">
        <label> ساعات العمل اليومية  </label>
          <select class="form-control mr-1" id="daily_work_hours_id" name="daily_work_hours_id" onchange="select_hourday();" required>
            <option value="" disabled selected> -- اختار  -- </option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="20">20</option>
            <option value="hand"> ادخال يدوي </option>
          </select>
          <input id="work_hourshide" name="work_hourshide" type="number" class="form-control" placeholder="  manual entry Hour   " style="display: none;">
        </div>

         <div class="col-md-4 form-group">
         <label> التاريخ المتوقع لبداية العمل </label>
          <input id="expected_beginning_of_work" name="expected_beginning_of_work" type="date" class="form-control" placeholder=" "/>
        </div> 
                
              </div>
    <br/>
    <h3 for="textAreaRemark"> مواصفات الموقع: </h3>


      <div class="row">
       
         <div class="col-md-4 form- mt-3 mt-md-0">
            <label>    الولاية </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="state" name="state" required>
               <option value="" disabled selected> -- حدد  الولاية -- </option>
               <option value="ولاية الخرطوم">ولاية الخرطوم </option>
               <option value="ولاية الجزيرة">ولاية الجزيرة</option>
               <option value="ولاية البحر الأحمر">ولاية البحر الأحمر </option>
               <option value="ولاية كسلا">ولاية كسلا </option>
               <option value="ولاية القضارف">ولاية القضارف </option>
               <option value="ولاية سنار">ولاية سنار </option>
               <option value="ولاية النيل الأبيض">ولاية النيل الأبيض </option>
               <option value="ولاية النيل الأزرق">ولاية النيل الأزرق </option>
               <option value="الولاية الشمالية">الولاية الشمالية </option>
               <option value="ولاية نةر النيل">ولاية نةر النيل </option>
               <option value="ولاية غرب كردفان">ولاية غرب كردفان </option>
               <option value="ولاية جنوب كردفان">ولاية جنوب كردفان </option>
               <option value="ولاية شمال دارفور">ولاية شمال دارفور </option>
               <option value="ولاية غرب دارفور">ولاية غرب دارفور </option>
               <option value="ولاية جنوب دارفور">ولاية جنوب دارفور </option>
               <option value="ولاية شرق دارفور">ولاية شرق دارفور </option>
               <option value="ولاية وسط دارفور">ولاية وسط دارفور </option>
             </select>
           </div>

          </div>

          <div class="form- col-md-4">
           <label>  طبيعة الموقع </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="region" required>
               <option value="" disabled selected> -- حدد طبيعة الموقع -- </option>
               <option value="جبال">جبال </option>
               <option value="أبار">أبار</option>
               <option value="مزرعة">مزرعة </option>
               <option value="منجم">منجم </option>
               <option value="مواقع مفتوحة">مواقع مفتوحة </option>
             </select>
           </div>
         </div>
         <div class="col-md-4 form-group mt-3 mt-md-0">
            <label>  اقرب مدينة </label>
            <input type="text" name="nearest_city" class="form-control" placeholder="ادخل اقرب مدينة" required/>
            </div>

            <!-- <div class="col-md-4 form-group mt-3 mt-md-0">
            <label> اقرب سوق </label>
            <input type="text" id="nearest_market" name="nearest_market" class="form-control" placeholder=" ادخل اقرب سوق" required/>
            </div> -->
      </div>

      <div class="row">


        <div class="col-md-4 form-group mt-3 mt-md-0">
        <label>   اقرب طريق معبد </label>
        <input type="text" id="nearest_paved_road" name="nearest_paved_road" class="form-control" placeholder="ادخل اقرب طريق معبد" required/>
        </div>  
       
        <div class="col-md-4 form-group mt-3 mt-md-0">
        طبيعة العمل <br/>
                  <select class="form-control mr-1" name="work_field_id" id="work_field_id" onchange="select_work_field();" required>
                    <option disabled selected> -- اختار   -- </option>
                    <option> التعدين </option>
                    <option>  الاسمنت </option>
                    <option>  الزراعة </option>
                    <option value="hand"> ادخال يدوي </option>
                  </select>

                  <input id="work_fieldhide" name="work_fieldhide" type="text" class="form-control" placeholder=" ادخال يدوي " style="display: none;">
          </div>

         <div class="form-group col-md-4">
             تاريخ بداية العمل (ادخال يدوي) :  <br/>
             <input type="date" name="start_date" class="form-control" placeholder="   work starting date (manual entry/calendar) " required>
         </div>

              </div>


          <div class="row">

          <label> <b> جاهزية الموقع </b> </label> 
          
          <div class="form-group col-md-4">
           <label> السكن </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="living_selection" name="living_selection" required>
               <option value="" disabled selected> --   اختار -- </option>
               <option value="excellent"> ممتاز </option>
               <option value="good"> جيد </option>
               <option value="normal"> عادي </option>
             </select>
           </div>
         </div>


          <div class="form-group col-md-4">
           <label> الإعاشة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="subsistence_selection" name="subsistence_selection" required>
               <option value="" disabled selected> --   اختار -- </option>
                <option value="excellent"> ممتاز </option>
               <option value="good"> جيد </option>
               <option value="normal"> عادي </option>
             </select>
           </div>
         </div>

         <div class="form-group col-md-4">
           <label>  الاتصالات </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="communication_selection" name="communication_selection" required>
               <option value="" disabled selected> --  اختار  -- </option>
               <option value="available"> متوفر </option>
               <option value="not_available"> غير متوفر </option>
             </select>
           </div>
         </div>
            
          </div>

       <div class="row">

                  <div class="form-group col-md-4">
           <label> الانترنت </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="internet_selection" name="internet_selection" required>
               <option value="" disabled selected> --   اختار -- </option>
               <option value="available"> متوفر </option>
               <option value="not_available"> غير متوفر </option>
             </select>
           </div>
         </div>
            
    
         <div class="form-group col-md-4">
           <label>  الورشة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="workshop_selection" name="workshop_selection" required>
               <option value="" disabled selected> --   اختار -- </option>
               <option value="available"> متوفر </option>
               <option value="not_available"> غير متوفر </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> الكمبرسون </label> 
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="compressor_selection" name="compressor_selection" required>
               <option value="" disabled selected> --   اختار -- </option>
               <option value="available"> متوفر </option>
               <option value="not_available"> غير متوفر </option>
             </select>
           </div>
         </div>

          </div>

          <div class="row">

          <div class="form-group col-md-4">
           <label> الوقود </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="fuel_selection" name="fuel_selection" required>
               <option value="" disabled selected> --   اختار -- </option>
               <option value="available"> متوفر </option>
               <option value="not_available">  غير متوفر </option>
             </select>
           </div>
         </div>
            

           <div class="form-group col-md-4">
           <label> المياة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="water_selection" name="water_selection" required>
               <option value="" disabled selected> --   اختار   -- </option>
               <option value="available"> متوفر  </option>
               <option value="not_available">  غير متوفر </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> الكهرباء </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="electricity_selection" name="electricity_selection" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="available"> متوفرة </option>
               <option value="not_available"> غير متوفرة </option>
             </select>
           </div>
         </div>
          </div>
          <br/>

                <h3 for="textAreaRemark">بيانات العميل:  </h3>


              <div class="row">

                <div class="col-md-4 form-group">
                  <label></label>
                  <input type="text" name="customer_name" class="form-control" placeholder="الاسم ثلاثي" required>
                </div>


                <div class="col-md-4 form-group">
                  <label style="color: red">  </label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="   رقم الهاتف  مثال 00249123000000" required>
                </div>

                <div class="col-md-4 form-group">
                  <label style="color: red">  </label>
                  <input type="text" name="whatsapp_num" class="form-control" id="phone" placeholder="    رقم الواتساب  مثال 00249123000000" required>
                </div>

              </div>

              <div class="row">

                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <label></label>
                  <input type="email" class="form-control" name="customer_email" placeholder=" الايميل" required>
                </div>


              <div class="col-md-4 form- mt-4 mt-md-0">
              <lable>   نوع العلاقة بالموقع </lable> 
                <select class="form-control mr-1" name="customer_job_title" id="job" onchange="" required>
                <option value="" disabled selected> -- اختار  -- </option>
                <option value="مالك"> مالك   </option>
                <option value="شريك"> شريك </option>
                <option value="مدير"> مدير </option>
                <option value="موظف"> موظف </option>
                <option value="مشرف"> مشرف </option>
                <option value="وكيل"> وكيل </option>
                <option value="وسيط"> وسيط </option>
                </select> 
                  </div>

              <div class="col-md-4 form-group">
                <lable>   الجهه التابع لها </lable> 
                <select class="form-control mr-1" name="customer_type_selection" id="customer_type_selection" onchange="select_side();" required>
                <option value="" disabled selected> --  اختار -- </option>
                <option value="company"> شركة </option>
                <option value="person"> فرد </option>
                </select>  
                <input id="company" name="company" type="text" class="form-control" placeholder="ادخل اسم الشركة" style="display: none;" />
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <lable> هل سبق لك العمل معنا </lable> 
                <select class="form-control mr-1" name="ever_work_with_us" id="ever_work_with_us" onchange="select_wwus();" required>
                <option value="" disabled selected> --  اختار -- </option>
                <option value="yes"> نعم </option>
                <option value="no"> لا </option>
                </select>

               <!-- <input id="wwushide" type="text" class="form-control" placeholder=" workplace  " style="display: none;" /> -->
               
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <div class="form-group">
              <label for="exampleFormControlSelect2"> كيف تعرفت علينا </label>
             <select  class="form-control" id="exampleFormControlSelect2" name="social_media_selection" required>
                <option value="" selected disabled> -- إختار -- </option>
                <option value="facebook">Facebook</option>
                <option value="twitter"> Twitter </option>
                <option value="instagram"> Instagram </option>
              </select>
              </div>
             </div>

              </div>

              <br/><br/>

              <div class="text-center"><button style="background-color:orange;border-radius:20px;padding:10px;" type="submit" name="Send-form">  ارسال الطلب </button></div>
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