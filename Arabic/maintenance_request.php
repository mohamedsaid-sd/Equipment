
<!DOCTYPE html>
<html dir="rtl">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> طلب صيانة </title>
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
           // deal with location side
   function select_side(){
     var type = document.getElementById("work_for").value;
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
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
        <br/>
          <h2> طلب صيانة </h2>
       </div>
      </div>

  

      <div class="container">
        <div class="row mt-5">

   

          <div class="col-lg-12 mt-5 mt-lg-0">

            <form action="maintenance_request.php" enctype="multipart/form-data" method="post" role="form">

                <h3 for="textAreaRemark"> استماره طلب صيانه</h3>


                <div class="my-3">
                <div class="error-message"></div>
                <div class="sent-message">
                  
                  <?php
                  // sendding form 
    if(isset($_POST['Send-form'])){

 $Nearest_market=$_POST['Nearest_market'];
 $chassis=$_POST['chassis'];
 $company_name=$_POST['company_name'];
 //$date=$_POST['date'];
 $email=$_POST['email'];
// $engine=$_POST['engine'];
 $job=$_POST['job'];
 $km_read=$_POST['km_read'];
 $know=$_POST['know'];
 $main_type=$_POST['main_type'];
 //$manufacturing_year=$_POST['manufacturing_year'];
 $model=$_POST['model'];
 $name=$_POST['name'];
 $network=$_POST['network'];
 $phone=$_POST['phone'];
 $previous=$_POST['previous'];
 $date = date('Y-m-d H:i:s');

 //$request_no=$_POST['request_no'];
 $site_location=$_POST['site_location'];
 $site_nature=$_POST['site_nature'];
 $work_for=$_POST['work_for'];
 $engine=$_POST['engine'];
 $issue_description=$_POST['issue_description'];
 
 $fleet_operating_type=$_POST['fleet_operating_type'];
 $state_id=$_POST['state_id'];

 
 //$work_hour=$_POST['work_hour'];


      //  echo $Nearest_market."-".$chassis."-".$know."-".$company_name."-".$email;
      //  echo $job."-".$km_read."-".$phone."-".$manufacturing_year."-".$work_for;
      //  echo $network."-".$site_nature."-".$site_location."-".$previous."-".$model;


$jayParsedAry = [
  "params" => [
        "args" => [
           "vals_list" => [
              "Nearest_market" => $Nearest_market, 
              "chassis" => $chassis, 
              "company_name" => $company_name, 
              "date" => $date, 
              "email" => $email, 
              "engine" => $engine, 
              "job" =>$job , 
              "km_read" => $km_read, 
              "know" => $know, 
              "main_type" => $main_type, 
              "manufacturing_year" => "2020", 
              "model" => $model, 
              "name" => $name, 
              "network" => $network, 
              "phone" => $phone, 
              "previous" => "no", 
              "site_location" => $site_location, 
              "site_nature" =>  $site_nature,
              "work_for" => $work_for  ,
              "nearest_road"=> "North Road",
              "latitude"=>"1234",
              "longitude"=>"5432",
              "issue_description"=> $issue_description,
              "fleet_operating_type"=> $fleet_operating_type,
              "other_attachment"=> "",
              "state_id"=>$state_id
              
              ] 
        ] 
     ] 
]; 


                  // get the post value:
              
$done=json_encode($jayParsedAry);
//echo $done;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://equipation-equipation-odoo-com-stage-10590858.dev.odoo.com/apiV2/request.maintenance/create',
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

              <div class="row">
                <div class="col-md-4 form-group">
                  <input type="text" name="Type" class="form-control" id="Type" placeholder="نوع الاليه " required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="model" id="model" placeholder=" موديل الاليه   " required>
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="chassis" id="Sashinumber" placeholder="رقم الساشي  " required>
                  </div>

                  <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="engine" id="engine" placeholder="رقم المحرك  " required>
                  </div>

              </div>
     <!-- Start Input Start Time -->
     <div class="row">

     <div class="form-group col-md-4">
            <br/>
            <input type="text" class="form-control" name="km_read" id="km_read" placeholder="    عداد الساعات /الكيلومترات    " required>
      </div>

      <div class="form-group col-md-4">
        <label>  نوع الاصلاح المطلوب </label>
        <div class="d-flex flex-row justify-content-between align-items-center">
          <select class="form-control mr-1" id="main_type" name="main_type" required>
            <option value="" disabled selected> -- حدد نوع الاصلاح -- </option>
            <option value="مشكله مكانيكا"> مشكله مكانيكا</option>
            <option value="كهرباء">كهرباء</option>
            <option value="كهرباء">حداده</option>
            <option value="تكيف">تكيف</option>
            <option value="هيدروليك">هيدروليك</option>


          </select>
        
        </div>
      </div>


      <div class="col-md-4 form-group">
        <br/>
        <input type="text" name="site_location" class="form-control" id="site_location" placeholder="  موقع الاليه " required>
      </div>
    
     

      </div>


      <div class="row">
        

        <div class="form-group col-md-4">
            <label for="inputDate">سنه الصنع</label>
            <input type="date" class="form-control" id="inputDate" name="date" required />
          </div>

          <div class="form-group col-md-4">
        <label>    طبيعة عمل الآلية </label>
        <div class="d-flex flex-row justify-content-between align-items-center">
          <select class="form-control mr-1" id="fleet_operating_type" name="fleet_operating_type" required>
            <option value="" disabled selected> -- حدد نوع الاصلاح -- </option>
            <option value=" جردل"> جردل</option>
            <option value="جاك همر">جاك همر</option>


          </select>
        
        </div>
      </div>
      </div>
      

      <div class="form-group mt-3">
        <textarea class="form-control" name="issue_description" rows="5" placeholder="وصف المشكله " required></textarea>
      </div>

      
      <h3 for="textAreaRemark">بيانات الموقع </h3>

      <div class="row">
        <div class="col-md-4 form-group mt-3 mt-md-0">
            <br/>
            <input type="text" class="form-control" name="lastloc" id="Counter" placeholder=" اخر موقع عمل   " required>

            <label>    الولايه </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="state_id" name="state_id" required>
               <option value="" disabled selected> -- حدد  الولايه -- </option>
               <option value="ولاية الخرطوم">ولاية الخرطوم </option>
               <option value="ولاية الجزيرة">ولاية الجزيرة</option>
               <option value="ولاية البحر الأحمر">ولاية البحر الأحمر </option>
               <option value="ولاية كسلا">ولاية كسلا </option>
               <option value="ولاية القضارف">ولاية القضارف </option>
               <option value="ولاية سنار">ولاية سنار </option>
               <option value="ولاية النيل الأبيض">ولاية النيل الأبيض </option>
               <option value="ولاية النيل الأزرق">ولاية النيل الأزرق </option>
               <option value="الولاية الشمالية">الولاية الشمالية </option>
               <option value="ولاية نهر النيل">ولاية نهر النيل </option>
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
        <div class="form-group col-md-4">
           <label>  طبيعه الموقع </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="site_nature" required>
               <option value="" disabled selected> -- حدد طبيعة الموقع -- </option>
               <option value="جبال">جبال </option>
               <option value="أبار">أبار</option>
               <option value="مزرعه">مزرعه </option>
               <option value="منجم">منجم </option>
               <option value="مواقع مفتوحه">مواقع مفتوحه </option>
             </select>
           </div>
         </div>
   
         <div class="col-md-4 form-group mt-3 mt-md-0">
              <br/>
            <input type="text" class="form-control" name="city" id="site_location" placeholder="   اقرب مدينه    " required>
          </div>

          <div class="col-md-4 form-group mt-3 mt-md-0">
            <br/>
            <input type="text" class="form-control" name="Nearest_market" id="Nearest_market" placeholder="    مسافة أقرب طريق معبَّد    " required>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
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
             

             <h3 for="textAreaRemark">بيانات العميل </h3>


              <div class="row">

                <div class="col-md-3 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="   الاسم  ثلاثي" required>
                </div>

                <div class="col-md-3 form-group">
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="   رقم الهاتف  مثال 00249123000000" required>
                </div>

                <div class="col-md-3 form-group">
                  <input type="text" name="whats" class="form-control" id="phone" placeholder="    رقم الواتساب  مثال 00249123000000" required>
                </div>
                <div class="col-md-3 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="email" id="email" placeholder=" الايميل " required>
                </div>

                <div class="col-md-3 form-group mt-3 mt-md-0">
                    <lable>   نوع العلاقه بالموقع </lable> 
                <select class="form-control mr-1" name="job" id="job" onchange="" required>
                <option value="" disabled selected> -- اختار الجهه -- </option>
                <option value="مالك"> مالك   </option>
                <option value="شريك"> شريك </option>
                <option value="مدير"> مدير </option>
                <option value="موظف"> موظف </option>
                <option value="مشرف"> مشرف </option>
                <option value="وكيل"> وكيل </option>
                <option value="وسيط"> وسيط </option>

                </select> 
                  </div>

              </div>

              <div class="row">

              <div class="col-md-4 form-group">
                <lable> الجهه التابع لها </lable> 
                <select class="form-control mr-1" name="work_for" id="work_for" onchange="select_side();" required>
                <option value="" disabled selected> -- اختار الجهه -- </option>
                <option value="company"> شركة </option>
                <option value="individual"> فرد </option>
                </select>  
                <input id="sidehide" type="text" name="company_name" class="form-control" placeholder=" ادخل اسم الشركة يدوي " style="display: none;" />
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <lable> هل  سبق لك العمل معنا </lable> 
                <select class="form-control mr-1" name="previous" id="previous" onchange="select_wwus();" required>
                <option value="" disabled selected> -- اختار الاجابة -- </option>
                <option value="yes"> نعم </option>
                <option value="no"> لا </option>
                </select>

               <input id="wwushide" type="text" class="form-control" placeholder=" في اي موقع عملت معنا " style="display: none;" />
               <!-- required style="display:none" -->
               
              

              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <div class="form-group">
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

              
              <div class="my-3">
                <div class="loading"></div>
                <div class="error-message"></div>
                <div class="sent-message"></div>
              </div>
              <div class="text-center"><button type="submit" name="Send-form" > إرسال الطلب </button></div>
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