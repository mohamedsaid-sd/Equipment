<!DOCTYPE html>
<html dir="rtl">

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
          <h2> طلب تشغيل  </h2>
         </div>
      </div>

  

      <div class="container">

       <form action="run_request.php" method="post" role="form">

        <div class="row mt-5">

          <h3> معلومات المالك </h3>

          <div class="col-md-4 form-group  mt-3 mt-md-0">
              <input type="text" name="name" class="form-control" placeholder="إسم طالب الخدمة رباعي" required>
          </div>

           <div class="col-md-4 form-group  mt-3 mt-md-0">
              <input type="text" name="name" class="form-control" placeholder="جنسية طالب الخدمة" required>
          </div>

           <div class="col-md-4 form-group  mt-3 mt-md-0">
              <input type="number" name="name" class="form-control" placeholder=" رقم إثبات الشخصية "> <font color="red"> * اختياري </font> 
          </div>

        </div>

        <div class="row">

          <div class="col-md-4 form-group">
              <input type="number" name="name" class="form-control" placeholder=" رقم الموبايل " required>
          </div>

          <div class="col-md-4 form-group  mt-3 mt-md-0">
              <input type="text" name="name" class="form-control" placeholder=" رقم الموبايل 2 "> <font color="red"> * اختياري </font> 
          </div>

          <div class="col-md-4 form-group">
              <input type="number" name="name" class="form-control" placeholder=" رقم الواتساب " required>
          </div>
          
        </div>

        <div class="row">

        <div class="col-md-4 form-group">
            <input type="email" name="name" class="form-control" placeholder=" البريد الالكتروني " required>
        </div>

        <div class="col-md-4 form-group">
            <input type="number" name="name" class="form-control" placeholder=" الرقم الضريبي ">  <font color="red"> * اختياري </font> 
        </div>

         <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" placeholder=" العنوان الدائم " required>
        </div>
          
        </div>

        <div class="row">

         <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" placeholder=" التزكية  " required>
        </div>

        <div class="col-md-4 form-group">
             <input type="text" name="name" class="form-control" placeholder=" رقم سجل العميل " required disabled>
        </div>

       <div class="col-md-4 form-group">
             <input type="text" name="name" class="form-control" placeholder=" الصفة  " required>
        </div>  
          
        </div>

        <div class="row mt-5">

          <h3> معلومات الآليات </h3>

          <div class="form-group col-md-4">
           <label> فئة الآلية </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد -- </option>
               <option> كمبروسرات هواء </option>
               <option> مولدات طاقة وتور لايتس </option>
               <option> مكنات لحام </option>
               <option> كرينات والروافع </option>
               <option> شاحنات ثقيلة </option>
               <option>  آليات الطرق والحفر </option>
               <option> آليات خطوط البترول </option>
               <option> آليات المقاولات المدنية </option>
               <option> آليات التعدين </option>
               <option> آليات زراعية </option>
               <option> مساكن وأصول متحركة </option>
               <option> مركبات متوسطة وخفيفة </option>
               <option> إدخال تصنيف جديد </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="" placeholder="التصنيف الجديد">

           
         </div>

         <div class="form-group col-md-4">
           <label> نوع الآلية (علي سبيل المثال لا الحصر) </label>
             <select class="form-control mr-1" id="ready" name="ready" required>
              <option value="" disabled selected> -- حدد -- </option>
              <option> كمبروسرات هواء </option>
              <option> مولدات هواء وتور لايتس</option>
              <option> مكينات لحام </option>
              <option> آليات الطرق والحفر </option>
             </select>

            <select class="form-control mr-1" id="ready" name="ready" required>
              <option value="" disabled selected> -- حدد -- </option>
              <option> حفار </option>
              <option> دوزر </option>
              <option> قريدر </option>
            </select>

            <select class="form-control mr-1" id="ready" name="ready" required>
              <option value="" disabled selected> -- حدد -- </option>
              <option> ثابت </option>
              <option> متحرك </option>
            </select>

            <select class="form-control mr-1" id="ready" name="ready" required>
              <option value="" disabled selected> -- حدد -- </option>
              <option> جاز </option>
              <option> كهرباء </option>
            </select>

            <select class="form-control mr-1" id="ready" name="ready" required>
              <option value="" disabled selected> -- حدد -- </option>
              <option> كاتم صوت </option>
              <option> مفتوح </option>
            </select>   

            <select class="form-control mr-1" id="ready" name="ready" required>
              <option value="" disabled selected> -- حدد -- </option>
              <option> منجزر  </option>
              <option> عجلات </option>
            </select>   
        </div>

          <div class="form-group col-md-4">
           <label>  ماركة الآلية </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد -- </option>
               <option> كات </option>
               <option> JCB </option>
               <option> Atlas Capco </option>
               <option> HYUNDAI </option>
               <option> DOOSAN </option>
               <option> إدخال ماركة جديدة </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="" placeholder=" إسم الماركة ">
         </div>

          <div class="form-group col-md-4">
           <label>  مقاس الآلية </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد -- </option>
               <option> 250 CFM (كمبروسسر) </option>
               <option> 2000 KVA (مولد) </option>
               <option> 220 (حفار) </option>
               <option> D9R (دوزر) </option>
               <option> 160أ (قريدر) </option>
               <option> إدخال مقاس جديد </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="" placeholder="  ادخل مقاس الآلية ">
         </div>

            <div class="form-group col-md-4">
           <label>  موديل الآلية </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد -- </option>
               <option> HX225 </option>
               <option> SD25 </option>
               <option> إدخال موديل جديد </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="" placeholder="  ادخل موديل الآلية ">
         </div>

         <div class="form-group col-md-4">
           <label>  سنة صنع الآلية </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد -- </option>
               <option> 2022 </option>
               <option> 2023 </option>
               <option> إدخال سنة صنع جديدة </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="" placeholder="  ادخل سنة صنع الآلية ">
         </div>

      </div>

      <div class="row">

          <div class="form-group col-md-4">
           <label>  قيمة الايجار الشهري </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد -- </option>
               <option>  جنيه سوداني </option>
               <option> دولار اجنبي </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="" placeholder="  ادخل قيمة الايجار ">
         </div>

          <div class="form-group col-md-4">
           <label>  تقييم الآلية </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد -- </option>
               <option> جيدة ( لم تتجاوز 500 ساعة او 1500 كلم) </option>
               <option> شبه جيدة  ( ما بين 501 ساعة حتي 1000 ساعة) </option>
               <option> متوسطة ( ما بين 1001 ساعة حتي 2500 ساعة ) </option>
               <option> مستهلكة ( فوق ال 2501 ساعة ) </option>
               <option> إدخال  قيد جديد </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="" placeholder="  ادخل سنة صنع الآلية ">
         </div>
        
      </div>





      <div class="row">

        <h3> قيود العقود :  </h3>

        <div class="form-group col-md-4">
          <label> المكان </label>
          <select class="form-control">
            <option value="" disabled selected> -- حدد -- </option>
            <option> لا يوجد قيود </option>
            <option> داخل السودان فقط </option>
            <option> كل ولايات السودان عدا ... </option>
            <option> ولاية محددة .... </option>
            <option> اضافة قيد مكان جديد </option>
          </select>
        <input type="text" class="form-control" placeholder="حدد الولاية">
        </div>

        <div class="form-group col-md-4">
          <label> المقدم </label>
          <select class="form-control">
            <option value="" disabled selected> -- حدد -- </option>
            <option> لا يشترط </option>
            <option> يشترط ( نسبة XX% من قيمة العقد ) </option>
            <option> يشترط كامل الايجار </option>
            <option> مؤخؤ ( لامانع بعد استلام الدفعيات ) </option>
            <option> اضافة شريط جديد </option>
          </select>
        <input type="text" class="form-control" placeholder="حدد الشرط">
        </div>

        <div class="form-group col-md-4">
          <label> جهه العمل </label>
          <select class="form-control">
            <option value="" disabled selected> -- حدد -- </option>
            <option> لا يوجد قيد </option>
            <option> شركات فقط </option>
            <option> مقاولات فقط </option>
            <option> اضافة قيد جديد </option>
          </select>
        <input type="text" class="form-control" placeholder="حدد القيد">
        </div>
        
      </div>

      <div class="row">
        <div class="form-group col-md-4">
          <label> العقودات  </label>
          <select class="form-control">
            <option value="" disabled selected> -- حدد -- </option>
            <option> لا يوجد قيد </option>
            <option> عقود طويلة (لا تقل عن 12 شهر) </option>
            <option> عقود متوسطة (لا تقل عن 3 شهور)  </option>
            <option> عقود قصيرة (لا تزيد عن شهر)  </option>
            <option> اضافة قيد جديد </option>
          </select>
        <input type="text" class="form-control" placeholder="حدد القيد">
        </div>

        <div class="form-group col-md-4">
          <label> المخالصات  </label>
          <select class="form-control">
            <option value="" disabled selected> -- حدد -- </option>
            <option> بالدلار </option>
            <option> بالجنيه السوداني</option>
            <option> إضافة قيد جديد </option>
          </select>
        <input type="text" class="form-control" placeholder="حدد القيد">
        </div>

        <div class="form-group col-md-4">
          <label> الصيانة  </label>
            <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد -- </option>
               <option> بواستطي </option>
               <option> بواستطة ايكيوبيشن مع خصم التكلفة الكاملة </option>
               <option> بواستطة ايكيوبيشن مع تحمل نسبة XX% فقط </option>
               <option> بواستطة ايكيوبيشن دون خصم اي تكاليف </option>
               <option> إضافة قيد جديد </option>
             </select>
        <input type="text" class="form-control" placeholder=" حدد القيد ">
        </div>

     </div>

      <div class="row">

         <div class="form-group col-md-4">
          <label> تعيين المشغلين  </label>
            <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد -- </option>
               <option> تعيين بواستطة ايكيوبيشن </option>
               <option> تعيين بواستطتي </option>
               <option> إضافة قيد جديد </option>
             </select>
        <input type="text" class="form-control" placeholder=" حدد القيد ">
        </div>

         <div class="form-group col-md-4">
           <label> التوفر  </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد -- </option>
               <option> عند الطلب المباشر </option>
               <option> عند الطلب قبل XX يوم علي الاقل </option>
               <option> إضافة قيد جديد </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="" placeholder="  قم بتحديد القيد ">
         </div>  

         <div class="form-group col-md-4">
           <label> التجهيزات الاخرى مثل ( التامين التتبع الزكاة الترحيل) </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد -- </option>
               <option> بواستطي </option>
               <option> بواستطة ايكيوبيشن مع خصم التكلفة الكاملة </option>
               <option> بواستطة ايكيوبيشن مع تحمل نسبة XX% فقط </option>
               <option> بواستطة ايكيوبيشن دون خصم اي تكاليف </option>
               <option> إضافة قيد جديد </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="" placeholder="  قم بتحديد القيد ">
         </div>        

          <div class="form-group col-md-4">
           <label> ساعات العمل </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="ready" required>
               <option value="" disabled selected> -- حدد -- </option>
               <option> دون اي قيود </option>
               <option> لا تتجاوز عدد XX ساعة باليوم </option>
               <option> إضافة قيد جديد </option>
             </select>
             </div>
             <input type="text" class="form-control
             " name="" placeholder="  قم بتحديد القيد ">
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