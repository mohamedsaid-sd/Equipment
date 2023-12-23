<!DOCTYPE html>
<html dir="ltr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Feedback   </title>
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
          <h2 style="width: 300px;"> Report or complaints  </h2>
         </div>
      </div>

  

      <div class="container">
        <div class="row mt-5">

   

          <div class="col-lg-12 mt-5 mt-lg-0">

            <form action="notofication_request.php" method="post" role="form">

               <div class="my-3">
                <div class="loading"></div>
                <div class="error-message"></div>
                <div class="sent-message">
                  <?php

                      // sending form :
                      if(isset($_POST['send_form'])){

                       // get the post form valuse 
                        // the department 
                        $department = $_POST['department'];
                        // the name of sender 
                        $name = $_POST['name'];
                        // the  Description
                        $note = $_POST['note'];
                        // the phone number 
                        $phone = $_POST['phone'];
                        // the email address
                        $email = $_POST['email'];
                        // the date 

                     //   echo $department."-".$name."-".$note."-".$phone."-".$email;

                     
                     $jayParsedAry = [
                      "params" => [
                            "args" => [
                               "vals_list" => [
                                  "name" =>  $name, 
                                  "requester_type" => "customer", 
                                  "request_method" => "Online Submission", 
                                  "reference" => "REF12345", 
                                  "department" => $department,
                                  "concerned" => "Issue regarding ...", 
                                  "note" => $note, 
                                  "category" => "argent", 
                                  "complaint_distribution" => "email", 
                                  "receive_date" => "2023-04-10", 
                                  "estimated_date" => "2023-04-20", 
                                  "procedures" => "Initial steps...", 
                                  "status" => "draft", 
                                  "closure_date" => null, 
                                  "recommendation" => "Initial recommendation", 
                                  "phone" => $phone, 
                                  "email" => $email 
                               ] 
                            ] 
                         ] 
                   ]; 


                   $done=json_encode($jayParsedAry);
//echo $done;
$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => 'https://equipation-equipation-odoo-com-stage-10590858.dev.odoo.com/apiV2/complaint.request/create',
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
                     <b> تم ارسال البلاغ  بنجاح يسعدنا دوما في شركة ايكيوبيشن استقبال بلاغاتكم طوال الوقت , سوف يقوم موظف شركة ايكيوبيشن بالرد عليك في اقرب وقت عن طريق رقم الهاتف او البريد الالكتروني المرسلين في الطلب ... شكرا لتفهمكم  </b> </div>";
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

                <h3 for="textAreaRemark"> Fill the forms  </h3>

              <div class="row">
                <div class="col-md-4 form-group">
              <label>  Department </label>
              <select class="form-control" name="department" id="department" required>
               <option value="" disabled selected> -- Selection -- </option>
               <option> Rental Department </option>
               <option> Deportation Department </option>
               <option> Employment Department </option>
               <option> Operation Department </option>
               <option> Maintenance Department </option>
               <option> Training Department </option>
               </select>   
              
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                      Name of sender  <br/>
                  <input name="name"  type="text" class="form-control" placeholder="Enter the name of sender" required>
                 </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                      Phone number  <br/>
                  <input name="phone"  type="number" class="form-control" placeholder="Enter the phone Number" required>

            
         
                </div>
               </div>

     <!-- Start Input Start Time -->
     <div class="row">
                 <div class="col-md-4 form-group mt-3 mt-md-0">
                Email address  <br/>
                  <input name="email"  type="email" class="form-control" placeholder="Enter  Email address" required>
                </div>

     <div class="col-md-12 form-group">
                   The Description   <br/>
                  <textarea name="note" class="form-control" placeholder=" The Description or the feedback " required></textarea>
              
              
      </div>

      </div>

      </div>


           

              <div class="text-center">  <br/><button type="submit" name="send_form"> إرسال الطلب </button></div>
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