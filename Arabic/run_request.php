<!DOCTYPE html>
<html dir="rtl">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> طلب التشغيل  </title>
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
          <h2> طلب التشغيل  </h2>
         </div>
      </div>

             <div class="my-3">
                
                <div class="error-message"></div>
                <div class="sent-message">

                  <?php

                  if(isset($_POST['send'])){
                                            // sending values :
                        $full_name = $_POST['full_name'];
                       // $nationality = $_POST['nationality'];
                       // $id_number = $_POST['id_number'];

                       
                       $machine_type = $_POST['machine_type'];

                        $phone_number = $_POST['phone_number'];
                      //  $phone_number_2 = $_POST['phone_number_2'];
                      $insurance_type = $_POST['insurance_type'];

                      $description = $_POST['description'];
                      $cotracts_id = $_POST['cotracts_id'];

                      
                      
                        $whatsapp_num = $_POST['whatsapp_num'];
                        $nearest_road = $_POST['nearest_road'];
                        $network = $_POST['network'];
                        $job = $_POST['job'];

                        
                        

                        
                        $email = $_POST['email'];
                       // $tax_file = $_POST['tax_file'];
                        $address = $_POST['address'];
                     //   $recommendation = $_POST['recommendation'];
                     //   $code_number = $_POST['code_number'];
                       // $years_in_field=$_POST['years_in_field'];
                       // $owned_machines=$_POST['owned_machines'];

                        // @$agent = $_POST['agent'];
                        // if($agent == "full_authority_agent"){
                        //     $full_authority_agent= true;
                        //     $limit_authority_agent= false;
                        // }else{
                        //     $full_authority_agent= false;
                        //     $limit_authority_agent= true;
                        // }
                    //    $date_of_foundation=$_POST['date_of_foundation'];
                    //    $registration_number=$_POST['registration_number'];
                     //   $file_tax_number=$_POST['file_tax_number'];
                     //   $expatriate_date=$_POST['expatriate_date'];
                        // @$compressor=$_POST['compressor'];
                        // if($compressor == "on")
                        // $compressor = true; else $compressor = false;
                        // @$generator_tower_light=$_POST['generator_tower_light'];
                        // if($generator_tower_light == "on")
                        // $generator_tower_light = true; else $generator_tower_light = false;
                        // @$welding_machine=$_POST['welding_machine'];
                        // if($welding_machine == "on")
                        // $welding_machine = true; else $welding_machine = false;
                        // @$cranes  =$_POST['cranes']; 
                        // if($cranes == "on")
                        // $cranes = true; else $cranes = false;
                        // @$heavy_trucks=$_POST['heavy_trucks'];
                        // if($heavy_trucks == "on")
                        // $heavy_trucks = true; else $heavy_trucks = false;
                        // @$excavation_equipment =$_POST['excavation_equipment'];
                        // if($excavation_equipment == "on")
                        // $excavation_equipment = true; else $excavation_equipment = false;
                        // @$pipeline_equipment =$_POST['pipeline_equipment'];
                        // if($pipeline_equipment == "on")
                        // $pipeline_equipment = true; else $pipeline_equipment = false;
                        // @$civil_equipment =$_POST['civil_equipment'];
                        // if($civil_equipment == "on")
                        // $civil_equipment = true; else $civil_equipment = false;
                        // @$mining_equipment =$_POST['mining_equipment']; 
                        // if($mining_equipment == "on")
                        // $mining_equipment = true; else $mining_equipment = false;
                        // @$agricultural_equipment =$_POST['agricultural_equipment'];
                        // if($agricultural_equipment == "on")
                        // $agricultural_equipment = true; else $agricultural_equipment = false;
                        // @$facility=$_POST['facility']; 
                        // if($facility == "on")
                        // @$facility = true; else @$facility = false;
                        // @$light_vehicles_trucks =$_POST['light_vehicles_trucks'];
                        // if($light_vehicles_trucks == "on")
                        // @$light_vehicles_trucks = true; else @$light_vehicles_trucks = false;
                     //   @$air_compressor_selection =$_POST['air_compressor_selection']; 
                        //@$generator_tower_light_selection=$_POST['generator_tower_light_selection']; 
                     //   @$welding_machine_selection=$_POST['welding_machine_selection'];
                      //  @$excavator_selection =$_POST['excavator_selection']; 
                        @$brand_id=$_POST['brand_id']; 
                        // if(@$brand_id == "hand")
                        //   @$brand_id = $_POST['brand_idhide'];
                        @$size_id=$_POST['size_id']; 
                        // if(@$size_id == "hand")
                        //   @$size_id = $_POST['size_idhide'];
                        // @$model_id=$_POST['model_id'];
                        // if($model_id == "hand")
                        //   @$model_id = $_POST['model_idhide'];
                        @$year_of_manufacture_id=$_POST['year_of_manufacture_id'];
                        if(@$year_of_manufacture_id == "hand")
                          $year_of_manufacture_id = $_POST['year_of_manufacture_idhide'];
                        // @$monthly_rental_id=$_POST['monthly_rental_idhide']." ".$_POST['monthly_rental_id']; 
                        // @$condition_id=$_POST['condition_id'];
                        // if($condition_id == "hand")
                        //   $condition_id = $_POST['condition_idhide'];
                        @$state_id=$_POST['state_id']; 
                        if($state_id == "hand")
                          $state_id = $_POST['state_idhide'];
                        // @$advance_id =$_POST['advance_id']; 
                        // if($advance_id == "hand")
                        //   $advance_id = $_POST['advance_idhide'];
                        @$category_id=$_POST['category_id'];
                        if($category_id == "hand")
                          $category_id = $_POST['category_idhide'];

                        // @$clearances_id = $_POST['clearances_idhide']." ".$_POST['clearances_id'];

                        // @$maintenance_id = $_POST['maintenance_id'];
                        // if($maintenance_id == "hand")
                        //   $maintenance_id = $_POST['maintenance_idhide'];
                        // if($maintenance_id == "handx")
                        //   $maintenance_id = " by equipation with ".$_POST['maintenance_idhide']." detucted ";

                        @$hair_operator_id=$_POST['hair_operator_id'];
                        if($hair_operator_id == "hand")
                          $hair_operator_id = $_POST['hair_operator_idhide'];
                        // @$availability_id = $_POST['availability_id'];
                        // if($availability_id == "hand")
                        //   $availability_id = $_POST['availability_idhide'];
                        // if($availability_id == "handx")
                        //   $availability_id = " after request before ".$_POST['availability_idhide']." day ";

                        // @$gorvernment_fees_id = $_POST['gorvernment_fees_id'];
                        // if($gorvernment_fees_id == "hand")
                        //   $gorvernment_fees_id = $_POST['gorvernment_fees_idhide'];
                        // if($gorvernment_fees_id == "handx")
                        //   $gorvernment_fees_id = "by equipation with ".$_POST['gorvernment_fees_idhide']." detucted";

                        // @$hourly_work_id = $_POST['hourly_work_id'];
                        // if($hourly_work_id == "hand")
                        //   $hourly_work_id = $_POST['hourly_work_idhide'];
                        // if($hourly_work_id == "handx")
                        //   $hourly_work_id = " not execeed ".$_POST['hourly_work_idhide']." hrs per day ";


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

  

      <div class="container">

       <form action="run_request.php" method="post" role="form">

        <div class="row mt-5">

          <h3>  بيانات المعدة </h3>

          <div class="col-md-3 form-group">
                نوع المعدة:  <br/>
                
                  <select class="form-control mr-1" name="machine_type" id="machine_type"  required>
                    <option value="" disabled selected> -- اختار نوع المعدة  -- </option>
                    <option value="حفار"> حفار </option>
                    <option value="لوبد">  لوبد </option>
                    <option value="لودر">  لودر </option>
                    <option value="دوزر">  دوزر </option>
                    <option value="فوركلفت">  فوركلفت </option>
                    <option value="درداقة">  درداقة </option>
                    <option value="كرين">  كرين </option>
                    <option value="تنكر ماء ">  تنكر ماء </option>
                    <option value="قريدر">  قريدر </option>
                    <option value=" تانكر جاز">   تانكر جاز </option>
                    <option value="سطحة">  سطحة </option>
                    <option value="مولد">  مولد </option>
                    <option value="ماكينة تخريم">  ماكينة تخريم </option>


                  </select>
                </div>


                <div class="form-group col-md-3">
        <label>     مقاس المعدة </label>
         <input type="text" class="form-control" id="inputDate" name="size_id"  required />
         
      </div>

      <div class="form-group col-md-3">
        <label>     ماركة المعدة </label>
         <input type="text" class="form-control" id="inputDate" name="brand_id"  required />
         
      </div>
      <div class="form-group col-md-3">
        <label>      سنة الصنع </label>
        <input type="text" class="form-control " id="year_of_manufacture_idhide" name="year_of_manufacture_idhide" placeholder="ادخل سنة الصنع" >
         
      </div>

          <!-- <div class="col-md-4 form-group  mt-3 mt-md-0">
              <input type="text" id="full_name" name="full_name" class="form-control" placeholder="إسم طالب الخدمة رباعي" required>
          </div> -->

           <!-- <div class="col-md-4 form-group  mt-3 mt-md-0">
              <input type="text" id="nationality" name="nationality" class="form-control" placeholder="جنسية طالب الخدمة" required>
          </div> -->

           <!-- <div class="col-md-4 form-group  mt-3 mt-md-0">
              <input type="number" id="id_number" name="id_number" class="form-control" placeholder=" رقم إثبات الشخصية "> <font color="red"> * اختياري </font> 
          </div> -->


        </div>

        <div class="row">

        <div class="form-group col-md-4">
            <label>  الترخيص </label>
            <select class="form-control" id="" name="">
              <option value="" disabled selected> </option>
              <option value="ترخيص ساري ">  ترخيص ساري  </option>
              <option value="ترخيص منتهي ">  ترخيص منتهي  </option>
              <option value="غير مرخصة ">   غير مرخصة  </option>

            </select>
          </div>

          <div class="form-group col-md-4">
            <label>  التأمين </label>
            <select class="form-control" id="insurance_type" name="insurance_type">
              <option value="" disabled selected> </option>
              <option value=".تأمين شامل  ">  .تأمين شامل    </option>
              <option value=".تأمين هندسي  ">   .تأمين هندسي  </option>
              <option value=".تأمين إجباري   ">   .تأمين إجباري   </option>
              <option value=".غير مؤمنة    "> .غير مؤمنة   </option>


            </select>
          </div>

      <div class="col-md-4 form-group  mt-3 mt-md-0"> 
        
      <label>  إضافة أي ملحقات مع المعدة  </label>

      <input type="text" id="description" name="description" class="form-control" placeholder="   
إضافة أي ملحقات مع المعدة "> <font color="red">  </font> 
          </div> 

          <!-- <div class="col-md-4 form-group">
              <input type="number" id="phone_number" name="phone_number" class="form-control" placeholder=" رقم الموبايل " required>
          </div>

          <div class="col-md-4 form-group  mt-3 mt-md-0">
              <input type="text" id="phone_number_2" name="phone_number_2" class="form-control" placeholder=" رقم الموبايل 2 "> <font color="red"> * اختياري </font> 
          </div> -->

          <!-- <div class="col-md-4 form-group">
              <input type="number" id="whatsapp_num" name="whatsapp_num" class="form-control" placeholder=" رقم الواتساب " required>
          </div> -->
          
        </div>

        <div class="row">


        <div class="col-md-3 form-group mt-3 mt-md-0">
              مجال العمل <br/>
                  <select class="form-control mr-1" name="work_field" id="work_field" onchange="select_work_field();"  required>
                    <option disabled selected>  </option>
                    <option> التعدين </option>
                    <option>  الاسمنت </option>
                    <option>  الزراعة </option>
                    <!-- <option value="hand">  ادخال يدوي </option> -->
                  </select>

                  <!-- <input id="work_fieldhide" name="work_fieldhide" type="text" class="form-control" placeholder=" ادخل مجال العمل  يدويا " style="display: none;"> -->
          </div>


          <div class="form-group col-md-3">
          <label> مدة العقد:  </label>
          <select class="form-control" id="cotracts_id" name="cotracts_id" onchange="select_contracts();">
            <option value="" disabled selected>  </option>
            <option> لا يوجد قيد </option>
            <option> عقود طويلة (لا تقل عن 12 شهر) </option>
            <option> عقود متوسطة (لا تقل عن 3 شهور)  </option>
            <option> عقود قصيرة (لا تزيد عن شهر)  </option>
            <option value="hand"> اضافة قيد جديد </option>
          </select>
        <input  id="cotracts_idhide" name="cotracts_idhide" type="text" class="form-control" placeholder="حدد القيد" style="display: none;">
        </div>


        <div class="form-group col-md-3">
          <label> المكان </label>
          <select class="form-control" id="state_id" name="state_id" onchange="select_state();">
            <option value="" disabled selected>  </option>
            <option> لا يوجد قيود </option>
            <option> داخل السودان فقط </option>
            <option> كل ولايات السودان عدا ... </option>
            <option> ولاية محددة .... </option>
            <option value="hand"> اضافة قيد مكان جديد </option>
          </select>
        <input type="text" id="state_idhide" name="state_idhide" class="form-control" placeholder="حدد الولاية" style="display: none;">
        </div>

<!-- 
        <div class="col-md-4 form-group">
            <input type="email" id="email" name="email" class="form-control" placeholder=" البريد الالكتروني " required>
        </div>

        <div class="col-md-4 form-group">
            <input type="number" id="tax_file" name="tax_file" class="form-control" placeholder=" الرقم الضريبي ">  <font color="red"> * اختياري </font> 
        </div>

         <div class="col-md-4 form-group">
            <input type="text" id="address" name="address" class="form-control" placeholder=" العنوان الدائم " required>
        </div>
           -->
        </div>

        <div class="row">


        <div class="form-group col-md-4">
          <label> تعيين المشغلين  </label>
            <select class="form-control mr-1" id="hair_operator_id" name="hair_operator_id" onchange="select_hair_operator();" required>
               <option value="" disabled selected>  </option>
               <option> تعيين بواسطة إكوبيشن </option>
               <option> تعيين بواسطتي </option>
               <option value="hand"> إضافة قيد جديد </option>
             </select>
        <input id="hair_operator_idhide" name="hair_operator_idhide" type="text" class="form-control" placeholder=" حدد القيد  " style="display: none;">
        </div>


        <div class="form-group col-md-3">
          <label>  الجهات المفضلة في العمل: </label>
          <select class="form-control" id="category_id" name="category_id" onchange="select_catogry();">
            <option value="" disabled selected> </option>
            <option> لا قيود في العمل    </option>
            <option>  العمل مع الشركات فقط </option>
            <!-- <option  value="hand"> اضافة قيد جديد </option> -->
          </select>
        <input type="text" id="category_idhide" name="category_idhide" class="form-control" placeholder="حدد القيد" style="display: none;">
        </div>

         <!-- <div class="col-md-4 form-group">
            <input type="text" id="recommendation" name="recommendation" class="form-control" placeholder=" التزكية  " required>
        </div> -->

        <!-- <div class="col-md-4 form-group">
             <input type="text" id="code_number" name="code_number" class="form-control" placeholder=" رقم سجل العميل " required>
        </div> -->

       <!-- <div class="col-md-4 form-group">
             <input type="text" id="" name="name" class="form-control" placeholder=" الصفة  " required>
        </div>   -->

          
        </div>

        <div class="row">

          <!-- <div class="form-group col-md-4">
            <input type="number" class="form-control" id="years_in_field" name="years_in_field" placeholder="ادخل عدد السنوات في المجال" />
          </div> -->

          <!-- <div class="form-group col-md-4">
            <input type="number" class="form-control" id="owned_machines" name="owned_machines" placeholder="ادخل عدد الآليات المملوكة" />
          </div> -->

         <!-- <div class="form-group col-md-4">
            <label> وكيل / وسيط </label>
            <select class="form-control" id="agent" name="agent">
              <option value="" disabled selected> -- اختار -- </option>
              <option> وكيل بتفويض كامل </option>
              <option> وكيل بتفويض محدود </option>
            </select>
          </div> -->

        </div>

        <div class="row">
<!-- 
        <div class="form-group col-md-4">
          <label> تاريخ التفويض </label>
            <input type="date" class="form-control" id="date_of_foundation" name="date_of_foundation"/>
        </div>

         <div class="form-group col-md-4">
          <label> رقم السجل </label>
            <input type="text" class="form-control" id="registration_number" name="registration_number" placeholder="ادخل رقم السجل" />
        </div> -->

         <!-- <div class="form-group col-md-4">
          <label> رقم الملف الضريبي </label>
            <input type="text" class="form-control" id="file_tax_number" name="file_tax_number" placeholder="رقم الملف الضريبي" />
        </div> -->

        </div>
        <div class="row">
        <!-- <div class="form-group col-md-4">
          <label> تاريخ الصلاحية </label>
            <input type="date" class="form-control" id="expatriate_date" name="expatriate_date"/>
        </div> -->
        </div>


        <div class="row mt-5">

          <h3>  بيانات موقع الألية </h3>

          <!-- <div class="form-group col-md-4">
           <label> فئة الآلية  </label><br/>
           <input type="checkbox" name="compressor"> كمبروسرات هواء <br/>
           <input type="checkbox" name="generator_tower_light"> مولدات طاقة وتور لايتس <br/>
           <input type="checkbox" name="welding_machine"> مكنات لحام <br/>
           <input type="checkbox" name="cranes"> كرينات والروافع <br/>
           <input type="checkbox" name="heavy_trucks"> شاحنات ثقيلة <br/>
           <input type="checkbox" name="excavation_equipment"> آليات الطرق والحفر <br/>
           <input type="checkbox" name="pipeline_equipment"> آليات خطوط البترول <br/>
           <input type="checkbox" name="civil_equipment"> آليات المقاولات المدنية <br/>
           <input type="checkbox" name="mining_equipment"> آليات التعدين <br/>
           <input type="checkbox" name="agricultural_equipment"> آليات زراعية <br/>
           <input type="checkbox" name="facility"> مساكن واصول متحركة <br/>
           <input type="checkbox" name="light_vehicles_trucks"> مركبات متوسطة وخفيفة <br/>

           
         </div> -->

         <!-- <div class="form-group col-md-4">
           <label> نوع الآلية </label><br/>

          <label> كمبروسرات الهواء </label>
          <select class="form-control mr-1" id="air_compressor_selection" name="air_compressor_selection"  >
              <option value="" disabled selected> -- اختار -- </option>
              <option value="fixed"> ثابت </option>
              <option value="mobile"> متحرك </option>
           </select> 

           <label> مكينات لحام </label>
          <select class="form-control mr-1" id="welding_machine_selection" name="welding_machine_selection"  >
              <option value="" disabled selected> -- اختار -- </option>
               <option value="fixed"> ثابت </option>
              <option value="mobile"> متحرك </option>
           </select> 

        </div> -->

          <div class="form-group col-md-4">
          <!-- <label> مولدات كهرباء وتور لايتس </label>
          <select class="form-control mr-1" id="generator_tower_light_selection" name="generator_tower_light_selection"  >
              <option value="" disabled selected> -- اختار -- </option>
              <option value="soundproof"> كاتم صوت </option>
              <option value="open"> مفتوح  </option>
            </select>   -->

          <!-- <label>اليات الطرق والحفر</label><br/>
          <select class="form-control mr-1" id="excavator_selection" name="excavator_selection" >
              <option value="" disabled selected> -- اختار -- </option>
              <option value="dozer"> دوزر </option>
              <option value="grader"> قريدر </option>
            </select> -->


           <!-- <label> ماركة الآلية  </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="brand_id" name="brand_id" onchange="select_brand();">
               <option value="" disabled selected> -- اختار -- </option>
               <option> كات </option>
               <option> JCB </option>
               <option> Atlas Capco </option>
               <option> HYUNDAI </option>
               <option> DOOSAN </option>
               <option value="hand"> Entry new brand </option>
             </select>
             </div>
             <input type="text" class="form-control
             " id="brand_idhide" name="brand_idhide" placeholder=" ادخل مقاس الآلية" style="display: none;">
         </div> -->

          <!-- <div class="form-group col-md-4">
           <label> مقاس الآلية </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="size_id" name="size_id" onchange="select_size();">
               <option value="" disabled selected> -- اختار -- </option>
               <option> 250 CFM ( كمبروسسر ) </option>
               <option> 2000 KVA ( مولد ) </option>
               <option> 220 ( حفار ) </option>
               <option> D9R ( دوزر ) </option>
               <option> 160أ ( قريدر ) </option>
               <option value="hand"> ادخال يدوي </option>
             </select>
             </div>
             <input type="text" class="form-control
             " id="size_idhide" name="size_idhide" placeholder="ادخل مقاس الالية" style="display: none;" />
         </div> -->
<!-- 
            <div class="form-group col-md-4">
           <label>  موديل الآلية </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="model_id" name="model_id"  onchange="select_model();">
               <option value="" disabled selected> -- اختار -- </option>
               <option> HX225 </option>
               <option> SD25 </option>
               <option value="hand"> ادخال موديل جديد </option>
             </select>
             </div>
             <input type="text" class="form-control
             " id="model_idhide" name="model_idhide" placeholder=" ادخال موديل الآلية" style="display: none;">
         </div> -->
<!-- 
         <div class="form-group col-md-4">
           <label>   سنة صنع الآلية </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="year_of_manufacture_id" name="year_of_manufacture_id" onchange="select_year();">
               <option value="" disabled selected> -- اختار -- </option>
               <option> 2022 </option>
               <option> 2023 </option>
               <option value="hand"> ادخل سنه الصنع </option>
             </select>
             </div>
             <input type="text" class="form-control " id="year_of_manufacture_idhide" name="year_of_manufacture_idhide" placeholder="ادخل سنه الصنع" style="display: none;">
         </div> -->

      </div>

      <div class="row">

          <div class="form-group col-md-4">
           <label>  الولاية </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
           <select class="form-control mr-1" id="state_id" name="" required>
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

         <div class="col-md-4 form- mt-3 mt-md-0">
              <br/>
            <input type="text" class="form-control" name="address" id="address" placeholder="   اقرب مدينة    " required>
          </div>

          <div class="col-md-4 form- mt-3 mt-md-0">
            <br/>
            <input type="text" class="form-control" name="nearest_road" id="nearest_road" placeholder="    مسافة أقرب طريق معبَّد    " required>
          </div>

          <div class="col-md-4 form- mt-3 mt-md-0">
              <label>  توفر الشبكة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="network" required>
               <option value="" disabled selected> -- حدد نوع الشبكة -- </option>
               <option value="متاح"> متاح  </option>
               <option value="غير متاح"> غير متاح</option>
             </select>
           
           </div>

          </div>

        
        
      </div>





      <div class="row">

        <!-- <div class="form-group col-md-4">
          <label> المقدم </label>
          <select class="form-control" id="advance_id" name="advance_id" onchange="select_advance();">
            <option value="" disabled selected> -- حدد -- </option>
            <option> لا يشترط </option>
            <option> يشترط ( نسبة XX% من قيمة العقد ) </option>
            <option> يشترط كامل الايجار </option>
            <option> مؤخؤ ( لامانع بعد استلام الدفعيات ) </option>
            <option value="hand"> اضافة شريط جديد </option>
          </select>
        <input type="text" id="advance_idhide" name="advance_idhide" class="form-control" placeholder="حدد الشرط / النسبة" style="display: none;">
        </div> -->

   
        
      </div>

      <div class="row">
       

        <!-- <div class="form-group col-md-4">
          <label> المخالصات  </label>
          <select class="form-control"  id="clearances_id" name="clearances_id" onchange="select_clearences()">
            <option value="" disabled selected> -- حدد -- </option>
            <option> بالدلار </option>
            <option> بالجنيه السوداني</option>
          </select>
        <input id="clearances_idhide" name="clearances_idhide" type="text" class="form-control" placeholder="حدد القيد / الرقم" style="display: none;">
        </div> -->

        <!-- <div class="form-group col-md-4">
          <label> الصيانة  </label>
            <select class="form-control mr-1" id="maintenance_id" name="maintenance_id" onchange="select_maintenance();" required>
               <option value="" disabled selected> -- حدد -- </option>
               <option> بواستطي </option>
               <option> بواستطة ايكيوبيشن مع خصم التكلفة الكاملة </option>
               <option value="handx"> بواستطة ايكيوبيشن مع تحمل نسبة XX% فقط </option>
               <option> بواستطة ايكيوبيشن دون خصم اي تكاليف </option>
               <option value="hand"> إضافة قيد جديد </option>
             </select>
        <input type="text" id="maintenance_idhide" name="maintenance_idhide" class="form-control" placeholder=" حدد القيد / النسبة " style="display: none;">
        </div> -->

     </div>


     <br/><h3 for="textAreaRemark">بيانات العميل </h3>


     <div class="row">

<div class="col-md-4 form-">
  <label></label>
  <input type="text" name="full_name" class="form-control" id="full_name" placeholder="   الاسم  ثلاثي" required>
</div>

<div class="col-md-4 form-">
  <label></label>
  <input type="text" name="phone_number" class="form-control" id="phone" placeholder="   رقم الهاتف  مثال 00249123000000" required>
</div>

<div class="col-md-4 form-">
  <label></label>
  <input type="text" name="whatsapp_num" class="form-control" id="whatsapp_num" placeholder="    رقم الواتساب  مثال 00249123000000" required>
</div>

</div>



      <div class="row">

      <div class="col-md-4 form- mt-3 mt-md-0">
                  <label></label>
                  <input type="text" class="form-control" name="email" id="email" placeholder=" الايميل " required>
                </div>

                <div class="col-md-4 form- mt-3 mt-md-0">
                <lable>   نوع العلاقة بالموقع </lable> 
                <select class="form-control mr-1" name="job" id="job" onchange="" required>
                <option value="مالك"> مالك   </option>
                <option value="شريك"> شريك </option>
                <option value="مدير"> مدير </option>
                <option value="موظف"> موظف </option>
                <option value="مشرف"> مشرف </option>
                <option value="وكيل"> وكيل </option>
                <option value="وسيط"> وسيط </option>
                </select> 
                  </div>

              <div class="col-md-4 form-">
                <lable> الجهة التابع لها </lable> 
                <select class="form-control mr-1" name="work_for" id="work_for" onchange="select_side();" required>
                <option value="company"> شركة </option>
                <option value="individual"> فرد </option>
                </select>  
                <input id="sidehide" type="text" name="company_name" class="form-control" placeholder=" ادخل اسم الشركة يدوي " style="display: none;" />
              </div>  



              <div class="col-md-4 form- mt-3 mt-md-0">
              <lable> هل  سبق لك العمل معنا </lable> 
                <select class="form-control mr-1" name="previous" id="previous" onchange="select_wwus();" required>
                <option value="yes"> نعم </option>
                <option value="no"> لا </option>
                </select>

               <input id="wwushide" type="text" class="form-control" placeholder=" في اي موقع عملت معنا " style="display: none;" />
               <!-- required style="display:none" -->
               
              

              </div>


              <div class="col-md-4 form- mt-3 mt-md-0">
              <div class="form-">
              <label for="exampleFormControlSelect2">طريقة التعرف علينا</label>
              <select  class="form-control" name="know" id="exampleFormControlSelect2">
                <option value="media"> الفيسبوك </option>
                <option value="media"> التويتر </option>
                <option value="media"> الانستغرام </option>
                <option value="friend"> عن طريق صديق </option>
                <option value="advertisemen"> عن طريق الاعلانات  </option>
                <option value="other">  اخري  </option>
              </select>
              </div>
             </div>

      </div>

              <div class="text-center"><button type="submit" name="send" style="background-color:orange;border-radius:20px;padding:10px;"> إرسال طلب </button></div>
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