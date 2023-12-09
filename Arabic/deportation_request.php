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
    var type = document.getElementById("type").value;
      if(type == "hand"){
      document.getElementById("typehide").style.display = "block";
      }else{
      document.getElementById("typehide").value = "";
      document.getElementById("typehide").style.display = "none";
      }
   }

   // deal with machine brand
   function select_brand(){
    var type = document.getElementById("brand").value;
      if(type == "hand"){
      document.getElementById("brandhide").style.display = "block";
      }else{
      document.getElementById("brandhide").value = "";
      document.getElementById("brandhide").style.display = "none";
      }
   }

   // deal with machine weight
   function select_weight(){
   	 var type = document.getElementById("weight").value;
      if(type == "hand"){
      document.getElementById("weighthide").style.display = "block";
      }else{
      document.getElementById("weighthide").value = "";
      document.getElementById("weighthide").style.display = "none";
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
     var type = document.getElementById("side").value;
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

            <form action="deportation_request.php" method="post" role="form">

               <div class="my-3">
                <div class="loading"></div>
                <div class="error-message"></div>
                <div class="sent-message">
                  <?php

                      // sending form :
                      if(isset($_POST['send_form'])){
                        // success add form alert ...
                        echo "<div class='alert alert-success'>
                        <span class='icon'> <i class='fa fa-check-circle'></i></span>
                         <b> تم ارسال الطلب بنجاح يسعدنا دوما في شركة ايكيوبيشن استقبال طلباتكم طوال الوقت , سوف يقوم موظف شركة ايكيوبيشن بالرد عليك في اقرب وقت عن طريق رقم الهاتف او البريد الالكتروني المرسلين في الطلب ... شكرا لتفهمكم  </b> </div>";
                      }

                  ?>
                </div>
              </div>

                <h3 for="textAreaRemark">مطلوبات الترحيل</h3>

              <div class="row">
                <div class="col-md-4 form-group">
                  نوع الآليه المرحلة <br/>
                  <select class="form-control mr-1" name="type" id="type" onchange="select_type();" >
                    <option disabled selected> -- اختار النوع  -- </option>
                    <option> دفار </option>
                    <option> دوزر </option>
                    <option> مولد </option>
                    <option value="hand"> يدوي </option>
                  </select>
                  <input id="typehide" type="text" class="form-control" placeholder=" ادخل نوع الالية يدوي "  style="display:none">
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  مقاس الآليه المرحلة <br/>
                  <input type="text" class="form-control" placeholder=" ادخل المقاس يدوي  ">
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                 ماركة الآليه المرحلة <br/>
                 <select class="form-control mr-1" name="brand" id="brand" onchange="select_brand();" >
                    <option disabled selected> --  اختار الماركة  -- </option>
                    <option> GAT </option>
                    <option> JCB </option>
                    <option> ATLAS CAPS </option>
                    <option value="hand"> يدوي </option>
                  </select>    
                  <input id="brandhide" type="text" class="form-control" placeholder=" ادخل ماركة الالية يدوي "  style="display:none">
              
                </div>
               </div>
     <!-- Start Input Start Time -->
     <div class="row">

     <div class="col-md-4 form-group">
        <label>وزن الآلية (طن) </label>
       
          <select class="form-control mr-1" name="weight" id="weight" onchange="select_weight();" >
          <option value="" disabled selected> -- اختار الوزن -- </option>  
            <option value="10">10</option>
            <option value="12">20</option>
            <option value="15">30</option>
            <option value="hand">ادخال يدوي</option>
          </select>
          <input id="weighthide" type="text" class="form-control" placeholder=" ادخل الوزن يدوي " style="display: none;" />
        
        
      </div>

      <div class="form-group col-md-4">
        <label> اوراق الاليه المتوفرة </label>
          <select class="form-control mr-1" name="paper" id="paper" onchange="select_paper();" >
            <option value="" disabled selected> -- اختر الاوراق -- </option>
            <option value="1"> شهادة بحث </option>
            <option value="2"> شهادة وارد </option>
            <option value="3"> توكيل </option>
            <option value="hand"> اوراق اخري (يدوي) </option>
          </select>
          <input id="paperhide" type="text" class="form-control" placeholder=" ادخل الاوراق يدوي " style="display: none" />
      </div>

      <div class="form-group col-md-4">
        <label>  مقاس الالية المطلوبة للترحيل </label>
   
          <select class="form-control mr-1" name="size" id="size" onchange="select_size();" >
            <option value="" disabled selected> -- اختار المقاس -- </option>
            <option value="1"> لوبد</option>
            <option value="2"> سطحة </option>
            <option value="3"> دفار </option>
            <option value="hand"> ادخال يدوي </option>
          </select>

          <input id="sizehide" type="text" class="form-control" placeholder=" ادخل المقاس يدوي " style="display: none;" />
    
      </div>

      </div>


      <h3 for="textAreaRemark">معلومات الموقع</h3>


      <div class="row">
        <div class="col-md-4 form-group">
          مكان الآالية <br/>
          <input type="text" class="form-control" placeholder=" الولاية " >
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <br/>
          <input type="text" class="form-control"  placeholder=" المنطقة " >
        </div>

        <div class="form-group col-md-4">
          <br/>
          <input type="text" class="form-control" placeholder=" الموقع / الشركة " >
        </div>
      </div>

      <div class="row">
      
      <div class="col-md-4 form-group mt-3 mt-md-0">
        <textarea class="form-control" id="validationTextarea" placeholder="  وصف كتابي دقيق للموقع " ></textarea>    
      </div>
       
      <div class="form-group col-md-4">
           
        <input type="text" class="form-control" placeholder=" رقم التواصل 1 " >  
    </div>
         
   
         <div class="form-group col-md-4">
         <input type="text" class="form-control" placeholder=" رقم التواصل 2 " >  
         </div>
              </div>
             

              <h3 for="textAreaRemark">بيانات العميل </h3>


              <div class="row">

                <div class="col-md-4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="  الاسم " >
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="email" id="email" placeholder=" الايميل " >
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="job" id="job" placeholder=" الوظيفة " >
                  </div>

              </div>

              <div class="row">

              <div class="col-md-4 form-group">
                <lable> الجهه التابع لها </lable> 
                <select class="form-control mr-1" name="side" id="side" onchange="select_side();" >
                <option value="" disabled selected> -- اختار الجهه -- </option>
                <option value="company"> شركة </option>
                <option value=""> فرد </option>
                </select>  
                <input id="sidehide" type="text" class="form-control" placeholder=" ادخل اسم الشركة يدوي " style="display: none;" />
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <lable> هل  سبق لك العمل معنا </lable> 
                <select class="form-control mr-1" name="wwus" id="wwus" onchange="select_wwus();" >
                <option value="" disabled selected> -- اختار الاجابة -- </option>
                <option value="yes"> نعم </option>
                <option value="2"> لا </option>
                </select>

               <input id="wwushide" type="text" class="form-control" placeholder=" في اي موقع عملت معنا " style="display: none;" />
     
               
              

              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <div class="form-group">
              <label for="exampleFormControlSelect2">طريقة التعرف علينا</label>
              <select multiple class="form-control" id="exampleFormControlSelect2">
                <option> الفيسبوك </option>
                <option> التويتر </option>
                <option> الانستغرام </option>
                <option> عن طريق صديق </option>
                <option> عن طريق شركه  </option>
                <option>  اخري  </option>
              </select>
              </div>
             </div>

              </div>

              

              <div class="text-center"><button type="submit" name="send_form"> إرسال الطلب </button></div>
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