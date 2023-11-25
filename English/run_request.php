<!DOCTYPE html>
<html dir="ltr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> طلب تشغيل  </title>
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
   function select_period(){
     var type = document.getElementById("period").value;
      if(type == "hand"){
      document.getElementById("periodhide").style.display = "block";
      }else{
      document.getElementById("periodhide").value = "";
      document.getElementById("periodhide").style.display = "none";
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
    <section class="contact">
      <div class="container">
      <br/>
        <div class="section-title">
          <h2>  CONTRACT REQUEST  </h2>
         </div>
      </div>

  

      <div class="container">
        <div class="row mt-5">

   
          <div class="col-lg-12 mt-5 mt-lg-0">

            <form action="run_request.php" method="post" role="form">

                <h3 for="textAreaRemark"> CONTRACT REQUIRMENT</h3>

              <div class="row">
                <div class="col-md-4 form-group">
                  <br/>
                  <input type="text" name="work_type" class="form-control" id="work_type" placeholder="  WORK TYPE " required>
                </div>

                <div class="col-md-4 form-group">
                DURATION <br/>
                  <select class="form-control mr-1" name="period" id="period" onchange="select_period();" required>
                    <option disabled selected value=""> --  choose  -- </option>
                    <option> month </option>
                    <option> 3 months </option>
                    <option> year </option>
                    <option value="hand"> manual entry </option>
                  </select>

                  <input id="periodhide" name="periodhide" type="text" class="form-control" placeholder="  manual entry " style="display: none;" >
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <br/>
                    <input type="text" class="form-control" name="chassis" id="chassis" placeholder="رقم الساشي  " required>
                  </div>

              </div>
     <!-- Start Input Start Time -->
     <div class="row">

     <div class="form-group col-md-4">
        <label>ساعات العمل </label>
        <div class="d-flex flex-row justify-content-between align-items-center">
          <select class="form-control mr-1" id="hour" name="hour" required>
            <option value="" disabled selected> -- حدد الساعات -- </option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="15">15</option>
            <option value="20">20</option>
          </select>
        
        </div>
      </div>

      <div class="form-group col-md-4">
        <label> مالكيه الاليه </label>
        <div class="d-flex flex-row justify-content-between align-items-center">
          <select class="form-control mr-1" id="owners" name="owners" required>
            <option value="" disabled selected> -- حدد الملكية -- </option>
            <option>مالك الاليه</option>
            <option>مستثمر</option>
            <option>وكيل</option>
          </select>
        
        </div>
      </div>



      <div class="form-group col-md-4">
        <label>  نوع التشغيل </label>
        <div class="d-flex flex-row justify-content-between align-items-center">
          <select class="form-control mr-1" id="Operatingtype" name="Operatingtype" required>
            <option value="" disabled selected> -- حدد نظام التشغيل -- </option>
            <option> ساعات</option>
            <option>انتاج</option>
            <option>الاثنين معا</option>
          </select>
        
        </div>
      </div>

      </div>


      <div class="row">
        <div class="col-md-4 form-group">
          <br/>
          <input type="text" name="location" class="form-control" id="location" placeholder="  موقع الاليه " required>
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <br/>
          <input type="text" class="form-control" name="counter" id="counter" placeholder="عداد الاليه   " required>
        </div>

        <div class="form-group col-md-4">
            <label for="inputDate">سنه الصنع</label>
            <input type="date" class="form-control" id="mdate" name="mdate" required/>
          </div>
      </div>

      <h3 for="textAreaRemark">بيانات الموقع </h3>

      <div class="row">
        
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <br/>
            <input type="text" class="form-control" name="lastloc" id="lastloc" placeholder=" اخر موقع عمل   " required>
          </div>

        <div class="form-group col-md-4">
           <label> جاهزيه الاليه </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد جاهزية الالية -- </option>
               <option>تيم للصيانه</option>
               <option>سائقين</option>
               <option>مشرف متابعه</option>
             </select>
           
           </div>
         </div>
   
         <div class="form-group col-md-4">
           <label>  مجالات العمل </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="workfields" name="workfields" required>
               <option value="" disabled selected> -- حدد مجال العمل -- </option>
               <option>التعدين </option>
               <option>الزراعه</option>
               <option>الاسمنت</option>
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
                <option value="person"> فرد </option>
                </select>  
                <input id="sidehide" type="text" class="form-control" placeholder=" ادخل اسم الشركة يدوي " style="display: none;" />
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <lable> هل  سبق لك العمل معنا </lable> 
                <select class="form-control mr-1" name="wwus" id="wwus" onchange="select_wwus();" required>
                <option value="" disabled selected> -- اختار الاجابة -- </option>
                <option value="yes"> نعم </option>
                <option value="no"> لا </option>
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


              
              <div class="my-3">
                
                <div class="error-message"></div>
                <div class="sent-message">

                  <?php

                  if(isset($_POST['send'])){
                        // نوع العمل 
                        $work_type = $_POST['work_type'];
                        // مدة العمل
                        $period    = $_POST['period'];
                        if($period == "hand"){
                          $period = $_POST['periodhide'];
                        }
                        // رقم الشاسي
                        $chassis = $_POST['chassis'];
                        // ساعات العمل 
                        $hour    = $_POST['hour'];
                        // ملكية الآلية
                        $owners  = $_POST['owners'];
                        // نوع التشغيل
                        $Operatingtype = $_POST['Operatingtype'];
                        //  موقع الآلية
                        $location    = $_POST['location'];
                        // عداد الآلية
                        $counter     = $_POST['counter'];
                        // سنه التصنيع
                        $mdate       = $_POST['mdate'];
                        // اخر موقع
                        $lastloc     = $_POST['lastloc'];
                        // جاهزية  الموقع
                        $ready       = $_POST['ready'];
                        // مجالات العمل
                        $workfields   = $_POST['workfields'];
                        // اسم العميل
                        $name        = $_POST['name'];
                        // البريد الالكتروني 
                        $email       = $_POST['email'];
                        // الوظيفة 
                        $job         = $_POST['job'];
                        // الجهه
                        $side        = $_POST['side'];
                        // العمل معنا 
                        $wwus        = $_POST['wwus'];

                        echo "<div class='alert alert-success'>";
                        echo $work_type ."-". $period ."-". $chassis ."-". $hour ."-". $owners ."-". $Operatingtype ."-". $location ."-". $counter ."-". $mdate  ."-". $lastloc ."-". $ready ."-". $workfields ."-". $name ."-". $email ."-". $job ."-". $side ."-". $wwus;
                        echo "</div>";
                  }
                   ?>

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