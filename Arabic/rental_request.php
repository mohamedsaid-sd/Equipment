<!DOCTYPE html>
<html dir="rtl">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> طلب تاجير  </title>
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
          <h2> طلب تاجير  </h2>
         </div>
      </div>

  

      <div class="container">
        <div class="row mt-5">

   

          <div class="col-lg-12 mt-5 mt-lg-0">

            <form action="rental_request.php" method="post" role="form">

                <h3 for="textAreaRemark">مطلوبات التاجير</h3>

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
                  $site_a=$_POST['site_a'];$site_b=$_POST['site_b'];$site_c=$_POST['site_c'];
                  $site_d=$_POST['site_d'];$site_e=$_POST['site_e'];$site_f=$_POST['site_f'];
                  $site_g=$_POST['site_g'];$site_g=$_POST['site_g'];$site_h=$_POST['site_h'];
                  $site_i=$_POST['site_i'];
                  $site_j=" اقرب مدينه ".$_POST['site_j'];
                  $site_k=" اقرب سوق ".$_POST['site_k'];
                  $site_l="اقرب طريق ".$_POST['site_l'];
                  @$note = $site_a." و ".$site_b." و ".$site_c." و ".$site_d." و ".$site_e." و ".$site_f." و ".$site_g." و ".$site_h." و ".$site_i." و ".$site_j." و ".$site_k." و ".$site_l; 
                  @$distance = $_POST['distance'];
                  @$state   = $_POST['state'];
                  @$region    = $_POST['region'];
                  @$work_field= $_POST['work_field']; 
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

                    // echo "Data:".$work_typ."-".$duration."-".$month_rent."-".$hour_num."-".$work_hours."-".$work_date."-".$note."-".$distance."-".$state."-".$site_age."-".$start_date."-".$name."-".$email."-".$job."-".$categ."-".$company."-".$work."-".$know;
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
              "region" => $region
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

 // echo $response;
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
                  <select class="form-control mr-1" name="work_typ" id="work_typ"  required>
                    <option value="" disabled selected> -- اختار النوع  -- </option>
                    <option value="bucket"> جردل </option>
                    <option value="jackhummer"> جاك همر </option>
                    <option value="both"> جردل + جاك همر </option>
                  </select>
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                  مدة العمل <br/>
                  <select class="form-control mr-1" name="duration" id="duration" onchange="select_period();" required>
                    <option value="" disabled selected> --  اختار   -- </option>
                    <option value="month"> شهر </option>
                    <option value="3month"> 3 شهور  </option>
                    <option value="year"> سنه </option>
                    <option value="hand">  يدوي </option>
                  </select>

                  <input id="durationhide" name="durationhide" type="text" class="form-control" placeholder=" ادخل المدة  يدويا " style="display: none;">

                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                    ساعات العمل <br/>
                  <select class="form-control mr-1" name="month_rent" id="month_rent" onchange="select_hour();"  required>
                    <option value="" disabled selected> -- اختار المدة  -- </option>
                    <option value="true"> ايجار بالشهر </option>
                    <option value="false"> ايجار بالساعة </option>
                  </select>

                  <input id="hour_num" name="hour_num" type="text" class="form-control" placeholder=" ادخل عدد  الساعات " style="display: none;">
                </div>

              </div>
     <!-- Start Input Start Time -->
     <div class="row">

     <div class="form-group col-md-4">
        <label>ساعات العمل اليومية </label>

          <select class="form-control mr-1" id="work_hours" name="work_hours" onchange="select_hourday();"  required >
            <option value="" disabled selected> -- اختر الساعات -- </option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="20">20</option>
            <option value="hand"> ادخال يدوي </option>
          </select>

          <input id="work_hourshide" name="work_hourshide" type="text" class="form-control" placeholder=" ادخل عدد الساعات يدوي "   style="display: none;">
        

      </div>

      <div class="form-group col-md-4">
        <label>  بداية العمل المتوقعة </label>
         <input type="date" class="form-control" id="inputDate" name="work_date"  required />
         
      </div>
      </div>

    <h3 for="textAreaRemark">بيانات الموقع</h3>


      <div class="row">
        <div class="col-md-4 form-group">
           مكان العمل <br/>
          <input type="text" id="state" name="state" class="form-control" id="location" placeholder="   الولاية "  required>
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <br/>
          <input type="text" class="form-control" name="region" id="region" placeholder="   المنطقة "  required>
        </div>

        <div class="form-group col-md-4">
          <br/>
            <input type="text" class="form-control" name="distance" id="distance" placeholder="   اقرب سوق "  required>
          </div>
      </div>

      <div class="row">
       
        <div class="col-md-4 form-group mt-3 mt-md-0">
              مجال العمل <br/>
                  <select class="form-control mr-1" name="work_field" id="work_field" onchange="select_work_field();"  required>
                    <option disabled selected> -- اختار المدة  -- </option>
                    <option> التعدين </option>
                    <option>  الاسمنت </option>
                    <option>  الزراعة </option>
                    <option value="hand">  ادخال يدوي </option>
                  </select>

                  <input id="work_fieldhide" name="work_fieldhide" type="text" class="form-control" placeholder=" ادخل مجال العمل  يدويا " style="display: none;">
          </div>

         <div class="form-group col-md-4">
           <label>  عمر الموقع </label>
             <select class="form-control mr-1" id="site_age" name="site_age" onchange="select_old();" required >
               <option value="" disabled selected> -- اختار عمر الموقع -- </option>
               <option value="new"> جديد </option>
               <option value="old"> قديم </option>
             </select>
             <span id="oldhide" style="display: none;">
              حدد تاريخ بداية العمل :  <br/>
             <input type="date" name="start_date" class="form-control" placeholder=" تاريخ بداية العمل " >
            </span>      
         </div>
              </div>


          <div class="row">

          <label> <b>جاهزيه الموقع : </b> </label>
          
          <div class="form-group col-md-4">
           <label> السكن </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_a" name="site_a" required >
               <option value="" disabled selected> -- حدد مستوي السكن -- </option>
               <option value="السكن ممتاز "> ممتاز </option>
               <option value="السكن جيد"> جيد </option>
               <option value="السكن عادي"> عادي </option>
             </select>
           </div>
         </div>


          <div class="form-group col-md-4">
           <label> الاعاشة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_b" name="site_b" required >
               <option value="" disabled selected> -- حدد مستوي الاعاشة -- </option>
               <option value="الاعاشة ممتازة"> ممتازة </option>
               <option value="الاعاشة جيدة"> جيدة </option>
               <option value="الاعاشة عادية"> عادية </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> الانترنت </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_c" name="site_c" required >
               <option value="" disabled selected> -- حدد توفر الانترنت -- </option>
               <option value="الانترنت متوفر"> متوفر </option>
               <option value="الانترنت غير متوفر"> غير متوفر </option>
             </select>
           </div>
         </div>
            
          </div>

       <div class="row">
            
        <div class="form-group col-md-4">
           <label> شبكة الاتصالات </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_d" name="site_d"  required>
               <option value="" disabled selected> -- حدد توفر الشبكة -- </option>
               <option value="شبكة الاتصالات متوفرة"> متوفرة </option>
               <option value="شبكة الاتصالات غير متوفرة"> غير متوفرة </option>
             </select>
           </div>
         </div>

         <div class="form-group col-md-4">
           <label>  الورشة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_e" name="site_e"  required>
               <option value="" disabled selected> -- حدد توفر الورشة -- </option>
               <option value="الورشة متوفرة"> متوفرة </option>
               <option value="الورشة غير متوفرة"> غير متوفرة </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> الكمبرسون </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_f" name="site_f" required >
               <option value="" disabled selected> -- هل يوجد كمبرسون -- </option>
               <option value="يوجد الكمبرسون"> يوجد </option>
               <option value="لا يوجد الكمبرسون"> لا يوجد </option>
             </select>
           </div>
         </div>

          </div>

          <div class="row">

          <div class="form-group col-md-4">
           <label> الجاز </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_g" name="site_g" required >
               <option value="" disabled selected> -- حدد توفر الجاز -- </option>
               <option value="الجاز متوفر"> متوفر </option>
               <option value="الجاز غير متوفر"> غير متوفر </option>
             </select>
           </div>
         </div>
            

           <div class="form-group col-md-4">
           <label> المياة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_h" name="site_h" required >
               <option value="" disabled selected> -- حدد توفر المياة   -- </option>
               <option value="المياة متوفرة"> متوفرة </option>
               <option value="المياة غير متوفرة "> غير متوفرة  </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> الكهرباء </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_i" name="site_i"  >
               <option value="" disabled selected> -- حدد توفر الكهرباء -- </option>
               <option value="الكهرباء متوفرة"> متوفرة </option>
               <option value="الكهرباء غير متوفرة"> غير متوفرة  </option>
             </select>
           </div>
         </div>
          </div>


          <div class="row">

            <div class="col-md-4 form-group mt-3 mt-md-0">
            <label> اقرب مدينة </label>
            <input type="text" name="site_j" class="form-control" placeholder="ادخل اقرب مدينة"  required/>
            </div>

            <div class="col-md-4 form-group mt-3 mt-md-0">
            <label> اقرب سوق </label>
            <input type="text" name="site_k" class="form-control" placeholder="ادخل اقرب سوق" required/>
            </div>

            <div class="col-md-4 form-group mt-3 mt-md-0">
            <label> اقرب طريق معبد </label>
            <input type="text" name="site_l" class="form-control" placeholder="ادخل  اقرب طريق معبد" required/>
            </div>                        
            
          </div>

             

                <h3 for="textAreaRemark">بيانات العميل </h3>


              <div class="row">

                <div class="col-md-4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="  الاسم "  required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="email" id="email" placeholder=" الايميل " required >
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="job" id="job" placeholder=" الوظيفة " required >
                  </div>

              </div>

              <div class="row">

              <div class="col-md-4 form-group">
                <lable> الجهه التابع لها </lable> 
                <select class="form-control mr-1" name="categ" id="categ" onchange="select_side();"  required>
                <option value="" disabled selected> -- اختار الجهه -- </option>
                <option value="company"> شركة </option>
                <option value="personal"> فرد </option>
                </select>  
                <input id="company" name="company" type="text" class="form-control" placeholder=" ادخل اسم الشركة يدوي " style="display: none;" />
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <lable> هل  سبق لك العمل معنا </lable> 
                <select class="form-control mr-1" name="work" id="work" onchange="select_wwus();" required >
                <option value="" disabled selected> -- اختار الاجابة -- </option>
                <option value="yes"> نعم </option>
                <option value="no"> لا </option>
                </select>

               <!-- <input id="wwushide" type="text" class="form-control" placeholder=" في اي موقع عملت معنا " style="display: none;" /> -->
               <!--   style="display:none" -->
               
              

              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <div class="form-group">
              <label for="exampleFormControlSelect2">طريقة التعرف علينا</label>
              <select multiple class="form-control" id="exampleFormControlSelect2" name="know">
                <option value="friend"> عن طريق صديق </option>
                <option value="social"> وسائل التواصل </option>
                <option value="tv"> التلفزيون </option>
                <option value="radio"> الراديو </option>
                <option value="ads"> الاعلانات  </option>
                <option value="other">  اخرى  </option>
              </select>
              </div>
             </div>

              </div>


              <div class="text-center"><button type="submit" name="Send-form"> إرسال الطلب </button></div>
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