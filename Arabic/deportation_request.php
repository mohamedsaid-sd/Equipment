<!DOCTYPE html>
<html dir="rtl">

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

        <i class="bi bi-envelope"></i> <a href="mailto:info@equipation.sd">info@equipation.sd</a>
        <i class="bi bi-phone"></i> 249912322447


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
          <h2> طلب ترحيل  </h2>
         </div>
      </div>

  

      <div class="container">
        <div class="row mt-5">

   

          <div class="col-lg-12 mt-5 mt-lg-0">

            <form action="deportation_request.php" method="post" role="form" enctype="multipart/form-data">

               <div class="my-3">
                <div class="loading"></div>
                <div class="error-message"></div>
                <div class="sent-message">
                  <?php

                      // sending form :
                      if(isset($_POST['send_form'])){

                     $machine=$_POST['machine']; 
                     if($machine == "hand")
                        $machine=$_POST['machinehide']; 
                     
                  

                     $comprossor = $_POST['comprossor'];
                     $generator = $_POST['generator'];
                     $welding_machine = $_POST['welding_machine'];
                     $excavator = $_POST['excavator'];
     
                     $lowbed = $_POST['lowbed'];
                     $trailer = $_POST['trailer'];
                     $truck = $_POST['truck'];
                   
     
     

                     $model = $_POST['model'];
                     if($model == "hand")
                        $machine=$_POST['modelhide']; 
                     
                     $wieght = $_POST['wieght'];
                     if($wieght == "hand")
                      $wieght = $_POST['wieghthide'];
                     
                 

                     //location detailes
                     $state     = $_POST['state'];
                     $zone      = $_POST['zone'];
                     $workplace = $_POST['workplace'];
                     $description=$_POST['description'];
                     $phone      = $_POST['phone'];
                     $mobile     = $_POST['mobile'];

                     $des_state     = $_POST['des_state'];
                     $des_zone      = $_POST['des_zone'];
                     $des_workplace = $_POST['des_workplace'];
                     $des_description=$_POST['des_description'];
                     $des_phone     = $_POST['des_phone'];
                     $des_mobile     = $_POST['des_mobile'];
                     $location=$_POST['location'];


                     // customers detailes 
                     $name    = $_POST['name'];
                     $email   = $_POST['email'];
                     @$job     = $_POST['job'];
                     $work_for= $_POST['work_for'];
                     if($work_for == "company"){
                        $work_for= $_POST['work_for'];
                     }
                     $previous= $_POST['previous'];
                     if($previous == "yes"){
                        $previous= $_POST['previous'];
                     }
                     $know     = $_POST['know'];
                     $whatsapp_num     = $_POST['whatsapp_num'];

                     
                     $Machinelicense = file_get_contents($_FILES['Machinelicense']['tmp_name']);
                     $MachinelicenseData = base64_encode($Machinelicense);

                     $Customercertificate = file_get_contents($_FILES['Customercertificate']['tmp_name']);
                     $CustomercertificateData = base64_encode($Customercertificate);

                     $Authorization = file_get_contents($_FILES['Authorization']['tmp_name']);
                     $AuthorizationData = base64_encode($Authorization);

                     $otherdocument = file_get_contents($_FILES['otherdocument']['tmp_name']);
                     $otherdocumentData = base64_encode($otherdocument);
                     


                     // echo "Data:".$machine.$size.$model.$wieght.$state.$zone.$workplace.$description.$phone.$mobile.$name.$email.$job.$work_for.$previous.$know;

$jayParsedAry = [
    "params" => [
          "args" => [
             "vals_list" => [
                "machine" => $machine, 
                "comprossor" => $comprossor, 
                "generator" => $generator, 
                "welding_machine" => $welding_machine, 
                "excavator" => $excavator, 
                "model" => $model, 
                "wieght" => $wieght, 
                "license" => $MachinelicenseData, 
                "certificate" => $CustomercertificateData, 
                "authorization" => $AuthorizationData, 
                "other" => $otherdocumentData, 
                "lowbed" =>$lowbed, 
                "trailer" => $trailer, 
                "truck" => $truck, 
                "state" => $state, 
                "zone" => $zone, 
                "workplace" => $workplace, 
                "company_name" => $work_for, 
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
                "know" => $know, 
                "whatsapp_num" => $whatsapp_num, 


                
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

 // echo $response;
      // convert response to array
    $array = json_decode(  $response , true );
    // loop the array to fetch item
    foreach ($array as $key => $value) {
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

                <h3 for="textAreaRemark">مطلوبات الترحيل</h3>

              <div class="row">

                <div class="col-md-4 form-group">
                  نوع الآلية المرحلة <br/>
                  <select class="form-control mr-1" name="machine" id="machine" onchange="select_type();" >
                    <option value="" disabled selected> -- اختار النوع  -- </option>
                    <option> دفار </option>
                    <option> دوزر </option>
                    <option> مولد </option>
                    <option value="hand"> يدوي </option>
                  </select>
                  <input id="machinehide" name="machinehide" type="text" class="form-control" placeholder=" ادخل نوع الالية يدوي "  style="display:none">
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                  مقاس الآلية  <br/>
                  <input type="number" step="0.01" id="comprossor" name="comprossor" class="form-control" placeholder="ادخل حجم كمبروسير ">
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                <label></label>
                <input type="number" step="0.01" id="generator" name="generator" class="form-control" placeholder="ادخل حجم مولد ">
                </div>

              </div>

              <div class="row">
                
              <div class="col-md-4 form-group mt-3 mt-md-0">
                <label></label>
                <input type="number" step="0.01" id="welding_machine" name="welding_machine" class="form-control" placeholder="ادخل حجم  مكنة لحام  ">
               </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
                <label></label>
                <input type="number" step="0.01" id="excavator" name="excavator" class="form-control" placeholder="ادخل حجم حفار">
              </div>


              <div class="col-md-4 form-group mt-3 mt-md-0">
                 ماركة الآلية المرحلة <br/>
                 <select class="form-control mr-1" name="model" id="model" onchange="select_brand();" >
                    <option disabled selected> --  اختار الماركة  -- </option>
                    <option> GAT </option>
                    <option> JCB </option>
                    <option> ATLAS CAPS </option>
                    <option value="hand"> يدوي </option>
                  </select>    
                  <input id="modelhide" name="modelhide" type="text" class="form-control" placeholder=" ادخل ماركة الالية يدوي "  style="display:none">
                </div>

              
                </div>

     <!-- Start Input Start Time -->
     <div class="row">

     <div class="col-md-4 form-group">
        <label>وزن الآلية (طن) </label>
       
          <select class="form-control mr-1" name="wieght" id="wieght" onchange="select_weight();" >
          <option value="" disabled selected> -- اختار الوزن -- </option>  
            <option value="10">10</option>
            <option value="12">20</option>
            <option value="15">30</option>
            <option value="hand">ادخال يدوي</option>
          </select>
          <input id="wieghthide" name="wieghthide" type="text" class="form-control" placeholder=" ادخل الوزن يدوي " style="display: none;" />
      </div>

   
      <div class="form-group col-md-4">
        <label>  مقاس الالية المطلوبة للترحيل </label>
        <input id="lowbed" name="lowbed" type="number" step="0.01" class="form-control" placeholder="ادخل مقاس اللوبيد"/>
      </div>

      <div class="form-group col-md-4">
      <label></label>
     <input id="truck" name="truck" type="number" step="0.01" class="form-control" placeholder="ادخل مقاس الدفار"/>
      </div>
  
  </div>

    <div class="form-group col-md-4">
     <label>   سطحة </label>
          <select class="form-control mr-1" name="trailer" id="trailer" >
            <option value="zs" disabled selected> --  اختار -- </option>
            <option value="zs">  zs </option>
            <option value="zy">  zy </option>
          
          </select>
    </div>
       


    <br/><h3 for="textAreaRemark">معلومات الموقع</h3>


      <div class="row">

        <div class="col-md-4 form-group">
          <label></label>
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

        <div class="col-md-4 form-group mt-3 mt-md-0">
          <label></label>
          <input type="text" class="form-control" id="zone" name="zone" placeholder=" المدينة " >
        </div>

        <div class="form-group col-md-4">
          <label></label>
          <input type="text" class="form-control" id="workplace" name="workplace" placeholder="الشركة " >
        </div>

      </div>

      <div class="row">
      
      <div class="col-md-4 form-group mt-3 mt-md-0">
        <label></label>
        <textarea class="form-control" id="validationTextarea" name="description" placeholder="  وصف كتابي دقيق للموقع " ></textarea>    
      </div>

      <div class="col-md-4 form-group mt-3 mt-md-0">
      <label></label>
      <input type="text" class="form-control" id="location" name="location" placeholder="  الموقع ">
      </div>
       
      <div class="form-group col-md-4">
      <label></label>
        <input type="number" class="form-control" id="phone" name="phone" placeholder=" رقم التواصل 1    مثال 00249123000000" >  
    </div>
         
   
         <div class="form-group col-md-4">
          <label></label>
         <input type="number" class="form-control" id="mobile" name="mobile" placeholder=" رقم التواصل 2   مثال 00249123000000" >  
         </div>

    </div>


          <div class="row">
        <div class="col-md-4 form-group">
          <h3 for="textAreaRemark"> جهة توصيل الآلية </h3>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="des_state" name="des_state" required>
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
        
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <label></label>
          <input type="text" class="form-control" id="zone" name="des_zone" placeholder=" المدينة " >
        </div>

        <div class="form-group col-md-4">
          <label></label>
          <input type="text" class="form-control" id="workplace" name="des_workplace" placeholder="   الشركة " >
        </div>

      </div>

      <div class="row">
      
      <div class="col-md-4 form-group mt-3 mt-md-0">
        <label></label>
        <textarea class="form-control" id="validationTextarea" name="des_description" placeholder="  وصف كتابي دقيق للموقع " ></textarea>    
      </div>
       
      <div class="form-group col-md-4">
        <label></label>  
        <input type="number" class="form-control" id="phone" name="des_phone" placeholder="    رقم التواصل 1   مثال 00249123000000" >  
      </div>
         
   
         <div class="form-group col-md-4">
          <label></label>
         <input type="number" class="form-control" id="mobile" name="des_mobile" placeholder="   رقم التواصل 2   مثال 00249123000000" >  
         </div>
              </div>
             
              <br/>
              <h3 for="textAreaRemark">بيانات العميل </h3>


              <div class="row">

                <div class="col-md-4 form-group">
                  <label></label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="  الاسم  ثلاثي" >
                </div>

                <div class="col-md-4 form-">
                  <label></label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="   رقم الهاتف  مثال 00249123000000" required>
                </div>

                <div class="col-md-4 form-">
                  <label></label>
                  <input type="text" name="whatsapp_num" class="form-control" id="whatsapp_num" placeholder="    رقم الواتساب  مثال 00249123000000" required>
                </div>               

              </div>

              <div class="row">

               <div class="col-md-4 form-group mt-3 mt-md-0">
                <label></label>
                  <input type="text" class="form-control" name="email" id="email" placeholder=" الايميل " >
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                <lable>   نوع العلاقة بالموقع </lable> 
                <select class="form-control mr-1" name="job" id="job" onchange="" required>
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
                <lable> الجهة  التابع لها </lable> 
                <select class="form-control mr-1" name="work_for" id="work_for" onchange="select_side();" >
                <option value="" disabled selected> -- اختار الجهة-- </option>
                <option value="company"> شركة </option>
                <option value="individual"> فرد </option>
                </select>  
                <input id="work_forhide" name="work_forhide" type="text" class="form-control" placeholder=" ادخل اسم الشركة يدوي " style="display: none;" />
              </div>

            </div>

            <div class="row">

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <lable> هل  سبق لك العمل معنا </lable> 
                <select class="form-control mr-1" name="previous" id="previous" onchange="select_wwus();" >
                <option value="yes" disabled selected> -- اختار الاجابة -- </option>
                <option value="yes"> نعم </option>
                <option value="no"> لا </option>
                </select>
               <input id="previoushide" name="previoushide" type="text" class="form-control" placeholder=" في اي موقع عملت معنا " style="display: none;" />
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <div class="form-group">
              <label for="exampleFormControlSelect2">طريقة التعرف علينا</label>
              <select  class="form-control" id="exampleFormControlSelect2" name="know">
                <option value="media"> الفيسبوك </option>
                <option value="media"> التويتر </option>
                <option value="media"> الانستغرام </option>
                <option value="friend"> عن طريق صديق </option>
                <option value="advertisemen">  الاعلانات  </option>
                <option value="other">  اخري  </option>
              </select>
              </div>
             </div>

              </div>



              <br>
              <br>
              <br>

              <div class="row">

              <div class="col-md-3 form-group">
        <label>  رخصة الآلة </label>
        <input type="file" name="Machinelicense" class="form-control">
      </div>
              

      <div class="col-md-3 form-group">
        <label>  شهادة العميل </label>
        <input type="file" name="Customercertificate" class="form-control">
      </div>
      <div class="col-md-3 form-group">
        <label>  الترخيص </label>
        <input type="file" name="Authorization" class="form-control">
      </div>
      <div class="col-md-3 form-group">
        <label>  ملفات اخري </label>
        <input type="file" name="otherdocument" class="form-control">
      </div>
      </div>
      <br>
              <br>
              <br>

              <div class="text-center"><button type="submit" name="send_form"> إرسال الطلب </button></div>
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