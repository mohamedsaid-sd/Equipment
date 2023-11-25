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
     var type = document.getElementById("period").value;
      if(type == "hand"){
      document.getElementById("periodhide").style.display = "block";
      }else{
      document.getElementById("periodhide").value = "";
      document.getElementById("periodhide").style.display = "none";
      }
   }

   //deal with hour
   function select_hour(){
     var type = document.getElementById("hour").value;
      if(type == "hour"){
      document.getElementById("hourhide").style.display = "block";
      }else{
      document.getElementById("hourhide").value = "";
      document.getElementById("hourhide").style.display = "none";
      }
   }

  //deal with hour of day
   function select_hourday(){
     var type = document.getElementById("hourday").value;
      if(type == "hand"){
      document.getElementById("hourdayhide").style.display = "block";
      }else{
      document.getElementById("hourdayhide").value = "";
      document.getElementById("hourdayhide").style.display = "none";
      }
   }


    // deal with filed
    function select_field(){
     var type = document.getElementById("field").value;
      if(type == "hand"){
      document.getElementById("fieldhide").style.display = "block";
      }else{
      document.getElementById("fieldhide").value = "";
      document.getElementById("fieldhide").style.display = "none";
      }
   }


    // deal with old
    function select_old(){
     var type = document.getElementById("old").value;
      if(type == "old"){
      document.getElementById("oldhide").style.display = "block";
      }else{
      document.getElementById("oldhide").value = "";
      document.getElementById("oldhide").style.display = "none";
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
        <div class="section-title">
          <h2> طلب تاجير  </h2>
         </div>
      </div>

  

      <div class="container">
        <div class="row mt-5">

   

          <div class="col-lg-12 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">

                <h3 for="textAreaRemark">مطلوبات التاجير</h3>

            <div class="row">
               
                <div class="col-md-4 form-group">
                  نوع العمل <br/>
                  <select class="form-control mr-1" name="type" id="type" required>
                    <option disabled selected> -- اختار النوع  -- </option>
                    <option> جردل </option>
                    <option> جاك همر </option>
                    <option> جردل + جاك همر </option>
                  </select>
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                  مدة العمل <br/>
                  <select class="form-control mr-1" name="period" id="period" onchange="select_period();" required>
                    <option disabled selected> -- اختار المدة  -- </option>
                    <option> شهر </option>
                    <option> 3 شهور </option>
                    <option> سنه </option>
                    <option value="hand"> ادخال يدوي </option>
                  </select>

                  <input id="periodhide" type="text" class="form-control" placeholder=" ادخل المدة  يدويا " style="display: none;">

                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                    ساعات العمل <br/>
                  <select class="form-control mr-1" name="hour" id="hour" onchange="select_hour();" required>
                    <option disabled selected> -- اختار المدة  -- </option>
                    <option> ايجار بالشهر </option>
                    <option value="hour"> ايجار بالساعة </option>
                  </select>

                  <input id="hourhide" type="text" class="form-control" placeholder=" ادخل عدد  الساعات " style="display: none;">
                </div>

              </div>
     <!-- Start Input Start Time -->
     <div class="row">

     <div class="form-group col-md-4">
        <label>ساعات العمل اليومية </label>

          <select class="form-control mr-1" id="hourday" name="hourday" onchange="select_hourday();" required>
            <option value="" disabled selected> -- اختر الساعات -- </option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="20">20</option>
            <option value="hand"> ادخال يدوي </option>
          </select>

          <input id="hourdayhide" type="text" class="form-control" placeholder=" ادخل عدد الساعات يدوي " required style="display: none;">
        

      </div>

      <div class="form-group col-md-4">
        <label>  بداية العمل المتوقعة </label>
         <input type="date" class="form-control" id="inputDate" name="date" required />
         
      </div>
      </div>

    <h3 for="textAreaRemark">بيانات الموقع</h3>


      <div class="row">
        <div class="col-md-4 form-group">
           مكان العمل <br/>
          <input type="text" name="Type" class="form-control" id="location" placeholder="   الولاية " required>
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <br/>
          <input type="text" class="form-control" name="year" id="Counter" placeholder="   المنطقة " required>
        </div>

        <div class="form-group col-md-4">
          <br/>
            <input type="text" class="form-control" name="year" id="Counter" placeholder="   اقرب سوق " required>
          </div>
      </div>

      <div class="row">
       
        <div class="col-md-4 form-group mt-3 mt-md-0">
              مجال العمل <br/>
                  <select class="form-control mr-1" name="field" id="field" onchange="select_field();" required>
                    <option disabled selected> -- اختار المدة  -- </option>
                    <option> التعدين </option>
                    <option>  الاسمنت </option>
                    <option>  الزراعة </option>
                    <option value="hand">  ادخال يدوي </option>
                  </select>

                  <input id="fieldhide" type="text" class="form-control" placeholder=" ادخل مجال العمل  يدويا " style="display: none;">
          </div>

         <div class="form-group col-md-4">
           <label>  عمر الموقع </label>
             <select class="form-control mr-1" id="old" name="old" onchange="select_old();" required>
               <option value="" disabled selected> -- اختار عمر الموقع -- </option>
               <option value="new"> جديد </option>
               <option value="old"> قديم </option>
             </select>
             <span id="oldhide" style="display: none;">
              حدد تاريخ بداية العمل :  <br/>
             <input type="date" class="form-control" placeholder=" تاريخ بداية العمل " >
            </span>      
         </div>
              </div>


          <div class="row">

          <label> <b>جاهزيه الموقع : </b> </label>
          
          <div class="form-group col-md-4">
           <label> السكن </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد مستوي السكن -- </option>
               <option value="1"> ممتاز </option>
               <option value="2"> جيد </option>
               <option value="3"> عادي </option>
             </select>
           </div>
         </div>


          <div class="form-group col-md-4">
           <label> الاعاشة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد مستوي الاعاشة -- </option>
               <option value="1"> ممتازة </option>
               <option value="2"> جيدة </option>
               <option value="3"> عادية </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> الانترنت </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد توفر الانترنت -- </option>
               <option value="1"> متوفر </option>
               <option value="2"> غير متوفر </option>
             </select>
           </div>
         </div>
            
          </div>

       <div class="row">
            
        <div class="form-group col-md-4">
           <label> شبكة الاتصالات </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد توفر الشبكة -- </option>
               <option value="1"> متوفرة </option>
               <option value="2"> غير متوفرة </option>
             </select>
           </div>
         </div>

         <div class="form-group col-md-4">
           <label>  الورشة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد توفر الورشة -- </option>
               <option value="1"> متوفرة </option>
               <option value="2"> غير متوفرة </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> الكمبرسون </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- هل يوجد كمبرسون -- </option>
               <option value="1"> يوجد </option>
               <option value="2"> لا يوجد </option>
             </select>
           </div>
         </div>

          </div>

          <div class="row">

          <div class="form-group col-md-4">
           <label> الجاز </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد توفر الجاز -- </option>
               <option value="1"> متوفر </option>
               <option value="2"> غير متوفر </option>
             </select>
           </div>
         </div>
            

           <div class="form-group col-md-4">
           <label> المياة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد توفر المياة   -- </option>
               <option value="1"> متوفرة </option>
               <option value="2"> غير متوفرة  </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> الكهرباء </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد توفر الكهرباء -- </option>
               <option value="1"> متوفرة </option>
               <option value="2"> غير متوفرة  </option>
             </select>
           </div>
         </div>
          </div>


             

                <h3 for="textAreaRemark">بيانات العميل </h3>


              <div class="row">

                <div class="col-md-4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="  الاسم " required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="email" id="email" placeholder=" الايميل " required>
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="job" id="job" placeholder=" الوظيفة " required>
                  </div>

              </div>

              <div class="row">

              <div class="col-md-4 form-group">
                <lable> الجهه التابع لها </lable> 
                <select class="form-control mr-1" name="side" id="side" onchange="select_side();" required>
                <option value="" disabled selected> -- اختار الجهه -- </option>
                <option value="company"> شركة </option>
                <option value=""> فرد </option>
                </select>  
                <input id="sidehide" type="text" class="form-control" placeholder=" ادخل اسم الشركة يدوي " style="display: none;" />
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <lable> هل  سبق لك العمل معنا </lable> 
                <select class="form-control mr-1" name="wwus" id="wwus" onchange="select_wwus();" required>
                <option value="" disabled selected> -- اختار الاجابة -- </option>
                <option value="yes"> نعم </option>
                <option value="2"> لا </option>
                </select>

               <input id="wwushide" type="text" class="form-control" placeholder=" في اي موقع عملت معنا " style="display: none;" />
               <!-- required style="display:none" -->
               
              

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


              
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit"> إرسال الطلب </button></div>
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