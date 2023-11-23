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

        <a href="../English/index.html" class="linkedin" style="padding: 5px;margin: 5px;">Eng</i></i></a> | 
        <a href="../Arabic/index.html" class="linkedin" style="padding: 5px;margin: 5px;"">Ara</i></i></a>

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

            <form action="forms/contact.php" method="post" role="form">

                <h3 for="textAreaRemark"> استماره طلب صيانه</h3>

              <div class="row">
                <div class="col-md-4 form-group">
                  <input type="text" name="Type" class="form-control" id="Type" placeholder="نوع الاليه " required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="model" id="model" placeholder=" موديل الاليه   " required>
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="Sashinumber" id="Sashinumber" placeholder="رقم الساشي  " required>
                  </div>

              </div>
     <!-- Start Input Start Time -->
     <div class="row">

     <div class="form-group col-md-4">
            <br/>
            <input type="text" class="form-control" name="time" id="time" placeholder="  ساعات العمل اليوميه    " required>
      </div>

      <div class="form-group col-md-4">
        <label>  نوع الاصلاح المطلوب </label>
        <div class="d-flex flex-row justify-content-between align-items-center">
          <select class="form-control mr-1" id="typeoffix" name="typeoffix" required>
            <option value="" disabled selected> -- حدد نوع الاصلاح -- </option>
            <option value="1"> مشكله مكانيكا</option>
            <option value="2">كهرباء</option>
            <option value="3">حداده</option>
            <option value="4">تكيف</option>
            <option value="5">هيدروليك</option>


          </select>
        
        </div>
      </div>


      <div class="col-md-4 form-group">
        <br/>
        <input type="text" name="Type" class="form-control" id="location" placeholder="  موقع الاليه " required>
      </div>
    
     

      </div>


      <div class="row">
        

        <div class="form-group col-md-4">
            <label for="inputDate">سنه الصنع</label>
            <input type="date" class="form-control" id="inputDate" name="date" required />
          </div>
      </div>

      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="وصف المشكله " required></textarea>
      </div>
      <h3 for="textAreaRemark">بيانات الموقع </h3>

      <div class="row">
        <div class="col-md-4 form-group mt-3 mt-md-0">
            <br/>
            <input type="text" class="form-control" name="lastloc" id="Counter" placeholder=" اخر موقع عمل   " required>
          </div>
        <div class="form-group col-md-4">
           <label>  طبيعه الموقع </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد طبيعة الموقع -- </option>
               <option value="1">جبال </option>
               <option value="2">أبار</option>
               <option value="3">مزرعه </option>
               <option value="4">منجم </option>
               <option value="4">مواقع مفتوحه </option>
             </select>
           </div>
         </div>
   
         <div class="col-md-4 form-group mt-3 mt-md-0">
              <br/>
            <input type="text" class="form-control" name="city" id="city" placeholder="   اسم المنطقه   " required>
          </div>

          <div class="col-md-4 form-group mt-3 mt-md-0">
            <br/>
            <input type="text" class="form-control" name="city2" id="city2" placeholder="   اسم اقرب سوق   " required>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
              <label>  توفر الشبكة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد نوع الشبكة -- </option>
               <option value="1"> اتصال  </option>
               <option value="2"> واي فاي </option>
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
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>إيكيوبيشن </h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>رقم الهاتف:</strong> 6445<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4> القائمه</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">الرئيسية</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">من نحن</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#departments">الاقسام</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services"> مجالات عملنا </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#cleints"> عملاءنا</a></li>
            </ul>
          </div>



          <!-- <li><a class="nav-link scrollto" href="#doctors">المنتجات</a></li> -->




          
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>خدماتنا</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#doctors">المنتجات</a></li>
           
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
              <h1 class="logo me-auto"><a href="index.html"><img src="assets/img/logo.jpg" style="width: 280px;"></a></h1>

          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy;  <strong><span> شركة ايكيوبيشن </span>2023</strong>. كل الحقوق محفوظة
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
           تصميم <a href="#">SmartDev</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

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